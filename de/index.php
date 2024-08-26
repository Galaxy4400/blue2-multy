<?php
include_once 'aff.php';
include_once $dir_prefix . 'reg/click.php';
$subid = fetchSubId($token);
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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Home</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Produkt</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Angebot</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Unser Team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Ansprechpartner</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Anmeldung</a>
							</div>
							<div class="header-actions__action">
								<a class="header__login btn _icon-login" href="<?=$language_suffix?>sign-in.php"></a>
							</div>
<div class="header-actions__action">
								<div class="language">
									<button class="language__btn btn btn_t" type="button" data-link="language__list"><?= $language ?></button>
									<ul class="language__list" data-language-list></ul>
								</div>
							</div>
						</div>
					</div>
					<button class="menu-icon" type="button" data-menu-icon="main-menu"></button>
				</div>
			</div>
		</header>
		
		<main class="page">

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">Willkommen bei {{site_name}} schwei!</h2>
								<p class="main-form__text">Erleben Sie mit unserer revolutionären Krypto-Handelsplattform eine neue Ära des Tradings. Mit der fortschrittlichen AI-Technologie von {{site_name}} maximieren Sie Ihre Gewinne und treffen fundierte Entscheidungen.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="deco">
							</figure>
						</div>
						<div class="main-form__column main-form__column_form">
							<?php include 'forms/main.php' ?>
						</div>
					</div>
				</div>
			</section>

			<div class="block-2">
				<div class="block-2__container _container">
					<div class="block-2__slider block-2-slider">
						<div class="block-2-slider__slides">
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">65+</p>
									<p class="block-2-slider-slide__desc">Verfügbare Währungen</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Überprüfte Benutzer</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 m</p>
									<p class="block-2-slider-slide__desc">Handelsvolumen</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98 +</p>
									<p class="block-2-slider-slide__desc">Unterstützte Länder</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="block-1">
				<div class="block-1__container _container">
					<div class="block-1__body">
						<div class="block-1__column block-1__column_left">
							<h1 class="block-1__title">Über {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Erleben Sie mit unserer revolutionären Krypto-Handelsplattform eine neue Ära des Tradings. Mit der fortschrittlichen AI-Technologie von {{site_name}} maximieren Sie Ihre Gewinne und treffen fundierte Entscheidungen.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Mehr lesen</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Warum {{site_name}} wählen?</h2>
								<p class="block-3__desc">{{site_name}} ist die bevorzugte Wahl für Kryptotrader in der Schweiz. Von Sicherheit und Transparenz bis hin zu leistungsstarken Algorithmen und einer benutzerfreundlichen Oberfläche bieten wir alles, was für erfolgreiches Trading erforderlich ist.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Sicherheit</h4>
											<p class="block-3-slide__text">Höchste Standards für Daten-und Investitionsschutz.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalisierung</h4>
											<p class="block-3-slide__text">Personalisierung der Handelsstrategien nach Ihren Präferenzen.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Risikofreies Demo</h4>
											<p class="block-3-slide__text">Praxiserfahrung sammeln, ohne echtes Kapital einzusetzen.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI-Strategien</h4>
											<p class="block-3-slide__text">Präzise Handelssignale für erfolgreiche Entscheidungen.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatisierter Handel</h4>
											<p class="block-3-slide__text">Effiziente, gewinnorientierte Trades durch KI-Bots.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Benutzerfreundliche Schnittstelle</h4>
											<p class="block-3-slide__text">Intuitiv für alle Benutzer, macht den Einstieg in den Handel leicht.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revolutionieren Sie die Finanzwelt mit {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Anmeldung</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="image">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-10">
				<div class="block-10__container _container">
					<div class="block-10__body">
						<div class="block-10__column">
							<div class="block-10__content">
								<h2 class="block-10__title">Effizienter Handel!</h2>
								<div class="block-10__desc"><p>Handeln Sie einfach und sicher und erzielen Sie Gewinne! Erkunden Sie verschiedene Kryptowährungen wie Bitcoin, Ethereum und Dogecoin.</p></div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Anmeldung</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="figure"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Unsere Partner</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="partner"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Wie fange ich mit {{site_name}} ™ an?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Erfahren Sie, wie einfach es ist, mit {{site_name}} in den Krypto-Handel einzusteigen. Von der Registrierung bis zur ersten Einzahlung führen wir Sie Schritt für Schritt durch den Prozess.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Registrieren Sie sich</h3>
							<p class="block-9-item__text">Registrieren Sie sich einfach online, geben Sie Ihre persönlichen Daten ein und erhalten Sie sicheren Zugang zu {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Bestätigen Sie</h3>
							<p class="block-9-item__text">Sobald Sie Ihre Bestätigungs-E-Mail erhalten haben, können Sie sofort mit dem Handel beginnen.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Ein Konto eröffnen</h3>
							<p class="block-9-item__text">Sie können Ihr Handelskonto bereits mit einer Einzahlung von 250 CHF eröffnen. Aber Vorsicht: Größere Investitionen bedeuten höhere Gewinnchancen, aber auch Verlustrisiken. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Zahlen Sie Geld auf Ihr Konto ein</h3>
							<p class="block-9-item__text">Überweisung, E-Wallet oder Kreditkarte - Sie haben die Wahl.*</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Passen Sie Ihr Konto an</h3>
							<p class="block-9-item__text">Passen Sie Ihr Konto an Ihre Bedürfnisse an. Bestimmen Sie Ihre Risikobereitschaft, legen Sie Handelsziele fest und bestimmen Sie Ihre Parameter für den Handel mit Kryptowährungen. Unsere erfahrenen Schweizer Broker sind bereit, Ihnen bei Ihren ersten Schritten zu helfen - automatisiert oder manuell - es liegt alles in Ihren Händen.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Beginnen Sie Ihre Handelsreise</h3>
							<p class="block-9-item__text">Jetzt können Sie loslegen. {{site_name}}™ ist Ihr Schlüssel zum Erfolg auf dem Kryptowährungsmarkt. Starten Sie jetzt Ihre Handelsreise und nutzen Sie die Chancen in der Welt der digitalen Währungen!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Anmeldung</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">*{{site_name}}™ bietet weltweit mehrere Zahlungsmethoden an.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="card">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="card">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="card">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="card">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ Bewertungen</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Eine fantastische Handelsplattform ist {{site_name}}! Einfache Registrierung, transparente Gebühren und professioneller Support machen den Handel reibungslos und erfolgreich. Ich bin äußerst zufrieden und empfehle sie allen Händlern!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dank {{site_name}} habe ich mühelos mit dem Handel von Kryptowährungen begonnen. Einfache Registrierung, großartiger Support und faire Gebühren. Die Plattform gibt mir ein sicheres und professionelles Gefühl!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} ist ein zuverlässiger Partner in der Welt des Krypto-Handels. Einfache Registrierung, klare Bedingungen und kompetenter Support. Der Handel auf dieser Plattform ist ein Vergnügen!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dank {{site_name}} habe ich den Einstieg in den Krypto-Handel mühelos gemeistert! Die Anmeldung war super einfach, und die transparenten Gebühren sind ein echter Pluspunkt. Als Händler fühle ich mich auf dieser Plattform sehr wohl und professionell unterstützt.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurt</p>
								</div>
							</div>
						</div>
						<div class="quotes-slider__pagination quotes-slider-pagination">
							<div class="quotes-slider-pagination__body"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="faq">
				<div class="faq__container _container">
					<h2 class="faq__title">FAQ</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Wie verwende ich {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple"></span>
							</button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sind Sie bereit, in der Schweiz das Krypto-Abenteuer zu starten? Mit {{site_name}} ist das ein Klacks! Einfach online anmelden, Geld einzahlen und schon können Sie loslegen. Ob Sie nun ein Krypto-Crack oder ein Neuling sind, {{site_name}} macht's einfach: individuelle Einstellungen, intuitive Dashboards, manueller oder automatisierter Handel – hier sind Sie der Boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Was ist die Mindestinvestition für {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple"></span>
							</button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sind Sie bereit, in der Schweiz das Krypto-Abenteuer zu starten? Mit {{site_name}} ist das ein Klacks! Einfach online anmelden, Geld einzahlen und schon können Sie loslegen. Ob Sie nun ein Krypto-Crack oder ein Neuling sind, {{site_name}} macht's einfach: individuelle Einstellungen, intuitive Dashboards, manueller oder automatisierter Handel – hier sind Sie der Boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Welche Märkte werden von {{site_name}} unterstützt?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple"></span>
							</button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sind Sie bereit, in der Schweiz das Krypto-Abenteuer zu starten? Mit {{site_name}} ist das ein Klacks! Einfach online anmelden, Geld einzahlen und schon können Sie loslegen. Ob Sie nun ein Krypto-Crack oder ein Neuling sind, {{site_name}} macht's einfach: individuelle Einstellungen, intuitive Dashboards, manueller oder automatisierter Handel – hier sind Sie der Boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Wie ziehen Sie Geld von {{site_name}} ab?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple"></span>
							</button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sind Sie bereit, in der Schweiz das Krypto-Abenteuer zu starten? Mit {{site_name}} ist das ein Klacks! Einfach online anmelden, Geld einzahlen und schon können Sie loslegen. Ob Sie nun ein Krypto-Crack oder ein Neuling sind, {{site_name}} macht's einfach: individuelle Einstellungen, intuitive Dashboards, manueller oder automatisierter Handel – hier sind Sie der Boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Wie funktioniert die {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple"></span>
							</button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sind Sie bereit, in der Schweiz das Krypto-Abenteuer zu starten? Mit {{site_name}} ist das ein Klacks! Einfach online anmelden, Geld einzahlen und schon können Sie loslegen. Ob Sie nun ein Krypto-Crack oder ein Neuling sind, {{site_name}} macht's einfach: individuelle Einstellungen, intuitive Dashboards, manueller oder automatisierter Handel – hier sind Sie der Boss!</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">Dies ist der Handel mit {{site_name}}™</h2>
								<p class="main-form__text">Wir sind der vertrauenswürdigste Ort für Privatpersonen und Unternehmen, um Krypto zu kaufen, zu verkaufen und zu verwalten.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="deco">
							</figure>
						</div>
						<div class="main-form__column main-form__column_form">
							<?php include 'forms/main.php' ?>
						</div>
					</div>
				</div>
			</section>

			<section class="block-13">
				<div class="block-13__container _container">
					<h2 class="block-13__title">Highlights von {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Plattformtyp</dt>
							<dd class="block-13-list__value">Handelssystem für Kryptowährungen mit künstlicher Intelligenz(Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Anlagemittel</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash und verschiedene andere beliebte Kryptowährungen</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Datenschutz</dt>
							<dd class="block-13-list__value">Ja, der Datenschutz im Einklang der Schweizer Datenschutzrichtlinie ist gegeben</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Kosten</dt>
							<dd class="block-13-list__value">{{site_name}} Schweiz ist kostenfrei nutzbar</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Einzahlungsoptionen</dt>
							<dd class="block-13-list__value">Kreditkarte, PayPal und direkte Banküberweisung</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Länder</dt>
							<dd class="block-13-list__value">Weltweiter Zugriff ist gegeben</dd>
						</div>
					</dl>
				</div>
			</section>

		</main>
		
		<?php include 'footer.php' ?>
	</div>




	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper"></button>
	
	
<?php include 'scripts.php' ?>

	
</body>

</html>
<?php include 'ywbp.php'; ?>
