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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Domov</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Výhody</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Náš tím</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>contact-us.php">Kontaktujte nás</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrovať</a> 
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

			<div class="page__inner page-inner">
				<header class="page-inner__header inner-header">
					<div class="inner-header__container _container">
						<nav class="inner-header__breadcrumbs breadcrumbs">
							<ul class="breadcrumbs__list">
								<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?=$language_suffix?>contact-us.php" title="Kontaktujte nás">Kontaktujte nás</a></li>
								<li class="breadcrumbs__item"><span class="breadcrumbs__current" title="FAQ">FAQ</span></li>
							</ul>
						</nav>
						<h1 class="inner-header__title">FAQ</h1>
					</div>
				</header>

				<div class="page-inner__sections">

					<section class="faq">
						<div class="faq__container _container">
							<h2 class="faq__title">FAQ</h2>
							<div class="faq-spoiler" data-spoiler="faq-spoiler">
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ako môžem používať {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Aká je minimálna investícia pre {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ktoré trhy podporuje {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ako vyberáte peniaze z {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ako funguje {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">Ste pripravení začať svoje krypto dobrodružstvo vo Švajčiarsku? S {{site_name}} je to kúsok koláča! Jednoducho sa zaregistrujte online, vložte peniaze a ste pripravení ísť. Či už ste krypto crack alebo nováčik, {{site_name}} to uľahčuje: individuálne nastavenia, intuitívne dashboardy, manuálne alebo automatizované obchodovanie — ste tu šéfom!</p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<?php include 'forms/help.php' ?>

				</div>

			</div>
		</main>

		<?php include 'footer.php' ?>
	</div>




<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
</button>

<?php include 'scripts.php' ?>


</body>

</html>
<?php include 'ywbp.php'; ?>