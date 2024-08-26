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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>our-team.php">우리 팀</a></li>
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

			<section class="block-19">
				<div class="block-19__container _container">
					<div class="block-19__body">
						<div class="block-19__column block-19__column_left">
							<div class="block-19__main">
								<h2 class="block-19__title">사명, 비전, 가치</h2>
								<div class="block-19__footer">
									<figure class="block-19__image">
<img src="<?=$dir_prefix?>assets/img/deco/10.webp" alt="영상">
									</figure>
								</div>
							</div>
						</div>
						<div class="block-19__column block-19__column_right">
							<div class="block-19__content">
								<div class="block-19__item block-19-item">
									<figure class="block-19-item__image">
<img src="<?=$dir_prefix?>assets/img/team/1.svg" alt="영상">
									</figure>
									<h3 class="block-19-item__title">P.o</h3>
									<p class="block-19-item__text">더 밝고 공평한 미래를 위해 교육, 혁신 및 지속 가능한 관행을 통해 커뮤니티에 힘을 실어줍니다.</p>
								</div>
								<div class="block-19__item block-19-item">
									<figure class="block-19-item__image">
<img src="<?=$dir_prefix?>assets/img/team/1.svg" alt="영상">
									</figure>
									<h3 class="block-19-item__title">비전</h3>
									<p class="block-19-item__text">보다 긍정적이고 지속 가능한 글로벌 커뮤니티를 위한 청렴성, 혁신, 포용성 육성</p>
								</div>
								<div class="block-19__item block-19-item">
									<figure class="block-19-item__image">
<img src="<?=$dir_prefix?>assets/img/team/1.svg" alt="영상">
									</figure>
									<h3 class="block-19-item__title">가치관</h3>
									<p class="block-19-item__text">창의성과 혁신이 긍정적인 변화와 포용을 이끌어내는 세상을 조성합니다.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-20">
				<div class="block-20__container _container">
					<h2 class="block-20__title title-h2">우리 경영진</h2>
					<div class="block-20__body">
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
<img src="<?=$dir_prefix?>assets/img/people/1.webp" alt="사람들">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">미스터 앤더슨</h4>
								<p class="block-20-item__text">공동 설립자</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
<img src="<?=$dir_prefix?>assets/img/people/2.webp" alt="페르소네">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">애덤 레빈</h4>
								<p class="block-20-item__text">플랜트 매니저</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
<img src="<?=$dir_prefix?>assets/img/people/3.webp" alt="사람">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">마이크 레토</h4>
								<p class="block-20-item__text">프로덕트 매니저</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
<img src="<?=$dir_prefix?>assets/img/people/4.webp" alt="사람">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">자넷 레피</h4>
								<p class="block-20-item__text">재무 책임자</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
<img src="<?=$dir_prefix?>assets/img/people/5.webp" alt="사람">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">레지나</h4>
								<p class="block-20-item__text">테크닉</p>
							</div>
						</div>
						<div class="block-20__item block-20-item">
							<figure class="block-20-item__image">
<img src="<?=$dir_prefix?>assets/img/people/6.webp" alt="사람">
							</figure>
							<div class="block-20-item__content">
								<h4 class="block-20-item__title">조 암스트롱</h4>
								<p class="block-20-item__text">테크닉</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">당사 파트너</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="파트너">
							</div>
							<div class="partners-slider__slide">
<img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="파트너">
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