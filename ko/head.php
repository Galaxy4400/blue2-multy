<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="isoCode" content="{{country}}">
	<meta name="description" content="{{site_name}} {{country_name}} - Your go-to digital trading platform for seamless, secure, and swift financial transactions. Start trading now!">
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="{{site_name}} {{country_name}} - Your go-to digital trading platform for seamless, secure, and swift financial transactions. Start trading now!" />
	<meta name="twitter:title" content="{{site_name}} {{country_name}}™ - The official website【UPDATED 2024】" />
	<meta content="" name="keywords" />
	<meta content="https://{{domain}}" name="twitter:site" />
	<meta content="https://{{domain}}/assets/logo-400.jpg" name="twitter:image" />
	<meta property="og:locale" content="en" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{{site_name}} {{country_name}}™ - The official website【UPDATED 2024】" />
	<meta property="og:description" content="{{site_name}} {{country_name}} - Your go-to digital trading platform for seamless, secure, and swift financial transactions. Start trading now!" />
	<meta property="og:site_name" content="{{site_name}}" />
	<meta content="https://{{domain}}" property="og:url" />
	<meta content="https://{{domain}}" property="og:site_name" />
	<meta content="https://{{domain}}" property="og:image" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="400" />
	<meta property="og:image:alt" content="{{site_name}}" />
	<link href="https://{{domain}}" rel="canonical" />
	<link href="https://{{domain}}/{{page_name}}" hreflang="{{ language }}-{{ country }}" rel="alternate" />
	<link rel="shortcut icon" href="<?=$dir_prefix?>assets/img/favicon.png">
	<link rel="icon" href="<?=$dir_prefix?>assets/img/favicon.png">
	<link rel="stylesheet" href="<?=$dir_prefix?>assets/css/style.css">

	<script>
		const COUNTRY = '<?= $country ?>';
		const LANGUAGE = '<?= $language ?>';
		const DP = '<?= $dir_prefix ?>';
	</script>

	<script type="application/ld+json">{{faq_json}}</script>
</head>