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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Strona główna</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Korzyści</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Nasz zespół</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Skontaktuj się z nami</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Rejestracja</a>
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
								<h2 class="main-form__title">Witamy w {{site_name}} przysięgam!</h2>
								<p class="main-form__text">Przeżyj nową erę handlu dzięki naszej rewolucyjnej platformie handlu kryptowalutami. Dzięki zaawansowanej technologii AI {{site_name}} możesz zmaksymalizować swoje zyski i podejmować świadome decyzje.</p>
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
									<p class="block-2-slider-slide__desc">Dostępne waluty</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Zweryfikowani użytkownicy</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 mln</p>
									<p class="block-2-slider-slide__desc">Wolumen obrotu</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Obsługiwane kraje</p>
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
							<h1 class="block-1__title">Informacje o {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Przeżyj nową erę handlu dzięki naszej rewolucyjnej platformie handlu kryptowalutami. Dzięki zaawansowanej technologii AI {{site_name}} możesz zmaksymalizować swoje zyski i podejmować świadome decyzje.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Czytaj więcej</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Dlaczego warto wybrać {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} jest preferowanym wyborem dla handlowców kryptowalut w Szwajcarii. Od bezpieczeństwa i przejrzystości po potężne algorytmy i przyjazny dla użytkownika interfejs, oferujemy wszystko, czego potrzebujesz do udanego handlu.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="obrazek">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Poręczenie</h4>
											<p class="block-3-slide__text">Najwyższe standardy ochrony danych i inwestycji.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="obrazek">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalizacja</h4>
											<p class="block-3-slide__text">Spersonalizuj strategie handlowe zgodnie ze swoimi preferencjami.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="obrazek">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Demo wolne od ryzyka</h4>
											<p class="block-3-slide__text">Zdobądź praktyczne doświadczenie bez korzystania z prawdziwego kapitału.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="obrazek">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Strategie AI</h4>
											<p class="block-3-slide__text">Dokładne sygnały handlowe dla udanych decyzji.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="obrazek">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Zautomatyzowany handel</h4>
											<p class="block-3-slide__text">Wydajne, zorientowane na zysk transakcje z wykorzystaniem botów AI.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="obrazek">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Przyjazny dla użytkownika interfejs</h4>
											<p class="block-3-slide__text">Intuicyjny dla wszystkich użytkowników, ułatwia rozpoczęcie handlu.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Zrewolucjonizuj świat finansowy dzięki {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Rejestracja</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="obrazek">
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
								<h2 class="block-10__title">Wydajny handel!</h2>
								<div class="block-10__desc">
									<p>Handluj łatwo i bezpiecznie i osiągaj zyski! Przeglądaj różne kryptowaluty, takie jak Bitcoin, Ethereum i Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Rejestracja</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Rysunek"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Nasi partnerzy</h2>
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
							<h2 class="block-9-header__title">Jak zacząć korzystać z {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Dowiedz się, jak łatwo jest rozpocząć handel kryptowalutami z {{site_name}}. Od rejestracji do pierwszego depozytu poprowadzimy Cię przez proces krok po kroku.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Zarejestruj się</h3>
							<p class="block-9-item__text">Po prostu zarejestruj się online, podaj swoje dane osobowe i uzyskaj bezpieczny dostęp do {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Walidacji</h3>
							<p class="block-9-item__text">Po otrzymaniu e-maila z potwierdzeniem możesz od razu rozpocząć handel.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Otwórz konto</h3>
							<p class="block-9-item__text">Możesz otworzyć swoje konto handlowe za pomocą depozytu w wysokości 250 CHF. Ale bądź ostrożny: większe inwestycje oznaczają większe szanse na zysk, ale także ryzyko strat. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Wpłać pieniądze na swoje konto</h3>
							<p class="block-9-item__text">Przelew bankowy, e-portfel lub karta kredytowa — wybór należy do Ciebie. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Dostosuj swoje konto</h3>
							<p class="block-9-item__text">Dostosuj swoje konto do swoich potrzeb Określ apetyt na ryzyko, ustal cele handlowe i określ parametry handlu kryptowalutami. Nasi doświadczeni szwajcarscy brokerzy są gotowi pomóc Ci podjąć pierwsze kroki - zautomatyzowane lub ręczne - wszystko jest w Twoich rękach.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Rozpocznij swoją podróż handlową</h3>
							<p class="block-9-item__text">Teraz jesteś gotowy do wyjazdu. {{site_name}}™ to klucz do sukcesu na rynku kryptowalut. Rozpocznij swoją podróż handlową już teraz i skorzystaj z możliwości w świecie walut cyfrowych!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Rejestracja</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ oferuje wiele metod płatności na całym świecie.</p>
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
						<h2 class="quotes__title">{{site_name}}™ recenzje</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Fantastyczna platforma handlowa to {{site_name}}! Łatwa rejestracja, przejrzyste opłaty i profesjonalne wsparcie sprawiają, że handel jest płynny i udany. Jestem bardzo zadowolony i polecam je wszystkim sprzedawcom!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Monachium</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dzięki {{site_name}} z łatwością zacząłem handlować kryptowalutami. Łatwa rejestracja, świetne wsparcie, i uczciwe opłaty. Platforma sprawia, że czuję się bezpiecznie i profesjonalnie!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} jest niezawodnym partnerem w świecie handlu kryptowalutami. Łatwa rejestracja, jasne warunki i wsparcie ekspertów. Handel na tej platformie to przyjemność!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="osoba"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Dzięki {{site_name}} opanowałem rozpoczęcie handlu kryptowalutami bez wysiłku! Rejestracja była bardzo łatwa, a przejrzyste opłaty to prawdziwy plus. Jako trader czuję się bardzo komfortowo i profesjonalnie wspierany na tej platformie.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="osoba"></figure>
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
								<span class="faq-spoiler__control-text">Jak korzystać z {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Gotowy na rozpoczęcie przygody kryptograficznej w Szwajcarii? Z {{site_name}} jest to kawałek ciasta! Po prostu zarejestruj się online, wpłać pieniądze i jesteś gotowy do pracy. Niezależnie od tego, czy jesteś kryptograficznym, czy nowicjuszem, {{site_name}} ułatwia to: indywidualne ustawienia, intuicyjne pulpity nawigacyjne, handel ręczny lub automatyczny — jesteś tutaj szefem!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Jaka jest minimalna inwestycja dla {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Gotowy na rozpoczęcie przygody kryptograficznej w Szwajcarii? Z {{site_name}} jest to kawałek ciasta! Po prostu zarejestruj się online, wpłać pieniądze i jesteś gotowy do pracy. Niezależnie od tego, czy jesteś kryptograficznym, czy nowicjuszem, {{site_name}} ułatwia to: indywidualne ustawienia, intuicyjne pulpity nawigacyjne, handel ręczny lub automatyczny — jesteś tutaj szefem!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Jakie rynki obsługuje {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Gotowy na rozpoczęcie przygody kryptograficznej w Szwajcarii? Z {{site_name}} jest to kawałek ciasta! Po prostu zarejestruj się online, wpłać pieniądze i jesteś gotowy do pracy. Niezależnie od tego, czy jesteś kryptograficznym, czy nowicjuszem, {{site_name}} ułatwia to: indywidualne ustawienia, intuicyjne pulpity nawigacyjne, handel ręczny lub automatyczny — jesteś tutaj szefem!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Jak wypłacasz pieniądze z {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Gotowy na rozpoczęcie przygody kryptograficznej w Szwajcarii? Z {{site_name}} jest to kawałek ciasta! Po prostu zarejestruj się online, wpłać pieniądze i jesteś gotowy do pracy. Niezależnie od tego, czy jesteś kryptograficznym, czy nowicjuszem, {{site_name}} ułatwia to: indywidualne ustawienia, intuicyjne pulpity nawigacyjne, handel ręczny lub automatyczny — jesteś tutaj szefem!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Jak działa {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Gotowy na rozpoczęcie przygody kryptograficznej w Szwajcarii? Z {{site_name}} jest to kawałek ciasta! Po prostu zarejestruj się online, wpłać pieniądze i jesteś gotowy do pracy. Niezależnie od tego, czy jesteś kryptograficznym, czy nowicjuszem, {{site_name}} ułatwia to: indywidualne ustawienia, intuicyjne pulpity nawigacyjne, handel ręczny lub automatyczny — jesteś tutaj szefem!</p>
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
								<h2 class="main-form__title">To jest handel z {{site_name}}™</h2>
								<p class="main-form__text">Jesteśmy najbardziej zaufanym miejscem dla osób fizycznych i firm do kupowania, sprzedawania i zarządzania kryptowalutami.</p>
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
					<h2 class="block-13__title">Najważniejsze informacje z {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">typ platformy</dt>
							<dd class="block-13-list__value">System handlu kryptowalutami ze sztuczną inteligencją (Bitcoin, Litecoin, Ethereum itp.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">fundusze inwestycyjne</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash i różne inne popularne kryptowaluty</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Ochrona danych</dt>
							<dd class="block-13-list__value">Tak, ochrona danych jest zapewniona zgodnie ze szwajcarską dyrektywą o ochronie danych</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">wydatki</dt>
							<dd class="block-13-list__value">{{site_name}} Szwajcaria może być używana bezpłatnie</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Opcje wpłaty</dt>
							<dd class="block-13-list__value">Karta kredytowa, PayPal i bezpośredni przelew bankowy</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">ląduje</dt>
							<dd class="block-13-list__value">Dostępny jest dostęp na całym świecie</dd>
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