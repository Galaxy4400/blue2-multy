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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Σπίτι</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Πλατφόρμα</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Οφέλη</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Η ομάδα μας</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Επικοινωνήστε μαζί μας</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Εγγραφείτε</a> 
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
								<h2 class="main-form__title">Καλώς ήλθατε στο {{site_name}} ορκίζομαι!</h2>
								<p class="main-form__text">Ζήστε μια νέα εποχή συναλλαγών με την επαναστατική πλατφόρμα συναλλαγών κρυπτογράφησης. Με την προηγμένη τεχνολογία AI του {{site_name}}, μπορείτε να μεγιστοποιήσετε τα κέρδη σας και να λάβετε τεκμηριωμένες αποφάσεις.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Ντεκό">
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
									<p class="block-2-slider-slide__desc">Διαθέσιμα νομίσματα</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 μ</p>
									<p class="block-2-slider-slide__desc">Επαληθευμένοι χρήστες</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 μ</p>
									<p class="block-2-slider-slide__desc">Όγκος συναλλαγών</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Υποστηριζόμενες χώρες</p>
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
							<h1 class="block-1__title">Σχετικά με το {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Ζήστε μια νέα εποχή συναλλαγών με την επαναστατική πλατφόρμα συναλλαγών κρυπτογράφησης. Με την προηγμένη τεχνολογία AI του {{site_name}}, μπορείτε να μεγιστοποιήσετε τα κέρδη σας και να λάβετε τεκμηριωμένες αποφάσεις.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Διαβάστε περισσότερα</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Γιατί να επιλέξετε {{site_name}};</h2>
								<p class="block-3__desc">Το {{site_name}} είναι η προτιμώμενη επιλογή για εμπόρους κρυπτογράφησης στην Ελβετία. Από την ασφάλεια και τη διαφάνεια έως τους ισχυρούς αλγόριθμους και μια φιλική προς το χρήστη διεπαφή, προσφέρουμε όλα όσα χρειάζεστε για επιτυχημένες συναλλαγές.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="εικόνα">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Εγγύηση</h4>
											<p class="block-3-slide__text">Υψηλότερα πρότυπα για την προστασία δεδομένων και επενδύσεων.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="εικόνα">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Εξατομίκευση</h4>
											<p class="block-3-slide__text">Εξατομικεύστε τις στρατηγικές συναλλαγών σύμφωνα με τις προτιμήσεις σας.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="εικόνα">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Επίδειξη χωρίς κίνδυνο</h4>
											<p class="block-3-slide__text">Αποκτήστε πρακτική εμπειρία χωρίς να χρησιμοποιήσετε πραγματικό κεφάλαιο.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="εικόνα">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Στρατηγικές AI</h4>
											<p class="block-3-slide__text">Ακριβή σήματα συναλλαγών για επιτυχημένες αποφάσεις.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="εικόνα">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Αυτοματοποιημένη διαπραγμάτευση</h4>
											<p class="block-3-slide__text">Αποτελεσματικές συναλλαγές προσανατολισμένες στο κέρδος χρησιμοποιώντας ρομπότ AI.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="εικόνα">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Φιλικό προς το χρήστη περιβάλλον</h4>
											<p class="block-3-slide__text">Διαισθητικό για όλους τους χρήστες, διευκολύνει την έναρξη συναλλαγών.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Γίνετε επανάσταση στον οικονομικό κόσμο με {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Εγγραφή</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="εικόνα">
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
								<h2 class="block-10__title">Αποτελεσματική διαπραγμάτευση!</h2>
								<div class="block-10__desc">
									<p>Εμπορεύστε εύκολα και με ασφάλεια και κερδίστε κέρδη! Εξερευνήστε διάφορα κρυπτονομίσματα όπως το Bitcoin, το Ethereum και το Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Εγγραφή</a> 
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Εικόνα"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Οι συνεργάτες μας</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Συνεργάτης"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Συνεργάτης"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Πώς μπορώ να ξεκινήσω με το {{site_name}}™;</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Μάθετε πόσο εύκολο είναι να ξεκινήσετε τις συναλλαγές κρυπτογράφησης με το {{site_name}}. Από την εγγραφή έως την πρώτη σας κατάθεση, θα σας καθοδηγήσουμε στη διαδικασία βήμα προς βήμα.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Εγγραφείτε</h3>
							<p class="block-9-item__text">Απλώς εγγραφείτε online, συμπληρώστε τα προσωπικά σας στοιχεία και αποκτήστε ασφαλή πρόσβαση στο {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Επικυρώστε</h3>
							<p class="block-9-item__text">Μόλις λάβετε το email επιβεβαίωσης, μπορείτε να ξεκινήσετε τις συναλλαγές αμέσως.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Άνοιγμα λογαριασμού</h3>
							<p class="block-9-item__text">Μπορείτε να ανοίξετε τον λογαριασμό συναλλαγών σας με μια κατάθεση 250 CHF. Αλλά προσέξτε: Οι μεγαλύτερες επενδύσεις σημαίνουν υψηλότερες ευκαιρίες κέρδους, αλλά και κινδύνους απώλειας. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Καταθέστε χρήματα στο λογαριασμό σας</h3>
							<p class="block-9-item__text">Τραπεζική μεταφορά, ηλεκτρονικό πορτοφόλι ή πιστωτική κάρτα - η επιλογή είναι δική σας. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Προσαρμογή του λογαριασμού σας</h3>
							<p class="block-9-item__text">Προσαρμόστε τον λογαριασμό σας ώστε να ταιριάζει στις ανάγκες σας Προσδιορίστε την όρεξή σας για κίνδυνο, ορίστε στόχους συναλλαγών και καθορίστε τις παραμέτρους σας για τις συναλλαγές κρυπτονομισμάτων. Οι έμπειροι Ελβετοί μεσίτες μας είναι έτοιμοι να σας βοηθήσουν να κάνετε τα πρώτα σας βήματα - αυτοματοποιημένα ή χειροκίνητα - όλα είναι στα χέρια σας.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Ξεκινήστε το ταξίδι συναλλαγών σας</h3>
							<p class="block-9-item__text">Τώρα είσαι έτοιμος να φύγεις. Το {{site_name}}™ είναι το κλειδί για την επιτυχία σας στην αγορά κρυπτονομισμάτων. Ξεκινήστε το ταξίδι συναλλαγών σας τώρα και επωφεληθείτε από τις ευκαιρίες στον κόσμο των ψηφιακών νομισμάτων!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Εγγραφή</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ προσφέρει πολλαπλούς τρόπους πληρωμής παγκοσμίως.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="κάρτα">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="κάρτα">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="κάρτα">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="κάρτα">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ κριτικές</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Μια φανταστική πλατφόρμα συναλλαγών είναι {{site_name}}! Η εύκολη εγγραφή, οι διαφανείς χρεώσεις και η επαγγελματική υποστήριξη καθιστούν τις συναλλαγές ομαλές και επιτυχημένες. Είμαι εξαιρετικά ικανοποιημένος και τα προτείνω σε όλους τους λιανοπωλητές!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="πρόσωπο"></figure>
									<p class="quotes-slide__name h3">Γιοχάνες Μπέκερ, Μόναχο</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Χάρη στο {{site_name}}, άρχισα εύκολα να διαπραγματεύομαι κρυπτονομίσματα. Εύκολη εγγραφή, εξαιρετική υποστήριξη, και δίκαιες χρεώσεις. Η πλατφόρμα με κάνει να νιώθω ασφαλής και επαγγελματίας!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="πρόσωπο"></figure>
									<p class="quotes-slide__name h3">Λούκας Σνάιντερ, Αμβούργο</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Το {{site_name}} είναι ένας αξιόπιστος συνεργάτης στον κόσμο των συναλλαγών κρυπτογράφησης. Εύκολη εγγραφή, σαφείς όροι και υποστήριξη εμπειρογνωμόνων. Η διαπραγμάτευση σε αυτήν την πλατφόρμα είναι απόλαυση!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="πρόσωπο"></figure>
									<p class="quotes-slide__name h3">Άννα Φίσερ, Βερολίνο</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Χάρη στο {{site_name}}, έχω μάθει να ξεκινώ με τις συναλλαγές κρυπτογράφησης χωρίς κόπο! Η εγγραφή ήταν εξαιρετικά εύκολη, και οι διαφανείς χρεώσεις είναι ένα πραγματικό πλεονέκτημα. Ως έμπορος, αισθάνομαι πολύ άνετα και υποστηρίζομαι επαγγελματικά σε αυτήν την πλατφόρμα.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="πρόσωπο"></figure>
									<p class="quotes-slide__name h3">Μαρί Χόφμαν, Φρανκφούρτη</p>
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
					<h2 class="faq__title">ΣΥΧΝΈΣ ΕΡΩΤΉΣΕΙΣ</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Πώς μπορώ να χρησιμοποιήσω το {{site_name}};</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Είστε έτοιμοι να ξεκινήσετε την περιπέτεια κρυπτογράφησης στην Ελβετία; Με το {{site_name}}, είναι ένα κομμάτι κέικ! Απλώς εγγραφείτε στο διαδίκτυο, καταθέστε χρήματα και είστε έτοιμοι να πάτε. Είτε είστε λάτρης κρυπτογράφησης είτε αρχάριος, το {{site_name}} το κάνει εύκολο: μεμονωμένες ρυθμίσεις, έξυπνοι πίνακες ελέγχου, χειροκίνητες ή αυτοματοποιημένες συναλλαγές - εσείς είστε το αφεντικό εδώ!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ποια είναι η ελάχιστη επένδυση για το {{site_name}};</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Είστε έτοιμοι να ξεκινήσετε την περιπέτεια κρυπτογράφησης στην Ελβετία; Με το {{site_name}}, είναι ένα κομμάτι κέικ! Απλώς εγγραφείτε στο διαδίκτυο, καταθέστε χρήματα και είστε έτοιμοι να πάτε. Είτε είστε λάτρης κρυπτογράφησης είτε αρχάριος, το {{site_name}} το κάνει εύκολο: μεμονωμένες ρυθμίσεις, έξυπνοι πίνακες ελέγχου, χειροκίνητες ή αυτοματοποιημένες συναλλαγές - εσείς είστε το αφεντικό εδώ!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Ποιες αγορές υποστηρίζει το {{site_name}};</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Είστε έτοιμοι να ξεκινήσετε την περιπέτεια κρυπτογράφησης στην Ελβετία; Με το {{site_name}}, είναι ένα κομμάτι κέικ! Απλώς εγγραφείτε στο διαδίκτυο, καταθέστε χρήματα και είστε έτοιμοι να πάτε. Είτε είστε λάτρης κρυπτογράφησης είτε αρχάριος, το {{site_name}} το κάνει εύκολο: μεμονωμένες ρυθμίσεις, έξυπνοι πίνακες ελέγχου, χειροκίνητες ή αυτοματοποιημένες συναλλαγές - εσείς είστε το αφεντικό εδώ!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Πώς κάνετε ανάληψη χρημάτων από το {{site_name}};</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Είστε έτοιμοι να ξεκινήσετε την περιπέτεια κρυπτογράφησης στην Ελβετία; Με το {{site_name}}, είναι ένα κομμάτι κέικ! Απλώς εγγραφείτε στο διαδίκτυο, καταθέστε χρήματα και είστε έτοιμοι να πάτε. Είτε είστε λάτρης κρυπτογράφησης είτε αρχάριος, το {{site_name}} το κάνει εύκολο: μεμονωμένες ρυθμίσεις, έξυπνοι πίνακες ελέγχου, χειροκίνητες ή αυτοματοποιημένες συναλλαγές - εσείς είστε το αφεντικό εδώ!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Πώς λειτουργεί το {{site_name}};</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Είστε έτοιμοι να ξεκινήσετε την περιπέτεια κρυπτογράφησης στην Ελβετία; Με το {{site_name}}, είναι ένα κομμάτι κέικ! Απλώς εγγραφείτε στο διαδίκτυο, καταθέστε χρήματα και είστε έτοιμοι να πάτε. Είτε είστε λάτρης κρυπτογράφησης είτε αρχάριος, το {{site_name}} το κάνει εύκολο: μεμονωμένες ρυθμίσεις, έξυπνοι πίνακες ελέγχου, χειροκίνητες ή αυτοματοποιημένες συναλλαγές - εσείς είστε το αφεντικό εδώ!</p>
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
								<h2 class="main-form__title">Αυτή είναι η διαπραγμάτευση με {{site_name}}™</h2>
								<p class="main-form__text">Είμαστε το πιο αξιόπιστο μέρος για άτομα και επιχειρήσεις να αγοράζουν, να πωλούν και να διαχειρίζονται κρυπτονομίσματα.</p>
							</div>
							<figure class="main-form__image">
<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Ντεκό">
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
					<h2 class="block-13__title">Στιγμιότυπα από {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">τύπος πλατφόρμας</dt>
							<dd class="block-13-list__value">Σύστημα συναλλαγών κρυπτονομισμάτων με τεχνητή νοημοσύνη (Bitcoin, Litecoin, Ethereum κ.λπ.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">επενδυτικά κεφάλαια</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash και διάφορα άλλα δημοφιλή κρυπτονομίσματα</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Προστασία δεδομένων</dt>
							<dd class="block-13-list__value">Ναι, η προστασία δεδομένων παρέχεται σύμφωνα με την ελβετική οδηγία για την προστασία δεδομένων</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">έξοδα</dt>
							<dd class="block-13-list__value">{{site_name}} Η Ελβετία μπορεί να χρησιμοποιηθεί δωρεάν</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Επιλογές κατάθεσης</dt>
							<dd class="block-13-list__value">Πιστωτική κάρτα, PayPal και άμεση τραπεζική μεταφορά</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">εδάφη</dt>
							<dd class="block-13-list__value">Παγκόσμια πρόσβαση είναι διαθέσιμη</dd>
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