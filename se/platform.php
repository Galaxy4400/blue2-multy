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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Hem</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>platform.php">Plattform</a></li>
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

			<section class="block-14">
				<div class="block-14__container _container">
					<div class="block-14__body">
						<div class="block-14__column block-14__column_content">
							<div class="block-14__content">
								<h2 class="block-14__title">Digital analys {{site_name}}™</h2>
								<p class="block-14__text">Få värdefulla insikter och driva tillväxt med vår avancerade analys. Fatta datadrivna beslut med tillförsikt. Förfina din strategi och få fantastiska resultat.</p>
							</div>
						</div>
						<div class="block-14__column block-14__column_actions">
							<div class="block-14__actions block-14-actions">
								<div class="block-14-actions__bottom">
									<a class="block-14-actions__btn btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrera</a>
								</div>
								<div class="block-14-actions__top">
									<div class="block-14-actions__column">
										<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/google-pay.svg" alt="Google Pay"></a>
									</div>
									<div class="block-14-actions__column">
										<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/app-store.svg" alt="App Store"></a>
									</div>
								</div>
							</div>
							<figure class="block-14__image">
								<img src="<?=$dir_prefix?>assets/img/deco/5.webp" alt="bild">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-15">
				<div class="block-15__container _container">
					<div class="block-15__body">
						<div class="block-15__column">
							<h2 class="block-15__title">Digital webbapplikation</h2>
							<div class="block-15__column block-15__column_items">
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/1.svg" alt="bild">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Kapitalmarknaden</h3>
										<p class="block-15-item__label">Allt med en knapptryckning</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/2.svg" alt="bild">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Statistik</h3>
										<p class="block-15-item__label">Njut av all data</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/3.svg" alt="bild">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Mobilvy</h3>
										<p class="block-15-item__label">Använd via din mobiltelefon</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/4.svg" alt="bild">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Hantering av kryptovaluta</h3>
										<p class="block-15-item__label">Få tillgång till alla tillgångar</p>
									</div>
								</div>
							</div>
						</div>
						<div class="block-15__column">
							<div class="block-15__column block-15__column_image">
								<figure class="block-15__image">
									<img src="<?=$dir_prefix?>assets/img/deco/7.webp" alt="Deco">
								</figure>
							</div>
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

			<section class="block-16">
				<div class="block-16__container _container">
					<h2 class="block-16__title">{{site_name}} digitala funktioner</h2>
					<div class="block-16__body">
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Portfölj</h4>
								<p class="block-16-item__text">Här visar jag min yrkeskarriär baserad på imponerande projekt och kreativa lösningar.</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Köp kryptovaluta</h4>
								<p class="block-16-item__text">En säker och enkel plattform för att köpa kryptovalutor. Snabba transaktioner, minimala provisioner. Börja handla nu!</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Kryptoanalys</h4>
								<p class="block-16-item__text">Läs mer om marknadsvärden och trender så att du kan fatta investerings- och affärsbeslut.</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Kryptotillgångar</h4>
								<p class="block-16-item__text">Utforska framtiden för finans med ledande kryptovalutor. Upptäck, investera, växa.</p>
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
								<h2 class="main-form__title">Låt oss gå!</h2>
								<p class="main-form__text">Dyk in i världen av kryptovalutor! Redo att dyka in i kryptovalutavärlden och erövra handelsmarknaden? Med {{site_name}} upplever schweiziska handlare en handelsupplevelse som kombinerar innovation, effektivitet och vinstmöjligheter.</p>
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

		</main>

		<?php include 'footer.php' ?>
	</div>




	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
	</button>

<?php include 'scripts.php' ?>

</body>

</html>
<?php include 'ywbp.php'; ?>