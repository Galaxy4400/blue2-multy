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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">ホーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">プラットフォーム</a></li>
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

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">{{site_name}} へようこそ!</h2>
								<p class="main-form__text">当社の革新的な仮想通貨取引プラットフォームで、新時代の取引を体験してください。{{site_name}} の高度なAIテクノロジーにより、利益を最大化し、情報に基づいた意思決定を行うことができます。</p>
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

			<section class="block-1">
				<div class="block-1__container _container">
					<div class="block-1__body">
						<div class="block-1__column block-1__column_left">
							<h1 class="block-1__title">{{site_name}}™ について</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">当社の革新的な仮想通貨取引プラットフォームで、新時代の取引を体験してください。{{site_name}} の高度なAIテクノロジーにより、利益を最大化し、情報に基づいた意思決定を行うことができます。</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">さらに読む</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">{{site_name}} を選ぶ理由は？</h2>
								<p class="block-3__desc">{{site_name}} はスイスの仮想通貨トレーダーに好まれる選択肢です。セキュリティと透明性から強力なアルゴリズム、ユーザーフレンドリーなインターフェースまで、取引を成功させるために必要なすべてを提供しています。</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="画像">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">保証人</h4>
											<p class="block-3-slide__text">最高水準のデータ保護と投資保護</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="画像">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">パーソナライゼーション</h4>
											<p class="block-3-slide__text">好みに合わせて取引戦略をパーソナライズできます。</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="画像">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">リスクフリーデモ</h4>
											<p class="block-3-slide__text">実際の資本を使わずに実務経験を積むことができます。</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="画像">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">人工知能戦略</h4>
											<p class="block-3-slide__text">意思決定を成功させるための正確なトレーディングシグナル</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="画像">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">自動取引</h4>
											<p class="block-3-slide__text">AI ボットを使用した、効率的で利益重視の取引。</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="画像">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">ユーザーフレンドリーなインターフェース</h4>
											<p class="block-3-slide__text">すべてのユーザーにとって直感的で、簡単に取引を開始できます。</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">{{site_name}}™ で金融の世界に革命を起こしましょう！</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">登録</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="画像">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-10">
				<div class="block-10__container _container">
					<div class="block-10__body">
						<div class="block-10__column">
							<div class="block-10__content">
								<h2 class="block-10__title">効率的な取引！</h2>
								<div class="block-10__desc">
									<p>簡単かつ安全に取引して利益を上げましょう！ビットコイン、イーサリアム、ドージコインなど、さまざまな仮想通貨を探してみましょう。</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">登録</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="フィギュア"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">当社のパートナー</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="パートナー"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="パートナー"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">{{site_name}}™ を使い始めるにはどうすればいいですか？</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">{{site_name}} で仮想通貨取引を始めるのがいかに簡単かを学びましょう。登録から初回入金まで、手順を追ってご案内します。</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">サインアップ</h3>
							<p class="block-9-item__text">オンラインで登録し、個人情報を入力するだけで、{{site_name}}™ に安全にアクセスできます。</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">検証してください</h3>
							<p class="block-9-item__text">確認メールを受け取ったら、すぐに取引を開始できます。</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">口座を開設してください。</h3>
							<p class="block-9-item__text">250スイスフランの入金だけで取引口座を開設できます。ただし、注意してください。投資額が大きいほど、利益機会は高くなりますが、損失のリスクもあります。 </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">口座にお金を入金してください。</h3>
							<p class="block-9-item__text">銀行振込、電子財布、クレジットカード。選択はあなた次第です。*</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">アカウントをカスタマイズ</h3>
							<p class="block-9-item__text">ニーズに合わせて口座を調整するリスク選好度を見極め、取引目標を設定し、仮想通貨取引のパラメーターを決定しましょう。経験豊かなスイスのブローカーが、自動であれ手動であれ、お客様が最初の一歩を踏み出すお手伝いをします。すべてお客様の手元にあります。</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">取引の旅を始めましょう</h3>
							<p class="block-9-item__text">これで、準備が整いました。{{site_name}}™ は仮想通貨市場で成功するための鍵です。今すぐ取引の旅を始めて、デジタル通貨の世界でのチャンスを活用しましょう！</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">登録</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ は世界中で複数の支払い方法を提供しています。</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="カード">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="カード">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="カード">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="カード">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ 件のレビュー</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">素晴らしい取引プラットフォームは {{site_name}} です！簡単な登録、透明性の高い手数料、プロフェッショナルなサポートにより、取引がスムーズで成功します。私は非常に満足しており、すべての小売業者にお勧めします！</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="人"></figure>
									<p class="quotes-slide__name h3">ヨハネス・ベッカー、ミュンヘン</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} のおかげで、簡単に仮想通貨の取引を始めることができました。簡単な登録、素晴らしいサポート、そして公正な手数料。このプラットフォームのおかげで、安全でプロフェッショナルな気分にさせてくれます！</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="人"></figure>
									<p class="quotes-slide__name h3">ルーカス・シュナイダー、ハンブルク</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} は仮想通貨取引の世界で信頼できるパートナーです。簡単な登録、明確な条件、専門家によるサポート。このプラットフォームでの取引は楽しいです！</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="人"></figure>
									<p class="quotes-slide__name h3">アンナ・フィッシャー、ベルリン</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} のおかげで、仮想通貨取引を簡単に始めることができるようになりました！登録はとても簡単で、透明性の高い手数料は本当にプラスです。トレーダーとして、このプラットフォームはとても快適で、専門的にサポートされていると感じています。</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="人"></figure>
									<p class="quotes-slide__name h3">マリー・ホフマン、フランクフルト</p>
								</div>
							</div>
						</div>
						<div class="quotes-slider__pagination quotes-slider-pagination">
							<div class="quotes-slider-pagination__body"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="faq">
				<div class="faq__container _container">
					<h2 class="faq__title">よくある質問</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">{{site_name}} はどうやって使うの？</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">スイスで暗号通貨の冒険を始める準備はできましたか？{{site_name}} を使えば簡単です！オンラインでサインアップしてお金を入金するだけで、準備は完了です。{{site_name}} なら、仮想通貨に詳しい人でも初心者でも、個人設定、直感的なダッシュボード、手動または自動の取引など、簡単にできます。あなたはここのボスです！</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">{{site_name}} の最低投資額はいくらですか？</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">スイスで暗号通貨の冒険を始める準備はできましたか？{{site_name}} を使えば簡単です！オンラインでサインアップしてお金を入金するだけで、準備は完了です。{{site_name}} なら、仮想通貨に詳しい人でも初心者でも、個人設定、直感的なダッシュボード、手動または自動の取引など、簡単にできます。あなたはここのボスです！</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">{{site_name}} はどのマーケットをサポートしていますか？</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">スイスで暗号通貨の冒険を始める準備はできましたか？{{site_name}} を使えば簡単です！オンラインでサインアップしてお金を入金するだけで、準備は完了です。{{site_name}} なら、仮想通貨に詳しい人でも初心者でも、個人設定、直感的なダッシュボード、手動または自動の取引など、簡単にできます。あなたはここのボスです！</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">{{site_name}} からどうやってお金を引き出すのですか？</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">スイスで暗号通貨の冒険を始める準備はできましたか？{{site_name}} を使えば簡単です！オンラインでサインアップしてお金を入金するだけで、準備は完了です。{{site_name}} なら、仮想通貨に詳しい人でも初心者でも、個人設定、直感的なダッシュボード、手動または自動の取引など、簡単にできます。あなたはここのボスです！</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">{{site_name}} はどのように機能しますか？</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">スイスで暗号通貨の冒険を始める準備はできましたか？{{site_name}} を使えば簡単です！オンラインでサインアップしてお金を入金するだけで、準備は完了です。{{site_name}} なら、仮想通貨に詳しい人でも初心者でも、個人設定、直感的なダッシュボード、手動または自動の取引など、簡単にできます。あなたはここのボスです！</p>
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
								<h2 class="main-form__title">これは {{site_name}} で取引しています™</h2>
								<p class="main-form__text">私たちは、個人や企業が仮想通貨を購入、販売、管理するための最も信頼できる場所です。</p>
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

			<section class="block-13">
				<div class="block-13__container _container">
					<h2 class="block-13__title">{{site_name}} からのハイライト™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">プラットフォームタイプ</dt>
							<dd class="block-13-list__value">人工知能を搭載した仮想通貨取引システム (ビットコイン、ライトコイン、イーサリアムなど)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">投資ファンド</dt>
							<dd class="block-13-list__value">ビットコイン、ライトコイン、イーサリアム、リップル、ダッシュ、その他さまざまな一般的な暗号通貨</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">データ保護</dt>
							<dd class="block-13-list__value">はい。データ保護はスイスのデータ保護指令に従って行われています。</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">費用</dt>
							<dd class="block-13-list__value">{{site_name}} スイスは無料で利用できます</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">入金オプション</dt>
							<dd class="block-13-list__value">クレジットカード、PayPal、銀行振込</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">土地</dt>
							<dd class="block-13-list__value">世界中からアクセスできます。</dd>
						</div>
					</dl>
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