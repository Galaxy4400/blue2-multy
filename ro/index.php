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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Acasă</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Beneficii</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Echipa noastra</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Contacteaza-ne</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Înregistrare</a> 
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
								<h2 class="main-form__title">Bine ați venit la {{site_name}} jur!</h2>
								<p class="main-form__text">Experimentați o nouă eră de tranzacționare cu platforma noastră revoluționară de tranzacționare criptografică. Cu tehnologia avansată AI a {{site_name}}, vă puteți maximiza profiturile și puteți lua decizii în cunoștință de cauză.</p>
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
									<p class="block-2-slider-slide__desc">Valute disponibile</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Utilizatori verificați</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 m</p>
									<p class="block-2-slider-slide__desc">Volumul tranzacționării</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Țări sprijinite</p>
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
							<h1 class="block-1__title">Despre {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Experimentați o nouă eră de tranzacționare cu platforma noastră revoluționară de tranzacționare criptografică. Cu tehnologia avansată AI a {{site_name}}, vă puteți maximiza profiturile și puteți lua decizii în cunoștință de cauză.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Citește mai mult</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">De ce să alegeți {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} este alegerea preferată pentru comercianții cripto din Elveția. De la securitate și transparență la algoritmi puternici și o interfață ușor de utilizat, vă oferim tot ce aveți nevoie pentru tranzacționarea de succes.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="imagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Garanție</h4>
											<p class="block-3-slide__text">Cele mai înalte standarde pentru protecția datelor și a investițiilor.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="imagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalizare</h4>
											<p class="block-3-slide__text">Personalizați strategiile de tranzacționare în funcție de preferințele dvs.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="imagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Demo fără riscuri</h4>
											<p class="block-3-slide__text">Obțineți experiență practică fără a utiliza capital real.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="imagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Strategii AI</h4>
											<p class="block-3-slide__text">Semnale de tranzacționare exacte pentru decizii de succes.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="imagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Tranzacționare automată</h4>
											<p class="block-3-slide__text">Tranzacții eficiente, orientate spre profit, folosind roboți AI.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="imagine">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Interfață ușor de utilizat</h4>
											<p class="block-3-slide__text">Intuitiv pentru toți utilizatorii, facilitează începerea tranzacționării.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revoluează lumea financiară cu {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Înregistrare</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="imagine">
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
								<h2 class="block-10__title">Tranzacționare eficientă!</h2>
								<div class="block-10__desc">
									<p>Tranzacționați ușor și în siguranță și obțineți profituri! Explorați diverse criptomonede, cum ar fi Bitcoin, Ethereum și Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Înregistrare</a> 
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
					<h2 class="partners__title">Partenerii nostri</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Parteneri"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Partener"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Partener"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Partener"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Partener"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Partener"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Partener"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Partener"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Cum încep cu {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Aflați cât de ușor este să începeți tranzacționarea criptografică cu {{site_name}}. De la înregistrare până la prima depunere, vă vom ghida pas cu pas prin proces.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Înscrie-te</h3>
							<p class="block-9-item__text">Pur și simplu înregistrați-vă online, completați datele dvs. personale și obțineți acces securizat la {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validați</h3>
							<p class="block-9-item__text">După ce ați primit e-mailul de confirmare, puteți începe tranzacționarea imediat.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Deschideți un cont</h3>
							<p class="block-9-item__text">Vă puteți deschide contul de tranzacționare cu doar un depozit de 250 CHF. Dar aveți grijă: investițiile mai mari înseamnă oportunități de profit mai mari, dar și riscuri de pierdere. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Depuneți bani în contul dvs.</h3>
							<p class="block-9-item__text">Transfer bancar, portofel electronic sau card de credit - alegerea este a ta. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Personalizați-vă contul</h3>
							<p class="block-9-item__text">Adaptați-vă contul pentru a se potrivi nevoilor dvs. Determinați-vă apetitul de risc, stabiliți obiective de tranzacționare și determinați-vă parametrii pentru tranzacționarea criptomonedelor. Brokerii noștri elvețieni experimentați sunt gata să vă ajute să faceți primii pași - automatizați sau manuali - totul este în mâinile dvs.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Începeți călătoria dvs. de tranzacționare</h3>
							<p class="block-9-item__text">Acum ești gata să pleci. {{site_name}}™ este cheia succesului pe piața criptomonedelor. Începeți călătoria dvs. de tranzacționare acum și profitați de oportunitățile din lumea monedelor digitale!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Înregistrare</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ oferă mai multe metode de plată în întreaga lume.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="cartelă">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="cartelă">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="cartelă">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="cartelă">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ recenzii</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">O platformă fantastică de tranzacționare este {{site_name}}! Înregistrarea ușoară, taxele transparente și asistența profesională fac tranzacționarea lină și reușită. Sunt extrem de mulțumit și le recomand tuturor comercianților cu amănuntul!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="persoană"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, München</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Datorită {{site_name}}, am început cu ușurință să tranzacționez criptomonede. Înregistrare ușoară, asistență excelentă și taxe corecte. Platforma mă face să mă simt în siguranță și profesionist!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="persoană"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburg</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} este un partener de încredere în lumea tranzacționării criptografice. Înregistrare ușoară, termeni clari și asistență expertă. Tranzacționarea pe această platformă este o plăcere!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="persoană"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlin</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Mulțumită lui {{site_name}}, am stăpânit să încep tranzacționarea criptografică fără efort! Înscrierea a fost foarte ușoară, iar taxele transparente sunt un real plus. În calitate de comerciant, mă simt foarte confortabil și susținut profesional pe această platformă.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="persoană"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurt pe Main</p>
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
					<h2 class="faq__title">ÎNTREBĂRI FRECVENTE</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Cum folosesc {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sunteți gata să vă începeți aventura criptografică în Elveția? Cu {{site_name}}, este o bucată de tort! Pur și simplu înscrieți-vă online, depuneți bani și sunteți gata de plecare. Indiferent dacă ești un criptocrack sau un începător, {{site_name}} îl face ușor: setări individuale, tablouri de bord intuitive, tranzacționare manuală sau automată - tu ești șeful aici!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Care este investiția minimă pentru {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sunteți gata să vă începeți aventura criptografică în Elveția? Cu {{site_name}}, este o bucată de tort! Pur și simplu înscrieți-vă online, depuneți bani și sunteți gata de plecare. Indiferent dacă ești un criptocrack sau un începător, {{site_name}} îl face ușor: setări individuale, tablouri de bord intuitive, tranzacționare manuală sau automată - tu ești șeful aici!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ce piețe acceptă {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sunteți gata să vă începeți aventura criptografică în Elveția? Cu {{site_name}}, este o bucată de tort! Pur și simplu înscrieți-vă online, depuneți bani și sunteți gata de plecare. Indiferent dacă ești un criptocrack sau un începător, {{site_name}} îl face ușor: setări individuale, tablouri de bord intuitive, tranzacționare manuală sau automată - tu ești șeful aici!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Cum retrageți bani din {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sunteți gata să vă începeți aventura criptografică în Elveția? Cu {{site_name}}, este o bucată de tort! Pur și simplu înscrieți-vă online, depuneți bani și sunteți gata de plecare. Indiferent dacă ești un criptocrack sau un începător, {{site_name}} îl face ușor: setări individuale, tablouri de bord intuitive, tranzacționare manuală sau automată - tu ești șeful aici!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Cum funcționează {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Sunteți gata să vă începeți aventura criptografică în Elveția? Cu {{site_name}}, este o bucată de tort! Pur și simplu înscrieți-vă online, depuneți bani și sunteți gata de plecare. Indiferent dacă ești un criptocrack sau un începător, {{site_name}} îl face ușor: setări individuale, tablouri de bord intuitive, tranzacționare manuală sau automată - tu ești șeful aici!</p>
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
								<h2 class="main-form__title">Aceasta se tranzacționează cu {{site_name}}™</h2>
								<p class="main-form__text">Suntem cel mai de încredere loc pentru persoane fizice și companii pentru a cumpăra, vinde și gestiona cripto.</p>
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
					<h2 class="block-13__title">Repere din {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">tipul platformei</dt>
							<dd class="block-13-list__value">Sistem de tranzacționare a criptomonedelor cu inteligență artificială (Bitcoin, Litecoin, Ethereum etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">fonduri de investiții</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash și diverse alte criptomonede populare</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Protecția datelor</dt>
							<dd class="block-13-list__value">Da, protecția datelor este asigurată în conformitate cu Directiva elvețiană privind protecția datelor</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">cheltuieli</dt>
							<dd class="block-13-list__value">{{site_name}} Elveția poate fi utilizată gratuit</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Opțiuni de depunere</dt>
							<dd class="block-13-list__value">Card de credit, PayPal și transfer bancar direct</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">terenuri</dt>
							<dd class="block-13-list__value">Accesul la nivel mondial este disponibil</dd>
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