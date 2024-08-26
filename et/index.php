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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Avaleht</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platvorm</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Eelised</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Meie meeskond</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Võta meiega ühendust</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registreeri</a> 
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
								<h2 class="main-form__title">Tere tulemast {{site_name}} vannutuse juurde!</h2>
								<p class="main-form__text">Kogege meie revolutsioonilise krüptokauplemisplatvormiga uut kauplemise ajastut. {{site_name}} arenenud tehisintellekti tehnoloogia abil saate maksimeerida oma kasumit ja teha teadlikke otsuseid.</p>
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
									<p class="block-2-slider-slide__desc">Valuutad saadaval</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Kinnitatud kasutajad</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 miljonit dollarit</p>
									<p class="block-2-slider-slide__desc">Kauplemismaht</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Toetatud riigid</p>
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
							<h1 class="block-1__title">Umbes {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Kogege meie revolutsioonilise krüptokauplemisplatvormiga uut kauplemise ajastut. {{site_name}} arenenud tehisintellekti tehnoloogia abil saate maksimeerida oma kasumit ja teha teadlikke otsuseid.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Loe lähemalt</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Miks valida {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} on Šveitsi krüptokauplejate eelistatud valik. Alates turvalisusest ja läbipaistvusest kuni võimsate algoritmide ja kasutajasõbraliku liideseni pakume kõike, mida vajate edukaks kauplemiseks.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="pilt">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Käendusõigus</h4>
											<p class="block-3-slide__text">Andmete ja investeeringute kaitse kõrgeimad standardid.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="pilt">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Isikupärastamine</h4>
											<p class="block-3-slide__text">Isikupärastage kauplemisstrateegiaid vastavalt oma eelistustele.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="pilt">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Riskivaba demo</h4>
											<p class="block-3-slide__text">Saage praktilisi kogemusi ilma reaalset kapitali kasutamata.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="pilt">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI strateegiad</h4>
											<p class="block-3-slide__text">Täpsed kauplemissignaalid edukate otsuste jaoks.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="pilt">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatiseeritud kauplemine</h4>
											<p class="block-3-slide__text">Tõhusad, kasumile orienteeritud tehingud tehisintellekti robotite abil.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="pilt">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">kasutajasõbralik liides</h4>
											<p class="block-3-slide__text">Intuitiivne kõigile kasutajatele, muudab kauplemise alustamise lihtsaks.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Muutke finantsmaailmas revolutsiooniliselt {{site_name}}™ abil!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registreeri</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="pilt">
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
								<h2 class="block-10__title">Tõhus kauplemine!</h2>
								<div class="block-10__desc">
									<p>Kauplege lihtsalt ja ohutult ning teenige kasumit! Avastage erinevaid krüptovaluutasid, nagu Bitcoin, Ethereum ja Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registreeri</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Joonis"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Meie partnerid</h2>
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
							<h2 class="block-9-header__title">Kuidas alustada kasutusega {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Siit saate teada, kui lihtne on krüptokauplemisega alustada {{site_name}} abil. Alates registreerimisest kuni esimese sissemakseni juhendame teid protsessi samm-sammult läbi.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Registreeru</h3>
							<p class="block-9-item__text">Lihtsalt registreeruge veebis, sisestage oma isikuandmed ja saate turvalise juurdepääsu saidile {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Kinnitage</h3>
							<p class="block-9-item__text">Kui olete oma kinnituse-kirja kätte saanud, saate kohe kauplemist alustada.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Konto avamine</h3>
							<p class="block-9-item__text">Oma kauplemiskonto saate avada vaid 250 CHF sissemaksega. Kuid olge ettevaatlik: Suuremad investeeringud tähendavad suuremaid kasumivõimalusi, aga ka kahjumiriske. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Sisestage raha oma kontole</h3>
							<p class="block-9-item__text">Pangaülekanne, e-rahakott või krediitkaart — valik on teie. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Kohandage oma kontot</h3>
							<p class="block-9-item__text">Kohandage oma konto vastavalt oma vajadustele. Määrake oma riskisisu, seadke kauplemiseesmärgid ja määrake oma parameetrid krüptovaluutadega kauplemiseks. Meie kogenud Šveitsi maaklerid on valmis aitama teil astuda esimesi samme - automatiseeritud või käsitsi - kõik on teie kätes.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Alustage oma kauplemisteekonda</h3>
							<p class="block-9-item__text">Nüüd olete valmis minema. {{site_name}}™ on teie edu võti krüptovaluutaturul. Alustage oma kauplemisteekonda kohe ja kasutage ära võimalusi digitaalsete valuutade maailmas!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registreeri</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ pakub mitut makseviisi kogu maailmas.</p>
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
						<h2 class="quotes__title">{{site_name}}™ arvustused</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Fantastiline kauplemisplatvorm on {{site_name}}! Lihtne registreerimine, läbipaistvad tasud ja professionaalne tugi muudavad kauplemise sujuvaks ja edukaks. Olen väga rahul ja soovitan neid kõigile jaemüüjatele!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="inimene"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Tänu {{site_name}} -le olen kergesti hakanud krüptovaluutadega kauplema. Lihtne registreerimine, suurepärane tugi, ja õiglased tasud. Platvorm paneb mind end turvaliselt ja professionaalselt tundma!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="inimene"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} on usaldusväärne partner krüptokaubanduse maailmas. Lihtne registreerimine, selged tingimused ja asjatundlik tugi. Sellel platvormil kauplemine on rõõm!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="inimene"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berliin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Tänu {{site_name}} -le olen õppinud krüptokauplemisega vaevata alustamist! Registreerumine oli ülilihtne, ja läbipaistvad tasud on tõeline pluss. Kauplejana tunnen end sellel platvormil väga mugavalt ja professionaalselt toetatuna.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="inimene"></figure>
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
<span class="faq-spoiler__control-text">Kuidas kasutada {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Kas olete valmis alustama oma krüptoseiklust Šveitsis? {{site_name}} puhul on see tükk kooki! Lihtsalt registreeruge veebis, deponeerige raha ja olete valmis minema. Ükskõik, kas olete krüptocraki või algaja, muudab {{site_name}} selle lihtsaks: individuaalsed seaded, intuitiivsed armatuurlauad, käsitsi või automatiseeritud kauplemine - olete siin boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Milline on {{site_name}} minimaalne investeering?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Kas olete valmis alustama oma krüptoseiklust Šveitsis? {{site_name}} puhul on see tükk kooki! Lihtsalt registreeruge veebis, deponeerige raha ja olete valmis minema. Ükskõik, kas olete krüptocraki või algaja, muudab {{site_name}} selle lihtsaks: individuaalsed seaded, intuitiivsed armatuurlauad, käsitsi või automatiseeritud kauplemine - olete siin boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Milliseid turge {{site_name}} toetab?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Kas olete valmis alustama oma krüptoseiklust Šveitsis? {{site_name}} puhul on see tükk kooki! Lihtsalt registreeruge veebis, deponeerige raha ja olete valmis minema. Ükskõik, kas olete krüptocraki või algaja, muudab {{site_name}} selle lihtsaks: individuaalsed seaded, intuitiivsed armatuurlauad, käsitsi või automatiseeritud kauplemine - olete siin boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kuidas võtad raha välja {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Kas olete valmis alustama oma krüptoseiklust Šveitsis? {{site_name}} puhul on see tükk kooki! Lihtsalt registreeruge veebis, deponeerige raha ja olete valmis minema. Ükskõik, kas olete krüptocraki või algaja, muudab {{site_name}} selle lihtsaks: individuaalsed seaded, intuitiivsed armatuurlauad, käsitsi või automatiseeritud kauplemine - olete siin boss!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Kuidas {{site_name}} töötab?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Kas olete valmis alustama oma krüptoseiklust Šveitsis? {{site_name}} puhul on see tükk kooki! Lihtsalt registreeruge veebis, deponeerige raha ja olete valmis minema. Ükskõik, kas olete krüptocraki või algaja, muudab {{site_name}} selle lihtsaks: individuaalsed seaded, intuitiivsed armatuurlauad, käsitsi või automatiseeritud kauplemine - olete siin boss!</p>
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
								<h2 class="main-form__title">See kaupleb {{site_name}}™</h2>
								<p class="main-form__text">Oleme üksikisikute ja ettevõtete jaoks kõige usaldusväärsem koht krüpto ostmiseks, müümiseks ja haldamiseks.</p>
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
					<h2 class="block-13__title">Tähtsündmused saidilt {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">platvormi tüüp</dt>
							<dd class="block-13-list__value">Tehisintellektiga krüptovaluutaga kauplemissüsteem (Bitcoin, Litecoin, Ethereum jne)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investeerimisfondid</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash ja mitmesugused muud populaarsed krüptovaluutad</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Andmekaitse</dt>
							<dd class="block-13-list__value">Jah, andmekaitse tagatakse vastavalt Šveitsi andmekaitsedirektiivile</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">kulud</dt>
							<dd class="block-13-list__value">{{site_name}} Šveitsi saab kasutada tasuta</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Sissemakse võimalused</dt>
							<dd class="block-13-list__value">Krediitkaart, PayPal ja otsene pangaülekanne</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">maad</dt>
							<dd class="block-13-list__value">Ülemaailmne juurdepääs on saadaval</dd>
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