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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Pagina iniziale</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">piattaforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Vantaggi</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Il nostro team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Contattaci</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrati</a>
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
								<h2 class="main-form__title">Benvenuto su {{site_name}} giuro!</h2>
								<p class="main-form__text">Vivi una nuova era di trading con la nostra rivoluzionaria piattaforma di trading di criptovalute. Con la tecnologia AI avanzata di {{site_name}}, puoi massimizzare i tuoi profitti e prendere decisioni informate.</p>
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
									<p class="block-2-slider-slide__desc">Valute disponibili</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Utenti verificati</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 milioni di dollari</p>
									<p class="block-2-slider-slide__desc">Volume degli scambi</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Paesi supportati</p>
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
							<h1 class="block-1__title">Informazioni su {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Vivi una nuova era di trading con la nostra rivoluzionaria piattaforma di trading di criptovalute. Con la tecnologia AI avanzata di {{site_name}}, puoi massimizzare i tuoi profitti e prendere decisioni informate.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Leggi di più</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Perché scegliere {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} è la scelta preferita dai trader di criptovalute in Svizzera. Da sicurezza e trasparenza a potenti algoritmi e un&#39;interfaccia intuitiva, offriamo tutto ciò di cui hai bisogno per un trading di successo.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="immagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Fideiussione</h4>
											<p class="block-3-slide__text">I più alti standard per la protezione dei dati e degli investimenti.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="immagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalizzazione</h4>
											<p class="block-3-slide__text">Personalizza le strategie di trading in base alle tue preferenze.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="immagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Demo senza rischi</h4>
											<p class="block-3-slide__text">Acquisisci esperienza pratica senza utilizzare capitali reali.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="immagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Strategie di IA</h4>
											<p class="block-3-slide__text">Segnali di trading accurati per decisioni di successo.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="immagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Trading automatico</h4>
											<p class="block-3-slide__text">Operazioni efficienti e orientate al profitto utilizzando bot AI.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="immagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Interfaccia intuitiva</h4>
											<p class="block-3-slide__text">Intuitiva per tutti gli utenti, semplifica l&#39;avvio del trading.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Rivoluziona il mondo finanziario con {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrati</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="immagine">
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
								<h2 class="block-10__title">Trading efficiente!</h2>
								<div class="block-10__desc">
									<p>Fai trading in modo facile e sicuro e guadagna! Esplora varie criptovalute come Bitcoin, Ethereum e Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrati</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Figura"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">I nostri partner</h2>
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
							<h2 class="block-9-header__title">Come posso iniziare con {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Scopri quanto è facile iniziare a fare trading di criptovalute con {{site_name}}. Dalla registrazione al primo deposito, ti guideremo attraverso il processo passo dopo passo.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Registrati</h3>
							<p class="block-9-item__text">Basta registrarsi online, inserire i tuoi dati personali e ottenere un accesso sicuro a {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Convalida</h3>
							<p class="block-9-item__text">Una volta ricevuta l&#39;email di conferma, puoi iniziare subito a fare trading.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Apri un conto</h3>
							<p class="block-9-item__text">Puoi aprire il tuo conto di trading con un semplice deposito di 250 CHF. Ma attenzione: investimenti più consistenti comportano maggiori opportunità di profitto, ma anche rischi di perdita. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Deposita denaro sul tuo conto</h3>
							<p class="block-9-item__text">Bonifico bancario, portafoglio elettronico o carta di credito: a te la scelta. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Personalizza il tuo account</h3>
							<p class="block-9-item__text">Personalizza il tuo account in base alle tue esigenze Determina la tua propensione al rischio, stabilisci obiettivi di trading e determina i parametri per il trading di criptovalute. I nostri esperti broker svizzeri sono pronti ad aiutarti a muovere i primi passi, automatici o manuali, è tutto nelle tue mani.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Inizia il tuo viaggio nel trading</h3>
							<p class="block-9-item__text">Ora sei pronto per partire. {{site_name}}™ è la chiave del tuo successo nel mercato delle criptovalute. Inizia subito il tuo viaggio nel trading e approfitta delle opportunità nel mondo delle valute digitali!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registrati</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ offre diversi metodi di pagamento in tutto il mondo.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="carta">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="carta">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="carta">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="carta">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ recensioni</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Una fantastica piattaforma di trading è {{site_name}}! La facile registrazione, le commissioni trasparenti e il supporto professionale rendono il trading fluido e di successo. Sono estremamente soddisfatto e li consiglio a tutti i rivenditori!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Monaco</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Grazie a {{site_name}}, ho iniziato facilmente a fare trading di criptovalute. Registrazione facile, ottimo supporto e commissioni eque. La piattaforma mi fa sentire sicuro e professionale!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Amburgo</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} è un partner affidabile nel mondo del trading di criptovalute. Registrazione semplice, termini chiari e supporto esperto. Fare trading su questa piattaforma è un piacere!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlino</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Grazie a {{site_name}}, ho imparato a iniziare con il trading di criptovalute senza sforzo! Iscriversi è stato semplicissimo e le commissioni trasparenti sono un vero vantaggio. Come trader, mi sento molto a mio agio e supportato professionalmente su questa piattaforma.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Francoforte</p>
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
								<span class="faq-spoiler__control-text">Come posso usare {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto per iniziare la tua avventura crittografica in Svizzera? Con {{site_name}}, è un gioco da ragazzi! Basta registrarsi online, depositare denaro e sei pronto a partire. Che tu sia un esperto di cripto crack o un principiante, con {{site_name}} tutto è semplice: impostazioni individuali, dashboard intuitive, trading manuale o automatico: sei tu il capo!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Qual è l&#39;investimento minimo per {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto per iniziare la tua avventura crittografica in Svizzera? Con {{site_name}}, è un gioco da ragazzi! Basta registrarsi online, depositare denaro e sei pronto a partire. Che tu sia un esperto di cripto crack o un principiante, con {{site_name}} tutto è semplice: impostazioni individuali, dashboard intuitive, trading manuale o automatico: sei tu il capo!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Quali mercati supporta {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto per iniziare la tua avventura crittografica in Svizzera? Con {{site_name}}, è un gioco da ragazzi! Basta registrarsi online, depositare denaro e sei pronto a partire. Che tu sia un esperto di cripto crack o un principiante, con {{site_name}} tutto è semplice: impostazioni individuali, dashboard intuitive, trading manuale o automatico: sei tu il capo!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Come si prelevano fondi da {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto per iniziare la tua avventura crittografica in Svizzera? Con {{site_name}}, è un gioco da ragazzi! Basta registrarsi online, depositare denaro e sei pronto a partire. Che tu sia un esperto di cripto crack o un principiante, con {{site_name}} tutto è semplice: impostazioni individuali, dashboard intuitive, trading manuale o automatico: sei tu il capo!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">Come funziona {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto per iniziare la tua avventura crittografica in Svizzera? Con {{site_name}}, è un gioco da ragazzi! Basta registrarsi online, depositare denaro e sei pronto a partire. Che tu sia un esperto di cripto crack o un principiante, con {{site_name}} tutto è semplice: impostazioni individuali, dashboard intuitive, trading manuale o automatico: sei tu il capo!</p>
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
								<h2 class="main-form__title">Si tratta di fare trading con {{site_name}}™</h2>
								<p class="main-form__text">Siamo il luogo più affidabile in cui privati e aziende possono acquistare, vendere e gestire criptovalute.</p>
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
					<h2 class="block-13__title">Punti salienti di {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">tipo di piattaforma</dt>
							<dd class="block-13-list__value">Sistema di trading di criptovalute con intelligenza artificiale (Bitcoin, Litecoin, Ethereum, ecc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">fondi di investimento</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash e varie altre criptovalute popolari</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Protezione dei dati</dt>
							<dd class="block-13-list__value">Sì, la protezione dei dati è fornita in conformità con la direttiva svizzera sulla protezione dei dati</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">spese</dt>
							<dd class="block-13-list__value">{{site_name}} La Svizzera può essere utilizzata gratuitamente</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Opzioni di deposito</dt>
							<dd class="block-13-list__value">Carta di credito, PayPal e bonifico bancario diretto</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">atterra</dt>
							<dd class="block-13-list__value">L&#39;accesso in tutto il mondo è disponibile</dd>
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