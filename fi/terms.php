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
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Rekisteröidy</a>
							</div>
							<div class="header-actions__action">
								<a class="header__login btn btn_w _icon-login" href="<?=$language_suffix?>sign-in.php">
								</a>
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
						<div class="conditions">
							<div class="conditions__info">
								<h1 class="conditions__title h2">Käyttöehdot</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1. kenraali</h3>
								<p>1.1. Sinut kutsutaan vierailemaan {{site_name}} (”Sivusto”)</p>
								<p>Sähköpostitiedot@ {{site_name}} .com</p>
								<p>1.2. Tämä verkkosivusto tarjoaa tietoja kolmansien osapuolten alustoista (”Kolmansien osapuolten alustat”) kauppaa varten (”Palvelut”)</p>
								<p>1.3. Ehdot säätelevät sinun (”sinä”, ”sinun” tai ”käyttäjä”) pääsyäsi verkkosivustoon ja palveluihin. Ennen kuin voit käyttää palveluita, sinun on luettava nämä ehdot huolellisesti. Nämä ehdot ovat oikeudellisesti sitova sopimus sinun ja verkkosivuston omistajan ja verkkosivuston omistajan välillä. Sinun on hyväksyttävä ehdot kaikilta osin, jos et halua käyttää verkkosivustoa. Ehtoja voidaan muuttaa ajoittain.</p>
								<p>Nämä ehdot sisältävät tietosuojakäytäntömme. Hyväksyt nämä ehdot ja hyväksyt tietosuojakäytäntömme. (Voit lukea tietosuojakäytäntömme täältä).</p>
								<h3>2. Kelpoisuus</h3>
								<p>2.1. Jos noudatat näitä ehtoja, verkkosivusto on käytettävissäsi.</p>
								<p>2.1.1. Vähimmäisikä 18 vuotta</p>
								<p>2.1.2. Voit allekirjoittaa nämä ehdot ja ehdot.</p>
								<p>2.1.3. Sen maan lait, jossa asut tai käytät palveluita, eivät millään tavalla estä käyttäjiä käyttämästä verkkosivustoa tai sen palveluita.</p>
								<p>2.2. Emme anna mitään takuita, vakuutuksia tai takuita palvelujen tai verkkosivuston laillisuudesta tai käytöstä kenellekään henkilölle. Emme ole vastuussa verkkosivuston tai minkään käyttäjän palveluiden laittomasta käytöstä.</p>
								<h3>3. Alueet, joilla on rajoitettu pääsy</h3>
								<p>3.1. Rajoittamatta annettujen tietojen laajuutta Pidätämme oikeuden rajoittaa pääsyä Palveluihin ja/tai Verkkosivustoon (tai mihin tahansa niiden osaan): (i) Käyttäjille, jotka asuvat rajoitetuilla alueilla (”Rajoitetut alueet”) ja (ii) käyttäjille, joiden uskomme olevan sääntely-, laki- tai maineriski.</p>
								<p>3.2. Voimme myös asettaa lisäehtoja ennen kuin hyväksymme käyttäjiä, jotka ovat tiettyjen maiden kansalaisia. Jos käyttäjät matkustavat rajoitetuille alueille, Sivusto tai Palvelut saattavat olla väliaikaisesti poissa käytöstä tai estetty.</p>
								<h3>4. Kielletty toiminta</h3>
								<p>4.1. Hyväksyt, että käytät sivustoa ja palveluita kunnioittavasti etkä:</p>
								<p>4.1.1. Voit muodostaa yhteyden verkkosivustollemme ja käyttää sitä lataamaan, lataamaan, jakamaan ja julkaisemaan sekä välittämään tai lähettämään (a) tietoja tai muuta materiaalia, joka rikkoo immateriaalioikeuksia, omistusoikeuksia ja muita oikeuksia; tai (b) tietoja, joita ei saa julkaista tai levittää loukkauksen tai kunnianloukkauksen, herjaamisen tai rasismin aiheuttaman uhan tai vamman vuoksi tai (c) tiedot, jotka sisältävät viruksia tai muita ohjelmistoja. Voi vahingoittaa meidän tai kolmansien osapuolten tietokonejärjestelmät tai tavalla, joka estää tai rajoittaa muita käyttäjiä Pääsy verkkosivustolle. (d) Kaikki tiedot tai muu aineisto, joka rikkoo lakia. (e) Tiedot tai materiaalit, jotka sisältävät mainoksia tai muuta sisältöä, johon ei edellytetä etukäteistä kirjallista suostumustamme.</p>
								<p>4.1.2. Muokkaa tai poista kaikki attribuutiot, oikeudelliset huomautukset, tarrat tai nimitykset, jotka ovat tämän verkkosivuston omistuksessa.</p>
								<p>4.1.3. Pääsy palveluihin voidaan saada minkä tahansa käyttöliittymän kautta, joka ei ole verkkosivusto.</p>
								<p>4.1.4. Älä häiritse verkkosivuston käyttöä tai muiden käyttäjien tarjoamia palveluita</p>
								<p>4.1.5. Botteja ja muita automatisoituja tekniikoita käytetään pääsemään sivustolle ja/tai sen palveluihin.</p>
								<p>4.1.6. Et saa ladata tai lähettää tai edes yrittää ladata mitään sisältöä, joka on aktiivinen tai passiivisesti mukana tiedonkeruu- tai siirtomekanismeissa, kuten verkkovirheitä, evästeitä tai vakoiluohjelmia, ilman nimenomaista lupaamme.</p>
								<p>4.1.7. Osallistu ”kehystämiseen”, peilaamiseen tai muuhun menetelmään jäljittelemään palvelujen ulkonäköä tai toimintaa.</p>
								<p>4.1.8. Voit rikkoa sovellettavia lakeja tai määräyksiä ja rohkaista tai kannustaa laittomaan toimintaan, kuten tavaramerkkien rikkomiseen tekijänoikeusrikkomukseen, kunnianloukkaukseen yksityisyyden loukkaamiseen henkilöllisyyden hakkerointiin tai väärennettyjen ohjelmistojen jakeluun;</p>
								<p>4.1.9. Voit muokata tai muuttaa tämän verkkosivuston lähdekoodia. Voit myös ladata sovelluksia tai ohjelmistoja, jotka voivat aiheuttaa vahinkoa verkkosivustolle tai toiselle henkilölle.</p>
								<p>4.1.10. Et saa purkaa, purkaa tai kääntää mitään tekniikkaa tai ohjelmistoa, joka on verkkosivustolla tai jota käytetään palvelujen tarjoamiseen.</p>
								<p>4.2. Tämän sopimuksen ehdot täydentävät mahdollisia oikeuksiamme. Jos uskomme, että sivuston käyttö ei ole näiden ehtojen ehtojen tai muiden sovellettavien lakien mukaista, saatamme pystyä seuraamaan verkkosivuston tai palveluiden käyttöä tai estämään pääsyn siihen tai paljastamaan käyttäytymismallisi verkkosivustolla muille osapuolille tai ryhtymään muihin asianmukaisiin toimenpiteisiin kolmansien osapuolten oikeuksien ja omaisuuden turvaamiseksi.</p>
								<h3>5. Immateriaalioikeudet</h3>
								<p>5.1. Verkkosivuston sisältö, mukaan lukien videoihin liittyvä sisältö, kuten tekstikuvat, logot, äänet, design-tavaramerkit ja muu materiaali, on suojattu meidän ja kolmansien osapuolten immateriaalioikeuksilla.</p>
								<p>5.2. Kaikki oikeudet, nimikkeet ja kaikki palveluihin ja verkkosivustoon liittyvät oikeudet ja edut ovat meidän. Lukuun ottamatta oikeuksia käyttää palveluita ja verkkosivustoa näiden ehtojen mukaisesti, palvelujen ja verkkosivuston käyttäminen ei anna heille mitään immateriaalioikeuksia.</p>
								<p>5.3. Käyttäjä saa käyttää verkkosivustoa ja/tai palveluita vain henkilökohtaiseen, ei-kaupalliseen käyttöön.</p>
								<p>5.4. Et salli kenenkään muokata tai käänteissuunnitella, purkaa tai kopioida palveluita tai verkkosivustoa tai tehdä johdannaisia teoksia käyttämällä alilisenssiä tai vuokrausta.</p>
								<h3>6. Vastuun rajoittaminen</h3>
								<p>6.1. Sivusto ja palvelut ovat sinun vastuullasi. Emme tarjoa mitään takuita, olivatpa ne implisiittisiä tai nimenomaisesti mainittuja, jotka koskevat verkkosivustoa ja palveluita tai niiden käyttöä, mukaan lukien implisiittiset takuut laadusta ja myyntikelpoisuudesta, sekä tarkoituksesta, johon se on suunniteltu, kuten rikkomattomuus ja käytettävyys, auktoriteetti tarkkuuden, täydellisyyden, oikea-aikaisuuden ja nopean toimituksen suhteen. Sivuston kautta saatavilla olevaa sisältöä ja toimintoja tarjotaan ”sellaisenaan”, ”sellaisena kuin ne ovat”, ”sellaisina kuin ne ovat saatavilla” ja ”millä tahansa seurauksella”.</p>
								<p>6.2. Emme ole vastuussa verkkosivustolla olevien tietojen virheistä, puutteista tai epätarkkuuksista. Emme ota vastuuta palveluihin tai palveluiden kautta tapahtuvien lähetysten häiriöistä tai keskeytyksistä.</p>
								<p>6.3. Korvaamme sinulle kaikista menetyksistä, jotka ovat suoraan tai epäsuorasti aiheutuneet sinulle tai kolmannelle osapuolelle verkkosivuston tai palveluiden kautta. Olet vastuussa kaikista päätöksistä luottamalla verkkosivustolla ja/tai palveluissa oleviin tietoihin.</p>
								<p>6.4. Emme ole vastuussa mistään menetyksistä tai vahingoista, jotka liittyvät suoraan, epäsuorasti tai sinuun tai muuhun kolmanteen henkilöön. Tämä sisältää kaikki tulojen tai tietojen menetykset, jotka johtuvat sivuston ja/tai palveluiden käytöstä. Tämä vastuun rajoittaminen on sallittu sovellettavan alueen lain mukaisesti.</p>
								<p>6.5. Jos Internetissä tai puhelinlinjassa tai tietokonepalvelimessa tai järjestelmäpalvelimessa tai missä tahansa laitteistossa on tekninen ongelma, emme ota mitään vastuuta. Emme ole vastuussa mistään Internetin käytöstä.</p>
								<h3>7. Kolmansien osapuolten sisältö ja palvelut</h3>
								<p>7.1. Palveluja käyttäessäsi voit tarkastella kolmansien osapuolten ja palveluiden sisältöä. Tämä voi sisältää mainoksia tai arvosteluja kolmansien osapuolien alustoista.</p>
								<p>7.2. Emme ota vastuuta tiedoista tai tuotteista, joihin viitataan. Ne eivät välttämättä ole ajan tasalla tai ajan tasalla.</p>
								<p>7.3. Suosittelemme, että tarkistat kaikkien tietojen paikkansapitävyyden ennen päätöksen tekemistä. Olet vastuussa kaikista tiedoista tehdyistä päätöksistä ja toimista.</p>
								<h3>8. Linkit</h3>
								<p>8.1. Sivusto sisältää mainoksia ja sisältöä. Materiaalit ovat saatavilla kolmansien osapuolten verkkosivustojen kautta (”linkit”). Suosittelemme, että olet tietoinen tästä ennen kuin lataat, luotat näihin verkkosivustoihin, ohjelmistoihin tai muihin materiaaleihin saatuja tietoja, tai suoritat ostoksia tai muita tapahtumia, joita neuvomme sinulle. Nämä linkit tarjotaan vain käyttäjien mukavuuden vuoksi. Emme ole vastuussa mistään vahingoista tai menetyksistä, jotka aiheutuvat muiden verkkosivustojen tai ohjelmien kautta saataville asetettujen tietojen, tuotteiden tai palveluiden käytöstä tai luottamuksesta.</p>
								<p>8.2. Hyperlinkkien sisällyttäminen tälle verkkosivustolle ei tarkoita hyväksyntää, valtuutusta tai sitoutumista tai muuta hyväksyntää verkkosivustojen ohjelmistojen tai järjestelmänvalvojien yhteydessä.</p>
								<p>8.3. Emme ole tarkistaneet kaikkia hyperlinkkejä, emmekä voi pitää vastuussa ohjelmistosta tai verkkosivustosta, johon viitataan. Varoitamme sinua ennen kuin päätät käyttää, luottaa niihin tai ostaa mitään näistä verkkosivustoista tai sovelluksista. Et ole millään tavalla vastuussa mistään vahingoista tai menetyksistä, jotka aiheutuvat muiden verkkosivustojen kautta saatavilla olevien tuotteiden, tietojen tai sisällön käytöstä tai luottamuksesta.</p>
								<p>8.4. On sinun vastuullasi ja velvollisuutesi tarkistaa kolmansien osapuolten ylläpitämien verkkosivustojen ehdot ja käytännöt. Suosittelemme, että luet ne ennen kuin otat yhteyttä kolmannen osapuolen verkkosivustoihin.</p>
								<h3>9. Sekalaisia</h3>
								<p>9.1. Meillä on oikeus muuttaa, lopettaa tai muuttaa palveluitamme milloin tahansa. Muutokset eivät aiheuta sinulle haittaa, etkä voi esittää vaatimuksia meitä vastaan.</p>
								<p>9.2. Ehtoja voidaan muuttaa milloin tahansa. Voimme muuttaa ehtoja milloin tahansa. Ilmoitamme sinulle julkaisemalla uusimman version ja tarkistamalla sitten päivämäärän yläosassa. Kaikki muutokset tulevat voimaan parin työpäivän kuluessa. Sinun katsotaan hyväksyvän kaikki muutokset verkkosivuston ehtoihin, jos jatkat sen käyttöä niiden julkaisemisen jälkeen.</p>
								<p>9.3. Käyttäjä tunnustaa ja hyväksyy, että verkkosivuston kautta tai sen kautta välitetyt tiedot eivät luo minkäänlaista suhdetta, jota ei ole nimenomaisesti mainittu näissä ehdoissa.</p>
								<p>9.4. Nämä ehdot ja tietosuojakäytäntö sekä tietosuojakäytännöt, sellaisina kuin ne ovat ajoittain muutettuja, ovat ainoat voimassa olevat sopimukset meidän ja käyttäjän välillä, ja kaikki muut suulliset tai kirjalliset lupaukset, ilmoitukset tai sopimukset, jotka eivät sisälly tietosuojakäytäntöön, ovat oikeudellisesti sitovia osapuolille.</p>
								<p>9.5. Kyvyttömyys käyttää mitään säädettyä oikeutta tai valtaa katsotaan luopumiseksi oikeudesta tai vallasta. Jokaisen harjoituksen yhden tai vain osan harjoituksesta on oltava osa samojen tai muiden oikeuksien tai oikeussuojakeinojen lisäkäyttöä tai jatkokäyttöä.</p>
								<p>9.6. Nämä ehdot peruutetaan, jos toimivaltainen tuomioistuin julistaa kyseisen säännöksen pätemättömäksi. Loput ehdoista tulkitaan siltä varalta, että poissulkeminen toteutettiin, ja niitä sovelletaan niiden ehtojen mukaisesti. Termejä tulkitaan kuitenkin poissulkemislausekkeiden tarkoituksen ja merkityksen mukaisesti tuomioistuinten päätöksen mukaisesti.</p>
								<p>9.7. Nämä ehdot sallivat kolmansien osapuolien siirtää tai luovuttaa kaikki oikeudet ja velvollisuudet. Kolmannen osapuolen operaattorit pystyvät hallitsemaan verkkosivustoa ja kaikkia sen palveluita rajoittamatta edellistä. Nämä ehdot eivät salli sinun luovuttaa tai siirtää oikeuksiasi tai velvollisuuksiasi.</p>
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