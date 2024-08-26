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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Kezdőlap</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Előnyök</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Csapatunk</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Lépjen kapcsolatba velünk</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Regisztráció</a> 
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
								<h2 class="main-form__title">Üdvözöljük a {{site_name}} esküszöm!</h2>
								<p class="main-form__text">Tapasztalja meg a kereskedés új korszakát forradalmi kriptokereskedési platformunkkal. A {{site_name}} fejlett AI technológiájával maximalizálhatja nyereségét és megalapozott döntéseket hozhat.</p>
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
									<p class="block-2-slider-slide__desc">Elérhető pénznemek</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Ellenőrzött felhasználók</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 millió dollár</p>
									<p class="block-2-slider-slide__desc">Kereskedési volumen</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Támogatott országok</p>
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
							<h1 class="block-1__title">Rólunk {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Tapasztalja meg a kereskedés új korszakát forradalmi kriptokereskedési platformunkkal. A {{site_name}} fejlett AI technológiájával maximalizálhatja nyereségét és megalapozott döntéseket hozhat.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Olvass tovább</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Miért válassza a {{site_name}} lehetőséget?</h2>
								<p class="block-3__desc">A {{site_name}} az előnyben részesített választás a kriptokereskedők számára Svájcban. A biztonságról és az átláthatóságtól a hatékony algoritmusokig és a felhasználóbarát felületen át mindent kínálunk, amire szüksége van a sikeres kereskedéshez.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="kép">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Kizáróság</h4>
											<p class="block-3-slide__text">Az adatok és a beruházások védelmének legmagasabb követelményei.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="kép">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Személyre szabás</h4>
											<p class="block-3-slide__text">Testreszabhatja a kereskedési stratégiákat az Ön preferenciáinak megfelelően.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="kép">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Kockázatmentes bemutató</h4>
											<p class="block-3-slide__text">Szerezzen gyakorlati tapasztalatokat valós tőke használata nélkül.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="kép">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI stratégiák</h4>
											<p class="block-3-slide__text">Pontos kereskedési jelek a sikeres döntésekhez.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="kép">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatizált kereskedés</h4>
											<p class="block-3-slide__text">Hatékony, nyereségorientált kereskedések AI botokkal.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="kép">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Felhasználóbarát felület</h4>
											<p class="block-3-slide__text">Intuitív minden felhasználó számára, megkönnyíti a kereskedés megkezdését.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Forradalmasítsa a pénzügyi világot a {{site_name}}™ segítségével!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Regisztráció</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="kép">
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
								<h2 class="block-10__title">Hatékony kereskedés!</h2>
								<div class="block-10__desc">
									<p>Kereskedjen egyszerűen és biztonságosan, és nyereséget érjen el! Fedezze fel a különféle kriptovalutákat, például a Bitcoint, az Ethereumot és a Dogecoint.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Regisztráció</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Ábra"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Partnereink</h2>
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
							<h2 class="block-9-header__title">Hogyan kezdjem el a {{site_name}}™ alkalmazást?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Ismerje meg, milyen egyszerű elkezdeni a kriptokereskedést a {{site_name}} használatával. A regisztrációtól az első befizetésig lépésről lépésre végigvezetjük Önt a folyamaton.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Regisztrálj</h3>
							<p class="block-9-item__text">Egyszerűen regisztráljon online, töltse ki személyes adatait, és biztonságos hozzáférést kapjon a {{site_name}}™ webhelyhez.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Érvényesítés</h3>
							<p class="block-9-item__text">Miután megkapta a megerősítő e-mailt, azonnal elkezdheti a kereskedést.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Nyisson meg egy fiókot</h3>
							<p class="block-9-item__text">Kereskedési számláját mindössze 250 CHF befizetéssel nyithatja meg. De légy óvatos: A nagyobb befektetések magasabb profitlehetőségeket, de veszteségkockázatot is jelentenek. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Helyezzen be pénzt a számlájára</h3>
							<p class="block-9-item__text">Banki átutalás, e-pénztárca vagy hitelkártya — a választás a tiéd. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">A fiók testreszabása</h3>
							<p class="block-9-item__text">Testreszabhatja fiókját az igényeinek megfelelően. Határozza meg kockázati vágyát, állítsa be kereskedési célokat, és határozza meg a kriptovaluták kereskedésének paramétereit. Tapasztalt svájci brókereink készek segíteni Önnek az első lépések megtételében - automatizált vagy kézi -, mindez az Ön kezében van.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Indítsa el kereskedési útját</h3>
							<p class="block-9-item__text">Most már készen állsz az indulásra. {{site_name}}™ a kulcsa a kriptovaluta piacon a sikerhez. Kezdje el kereskedési útját most, és használja ki a digitális valuták világában rejlő lehetőségeket!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Regisztráció</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ több fizetési módot kínál világszerte.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="kártya">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="kártya">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="kártya">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="kártya">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ vélemények</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Egy fantasztikus kereskedési platform a {{site_name}}! Az egyszerű regisztráció, az átlátható díjak és a professzionális támogatás miatt a kereskedés zökkenőmentes és sikeres. Nagyon elégedett vagyok, és minden kiskereskedőnek ajánlom őket!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="személy"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">A {{site_name}} -nak köszönhetően könnyedén elkezdtem kereskedni a kriptovalutákkal. Könnyű regisztráció, nagyszerű támogatás és tisztességes díjak. A platform biztonságban és professzionálisnak érzem magam!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="személy"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">A {{site_name}} megbízható partner a kriptokereskedelem világában. Egyszerű regisztráció, egyértelmű feltételek és szakértői támogatás. Ezen a platformon való kereskedés öröm!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="személy"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">A {{site_name}} -nak köszönhetően könnyedén elsajátítottam a kriptokereskedés megkezdését! A regisztráció rendkívül egyszerű volt, és az átlátható díjak valódi plusz. Kereskedőként nagyon kényelmesen és professzionálisan támogatottan érzem magam ezen a platformon.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="személy"></figure>
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
					<h2 class="faq__title">GYIK</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Hogyan használhatom a {{site_name}} -t?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Készen áll arra, hogy elkezdje kriptokalandját Svájcban? A {{site_name}} használatával ez egy darab sütemény! Egyszerűen regisztráljon online, fizessen be pénzt, és készen áll a indulásra. Akár kriptográfiai, akár újonc vagy, a {{site_name}} megkönnyíti a munkát: egyéni beállítások, intuitív irányítópultok, kézi vagy automatizált kereskedés — itt te vagy a főnök!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Mennyi a minimális befektetés az {{site_name}} esetében?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Készen áll arra, hogy elkezdje kriptokalandját Svájcban? A {{site_name}} használatával ez egy darab sütemény! Egyszerűen regisztráljon online, fizessen be pénzt, és készen áll a indulásra. Akár kriptográfiai, akár újonc vagy, a {{site_name}} megkönnyíti a munkát: egyéni beállítások, intuitív irányítópultok, kézi vagy automatizált kereskedés — itt te vagy a főnök!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Mely piacokat támogat az {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Készen áll arra, hogy elkezdje kriptokalandját Svájcban? A {{site_name}} használatával ez egy darab sütemény! Egyszerűen regisztráljon online, fizessen be pénzt, és készen áll a indulásra. Akár kriptográfiai, akár újonc vagy, a {{site_name}} megkönnyíti a munkát: egyéni beállítások, intuitív irányítópultok, kézi vagy automatizált kereskedés — itt te vagy a főnök!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Hogyan vehet fel pénzt a {{site_name}} webhelyről?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Készen áll arra, hogy elkezdje kriptokalandját Svájcban? A {{site_name}} használatával ez egy darab sütemény! Egyszerűen regisztráljon online, fizessen be pénzt, és készen áll a indulásra. Akár kriptográfiai, akár újonc vagy, a {{site_name}} megkönnyíti a munkát: egyéni beállítások, intuitív irányítópultok, kézi vagy automatizált kereskedés — itt te vagy a főnök!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Hogyan működik a {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Készen áll arra, hogy elkezdje kriptokalandját Svájcban? A {{site_name}} használatával ez egy darab sütemény! Egyszerűen regisztráljon online, fizessen be pénzt, és készen áll a indulásra. Akár kriptográfiai, akár újonc vagy, a {{site_name}} megkönnyíti a munkát: egyéni beállítások, intuitív irányítópultok, kézi vagy automatizált kereskedés — itt te vagy a főnök!</p>
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
								<h2 class="main-form__title">Ez a kereskedés a {{site_name}}™</h2>
								<p class="main-form__text">Mi vagyunk a legmegbízhatóbb hely az egyének és a vállalkozások számára a kriptográfia vásárlására, eladására és kezelésére.</p>
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
					<h2 class="block-13__title">Kiemelt elemek a (z) {{site_name}}™ oldalról</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">platform típusa</dt>
							<dd class="block-13-list__value">Kriptovaluta kereskedési rendszer mesterséges intelligenciával (Bitcoin, Litecoin, Ethereum stb.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">befektetési alapok</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash és számos más népszerű kriptovaluta</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Adatvédelem</dt>
							<dd class="block-13-list__value">Igen, az adatvédelem a svájci adatvédelmi irányelvvel összhangban történik</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">költségek</dt>
							<dd class="block-13-list__value">{{site_name}} Svájc ingyenesen használható</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Betéti lehetőségek</dt>
							<dd class="block-13-list__value">Hitelkártya, PayPal és közvetlen banki átutalás</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">földek</dt>
							<dd class="block-13-list__value">Világszerte elérhető a hozzáférés</dd>
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