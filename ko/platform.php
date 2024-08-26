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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">홈</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>platform.php">플랫폼</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">혜택</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">우리 팀</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">문의하기</a></li>
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

			<section class="block-14">
				<div class="block-14__container _container">
					<div class="block-14__body">
						<div class="block-14__column block-14__column_content">
							<div class="block-14__content">
								<h2 class="block-14__title">디지털 분석 {{site_name}}™</h2>
								<p class="block-14__text">고급 분석을 통해 귀중한 통찰력을 얻고 성장을 촉진하세요.확신을 가지고 데이터 기반 결정을 내리세요.전략을 수정하고 훌륭한 결과를 얻으세요.</p>
							</div>
						</div>
						<div class="block-14__column block-14__column_actions">
							<div class="block-14__actions block-14-actions">
								<div class="block-14-actions__bottom">
<a class="block-14-actions__btn btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">등록하기</a> 
								</div>
								<div class="block-14-actions__top">
									<div class="block-14-actions__column">
<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/google-pay.svg" alt="구글 페이"></a>
									</div>
									<div class="block-14-actions__column">
<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/app-store.svg" alt="앱 스토어"></a>
									</div>
								</div>
							</div>
							<figure class="block-14__image">
<img src="<?=$dir_prefix?>assets/img/deco/5.webp" alt="영상">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-15">
				<div class="block-15__container _container">
					<div class="block-15__body">
						<div class="block-15__column">
							<h2 class="block-15__title">디지털 웹 애플리케이션</h2>
							<div class="block-15__column block-15__column_items">
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/1.svg" alt="영상">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">자본 시장</h3>
										<p class="block-15-item__label">버튼 한 번으로 모든 것이 가능함</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/2.svg" alt="영상">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">통계</h3>
										<p class="block-15-item__label">모든 데이터를 즐기세요</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/3.svg" alt="영상">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">모바일 보기</h3>
										<p class="block-15-item__label">휴대폰을 통해 사용</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
<img src="<?=$dir_prefix?>assets/img/digits/4.svg" alt="영상">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">암호화폐 관리</h3>
										<p class="block-15-item__label">모든 자산에 액세스할 수 있습니다.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="block-15__column">
							<div class="block-15__column block-15__column_image">
								<figure class="block-15__image">
<img src="<?=$dir_prefix?>assets/img/deco/7.webp" alt="데코">
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
									<p class="block-2-slider-slide__value h2">65세 이상</p>
									<p class="block-2-slider-slide__desc">사용 가능한 통화</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34만 달러</p>
									<p class="block-2-slider-slide__desc">인증된 사용자</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">4억 달러</p>
									<p class="block-2-slider-slide__desc">거래량</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">지원되는 국가</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="block-16">
				<div class="block-16__container _container">
					<h2 class="block-16__title">{{site_name}} 디지털 기능</h2>
					<div class="block-16__body">
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">포트폴리오</h4>
								<p class="block-16-item__text">여기서는 인상적인 프로젝트와 창의적인 솔루션을 기반으로 한 저의 전문 경력을 보여줍니다.</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">암호화폐를 구매하세요</h4>
								<p class="block-16-item__text">암호화폐를 구매할 수 있는 안전하고 쉬운 플랫폼.빠른 거래, 최소 수수료.지금 거래를 시작하세요!</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">암호화폐 분석</h4>
								<p class="block-16-item__text">시장 가치와 추세에 대해 자세히 알아보고 투자 및 비즈니스 결정을 내릴 수 있습니다.</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">암호화폐 자산</h4>
								<p class="block-16-item__text">선도적인 암호화폐로 금융의 미래를 탐색하세요.발견하고, 투자하고, 성장하세요.</p>
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
								<h2 class="main-form__title">어서 가자!</h2>
								<p class="main-form__text">암호화폐의 세계로 빠져보세요!암호화폐 세계로 뛰어들어 거래 시장을 정복할 준비가 되셨나요?스위스 트레이더는 {{site_name}} 을 통해 혁신, 효율성 및 수익 기회를 결합한 거래 경험을 경험할 수 있습니다.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="데코">
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