<?php
include_once 'aff.php';
?>

<!DOCTYPE html>
<html lang="<?= $language ?>">

<?php include 'head.php' ?>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container _container">
				<div class="header__body">
<a class="header__logo" href="<?=$language_suffix?>">
<span class="logo">{{site_name}}</span> 
</a> 
					<div class="header__main">
						<div class="menu" data-menu="main-menu">
							<nav class="menu__body" data-menu-container="main-menu" data-adapt="wrapper,1200">
								<ul class="menu__list">
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Domov</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Nástupiště</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Výhody</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Náš tým</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontaktujte nás</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrovat</a> 
							</div>
							<div class="header-actions__action">
<a class="header__login btn _icon-login" href="<?=$language_suffix?>sign-in.php">
</a>
							</div>
<div class="header-actions__action">
								<div class="language">
									<button class="language__btn btn btn_t" type="button" data-link="language__list"><?= $language ?></button>
									<ul class="language__list" data-language-list></ul>
								</div>
							</div>
						</div>
					</div>
<button class="menu-icon" type="button" data-menu-icon="main-menu">
</button>
				</div>
			</div>
		</header>

		<main class="page">

			<div class="page__inner page-inner page-inner_white">
				<div class="page-inner__content">
					<div class="inner-header__container _container-narrow">
						<div class="policy">
							<div class="policy__info">
								<h1 class="policy__title h2">Zásady ochrany osobních údajů</h1>
								<p class="policy__date">Poslední aktualizace: 30.9.22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>My (také známí jako „my“, „nás“ nebo „naše“) se zavazujeme chránit vaše osobní údaje i vaše soukromí.</p>
								<p>Tyto zásady ochrany osobních údajů byly navrženy tak, aby vás informovaly o způsobech, jakými shromažďujeme a ukládáme informace, které poskytnete prostřednictvím webových stránek {{site_name}} (dále jen „webová stránka“).</p>
								<p>Tyto zásady budou hájeny:</p>
								<ul>
									<li>Abychom byli transparentní ohledně zpracování a shromažďování osobních údajů o vás:</li>
								</ul>
								<p>Chtěli bychom, abyste byli schopni činit informovaná rozhodnutí týkající se používání a zpracování osobních údajů. To je důvod, proč jsme vytvořili naše webové stránky. Abychom toho dosáhli, používáme různé metody a postupy, abychom vám poskytli relevantní informace o používání osobních údajů.</p>
								<p>Pokud se domníváme, že potřebujete konkrétní podrobnosti, poskytneme vám informace v příslušném datu a čase.</p>
								<p>Rádi zodpovíme všechny vaše dotazy a poskytneme vám jakékoli vysvětlení, které požadujete s ohledem na všechna omezení uložená zákonem. Můžete nás kontaktovat prostřednictvím e-mailu na níže uvedené adrese: info@ {{site_name}} .com</p>
								<ul>
									<li>Osobní údaje budou použity pouze pro účely uvedené v zásadách.</li>
								</ul>
								<p>Osobní údaje můžeme zpracovávat pro řadu účelů, jako je nabídnout vám webové stránky a spojit vás s obchodními platformami třetích stran (dále jen „Služby“) a vylepšit stránky, chránit naše práva a zájmy, usnadnit údržbu a poskytování služeb, splnit jakékoli regulační nebo zákonné povinnosti a provádět administrativní a obchodní činnosti s cílem usnadnit poskytování a používání služeb.</p>
								<p>Osobní údaje zpracováváme také proto, abychom lépe porozuměli vašim preferencím a potřebám.</p>
								<ul>
									<li>Využití významných nástrojů k ochraně vašich práv ve vztahu k osobním údajům:</li>
								</ul>
								<p>Abychom vám umožnili uplatnění vašich práv, máme k dispozici značné zdroje. Kontaktujte nás kdykoli a požádejte o osobní údaje týkající se vašich osobních údajů. Upravíme nebo odstraníme, přestaneme je používat pro konkrétní účely nebo pro obecné účely. Předat informace vám nebo externí straně. Budeme schopni vyhovět vašim požadavkům.</p>
								<ul>
									<li>Zabezpečte své osobní údaje:</li>
								</ul>
								<p>I když nemůžeme zaručit úplnou bezpečnost vašich osobních údajů, můžeme zaručit, že budeme i nadále používat různé metody a techniky, abychom zajistili ochranu vašich osobních údajů.</p>
								<p>Naše zásady ochrany osobních údajů a zabezpečení jsou kompletní.</p>
								<h3>1. Rozsah?</h3>
								<p>Tato politika popisuje typ osobních údajů, které společnost shromažďuje o fyzických osobách a jak je zpracovává, sdílí s třetími stranami, zabezpečuje procesy atd.</p>
								<p>Tyto zásady se týkají informací, které se týkají identifikované nebo identifikovatelné fyzické osoby. Fyzickou osobu, která je identifikovatelná, lze definovat jako osobu, která je přímo identifikovatelná, nebo jako kombinace dalších informací, ke kterým máme nebo jsme schopni získat přístup.</p>
								<p>Zásady definují „zpracování“ jako proces, který vyžaduje použití nebo shromažďování osobních údajů. Zahrnuje správu, strukturování a ukládání osobních údajů.</p>
								<p>Naše služby jsou určeny k použití obecným publikem a nejsou určeny pro použití nikým mladším 18 let. Vědomě nehledáme ani neshromažďujeme informace od žádné osoby mladší 18 let Vědomě nedovolujeme těmto osobám používat naše služby. Pokud se o nich dozvíme, vymažeme všechny informace, které o dětech objevíme, co nejrychleji to půjde.</p>
								<h3>2. Jaké osobní údaje o vás máme?</h3>
								<p>Pokud přistupujete ke službě a kanálům nebo navštívíte naše webové stránky, shromažďujeme osobní údaje. V určitých případech můžeme požadovat vaše osobní údaje. V jiných případech shromažďujeme vaše osobní údaje analýzou a analýzou využívání našich služeb nebo našich kanálů služeb nebo přijímáním vašich informací od našich partnerů třetích stran.</p>
								<h3>3. Neexistuje žádný požadavek na sdělování osobních údajů společnosti a následků.</h3>
								<p>Nejste však povinni nám poskytnout žádné osobní údaje. Za určitých okolností nám však možná nebudete muset poskytnout žádné osobní údaje. To by nám mohlo bránit v nabízení služeb nebo bránit uživatelům v přístupu na web.</p>
								<h3>4. Jaké osobní údaje jsme schopni shromažďovat? Když navštívíte naše webové stránky, budeme shromažďovat následující vaše osobní údaje:</h3>
								<p>To zahrnuje informace o vašem protokolu aktivit online, údaje o vašem provozu (včetně IP adresy, data přístupu, času přístupu a data přístupu), jazyk, který jste použili, protokoly selhání softwaru, typ použitého prohlížeče a informace týkající se zařízení, které jste použili. Informace, které shromažďujete, nejsou soukromými informacemi a nelze je použít k vaší identifikaci.</p>
								<p>Osobní údaje, které od vás obdržíme: Veškeré osobní údaje, které nám poskytnete podle vlastního výběru, když se prostřednictvím nás spojíte s online obchodní platformou třetí strany.</p>
								<p>Osobní údaje, které poskytujete konkrétně platformám třetích stran za účelem usnadnění obchodování: tyto informace obsahují vaše úplné jméno, adresu, telefonní číslo a e-mailovou adresu.</p>
								<h3>5. Právní základ a důvody zpracování osobních údajů</h3>
								<p>Vaše osobní údaje jsou společností zpracovávány pro účely popsané v této části a v souladu s právním základem, který se na ni vztahuje.</p>
								<p>Bez právního základu není společnost schopna používat osobní údaje, které se vás týkají. Právní důvody, na kterých je společnost schopna zpracovávat osobní údaje, které se vás týkají:</p>
								<ul class="small">
									<li>Dali jste souhlas se zpracováním vašich osobních údajů z jednoho nebo různých důvodů. To je případ, kdy zadáte osobní údaje prostřednictvím webových stránek, abychom je mohli převést na obchodní platformu třetí strany.</li>
									<li>Společnost nebo třetí strana může vyžadovat zpracování, aby splnila svůj oprávněný zájem. Je třeba například zlepšit naše služby nebo hájit právní nároky.</li>
									<li>Zpracování musí splňovat zákonnou povinnost.</li>
								</ul>
								<p>Kontaktujte nás e-mailem pro více informací o zpracování nezbytném k ochraně oprávněných zájmů.</p>
								<p>Níže je uveden seznam důvodů a právních důvodů, proč můžeme použít informace, které nám poskytnete. Osobní údaje.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Rozsah</div>
										<div class="table-1__header-column">Právní základ</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>Poskytnutí vašich osobních údajů třetím stranám na vaši žádost o získání přístupu k digitálnímu obchodování</p>
												<p>Pokud o to požádáte, můžeme od vás požadovat osobní údaje, abychom je předali společnostem třetích stran.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Dali jste souhlas se zpracováním vašich osobních údajů z jednoho nebo více důvodů.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Pro zodpovězení vašich požadavků, otázek nebo obav jsou osobní údaje nezbytné, aby vám pomohly odpovědět na jakékoli dotazy týkající se služeb.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je třeba zpracovat oprávněné zájmy společnosti nebo zájmy třetí strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>Pro splnění jakékoli právní povinnosti nebo správní, soudní nebo právní nebo soudní osobní údaje jsou zpracovávány za účelem splnění zákonných požadavků.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Pro zajištění dodržování zákonných povinností je zpracování nutné.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>Pro vylepšení našich služeb můžeme osobní údaje používat k vylepšení našich služeb. To zahrnuje mimo jiné veškeré zprávy o haváriích nebo poruchách, které shromažďujeme v souvislosti se službami.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je třeba zpracovat oprávněné zájmy společnosti nebo zájmy třetí strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Zastavit podvody a zneužívání našich služeb</p>
											</div>
										</div>
										<div class="table-1__column">
Je třeba zpracovat oprávněné zájmy společnosti nebo zájmy třetí strany. 
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>K provádění a řízení činností, které jsou v souladu s požadavky našich služeb, zahrnují takové činnosti funkce back-office, aktivity rozvoje podnikání, strategické rozhodování, mechanismy dohledu atd.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je třeba zpracovat oprávněné zájmy společnosti nebo zájmy třetí strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>K provádění analýz, jako je statistická analýza k rozhodování o různých otázkách, používáme různé analytické techniky (včetně těch, které jsou statistické).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je třeba zpracovat oprávněné zájmy společnosti nebo zájmy třetí strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Za účelem ochrany našich aktiv, práv a zájmů, jakož i zájmů třetích stran, vyvinuli jsme HTML0 pro stanovení a obranu právních nároků Osobní údaje můžeme zpracovávat za účelem ochrany našich práv, zájmů a majetku nebo práv třetích stran v souladu s platnými zákony, nařízeními nebo dohodami a jakýmikoli podmínkami, podmínkami nebo zásadami.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je třeba zpracovat oprávněné zájmy společnosti nebo zájmy třetí strany.</p>
										</div>
									</div>
								</div>

								<h3>6. Předávání osobních údajů třetí straně</h3>
								<p>Společnost může také poskytovat osobní údaje společnostem třetích stran, které nám nabízejí služby, jako jsou informace o IP adrese poskytovatelů hostingu a úložiště, jakož i analýzu uživatelských zkušeností.</p>
								<p>Můžete nás také požádat o poskytnutí konkrétních osobních údajů, které se vás týkají, obchodním platformám třetích stran. Vaše osobní údaje, které nám poskytnete v těchto případech, poskytneme obchodním platformám třetích stran. Používání vašich osobních údajů podléhá jejich zásadám ochrany osobních údajů. Vaše osobní údaje mohou být sdíleny s více obchodními platformami.</p>
								<p>Společnost by mohla sdílet osobní údaje se spřízněnými subjekty nebo obchodními partnery. To může společnosti poskytnout zdroje potřebné k tomu, aby mohla vylepšovat a zlepšovat produkty a služby, které poskytuje svým zákazníkům.</p>
								<p>V případě potřeby ochrany práv třetích osob nebo majetku je Společnost oprávněna sdělovat osobní údaje regulačním, místním nebo jiným úředním orgánům.</p>
								<p>Můžeme také dále sdílet vaše osobní údaje s potenciálními investory nebo kupujícími nebo s věřiteli společnosti nebo jakékoli jiné společnosti ve skupině společností v případě, že dojde ke stejné transakci (včetně převodu nebo prodeje aktiv patřících společnosti nebo jakékoli jiné společnosti v rámci skupiny) nebo v rámci jakékoli fúze nebo restrukturalizace, konsolidace nebo úpadku společnosti nebo jakéhokoli jiného podnikání v rámci skupiny.</p>
								<h3>7. Soubory cookie a služby třetích stran</h3>
								<p>Mohou být využity služby třetích stran, jako jsou ty, které poskytují reklamy na našich webových stránkách nebo analytické společnosti. Tyto společnosti mohou také využívat cookies nebo jiné technologie.</p>
								<p>Soubory cookie jsou malé textové soubory, které jsou umístěny na vašem zařízení při každé návštěvě nebo přístupu na webové stránky. Soubory cookie se používají ke shromažďování informací o vašich preferencích a zvycích procházení, aby se zlepšila vaše uživatelská zkušenost, sledování vašich preferencí a přizpůsobení produktů a služeb, které by se vám mohly líbit. Soubory cookie se také používají pro statistiku a analýzu.</p>
								<p>Některé soubory cookie, které můžeme použít, jsou session cookies. Jsou dočasně staženy do vašeho zařízení a vydrží krátkou dobu před zavřením prohlížeče. Ostatní cookies jsou trvalé. Trvalé soubory cookie zůstávají ve vašem zařízení po určitou dobu poté, co zavřete prohlížeč. Používají se k tomu, aby pomohly webové stránce identifikovat vás jako vracejícího se uživatele a umožnily uživatelům vrátit se na web.</p>
								<h3>Druhy cookies:</h3>
								<p>Můžeme je používat na základě jejich účelu:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Druh souboru cookie</div>
											<div class="table-2__text">
												<p>Soubory cookie jsou naprosto nezbytné</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Rozsah</div>
											<div class="table-2__text">
												<p>Tyto soubory cookie jsou nezbytné pro přístup k funkcím, které jste požadovali, a abyste mohli procházet naše webové stránky. Soubory cookie se používají k poskytování informací, produktů a služeb, o které jste nás požádali.</p>
												<p>Jsou vyžadovány pro vaše zařízení ke stahování a streamování dat. To vám umožní procházet web, využívat jeho funkce, a pak se vrátit na stránky, na kterých jste dříve byli.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Doplňkové informace</div>
											<div class="table-2__text">
												<p>Soubory cookie shromažďují osobní údaje, jako je vaše uživatelské jméno, jakož i datum posledního přihlášení k potvrzení, že jste přihlášeni na web.</p>
												<p>Jsou vymazány, jakmile zavřete webový prohlížeč (session cookies).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Druh souboru cookie</div>
											<div class="table-2__text">
												<p>Funkční soubory cookie</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Rozsah</div>
											<div class="table-2__text">
												<p>Soubory cookie nám umožňují rozpoznat vás pokaždé, když navštívíte naše stránky, a také uložit vaše preference a preference.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Doplňkové informace</div>
											<div class="table-2__text">
												<p>Vydrží až do data vypršení platnosti a ukládají se i po zavření prohlížeče.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Druh souboru cookie</div>
											<div class="table-2__text">
												<p>Soubory cookie pro výkon</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Rozsah</div>
											<div class="table-2__text">
												<p>Soubory cookie se používají ke shromažďování statistických údajů o výkonu webu a také k jeho vylepšení. Umožňují nám také provádět analýzy na našich webových stránkách.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Doplňkové informace</div>
											<div class="table-2__text">
												<p>Soubory cookie ukládají anonymní data, která nejsou spojena s žádnou identifikovatelnou nebo identifikovanou fyzickou osobou.</p>
												<p>Mohou být odstraněny, když ukončíte prohlížeč. Ostatní cookies mají neurčitou platnost.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Cookies jsou blokovány nebo odstraněny</p>
								<p>Chcete-li zabránit nebo odstranit soubory cookie, musíte změnit nastavení prohlížeče. Níže jsou uvedeny odkazy, které vám pomohou s procesem pro několik nejznámějších prohlížečů.</p>
								<ul class="small">
									<li>Firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Mějte však na paměti, že některé nebo celé funkce a funkce webových stránek nemusí fungovat tak, jak očekáváte, pokud k tomu dojde.</p>
								<h3>UPOZORNĚNÍ NA SLEDOVÁNÍ ONLINE <br> Tato služba v současné době nepodporuje signály do not track. <br>8. Uchovávání osobních údajů o vás</h3>
								<p>Společnost si přeje uchovávat osobní údaje o vás tak dlouho, jak je to nezbytné pro splnění účelu zpracování osobních údajů, jak je popsáno v těchto zásadách, nebo po delší dobu, jak to povolují zákony nebo předpisy, zásady a příslušné objednávky.</p>
								<p>Vaše informace budeme sdílet s obchodními platformami třetích stran po dobu 12 měsíců. Pokud s tím souhlasíte, budeme vaše údaje sdílet dalších 12 měsíců.</p>
								<p>Pravidelně kontrolujeme osobní údaje, které jsme uchovávali, abychom zajistili, že již nejsou potřebné.</p>
								<h3>9. Předávání osobních údajů do třetí země nebo mezinárodní organizaci</h3>
								<p>Vaše osobní údaje mohou být předány do jiných zemí (tj. Vaše osobní údaje mohou být předány do třetí země (tj. do jiné země, než ve které máte bydliště) nebo mezinárodním organizacím. Mezinárodní organizace nebo jurisdikce. Společnost podniká všechny nezbytné kroky k ochraně osobních údajů, které poskytnete, a k zajištění toho, aby uživatelé údajů měli možnost uplatnit svá práva a získat přístup k právním zdrojům, které jsou účinné.</p>
								<p>Tyto ochrany a záruky jsou přístupné všem osobám, které mají bydliště v EHP (Evropský hospodářský prostor).</p>
								<ul class="small">
									<li>Předání do země třetí země nebo mezinárodní organizaci, o níž Komise EU určila, poskytuje odpovídající zabezpečení osobních údajů, které jí byly předávány v souladu s čl. 45 odst. 3 nařízení Evropského parlamentu a Rady 2016/679 ze dne 27. dubna 2016. (dále jen „GDPR“)</li>
									<li>Převod se provádí na základě právně závazné a právně závazné, vymahatelné dohody mezi veřejnými subjekty nebo orgány podle čl. 46 odst. 2 písm. a).</li>
									<li>Přenos byl proveden v souladu se společnými doložkami o ochraně údajů, které byly přijaty Evropskou komisí podle čl. 46 odst. 2 písm. c) GDPR. Doložky přijaté Komisí EU jsou k dispozici na adrese https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>Společnost může poskytnout informace o bezpečnostních opatřeních, která používá k ochraně vašich osobních údajů, které jsou předávány třetím zemím nebo mezinárodním organizacím. Zašlete e-mail na následující adresu info@wealthwaydigital.uk</p>
								<h3>10. Zabezpečení osobních údajů</h3>
								<p>Přijali jsme vhodná organizační a technická opatření k ochraně osobních údajů. To zahrnuje prevenci náhodného nebo nezákonného zničení, ztráty nebo úpravy osobních údajů.</p>
								<p>Nemůžeme zaručit ani zaručit, že bezpečnost vašich osobních údajů bude zachována bezchybně. Nemůžeme také nést odpovědnost za žádné nehmotné, náhodné nebo následné škody vyplývající z použití nebo zveřejnění osobních údajů. To však zahrnuje, není omezeno na žádné osobní údaje, které jsou zveřejněny v důsledku chyb při přenosu, neoprávněného přístupu třetí strany nebo jakékoli jiné příčiny mimo naši kontrolu.</p>
								<p>V případě zákonných povinností nebo jiných povinností, které jsou mimo naši kontrolu, můžeme být povinni poskytnout osobní údaje, které se vás týkají, třetím stranám, jako jsou orgány veřejné moci. V těchto situacích nemůžeme kontrolovat bezpečnost vašich osobních údajů třetími stranami.</p>
								<p>Osobní údaje nelze přenášet přes web zcela bezpečným způsobem. Společnost nemůže zajistit bezpečnost osobních údajů, které nám předáváte prostřednictvím internetu.</p>
								<h3>11. Hypertextové odkazy na webové stránky patřící webovým stránkám třetích stran</h3>
								<p>Odkazy na stránky a aplikace třetích stran jsou uvedeny na webových stránkách. Tyto aplikace a webové stránky nejsou pod dohledem společnosti. Nejsme zodpovědní za shromažďování nebo zpracování osobních údajů těmito webovými stránkami nebo aplikacemi. Tyto zásady se nevztahují na akce prováděné prostřednictvím těchto webů nebo aplikací.</p>
								<p>Když navštívíte některý z webů nebo aplikací třetích stran, doporučujeme vám přečíst si jejich zásady ochrany osobních údajů, než se rozhodnete pro přístup k jejich aplikacím nebo je používat. Doporučujeme také, abyste jim poskytli jakékoli osobní údaje.</p>
								<h3>12. Změny těchto zásad</h3>
								<p>Tyto zásady se mohou kdykoli změnit. Pokud změníme tyto zásady, budeme vás o změnách informovat zveřejněním aktualizovaných zásad na našich webových stránkách. Kromě toho, když provedeme významné změny těchto zásad, pokusíme se vás informovat pomocí metod, které považujeme za vhodné, a zveřejníme oznámení na našich webových stránkách. Jakékoli změny, pokud nejsou výslovně stanoveny, vstoupí v platnost po zveřejnění revidovaných zásad.</p>
								<h3>13. Vaše práva ve vztahu k vašim osobním údajům</h3>
								<p>Máte právo požadovat, abychom ověřili správnost shromažďovaných osobních údajů o vás, napravili případné chyby a vymazali všechny osobní údaje, které nepožadujeme. Můžete také omezit rozsah typů zpracování osobních údajů.</p>
								<p>Pokud jste rezidentem EHP, podívejte se na tuto stránku:</p>
								<p>Tato práva jsou vám přístupná s ohledem na informace, které poskytnete v souvislosti s vašimi osobními údaji. Můžete požádat o uplatnění práv, která máte, napsáním e-mailu na níže uvedenou adresu.</p>
								<p>Přístupová práva</p>
								<p>Společnost je schopna ověřit správnost zpracovávaných osobních údajů. Pokud jsou, máte přístup ke svým osobním údajům.</p>
								<p>Společnost chce poskytnout elektronickou kopii osobních údajů, které jsou v současné době zpracovávány, a za případné další kopie může účtovat přiměřený poplatek. Údaje budou zpřístupněny elektronicky, pokud o ně požádáte.</p>
								<p>Právo na přístup k osobním údajům nesmí být v rozporu s právy a svobodami jiných osob. Pokud žádost poškozuje práva a svobody jiného nebo jejich práva, může společnost odmítnout vyhovět žádosti nebo omezit svou schopnost ji splnit.</p>
								<p>Právo na opravu</p>
								<p>Společnost je oprávněna opravit nepřesné osobní údaje. Máte právo požadovat opravu jakýchkoli nedostatečných osobních údajů, které se vás týkají, s přihlédnutím k důvodu zpracování.</p>
								<p>Právo na výmaz</p>
								<p>Platí následující důvody: (a) Osobní údaje již nejsou potřebné pro účel, pro který byly shromážděny nebo zpracovávány; (b) Odvoláte souhlas a neexistuje žádný právní základ pro zpracování; (c) z důvodu specifického pro vaši situaci kdykoli vznášíte námitku proti tomu, aby zpracování osobních údajů o vás bylo založeno na oprávněných zájmech sledovaných námi nebo třetí stranou; (e) Osobní údaje jsou zpracovávány protiprávně nebo f) Osobní údaje musí být odstraněny, aby byla splněna zákonná povinnost společnosti.</p>
								<p>Toto právo není použitelné v případě, že je zpracování nezbytné (a) ke splnění povinnosti uložené zákonem, která je vyžadována podle práva Evropské unie nebo práva členského státu; nebo (b) k vytvoření, výkonu nebo obraně zákonných práv.</p>
								<p>Omezení zpracování</p>
								<p>Máte-li obavy ohledně přesnosti vašich osobních údajů, můžete požádat společnost o omezení zpracování vašich osobních údajů.</p>
								<p>Pokud požádáte o omezení osobních údajů, mohou být osobní údaje uchovávány pouze v případě, že dáte souhlas nebo za účelem vytvoření, výkonu nebo obrany zákonných práv nebo na obranu práv jiné fyzické osoby, nebo v případě důvodu, který je významný veřejný zájem v Evropské unii nebo členském státě.</p>
								<p>Právo na přenositelnost údajů</p>
								<p>Pokud je proces prováděn automatizovaným systémem a je založen na souhlasu nebo smlouvě, že jste zapojeni do smlouvy, máte zákonné právo a právo zkontrolovat své osobní údaje, které jste společnosti poskytli.</p>
								<p>Pokud je to technicky proveditelné, máte právo požadovat, aby vaše osobní údaje byly předány přímo ze společnosti jinému správci. Práva, která máte na základě práva na výmaz, se nemění z důvodu výkonu vašeho práva na přenositelnost údajů. Právo na přenos dat nezasahuje do práv nebo svobod kohokoli jiného.</p>
								<p>Právo napadnout</p>
								<p>Právo vznést námitku proti jakémukoli použití osobních údajů, které se vás týkají, které je založeno na oprávněných zájmech sledovaných společností nebo třetí stranou, je kdykoli k dispozici. To se neomezuje pouze na profilování pouze na základě těchto oprávněných zájmů. Pokud budeme schopni prokázat závažné oprávněné důvody pro zpracování osobních údajů, nebudeme v tom moci pokračovat, pokud nebudete moci prokázat, že převažují nad vašimi právy, svobodami nebo zájmy, nebo výkon, stanovení nebo obhajobu zákonných práv.</p>
								<p>Pokud jde o přímý marketing, máte právo kdykoli vznést námitku proti zpracování osobních údajů, které se vás týkají.</p>
								<p>Právo odmítnout souhlas</p>
								<p>Svůj souhlas se zpracováním vašich osobních údajů můžete kdykoli odvolat. Tím se nezmění zákonnost a zákonnost jakéhokoli zpracování, které bylo závislé na vašem souhlasu před odstraněním.</p>
								<p>Máte právo podat stížnost u orgánu, který na vás dohlíží.</p>
								<p>Můžete podat odvolání k dozorovému úřadu zřízenému členským státem za účelem ochrany základních práv fyzických osob v souvislosti se zpracováním osobních údajů v Evropské unii.</p>
								<p>Právní předpisy Evropské unie a členských států mohou omezit vaše práva ve vztahu k osobním údajům, které se vás týkají, jak je podrobně uvedeno v tomto oddíle 13.</p>
								<p>Požadované informace vám poskytneme v souladu s právy, která máte v části 13 této smlouvy, do jednoho měsíce od obdržení vaší žádosti. Časový rámec může být prodloužen až na dva měsíce, v případě potřeby v závislosti na povaze žádosti a množství žádostí. Do jednoho měsíce od obdržení vaší žádosti vás budeme informovat o jakémkoli prodloužení a důvodech.</p>
								<p>Pokud to není v rozporu s ustanoveními § 13 zákona, informace, které požadujete v souladu s vašimi právy podle § 13, budou poskytnuty bezplatně. Pokud žádost není oprávněná nebo nadměrná, zejména pokud se opakuje, můžeme účtovat přiměřenou částku na pokrytí administrativních výdajů za poskytnutí informací nebo oznámení požadované akce. Nemusíme také jednat.</p>
								<p>Pokud máme pochybnosti o totožnosti skutečné osoby, která podala vaši žádost Pokud máme pochybnosti o totožnosti osoby, která žádost podává, společnost může požádat o další informace.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<?php include 'footer.php' ?>
	</div>




<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
</button>

<?php include 'scripts.php' ?>


</body>

</html>
<?php include 'ywbp.php'; ?>