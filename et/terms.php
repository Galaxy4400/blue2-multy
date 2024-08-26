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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Avaleht</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platvorm</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Eelised</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Meie meeskond</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Võta meiega ühendust</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Registreeri</a> 
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
								<h1 class="conditions__title h2">Kasutustingimused</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1. kindral</h3>
								<p>1.1. Teid kutsutakse külastama {{site_name}} („sait”)</p>
								<p>Meie e-posti info@ {{site_name}} .com</p>
								<p>1.2. See veebisait pakub teavet kolmandate osapoolte platvormide kohta („kolmandate osapoolte platvormid”) kauplemiseks (edaspidi „teenused”)</p>
								<p>1.3. Tingimused reguleerivad teie („Teie”, „Teie” või „Kasutaja”) juurdepääsu veebisaidile ja teenustele. Enne teenustele juurdepääsu saamiseks peate need tingimused hoolikalt läbi lugema. Need tingimused on õiguslikult siduv leping teie ja teie veebisaidi omaniku ja veebisaidi omaniku vahel. Kui te ei soovi veebisaiti kasutada, peate tingimustega igas mõttes nõustuma. Tingimusi saab aeg-ajalt muuta.</p>
								<p>Need tingimused sisaldavad meie privaatsuspoliitikat. Nõustute nende tingimustega ja nõustute meie privaatsuspoliitikaga. (Meie privaatsuspoliitikat saate lugeda siit).</p>
								<h3>2. Kõlblikkus</h3>
								<p>2.1. Kui järgite neid tingimusi, on veebisait teile juurdepääsetav.</p>
								<p>2.1.1. Minimaalne vanus 18 aastat</p>
								<p>2.1.2. Nendele tingimustele ja tingimustele saate alla kirjutada.</p>
								<p>2.1.3. Selle riigi seadused, kus te elate või teenuseid kasutate, ei takista mingil moel kasutajatel veebisaiti või selle teenuseid kasutamast.</p>
								<p>2.2. Me ei anna ühelegi isikule mingeid garantiisid, kinnitusi ega garantiisid teenuste või veebisaidi seaduslikkuse või kasutamise kohta. Me ei vastuta veebisaidi või ühegi kasutaja teenuste ebaseadusliku kasutamise eest.</p>
								<h3>3. Piiratud juurdepääsuga territooriumid</h3>
								<p>3.1. Piiramata esitatud teabe ulatust jätame endale õiguse piirata juurdepääsu teenustele ja/või veebisaidile (või nende mõnele osale): (i) kasutajatele, kes elavad piiratud aladel („piiratud territooriumid”) ja (ii) kasutajatele, mis meie arvates võivad olla regulatiivsed, õiguslikud või mainega seotud riskid.</p>
								<p>3.2. Samuti võime kehtestada täiendavaid tingimusi enne kasutajate aktsepteerimist, kes on teatud riikide kodanikud või teatud riikide kodanikud. Kui kasutajad reisivad piiratud piirkondadesse, võivad Veebisait või teenused olla ajutiselt kättesaamatud või blokeeritud.</p>
								<h3>4. Keelatud tegevused</h3>
								<p>4.1. Nõustute kasutama veebisaiti ja teenuseid lugupidavalt ja mitte:</p>
								<p>4.1.1. Võite luua ühenduse meie veebisaidiga ja kasutada seda allalaadimiseks, üleslaadimiseks, jagamiseks ja avaldamiseks, samuti edastamiseks või saatmiseks (a) teabe või muu materjali, mis rikub intellektuaalõigusi privaatsuse, omandiõigusi ja muid õigusi; või (b) teave, mida ei ole lubatud avaldada ega levitada solvamise või laimamise, laimamise või rassismi tõttu, või c) teave, mis sisaldab viirusi või muud tarkvara, võib kahjustada meie arvutit süsteemid või kolmandate isikute süsteemid või viisil, mis blokeerib või piirab teistele kasutajatele Juurdepääs veebisaidile. (d) mis tahes teave või muu materjal, mis rikub mis tahes seadust. (e) teave või materjalid, mis sisaldavad reklaame või muud sisu, mille suhtes ei kehti meie eelnev kirjalik nõusolek.</p>
								<p>4.1.2. Muutke või kustutage selle veebisaidi omandiõigused, juriidilised teated, sildid või tähistused.</p>
								<p>4.1.3. Juurdepääsu teenustele võib saada mis tahes liidese kaudu, mis ei ole veebisait.</p>
								<p>4.1.4. Ärge segage veebisaidi kasutamist ega teiste kasutajate pakutavaid teenuseid</p>
								<p>4.1.5. Saidile ja/või selle teenustele juurdepääsu saamiseks kasutatakse roboteid ja muid automatiseeritud tehnikaid.</p>
								<p>4.1.6. Teil ei ole lubatud ilma meie selgesõnalise loata üles laadida ega edastada või isegi proovida üles laadida mis tahes sisu, mis on aktiivne või passiivselt seotud andmete kogumise või edastamise mehhanismidega, nagu veebivead, küpsised või nuhkvaraseadmed.</p>
								<p>4.1.7. Teenuste välimuse või funktsiooni jäljendamiseks tegelege raamimise, peegeldamise või mõne muu meetodiga.</p>
								<p>4.1.8. Te võite rikkuda mis tahes kehtivaid seadusi või määrusi ning julgustada või julgustada mis tahes ebaseaduslikku tegevust, näiteks kaubamärgi rikkumist autoriõiguse rikkumine laimamine privaatsuse rikkumine identiteedi häkkimine või võltstarkvara levitamine;</p>
								<p>4.1.9. Teil on võimalik muuta või muuta selle veebisaidi lähtekoodi. Samuti võite üles laadida rakendusi või tarkvara, mis võivad kahjustada veebisaiti või mõnda muud isikut.</p>
								<p>4.1.10. Teil ei ole lubatud lahti võtta, dekompileerida ega pöördprojekteerida ühtegi tehnoloogiat või tarkvara, mis on veebisaidil või mida kasutatakse teenuste osutamiseks.</p>
								<p>4.2. Käesoleva lepingu tingimused lisanduvad kõikidele õigustele, mis meil võivad olla. Kui usume, et teie saidi kasutamine ei ole kooskõlas nende tingimuste või muude kehtivate seadustega, võime jälgida teie veebisaidi või teenuste kasutamist või blokeerida juurdepääsu sellele või avaldada teie käitumismustreid veebisaidil teistele osapooltele või võtta muid asjakohaseid meetmeid kolmandate osapoolte õiguste ja vara kaitsmiseks.</p>
								<h3>5. Intellektuaalomandi õigused</h3>
								<p>5.1. Veebisaidi sisu, sealhulgas videoga seotud sisu, nagu tekstipildid, logod, helid, kujunduskaubamärgid ja muu materjal, on kaitstud meie ja kolmandate osapoolte intellektuaalomandi õigustega.</p>
								<p>5.2. Kõik õigused, pealkirjad ning kõik teenuste ja veebisaidiga seotud õigused ja huvid kuuluvad meie omale. Peale õiguste kasutada teenuseid ja veebisaiti vastavalt käesolevatele tingimustele, ei anna teenuste ja veebilehe kasutaja kasutamine neile intellektuaalomandi õigusi.</p>
								<p>5.3. Kasutaja võib veebisaidile ja/või teenustele juurde pääseda ainult isiklikuks, mittekaubanduslikuks kasutamiseks.</p>
								<p>5.4. Te ei luba kellelgi muuta ega ümber kujundada, teenuseid või veebisaiti dekompileerida ega kopeerida ega teha tuletatud teoseid, kasutades alamlitsentsi või renti.</p>
								<h3>6. Vastutuse piiramine</h3>
								<p>6.1. Veebileht ja teenused on teie vastutusel. Me ei anna igasuguseid kaudseid või selgesõnaliselt märgitud garantiisid veebisaidi ja teenuste või nende kasutamise kohta, sealhulgas kaudsed kvaliteedi ja müügikindluse garantiid, samuti eesmärgi, milleks see loodi, nagu mitterikkumine ja kasutatavus, volitusi täpsuse, täielikkuse, õigeaegsuse ja kiire kohaletoimetamise osas. Veebisaidi kaudu kättesaadavat või juurdepääsetavat sisu ja funktsioone pakutakse „sellisena, nagu on”, „juurdepääsetavana” ja „mis tahes tagajärgedega”.</p>
								<p>6.2. Me ei vastuta veebisaidil oleva teabe vigade, puuduste või ebatäpsuste eest. Me ei võta vastutust teenustele või teenuste kaudu edastatavate häirete või katkestuste eest.</p>
								<p>6.3. Hüvitame teile kahju eest, mis on otseselt või kaudselt teie või kolmanda osapoole veebisaidi või teenuste kaudu tekkinud. Te vastutate kõigi otsuste eest, tuginedes veebisaidil ja/või teenustes sisalduvale teabele.</p>
								<p>6.4. Me ei vastuta kahjude või kahju eest, mis on otseselt, kaudselt või seotud teie või mõne muu kolmanda isikuga. See hõlmab sissetuleku või andmete kaotust, mis tuleneb teie saidi ja/või teenuste kasutamisest. See vastutuse piirang on kohaldatava piirkonna seadusega lubatud viisil.</p>
								<p>6.5. Kui Interneti- või telefoniliini või arvutipakkuja või süsteemiserveri või mis tahes riistvaraga on tehniline probleem, ei võta me mingit vastutust. Me ei vastuta Interneti kasutamise eest.</p>
								<h3>7. Kolmandate osapoolte sisu ja teenused</h3>
								<p>7.1. Teenuste kasutamisel saate vaadata kolmandate osapoolte ja teenuste sisu. See võib hõlmata kolmandate osapoolte platvormide reklaame või arvustusi.</p>
								<p>7.2. Me ei võta vastutust viidatud teabe ega toodete eest. Need ei pruugi alati olla ajakohased ega ajakohased.</p>
								<p>7.3. Soovitame teil enne otsuse tegemist kontrollida kogu teabe õigsust. Te vastutate kõigi teabest tulenevate otsuste ja toimingute eest.</p>
								<h3>8. Lingid</h3>
								<p>8.1. Sait sisaldab nii reklaame kui ka sisu. Materjalid tehakse kättesaadavaks kolmandate isikute veebisaitide kaudu („lingid”). Soovitame teil sellest teadlik olla enne nende veebisaitide, tarkvara või muude materjalide kaudu saadud teabe allalaadimist, tuginemist või sellele juurde pääsemist või mis tahes ostu või muude tehingute sooritamist, mida me teile soovitame. Need lingid on pakutud ainult kasutajate mugavuse huvides. Me ei vastuta kahjude või kahjude eest, mis on põhjustatud muude veebisaitide või programmide kaudu kättesaadavaks tehtud teabe, toodete või teenuste kasutamisest või tuginemisest.</p>
								<p>8.2. Hüperlinkide lisamine sellele veebisaidile ei tähenda meie poolt kinnitamist, volitamist ega liitumist ega muud kinnitust seoses nende tarkvara või administraatorite veebisaitidega.</p>
								<p>8.3. Me ei ole kõiki hüperlinke üle vaadanud ja neid ei saa vastutada viidatud tarkvara või veebisaidi eest. Enne kui otsustate nendelt veebisaitidelt või rakendustelt midagi kasutada, tugineda või osta, hoiatame teid. Teid ei võeta mingil juhul vastutavaks kahjude või kahjude eest, mis on põhjustatud muude veebisaitide kaudu juurdepääsetavate toodete, teabe või sisu kasutamisest või tuginemisest.</p>
								<p>8.4. Teie kohustus ja kohustus on vaadata läbi kolmandate osapoolte haldatavate veebisaitide tingimused ja eeskirjad. Soovitame tungivalt lugeda need enne kolmandate osapoolte veebisaitidega ühendust võtmist.</p>
								<h3>9. Mitmesugused</h3>
								<p>9.1. Meil on õigus oma teenuseid igal hetkel muuta, lõpetada või muuta. Muudatused ei põhjusta teile mingit kahju ja te ei saa meie vastu mingeid nõudeid esitada.</p>
								<p>9.2. Tingimusi saab igal ajal muuta. Me saame tingimusi igal ajal muuta. Teavitame teid, avaldades kõige uuema versiooni, ja seejärel vaadates kuupäeva ülaosas. Kõik muudatused jõustuvad paari tööpäeva jooksul. Loetakse, et nõustute veebisaidi tingimuste muudatustega, kui jätkate selle kasutamist pärast nende avaldamist.</p>
								<p>9.3. Kasutaja tunnistab ja nõustub, et veebisaidi kaudu või selle kaudu edastatud teave ei loo mingeid suhteid, mida ei ole selgesõnaliselt nimetatud tingimustes.</p>
								<p>9.4. Need tingimused ja privaatsuspoliitika ning aeg-ajalt muudetud privaatsuseeskirjad on ainsad kehtivad lepingud meie ja kasutaja vahel ning kõik muud lubadused, avaldused või kokkulepped, olgu need siis suulised või kirjalikud, mis ei sisaldu privaatsuspoliitikas, on pooltele õiguslikult siduvad.</p>
								<p>9.5. Suutmatust teostada mis tahes õigust või volitusi, mis on sätestatud, loetakse õigusest või volitusest loobumiseks. Iga üks või ainult osa teostamisest on osa samade või muude õiguste või õiguskaitsevahendite mis tahes täiendava või edasise teostamise elemendiks.</p>
								<p>9.6. Need tingimused tühistatakse juhul, kui pädeva pädevusega kohus tunnistab kõnealuse sätte kehtetuks. Ülejäänud tingimusi tõlgendatakse nii, kui välistamine rakendati, ja neid kohaldatakse vastavalt nende tingimustele. Mõisteid tõlgendatakse siiski vastavalt välistamisklauslite kavatsustele ja tähendusele vastavalt kohtute otsusele.</p>
								<p>9.7. Need tingimused võimaldavad kolmandate osapoolte partneritel üle anda või loovutada kõik õigused ja kohustused. Kolmandate osapoolte operaatorid saavad hallata veebisaiti ja kõiki selle teenuseid, piiramata eelmist. Need tingimused ei luba teil loovutada ega üle anda teie õigusi või kohustusi.</p>
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