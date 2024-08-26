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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">ホーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>platform.php">プラットフォーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">メリット</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">私たちのチーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">お問い合わせ</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">登録</a>
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
								<h2 class="block-14__title">デジタル分析 {{site_name}}™</h2>
								<p class="block-14__text">アドバンスド・アナリティクスを活用して、価値あるインサイトを得て成長を促進しましょう。データ主導の意思決定を自信を持って下しましょう。戦略を練り、素晴らしい結果を得ましょう。</p>
							</div>
						</div>
						<div class="block-14__column block-14__column_actions">
							<div class="block-14__actions block-14-actions">
								<div class="block-14-actions__bottom">
									<a class="block-14-actions__btn btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">登録</a>
								</div>
								<div class="block-14-actions__top">
									<div class="block-14-actions__column">
										<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/google-pay.svg" alt="グーグルペイ"></a>
									</div>
									<div class="block-14-actions__column">
										<a class="block-14-actions__btn block-14-actions__btn_img btn btn_d btn_fw" href="<?=$language_suffix?>benefits.php"><img src="<?=$dir_prefix?>assets/img/app-store.svg" alt="アプリストア"></a>
									</div>
								</div>
							</div>
							<figure class="block-14__image">
								<img src="<?=$dir_prefix?>assets/img/deco/5.webp" alt="画像">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-15">
				<div class="block-15__container _container">
					<div class="block-15__body">
						<div class="block-15__column">
							<h2 class="block-15__title">デジタル Web アプリケーション</h2>
							<div class="block-15__column block-15__column_items">
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/1.svg" alt="画像">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">資本市場</h3>
										<p class="block-15-item__label">ボタンを押すだけですべてが可能</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/2.svg" alt="画像">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">統計情報</h3>
										<p class="block-15-item__label">すべてのデータをお楽しみください</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/3.svg" alt="画像">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">モバイルビュー</h3>
										<p class="block-15-item__label">携帯電話で使用</p>
									</div>
								</div>
								<div class="block-15__item block-15-item">
									<figure class="block-15-item__image">
										<img src="<?=$dir_prefix?>assets/img/digits/4.svg" alt="画像">
									</figure>
									<div class="block-15-item__content">
										<h3 class="block-15-item__title">暗号通貨管理</h3>
										<p class="block-15-item__label">あらゆる資産にアクセスできます。</p>
									</div>
								</div>
							</div>
						</div>
						<div class="block-15__column">
							<div class="block-15__column block-15__column_image">
								<figure class="block-15__image">
									<img src="<?=$dir_prefix?>assets/img/deco/7.webp" alt="デコ">
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
									<p class="block-2-slider-slide__desc">利用可能な通貨</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 メートル。</p>
									<p class="block-2-slider-slide__desc">認証済みユーザー</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">4億ドル</p>
									<p class="block-2-slider-slide__desc">取引量</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">サポート対象国</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="block-16">
				<div class="block-16__container _container">
					<h2 class="block-16__title">{{site_name}} デジタル機能</h2>
					<div class="block-16__body">
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">ポートフォリオ</h4>
								<p class="block-16-item__text">ここでは、印象的なプロジェクトと創造的なソリューションに基づいた私のプロとしてのキャリアを紹介します。</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">仮想通貨を購入する</h4>
								<p class="block-16-item__text">仮想通貨を購入するための安全で簡単なプラットフォーム。迅速な取引、最小限の手数料。今すぐ取引を始めましょう！</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">暗号分析</h4>
								<p class="block-16-item__text">投資やビジネス上の意思決定を行えるように、市場価値とトレンドについて詳しく学んでください。</p>
							</div>
						</div>
						<div class="block-16__item block-16-item">
							<div class="block-16-item__content">
								<h4 class="block-16-item__title">暗号資産</h4>
								<p class="block-16-item__text">主要な仮想通貨で金融の未来を探りましょう。発見、投資、成長。</p>
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
								<h2 class="main-form__title">さあ行こう！</h2>
								<p class="main-form__text">仮想通貨の世界に飛び込もう！暗号通貨の世界に飛び込み、取引市場を征服する準備はできていますか？スイスのトレーダーは {{site_name}} を活用して、イノベーション、効率性、利益機会を兼ね備えた取引体験を体験できます。</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="デコ">
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