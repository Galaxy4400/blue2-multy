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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Hem</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plattform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Fördelar</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Vårt team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontakta oss</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrera</a>
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
								<h2 class="main-form__title">Välkommen till {{site_name}} svär!</h2>
								<p class="main-form__text">Upplev en ny era av handel med vår revolutionerande kryptohandelsplattform. Med {{site_name}} s avancerade AI-teknik kan du maximera dina vinster och fatta välgrundade beslut.</p>
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
									<p class="block-2-slider-slide__desc">Valutor tillgängliga</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Verifierade användare</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 miljoner</p>
									<p class="block-2-slider-slide__desc">Handelsvolym</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Länder som stöds</p>
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
							<p class="block-1__text">Upplev en ny era av handel med vår revolutionerande kryptohandelsplattform. Med {{site_name}} s avancerade AI-teknik kan du maximera dina vinster och fatta välgrundade beslut.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Läs mer</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Varför välja {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} är det föredragna valet för kryptohandlare i Schweiz. Från säkerhet och transparens till kraftfulla algoritmer och ett användarvänligt gränssnitt erbjuder vi allt du behöver för framgångsrik handel.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="bild">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Säkerhet</h4>
											<p class="block-3-slide__text">Högsta standarder för data- och investeringsskydd.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="bild">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Anpassning</h4>
											<p class="block-3-slide__text">Anpassa handelsstrategier enligt dina preferenser.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="bild">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Riskfri demo</h4>
											<p class="block-3-slide__text">Få praktisk erfarenhet utan att använda verkligt kapital.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="bild">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI-strategier</h4>
											<p class="block-3-slide__text">Exakta handelssignaler för framgångsrika beslut.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="bild">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatiserad handel</h4>
											<p class="block-3-slide__text">Effektiva, vinstorienterade affärer med AI-bots.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="bild">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Användarvänligt gränssnitt</h4>
											<p class="block-3-slide__text">Intuitivt för alla användare, gör det enkelt att börja handla.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revolutionera finansvärlden med {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrera</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="bild">
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
									<p>Handla enkelt och säkert och tjäna vinster! Utforska olika kryptovalutor som Bitcoin, Ethereum och Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrera</a>
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
					<h2 class="partners__title">Våra samarbetspartners</h2>
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
							<h2 class="block-9-header__title">Hur kommer jag igång med {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Lär dig hur enkelt det är att komma igång med kryptohandel med {{site_name}}. Från registrering till din första insättning guidar vi dig genom processen steg för steg.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Anmäl dig</h3>
							<p class="block-9-item__text">Registrera dig helt enkelt online, fyll i dina personuppgifter och få säker åtkomst till {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validera</h3>
							<p class="block-9-item__text">När du har fått ditt bekräftelsemeddelande kan du börja handla direkt.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Öppna ett konto</h3>
							<p class="block-9-item__text">Du kan öppna ditt handelskonto med bara en insättning på 250 CHF. Men var försiktig: Större investeringar innebär högre vinstmöjligheter, men också risker för förlust. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Sätt in pengar på ditt konto</h3>
							<p class="block-9-item__text">Banköverföring, e-plånbok eller kreditkort - valet är ditt. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Anpassa ditt konto</h3>
							<p class="block-9-item__text">Skräddarsy ditt konto för att passa dina behov Bestäm din riskaptit, sätt handelsmål och bestäm dina parametrar för handel med kryptovalutor. Våra erfarna schweiziska mäklare är redo att hjälpa dig att ta dina första steg - automatiserade eller manuella - allt är i dina händer.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Börja din handelsresa</h3>
							<p class="block-9-item__text">Nu är du redo att gå. {{site_name}}™ är din nyckel till framgång på kryptovalutamarknaden. Börja din handelsresa nu och dra nytta av möjligheterna i världen av digitala valutor!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrera</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ erbjuder flera betalningsmetoder över hela världen.</p>
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
						<h2 class="quotes__title">{{site_name}}™ recensioner</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">En fantastisk handelsplattform är {{site_name}}! Enkel registrering, transparenta avgifter och professionellt stöd gör handeln smidig och framgångsrik. Jag är mycket nöjd och rekommenderar dem till alla återförsäljare!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Tack vare {{site_name}} har jag enkelt börjat handla kryptovalutor. Enkel registrering, bra support, och rättvisa avgifter. Plattformen får mig att känna mig trygg och professionell!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} är en pålitlig partner i kryptohandelsvärlden. Enkel registrering, tydliga villkor och expertsupport. Att handla på denna plattform är ett nöje!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Tack vare {{site_name}} har jag behärskat att komma igång med kryptohandel utan problem! Att registrera sig var superenkelt, och de transparenta avgifterna är ett riktigt plus. Som näringsidkare känner jag mig väldigt bekväm och professionellt stödd på denna plattform.</p>
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
								<span class="faq-spoiler__control-text">Hur använder jag {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Redo att starta ditt kryptoäventyr i Schweiz? Med {{site_name}} är det en bit kaka! Registrera dig bara online, sätt in pengar och du är redo att gå. Oavsett om du är en kryptocrack eller en nybörjare gör {{site_name}} det enkelt: individuella inställningar, intuitiva instrumentpaneler, manuell eller automatiserad handel — du är chefen här!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Vad är minsta investering för {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Redo att starta ditt kryptoäventyr i Schweiz? Med {{site_name}} är det en bit kaka! Registrera dig bara online, sätt in pengar och du är redo att gå. Oavsett om du är en kryptocrack eller en nybörjare gör {{site_name}} det enkelt: individuella inställningar, intuitiva instrumentpaneler, manuell eller automatiserad handel — du är chefen här!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Vilka marknader stöder {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Redo att starta ditt kryptoäventyr i Schweiz? Med {{site_name}} är det en bit kaka! Registrera dig bara online, sätt in pengar och du är redo att gå. Oavsett om du är en kryptocrack eller en nybörjare gör {{site_name}} det enkelt: individuella inställningar, intuitiva instrumentpaneler, manuell eller automatiserad handel — du är chefen här!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hur tar man ut pengar från {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Redo att starta ditt kryptoäventyr i Schweiz? Med {{site_name}} är det en bit kaka! Registrera dig bara online, sätt in pengar och du är redo att gå. Oavsett om du är en kryptocrack eller en nybörjare gör {{site_name}} det enkelt: individuella inställningar, intuitiva instrumentpaneler, manuell eller automatiserad handel — du är chefen här!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hur fungerar {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Redo att starta ditt kryptoäventyr i Schweiz? Med {{site_name}} är det en bit kaka! Registrera dig bara online, sätt in pengar och du är redo att gå. Oavsett om du är en kryptocrack eller en nybörjare gör {{site_name}} det enkelt: individuella inställningar, intuitiva instrumentpaneler, manuell eller automatiserad handel — du är chefen här!</p>
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
								<h2 class="main-form__title">Detta handlar med {{site_name}}™</h2>
								<p class="main-form__text">Vi är den mest betrodda platsen för privatpersoner och företag att köpa, sälja och hantera krypto.</p>
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
					<h2 class="block-13__title">Höjdpunkter från {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">plattformstyp</dt>
							<dd class="block-13-list__value">Kryptovalutahandelssystem med artificiell intelligens (Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investeringsfonder</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash och olika andra populära kryptovalutor</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Dataskydd</dt>
							<dd class="block-13-list__value">Ja, dataskydd tillhandahålls i enlighet med det schweiziska dataskyddsdirektivet</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">kostnader</dt>
							<dd class="block-13-list__value">{{site_name}} Schweiz kan användas gratis</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Insättningsalternativ</dt>
							<dd class="block-13-list__value">Kreditkort, PayPal och direkt banköverföring</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">landar</dt>
							<dd class="block-13-list__value">Åtkomst över hela världen är tillgänglig</dd>
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