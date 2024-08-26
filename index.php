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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Home</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Benefits</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Our team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Contact us</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Register</a>
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
								<h2 class="main-form__title">Welcome to {{site_name}} swear!</h2>
								<p class="main-form__text">Experience a new era of trading with our revolutionary crypto trading platform. With {{site_name}}'s advanced AI technology, you can maximize your profits and make informed decisions.</p>
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

			<div class="block-2">
				<div class="block-2__container _container">
					<div class="block-2__slider block-2-slider">
						<div class="block-2-slider__slides">
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">65+</p>
									<p class="block-2-slider-slide__desc">Currencies available</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Verified users</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 m</p>
									<p class="block-2-slider-slide__desc">Trading volume</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Supported countries</p>
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
							<h1 class="block-1__title">About {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Experience a new era of trading with our revolutionary crypto trading platform. With {{site_name}}'s advanced AI technology, you can maximize your profits and make informed decisions.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Read more</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Why choose {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} is the preferred choice for crypto traders in Switzerland. From security and transparency to powerful algorithms and a user-friendly interface, we offer everything you need for successful trading.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Surety</h4>
											<p class="block-3-slide__text">Highest standards for data and investment protection.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalization</h4>
											<p class="block-3-slide__text">Personalize trading strategies according to your preferences.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Risk-free demo</h4>
											<p class="block-3-slide__text">Gain practical experience without using real capital.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI strategies</h4>
											<p class="block-3-slide__text">Accurate trading signals for successful decisions.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automated trading</h4>
											<p class="block-3-slide__text">Efficient, profit-oriented trades using AI bots.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="image">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">User-friendly interface</h4>
											<p class="block-3-slide__text">Intuitive for all users, makes it easy to start trading.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revolutionize the financial world with {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Register</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="image">
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
								<h2 class="block-10__title">Efficient trading!</h2>
								<div class="block-10__desc">
									<p>Trade easily and safely and make profits! Explore various cryptocurrencies such as Bitcoin, Ethereum, and Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Register</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Figure"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Our partners</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Partner"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Partner"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">How do I get started with {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Learn how easy it is to get started with crypto trading with {{site_name}}. From registration to your first deposit, we will guide you through the process step by step.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Sign up</h3>
							<p class="block-9-item__text">Simply register online, fill in your personal details, and get secure access to {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validate</h3>
							<p class="block-9-item__text">Once you've received your confirmation email, you can start trading right away.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Open an account</h3>
							<p class="block-9-item__text">You can open your trading account with just a deposit of 250 CHF. But be careful: Larger investments mean higher profit opportunities, but also risks of loss. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Deposit money into your account</h3>
							<p class="block-9-item__text">Bank transfer, e-wallet or credit card — the choice is yours. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Customize your account</h3>
							<p class="block-9-item__text">Tailor your account to suit your needs Determine your risk appetite, set trading goals, and determine your parameters for trading cryptocurrencies. Our experienced Swiss brokers are ready to help you take your first steps — automated or manual — it's all in your hands.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Start your trading journey</h3>
							<p class="block-9-item__text">Now you're ready to go. {{site_name}}™ is your key to success in the cryptocurrency market. Start your trading journey now and take advantage of opportunities in the world of digital currencies!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Register</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ offers multiple payment methods worldwide.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="card">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="card">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="card">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="card">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ reviews</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">A fantastic trading platform is {{site_name}}! Easy registration, transparent fees and professional support make trading smooth and successful. I am extremely satisfied and recommend them to all retailers!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Munich</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Thanks to {{site_name}}, I've easily started trading cryptocurrencies. Easy registration, great support, and fair fees. The platform makes me feel safe and professional!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} is a reliable partner in the crypto trading world. Easy registration, clear terms and expert support. Trading on this platform is a pleasure!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Thanks to {{site_name}}, I've mastered getting started with crypto trading effortlessly! Signing up was super easy, and the transparent fees are a real plus. As a trader, I feel very comfortable and professionally supported on this platform.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="person"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurt</p>
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
					<h2 class="faq__title">FAQ</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">How do I use {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ready to start your crypto adventure in Switzerland? With {{site_name}}, it's a piece of cake! Simply sign up online, deposit money and you're ready to go. Whether you're a crypto crack or a newbie, {{site_name}} makes it easy: individual settings, intuitive dashboards, manual or automated trading — you're the boss here!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">What is the minimum investment for {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ready to start your crypto adventure in Switzerland? With {{site_name}}, it's a piece of cake! Simply sign up online, deposit money and you're ready to go. Whether you're a crypto crack or a newbie, {{site_name}} makes it easy: individual settings, intuitive dashboards, manual or automated trading — you're the boss here!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Which markets does {{site_name}} support?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ready to start your crypto adventure in Switzerland? With {{site_name}}, it's a piece of cake! Simply sign up online, deposit money and you're ready to go. Whether you're a crypto crack or a newbie, {{site_name}} makes it easy: individual settings, intuitive dashboards, manual or automated trading — you're the boss here!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">How do you withdraw money from {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ready to start your crypto adventure in Switzerland? With {{site_name}}, it's a piece of cake! Simply sign up online, deposit money and you're ready to go. Whether you're a crypto crack or a newbie, {{site_name}} makes it easy: individual settings, intuitive dashboards, manual or automated trading — you're the boss here!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">How does {{site_name}} work?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Ready to start your crypto adventure in Switzerland? With {{site_name}}, it's a piece of cake! Simply sign up online, deposit money and you're ready to go. Whether you're a crypto crack or a newbie, {{site_name}} makes it easy: individual settings, intuitive dashboards, manual or automated trading — you're the boss here!</p>
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
								<h2 class="main-form__title">This is trading with {{site_name}}™</h2>
								<p class="main-form__text">We're the most trusted place for individuals and businesses to buy, sell, and manage crypto.</p>
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

			<section class="block-13">
				<div class="block-13__container _container">
					<h2 class="block-13__title">Highlights from {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">platform type</dt>
							<dd class="block-13-list__value">Cryptocurrency trading system with artificial intelligence (Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">investment funds</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash, and various other popular cryptocurrencies</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Data protection</dt>
							<dd class="block-13-list__value">Yes, data protection is provided in accordance with the Swiss Data Protection Directive</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">expenses</dt>
							<dd class="block-13-list__value">{{site_name}} Switzerland can be used free of charge</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Deposit options</dt>
							<dd class="block-13-list__value">Credit card, PayPal and direct bank transfer</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">lands</dt>
							<dd class="block-13-list__value">Worldwide access is available</dd>
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