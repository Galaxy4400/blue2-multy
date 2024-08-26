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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Kotiin</a></li>
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

			<div class="page__inner page-inner page-inner_white">
				<div class="page-inner__content">
					<div class="inner-header__container _container-narrow">
						<div class="policy">
							<div class="policy__info">
								<h1 class="policy__title h2">Tietosuojakäytäntö</h1>
								<p class="policy__date">Viimeisin päivitys: 30.9.2022</p>
							</div>
							<div class="policy__content _special-styles">
								<p>Me (tunnetaan myös nimellä ”me”, ”me” tai ”meidän”) olemme sitoutuneet suojaamaan henkilötietojasi ja yksityisyyttäsi.</p>
								<p>Tämä tietosuojakäytäntö on suunniteltu kertomaan sinulle tavoista, joilla keräämme ja tallennamme tietoja, joita annat verkkosivustolla {{site_name}} (”verkkosivusto”).</p>
								<p>Näitä periaatteita puolustetaan:</p>
								<ul>
									<li>Ollaksemme avoimia henkilötietojesi käsittelyn ja keräämisen suhteen:</li>
								</ul>
								<p>Haluamme, että voit tehdä tietoisia valintoja henkilötietojen käytöstä ja käsittelystä. Tästä syystä olemme luoneet verkkosivustomme. Tämän saavuttamiseksi käytämme erilaisia menetelmiä ja menettelyjä tarjotaksemme sinulle asiaankuuluvia tietoja henkilötietojen käytöstä.</p>
								<p>Jos uskomme, että tarvitset erityisiä tietoja, annamme sinulle tietoja sopivana päivänä ja kellonaikana.</p>
								<p>Vastaamme mielellämme kaikkiin kysymyksiisi ja annamme kaikki tarvitsemasi selvennykset lain asettamien rajoitusten suhteen. Meidät tavoittaa sähköpostitse alla olevaan osoitteeseen: info@ {{site_name}} .com</p>
								<ul>
									<li>Henkilötietoja käytetään vain tietosuojakäytännössä määriteltyihin tarkoituksiin.</li>
								</ul>
								<p>Voimme käsitellä henkilötietoja useisiin tarkoituksiin, kuten verkkosivuston tarjoamiseen sinulle ja yhteyden muodostamiseen kolmansien osapuolten kaupankäyntialustoihin (”Palvelut”) ja sivuston parantamiseksi, oikeuksiemme ja etujemme suojaamiseksi, palveluiden ylläpidon ja tarjoamisen helpottamiseksi, sääntely- tai lakisääteisten velvoitteiden täyttämiseksi sekä hallinnollisten ja liiketoimintatoimien suorittamiseksi palvelujen toimittamisen ja käytön helpottamiseksi.</p>
								<p>Käsittelemme henkilötietoja myös ymmärtääksemme paremmin mieltymyksiäsi ja tarpeitasi.</p>
								<ul>
									<li>Merkittävien työkalujen käyttäminen oikeuksiesi suojaamiseksi henkilötietojen suhteen:</li>
								</ul>
								<p>Jotta voisimme käyttää oikeuksiasi, meillä on huomattavia resursseja. Ota meihin yhteyttä milloin tahansa pyytääksesi henkilötietojasi koskevia henkilötietoja. Muokkaamme tai poistamme sen, lopetamme sen käytön tiettyihin tarkoituksiin tai yleisiin tarkoituksiin. Siirrä tiedot sinulle tai ulkopuoliselle osapuolelle. Pystymme vastaamaan pyyntöihisi.</p>
								<ul>
									<li>Suojaa henkilötietosi:</li>
								</ul>
								<p>Vaikka emme voi taata henkilötietojesi täydellistä turvallisuutta, voimme taata, että käytämme edelleen erilaisia menetelmiä ja tekniikoita varmistaaksemme henkilötietojesi suojan.</p>
								<p>Tietosuoja- ja tietoturvakäytäntömme on täydellinen.</p>
								<h3>1. Soveltamisala?</h3>
								<p>Tämä käytäntö kuvaa, minkä tyyppisiä henkilötietoja yritys kerää luonnollisista henkilöistä ja miten se käsittelee niitä, jakaa niitä kolmansien osapuolten kanssa, turvaa prosessit ja niin edelleen.</p>
								<p>Tämä käytäntö koskee tietoja, jotka liittyvät tunnistettuun tai tunnistettavissa olevaan luonnolliseen henkilöön. Luonnollinen henkilö, joka on tunnistettavissa, voidaan määritellä henkilöksi, joka on suoraan tunnistettavissa tai yhdistelmä lisätietoja, joita meillä on tai voimme käyttää.</p>
								<p>Tietosuojakäytäntö määrittelee ”käsittelyn” prosessiksi, joka edellyttää henkilötietojen käyttöä tai keräämistä. Se sisältää henkilötietojen hallinnan, jäsentämisen ja tallentamisen.</p>
								<p>Palvelumme on tarkoitettu yleisön käyttöön, eikä niitä ole suunniteltu alle 18-vuotiaiden käyttöön. Emme tietoisesti etsi tai kerää tietoja keneltäkään alle 18-vuotiaalta henkilöltä. Emme tietoisesti salli tällaisten henkilöiden käyttää palveluitamme. Poistamme kaikki lapsista löytämämme tiedot mahdollisimman nopeasti, jos saamme niistä tietää.</p>
								<h3>2. Mitä henkilötietoja meillä on sinusta?</h3>
								<p>Jos käytät palvelua ja kanavia tai vierailet verkkosivustollamme, keräämme henkilötietoja. Saatamme pyytää henkilötietojasi tietyissä tapauksissa. Muissa tapauksissa keräämme henkilötietojasi analysoimalla ja analysoimalla palveluidemme tai palvelukanaviemme käyttöä tai vastaanottamalla tietojasi kolmansilta osapuolilta.</p>
								<h3>3. Henkilötietojen luovuttamisesta yritykselle ja sen seurauksista ei vaadita.</h3>
								<p>Et kuitenkaan ole velvollinen antamaan meille mitään henkilötietoja. Tietyissä olosuhteissa sinun ei kuitenkaan välttämättä tarvitse luovuttaa meille mitään henkilötietoja. Tämä voi estää meitä tarjoamasta palveluita tai estää käyttäjiä pääsemästä verkkosivustolle.</p>
								<h3>4. Millaisia henkilötietoja voimme kerätä? Kun vierailet verkkosivustollamme, keräämme seuraavat henkilötietosi:</h3>
								<p>Tämä sisältää tietoja online-toimintalokistasi, tiedot liikenteestäsi (mukaan lukien IP-osoite, käyttöpäivämäärä, käyttöaika ja käyttöpäivämäärä) käyttämäsi kieli, ohjelmiston kaatumislokit, käytetyn selaimen tyyppi sekä tiedot käyttämästäsi laitteesta. Keräämäsi tiedot eivät ole yksityisiä tietoja, eikä niitä voida käyttää tunnistamaan sinua.</p>
								<p>Henkilötiedot, jotka saamme sinulta: Kaikki henkilötiedot, jotka annat meille oman valintasi mukaan, kun muodostat yhteyden kolmannen osapuolen verkkokauppapaikkaan meidän kauttamme.</p>
								<p>Henkilötiedot, jotka annat erityisesti kolmansien osapuolten alustoille kaupankäynnin helpottamiseksi: nämä tiedot sisältävät täydellisen nimesi, osoitteesi, puhelinnumerosi ja sähköpostiosoitteesi.</p>
								<h3>5. Henkilötietojen käsittelyn oikeusperusta ja syyt</h3>
								<p>Yritys käsittelee henkilötietojasi tässä osiossa kuvattuihin tarkoituksiin ja siihen sovellettavan oikeusperustan mukaisesti.</p>
								<p>Ilman oikeusperustaa yritys ei voi käyttää sinua koskevia henkilötietoja. Oikeudelliset perusteet, joilla yritys voi käyttää sinua koskevien henkilötietojen käsittelyyn:</p>
								<ul class="small">
									<li>Olet antanut suostumuksesi henkilötietojesi käsittelyyn yhdestä tai useasta syystä. Tämä on tapaus, jossa lähetät henkilökohtaisia tietoja verkkosivuston kautta, jotta voimme siirtää ne kolmannen osapuolen kaupankäyntialustalle.</li>
									<li>Yritys tai kolmas osapuoli saattaa vaatia käsittelyä oikeutetun etunsa täyttämiseksi. Se on tarpeen esimerkiksi palveluidemme parantamiseksi tai oikeudellisten vaatimusten puolustamiseksi.</li>
									<li>Käsittelyn on täytettävä lain mukainen velvoite.</li>
								</ul>
								<p>Ota yhteyttä sähköpostitse saadaksesi lisätietoja käsittelystä, joka on tarpeen oikeutettujen etujen suojaamiseksi.</p>
								<p>Alla on luettelo syistä ja oikeudellisista perusteista, joiden vuoksi voimme käyttää meille antamiasi tietoja. Henkilötiedot.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Soveltamisala</div>
										<div class="table-1__header-column">Oikeusperusta</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>Antaaksemme henkilökohtaisia tietojasi kolmansille osapuolille pyynnöstäsi päästäksesi digitaaliseen kaupankäyntiin</p>
												<p>Jos pyydät sitä, saatamme pyytää sinulta henkilötietoja, jotta ne voidaan välittää kolmansille osapuolille.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Olet antanut suostumuksesi henkilötietojesi käsittelyyn yhdestä tai useammasta syystä.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Pyyntöihisi, kysymyksiisi tai huolenaiheisiisi vastaamiseksi henkilötietoja tarvitaan, jotta voit vastata kaikkiin palveluihin liittyviin kysymyksiin.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Yrityksen oikeutettuja etuja tai kolmannen osapuolen etuja on käsiteltävä.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>Lakisääteisten velvoitteiden täyttämiseksi tai hallinnollisia, oikeudellisia tai oikeudellisia tai oikeudellisia henkilötietoja käsitellään lakisääteisten vaatimusten täyttämiseksi.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Lakisääteisten velvoitteiden noudattamisen varmistamiseksi tarvitaan käsittely.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>Palveluidemme parantamiseksi voimme käyttää henkilötietoja palveluidemme parantamiseen. Tämä sisältää muun muassa mahdolliset kaatumis- tai toimintahäiriöilmoitukset, joita keräämme palveluihin liittyen.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Yrityksen oikeutettuja etuja tai kolmannen osapuolen etuja on käsiteltävä.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Petosten ja palveluidemme väärinkäytön estämiseksi</p>
											</div>
										</div>
										<div class="table-1__column">
											Yrityksen oikeutettuja etuja tai kolmannen osapuolen etuja on käsiteltävä.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>Palvelujemme vaatimusten mukaisten toimien suorittamiseksi ja hallitsemiseksi tällaisia toimintoja ovat muun muassa back-office-toiminnot, liiketoiminnan kehittämistoimet, strateginen päätöksenteko, valvontamekanismit jne.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Yrityksen oikeutettuja etuja tai kolmannen osapuolen etuja on käsiteltävä.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>Analyysien suorittamiseksi, kuten tilastollisen analyysin tekemiseksi eri asioista, käytämme erilaisia analyyttisiä tekniikoita (mukaan lukien tilastollisia).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Yrityksen oikeutettuja etuja tai kolmannen osapuolen etuja on käsiteltävä.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Varojemme, oikeuksiemme ja etujemme sekä kolmansien osapuolten etujen suojaamiseksi Olemme kehittäneet HTML0:n oikeudellisten vaatimusten esittämiseksi ja puolustamiseksi Henkilötietoja saatamme käsitellä henkilötietojemme tai kolmansien osapuolten oikeuksien, etujen ja omaisuuden turvaamiseksi sovellettavien lakien, asetusten tai sopimusten sekä ehtojen, ehtojen tai käytäntöjen mukaisesti.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Yrityksen oikeutettuja etuja tai kolmannen osapuolen etuja on käsiteltävä.</p>
										</div>
									</div>
								</div>

								<h3>6. Henkilötietojen siirtäminen kolmannelle osapuolelle</h3>
								<p>Yhtiö voi myös toimittaa henkilötietoja kolmansien osapuolten yrityksille, jotka tarjoavat meille palveluita, kuten isännöinti- ja tallennuspalvelujen tarjoajien IP-osoitetietoja sekä käyttäjäkokemusten analysointia.</p>
								<p>Voit myös pyytää meitä antamaan sinua koskevia erityisiä henkilötietoja kolmansien osapuolten kaupankäyntialustoille. Annamme meille näissä tapauksissa antamasi henkilötiedot kolmansien osapuolten kaupankäyntialustoille. Henkilötietojesi käyttöön sovelletaan heidän tietosuojakäytäntöjään. Henkilötietojasi voidaan jakaa useille kaupankäyntialustoille.</p>
								<p>Yhtiö voi jakaa henkilötietoja lähipiiriin kuuluvien tahojen tai liikekumppaneiden kanssa. Tämä voi tarjota yritykselle tarvittavat resurssit, jotta se voi parantaa ja parantaa asiakkailleen tarjoamiaan tuotteita ja palveluita.</p>
								<p>Jos on tarpeen turvata kolmansien osapuolten oikeudet tai omaisuus, Yhtiö saa luovuttaa henkilötietoja sääntelyviranomaisille, paikallisille tai muille viranomaisille.</p>
								<p>Voimme myös jakaa henkilötietojasi potentiaalisten sijoittajien tai ostajien kanssa tai yrityksen tai minkä tahansa muun yritysryhmän yrityksen lainanantajien kanssa, jos sama liiketoimi tapahtuu (mukaan lukien yritykselle tai muulle konsernin yritykselle kuuluvan omaisuuden siirto tai myynti) tai osana yrityksen tai muun konsernin sisäisen liiketoiminnan sulautumista tai uudelleenjärjestelyä, konsolidointia tai konkurssia.</p>
								<h3>7. Kolmansien osapuolten evästeet ja palvelut</h3>
								<p>Kolmannen osapuolen palveluita, kuten niitä, jotka tarjoavat mainoksia verkkosivustollamme tai analytiikkayrityksiä, voidaan käyttää. Nämä yritykset voivat myös käyttää evästeitä tai muuta tekniikkaa.</p>
								<p>Evästeet ovat pieniä tekstitiedostoja, jotka sijoitetaan laitteellesi aina, kun vierailet tai käytät verkkosivustoa. Evästeitä käytetään keräämään tietoja mieltymyksistäsi ja selaustottumuksistasi parantaaksesi käyttökokemustasi, seuraamaan mieltymyksiäsi ja mukauttamaan tuotteita ja palveluita, joista saatat nauttia. Evästeitä käytetään myös tilastoihin ja analytiikkaan.</p>
								<p>Tietyt evästeet, joita voimme käyttää, ovat istuntoevästeitä. Ne ladataan tilapäisesti laitteellesi ja kestävät lyhyen ajan ennen selaimen sulkemista. Muut evästeet ovat pysyviä. Pysyvät evästeet pysyvät laitteellasi jonkin aikaa selaimen sulkemisen jälkeen. Niitä käytetään auttamaan verkkosivustoa tunnistamaan sinut palaavaksi käyttäjäksi ja antamaan käyttäjille mahdollisuuden palata verkkosivustolle.</p>
								<h3>Evästeiden tyypit:</h3>
								<p>Voimme käyttää niitä niiden tarkoituksen perusteella:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Evästeen tyyppi</div>
											<div class="table-2__text">
												<p>Evästeet ovat ehdottoman välttämättömiä</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Soveltamisala</div>
											<div class="table-2__text">
												<p>Nämä evästeet ovat välttämättömiä, jotta voit käyttää pyytämiäsi ominaisuuksia ja navigoida verkkosivustollamme. Evästeitä käytetään tarjoamaan tietoja, tuotteita ja palveluita, joita olet pyytänyt meiltä.</p>
												<p>Niitä tarvitaan, jotta laitteesi voi ladata ja suoratoistaa tietoja. Tämän avulla voit navigoida verkkosivustolla, hyödyntää sen ominaisuuksia ja palata sitten sivuille, joilla olet aiemmin käynyt.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Lisätiedot</div>
											<div class="table-2__text">
												<p>Evästeet keräävät henkilötietoja, kuten käyttäjätunnuksesi, sekä viimeisen kirjautumispäivän vahvistaakseen, että olet kirjautunut sivustolle.</p>
												<p>Ne poistetaan, kun suljet verkkoselaimesi (istuntoevästeet).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Evästeen tyyppi</div>
											<div class="table-2__text">
												<p>Toiminnalliset evästeet</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Soveltamisala</div>
											<div class="table-2__text">
												<p>Evästeiden avulla voimme tunnistaa sinut joka kerta, kun vierailet sivustollamme, ja myös tallentaa mieltymyksesi ja mieltymyksesi.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Lisätiedot</div>
											<div class="table-2__text">
												<p>Ne kestävät voimassaolon päättymiseen asti ja tallennetaan myös selaimen sulkemisen jälkeen.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Evästeen tyyppi</div>
											<div class="table-2__text">
												<p>Evästeet suorituskykyä varten</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Soveltamisala</div>
											<div class="table-2__text">
												<p>Evästeitä käytetään tilastotietojen keräämiseen sivuston suorituskyvystä sekä sen parantamiseen. Niiden avulla voimme myös tehdä analyyseja verkkosivustollamme.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Lisätiedot</div>
											<div class="table-2__text">
												<p>Evästeet tallentavat anonyymiä tietoja, joita ei liity mihinkään tunnistettavissa olevaan tai tunnistettuun luonnolliseen henkilöön.</p>
												<p>Ne voidaan poistaa, kun suljet selaimesi. Muut evästeet ovat voimassa toistaiseksi.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Evästeet estetään tai poistetaan</p>
								<p>Evästeiden estämiseksi tai poistamiseksi sinun on muutettava selaimesi asetuksia. Alla on linkkejä, jotka auttavat sinua muutamien tunnetuimpien selainten prosessissa.</p>
								<ul class="small">
									<li>Firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Huomaa kuitenkin, että tietyt tai koko verkkosivuston toiminnot ja ominaisuudet eivät välttämättä toimi odotetulla tavalla, jos näin tapahtuu.</p>
								<h3>ONLINE-SEURANTAILMOITUS <br> Tämä palvelu ei tällä hetkellä tue ”älä seuraa” -signaaleja. <br>8. Sinua koskevien henkilötietojen säilyttäminen</h3>
								<p>Yhtiö haluaa säilyttää henkilötietojasi niin kauan kuin se on tarpeen henkilötietojen käsittelyn tarkoituksen täyttämiseksi tässä käytännössä kuvatulla tavalla tai pidempään lain tai määräysten, käytäntöjen ja sovellettavien määräysten sallimalla tavalla.</p>
								<p>Jaamme tietojasi kolmansien osapuolten kaupankäyntialustojen kanssa 12 kuukauden ajan. Jos hyväksyt tämän, jatkamme tietojesi jakamista vielä 12 kuukauden ajan.</p>
								<p>Tarkistamme säännöllisesti tallentamiamme henkilötietoja varmistaaksemme, että niitä ei enää tarvita.</p>
								<h3>9. Henkilötietojen siirtäminen kolmanteen maahan tai kansainväliselle järjestölle</h3>
								<p>Henkilötietojasi voidaan siirtää muihin maihin (ts. henkilötietojasi voidaan siirtää kolmanteen maahan (eli muuhun maahan kuin asuinmaasi) tai kansainvälisille järjestöille. Kansainväliset järjestöt tai lainkäyttöalueet. Yritys ryhtyy kaikkiin tarvittaviin toimiin antamiesi henkilötietojen suojaamiseksi ja varmistaakseen, että tietojen käyttäjillä on mahdollisuus puolustaa oikeuksiaan ja käyttää tehokkaita laillisia resursseja.</p>
								<p>Nämä suojaukset ja suojatoimet ovat kaikkien ETA:n (Euroopan talousalueen) alueella asuvien saatavilla.</p>
								<ul class="small">
									<li>Siirto kolmanteen maahan tai kansainväliseen järjestöön, jonka EU:n komissio on todennut tarjoavan sille siirrettävien henkilötietojen riittävän turvallisuuden 27.4.2016 annetun Euroopan parlamentin ja neuvoston asetuksen 2016/679 45 artiklan 3 kohdan mukaisesti. (”GDPR”)</li>
									<li>Siirto tapahtuu 46 artiklan 2 kohdan a alakohdassa tarkoitetun julkisten yhteisöjen tai viranomaisten välisen oikeudellisesti sitovan ja oikeudellisesti sitovan täytäntöönpanokelpoisen sopimuksen nojalla.</li>
									<li>Siirto tapahtui EU:n komission GDPR:n 46 artiklan 2 kohdan c alakohdan mukaisesti hyväksymien yhteisten tietosuojalausekkeiden mukaisesti. EU-komission hyväksymät lausekkeet ovat nähtävissä osoitteessa https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>Yhtiö voi antaa tietoja turvatoimenpiteistä, joita se käyttää suojaamaan henkilötietojasi, jotka siirretään kolmansille maille tai kansainvälisille järjestöille. Lähetä sähköpostia seuraavaan osoitteeseen info@wealthwaydigital.uk</p>
								<h3>10. Henkilötietojen turvallisuus</h3>
								<p>Olemme toteuttaneet asianmukaiset organisatoriset ja tekniset varotoimet henkilötietojen suojaamiseksi. Tähän sisältyy henkilötietojen tahattoman tai laittoman tuhoamisen, häviämisen tai muuttamisen estäminen.</p>
								<p>Emme voi taata tai taata, että henkilötietojesi turvallisuus säilyy virheettömästi. Emme myöskään voi olla vastuussa mistään aineettomista, satunnaisista tai tuloksellisista vahingoista, jotka aiheutuvat henkilötietojen käytöstä tai luovuttamisesta. Tämä ei kuitenkaan rajoitu henkilötietoihin, joita luovutetaan lähetysvirheiden, kolmannen osapuolen luvattoman pääsyn vuoksi tai mistä tahansa muusta syystä, joka ei ole meidän hallinnassamme.</p>
								<p>Jos meillä on lakisääteisiä velvoitteita tai muita velvoitteita, jotka eivät ole meidän hallinnassamme, saatamme joutua toimittamaan sinua koskevia henkilötietoja kolmansille osapuolille, kuten viranomaisille. Emme voi valvoa kolmansien osapuolten antamaa turvallisuutta henkilötiedoillesi näissä tilanteissa.</p>
								<p>Henkilötietoja ei voida siirtää verkon kautta täysin turvallisella tavalla. Yhtiö ei voi taata meille Internetin kautta välittämiesi henkilötietojen turvallisuutta.</p>
								<h3>11. Hyperlinkit kolmansien osapuolten verkkosivustoille kuuluville verkkosivustoille</h3>
								<p>Sivustolla on linkkejä kolmansien osapuolten sivustoihin ja sovelluksiin. Nämä sovellukset ja verkkosivustot eivät ole yrityksen valvonnassa. Emme ole vastuussa henkilötietojen keräämisestä tai käsittelystä näillä verkkosivustoilla tai sovelluksissa. Tätä käytäntöä ei sovelleta tällaisten sivustojen tai sovellusten kautta toteutettuihin toimiin.</p>
								<p>Kun siirryt johonkin kolmannen osapuolen verkkosivustoon tai sovellukseen, suosittelemme, että luet heidän tietosuojakäytäntönsä ennen kuin päätät käyttää heidän sovelluksiaan tai käyttää niitä. Suosittelemme myös, että annat heille henkilökohtaisia tietoja.</p>
								<h3>12. Muutokset tähän käytäntöön</h3>
								<p>Tätä käytäntöä voidaan muuttaa milloin tahansa. Jos muutamme tätä käytäntöä, ilmoitamme muutoksista julkaisemalla päivitetyn käytännön verkkosivustollamme. Lisäksi, kun teemme merkittäviä muutoksia tähän käytäntöön, yritämme ilmoittaa sinulle sopiviksi katsomiemme menetelmien avulla ja julkaisemme ilmoituksen verkkosivustollamme. Kaikki muutokset, ellei nimenomaisesti mainita, tulevat voimaan tarkistetun käytännön julkaisemisen jälkeen.</p>
								<h3>13. Oikeutesi suhteessa henkilötietoihisi</h3>
								<p>Sinulla on oikeus pyytää meitä tarkistamaan sinua koskevien henkilötietojen oikeellisuus, korjaamaan mahdolliset virheet ja poistamaan kaikki henkilötiedot, joita emme vaadi. Voit myös rajoittaa henkilötietojen käsittelytyyppien laajuutta.</p>
								<p>Jos asut ETA-alueella, tutustu tähän sivuun:</p>
								<p>Nämä oikeudet ovat käytettävissäsi henkilötietojesi yhteydessä antamiesi tietojen suhteen. Voit pyytää käyttämiäsi oikeuksiasi kirjoittamalla sähköpostia alla olevaan osoitteeseen.</p>
								<p>Käyttöoikeudet</p>
								<p>Yhtiö pystyy varmistamaan henkilötietojesi oikeellisuuden, joita sinusta käsitellään. Jos he ovat, pääset käsiksi henkilötietoihisi.</p>
								<p>Yhtiö haluaa toimittaa sähköisen kopion parhaillaan käsiteltävistä henkilötiedoista ja voi periä kohtuullisen maksun mahdollisista lisäkopioista. Tiedot asetetaan saataville sähköisesti, jos sitä pyydät.</p>
								<p>Oikeus tutustua henkilötietoihin ei saa olla ristiriidassa muiden oikeuksien ja vapauksien kanssa. Jos pyyntö vahingoittaa toisen oikeuksia ja vapauksia tai heidän oikeuksiaan, yritys voi kieltäytyä noudattamasta pyyntöä tai rajoittaa kykyään täyttää se.</p>
								<p>Oikeus oikaisuun</p>
								<p>Yhtiöllä on oikeus korjata virheelliset henkilötiedot. Sinulla on oikeus vaatia sinua koskevien riittämättömien henkilötietojen oikaisua käsittelyn syyn huomioon ottaen.</p>
								<p>Oikeus tietojen poistamiseen</p>
								<p>Seuraavat syyt ovat sovellettavissa: (a) Henkilötietoja ei enää tarvita siihen tarkoitukseen, jota varten ne on kerätty tai käsitelty; (b) peruutat suostumuksesi eikä käsittelylle ole oikeudellista perustaa; (c) Vastustat milloin tahansa tilanteeseesi liittyvästä syystä sitä, että sinua koskevien henkilötietojen käsittely perustuu joko meidän tai kolmannen osapuolen oikeutettuihin etuihin; (e) Henkilötietoja käsitellään lainvastaisesti tai f) Henkilötiedot on poistettava yhtiön laillisen velvoitteen täyttämiseksi.</p>
								<p>Tätä oikeutta ei sovelleta, jos käsittely on välttämätöntä (a) lakisääteisen velvoitteen täyttämiseksi, jota Euroopan unionin lainsäädännön tai jäsenvaltion lainsäädännön mukaan edellytetään käsiteltäväksi; tai (b) laillisten oikeuksien luomiseksi, käyttämiseksi tai puolustamiseksi.</p>
								<p>Käsittelyn rajoitukset</p>
								<p>Jos olet huolissasi henkilötietojesi oikeellisuudesta, voit pyytää yritystä rajoittamaan henkilötietojesi käsittelyä.</p>
								<p>Jos pyydät henkilötietojen rajoittamista, henkilötietoja voidaan säilyttää vain, jos annat suostumuksesi tai laillisten oikeuksien luomiseksi, käyttämiseksi tai puolustamiseksi taikka toisen luonnollisen henkilön oikeuksien puolustamiseksi tai jos syy on merkittävä yleinen etu Euroopan unionissa tai jäsenvaltiossa.</p>
								<p>Oikeus tietojen siirrettävyyteen</p>
								<p>Jos käsittely tapahtuu automaattisella järjestelmällä ja se perustuu suostumukseen tai sopimukseen siitä, että olet mukana sopimuksessa, sinulla on laillinen oikeus ja oikeus tarkistaa yritykselle antamasi henkilötiedot.</p>
								<p>Sinulla on oikeus pyytää, että henkilötietosi siirretään suoraan yritykseltä toiselle rekisterinpitäjälle, jos se on teknisesti mahdollista. Oikeudet, joita sinulla on poisto-oikeuden nojalla, eivät muutu, kun käytät oikeuttasi tietojen siirrettävyyteen. Oikeus siirtää tietoja ei häiritse kenenkään muun oikeuksia tai vapauksia.</p>
								<p>Oikeus haastaa</p>
								<p>Oikeus vastustaa sinua koskevien henkilötietojen käyttöä, joka perustuu yrityksen tai kolmannen osapuolen oikeutettuihin etuihin, on käytettävissä milloin tahansa. Tämä ei rajoitu pelkästään näihin oikeutettuihin etuihin perustuvaan profilointiin. Jos pystymme osoittamaan pakottavat oikeutetut perusteet henkilötietojen käsittelylle, emme voi jatkaa sitä, ellet pysty osoittamaan, että ne ovat suuremmat kuin oikeutesi, vapauksesi tai etusi, tai laillisten oikeuksien käyttäminen, vahvistaminen tai puolustaminen.</p>
								<p>Suoramarkkinoinnin osalta sinulla on oikeus milloin tahansa vastustaa sinua koskevien henkilötietojen käsittelyä.</p>
								<p>Oikeus kieltäytyä suostumuksesta</p>
								<p>Voit peruuttaa suostumuksesi siihen, että käsittelemme sinua koskevia henkilötietojasi milloin tahansa. Tämä ei muuta minkään käsittelyn laillisuutta ja laillisuutta, joka oli riippuvainen suostumuksestasi ennen poistamista.</p>
								<p>Sinulla on oikeus tehdä valitus sinua valvovalle viranomaiselle.</p>
								<p>Voit hakea muutosta valvontaviranomaiselle, jonka jäsenvaltio on perustanut turvaamaan yksilöiden perusoikeudet henkilötietojen käsittelyssä Euroopan unionissa.</p>
								<p>Euroopan unionin ja jäsenvaltioiden lait voivat rajoittaa oikeuksiasi koskien sinua koskevia henkilötietoja tässä kohdassa 13 kuvatulla tavalla.</p>
								<p>Toimitamme sinulle pyydetyt tiedot tämän sopimuksen kohdassa 13 mainittujen oikeuksien mukaisesti kuukauden kuluessa pyyntösi vastaanottamisesta. Määräaikaa voidaan pidentää enintään kahteen kuukauteen, tarvittaessa pyynnön luonteesta ja pyyntöjen määrästä riippuen. Ilmoitamme sinulle mahdollisesta pidennyksestä ja syistä kuukauden kuluessa pyyntösi vastaanottamisesta.</p>
								<p>Niin kauan kuin se ei ole lain 13 §:n säännösten vastaista, tiedot, joita pyydät 13 §:n mukaisten oikeuksiesi nojalla, asetetaan saataville maksutta. Jos pyyntö ei ole perusteltu tai liiallinen, erityisesti jos ne toistuvat, voimme veloittaa kohtuullisen summan kattamaan hallinnolliset kulut, jotka aiheutuvat tietojen antamisesta tai pyydetystä toiminnasta ilmoittamisesta. Emme voi myöskään toimia.</p>
								<p>Jos meillä on epäilyksiä pyynnön esittäneen todellisen henkilön henkilöllisyydestä Jos meillä on epäilyksiä pyynnön tekevän henkilön henkilöllisyydestä, yritys voi pyytää lisätietoja.</p>
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