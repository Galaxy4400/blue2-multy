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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">홈</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">플랫폼</a></li>
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

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">{{site_name}} 맹세에 오신 것을 환영합니다!</h2>
								<p class="main-form__text">혁신적인 암호화폐 거래 플랫폼으로 새로운 거래 시대를 경험하세요.{{site_name}} 의 고급 AI 기술을 통해 수익을 극대화하고 정보에 입각한 결정을 내릴 수 있습니다.</p>
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

			<section class="block-1">
				<div class="block-1__container _container">
					<div class="block-1__body">
						<div class="block-1__column block-1__column_left">
							<h1 class="block-1__title">{{site_name}} 소개™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">혁신적인 암호화폐 거래 플랫폼으로 새로운 거래 시대를 경험하세요.{{site_name}} 의 고급 AI 기술을 통해 수익을 극대화하고 정보에 입각한 결정을 내릴 수 있습니다.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">더 읽어보기</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">{{site_name}} 을 선택하는 이유는 무엇입니까?</h2>
								<p class="block-3__desc">{{site_name}} 은 스위스의 암호화폐 트레이더들이 선호하는 선택입니다.보안과 투명성부터 강력한 알고리즘, 사용자 친화적인 인터페이스에 이르기까지 성공적인 거래에 필요한 모든 것을 제공합니다.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="영상">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">보증인</h4>
											<p class="block-3-slide__text">최고 수준의 데이터 및 투자 보호 기준.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="영상">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">개인화</h4>
											<p class="block-3-slide__text">선호도에 따라 거래 전략을 개인화하세요.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="영상">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">위험 부담 없는 데모</h4>
											<p class="block-3-slide__text">실제 자본을 사용하지 않고도 실무 경험을 쌓을 수 있습니다.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="영상">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">AI 전략</h4>
											<p class="block-3-slide__text">성공적인 결정을 위한 정확한 거래 신호.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="영상">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">자동 거래</h4>
											<p class="block-3-slide__text">AI 봇을 사용한 효율적이고 수익 지향적인 거래.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="영상">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">사용자 친화적인 인터페이스</h4>
											<p class="block-3-slide__text">모든 사용자가 직관적으로 사용할 수 있어 거래를 쉽게 시작할 수 있습니다.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">{{site_name}}™ 으로 금융 세계에 혁명을 일으키세요!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">등록하세요</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="영상">
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
								<h2 class="block-10__title">효율적인 거래!</h2>
								<div class="block-10__desc">
									<p>쉽고 안전하게 거래하고 수익을 올리세요!비트코인, 이더리움, 도지코인 등 다양한 암호화폐를 살펴보세요.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">등록하기</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="피규어"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">당사 파트너</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="파트너"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="파트너"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">{{site_name}}™ 을 시작하려면 어떻게 해야 하나요?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">{{site_name}} 에서 암호화폐 거래를 시작하는 것이 얼마나 쉬운지 알아보세요.등록부터 첫 입금까지 절차를 단계별로 안내해 드립니다.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">가입하세요</h3>
							<p class="block-9-item__text">온라인으로 등록하고 개인 정보를 입력하고 {{site_name}}™ 에 안전하게 액세스하기만 하면 됩니다.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">검증</h3>
							<p class="block-9-item__text">확인 이메일을 받으면 바로 거래를 시작할 수 있습니다.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">계좌 개설</h3>
							<p class="block-9-item__text">250 CHF의 예치금만으로 거래 계좌를 개설할 수 있습니다.하지만 주의하세요. 대규모 투자는 더 높은 수익 기회를 의미하지만 손실 위험도 있습니다. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">계좌에 돈을 입금하세요</h3>
							<p class="block-9-item__text">은행 송금, 전자 지갑 또는 신용카드 - 선택은 여러분의 몫입니다.*</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">계정을 맞춤 설정하세요</h3>
							<p class="block-9-item__text">필요에 맞게 계정을 조정하세요. 위험 수용 범위를 결정하고, 거래 목표를 설정하고, 암호화폐 거래를 위한 매개 변수를 결정하세요.경험이 풍부한 스위스 브로커가 자동이든 수동이든 첫 단계를 밟을 수 있도록 도와드릴 준비가 되어 있습니다. 이 모든 것이 여러분의 손에 달려 있습니다.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">거래 여정을 시작하세요</h3>
							<p class="block-9-item__text">이제 시작할 준비가 되었습니다.{{site_name}}™ 은 암호화폐 시장에서 성공의 열쇠입니다.지금 바로 트레이딩 여정을 시작하고 디지털 화폐 세계에서 기회를 활용하세요!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">등록하세요</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ 은 전 세계적으로 다양한 결제 방법을 제공합니다.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="카드">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="카드">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="카드">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="카드">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ 리뷰</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">환상적인 거래 플랫폼은 {{site_name}} 입니다!간편한 등록, 투명한 수수료 및 전문적인 지원으로 원활하고 성공적인 거래를 할 수 있습니다.매우 만족하며 모든 소매업체에 추천합니다!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="사람"></figure>
									<p class="quotes-slide__name h3">요하네스 베커, 뮌헨</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} 덕분에 암호화폐 거래를 쉽게 시작했어요.간편한 등록, 훌륭한 지원, 공정한 수수료.플랫폼을 통해 안전하고 전문적인 느낌을 받을 수 있어요!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="사람"></figure>
									<p class="quotes-slide__name h3">루카스 슈나이더, 함부르크</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} 은 암호화폐 거래 세계에서 신뢰할 수 있는 파트너입니다.간편한 등록, 명확한 약관 및 전문가 지원.이 플랫폼에서 거래하는 것은 즐거운 일입니다!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="사람"></figure>
									<p class="quotes-slide__name h3">안나 피셔, 베를린</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} 덕분에 암호화폐 트레이딩을 쉽게 시작할 수 있었습니다!가입은 정말 쉬웠고 투명한 수수료도 큰 장점입니다.트레이더로서 저는 이 플랫폼에서 매우 편안하고 전문적인 지원을 받고 있다고 생각합니다.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="사람"></figure>
									<p class="quotes-slide__name h3">마리 호프만, 프랑크푸르트</p>
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

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">이것은 {{site_name}} 을 통한 거래입니다™</h2>
								<p class="main-form__text">당사는 개인과 기업이 암호화폐를 구매, 판매 및 관리할 수 있는 가장 신뢰할 수 있는 곳입니다.</p>
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

			<section class="block-13">
				<div class="block-13__container _container">
					<h2 class="block-13__title">{{site_name}} 하이라이트™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">플랫폼 유형</dt>
							<dd class="block-13-list__value">인공 지능을 활용한 암호화폐 거래 시스템 (비트코인, 라이트코인, 이더리움 등)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">투자 자금</dt>
							<dd class="block-13-list__value">비트코인, 라이트코인, 이더리움, 리플, 대시 등 다양한 인기 암호화폐</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">데이터 보호</dt>
							<dd class="block-13-list__value">예, 데이터 보호는 스위스 데이터 보호 지침에 따라 제공됩니다.</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">비용</dt>
							<dd class="block-13-list__value">{{site_name}} 스위스는 무료로 사용할 수 있습니다.</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">입금 옵션</dt>
							<dd class="block-13-list__value">신용카드, 페이팔 및 직접 은행 송금</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">토지</dt>
							<dd class="block-13-list__value">전 세계 이용 가능</dd>
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