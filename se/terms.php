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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Hem</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plattform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Fördelar</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Vårt team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontakta oss</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Registrera</a>
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
								<h1 class="conditions__title h2">Villkor för användning</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1:a generalen</h3>
								<p>1.1. Du är inbjuden att besöka {{site_name}} (”Webbplats”)</p>
								<p>Vår e-postinfo@ {{site_name}} .com</p>
								<p>1.2. Denna webbplats erbjuder information om tredjepartsplattformar (”Tredjepartsplattformar”) för handel (”Tjänsterna”)</p>
								<p>1.3. Villkoren reglerar din (”du”, ”din” eller ”användare”) tillgång till webbplatsen och tjänsterna. Innan du kan komma åt tjänsterna måste du läsa dessa villkor noggrant. Dessa villkor är ett juridiskt bindande avtal mellan dig och ägaren av webbplatsen du, och ägaren av webbplatsen. Du måste acceptera villkoren i alla avseenden om du inte vill använda webbplatsen. Villkoren kan ändras från tid till annan.</p>
								<p>Dessa villkor innehåller vår integritetspolicy. Du accepterar dessa villkor och godkänner vår integritetspolicy. (Du kan läsa vår integritetspolicy här).</p>
								<h3>2. Behörighet</h3>
								<p>2.1. Om du håller dig till dessa villkor kommer webbplatsen att vara tillgänglig för dig.</p>
								<p>2.1.1. Lägsta ålder 18 år</p>
								<p>2.1.2. Du kan underteckna dessa villkor och villkor.</p>
								<p>2.1.3. Lagarna i det land där du bor eller använder tjänsterna hindrar inte på något sätt användare från att använda webbplatsen eller någon av dess tjänster.</p>
								<p>2.2. Vi lämnar inga garantier, utfästelser eller garantier om lagligheten eller användningen av tjänsterna eller webbplatsen för någon person. Vi ansvarar inte för olaglig användning av webbplatsen eller tjänster från någon användare.</p>
								<h3>3. Områden med begränsad tillgång</h3>
								<p>3.1. Utan att begränsa omfattningen av den information som tillhandahålls förbehåller vi oss rätten att begränsa tillgången till tjänsterna och/eller webbplatsen (eller någon del av dem) till: (i), användare som är bosatta i begränsade områden (”begränsade territorier”) och (ii) användare som vi tror kan utgöra en reglerings-, juridisk eller ansedd risk.</p>
								<p>3.2. Vi kan också införa ytterligare villkor innan vi accepterar användare som är medborgare i eller i vissa länder. Om användare reser till begränsade områden kan webbplatsen eller tjänsterna vara tillfälligt otillgängliga eller blockerade.</p>
								<h3>4. Förbjudna aktiviteter</h3>
								<p>4.1. Du accepterar att använda webbplatsen och tjänsterna respektfullt och inte att:</p>
								<p>4.1.1. Du kan ansluta till vår webbplats och använda den för att ladda ner, ladda upp, dela och publicera, samt för att överföra eller skicka (a) information eller annat material som kränker immateriella rättigheter till integritet, äganderätt och andra rättigheter; eller (b) information som inte är tillåten att publiceras eller distribueras på grund av hot eller skada orsakad av förolämpning eller ärekränkning, förtal eller rasism, eller (c) information som innehåller virus eller annan programvara Kan skada våra eller tredje parts datorsystem, eller på ett sätt som blockerar eller begränsar andra användare från Åtkomst till webbplatsen. (d) All information eller annat material som strider mot någon lag. (e) Information eller material som innehåller annonser eller annat innehåll som inte är föremål för vårt föregående skriftliga medgivande.</p>
								<p>4.1.2. Ändra eller ta bort eventuella attribut, juridiska meddelanden, etiketter eller beteckningar som tillhör denna webbplats.</p>
								<p>4.1.3. Tillgången till tjänsterna kan erhållas via alla gränssnitt som inte är webbplatsen.</p>
								<p>4.1.4. Stör inte användningen av webbplatsen eller tjänster som tillhandahålls av andra användare</p>
								<p>4.1.5. Bots och andra automatiserade tekniker används för att få tillgång till webbplatsen och/eller dess tjänster.</p>
								<p>4.1.6. Du får inte ladda upp eller överföra, eller ens försöka ladda upp, innehåll som är aktivt eller passivt involverat i datainsamling eller överföringsmekanismer, såsom webbbuggar, cookies eller spionprogram, utan vårt uttryckliga tillstånd.</p>
								<p>4.1.7. Delta i ”inramning”, spegling eller i någon annan metod för att imitera utseendet eller funktionen hos tjänsterna.</p>
								<p>4.1.8. Du kan bryta mot tillämpliga lagar eller förordningar, och uppmuntra eller uppmuntra olaglig aktivitet, såsom varumärkesintrång, upphovsrättsintrång, ärekränkning av sekretess intrång i identiteter, eller distribution av falsk programvara;</p>
								<p>4.1.9. Du kan ändra eller ändra källkoden på denna webbplats. Du kan också ladda upp program eller programvara som kan orsaka skada på webbplatsen eller någon annan person.</p>
								<p>4.1.10. Du får inte demontera, dekompilera eller bakåtkompilera någon teknik eller programvara som finns på webbplatsen eller används för att tillhandahålla tjänsterna.</p>
								<p>4.2. Villkoren i detta avtal är ett tillägg till alla rättigheter vi kan ha. Om vi anser att din användning av webbplatsen inte överensstämmer med villkoren i dessa villkor, eller andra tillämpliga lagar, kan vi eventuellt övervaka din användning av webbplatsen eller tjänsterna eller blockera åtkomst till den, eller avslöja dina beteendemönster på webbplatsen för andra parter eller vidta andra lämpliga åtgärder för att skydda tredje parts rättigheter och egendom.</p>
								<h3>5. Immateriella rättigheter</h3>
								<p>5.1. Webbplatsens innehåll, inklusive videorelaterat, såsom textbilder, logotyper, ljud, designvarumärken och annat material skyddas av våra och tredje parts immateriella rättigheter.</p>
								<p>5.2. Alla rättigheter, titlar och alla rättigheter och intressen relaterade till tjänsterna och webbplatsen är våra. Förutom rätten att använda tjänsterna och webbplatsen i enlighet med dessa villkor, ger användarens användning av tjänsterna och webbplatsen inga immateriella rättigheter till dem.</p>
								<p>5.3. Webbplatsen och/eller tjänsterna får endast användas av användaren för personligt, icke-kommersiellt bruk.</p>
								<p>5.4. Du får inte tillåta någon att modifiera eller bakåtkompilera, dekompilera eller kopiera tjänsterna eller webbplatsen, eller göra härledda verk med hjälp av underlicensen eller hyra.</p>
								<h3>6. Ansvarsbegränsning</h3>
								<p>6.1. Webbplatsen och tjänsterna är ditt ansvar. Eventuella garantier, oavsett om de är underförstådda eller uttryckligen angivna, avseende webbplatsen och tjänsterna eller din användning av dem inklusive underförstådda garantier för kvalitet och säljbarhet, liksom syftet för vilket det utformades som icke-intrång och användbarhet, auktoritet när det gäller noggrannhet, fullständighet, aktualitet och snabb leverans tillhandahålls inte av oss. Innehållet och funktionerna som är tillgängliga eller tillgängliga via webbplatsen erbjuds ”i befintligt skick”, ”som tillgängligt” och ”med alla konsekvenser”.</p>
								<p>6.2. Vi ansvarar inte för eventuella misstag, utelämnanden eller felaktigheter i informationen på webbplatsen. Vi tar inte ansvar för eventuella störningar eller avbrott i överföringar till eller genom tjänsterna.</p>
								<p>6.3. Vi kommer att ersätta dig för eventuella förluster, direkt eller indirekt som du eller någon tredje part ådrar sig via webbplatsen eller tjänsterna. Du kommer att vara ansvarig för alla beslut genom att förlita dig på information på webbplatsen och/eller i tjänsterna.</p>
								<p>6.4. Vi ansvarar inte för någon förlust eller skada som direkt, indirekt eller har samband med dig eller någon annan tredje person. Detta inkluderar förlust av inkomst eller data som är resultatet av din användning av webbplatsen och/eller tjänsterna. Denna ansvarsbegränsning är tillåten enligt lag i tillämplig region.</p>
								<p>6.5. Om det finns ett tekniskt problem med en Internet- eller telefonlinje eller datorleverantör eller systemserver, eller någon maskinvara tar vi inget ansvar. Vi är inte ansvariga för någon användning av Internet.</p>
								<h3>7. Innehåll och tjänster från tredje part</h3>
								<p>7.1. Du kan se innehåll från tredje part och tjänster när du använder tjänsterna. Detta kan inkludera annonser eller recensioner av tredjepartsplattformar.</p>
								<p>7.2. Vi tar inte ansvar för den information eller de produkter som hänvisas till. De kanske inte är aktuella eller uppdaterade hela tiden.</p>
								<p>7.3. Vi föreslår att du verifierar riktigheten av all information innan du fattar något beslut. Du är ansvarig för alla beslut och handlingar från informationen.</p>
								<h3>8. Länkar</h3>
								<p>8.1. Webbplatsen innehåller annonser såväl som innehåll. Materialet görs tillgängligt via tredje parts webbplatser (”länkar”). Vi rekommenderar att du är medveten om detta innan du laddar ner, förlitar dig på eller får tillgång till information som erhållits från dessa webbplatser, programvara eller annat material eller slutför köp eller andra transaktioner som vi kommer att ge dig råd om. Dessa länkar tillhandahålls endast för användarnas bekvämlighet. Vi ansvarar inte för någon skada eller förlust som orsakas av användning eller tillit till någon information, produkter eller tjänster som görs tillgängliga via andra webbplatser eller program.</p>
								<p>8.2. Införandet av hyperlänkar på denna webbplats innebär inte godkännande, godkännande eller anslutning eller någon annan form av godkännande från oss i samband med webbplatserna deras programvara eller administratörer.</p>
								<p>8.3. Vi har inte granskat alla hyperlänkar och kan inte hållas ansvariga för programvaran eller webbplatsen som det hänvisas till. Innan du bestämmer dig för att använda, lita på eller köpa något från dessa webbplatser eller applikationer, varnar vi dig. Du kommer inte på något sätt att hållas ansvarig för någon skada eller förlust som orsakas av användning eller tillit till produkter, information eller innehåll som är tillgängligt via andra webbplatser.</p>
								<p>8.4. Det är ditt ansvar och skyldighet att granska villkoren och policyn för webbplatser som drivs av tredje part. Vi rekommenderar starkt att du läser dem innan du tar kontakt med tredje parts webbplatser.</p>
								<h3>9. Diverse</h3>
								<p>9.1. Vi har rätt att ändra, upphöra eller ändra våra tjänster när som helst. Ändringarna kommer inte att orsaka någon skada för dig och du kommer inte att kunna hävda några anspråk mot oss.</p>
								<p>9.2. Villkoren kan ändras när som helst. Vi kan ändra villkoren när som helst. Vi kommer att informera dig genom att publicera den senaste versionen och sedan ändra datumet högst upp. Eventuella ändringar kommer att träda i kraft inom ett par arbetsdagar. Du anses acceptera eventuella ändringar av villkoren på webbplatsen om du fortsätter att använda den efter att de släppts.</p>
								<p>9.3. Användaren bekräftar och samtycker till att all information som överförs via eller via webbplatsen inte skapar någon form av relation som inte uttryckligen anges i dessa villkor.</p>
								<p>9.4. Dessa villkor och sekretesspolicyn, liksom sekretesspolicyn, som ändras från tid till annan är de enda giltiga avtalen mellan oss och användaren och alla andra löften, förklaringar eller avtal, vare sig muntliga eller skriftliga, som inte ingår i sekretesspolicyn är juridiskt bindande för parterna.</p>
								<p>9.5. Oförmåga att utöva någon rättighet eller makt som tillhandahålls i anses vara ett avstående från rätten eller makten. En eller endast en del av ett utövande ska utgöra en del av varje ytterligare eller ytterligare utövande av samma eller andra rättigheter eller rättsmedel.</p>
								<p>9.6. Dessa villkor kommer att upphävas om bestämmelsen i fråga förklaras ogiltig av en behörig domstol. Resten av villkoren kommer att tolkas som i händelse av att uteslutningen genomfördes, och kommer att tillämpas enligt deras villkor. Villkoren kommer dock att tolkas i enlighet med avsikterna och betydelsen av uteslutningsklausulerna enligt domstolens beslut.</p>
								<p>9.7. Dessa villkor tillåter tredjepartspartners att överföra eller överlåta alla rättigheter och skyldigheter. Tredjepartsoperatörer kan hantera webbplatsen och alla dess tjänster, utan att begränsa det föregående. Dessa villkor tillåter dig inte att överlåta eller överföra de rättigheter eller skyldigheter du har.</p>
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