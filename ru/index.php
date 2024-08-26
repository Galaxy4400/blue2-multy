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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Главная</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Платформа</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Выгоды</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Наша команда</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Свяжитесь с нами</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Зарегистрируйтесь</a> 
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
								<h2 class="main-form__title">Добро пожаловать на {{site_name}} клянусь!</h2>
								<p class="main-form__text">Откройте для себя новую эру торговли с помощью нашей революционной платформы для торговли криптовалютами. Благодаря передовой технологии искусственного интеллекта {{site_name}} вы можете максимизировать прибыль и принимать взвешенные решения.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Деко">
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
									<p class="block-2-slider-slide__desc">Доступные валюты</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 км</p>
									<p class="block-2-slider-slide__desc">Проверенные пользователи</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 млн долларов</p>
									<p class="block-2-slider-slide__desc">Объем торгов</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Поддерживаемые страны</p>
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
							<h1 class="block-1__title">О сайте {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Откройте новую эру торговли с помощью нашей революционной платформы для торговли криптовалютами. Благодаря передовой технологии искусственного интеллекта {{site_name}} вы можете максимизировать прибыль и принимать взвешенные решения.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Узнайте больше</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Почему стоит выбрать {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} является предпочтительным выбором для криптотрейдеров в Швейцарии. Мы предлагаем все необходимое для успешной торговли: от безопасности и прозрачности до мощных алгоритмов и удобного интерфейса.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="образ">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">поручительство</h4>
											<p class="block-3-slide__text">Высочайшие стандарты защиты данных и инвестиций.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="образ">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Персонализация</h4>
											<p class="block-3-slide__text">Персонализируйте торговые стратегии в соответствии со своими предпочтениями.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="образ">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Безрисковая демоверсия</h4>
											<p class="block-3-slide__text">Получите практический опыт, не используя реальный капитал.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="образ">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Стратегии искусственного интеллекта</h4>
											<p class="block-3-slide__text">Точные торговые сигналы для принятия успешных решений.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="образ">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Автоматическая торговля</h4>
											<p class="block-3-slide__text">Эффективные сделки, ориентированные на прибыль, с использованием ботов с искусственным интеллектом.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="образ">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Удобный интерфейс</h4>
											<p class="block-3-slide__text">Интуитивно понятный для всех пользователей, позволяет легко начать торговать.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Совершите революцию в финансовом мире с помощью {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Зарегистрируйтесь</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="образ">
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
								<h2 class="block-10__title">Эффективная торговля!</h2>
								<div class="block-10__desc">
									<p>Торгуйте легко и безопасно и получайте прибыль! Изучите различные криптовалюты, такие как биткойн, Ethereum и Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Зарегистрируйтесь</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Рисунок"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Наши партнеры</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Партнер"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Партнер"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Как начать работу с {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Узнайте, как легко начать торговать криптовалютами с помощью {{site_name}}. От регистрации до внесения первого депозита мы поможем вам пройти этот процесс шаг за шагом.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Зарегистрируйтесь</h3>
							<p class="block-9-item__text">Просто зарегистрируйтесь онлайн, заполните свои личные данные и получите безопасный доступ к {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Подтвердите</h3>
							<p class="block-9-item__text">Получив электронное письмо с подтверждением, вы можете сразу же начать торговать.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Откройте счет</h3>
							<p class="block-9-item__text">Вы можете открыть свой торговый счет, внеся всего 250 швейцарских франков. Но будьте осторожны: большие инвестиции означают более высокие возможности получения прибыли, но также и риск убытков. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Внесите деньги на свой счет</h3>
							<p class="block-9-item__text">Банковский перевод, электронный кошелек или кредитная карта — выбор за вами. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Настройте свой аккаунт</h3>
							<p class="block-9-item__text">Настройте свою учетную запись в соответствии со своими потребностями. Определите свою склонность к риску, установите торговые цели и определите параметры торговли криптовалютами. Наши опытные швейцарские брокеры готовы помочь вам сделать первые шаги — в автоматическом или ручном режиме — все в ваших руках.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Начните свое торговое путешествие</h3>
							<p class="block-9-item__text">Теперь вы готовы к работе. {{site_name}}™ — ваш ключ к успеху на рынке криптовалют. Начните свой торговый путь прямо сейчас и воспользуйтесь возможностями в мире цифровых валют!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Зарегистрируйтесь</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ предлагает несколько способов оплаты по всему миру.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="карта">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="карта">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="карта">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="карта">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ отзывы</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Фантастическая торговая платформа — {{site_name}}! Простая регистрация, прозрачные комиссии и профессиональная поддержка делают торговлю гладкой и успешной. Я очень довольна и рекомендую их всем розничным продавцам!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="человек"></figure>
									<p class="quotes-slide__name h3">Йоханнес Беккер, Мюнхен</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Благодаря {{site_name}} я легко начал торговать криптовалютами. Простая регистрация, отличная поддержка и справедливые комиссии. Платформа позволяет мне чувствовать себя в безопасности и профессионально!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="человек"></figure>
									<p class="quotes-slide__name h3">Лукас Шнайдер, Гамбург</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} — надежный партнер в мире криптотрейдинга. Простая регистрация, понятные условия и экспертная поддержка. Торговать на этой платформе — одно удовольствие!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="человек"></figure>
									<p class="quotes-slide__name h3">Анна Фишер, Берлин</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Благодаря {{site_name}} я без труда освоила процесс торговли криптовалютами! Зарегистрироваться было очень просто, а прозрачные комиссии — настоящий плюс. Как трейдер, я чувствую себя очень комфортно и получаю профессиональную поддержку на этой платформе.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="человек"></figure>
									<p class="quotes-slide__name h3">Мари Хоффманн, Франкфурт</p>
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
					<h2 class="faq__title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Как использовать {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Готовы начать свое криптографическое приключение в Швейцарии? С {{site_name}} всё просто! Просто зарегистрируйтесь онлайн, внесите деньги, и все готово. Независимо от того, являетесь ли вы криптографом или новичком, в {{site_name}} все будет просто: индивидуальные настройки, интуитивно понятные панели управления, ручная или автоматическая торговля — вы здесь главный!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Какова минимальная сумма инвестиций для {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Готовы начать свое криптографическое приключение в Швейцарии? С {{site_name}} всё просто! Просто зарегистрируйтесь онлайн, внесите деньги, и все готово. Независимо от того, являетесь ли вы криптографом или новичком, в {{site_name}} все будет просто: индивидуальные настройки, интуитивно понятные панели управления, ручная или автоматическая торговля — вы здесь главный!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Какие рынки поддерживает {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Готовы начать свое криптографическое приключение в Швейцарии? С {{site_name}} всё просто! Просто зарегистрируйтесь онлайн, внесите деньги, и все готово. Независимо от того, являетесь ли вы криптографом или новичком, в {{site_name}} все будет просто: индивидуальные настройки, интуитивно понятные панели управления, ручная или автоматическая торговля — вы здесь главный!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Как вывести деньги с {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Готовы начать свое криптографическое приключение в Швейцарии? С {{site_name}} всё просто! Просто зарегистрируйтесь онлайн, внесите деньги, и все готово. Независимо от того, являетесь ли вы криптографом или новичком, в {{site_name}} все будет просто: индивидуальные настройки, интуитивно понятные панели управления, ручная или автоматическая торговля — вы здесь главный!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Как работает {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Готовы начать свое криптографическое приключение в Швейцарии? С {{site_name}} всё просто! Просто зарегистрируйтесь онлайн, внесите деньги, и все готово. Независимо от того, являетесь ли вы криптографом или новичком, в {{site_name}} все будет просто: индивидуальные настройки, интуитивно понятные панели управления, ручная или автоматическая торговля — вы здесь главный!</p>
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
								<h2 class="main-form__title">Это торговля с помощью {{site_name}}™</h2>
								<p class="main-form__text">Мы являемся самым надежным местом для покупки, продажи криптовалют и управления ими для частных лиц и компаний.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Деко">
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
					<h2 class="block-13__title">Основные моменты из {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">тип платформы</dt>
							<dd class="block-13-list__value">система торговли криптовалютами с искусственным интеллектом (Bitcoin, Litecoin, Ethereum и т.д.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">инвестиционные фонды</dt>
							<dd class="block-13-list__value">Биткойн, Litecoing, Ethereum, Ripple, Dash и другие популярные криптовалюты</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Защита данных</dt>
							<dd class="block-13-list__value">Да, защита данных обеспечивается в соответствии со Швейцарской директивой о защите данных</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">расходы</dt>
							<dd class="block-13-list__value">{{site_name}} Швейцарию можно использовать бесплатно</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Варианты пополнения счета</dt>
							<dd class="block-13-list__value">Кредитная карта, PayPal и прямой банковский перевод</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">земли</dt>
							<dd class="block-13-list__value">Доступен доступ по всему миру</dd>
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