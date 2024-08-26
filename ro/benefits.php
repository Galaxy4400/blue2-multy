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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Acasă</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>benefits.php">Beneficii</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Echipa noastra</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Contacteaza-ne</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Înregistrare</a> 
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

			<section class="block-17">
				<div class="block-17__container _container">
					<div class="block-17__body">
						<div class="block-17__column block-17__column_content">
							<div class="block-17__content">
								<h2 class="block-17__title">Obțineți Portfolio Tracker</h2>
								<p class="block-17__text">Deblocați rapid tranzacționarea: Înscrieți-vă, depuneți și începeți călătoria în doar 5 minute. Scufundați-vă acum!</p>
							</div>
						</div>
						<div class="block-17__column block-17__column_actions">
							<div class="block-17__actions block-17-actions">
								<div class="block-17-actions__bottom">
<a class="block-17-actions__btn btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Înregistrare</a> 
								</div>
								<div class="block-17-actions__top">
									<div class="block-17-actions__column">
<a class="block-17-actions__btn block-17-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/google-pay.svg" alt="Google Pay"></a>
									</div>
									<div class="block-17-actions__column">
<a class="block-17-actions__btn block-17-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/app-store.svg" alt="Magazin de aplicații"></a>
									</div>
								</div>
							</div>
							<figure class="block-17__image-2">
<img src="<?=$dir_prefix?>assets/img/deco/8.webp" alt="imagine">
							</figure>
						</div>
						<figure class="block-17__image-1" data-adapt="block-17__column_actions,991">
<img src="<?=$dir_prefix?>assets/img/deco/9.webp" alt="imagine">
						</figure>
					</div>
				</div>
			</section>

			<section class="block-18">
				<div class="block-18__container _container">
					<h2 class="block-18__title">Cum funcţionează</h2>
					<div class="block-18__body">
						<div class="block-18__item">
							<h3 class="block-18__item-title">Creați un cont</h3>
						</div>
						<div class="block-18__item">
							<h3 class="block-18__item-title">Reîncărcați-vă contul</h3>
						</div>
						<div class="block-18__item">
							<h3 class="block-18__item-title">Începeți să cumpărați și să vindeți</h3>
						</div>
					</div>
				</div>
			</section>

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">Aceasta se tranzacționează cu {{site_name}}™</h2>
								<p class="main-form__text">Suntem cel mai de încredere loc pentru persoane fizice și companii pentru a cumpăra, vinde și gestiona cripto.</p>
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