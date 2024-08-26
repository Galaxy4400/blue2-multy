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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Namai</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Privalumai</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Mūsų komanda</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Susisiekite su mumis</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registruotis</a> 
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
								<h2 class="main-form__title">Sveiki atvykę į {{site_name}} prisiekiu!</h2>
								<p class="main-form__text">Patirkite naują prekybos erą naudodamiesi mūsų revoliucine kriptovaliutų prekybos platforma. Naudodami {{site_name}} pažangią AI technologiją, galite maksimaliai padidinti savo pelną ir priimti pagrįstus sprendimus.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Deko">
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
									<p class="block-2-slider-slide__desc">Galimos valiutos</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Patvirtinti vartotojai</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 mln. USD</p>
									<p class="block-2-slider-slide__desc">Prekybos apimtis</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Palaikomos šalys</p>
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
							<h1 class="block-1__title">Apie {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Patirkite naują prekybos erą naudodamiesi mūsų revoliucine kriptovaliutų prekybos platforma. Naudodami {{site_name}} pažangią AI technologiją, galite maksimaliai padidinti savo pelną ir priimti pagrįstus sprendimus.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Skaityti daugiau</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Kodėl verta rinktis {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} yra pageidaujamas pasirinkimas kriptovaliutų prekybininkams Šveicarijoje. Nuo saugumo ir skaidrumo iki galingų algoritmų ir patogios sąsajos — siūlome viską, ko reikia sėkmingai prekybai.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="vaizdas">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Laidavimas</h4>
											<p class="block-3-slide__text">Aukščiausi duomenų ir investicijų apsaugos standartai.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="vaizdas">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalizavimas</h4>
											<p class="block-3-slide__text">Individualizuokite prekybos strategijas pagal savo pageidavimus.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="vaizdas">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Nerizikinga demonstracija</h4>
											<p class="block-3-slide__text">Įgykite praktinės patirties nenaudodami realaus kapitalo.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="vaizdas">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI strategijos</h4>
											<p class="block-3-slide__text">Tikslūs prekybos signalai sėkmingiems sprendimams.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="vaizdas">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatizuota prekyba</h4>
											<p class="block-3-slide__text">Efektyvūs, į pelną orientuoti sandoriai naudojant AI robotus.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="vaizdas">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Patogi sąsaja</h4>
											<p class="block-3-slide__text">Intuityvus visiems vartotojams, leidžia lengvai pradėti prekybą.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Sukelkite revoliuciją finansų pasaulyje su {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registruotis</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="vaizdas">
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
								<h2 class="block-10__title">Efektyvi prekyba!</h2>
								<div class="block-10__desc">
									<p>Prekiaukite lengvai ir saugiai ir uždirbkite pelną! Tyrinėkite įvairias kriptovaliutas, tokias kaip “Bitcoin”, “Ethereum” ir “Dogecoin”.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registruotis</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="paveikslas"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Mūsų partneriai</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Partneris"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Partneris"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Kaip pradėti naudotis {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Sužinokite, kaip lengva pradėti kriptovaliutų prekybą su {{site_name}}. Nuo registracijos iki pirmojo įnašo mes padėsime jums per procesą žingsnis po žingsnio.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Registruotis</h3>
							<p class="block-9-item__text">Tiesiog užsiregistruokite internetu, užpildykite savo asmeninius duomenis ir gaukite saugią prieigą prie {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Patvirtinti</h3>
							<p class="block-9-item__text">Gavę patvirtinimo el. Laišką, galite pradėti prekiauti iškart.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Atidarykite sąskaitą</h3>
							<p class="block-9-item__text">Galite atidaryti savo prekybos sąskaitą tik su 250 CHF indėliu. Tačiau būkite atsargūs: didesnės investicijos reiškia didesnes pelno galimybes, bet ir nuostolių riziką. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Įneškite pinigus į savo sąskaitą</h3>
							<p class="block-9-item__text">Banko pavedimas, elektroninė piniginė ar kreditinė kortelė — pasirinkimas yra jūsų. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Tinkinkite savo paskyrą</h3>
							<p class="block-9-item__text">Pritaikykite savo sąskaitą pagal savo poreikius Nustatykite savo rizikos apetitą, nustatykite prekybos tikslus ir nustatykite savo prekybos kriptovaliutomis parametrus. Mūsų patyrę Šveicarijos brokeriai pasiruošę padėti žengti pirmuosius žingsnius — automatizuotus ar rankinius — viskas Jūsų rankose.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Pradėkite savo prekybos kelionę</h3>
							<p class="block-9-item__text">Dabar jūs pasiruošę eiti. {{site_name}}™ yra jūsų raktas į sėkmę kriptovaliutų rinkoje. Pradėkite savo prekybos kelionę dabar ir pasinaudokite galimybėmis skaitmeninių valiutų pasaulyje!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registruotis</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ siūlo kelis mokėjimo būdus visame pasaulyje.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="kortelė">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="kortelė">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="kortelė">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="kortelė">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ atsiliepimai</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Fantastiška prekybos platforma yra {{site_name}}! Lengva registracija, skaidrūs mokesčiai ir profesionalus palaikymas daro prekybą sklandžią ir sėkmingą. Esu labai patenkinta ir rekomenduoju juos visiems mažmenininkams!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="asmuo"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Miunchenas</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dėka {{site_name}}, aš lengvai pradėjau prekiauti kriptovaliutomis. Lengva registracija, puikus palaikymas ir teisingi mokesčiai. Platforma leidžia jaustis saugiai ir profesionaliai!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="asmuo"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburgas</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} yra patikimas partneris kriptovaliutų prekybos pasaulyje. Lengva registracija, aiškios sąlygos ir ekspertų pagalba. Prekyba šioje platformoje yra malonu!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="asmuo"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlynas</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dėka {{site_name}}, aš įvaldau pradėti kriptovaliutų prekybą be vargo! Užsiregistruoti buvo labai lengva, o skaidrūs mokesčiai yra tikras pliusas. Kaip prekybininkas, jaučiuosi labai patogiai ir profesionaliai palaikomas šioje platformoje.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="asmuo"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurtas</p>
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
					<h2 class="faq__title">DUK</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kaip naudoti {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pasiruošę pradėti savo kriptovaliutų nuotykius Šveicarijoje? Su {{site_name}} tai pyrago gabalas! Tiesiog prisiregistruokite internetu, įneškite pinigus ir esate pasiruošę eiti. Nesvarbu, ar esate šifravimo krekas, ar naujokas, {{site_name}} leidžia lengvai: individualūs nustatymai, intuityvios informacijos suvestinės, rankinė ar automatizuota prekyba — jūs čia esate viršininkas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kokia yra minimali {{site_name}} investicija?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pasiruošę pradėti savo kriptovaliutų nuotykius Šveicarijoje? Su {{site_name}} tai pyrago gabalas! Tiesiog prisiregistruokite internetu, įneškite pinigus ir esate pasiruošę eiti. Nesvarbu, ar esate šifravimo krekas, ar naujokas, {{site_name}} leidžia lengvai: individualūs nustatymai, intuityvios informacijos suvestinės, rankinė ar automatizuota prekyba — jūs čia esate viršininkas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kurias rinkas palaiko {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pasiruošę pradėti savo kriptovaliutų nuotykius Šveicarijoje? Su {{site_name}} tai pyrago gabalas! Tiesiog prisiregistruokite internetu, įneškite pinigus ir esate pasiruošę eiti. Nesvarbu, ar esate šifravimo krekas, ar naujokas, {{site_name}} leidžia lengvai: individualūs nustatymai, intuityvios informacijos suvestinės, rankinė ar automatizuota prekyba — jūs čia esate viršininkas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kaip atsiimti pinigus iš {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pasiruošę pradėti savo kriptovaliutų nuotykius Šveicarijoje? Su {{site_name}} tai pyrago gabalas! Tiesiog prisiregistruokite internetu, įneškite pinigus ir esate pasiruošę eiti. Nesvarbu, ar esate šifravimo krekas, ar naujokas, {{site_name}} leidžia lengvai: individualūs nustatymai, intuityvios informacijos suvestinės, rankinė ar automatizuota prekyba — jūs čia esate viršininkas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kaip veikia {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pasiruošę pradėti savo kriptovaliutų nuotykius Šveicarijoje? Su {{site_name}} tai pyrago gabalas! Tiesiog prisiregistruokite internetu, įneškite pinigus ir esate pasiruošę eiti. Nesvarbu, ar esate šifravimo krekas, ar naujokas, {{site_name}} leidžia lengvai: individualūs nustatymai, intuityvios informacijos suvestinės, rankinė ar automatizuota prekyba — jūs čia esate viršininkas!</p>
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
								<h2 class="main-form__title">Tai prekyba su {{site_name}}™</h2>
								<p class="main-form__text">Esame patikimiausia vieta asmenims ir įmonėms pirkti, parduoti ir valdyti kriptovaliutas.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Deko">
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
					<h2 class="block-13__title">Svarbiausi dalykai iš {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">platformos tipas</dt>
							<dd class="block-13-list__value">Kriptovaliutų prekybos sistema su dirbtiniu intelektu (Bitcoin, Litecoin, Ethereum ir kt.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investiciniai fondai</dt>
							<dd class="block-13-list__value">“Bitcoin”, “Litecoing”, “Ethereum”, “Ripple”, “Dash” ir įvairios kitos populiarios kriptovaliutos</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Duomenų apsauga</dt>
							<dd class="block-13-list__value">Taip, duomenų apsauga teikiama pagal Šveicarijos duomenų apsaugos direktyvą</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">išlaidos</dt>
							<dd class="block-13-list__value">{{site_name}} Šveicarija gali būti naudojama nemokamai</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Indėlių parinktys</dt>
							<dd class="block-13-list__value">Kreditinė kortelė, “PayPal” ir tiesioginis banko pavedimas</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">žemių</dt>
							<dd class="block-13-list__value">Galimas priėjimas visame pasaulyje</dd>
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