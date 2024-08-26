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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Accueil</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plateforme</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Avantages</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Notre équipe</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Nous contacter</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">S&#39;inscrire</a>
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
								<h2 class="main-form__title">Bienvenue sur {{site_name}} swear !</h2>
								<p class="main-form__text">Découvrez une nouvelle ère de trading avec notre plateforme de trading cryptographique révolutionnaire. Grâce à la technologie d&#39;IA avancée de {{site_name}}, vous pouvez maximiser vos profits et prendre des décisions éclairées.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Déco">
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
									<p class="block-2-slider-slide__value h2">65 ans et plus</p>
									<p class="block-2-slider-slide__desc">Devises disponibles</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Utilisateurs vérifiés</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 millions de dollars</p>
									<p class="block-2-slider-slide__desc">Volume des transactions</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98 ans et plus</p>
									<p class="block-2-slider-slide__desc">Pays pris en charge</p>
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
							<h1 class="block-1__title">À propos de {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Découvrez une nouvelle ère de trading avec notre plateforme de trading cryptographique révolutionnaire. Grâce à la technologie d&#39;IA avancée de {{site_name}}, vous pouvez maximiser vos profits et prendre des décisions éclairées.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">En savoir plus</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Pourquoi choisir {{site_name}} ?</h2>
								<p class="block-3__desc">{{site_name}} est le choix préféré des traders de cryptomonnaies en Suisse. De la sécurité et de la transparence à de puissants algorithmes et à une interface conviviale, nous offrons tout ce dont vous avez besoin pour réussir vos transactions.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Caution</h4>
											<p class="block-3-slide__text">Les normes les plus strictes en matière de protection des données et des investissements.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personnalisation</h4>
											<p class="block-3-slide__text">Personnalisez les stratégies de trading en fonction de vos préférences.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Démo sans risque</h4>
											<p class="block-3-slide__text">Acquérez une expérience pratique sans utiliser de capital réel.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Stratégies d&#39;IA</h4>
											<p class="block-3-slide__text">Des signaux de trading précis pour des décisions réussies.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Trading automatisé</h4>
											<p class="block-3-slide__text">Des transactions efficaces et orientées vers le profit à l&#39;aide de robots IA.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Interface conviviale</h4>
											<p class="block-3-slide__text">Intuitif pour tous les utilisateurs, il est facile de commencer à trader.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Révolutionnez le monde financier avec {{site_name}}™ !</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">S&#39;inscrire</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="image">
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
								<h2 class="block-10__title">Un trading efficace !</h2>
								<div class="block-10__desc">
									<p>Négociez facilement et en toute sécurité et réalisez des bénéfices ! Explorez diverses crypto-monnaies telles que Bitcoin, Ethereum et Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">S&#39;inscrire</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Figurine"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Nos partenaires</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Partenaire"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Partenaire"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Comment démarrer avec {{site_name}}™ ?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Découvrez à quel point il est facile de démarrer avec le trading de cryptomonnaies avec {{site_name}}. De l&#39;inscription à votre premier dépôt, nous vous guiderons pas à pas tout au long du processus.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">INSCRIVEZ-VOUS</h3>
							<p class="block-9-item__text">Il vous suffit de vous inscrire en ligne, de renseigner vos informations personnelles et d&#39;accéder en toute sécurité à {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Valider</h3>
							<p class="block-9-item__text">Une fois que vous avez reçu votre e-mail de confirmation, vous pouvez commencer à trader immédiatement.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Ouvrez un compte</h3>
							<p class="block-9-item__text">Vous pouvez ouvrir votre compte de trading avec un simple dépôt de 250 CHF. Mais attention : des investissements plus importants se traduisent par de meilleures opportunités de profit, mais également par des risques de pertes. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Déposez de l&#39;argent sur votre compte</h3>
							<p class="block-9-item__text">Virement bancaire, portefeuille électronique ou carte de crédit : à vous de choisir. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Personnalisez votre compte</h3>
							<p class="block-9-item__text">Personnalisez votre compte en fonction de vos besoins Déterminez votre appétit pour le risque, définissez des objectifs de trading et déterminez vos paramètres de négociation de crypto-monnaies. Nos courtiers suisses expérimentés sont prêts à vous aider à faire vos premiers pas, qu&#39;ils soient automatisés ou manuels, tout est entre vos mains.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Commencez votre parcours de trading</h3>
							<p class="block-9-item__text">Maintenant tu es prête à partir. {{site_name}}™ est la clé de votre succès sur le marché des cryptomonnaies. Commencez votre parcours de trading dès maintenant et profitez des opportunités dans le monde des devises numériques !</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">S&#39;inscrire</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ propose plusieurs méthodes de paiement dans le monde entier.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="carte">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="carte">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="carte">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="carte">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ critiques</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Une plateforme de trading fantastique est {{site_name}} ! Une inscription facile, des frais transparents et une assistance professionnelle rendent le trading fluide et réussi. Je suis extrêmement satisfaite et je les recommande à tous les détaillants !</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="la personne"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Grâce à {{site_name}}, j&#39;ai facilement commencé à trader des cryptomonnaies. Inscription facile, excellent support et frais équitables. La plateforme me permet de me sentir en sécurité et professionnelle !</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="la personne"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hambourg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} est un partenaire fiable dans le monde du trading cryptographique. Inscription facile, conditions claires et assistance d&#39;experts. Négocier sur cette plateforme est un plaisir !</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="la personne"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Grâce à {{site_name}}, j&#39;ai appris à me lancer dans le trading de cryptomonnaies sans effort ! L&#39;inscription a été très facile et la transparence des frais est un réel avantage. En tant que trader, je me sens très à l&#39;aise et je suis soutenu professionnellement sur cette plateforme.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="la personne"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Francfort</p>
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
								<span class="faq-spoiler__control-text">Comment utiliser {{site_name}} ?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Prêt à démarrer votre aventure cryptographique en Suisse ? Avec {{site_name}}, c&#39;est un jeu d&#39;enfant ! Il vous suffit de vous inscrire en ligne, de déposer de l&#39;argent et vous êtes prêt à partir. Que vous soyez un adepte de la cryptographie ou un débutant, {{site_name}} vous facilite la tâche : paramètres individuels, tableaux de bord intuitifs, trading manuel ou automatisé, vous êtes le patron !</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Quel est l&#39;investissement minimum pour {{site_name}} ?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Prêt à démarrer votre aventure cryptographique en Suisse ? Avec {{site_name}}, c&#39;est un jeu d&#39;enfant ! Il vous suffit de vous inscrire en ligne, de déposer de l&#39;argent et vous êtes prêt à partir. Que vous soyez un adepte de la cryptographie ou un débutant, {{site_name}} vous facilite la tâche : paramètres individuels, tableaux de bord intuitifs, trading manuel ou automatisé, vous êtes le patron !</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Quels sont les marchés pris en charge par {{site_name}} ?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Prêt à démarrer votre aventure cryptographique en Suisse ? Avec {{site_name}}, c&#39;est un jeu d&#39;enfant ! Il vous suffit de vous inscrire en ligne, de déposer de l&#39;argent et vous êtes prêt à partir. Que vous soyez un adepte de la cryptographie ou un débutant, {{site_name}} vous facilite la tâche : paramètres individuels, tableaux de bord intuitifs, trading manuel ou automatisé, vous êtes le patron !</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Comment retirer de l&#39;argent depuis {{site_name}} ?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Prêt à démarrer votre aventure cryptographique en Suisse ? Avec {{site_name}}, c&#39;est un jeu d&#39;enfant ! Il vous suffit de vous inscrire en ligne, de déposer de l&#39;argent et vous êtes prêt à partir. Que vous soyez un adepte de la cryptographie ou un débutant, {{site_name}} vous facilite la tâche : paramètres individuels, tableaux de bord intuitifs, trading manuel ou automatisé, vous êtes le patron !</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Comment fonctionne {{site_name}} ?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Prêt à démarrer votre aventure cryptographique en Suisse ? Avec {{site_name}}, c&#39;est un jeu d&#39;enfant ! Il vous suffit de vous inscrire en ligne, de déposer de l&#39;argent et vous êtes prêt à partir. Que vous soyez un adepte de la cryptographie ou un débutant, {{site_name}} vous facilite la tâche : paramètres individuels, tableaux de bord intuitifs, trading manuel ou automatisé, vous êtes le patron !</p>
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
								<h2 class="main-form__title">C&#39;est un échange avec {{site_name}}™</h2>
								<p class="main-form__text">Nous sommes l&#39;endroit le plus fiable pour les particuliers et les entreprises qui souhaitent acheter, vendre et gérer des cryptomonnaies.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Déco">
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
					<h2 class="block-13__title">Points forts de {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">type de plateforme</dt>
							<dd class="block-13-list__value">Système de trading de cryptomonnaies avec intelligence artificielle (Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">fonds d&#39;investissement</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash et diverses autres crypto-monnaies populaires</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Protection des données</dt>
							<dd class="block-13-list__value">Oui, la protection des données est assurée conformément à la directive suisse sur la protection des données</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">les frais</dt>
							<dd class="block-13-list__value">{{site_name}} La Suisse peut être utilisée gratuitement</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Options de dépôt</dt>
							<dd class="block-13-list__value">Carte de crédit, PayPal et virement bancaire direct</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">terres</dt>
							<dd class="block-13-list__value">L&#39;accès est disponible dans le monde entier</dd>
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