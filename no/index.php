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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Hjem</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plattform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Fordeler</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Vårt team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontakt oss</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrere</a>
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
								<h2 class="main-form__title">Velkommen til {{site_name}} sverge!</h2>
								<p class="main-form__text">Opplev en ny æra med handel med vår revolusjonerende kryptohandelsplattform. Med {{site_name}} sin avanserte AI-teknologi kan du maksimere fortjenesten og ta informerte beslutninger.</p>
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
									<p class="block-2-slider-slide__desc">Valutaer tilgjengelig</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34m</p>
									<p class="block-2-slider-slide__desc">Verifiserte brukere</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 millioner</p>
									<p class="block-2-slider-slide__desc">Handelsvolum</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Støttede land</p>
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
							<h1 class="block-1__title">Om {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Opplev en ny æra med handel med vår revolusjonerende kryptohandelsplattform. Med {{site_name}} sin avanserte AI-teknologi kan du maksimere fortjenesten og ta informerte beslutninger.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Les mer</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Hvorfor velge {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} er det foretrukne valget for kryptohandlere i Sveits. Fra sikkerhet og åpenhet til kraftige algoritmer og et brukervennlig grensesnitt, vi tilbyr alt du trenger for vellykket handel.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="bilde">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Garantier</h4>
											<p class="block-3-slide__text">Høyeste standarder for data- og investeringsbeskyttelse.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="bilde">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalisering</h4>
											<p class="block-3-slide__text">Tilpass handelsstrategier i henhold til dine preferanser.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="bilde">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Risikofri demo</h4>
											<p class="block-3-slide__text">Få praktisk erfaring uten å bruke ekte kapital.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="bilde">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI-strategier</h4>
											<p class="block-3-slide__text">Nøyaktige handelssignaler for vellykkede beslutninger.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="bilde">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatisert handel</h4>
											<p class="block-3-slide__text">Effektive, profittorienterte handler ved hjelp av AI-roboter.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="bilde">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Brukervennlig grensesnitt</h4>
											<p class="block-3-slide__text">Intuitivt for alle brukere, gjør det enkelt å begynne å handle.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revolusjonere finansverdenen med {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrere</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="bilde">
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
								<h2 class="block-10__title">Effektiv handel!</h2>
								<div class="block-10__desc">
									<p>Handle enkelt og trygt og tjen fortjeneste! Utforsk forskjellige kryptovalutaer som Bitcoin, Ethereum og Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrere</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Figur"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Våre samarbeidspartnere</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Samarbeidspartner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Samarbeidspartner"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Hvordan kommer jeg i gang med {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Lær hvor enkelt det er å komme i gang med kryptohandel med {{site_name}}. Fra registrering til ditt første innskudd, vil vi veilede deg gjennom prosessen trinn for trinn.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Meld deg på</h3>
							<p class="block-9-item__text">Bare registrer deg online, fyll ut dine personlige opplysninger, og få sikker tilgang til {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validere</h3>
							<p class="block-9-item__text">Når du har mottatt bekreftelses-e-posten din, kan du begynne å handle med en gang.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Åpne en konto</h3>
							<p class="block-9-item__text">Du kan åpne handelskontoen din med bare et innskudd på 250 CHF. Men vær forsiktig: Større investeringer betyr høyere fortjenestemuligheter, men også risiko for tap. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Sett inn penger på kontoen din</h3>
							<p class="block-9-item__text">Bankoverføring, e-lommebok eller kredittkort - valget er ditt. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Tilpass kontoen din</h3>
							<p class="block-9-item__text">Skreddersy kontoen din slik at den passer dine behov Bestem risikoappetitten din, sett handelsmål og bestem parametrene dine for handel med kryptovalutaer. Våre erfarne sveitsiske meglere er klare til å hjelpe deg med å ta dine første skritt - automatisert eller manuell - alt er i dine hender.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Start din handelsreise</h3>
							<p class="block-9-item__text">Nå er du klar til å gå. {{site_name}}™ er nøkkelen til suksess i kryptovalutamarkedet. Start din handelsreise nå og dra nytte av mulighetene i verden av digitale valutaer!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrere</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ tilbyr flere betalingsmetoder over hele verden.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="kort">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="kort">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="kort">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="kort">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ anmeldelser</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">En fantastisk handelsplattform er {{site_name}}! Enkel registrering, gjennomsiktige avgifter og profesjonell støtte gjør handel jevn og vellykket. Jeg er veldig fornøyd og anbefaler dem til alle forhandlere!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Takket være {{site_name}} har jeg lett begynt å handle kryptovalutaer. Enkel registrering, god støtte, og rettferdige avgifter. Plattformen får meg til å føle meg trygg og profesjonell!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} er en pålitelig partner i kryptohandelsverdenen. Enkel registrering, klare vilkår og ekspertstøtte. Å handle på denne plattformen er en glede!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Takket være {{site_name}} har jeg mestret å komme i gang med kryptohandel uten problemer! Det var superenkelt å registrere seg, og de gjennomsiktige avgiftene er et reelt pluss. Som handelsmann føler jeg meg veldig komfortabel og profesjonelt støttet på denne plattformen.</p>
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
								<span class="faq-spoiler__control-text">Hvordan bruker jeg {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til å starte kryptoeventyret ditt i Sveits? Med {{site_name}} er det et stykke kake! Bare registrer deg online, sett inn penger og du er klar til å gå. Enten du er en kryptosprekker eller en nybegynner, gjør {{site_name}} det enkelt: individuelle innstillinger, intuitive dashboards, manuell eller automatisert handel — du er sjefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hva er minimumsinvesteringen for {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til å starte kryptoeventyret ditt i Sveits? Med {{site_name}} er det et stykke kake! Bare registrer deg online, sett inn penger og du er klar til å gå. Enten du er en kryptosprekker eller en nybegynner, gjør {{site_name}} det enkelt: individuelle innstillinger, intuitive dashboards, manuell eller automatisert handel — du er sjefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvilke markeder støtter {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til å starte kryptoeventyret ditt i Sveits? Med {{site_name}} er det et stykke kake! Bare registrer deg online, sett inn penger og du er klar til å gå. Enten du er en kryptosprekker eller en nybegynner, gjør {{site_name}} det enkelt: individuelle innstillinger, intuitive dashboards, manuell eller automatisert handel — du er sjefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvordan tar du ut penger fra {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til å starte kryptoeventyret ditt i Sveits? Med {{site_name}} er det et stykke kake! Bare registrer deg online, sett inn penger og du er klar til å gå. Enten du er en kryptosprekker eller en nybegynner, gjør {{site_name}} det enkelt: individuelle innstillinger, intuitive dashboards, manuell eller automatisert handel — du er sjefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvordan fungerer {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til å starte kryptoeventyret ditt i Sveits? Med {{site_name}} er det et stykke kake! Bare registrer deg online, sett inn penger og du er klar til å gå. Enten du er en kryptosprekker eller en nybegynner, gjør {{site_name}} det enkelt: individuelle innstillinger, intuitive dashboards, manuell eller automatisert handel — du er sjefen her!</p>
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
								<h2 class="main-form__title">Dette handler med {{site_name}}™</h2>
								<p class="main-form__text">Vi er det mest pålitelige stedet for enkeltpersoner og bedrifter å kjøpe, selge og administrere krypto.</p>
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
					<h2 class="block-13__title">Høydepunkter fra {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">plattformtype</dt>
							<dd class="block-13-list__value">Kryptovalutahandelssystem med kunstig intelligens (Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investeringsfond</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash og forskjellige andre populære kryptovalutaer</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Databeskyttelse</dt>
							<dd class="block-13-list__value">Ja, databeskyttelse er gitt i samsvar med det sveitsiske databeskyttelsesdirektivet</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">utgifter</dt>
							<dd class="block-13-list__value">{{site_name}} Sveits kan brukes gratis</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Innskuddsalternativer</dt>
							<dd class="block-13-list__value">Kredittkort, PayPal og direkte bankoverføring</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">lander</dt>
							<dd class="block-13-list__value">Verdensomspennende tilgang er tilgjengelig</dd>
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