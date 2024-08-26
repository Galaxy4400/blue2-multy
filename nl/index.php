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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Voordelen</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Ons team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Neem contact met ons op</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registreren</a>
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

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">Welkom bij {{site_name}} swear!</h2>
								<p class="main-form__text">Beleef een nieuw tijdperk van handelen met ons revolutionaire cryptohandelplatform. Met de geavanceerde AI-technologie van {{site_name}} kunt u uw winst maximaliseren en weloverwogen beslissingen nemen.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Deco">
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
									<p class="block-2-slider-slide__desc">Valuta beschikbaar</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Geverifieerde</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 miljoen</p>
									<p class="block-2-slider-slide__desc">Handelsvolume</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Ondersteunde landen</p>
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
							<h1 class="block-1__title">Over {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Beleef een nieuw tijdperk van handelen met ons revolutionaire cryptohandelplatform. Met de geavanceerde AI-technologie van {{site_name}} kunt u uw winst maximaliseren en weloverwogen beslissingen nemen.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Lees meer</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Waarom kiezen voor {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} is de voorkeurskeuze voor cryptohandelaren in Zwitserland. Van beveiliging en transparantie tot krachtige algoritmen en een gebruiksvriendelijke interface, wij bieden alles wat u nodig hebt voor succesvol handelen.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="beeld">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Zekerheid</h4>
											<p class="block-3-slide__text">Hoogste normen voor gegevens- en investeringsbescherming.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="beeld">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalisatie</h4>
											<p class="block-3-slide__text">Personaliseer handelsstrategieën volgens uw voorkeuren.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="beeld">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Risicovrije demo</h4>
											<p class="block-3-slide__text">Doe praktijkervaring op zonder echt kapitaal te gebruiken.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="beeld">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI-strategieën</h4>
											<p class="block-3-slide__text">Nauwkeurige handelssignalen voor succesvolle beslissingen.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="beeld">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Geautomatiseerde handel</h4>
											<p class="block-3-slide__text">Efficiënte, winstgerichte transacties met behulp van AI-bots.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="beeld">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Gebruiksvriendelijke interface</h4>
											<p class="block-3-slide__text">Intuïtief voor alle gebruikers, maakt het gemakkelijk om te beginnen met handelen.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Breng een revolutie teweeg in de financiële wereld met {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Inschrijven</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="beeld">
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
								<h2 class="block-10__title">Efficiënt handelen!</h2>
								<div class="block-10__desc">
									<p>Handel gemakkelijk en veilig en maak winst! Ontdek verschillende cryptocurrencies zoals Bitcoin, Ethereum en Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Inschrijven</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Figuur"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Onze partners</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Partner"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Hoe ga ik aan de slag met {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Ontdek hoe eenvoudig het is om te beginnen met cryptohandel met {{site_name}}. Van registratie tot je eerste storting begeleiden we je stap voor stap door het proces.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Meld je aan</h3>
							<p class="block-9-item__text">Registreer u eenvoudig online, vul uw persoonlijke gegevens in en krijg veilige toegang tot {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Valideren</h3>
							<p class="block-9-item__text">Zodra u uw bevestigingsmail hebt ontvangen, kunt u meteen beginnen met handelen.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Open een account</h3>
							<p class="block-9-item__text">U kunt uw handelsaccount openen met slechts een storting van 250 CHF. Maar wees voorzichtig: grotere investeringen betekenen hogere winstkansen, maar ook risico&#39;s op verlies. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Stort geld op je account</h3>
							<p class="block-9-item__text">Bankoverschrijving, e-wallet of creditcard — de keuze is aan jou. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Pas je account aan</h3>
							<p class="block-9-item__text">Pas uw account aan uw behoeften aan Bepaal uw risicobereidheid, stel handelsdoelen vast en bepaal uw parameters voor de handel in cryptocurrencies. Onze ervaren Zwitserse makelaars staan klaar om u te helpen uw eerste stappen te zetten — geautomatiseerd of handmatig — het ligt allemaal in uw handen.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Begin uw handelsreis</h3>
							<p class="block-9-item__text">Nu ben je klaar om te gaan. {{site_name}}™ is jouw sleutel tot succes op de markt voor cryptocurrency. Begin uw handelsreis nu en profiteer van de kansen in de wereld van digitale valuta!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Inschrijven</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ biedt wereldwijd meerdere betaalmethoden.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="kaart">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="kaart">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="kaart">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="kaart">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ beoordelingen</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Een fantastisch handelsplatform is {{site_name}}! Eenvoudige registratie, transparante tarieven en professionele ondersteuning maken de handel soepel en succesvol. Ik ben uiterst tevreden en raad ze alle retailers aan!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="persoon"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dankzij {{site_name}} ben ik gemakkelijk begonnen met het verhandelen van cryptocurrencies. Eenvoudige registratie, geweldige ondersteuning en eerlijke tarieven. Het platform geeft me een veilig en professioneel gevoel!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="persoon"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} is een betrouwbare partner in de cryptohandelswereld. Eenvoudige registratie, duidelijke voorwaarden en deskundige ondersteuning. Handelen op dit platform is een plezier!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="persoon"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlijn</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dankzij {{site_name}} heb ik het moeiteloos onder de knie gekregen om met cryptohandel te beginnen! Aanmelden was supereenvoudig, en de transparante kosten zijn echt een pluspunt. Als handelaar voel ik me erg op mijn gemak en professioneel ondersteund op dit platform.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="persoon"></figure>
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
								<span class="faq-spoiler__control-text">Hoe gebruik ik {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klaar om je crypto-avontuur in Zwitserland te beginnen? Met {{site_name}} is het een fluitje van een cent! Meld je gewoon online aan, stort geld en je bent klaar om te gaan. Of je nu een cryptocrack bent of een nieuweling, {{site_name}} maakt het eenvoudig: individuele instellingen, intuïtieve dashboards, handmatige of geautomatiseerde handel — hier ben jij de baas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Wat is de minimale investering voor {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klaar om je crypto-avontuur in Zwitserland te beginnen? Met {{site_name}} is het een fluitje van een cent! Meld je gewoon online aan, stort geld en je bent klaar om te gaan. Of je nu een cryptocrack bent of een nieuweling, {{site_name}} maakt het eenvoudig: individuele instellingen, intuïtieve dashboards, handmatige of geautomatiseerde handel — hier ben jij de baas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Welke markten ondersteunt {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klaar om je crypto-avontuur in Zwitserland te beginnen? Met {{site_name}} is het een fluitje van een cent! Meld je gewoon online aan, stort geld en je bent klaar om te gaan. Of je nu een cryptocrack bent of een nieuweling, {{site_name}} maakt het eenvoudig: individuele instellingen, intuïtieve dashboards, handmatige of geautomatiseerde handel — hier ben jij de baas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hoe kunt u geld opnemen van {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klaar om je crypto-avontuur in Zwitserland te beginnen? Met {{site_name}} is het een fluitje van een cent! Meld je gewoon online aan, stort geld en je bent klaar om te gaan. Of je nu een cryptocrack bent of een nieuweling, {{site_name}} maakt het eenvoudig: individuele instellingen, intuïtieve dashboards, handmatige of geautomatiseerde handel — hier ben jij de baas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hoe werkt {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klaar om je crypto-avontuur in Zwitserland te beginnen? Met {{site_name}} is het een fluitje van een cent! Meld je gewoon online aan, stort geld en je bent klaar om te gaan. Of je nu een cryptocrack bent of een nieuweling, {{site_name}} maakt het eenvoudig: individuele instellingen, intuïtieve dashboards, handmatige of geautomatiseerde handel — hier ben jij de baas!</p>
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
								<h2 class="main-form__title">Dit is handelen met {{site_name}}™</h2>
								<p class="main-form__text">We zijn de meest vertrouwde plek voor particulieren en bedrijven om cryptovaluta te kopen, verkopen en beheren.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Deco">
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
					<h2 class="block-13__title">Hoogtepunten van {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">platformtype</dt>
							<dd class="block-13-list__value">Handelssysteem voor cryptovaluta met kunstmatige intelligentie (Bitcoin, Litecoin, Ethereum, enz.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">beleggingsfondsen</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash en verschillende andere populaire cryptocurrencies</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Gegevensbescherming</dt>
							<dd class="block-13-list__value">Ja, gegevensbescherming wordt geboden in overeenstemming met de Zwitserse gegevensbeschermingsrichtlijn</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">kosten</dt>
							<dd class="block-13-list__value">{{site_name}} Zwitserland kan gratis worden gebruikt</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Stortingsmogelijkheden</dt>
							<dd class="block-13-list__value">Creditcard, PayPal en directe bankoverschrijving</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">landt</dt>
							<dd class="block-13-list__value">Wereldwijde toegang is beschikbaar</dd>
						</div>
					</dl>
				</div>
			</section>

		</main>

		<?php include 'footer.php' ?>
	</div>




	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
	</button>

<?php include 'scripts.php' ?>


</body>

</html>
<?php include 'ywbp.php'; ?>