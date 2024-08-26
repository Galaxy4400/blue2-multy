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

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">Vítejte v {{site_name}} přísahám!</h2>
								<p class="main-form__text">Zažijte novou éru obchodování s naší revoluční platformou pro obchodování s kryptoměnami. Díky pokročilé technologii umělé inteligence {{site_name}} můžete maximalizovat své zisky a činit informovaná rozhodnutí.</p>
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
									<p class="block-2-slider-slide__desc">Dostupné měny</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Ověření uživatelé</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 milionů dolarů</p>
									<p class="block-2-slider-slide__desc">Objem obchodování</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Podporované země</p>
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
							<h1 class="block-1__title">O {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Zažijte novou éru obchodování s naší revoluční platformou pro obchodování s kryptoměnami. Díky pokročilé technologii umělé inteligence {{site_name}} můžete maximalizovat své zisky a činit informovaná rozhodnutí.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Čtěte více</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Proč zvolit {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} je preferovanou volbou pro obchodníky s kryptoměnami ve Švýcarsku. Od bezpečnosti a transparentnosti až po výkonné algoritmy a uživatelsky přívětivé rozhraní, nabízíme vše, co potřebujete pro úspěšné obchodování.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="obraz">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Záruka</h4>
											<p class="block-3-slide__text">Nejvyšší standardy ochrany dat a investic.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="obraz">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalizace</h4>
											<p class="block-3-slide__text">Přizpůsobte si obchodní strategie podle svých preferencí.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="obraz">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Bezrizikové demo</h4>
											<p class="block-3-slide__text">Získejte praktické zkušenosti bez použití skutečného kapitálu.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="obraz">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Strategie AI</h4>
											<p class="block-3-slide__text">Přesné obchodní signály pro úspěšná rozhodnutí.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="obraz">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatizované obchodování</h4>
											<p class="block-3-slide__text">Efektivní, ziskově orientované obchody využívající roboty AI.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="obraz">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Uživatelsky přívětivé rozhraní</h4>
											<p class="block-3-slide__text">Intuitivní pro všechny uživatele, usnadňuje zahájení obchodování.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Proveďte revoluci ve finančním světě s {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrovat</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="obraz">
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
								<h2 class="block-10__title">Efektivní obchodování!</h2>
								<div class="block-10__desc">
									<p>Obchodujte snadno a bezpečně a vydělávejte! Prozkoumejte různé kryptoměny, jako jsou Bitcoin, Ethereum a Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrovat</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Obrázek"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Naši partneři</h2>
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
							<h2 class="block-9-header__title">Jak mohu začít s {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Zjistěte, jak snadné je začít s obchodováním s kryptoměnami s {{site_name}}. Od registrace až po váš první vklad vás provedeme procesem krok za krokem.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Zaregistrujte se</h3>
							<p class="block-9-item__text">Jednoduše se zaregistrujte online, vyplňte své osobní údaje a získejte bezpečný přístup k {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Ověřit</h3>
							<p class="block-9-item__text">Jakmile obdržíte potvrzovací e-mail, můžete okamžitě začít obchodovat.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Otevřete si účet</h3>
							<p class="block-9-item__text">Svůj obchodní účet si můžete otevřít pouhým vkladem 250 CHF. Ale buďte opatrní: Větší investice znamenají vyšší ziskové příležitosti, ale také riziko ztráty. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Vložte peníze na svůj účet</h3>
							<p class="block-9-item__text">Bankovní převod, elektronická peněženka nebo kreditní karta — volba je na vás. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Přizpůsobte si svůj účet</h3>
							<p class="block-9-item__text">Přizpůsobte si svůj účet tak, aby vyhovoval vašim potřebám Určete svou chuť k riziku, stanovte obchodní cíle, a určete své parametry pro obchodování s kryptoměnami. Naši zkušení švýcarští makléři jsou připraveni vám pomoci udělat první kroky - automatizované nebo manuální - vše je ve vašich rukou.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Začněte svou obchodní cestu</h3>
							<p class="block-9-item__text">Nyní jste připraveni jít. {{site_name}}™ je váš klíč k úspěchu na trhu kryptoměn. Začněte svou obchodní cestu hned teď a využijte příležitostí ve světě digitálních měn!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrovat</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ nabízí více platebních metod po celém světě.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="pohled">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="pohled">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="pohled">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="pohled">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ recenze</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Fantastická obchodní platforma je {{site_name}}! Snadná registrace, transparentní poplatky a profesionální podpora činí obchodování hladkým a úspěšným. Jsem velmi spokojen a doporučuji je všem prodejcům!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Mnichov</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Díky {{site_name}} jsem snadno začal obchodovat s kryptoměnami. Snadná registrace, skvělá podpora, a spravedlivé poplatky. Díky platformě se cítím bezpečně a profesionálně!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburk</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} je spolehlivým partnerem ve světě obchodování s kryptoměnami. Snadná registrace, jasné podmínky a odborná podpora. Obchodování na této platformě je potěšením!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlín</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Díky {{site_name}} jsem zvládl začít s obchodováním s kryptoměnami bez námahy! Registrace byla velmi snadná, a transparentní poplatky jsou skutečným plusem. Jako obchodník se na této platformě cítím velmi pohodlně a profesionálně podporován.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurt nad Mohanem</p>
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
<span class="faq-spoiler__control-text">Jak mohu použít {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Jste připraveni zahájit své krypto dobrodružství ve Švýcarsku? S {{site_name}} je to hračka! Jednoduše se zaregistrujte online, vložte peníze a jste připraveni jít. Ať už jste krypto-crack nebo nováček, {{site_name}} vám to usnadní: individuální nastavení, intuitivní řídicí panely, ruční nebo automatizované obchodování — vy jste zde šéf!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Jaká je minimální investice pro {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Jste připraveni zahájit své krypto dobrodružství ve Švýcarsku? S {{site_name}} je to hračka! Jednoduše se zaregistrujte online, vložte peníze a jste připraveni jít. Ať už jste krypto-crack nebo nováček, {{site_name}} vám to usnadní: individuální nastavení, intuitivní řídicí panely, ruční nebo automatizované obchodování — vy jste zde šéf!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Které trhy podporuje {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Jste připraveni zahájit své krypto dobrodružství ve Švýcarsku? S {{site_name}} je to hračka! Jednoduše se zaregistrujte online, vložte peníze a jste připraveni jít. Ať už jste krypto-crack nebo nováček, {{site_name}} vám to usnadní: individuální nastavení, intuitivní řídicí panely, ruční nebo automatizované obchodování — vy jste zde šéf!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Jak vybíráte peníze z {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Jste připraveni zahájit své krypto dobrodružství ve Švýcarsku? S {{site_name}} je to hračka! Jednoduše se zaregistrujte online, vložte peníze a jste připraveni jít. Ať už jste krypto-crack nebo nováček, {{site_name}} vám to usnadní: individuální nastavení, intuitivní řídicí panely, ruční nebo automatizované obchodování — vy jste zde šéf!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Jak funguje {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Jste připraveni zahájit své krypto dobrodružství ve Švýcarsku? S {{site_name}} je to hračka! Jednoduše se zaregistrujte online, vložte peníze a jste připraveni jít. Ať už jste krypto-crack nebo nováček, {{site_name}} vám to usnadní: individuální nastavení, intuitivní řídicí panely, ruční nebo automatizované obchodování — vy jste zde šéf!</p>
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
								<h2 class="main-form__title">Toto je obchodování s {{site_name}}™</h2>
								<p class="main-form__text">Jsme nejdůvěryhodnějším místem pro jednotlivce a firmy k nákupu, prodeji a správě kryptoměn.</p>
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
					<h2 class="block-13__title">Nejzajímavější z {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">typ plošiny</dt>
							<dd class="block-13-list__value">Systém obchodování s kryptoměnami s umělou inteligencí (Bitcoin, Litecoin, Ethereum atd.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investiční fondy</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash a různé další populární kryptoměny</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Ochrana osobních údajů</dt>
							<dd class="block-13-list__value">Ano, ochrana údajů je poskytována v souladu se švýcarskou směrnicí o ochraně osobních údajů</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">výdaje</dt>
							<dd class="block-13-list__value">{{site_name}} Švýcarsko lze využívat zdarma</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Možnosti vkladu</dt>
							<dd class="block-13-list__value">Kreditní karta, PayPal a přímý bankovní převod</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">země</dt>
							<dd class="block-13-list__value">K dispozici je celosvětový přístup</dd>
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