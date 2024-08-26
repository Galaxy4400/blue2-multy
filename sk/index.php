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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Domov</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Výhody</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Náš tím</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontaktujte nás</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrovať</a> 
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
								<h2 class="main-form__title">Vitajte na {{site_name}} prisahajte!</h2>
								<p class="main-form__text">Zažite novú éru obchodovania s našou revolučnou platformou na obchodovanie s kryptomenami. S pokročilou technológiou AI od {{site_name}} môžete maximalizovať svoje zisky a robiť informované rozhodnutia.</p>
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
									<p class="block-2-slider-slide__desc">Dostupné meny</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Overení používatelia</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 miliónov dolárov</p>
									<p class="block-2-slider-slide__desc">Objem obchodovania</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Podporované krajiny</p>
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
							<h1 class="block-1__title">Info o umelcovi {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Zažite novú éru obchodovania s našou revolučnou platformou na obchodovanie s kryptomenami. S pokročilou technológiou AI od {{site_name}} môžete maximalizovať svoje zisky a robiť informované rozhodnutia.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Prečítajte si viac</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Prečo si vybrať {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} je preferovanou voľbou pre obchodníkov s kryptomenami vo Švajčiarsku. Od bezpečnosti a transparentnosti až po výkonné algoritmy a užívateľsky prívetivé rozhranie ponúkame všetko, čo potrebujete pre úspešné obchodovanie.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="imidž">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Záruka</h4>
											<p class="block-3-slide__text">Najvyššie štandardy ochrany údajov a investícií.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="imidž">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalizácia</h4>
											<p class="block-3-slide__text">Prispôsobte si obchodné stratégie podľa svojich preferencií.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="imidž">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Bezriziková ukážka</h4>
											<p class="block-3-slide__text">Získajte praktické skúsenosti bez použitia reálneho kapitálu.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="imidž">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Stratégie AI</h4>
											<p class="block-3-slide__text">Presné obchodné signály pre úspešné rozhodnutia.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="imidž">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatizované obchodovanie</h4>
											<p class="block-3-slide__text">Efektívne obchody orientované na zisk pomocou robotov AI.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="imidž">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Užívateľské rozhranie</h4>
											<p class="block-3-slide__text">Intuitívne pre všetkých používateľov, uľahčuje začatie obchodovania.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Vytvorte revolúciu vo finančnom svete s {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrovať</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="imidž">
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
								<h2 class="block-10__title">Efektívne obchodovanie!</h2>
								<div class="block-10__desc">
									<p>Obchodujte ľahko a bezpečne a zarávajte zisky! Preskúmajte rôzne kryptomeny, ako sú Bitcoin, Ethereum a Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrovať</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Obrázok"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Naši partneri</h2>
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
							<h2 class="block-9-header__title">Ako môžem začať s {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Zistite, aké ľahké je začať s obchodovaním s kryptomenami s {{site_name}}. Od registrácie až po prvý vklad vás prevedieme procesom krok za krokom.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Zaregistrujte sa</h3>
							<p class="block-9-item__text">Jednoducho sa zaregistrujte online, vyplňte svoje osobné údaje a získajte bezpečný prístup k {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Potvrdiť</h3>
							<p class="block-9-item__text">Po prijatí potvrdzovacieho e-mailu môžete ihneď začať obchodovať.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Otvorte si účet</h3>
							<p class="block-9-item__text">Obchodný účet si môžete otvoriť iba s vkladom 250 CHF. Buďte však opatrní: Väčšie investície znamenajú vyššie ziskové príležitosti, ale aj riziká straty. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Vložte peniaze na svoj účet</h3>
							<p class="block-9-item__text">Bankový prevod, elektronická peňaženka alebo kreditná karta — výber je na vás. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Prispôsobte si účet</h3>
							<p class="block-9-item__text">Prispôsobte si svoj účet tak, aby vyhovoval vašim potrebám Určite svoju chuť do rizika, nastavte si obchodné ciele a určte svoje parametre pre obchodovanie s kryptomenami. Naši skúsení švajčiarskí makléri sú pripravení pomôcť vám urobiť prvé kroky - automatizované alebo manuálne - všetko je vo vašich rukách.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Začnite svoju obchodnú cestu</h3>
							<p class="block-9-item__text">Teraz ste pripravení ísť. {{site_name}}™ je váš kľúč k úspechu na trhu s kryptomenami. Začnite svoju obchodnú cestu hneď teraz a využite príležitosti vo svete digitálnych mien!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrovať</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ ponúka viacero spôsobov platby po celom svete.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="karta">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="karta">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="karta">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="karta">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ recenzie</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Fantastická obchodná platforma je {{site_name}}! Jednoduchá registrácia, transparentné poplatky a profesionálna podpora robia obchodovanie plynulým a úspešným. Som veľmi spokojný a odporúčam ich všetkým predajcom!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Mníchov</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Vďaka {{site_name}} som ľahko začal obchodovať s kryptomenami. Jednoduchá registrácia, skvelá podpora a spravodlivé poplatky. Vďaka tejto platforme sa cítim bezpečne a profesionálne!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} je spoľahlivým partnerom vo svete obchodovania s kryptomenami. Jednoduchá registrácia, jasné podmienky a odborná podpora. Obchodovanie na tejto platforme je potešením!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlín</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Vďaka {{site_name}} som zvládol začatie obchodovania s kryptomenami bez námahy! Registrácia bola veľmi jednoduchá a transparentné poplatky sú skutočným plusom. Ako obchodník sa na tejto platforme cítim veľmi pohodlne a profesionálne podporovaný.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurt nad Mohanom</p>
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
<span class="faq-spoiler__control-text">Ako môžem používať {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Aká je minimálna investícia pre {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ktoré trhy podporuje {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ako vyberáte peniaze z {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ako funguje {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
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
								<h2 class="main-form__title">Toto je obchodovanie s {{site_name}}™</h2>
								<p class="main-form__text">Sme najdôveryhodnejším miestom pre jednotlivcov a firmy na nákup, predaj a správu kryptomien.</p>
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
					<h2 class="block-13__title">Najdôležitejšie z {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">typ plošiny</dt>
							<dd class="block-13-list__value">Systém obchodovania s kryptomenami s umelou inteligenciou (Bitcoin, Litecoin, Ethereum atď.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investičné fondy</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash a rôzne ďalšie populárne kryptomeny</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Ochrana údajov</dt>
							<dd class="block-13-list__value">Áno, ochrana údajov sa poskytuje v súlade so švajčiarskou smernicou o ochrane údajov</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">výdavky</dt>
							<dd class="block-13-list__value">{{site_name}} Švajčiarsko je možné využívať bezplatne</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Možnosti vkladu</dt>
							<dd class="block-13-list__value">Kreditná karta, PayPal a priamy bankový prevod</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">pozemky</dt>
							<dd class="block-13-list__value">Celosvetový prístup je k dispozícii</dd>
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