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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Namai</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>platform.php">Platforma</a></li>
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

			<section class="block-14">
				<div class="block-14__container _container">
					<div class="block-14__body">
						<div class="block-14__column block-14__column_content">
							<div class="block-14__content">
								<h2 class="block-14__title">Skaitmeninė analizė {{site_name}}™</h2>
								<p class="block-14__text">Gaukite vertingų įžvalgų ir skatinkite augimą naudodami mūsų pažangią analizę. Priimkite duomenimis pagrįstus sprendimus užtikrintai. Patikslinkite savo strategiją ir gaukite puikių rezultatų.</p>
							</div>
						</div>
						<div class="block-14__column block-14__column_actions">
							<div class="block-14__actions block-14-actions">
								<div class="block-14-actions__bottom">
<a class="block-14-actions__btn btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registruotis</a> 
								</div>
								<div class="block-14-actions__top">
									<div class="block-14-actions__column">
<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/google-pay.svg" alt="“Google Pay”"></a>
									</div>
									<div class="block-14-actions__column">
<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/app-store.svg" alt="Programėlių parduotuvė"></a>
									</div>
								</div>
							</div>
							<figure class="block-14__image">
<img src="<?=$dir_prefix?>assets/img/deco/5.webp" alt="vaizdas">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-15">
				<div class="block-15__container _container">
					<div class="block-15__body">
						<div class="block-15__column">
							<h2 class="block-15__title">Skaitmeninė žiniatinklio programa</h2>
							<div class="block-15__column block-15__column_items">
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/1.svg" alt="vaizdas">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Kapitalo rinka</h3>
										<p class="block-15-item__label">Viskas vienu mygtuko paspaudimu</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/2.svg" alt="vaizdas">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Statistika</h3>
										<p class="block-15-item__label">Mėgaukitės visais duomenimis</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/3.svg" alt="vaizdas">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Mobilus vaizdas</h3>
										<p class="block-15-item__label">Naudokite per savo mobilųjį telefoną</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/4.svg" alt="vaizdas">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">Kriptovaliutų valdymas</h3>
										<p class="block-15-item__label">Gaukite prieigą prie kiekvieno turto</p>
									</div>
								</div>
							</div>
						</div>
						<div class="block-15__column">
							<div class="block-15__column block-15__column_image">
								<figure class="block-15__image">
<img src="<?=$dir_prefix?>assets/img/deco/7.webp" alt="Deko">
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

			<section class="block-16">
				<div class="block-16__container _container">
					<h2 class="block-16__title">{{site_name}} skaitmeninės funkcijos</h2>
					<div class="block-16__body">
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Portfelis</h4>
								<p class="block-16-item__text">Čia parodau savo profesinę karjerą, paremtą įspūdingais projektais ir kūrybiniais sprendimais.</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Pirkite kriptovaliutą</h4>
								<p class="block-16-item__text">Saugi ir paprasta platforma kriptovaliutoms pirkti. Greitos operacijos, minimalūs komisiniai. Pradėkite prekiauti dabar!</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Kripto analizė</h4>
								<p class="block-16-item__text">Sužinokite daugiau apie rinkos vertybes ir tendencijas, kad galėtumėte priimti investicinius ir verslo sprendimus.</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">Kripto turtas</h4>
								<p class="block-16-item__text">Ištirkite finansų ateitį naudodami pirmaujančias kriptovaliutas. Atraskite, investuokite, augkite.</p>
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
								<h2 class="main-form__title">Eikime!</h2>
								<p class="main-form__text">Pasinerkite į kriptovaliutų pasaulį! Pasiruošę pasinerti į kriptovaliutų pasaulį ir užkariauti prekybos rinką? Naudodamiesi {{site_name}}, Šveicarijos prekybininkai patiria prekybos patirtį, kuri sujungia inovacijas, efektyvumą ir pelno galimybes.</p>
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

		</main>

		<?php include 'footer.php' ?>
	</div>




<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
</button>

<?php include 'scripts.php' ?>

</body>

</html>
<?php include 'ywbp.php'; ?>