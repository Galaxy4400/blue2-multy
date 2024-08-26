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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Domov</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Výhody</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Náš tím</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontaktujte nás</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrovať</a> 
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

			<div class="page__inner page-inner page-inner_white">
				<div class="page-inner__content">
					<div class="inner-header__container _container-narrow">
						<div class="policy">
							<div class="policy__info">
								<h1 class="policy__title h2">Zásady ochrany osobných údajov</h1>
								<p class="policy__date">Posledná aktualizácia: 30.9.22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>My (tiež známi ako „my“, „nás“ alebo „naše“) sme sa zaviazali chrániť vaše osobné údaje, ako aj vaše súkromie.</p>
								<p>Tieto zásady ochrany osobných údajov boli navrhnuté tak, aby vás informovali o spôsoboch, akými zhromažďujeme a ukladáme informácie, ktoré poskytnete prostredníctvom webovej stránky {{site_name}} (ďalej len „webová stránka“).</p>
								<p>Tieto zásady budú obhajované:</p>
								<ul>
									<li>Aby sme boli transparentní, pokiaľ ide o spracovanie a zhromažďovanie osobných údajov o vás:</li>
								</ul>
								<p>Chceli by sme, aby ste boli schopní robiť informované rozhodnutia týkajúce sa používania a spracovania osobných údajov. To je dôvod, prečo sme vytvorili našu webovú stránku. Na dosiahnutie tohto cieľa používame rôzne metódy a postupy, aby sme vám poskytli relevantné informácie o používaní osobných údajov.</p>
								<p>Ak sa domnievame, že potrebujete konkrétne podrobnosti, poskytneme vám informácie v príslušnom dátume a čase.</p>
								<p>Radi vám odpovieme na všetky vaše otázky a poskytneme akékoľvek vysvetlenia, ktoré požadujete v súvislosti s akýmikoľvek obmedzeniami stanovenými zákonom. Môžeme nás kontaktovať e-mailom na nižšie uvedenej adrese: info@ {{site_name}} .com</p>
								<ul>
									<li>Osobné údaje budú použité len na účely uvedené v zásadách.</li>
								</ul>
								<p>Osobné údaje môžeme spracúvať na rôzne účely, napríklad na to, aby sme vám ponúkli webovú stránku a prepojili vás s obchodnými platformami tretích strán (ďalej len „Služby“) a na zlepšenie stránky, ochranu našich práv, záujmov, uľahčenie údržby a poskytovania služieb, plnenie akýchkoľvek regulačných alebo právnych povinností a vykonávanie administratívnych a obchodných činností na uľahčenie poskytovania a používania služieb.</p>
								<p>Osobné údaje spracúvame aj my, aby sme lepšie porozumeli vašim preferenciám a potrebám.</p>
								<ul>
									<li>Využívať významné nástroje na ochranu vašich práv týkajúcich sa osobných údajov:</li>
								</ul>
								<p>Na to, aby sme mohli uplatniť vaše práva, máme k dispozícii značné zdroje. Kontaktujte nás kedykoľvek a požiadajte o osobné údaje týkajúce sa vašich osobných údajov. Upravíme alebo odstránime ho, prestaneme ho používať na konkrétne účely alebo na všeobecné účely. Preneste informácie vám alebo externej strane. Budeme schopní vyhovieť vašim požiadavkám.</p>
								<ul>
									<li>Zabezpečte svoje osobné údaje:</li>
								</ul>
								<p>Aj keď nemôžeme zaručiť úplnú bezpečnosť vašich osobných údajov, môžeme zaručiť, že budeme naďalej používať rôzne metódy a techniky na zabezpečenie ochrany vašich osobných údajov.</p>
								<p>Naše zásady ochrany osobných údajov a bezpečnosti sú úplné.</p>
								<h3>1. Rozsah pôsobnosti?</h3>
								<p>Táto politika popisuje typ osobných údajov, ktoré spoločnosť zhromažďuje o fyzických osobách a ako ich spracúva, zdieľa ich s tretími stranami, zabezpečuje procesy atď.</p>
								<p>Tieto zásady sa týkajú informácií, ktoré sa týkajú identifikovanej alebo identifikovateľnej fyzickej osoby. Fyzická osoba, ktorá je identifikovateľná, môže byť definovaná ako osoba, ktorá je priamo identifikovateľná, alebo ako kombinácia ďalších informácií, ku ktorým máme alebo máme k dispozícii prístup.</p>
								<p>Zásady definujú „spracovanie“ ako proces, ktorý vyžaduje použitie alebo zhromažďovanie osobných údajov. Zahŕňa správu, štruktúrovanie a uchovávanie osobných údajov.</p>
								<p>Naše služby sú určené na používanie širokému publiku a nie sú určené pre osoby mladšie ako 18 rokov. Vedome nehľadáme ani nezhromažďujeme informácie od žiadnej osoby mladšej ako 18 rokov. Takýmto osobám vedome neumožňujeme využívať naše služby. Všetky informácie, ktoré objavíme o deťoch, vymažeme čo najrýchlejšie, ak sa o nich dozvieme.</p>
								<h3>2. Aké osobné údaje o vás máme?</h3>
								<p>Ak pristupujete k službe a kanálom alebo navštívite našu webovú stránku, zhromažďujeme osobné údaje. V určitých prípadoch môžeme požiadať o vaše osobné údaje. V iných prípadoch zhromažďujeme vaše osobné údaje analýzou a analýzou používania našich služieb alebo našich servisných kanálov alebo prijímaním vašich informácií od našich partnerov tretích strán.</p>
								<h3>3. Neexistuje žiadna požiadavka zverejňovať osobné údaje spoločnosti a následky.</h3>
								<p>Nie ste však povinní poskytnúť nám žiadne osobné údaje. Za určitých okolností nám však nemusíte poskytnúť žiadne osobné údaje. To by nám mohlo brániť v ponúkaní služieb alebo brániť používateľom prístup na webovú stránku.</p>
								<h3>4. Aké osobné údaje môžeme zhromažďovať? Keď navštívite našu webovú stránku, zhromažďujeme nasledujúce vaše osobné údaje:</h3>
								<p>Patria sem informácie o vašom denníku aktivít online, údaje o vašej prevádzke (vrátane IP adresy, dátumu prístupu, času prístupu a dátumu prístupu), jazyku, ktorý ste použili, denníky zlyhania softvéru, typ použitého prehliadača, ako aj informácie o zariadení, ktoré ste použili. Informácie, ktoré zhromažďujete, nie sú súkromnými informáciami a nemôžu byť použité na vašu identifikáciu.</p>
								<p>Osobné údaje, ktoré od vás dostávame: Akékoľvek osobné údaje, ktoré nám poskytnete podľa vlastného výberu, keď sa prostredníctvom nás spojíte s online obchodnou platformou tretej strany.</p>
								<p>Osobné údaje, ktoré poskytnete konkrétne platformám tretích strán na uľahčenie obchodu: tieto informácie obsahujú vaše úplné meno, adresu, telefónne číslo a e-mailovú adresu.</p>
								<h3>5. Právny základ a dôvody spracúvania osobných údajov</h3>
								<p>Vaše osobné údaje spoločnosť spracúva na účely opísané v tejto časti a v súlade s právnym základom, ktorý sa na ňu vzťahuje.</p>
								<p>Bez právneho základu spoločnosť nemôže používať osobné údaje, ktoré sa vás týkajú. Právne dôvody, na základe ktorých môže spoločnosť použiť na spracovanie osobných údajov týkajúcich sa vás:</p>
								<ul class="small">
									<li>Súhlas so spracovaním vašich osobných údajov ste udelili z jedného alebo z rôznych dôvodov. Toto je prípad, keď osobné údaje odovzdávate prostredníctvom webovej stránky, aby sme ich mohli preniesť na obchodnú platformu tretej strany.</li>
									<li>Spoločnosť alebo tretia strana môže vyžadovať spracovanie, aby splnila svoj oprávnený záujem. Napríklad je potrebné zlepšiť naše služby alebo obhajovať právne nároky.</li>
									<li>Spracovanie musí spĺňať zákonnú povinnosť.</li>
								</ul>
								<p>Kontaktujte nás e-mailom pre ďalšie podrobnosti týkajúce sa spracovania potrebného na ochranu oprávnených záujmov.</p>
								<p>Nižšie je uvedený zoznam dôvodov a právnych dôvodov, prečo môžeme použiť informácie, ktoré nám poskytnete. Osobné údaje.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Rozsah pôsobnosti</div>
										<div class="table-1__header-column">Právny základ</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>poskytnúť vaše osobné údaje tretím stranám na základe vašej žiadosti o získanie prístupu k digitálnemu obchodovaniu</p>
												<p>Ak o to požiadate, môžeme od vás požiadať o poskytnutie osobných údajov tretím spoločnostiam.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Súhlas so spracovaním vašich osobných údajov ste udelili z jedného alebo viacerých dôvodov.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Na zodpovedanie vašich požiadaviek, otázok alebo otázok sú potrebné osobné údaje, ktoré vám pomôžu odpovedať na akékoľvek otázky týkajúce sa služieb.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je potrebné spracovať oprávnené záujmy spoločnosti alebo záujmy tretej strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>Na splnenie akejkoľvek zákonnej povinnosti alebo administratívne, súdne alebo právne alebo súdne osobné údaje sa spracúvajú na splnenie zákonných požiadaviek.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Na zabezpečenie dodržiavania zákonných povinností je potrebné spracovanie.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>Na zlepšenie našich služieb môžeme osobné údaje použiť na zlepšenie našich služieb. Patria sem okrem iného aj akékoľvek hlásenia o zlyhaní alebo poruchách, ktoré zhromažďujeme v súvislosti so službami.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je potrebné spracovať oprávnené záujmy spoločnosti alebo záujmy tretej strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Zastavenie podvodov a zneužívania našich služieb</p>
											</div>
										</div>
										<div class="table-1__column">
Je potrebné spracovať oprávnené záujmy spoločnosti alebo záujmy tretej strany. 
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>Na vykonávanie a riadenie činností, ktoré sú v súlade s požiadavkami našich služieb, tieto činnosti zahŕňajú funkcie back-office, činnosti rozvoja podnikania, strategické rozhodovanie, mechanizmy dohľadu atď.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je potrebné spracovať oprávnené záujmy spoločnosti alebo záujmy tretej strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>Na vykonávanie analýz, ako je štatistická analýza na prijímanie rozhodnutí o rôznych otázkach, používame rôzne analytické techniky (vrátane tých, ktoré sú štatistické).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je potrebné spracovať oprávnené záujmy spoločnosti alebo záujmy tretej strany.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Na ochranu nášho majetku, práv a záujmov tretích strán sme vyvinuli HTML0 na stanovenie a obranu právnych nárokov Osobné údaje môžeme spracovávať za účelom ochrany našich práv, záujmov a majetku alebo práv tretích strán v súlade s platnými zákonmi, predpismi alebo dohôdmi a akýmikoľvek podmienkami, podmienkami alebo zásadami.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Je potrebné spracovať oprávnené záujmy spoločnosti alebo záujmy tretej strany.</p>
										</div>
									</div>
								</div>

								<h3>6. Prenos osobných údajov tretím stranám</h3>
								<p>Spoločnosť môže tiež poskytovať osobné údaje spoločnostiam tretích strán, ktoré nám ponúkajú služby, ako sú informácie o IP adresách poskytovateľov hostingu a úložiska, ako aj analýzu používateľských skúseností.</p>
								<p>Môžete nás tiež požiadať, aby sme poskytli konkrétne osobné údaje týkajúce sa vás obchodným platformám tretích strán. Vaše osobné údaje, ktoré nám poskytnete, poskytneme v týchto prípadoch obchodným platformám tretích strán. Používanie vašich osobných údajov podlieha ich zásadám ochrany osobných údajov. Vaše osobné údaje môžu byť zdieľané s viacerými obchodnými platformami.</p>
								<p>Spoločnosť by mohla byť schopná zdieľať osobné údaje so spriaznenými subjektmi alebo obchodnými partnermi. To môže spoločnosti poskytnúť zdroje potrebné na zlepšenie a zlepšenie produktov a služieb, ktoré poskytuje svojim zákazníkom.</p>
								<p>V prípade potreby chrániť práva tretích strán alebo majetku Spoločnosť môže zverejňovať osobné údaje regulačným, miestnym alebo iným úradným orgánom.</p>
								<p>Okrem toho môžeme zdieľať osobné údaje o vás s potenciálnymi investormi alebo kupujúcimi alebo s veriteľmi spoločnosti alebo inej spoločnosti v skupine spoločností v prípade rovnakej transakcie (vrátane prevodu alebo predaja majetku patriaceho spoločnosti alebo inej spoločnosti v rámci skupiny) alebo ako súčasť akejkoľvek fúzie alebo reštrukturalizácie, konsolidácie alebo bankrotu spoločnosti alebo akéhokoľvek iného podnikania v rámci skupiny.</p>
								<h3>7. Cookies a služby od tretích strán</h3>
								<p>Môžu sa využiť služby tretích strán, napríklad tie, ktoré poskytujú reklamy na našich webových stránkach alebo analytické spoločnosti. Tieto spoločnosti môžu využívať aj súbory cookie alebo iné technológie.</p>
								<p>Cookies sú malé textové súbory, ktoré sa umiestnia do vášho zariadenia pri každej návšteve alebo prístupe na webovú stránku. Súbory cookie sa používajú na zhromažďovanie informácií o vašich preferenciách a zvykoch prehliadania s cieľom zlepšiť váš používateľský zážitok, sledovať vaše preferencie a prispôsobiť produkty a služby, ktoré sa vám môžu páčiť. Súbory cookie sa používajú aj na štatistiku a analýzu.</p>
								<p>Niektoré súbory cookie, ktoré môžeme použiť, sú súbory cookie relácie. Dočasne sa stiahnu do vášho zariadenia a pred zatvorením prehliadača vydržia krátky čas. Ostatné súbory cookie sú trvalé. Trvalé súbory cookie zostanú vo vašom zariadení po dobu po zatvorení prehliadača. Používajú sa na pomoc webovej stránke identifikovať vás ako vracajúceho sa používateľa a umožniť používateľom vrátiť sa na webovú stránku.</p>
								<h3>Typy súborov cookie:</h3>
								<p>Môžeme ich použiť na základe ich účelu:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Typ súboru cookie</div>
											<div class="table-2__text">
												<p>Cookies sú absolútne nevyhnutné</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Rozsah pôsobnosti</div>
											<div class="table-2__text">
												<p>Tieto súbory cookie sú nevyhnutné na to, aby ste mali prístup k funkciám, ktoré ste požadovali, a aby ste mohli navigovať na našej webovej stránke. Súbory cookie sa používajú na poskytovanie informácií, produktov a služieb, o ktoré ste nás požiadali.</p>
												<p>Sú potrebné na to, aby vaše zariadenie sťahovalo a streamovalo dáta. To vám umožní navigovať po webovej stránke, využívať jej funkcie a potom sa vrátiť na stránky, na ktorých ste predtým navštívili.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Dodatočné informácie</div>
											<div class="table-2__text">
												<p>Súbory cookie zhromažďujú osobné údaje, ako napríklad vaše používateľské meno, ako aj dátum posledného prihlásenia, aby ste potvrdili, že ste prihlásení na stránku.</p>
												<p>Vymažú sa po zatvorení webového prehliadača (session cookies).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Typ súboru cookie</div>
											<div class="table-2__text">
												<p>Funkčné súbory cookie</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Rozsah pôsobnosti</div>
											<div class="table-2__text">
												<p>Súbory cookie nám umožňujú rozpoznať vás pri každej návšteve našej stránky a tiež uložiť vaše preferencie a preferencie.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Dodatočné informácie</div>
											<div class="table-2__text">
												<p>Trvajú až do dátumu vypršania platnosti a ukladajú sa aj po zatvorení prehliadača.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Typ súboru cookie</div>
											<div class="table-2__text">
												<p>Cookies pre výkon</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Rozsah pôsobnosti</div>
											<div class="table-2__text">
												<p>Súbory cookie sa používajú na zhromažďovanie štatistických údajov o výkonnosti stránky, ako aj na ich zlepšenie. Umožňujú nám tiež vykonať analýzu na našich webových stránkach.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Dodatočné informácie</div>
											<div class="table-2__text">
												<p>Súbory cookie ukladajú anonymné údaje, ktoré nie sú spojené so žiadnou identifikovateľnou alebo identifikovanou fyzickou osobou.</p>
												<p>Môžu byť odstránené po ukončení prehliadača. Ostatné súbory cookie majú neurčitú platnosť.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Cookies sú zablokované alebo odstránené</p>
								<p>Ak chcete zabrániť alebo odstrániť súbory cookie, musíte zmeniť nastavenia prehliadača. Nižšie sú uvedené odkazy, ktoré vám pomôžu s procesom pre niektoré z najznámejších prehliadačov.</p>
								<ul class="small">
									<li>firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Uvedomte si však, že určité alebo celé funkcie a funkcie webových stránok nemusia fungovať tak, ako očakávate, ak k tomu dôjde.</p>
								<h3>OZNÁMENIE O SLEDOVANÍ ONLINE <br> Táto služba momentálne nepodporuje signály „do-not-track“. <br>8. Uchovávanie osobných údajov o vás</h3>
								<p>Spoločnosť chce uchovávať osobné údaje o vás tak dlho, ako je to potrebné na splnenie účelu spracúvania osobných údajov, ako je opísané v týchto pravidlách, alebo na dlhšie časové obdobia, ako to povoľujú zákony alebo predpisy, zásady a príslušné objednávky.</p>
								<p>Vaše informácie budeme zdieľať s obchodnými platformami tretích strán po dobu 12 mesiacov. Ak s tým súhlasíte, budeme pokračovať v zdieľaní vašich údajov ďalších 12 mesiacov.</p>
								<p>Pravidelne kontrolujeme osobné údaje, ktoré uchovávame, aby sme sa uistili, že už nie sú potrebné.</p>
								<h3>9. Prenos osobných údajov do krajiny tretej strany alebo do medzinárodnej organizácie</h3>
								<p>Vaše osobné údaje môžu byť prenesené do iných krajín (t. j. vaše osobné údaje môžu byť prenesené do tretej krajiny (t. j. do ďalšej krajiny inej ako krajiny, v ktorej máte bydlisko) alebo medzinárodným organizáciám. Medzinárodné organizácie alebo jurisdikcie. Spoločnosť podniká všetky potrebné kroky na ochranu osobných údajov, ktoré poskytnete, a zabezpečenie toho, aby používatelia údajov mali možnosť uplatniť si svoje práva a získať prístup k účinným právnym prostriedkom.</p>
								<p>Tieto ochrany a záruky sú prístupné všetkým, ktorí majú bydlisko v EHP (Európsky hospodársky priestor).</p>
								<ul class="small">
									<li>Prenos do krajiny tretej krajiny alebo medzinárodnej organizácie, o ktorom Komisia EÚ zistila, že poskytuje primeranú bezpečnosť osobných údajov prenesených na ňu v súlade s článkom 45 ods. 3 nariadenia Európskeho parlamentu a Rady 2016/679 z 27. apríla 2016. („GDPR“)</li>
									<li>Prevod sa uskutočňuje na základe právne záväznej a právne záväznej, vykonateľnej dohody medzi verejnými subjektmi alebo orgánmi podľa článku 46 ods. 2 písm. a).</li>
									<li>Prenos sa uskutočnil v súlade so spoločnými doložkami o ochrane údajov, ktoré prijala Komisia EÚ podľa článku 46 ods. 2 písm. c) GDPR. Doložky prijaté Komisiou EÚ si môžete pozrieť na https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>Spoločnosť môže poskytnúť informácie o bezpečnostných opatreniach, ktoré používa na ochranu vašich osobných údajov, ktoré sa prenášajú tretím krajinám alebo medzinárodným organizáciám. Pošlite e-mail na nasledujúcu adresu info@wealthwaydigital.uk</p>
								<h3>10. Bezpečnosť osobných údajov</h3>
								<p>Prijali sme vhodné organizačné a technické opatrenia na ochranu osobných údajov. To zahŕňa predchádzanie náhodnému alebo nezákonnému zničeniu, strate alebo úprave osobných údajov.</p>
								<p>Nemôžeme zaručiť ani zaručiť, že bezpečnosť vašich osobných údajov bude zachovaná bezchybne. Nemôžeme niesť zodpovednosť za akékoľvek nehmotné, náhodné alebo následné škody vyplývajúce z používania alebo zverejnenia osobných údajov. To však zahŕňa, že nie je obmedzené na zverejňovanie osobných údajov z dôvodu chýb pri prenosu, neoprávneného prístupu tretej strany alebo akéhokoľvek iného dôvodu mimo našej kontroly.</p>
								<p>V prípade zákonných povinností alebo iných povinností, ktoré sú mimo našej kontroly, môžeme byť povinní poskytnúť vaše osobné údaje tretím stranám, ako sú orgány verejnej moci. V týchto situáciách nemôžeme kontrolovať bezpečnosť poskytnutú vašim osobným údajom tretími stranami.</p>
								<p>Osobné údaje nemožno prenášať cez web úplne bezpečným spôsobom. Spoločnosť nemôže zabezpečiť bezpečnosť osobných údajov, ktoré nám prenášate prostredníctvom internetu.</p>
								<h3>11. Hypertextové odkazy na webové stránky patriace webovým stránkam tretích strán</h3>
								<p>Odkazy na stránky a aplikácie tretích strán sú uvedené na webových stránkach. Tieto aplikácie a webové stránky nie sú pod dohľadom spoločnosti. Nie sme zodpovední za zhromažďovanie alebo spracovanie osobných údajov týmito webovými stránkami alebo aplikáciami. Tieto zásady sa nevzťahujú na opatrenia prijaté prostredníctvom takýchto stránok alebo aplikácií.</p>
								<p>Keď navštívite niektorú z webových stránok alebo aplikácií tretích strán, odporúčame vám, aby ste si prečítali ich zásady ochrany osobných údajov predtým, ako sa rozhodnete pre prístup k ich aplikáciám alebo ich použitie. Navrhujeme tiež, aby ste im poskytli akékoľvek osobné údaje.</p>
								<h3>12. Zmeny týchto pravidiel</h3>
								<p>Tieto zásady sa môžu kedykoľvek zmeniť. Ak tieto pravidlá zmeníme, upozorníme vás o zmenách zverejnením aktualizovaných pravidiel na našej webovej stránke. Okrem toho, keď vykonáme významné úpravy týchto pravidiel, pokúsime sa vás informovať pomocou metód, ktoré považujeme za vhodné, a zverejníme oznámenie na našej webovej stránke. Akékoľvek zmeny a doplnenia, pokiaľ nie sú výslovne uvedené, nadobudnú účinnosť po uverejnení revidovanej politiky.</p>
								<h3>13. Vaše práva týkajúce sa vašich osobných údajov</h3>
								<p>Máte právo požiadať nás o overenie správnosti osobných údajov, ktoré sa o vás zhromažďujú, aby sme opravili akékoľvek chyby a vymazali všetky osobné údaje, ktoré sme nevyžadovali. Môžete tiež obmedziť rozsah typov spracovania osobných údajov.</p>
								<p>Ak máte bydlisko v EHP, pozrite si túto stránku:</p>
								<p>Tieto práva sú vám prístupné v súvislosti s informáciami, ktoré poskytnete v súvislosti s vašimi osobnými údajmi. O uplatnenie práv, ktoré máte, môžete požiadať napísaním e-mailu na nižšie uvedenú adresu.</p>
								<p>Prístupové práva</p>
								<p>Spoločnosť je schopná overiť správnosť osobných údajov, ktoré sa o vás spracúvajú. Ak máte prístup k svojim osobným údajom.</p>
								<p>Spoločnosť chce poskytnúť elektronickú kópiu osobných údajov, ktoré sa v súčasnosti spracúvajú, a za akékoľvek ďalšie kópie by mohla účtovať primeraný poplatok. Údaje budú sprístupnené elektronicky, ak o to požiadate.</p>
								<p>Právo na prístup k osobným údajom nesmie byť v rozpore s právami a slobodami iných osôb. Ak žiadosť poškodzuje práva a slobody iného alebo ich práva, spoločnosť môže odmietnuť vyhovieť žiadosti alebo obmedziť svoju schopnosť ju splniť.</p>
								<p>Právo na opravu</p>
								<p>Spoločnosť je oprávnená opraviť nepresné osobné údaje. Máte právo požadovať opravu všetkých nedostatočných osobných údajov, ktoré sa vás týkajú, berúc do úvahy dôvod spracovania.</p>
								<p>Právo na vymazanie</p>
								<p>Vzťahujú sa tieto dôvody: a) Osobné údaje už nie sú potrebné na účel, na ktorý boli zhromaždené alebo spracúvané; b) odvoláte súhlas a neexistuje právny základ na spracovanie; c) kedykoľvek namietate, z dôvodu špecifického pre vašu situáciu, proti spracúvaniu osobných údajov o vás založenom na oprávnených záujmoch sledovaných buď nami alebo treťou stranou; e) Osobné údaje sú spracúvané nezákonne alebo nezákonne f) Osobné údaje musia byť odstránené, aby sa splnila zákonná povinnosť spoločnosti.</p>
								<p>Toto právo sa neuplatňuje v prípade, že spracúvanie je nevyhnutné (a) na splnenie povinnosti uloženej zákonom, ktorá sa vyžaduje spracúvať podľa práva Únie alebo práva členského štátu; alebo b) na vytvorenie, výkon alebo obranu zákonných práv.</p>
								<p>Obmedzenia spracovania</p>
								<p>Ak máte obavy o správnosť vašich osobných údajov, môžete požiadať spoločnosť o obmedzenie spracovania vašich osobných údajov.</p>
								<p>Ak požiadate o obmedzenie osobných údajov, osobné údaje sa môžu uchovávať iba vtedy, ak udelíte súhlas alebo s cieľom vytvoriť, uplatňovať alebo obhajovať zákonné práva, alebo na obranu práv inej fyzickej osoby, alebo v prípade dôvodov, ktoré sú vo významnom verejnom záujme v rámci Európskej únie alebo členského štátu.</p>
								<p>Právo na prenosnosť údajov</p>
								<p>Ak je proces vykonávaný automatizovaným systémom a je založený na súhlase alebo zmluve, že ste zapojení do zmluvy, máte zákonné právo a právo preskúmať svoje osobné údaje, ktoré ste poskytli spoločnosti.</p>
								<p>Máte právo požiadať o prenos vašich osobných údajov priamo od spoločnosti inému prevádzkovateľovi, ak je to technicky možné. Práva, ktoré máte na základe práva na vymazanie, sa nemenia v dôsledku uplatnenia vášho práva na prenos údajov. Právo na prenos údajov nezasahuje do práv alebo slobôd nikoho iného.</p>
								<p>Právo na výzvu</p>
								<p>Právo namietať proti akémukoľvek použitiu osobných údajov, ktoré sa vás týkajú, ktoré je založené na oprávnených záujmoch sledovaných spoločnosťou alebo treťou stranou, je k dispozícii kedykoľvek. Toto sa neobmedzuje iba na profilovanie výlučne na základe týchto oprávnených záujmov. Ak dokážeme zistiť presvedčivé legitímne dôvody na spracúvanie osobných údajov, nebudeme môcť pokračovať v tom, pokiaľ nedokážete preukázať, že prevažujú nad vašimi právami, slobodami alebo záujmami, alebo uplatňovaním, ustanovením alebo obranou zákonných práv.</p>
								<p>Pokiaľ ide o priamy marketing, máte právo kedykoľvek namietať proti spracovaniu osobných údajov, ktoré sa vás týkajú.</p>
								<p>Právo odmietnuť súhlas</p>
								<p>Svoj súhlas so spracovaním vašich osobných údajov môžete kedykoľvek odvolať. To nezmení zákonnosť a zákonnosť akéhokoľvek spracúvania, ktoré bolo závislé od vášho súhlasu pred odstránením.</p>
								<p>Máte právo podať sťažnosť orgánu, ktorý na vás dohliada.</p>
								<p>Môžete podať odvolanie na dozorný orgán zriadený členským štátom s cieľom chrániť základné práva jednotlivcov v súvislosti so spracúvaním osobných údajov v rámci Európskej únie.</p>
								<p>Právne predpisy Európskej únie a členských štátov by mohli obmedziť vaše práva vo vzťahu k osobným údajom, ktoré sa vás týkajú, ako je podrobne uvedené v tomto oddiele 13.</p>
								<p>Požadované informácie vám poskytneme podľa práv, ktoré máte v oddiele 13 tejto zmluvy, do jedného mesiaca od prijatia vašej žiadosti. Časový rámec sa môže predĺžiť až na dva mesiace, v prípade potreby v závislosti od povahy žiadosti, ako aj od množstva žiadostí. Do jedného mesiaca od doručenia vašej žiadosti vás budeme informovať o každom predĺžení, ako aj o dôvodoch.</p>
								<p>Pokiaľ to nie je v rozpore s ustanoveniami § 13 zákona, informácie, ktoré požadujete v súlade s vašimi právami podľa § 13, budú sprístupnené bezplatne. Ak žiadosť nie je opodstatnená alebo nadmerná, najmä ak sa opakuje, môžeme účtovať primeranú sumu na pokrytie administratívnych nákladov za poskytnutie informácií alebo oznámenie požadovanej akcie. Nemôžeme tiež konať.</p>
								<p>Ak máme pochybnosti o totožnosti skutočnej osoby, ktorá vašu žiadosť predložila Ak máme pochybnosti o totožnosti osoby podajúcej žiadosť, spoločnosť môže požiadať o ďalšie informácie.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<?php include 'footer.php' ?>
	</div>




<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
</button>

<?php include 'scripts.php' ?>


</body>

</html>
<?php include 'ywbp.php'; ?>