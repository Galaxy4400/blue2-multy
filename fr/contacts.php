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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Accueil</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plateforme</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Avantages</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Notre équipe</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>contact-us.php">Nous contacter</a></li>
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

			<div class="page__inner page-inner">
				<header class="page-inner__header inner-header">
					<div class="inner-header__container _container">
						<nav class="inner-header__breadcrumbs breadcrumbs">
							<ul class="breadcrumbs__list">
								<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?=$language_suffix?>contact-us.php" title="Nous contacter">Nous contacter</a></li>
								<li class="breadcrumbs__item"><span class="breadcrumbs__current" title="FAQ">Contacts</span></li>
							</ul>
						</nav>
						<h1 class="inner-header__title">Contacts</h1>
					</div>
				</header>

				<div class="page-inner__sections">

					<div class="block-23">
						<div class="block-23__container _container">
							<div class="block-23__body">
								<div class="block-23__column block-23__column_table">
									<div class="block-13">
										<dl class="block-13__list block-13-list">
											<div class="block-13-list__item">
												<dt class="block-13-list__property h3">Courrier électronique</dt>
												<dd class="block-13-list__value"><a href="<?=$language_suffix?>mailto:support@{{domain}}">support@{{domain}}</a></dd>
											</div>
											<div class="block-13-list__item">
												<dt class="block-13-list__property h3">Téléphone</dt>
												<dd class="block-13-list__value"><a href="<?=$language_suffix?>+447537131289">+44 753 713 12 89</a></dd>
											</div>
											<div class="block-13-list__item">
												<dt class="block-13-list__property h3">Adresse</dt>
												<dd class="block-13-list__value">175 Piccadilly, St. James&#39;s, Londres W1J 9TB</dd>
											</div>
											<div class="block-13-list__item">
												<dt class="block-13-list__property h3">Suivez-nous</dt>
												<dd class="block-13-list__value">
													<ul class="block-13-list__links block-13-list-links">
														<li class="block-13-list-links__item"><a class="block-13-list-links__link" href="<?=$language_suffix?>#">Instagram</a></li>
														<li class="block-13-list-links__item"><a class="block-13-list-links__link" href="<?=$language_suffix?>#">Facebook</a></li>
														<li class="block-13-list-links__item"><a class="block-13-list-links__link" href="<?=$language_suffix?>#">TradingView</a></li>
														<li class="block-13-list-links__item"><a class="block-13-list-links__link" href="<?=$language_suffix?>#">Télégramme</a></li>
													</ul>
												</dd>
											</div>
										</dl>
									</div>
								</div>
								<div class="block-23__column block-23__column_image">
									<figure class="block-23__image _ibg">
										<img src="<?=$dir_prefix?>assets/img/deco/12.webp" alt="Déco">
									</figure>
								</div>
							</div>
						</div>
					</div>

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