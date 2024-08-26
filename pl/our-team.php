<?php
include_once 'aff.php';
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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Strona główna</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Korzyści</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>our-team.php">Nasz zespół</a></li>
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

			<section class="block-19">
				<div class="block-19__container _container">
					<div class="block-19__body">
						<div class="block-19__column block-19__column_left">
							<div class="block-19__main">
								<h2 class="block-19__title">Misja, wizja i wartości</h2>
								<div class="block-19__footer">
									<figure class="block-19__image">
										<img src="<?=$dir_prefix?>assets/img/deco/10.webp" alt="obrazek">
									</figure>
								</div>
							</div>
						</div>
						<div class="block-19__column block-19__column_right">
							<div class="block-19__content">
								<div class="block-19__item block-19-item">
									<figure class="block-19-item__image">
										<img src="<?=$dir_prefix?>assets/img/team/1.svg" alt="obrazek">
									</figure>
									<h3 class="block-19-item__title">P.o</h3>
									<p class="block-19-item__text">Wzmacnianie pozycji społeczności poprzez edukację, innowacje i zrównoważone praktyki w celu lepszej, bardziej sprawiedliwej przyszłości.</p>
								</div>
								<div class="block-19__item block-19-item">
									<figure class="block-19-item__image">
										<img src="<?=$dir_prefix?>assets/img/team/1.svg" alt="obrazek">
									</figure>
									<h3 class="block-19-item__title">Wizja</h3>
									<p class="block-19-item__text">Wspieranie uczciwości, innowacyjności i integracji dla bardziej pozytywnej i zrównoważonej społeczności globalnej.</p>
								</div>
								<div class="block-19__item block-19-item">
									<figure class="block-19-item__image">
										<img src="<?=$dir_prefix?>assets/img/team/1.svg" alt="obrazek">
									</figure>
									<h3 class="block-19-item__title">Wartości</h3>
									<p class="block-19-item__text">Wspieranie świata, w którym kreatywność i innowacje napędzają pozytywne zmiany i integrację.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-20">
				<div class="block-20__container _container">
					<h2 class="block-20__title title-h2">Nasz zespół zarządzający</h2>
					<div class="block-20__body">
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
								<img src="<?=$dir_prefix?>assets/img/people/1.webp" alt="Osoby">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">Pan Anderson</h4>
								<p class="block-20-item__text">Współzałożyciel</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
								<img src="<?=$dir_prefix?>assets/img/people/2.webp" alt="Osoby">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">Adam Levine</h4>
								<p class="block-20-item__text">Kierownik zakładu</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
								<img src="<?=$dir_prefix?>assets/img/people/3.webp" alt="Osoby">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">Mike Leto</h4>
								<p class="block-20-item__text">Menedżer produktu</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
								<img src="<?=$dir_prefix?>assets/img/people/4.webp" alt="osoba">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">Jannet Refi</h4>
								<p class="block-20-item__text">Inspektor finansowy</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
								<img src="<?=$dir_prefix?>assets/img/people/5.webp" alt="osoba">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">Regina</h4>
								<p class="block-20-item__text">Technika</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
								<img src="<?=$dir_prefix?>assets/img/people/6.webp" alt="osoba">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">Joe Amstrong</h4>
								<p class="block-20-item__text">Technika</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Nasi partnerzy</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Partner">
							</div>
							<div class="partners-slider__slide">
								<img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Partner">
							</div>
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