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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platformen</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Fordele</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Vores team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontakt os</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Tilmeld</a>
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
								<h2 class="main-form__title">Velkommen til {{site_name}} sværge!</h2>
								<p class="main-form__text">Oplev en ny æra med handel med vores revolutionerende kryptohandelsplatform. Med {{site_name}}&#39;s avancerede AI-teknologi kan du maksimere din fortjeneste og træffe informerede beslutninger.</p>
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
									<p class="block-2-slider-slide__desc">Tilgængelige valutaer</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Bekræftede brugere</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 millioner</p>
									<p class="block-2-slider-slide__desc">Handelsvolumen</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Understøttede lande</p>
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
							<p class="block-1__text">Oplev en ny æra med handel med vores revolutionerende kryptohandelsplatform. Med {{site_name}}&#39;s avancerede AI-teknologi kan du maksimere din fortjeneste og træffe informerede beslutninger.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Læs mere</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Hvorfor vælge {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} er det foretrukne valg for kryptohandlere i Schweiz. Fra sikkerhed og gennemsigtighed til kraftfulde algoritmer og en brugervenlig grænseflade tilbyder vi alt hvad du behøver for vellykket handel.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="billede">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Kaution</h4>
											<p class="block-3-slide__text">Højeste standarder for data- og investeringsbeskyttelse.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="billede">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalisering</h4>
											<p class="block-3-slide__text">Tilpas handelsstrategier i henhold til dine præferencer.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="billede">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Risikofri demo</h4>
											<p class="block-3-slide__text">Få praktisk erfaring uden at bruge reel kapital.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="billede">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI-strategier</h4>
											<p class="block-3-slide__text">Nøjagtige handelssignaler til vellykkede beslutninger.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="billede">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatiseret handel</h4>
											<p class="block-3-slide__text">Effektive, profitorienterede handler ved hjælp af AI-bots.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="billede">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Brugervenlig grænseflade</h4>
											<p class="block-3-slide__text">Intuitivt for alle brugere, gør det nemt at starte handel.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revolutionér finansverdenen med {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Tilmeld</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="billede">
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
									<p>Handle nemt og sikkert og få overskud! Udforsk forskellige kryptovalutaer såsom Bitcoin, Ethereum og Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Tilmeld</a>
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
					<h2 class="partners__title">Vores samarbejdspartnere</h2>
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
							<h2 class="block-9-header__title">Hvordan kommer jeg i gang med {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Lær, hvor nemt det er at komme i gang med kryptohandel med {{site_name}}. Fra registrering til din første indbetaling vil vi guide dig gennem processen trin for trin.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Tilmeld dig</h3>
							<p class="block-9-item__text">Du skal blot registrere dig online, udfylde dine personlige oplysninger og få sikker adgang til {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validere</h3>
							<p class="block-9-item__text">Når du har modtaget din bekræftelses-e-mail, kan du begynde at handle med det samme.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Åbn en konto</h3>
							<p class="block-9-item__text">Du kan åbne din handelskonto med blot et depositum på 250 CHF. Men pas på: Større investeringer betyder højere overskudsmuligheder, men også risiko for tab. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Indbetal penge på din konto</h3>
							<p class="block-9-item__text">Bankoverførsel, e-tegnebog eller kreditkort - valget er dit. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Tilpas din konto</h3>
							<p class="block-9-item__text">Skræddersy din konto, så den passer til dine behov Bestem din risikoappetit, sæt handelsmål, og bestem dine parametre for handel med kryptovalutaer. Vores erfarne schweiziske mæglere er klar til at hjælpe dig med at tage dine første skridt - automatiseret eller manuel - det hele er i dine hænder.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Start din handelsrejse</h3>
							<p class="block-9-item__text">Nu er du klar til at gå. {{site_name}}™ er din nøgle til succes på kryptovalutamarkedet. Start din handelsrejse nu og udnyt mulighederne i en verden af digitale valutaer!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Tilmeld</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ tilbyder flere betalingsmetoder over hele verden.</p>
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
								<p class="quotes-slide__text">En fantastisk handelsplatform er {{site_name}}! Nem registrering, gennemsigtige gebyrer og professionel support gør handel glat og vellykket. Jeg er meget tilfreds og anbefaler dem til alle forhandlere!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="menneske"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Takket være {{site_name}} er jeg nemt begyndt at handle kryptovalutaer. Nem registrering, god support, og rimelige gebyrer. Platformen får mig til at føle mig sikker og professionel!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="menneske"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamborg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} er en pålidelig partner i kryptohandelsverdenen. Nem registrering, klare vilkår og ekspertsupport. Handel på denne platform er en fornøjelse!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="menneske"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Takket være {{site_name}} har jeg mestret at komme i gang med kryptohandel ubesværet! Tilmelding var super let, og de gennemsigtige gebyrer er et reelt plus. Som erhvervsdrivende føler jeg mig meget komfortabel og professionelt understøttet på denne platform.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="menneske"></figure>
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
					<h2 class="faq__title">OFTE STILLEDE SPØRGSMÅL</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvordan bruger jeg {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til at starte dit kryptoeventyr i Schweiz? Med {{site_name}} er det et stykke kage! Du skal blot tilmelde dig online, indbetale penge, og du er klar til at gå. Uanset om du er en kryptocrack eller en nybegynder, gør {{site_name}} det nemt: individuelle indstillinger, intuitive dashboards, manuel eller automatiseret handel - du er chefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvad er minimumsinvesteringen for {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til at starte dit kryptoeventyr i Schweiz? Med {{site_name}} er det et stykke kage! Du skal blot tilmelde dig online, indbetale penge, og du er klar til at gå. Uanset om du er en kryptocrack eller en nybegynder, gør {{site_name}} det nemt: individuelle indstillinger, intuitive dashboards, manuel eller automatiseret handel - du er chefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvilke markeder understøtter {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til at starte dit kryptoeventyr i Schweiz? Med {{site_name}} er det et stykke kage! Du skal blot tilmelde dig online, indbetale penge, og du er klar til at gå. Uanset om du er en kryptocrack eller en nybegynder, gør {{site_name}} det nemt: individuelle indstillinger, intuitive dashboards, manuel eller automatiseret handel - du er chefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvordan hæver du penge fra {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til at starte dit kryptoeventyr i Schweiz? Med {{site_name}} er det et stykke kage! Du skal blot tilmelde dig online, indbetale penge, og du er klar til at gå. Uanset om du er en kryptocrack eller en nybegynder, gør {{site_name}} det nemt: individuelle indstillinger, intuitive dashboards, manuel eller automatiseret handel - du er chefen her!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Hvordan fungerer {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Klar til at starte dit kryptoeventyr i Schweiz? Med {{site_name}} er det et stykke kage! Du skal blot tilmelde dig online, indbetale penge, og du er klar til at gå. Uanset om du er en kryptocrack eller en nybegynder, gør {{site_name}} det nemt: individuelle indstillinger, intuitive dashboards, manuel eller automatiseret handel - du er chefen her!</p>
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
								<p class="main-form__text">Vi er det mest betroede sted for enkeltpersoner og virksomheder at købe, sælge og administrere krypto.</p>
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
					<h2 class="block-13__title">Højdepunkter fra {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">platformens type</dt>
							<dd class="block-13-list__value">Kryptovalutahandelssystem med kunstig intelligens (Bitcoin, Litecoin, Ethereum osv.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investeringsfonde</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash og forskellige andre populære kryptovalutaer</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Databeskyttelse</dt>
							<dd class="block-13-list__value">Ja, databeskyttelse ydes i overensstemmelse med det schweiziske databeskyttelsesdirektiv</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">udgifter</dt>
							<dd class="block-13-list__value">{{site_name}} Schweiz kan bruges gratis</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Indbetalingsmuligheder</dt>
							<dd class="block-13-list__value">Kreditkort, PayPal og direkte bankoverførsel</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">lander</dt>
							<dd class="block-13-list__value">Verdensomspændende adgang er tilgængelig</dd>
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