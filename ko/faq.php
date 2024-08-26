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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">홈</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">플랫폼</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">혜택</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">우리 팀</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>contact-us.php">문의하기</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">등록하기</a> 
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
								<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?=$language_suffix?>contact-us.php" title="문의하기">문의하기</a></li>
								<li class="breadcrumbs__item"><span class="breadcrumbs__current" title="자주 묻는 질문">자주 묻는 질문</span></li>
							</ul>
						</nav>
						<h1 class="inner-header__title">자주 묻는 질문</h1>
					</div>
				</header>

				<div class="page-inner__sections">

					<section class="faq">
						<div class="faq__container _container">
							<h2 class="faq__title">자주 묻는 질문</h2>
							<div class="faq-spoiler" data-spoiler="faq-spoiler">
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">{{site_name}} 을 어떻게 사용하나요?</span>
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">스위스에서 암호화폐 모험을 시작할 준비가 되셨나요?{{site_name}} 과 함께라면 아주 간단합니다!온라인으로 가입하고 돈을 입금하기만 하면 바로 사용할 수 있습니다.암호 화폐 크랙이든 초보자이든, {{site_name}} 을 사용하면 개별 설정, 직관적인 대시보드, 수동 또는 자동 거래 등 쉽게 할 수 있습니다. 여기서는 여러분이 최고입니다!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">{{site_name}} 의 최소 투자액은 얼마인가요?</span>
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">스위스에서 암호화폐 모험을 시작할 준비가 되셨나요?{{site_name}} 과 함께라면 아주 간단합니다!온라인으로 가입하고 돈을 입금하기만 하면 바로 사용할 수 있습니다.암호 화폐 크랙이든 초보자이든, {{site_name}} 을 사용하면 개별 설정, 직관적인 대시보드, 수동 또는 자동 거래 등 쉽게 할 수 있습니다. 여기서는 여러분이 최고입니다!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">{{site_name}} 은 어떤 시장을 지원하나요?</span>
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">스위스에서 암호화폐 모험을 시작할 준비가 되셨나요?{{site_name}} 과 함께라면 아주 간단합니다!온라인으로 가입하고 돈을 입금하기만 하면 바로 사용할 수 있습니다.암호 화폐 크랙이든 초보자이든, {{site_name}} 을 사용하면 개별 설정, 직관적인 대시보드, 수동 또는 자동 거래 등 쉽게 할 수 있습니다. 여기서는 여러분이 최고입니다!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">{{site_name}} 에서 어떻게 돈을 인출할 수 있나요?</span>
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">스위스에서 암호화폐 모험을 시작할 준비가 되셨나요?{{site_name}} 과 함께라면 아주 간단합니다!온라인으로 가입하고 돈을 입금하기만 하면 바로 사용할 수 있습니다.암호 화폐 크랙이든 초보자이든, {{site_name}} 을 사용하면 개별 설정, 직관적인 대시보드, 수동 또는 자동 거래 등 쉽게 할 수 있습니다. 여기서는 여러분이 최고입니다!</p>
									</div>
								</div>
								<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">{{site_name}} 은 어떻게 작동하나요?</span>
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
									<div class="faq-spoiler__container" data-spoiler-container>
										<p class="faq-spoiler__content">스위스에서 암호화폐 모험을 시작할 준비가 되셨나요?{{site_name}} 과 함께라면 아주 간단합니다!온라인으로 가입하고 돈을 입금하기만 하면 바로 사용할 수 있습니다.암호 화폐 크랙이든 초보자이든, {{site_name}} 을 사용하면 개별 설정, 직관적인 대시보드, 수동 또는 자동 거래 등 쉽게 할 수 있습니다. 여기서는 여러분이 최고입니다!</p>
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