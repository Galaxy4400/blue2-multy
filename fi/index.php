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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Kotiin</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Alusta</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Hyödyt</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Tiimimme</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Ota yhteyttä</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Rekisteröidy</a>
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
								<h2 class="main-form__title">Tervetuloa {{site_name}} vannomaan!</h2>
								<p class="main-form__text">Koe uusi kaupankäynnin aikakausi vallankumouksellisen kryptokaupankäyntialustamme avulla. {{site_name}} edistyneen tekoälytekniikan avulla voit maksimoida voittosi ja tehdä tietoon perustuvia päätöksiä.</p>
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
									<p class="block-2-slider-slide__desc">Käytettävissä olevat valuutat</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 metriä</p>
									<p class="block-2-slider-slide__desc">Vahvistetut käyttäjät</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 miljoonaa dollaria</p>
									<p class="block-2-slider-slide__desc">Kaupankäynnin volyymi</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Tuetut maat</p>
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
							<h1 class="block-1__title">Tietoja {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Koe uusi kaupankäynnin aikakausi vallankumouksellisen kryptokaupankäyntialustamme avulla. {{site_name}} edistyneen tekoälytekniikan avulla voit maksimoida voittosi ja tehdä tietoon perustuvia päätöksiä.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Lue lisää</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Miksi valita {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} on ensisijainen valinta kryptokauppiaille Sveitsissä. Turvallisuudesta ja läpinäkyvyydestä tehokkaisiin algoritmeihin ja käyttäjäystävälliseen käyttöliittymään tarjoamme kaiken mitä tarvitset onnistuneeseen kaupankäyntiin.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="kuva">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Vakuus</h4>
											<p class="block-3-slide__text">Korkeimmat standardit tietojen ja investointien suojalle.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="kuva">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Mukauttaminen</h4>
											<p class="block-3-slide__text">Mukauta kaupankäyntistrategioita mieltymystesi mukaan.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="kuva">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Riskitön demo</h4>
											<p class="block-3-slide__text">Hanki käytännön kokemusta käyttämättä todellista pääomaa.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="kuva">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Tekoälystrategiat</h4>
											<p class="block-3-slide__text">Tarkat kaupankäyntisignaalit onnistuneisiin päätöksiin.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="kuva">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Automatisoitu kaupankäynti</h4>
											<p class="block-3-slide__text">Tehokkaat, voittosuuntautuneet kaupat tekoälybottien avulla.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="kuva">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Käyttäjäystävällinen käyttöliittymä</h4>
											<p class="block-3-slide__text">Intuitiivinen kaikille käyttäjille, helpottaa kaupankäynnin aloittamista.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Mullistaa finanssimaailman {{site_name}}™ avulla!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Rekisteröidy</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="kuva">
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
								<h2 class="block-10__title">Tehokas kaupankäynti!</h2>
								<div class="block-10__desc">
									<p>Käy kauppaa helposti ja turvallisesti ja ansaitse voittoa! Tutustu erilaisiin kryptovaluuttoihin, kuten Bitcoiniin, Ethereumiin ja Dogecoiniin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Rekisteröidy</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Kuvio"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Yhteistyökumppanimme</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Kumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Yhteistyökumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Yhteistyökumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Yhteistyökumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Yhteistyökumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Yhteistyökumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Yhteistyökumppani"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Yhteistyökumppani"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Miten pääsen alkuun {{site_name}}™ -palvelun kanssa?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Opi kuinka helppoa kryptokaupankäynnin aloittaminen on {{site_name}} kanssa. Rekisteröinnistä ensimmäiseen talletukseen, opastamme sinut prosessin läpi askel askeleelta.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Ilmoittaudu</h3>
							<p class="block-9-item__text">Rekisteröidy vain verkossa, täytä henkilökohtaiset tietosi ja saat turvallisen pääsyn {{site_name}}™ -palveluun.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Vahvista</h3>
							<p class="block-9-item__text">Kun olet saanut vahvistussähköpostin, voit aloittaa kaupankäynnin heti.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Avaa tili</h3>
							<p class="block-9-item__text">Voit avata kaupankäyntitilisi vain 250 CHF talletuksella. Mutta ole varovainen: Suuremmat sijoitukset tarkoittavat suurempia voittomahdollisuuksia, mutta myös tappioriskejä. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Talleta rahaa tilillesi</h3>
							<p class="block-9-item__text">Pankkisiirto, e-lompakko tai luottokortti - valinta on sinun. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Mukauta tiliäsi</h3>
							<p class="block-9-item__text">Räätälöi tilisi tarpeidesi mukaan Määritä riskinottohalukkuus, aseta kaupankäyntitavoitteet ja määritä parametrit kryptovaluuttojen kaupankäynnille. Kokeneet sveitsiläiset välittäjämme ovat valmiita auttamaan sinua ottamaan ensimmäiset askeleet - automatisoidut tai manuaaliset - kaikki on sinun käsissäsi.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Aloita kaupankäyntimatkasi</h3>
							<p class="block-9-item__text">Nyt olet valmis lähtemään. {{site_name}}™ on avain menestykseen kryptovaluuttamarkkinoilla. Aloita kaupankäyntimatkasi nyt ja hyödynnä mahdollisuuksia digitaalisten valuuttojen maailmassa!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Rekisteröidy</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ tarjoaa useita maksutapoja maailmanlaajuisesti.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="kortti-">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="kortti-">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="kortti-">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="kortti-">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ arvostelut</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Fantastinen kaupankäyntialusta on {{site_name}}! Helppo rekisteröinti, läpinäkyvät maksut ja ammattitaitoinen tuki tekevät kaupankäynnistä sujuvaa ja onnistunutta. Olen erittäin tyytyväinen ja suosittelen niitä kaikille jälleenmyyjille!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="henkilö"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} ansiosta olen alkanut helposti käydä kauppaa kryptovaluutoilla. Helppo rekisteröinti, hyvä tuki, ja oikeudenmukaiset maksut. Alusta saa minut tuntemaan oloni turvalliseksi ja ammattimaiseksi!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="henkilö"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hampuri</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} on luotettava kumppani kryptokaupan maailmassa. Helppo rekisteröinti, selkeät ehdot ja asiantuntijatuki. Kaupankäynti tällä alustalla on ilo!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="henkilö"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berliini</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} ansiosta olen oppinut aloittamaan kryptokaupan vaivattomasti! Rekisteröityminen oli erittäin helppoa, ja läpinäkyvät maksut ovat todellinen plus. Elinkeinonharjoittajana tunnen olevani erittäin mukava ja ammattimaisesti tuettu tällä alustalla.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="henkilö"></figure>
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
								<span class="faq-spoiler__control-text">Kuinka käytän {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Oletko valmis aloittamaan kryptoseikkailusi Sveitsissä? {{site_name}} kanssa se on kakku! Rekisteröidy vain verkossa, talleta rahaa ja olet valmis lähtemään. Olitpa krypto-crack tai aloittelija, {{site_name}} tekee siitä helppoa: yksilölliset asetukset, intuitiiviset kojetaulut, manuaalinen tai automatisoitu kaupankäynti — sinä olet pomo täällä!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Mikä on vähimmäissijoitus kohteelle {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Oletko valmis aloittamaan kryptoseikkailusi Sveitsissä? {{site_name}} kanssa se on kakku! Rekisteröidy vain verkossa, talleta rahaa ja olet valmis lähtemään. Olitpa krypto-crack tai aloittelija, {{site_name}} tekee siitä helppoa: yksilölliset asetukset, intuitiiviset kojetaulut, manuaalinen tai automatisoitu kaupankäynti — sinä olet pomo täällä!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Mitä markkinoita {{site_name}} tukee?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Oletko valmis aloittamaan kryptoseikkailusi Sveitsissä? {{site_name}} kanssa se on kakku! Rekisteröidy vain verkossa, talleta rahaa ja olet valmis lähtemään. Olitpa krypto-crack tai aloittelija, {{site_name}} tekee siitä helppoa: yksilölliset asetukset, intuitiiviset kojetaulut, manuaalinen tai automatisoitu kaupankäynti — sinä olet pomo täällä!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Kuinka nostat rahaa {{site_name}} -sivustolta?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Oletko valmis aloittamaan kryptoseikkailusi Sveitsissä? {{site_name}} kanssa se on kakku! Rekisteröidy vain verkossa, talleta rahaa ja olet valmis lähtemään. Olitpa krypto-crack tai aloittelija, {{site_name}} tekee siitä helppoa: yksilölliset asetukset, intuitiiviset kojetaulut, manuaalinen tai automatisoitu kaupankäynti — sinä olet pomo täällä!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Miten {{site_name}} toimii?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Oletko valmis aloittamaan kryptoseikkailusi Sveitsissä? {{site_name}} kanssa se on kakku! Rekisteröidy vain verkossa, talleta rahaa ja olet valmis lähtemään. Olitpa krypto-crack tai aloittelija, {{site_name}} tekee siitä helppoa: yksilölliset asetukset, intuitiiviset kojetaulut, manuaalinen tai automatisoitu kaupankäynti — sinä olet pomo täällä!</p>
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
								<h2 class="main-form__title">Tämä on kaupankäyntiä {{site_name}} kanssa™</h2>
								<p class="main-form__text">Olemme yksityishenkilöille ja yrityksille luotetuin paikka ostaa, myydä ja hallita kryptoa.</p>
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
					<h2 class="block-13__title">Kohokohdat kohteesta {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">alustan tyyppi</dt>
							<dd class="block-13-list__value">Kryptovaluuttakauppajärjestelmä tekoälyllä (Bitcoin, Litecoin, Ethereum jne.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">sijoitusrahastot</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash ja monet muut suositut kryptovaluutat</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Tietosuoja</dt>
							<dd class="block-13-list__value">Kyllä, tietosuoja tarjotaan Sveitsin tietosuojadirektiivin mukaisesti</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">kulut</dt>
							<dd class="block-13-list__value">{{site_name}} Sveitsiä voi käyttää maksutta</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Talletusvaihtoehdot</dt>
							<dd class="block-13-list__value">Luottokortti, PayPal ja suora pankkisiirto</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">maat</dt>
							<dd class="block-13-list__value">Maailmanlaajuinen pääsy on käytettävissä</dd>
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