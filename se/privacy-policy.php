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
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrera</a>
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
								<h1 class="policy__title h2">Sekretesspolicy</h1>
								<p class="policy__date">Senast uppdaterad: 22-09-30</p>
							</div>
							<div class="policy__content _special-styles">
								<p>Vi (även kända som ”Vi”, ”Oss” eller ”Vår”) har åtagit oss att skydda dina personuppgifter såväl som din integritet.</p>
								<p>Denna sekretesspolicy har utformats för att informera dig om hur vi samlar in och lagrar den information du tillhandahåller via webbplatsen {{site_name}} (”webbplatsen”).</p>
								<p>Dessa principer kommer att försvaras:</p>
								<ul>
									<li>För att vara transparent när det gäller behandling och insamling av personuppgifter om dig:</li>
								</ul>
								<p>Vi vill att du ska kunna göra välgrundade val när det gäller användning och behandling av personuppgifter. Detta är anledningen till att vi har skapat vår hemsida. För att åstadkomma detta använder vi olika metoder och rutiner för att ge dig relevant information om användningen av personuppgifter.</p>
								<p>Om vi anser att du behöver specifika uppgifter kommer vi att tillhandahålla information till dig vid lämpligt datum och tid.</p>
								<p>Vi svarar gärna på alla frågor du kan ha och kommer att ge alla förtydliganden du behöver med avseende på eventuella begränsningar som införs enligt lag. Vi kan nås via e-post på adressen nedan: info@ {{site_name}} .com</p>
								<ul>
									<li>Personuppgifter kommer endast att användas för de ändamål som anges i policyn.</li>
								</ul>
								<p>Personuppgifter kan behandlas av oss för en rad ändamål, till exempel för att erbjuda webbplatsen till dig och för att ansluta dig till tredje parts handelsplattformar (”tjänsterna”) och för att förbättra webbplatsen, skydda våra rättigheter, intressen, underlätta underhåll och tillhandahållande av tjänsterna, för att uppfylla eventuella lagstadgade eller juridiska skyldigheter och för att utföra administrativa och affärsmässiga aktiviteter för att underlätta leverans och användning av tjänsterna.</p>
								<p>Personuppgifter behandlas också av oss för att bättre förstå dina preferenser och behov.</p>
								<ul>
									<li>Att använda viktiga verktyg för att skydda dina rättigheter med avseende på personuppgifter:</li>
								</ul>
								<p>För att möjliggöra utövandet av dina rättigheter har vi betydande resurser. Kontakta oss när som helst för att begära personuppgifter om dina personuppgifter. Vi kommer att ändra eller ta bort det, sluta använda det för specifika ändamål eller för allmänna ändamål. Överföra informationen till dig eller till en extern part. Vi kommer att kunna tillgodose dina önskemål.</p>
								<ul>
									<li>Säkra dina personuppgifter:</li>
								</ul>
								<p>Även om vi inte kan garantera fullständig säkerhet för dina personuppgifter, kan vi garantera att vi fortsätter att använda en mängd olika metoder och tekniker för att säkerställa att dina personuppgifter skyddas.</p>
								<p>Vår integritets- och säkerhetspolicy är fullständig.</p>
								<h3>1. Omfattningen?</h3>
								<p>Denna policy beskriver vilken typ av personuppgifter företaget samlar in om fysiska individer och hur det behandlar dem, delar dem med tredje part, säkrar processer och så vidare.</p>
								<p>Denna policy handlar om information som är relaterad till en identifierad eller identifierbar fysisk person. En fysisk person som är identifierbar kan definieras som någon som är direkt identifierbar eller en kombination av ytterligare information som vi har eller kan komma åt.</p>
								<p>Policyn definierar ”behandling” som en process som kräver användning eller insamling av personuppgifter. Det inkluderar hantering, strukturering och lagring av personuppgifter.</p>
								<p>Våra tjänster är avsedda att användas av allmänheten och är inte avsedda att användas av någon under 18 år. Vi söker inte medvetet eller samlar in information från någon person yngre än 18 år. Vi tillåter inte medvetet sådana personer att använda våra tjänster. Vi kommer att radera all information vi upptäcker om barn så snabbt vi kan om vi lär oss det.</p>
								<h3>2. Vilka personuppgifter har vi om dig?</h3>
								<p>Om du använder tjänsten och kanalerna, eller besöker vår webbplats, samlar vi in personuppgifter. Vi kan begära dina personuppgifter i vissa fall. I andra fall samlar vi in dina personuppgifter genom att analysera och analysera användningen av våra tjänster eller våra servicekanaler eller genom att ta emot din information från våra tredjepartspartners.</p>
								<h3>3. Det finns inget krav på att lämna ut personuppgifter till företaget och konsekvenserna.</h3>
								<p>Men du är inte skyldig att förse oss med några personuppgifter. Under vissa omständigheter kan det dock hända att du inte behöver förse oss med några personuppgifter. Detta kan hindra oss från att erbjuda tjänsterna eller hindra användare från att komma åt webbplatsen.</p>
								<h3>4. Vilken typ av personuppgifter kan vi samla in? När du besöker vår webbplats samlar vi in följande personuppgifter:</h3>
								<p>Detta inkluderar information om din aktivitetslogg online, data om din trafik (inklusive IP-adress, datum för åtkomst, tid för åtkomst och datum för åtkomst) språket du använde, kraschloggar för programvara, vilken typ av webbläsare som används, samt information om enheten som du använde. Informationen du samlar in är inte privat information och kan inte användas för att identifiera dig.</p>
								<p>Personuppgifter som vi får från dig: Alla personuppgifter som du lämnar till oss efter eget val när du ansluter till en online-handelsplattform från en tredje part via oss.</p>
								<p>Personlig information som du tillhandahåller specifikt till tredjepartsplattformar för att underlätta handel: denna information innehåller ditt fullständiga namn, adress, telefonnummer och e-postadress.</p>
								<h3>5. Den rättsliga grunden och skälen till behandlingen av personuppgifter</h3>
								<p>Dina personuppgifter behandlas av företaget för de ändamål som beskrivs i detta avsnitt, och i enlighet med den rättsliga grunden som gäller för det.</p>
								<p>Utan rättslig grund kan företaget inte använda personuppgifter som rör dig. De rättsliga grunderna som företaget kan använda för att behandla personuppgifter om dig:</p>
								<ul class="small">
									<li>Du har gett ditt samtycke till behandling av dina personuppgifter av en eller flera skäl. Detta är fallet när du skickar in personlig information via webbplatsen för att vi kan överföra dem till en tredjeparts handelsplattform.</li>
									<li>Företaget eller en tredje part kan kräva behandling för att tillgodose deras berättigade intresse. Det är till exempel nödvändigt för att förbättra våra tjänster eller försvara rättsliga anspråk.</li>
									<li>Behandlingen måste uppfylla en laglig skyldighet.</li>
								</ul>
								<p>Kontakta oss via e-post för mer information om den behandling som krävs för att skydda de legitima intressena.</p>
								<p>Nedan finns en lista över skäl och rättsliga grunder som vi kan använda den information du ger oss. Personuppgifter.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Räckvidd</div>
										<div class="table-1__header-column">Rättslig grund</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>För att tillhandahålla din personliga information till tredje part på din begäran för att få tillgång till digital handel</p>
												<p>Om du ber om det kan vi begära personuppgifter från dig för att vidarebefordra dem till tredjepartsföretag.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Du har gett ditt samtycke till behandling av dina personuppgifter av en eller flera skäl.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>För att besvara dina förfrågningar, frågor eller problem är personuppgifter nödvändiga för att hjälpa dig att svara på eventuella frågor du kan ha angående tjänsterna.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Företagets legitima intressen eller tredje parts intressen måste behandlas.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>För att uppfylla juridiska skyldigheter eller administrativa, rättsliga eller juridiska eller rättsliga personuppgifter behandlas för att uppfylla lagkraven.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>För att säkerställa efterlevnad av lagliga skyldigheter krävs behandling.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>För att förbättra våra tjänster kan personuppgifter användas av oss för att förbättra våra tjänster. Detta inkluderar bland annat eventuella krascher eller felrapporter som vi samlar in i samband med tjänsterna.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Företagets legitima intressen eller tredje parts intressen måste behandlas.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>För att stoppa bedrägerier och missbruk av våra tjänster</p>
											</div>
										</div>
										<div class="table-1__column">
											Företagets legitima intressen eller tredje parts intressen måste behandlas.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>För att utföra och hantera åtgärder som är i linje med kraven för våra tjänster inkluderar sådana aktiviteter back-office-funktioner, affärsutvecklingsaktiviteter, strategiskt beslutsfattande, tillsynsmekanismer etc.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Företagets legitima intressen eller tredje parts intressen måste behandlas.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>För att genomföra analyser, till exempel statistisk analys för att fatta beslut i olika frågor, använder vi olika analystekniker (inklusive de som är statistiska).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Företagets legitima intressen eller tredje parts intressen måste behandlas.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>För att skydda våra tillgångar, rättigheter och intressen såväl som tredje parts har vi utvecklat HTML0 för att fastställa och försvara rättsliga anspråk Personuppgifter kan behandlas av oss för att skydda våra rättigheter, intressen och tillgångar, eller tredje parts, i enlighet med tillämpliga lagar, förordningar eller avtal och eventuella villkor, villkor eller policyer.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Företagets legitima intressen eller tredje parts intressen måste behandlas.</p>
										</div>
									</div>
								</div>

								<h3>6. Överföring av personuppgifter till tredje part</h3>
								<p>Företaget kan också tillhandahålla personuppgifter till tredjepartsföretag som erbjuder tjänster till oss som värd- och lagringsleverantörers IP-adressinformation, samt analys av användarupplevelser.</p>
								<p>Du kan också be oss att lämna specifika personuppgifter om dig till tredje parts handelsplattformar. Vi kommer att tillhandahålla dina personuppgifter som du lämnar till oss i dessa fall till handelsplattformar från tredje part. Användningen av dina personuppgifter är föremål för deras integritetspolicy. Dina personuppgifter kan delas med flera handelsplattformar.</p>
								<p>Företaget skulle kunna dela personuppgifter med relaterade enheter eller affärspartners. Detta kan ge företaget de resurser som behövs för att det ska kunna förbättra och förbättra de produkter och tjänster som det tillhandahåller sina kunder.</p>
								<p>I händelse av behov av att skydda tredje parts rättigheter eller tillgångar har Företaget tillåtelse att lämna ut personuppgifter med tillsynsmyndigheter, lokala eller andra officiella myndigheter.</p>
								<p>Vi kan också dela personuppgifter om dig med potentiella investerare eller köpare, eller med långivare till företaget eller något annat företag i koncernen om samma transaktion äger rum (inklusive överföring eller försäljning av tillgångar som tillhör företaget eller något annat företag inom gruppen) eller som en del av någon fusion eller omstrukturering, konsolidering eller konkurs av företaget eller någon annan verksamhet inom koncernen.</p>
								<h3>7. Cookies och tjänster från tredje part</h3>
								<p>Tredjepartstjänster, till exempel de som tillhandahåller annonser på vår webbplats eller analysföretag kan användas. Dessa företag kan också använda cookies eller annan teknik.</p>
								<p>Cookies är små textfiler som placeras på din enhet varje gång du besöker eller besöker webbplatsen. Cookies används för att samla in information om dina preferenser och surfvanor för att förbättra din användarupplevelse, hålla reda på dina preferenser och anpassa de produkter och tjänster du kan njuta av. Cookies används också för statistik och analys.</p>
								<p>Vissa cookies som vi kan använda är sessionscookies. De laddas tillfälligt ner till din enhet och kommer att pågå under en kort tid innan du stänger din webbläsare. Andra cookies är beständiga. Beständiga cookies finns kvar på din enhet under en tid efter att du stängt din webbläsare. De används för att hjälpa webbplatsen att identifiera dig som en återkommande användare och göra det möjligt för användare att återvända till webbplatsen.</p>
								<h3>Typer av cookies:</h3>
								<p>De kan användas av oss baserat på deras syfte:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Typ av cookie</div>
											<div class="table-2__text">
												<p>Cookies är absolut nödvändiga</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Räckvidd</div>
											<div class="table-2__text">
												<p>Dessa cookies är nödvändiga för att du ska kunna komma åt de funktioner du har bett om och för att navigera på vår webbplats. Cookies används för att tillhandahålla den information, produkter och tjänster som du har bett oss om.</p>
												<p>De krävs för att din enhet ska ladda ner och strömma data. Detta låter dig navigera runt på webbplatsen, använda dess funktioner och sedan återgå till sidor du tidigare har varit på.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Ytterligare information</div>
											<div class="table-2__text">
												<p>Cookies samlar in personuppgifter, såsom ditt användarnamn, samt sista inloggningsdatum för att bekräfta att du är inloggad på webbplatsen.</p>
												<p>De raderas när du stänger din webbläsare (sessionscookies).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Typ av cookie</div>
											<div class="table-2__text">
												<p>Funktionalitetscookies</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Räckvidd</div>
											<div class="table-2__text">
												<p>Cookies tillåter oss att känna igen dig varje gång du besöker vår webbplats och även spara dina preferenser och preferenser.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Ytterligare information</div>
											<div class="table-2__text">
												<p>De varar fram till utgångsdatumet och sparas även efter att webbläsaren har stängts.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Typ av cookie</div>
											<div class="table-2__text">
												<p>Cookies för prestanda</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Räckvidd</div>
											<div class="table-2__text">
												<p>Cookies används för att samla in statistiska uppgifter om webbplatsens prestanda samt för att förbättra den. De tillåter oss också att utföra analyser på vår webbplats.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Ytterligare information</div>
											<div class="table-2__text">
												<p>Cookies lagrar data som är anonym som inte är associerad med någon identifierbar eller identifierad fysisk person.</p>
												<p>De kan tas bort när du avslutar din webbläsare. Andra cookies har obestämd giltighet.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Cookies blockeras eller tas bort</p>
								<p>För att förhindra eller ta bort cookies måste du ändra webbläsarens inställningar. Nedan finns länkar som hjälper dig med processen för några av de mest kända webbläsarna.</p>
								<ul class="small">
									<li>Firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Tänk dock på att vissa eller hela webbplatsens funktioner och funktioner kanske inte fungerar som du förväntar dig om detta händer.</p>
								<h3>ONLINE-SPÅRNINGSM <br> EDDELANDE Denna tjänst stöder för närvarande inte spåra signaler. <br>8. Lagring av personuppgifter om dig</h3>
								<p>Företaget vill behålla personuppgifter om dig så länge det är nödvändigt för att uppfylla syftet med behandlingen av personuppgifter, enligt beskrivningen i denna policy eller under längre tidsperioder som tillåts enligt lag eller förordningar, policyer och tillämpliga beställningar.</p>
								<p>Vi delar din information med handelsplattformar från tredje part under en period av 12 månader. Om du samtycker till detta kommer vi att fortsätta att dela dina uppgifter i ytterligare 12 månader.</p>
								<p>Vi granskar regelbundet personuppgifter som vi har sparat för att säkerställa att de inte längre behövs.</p>
								<h3>9. Överföring av personuppgifter till ett tredje land eller till en internationell organisation</h3>
								<p>Dina personuppgifter kan överföras till andra länder (dvs. dina personuppgifter kan överföras till ett tredjeland (dvs. ett annat land än det där du bor) eller till internationella organisationer. Internationella organisationer eller jurisdiktioner. Företaget vidtar alla nödvändiga åtgärder för att skydda personuppgifter som du tillhandahåller och säkerställa att dataanvändarna har möjlighet att hävda sina rättigheter och få tillgång till lagliga resurser som är effektiva.</p>
								<p>Dessa skydd och skyddsåtgärder är tillgängliga för alla som är bosatta inom EES (Europeiska ekonomiska samarbetsområdet).</p>
								<ul class="small">
									<li>Överföring till ett tredjeland eller en internationell organisation som EU-kommissionen har fastställt ger tillräcklig säkerhet för personuppgifter som överförs till det i enlighet med artikel 45.3 i Europaparlamentets och rådets förordning 2016/679 av den 27 april 2016. (”GDPR”)</li>
									<li>Överföringen sker i enlighet med ett rättsligt bindande och rättsligt bindande, verkställbart avtal mellan offentliga organ eller myndigheter enligt artikel 46.2 a.</li>
									<li>Överföringen gjordes i enlighet med gemensamma dataskyddsklausuler som antagits av EU-kommissionen enligt artikel 46.2 (c) i GDPR. De klausuler som antagits av EU-kommissionen kan ses på https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>Företaget kan tillhandahålla information om de säkerhetsåtgärder som det använder för att skydda dina personuppgifter som överförs till tredje part eller internationella organisationer. Skicka ett mejl till följande adress på info@wealthwaydigital.uk</p>
								<h3>10. Säkerhet för personuppgifter</h3>
								<p>Vi har vidtagit lämpliga organisatoriska och tekniska försiktighetsåtgärder för att skydda personuppgifter. Detta inkluderar förebyggande av oavsiktlig eller olaglig förstörelse, förlust eller ändring av personuppgifter.</p>
								<p>Vi kan inte garantera eller garantera att säkerheten för dina personuppgifter kommer att upprätthållas utan fel. Vi kan inte heller ansvara för immateriella, tillfälliga eller följdskador som uppstår till följd av användning eller utlämnande av personuppgifter. Detta inkluderar dock, det är inte begränsat till personuppgifter som lämnas ut på grund av fel i överföringen, obehörig åtkomst av tredje part eller någon annan orsak utanför vår kontroll.</p>
								<p>I händelse av juridiska skyldigheter eller andra skyldigheter som ligger utanför vår kontroll kan vi behöva lämna personuppgifter om dig till tredje part, till exempel offentliga myndigheter. Vi kan inte kontrollera säkerheten för dina personuppgifter av tredje part i dessa situationer.</p>
								<p>Personuppgifter kan inte överföras över webben på ett helt säkert sätt. Företaget kan inte garantera säkerheten för personuppgifter som du överför till oss via Internet.</p>
								<h3>11. Hyperlänkar till webbplatser som tillhör tredje parts webbplatser</h3>
								<p>Länkar till webbplatser och applikationer från tredje part finns på webbplatsen. Dessa applikationer och webbplatser kommer inte under överinseende av företaget. Vi ansvarar inte för insamling eller behandling av personuppgifter av dessa webbplatser eller appar. Denna policy är inte tillämplig på åtgärder som vidtas via sådana webbplatser eller appar.</p>
								<p>När du besöker någon av tredje parts webbplatser eller appar rekommenderar vi att du läser deras sekretesspolicy innan du bestämmer dig för att komma åt eller använda deras appar. Vi föreslår också att du lämnar personuppgifter till dem.</p>
								<h3>12. Ändringar av denna policy</h3>
								<p>Denna policy kan ändras när som helst. Om vi ändrar denna policy kommer vi att meddela dig om ändringarna genom att publicera den uppdaterade policyn på vår webbplats. Dessutom, när vi gör betydande ändringar av denna policy kommer vi att försöka informera dig med hjälp av de metoder som vi anser vara lämpliga och kommer att publicera ett meddelande på vår webbplats. Eventuella ändringar, om inte uttryckligen anges, träder i kraft efter offentliggörandet av den reviderade policyn.</p>
								<h3>13. Dina rättigheter med avseende på dina personuppgifter</h3>
								<p>Du har rätt att begära att vi kontrollerar riktigheten av personuppgifter som samlas in om dig, att rätta till eventuella misstag och att radera alla personuppgifter som inte krävs av oss. Du kan också begränsa omfattningen av typer av behandling av personuppgifter.</p>
								<p>Om du är bosatt i EES, se denna sida:</p>
								<p>Dessa rättigheter är tillgängliga för dig med avseende på den information du lämnar i samband med dina personuppgifter. Du kan begära att utöva de rättigheter du har genom att skriva ett e-postmeddelande till adressen nedan.</p>
								<p>Åtkomsträttigheter</p>
								<p>Företaget kan verifiera riktigheten av personuppgifter som behandlas om dig. Om de är kan du få tillgång till dina personuppgifter.</p>
								<p>Företaget vill tillhandahålla en elektronisk kopia av de personuppgifter som för närvarande behandlas och kan ta ut en rimlig avgift för eventuella ytterligare kopior. Uppgifterna kommer att göras tillgängliga elektroniskt, om du begär det.</p>
								<p>Rätten att få tillgång till personuppgifter får inte strida mot andras rättigheter och friheter. Om begäran skadar andras rättigheter och friheter eller deras rättigheter, kan företaget vägra att följa begäran eller begränsa sin förmåga att uppfylla den.</p>
								<p>Rätt till rättelse</p>
								<p>Bolaget har rätt att rätta felaktiga personuppgifter. Du har rätt att kräva att otillräckliga personuppgifter som rör dig korrigeras, med hänsyn till orsaken till behandlingen.</p>
								<p>Rätt till radering</p>
								<p>Följande skäl är tillämpliga: (a) Personuppgifter behövs inte längre för ändamålet för det ändamål för vilket de samlades in eller behandlades; (b) Du återkallar ditt samtycke och det finns ingen rättslig grund att behandla; (c) Du invänder när som helst, på grund av en anledning som är specifik för din situation, mot att behandlingen av personuppgifter om dig är baserad på legitima intressen som eftersträvas antingen av oss eller av tredje part; (e) Personuppgifter behandlas olagligt eller f) Personuppgifter måste tas bort för att uppfylla företagets lagliga skyldighet.</p>
								<p>Denna rätt är inte tillämplig om behandlingen är nödvändig (a) för att uppfylla en skyldighet enligt lag som krävs för att behandlas enligt EU-lagstiftningen eller medlemsstatens lagstiftning; eller (b), för att skapa, utöva eller försvara lagliga rättigheter.</p>
								<p>Behandlingsbegränsningar</p>
								<p>Om du är orolig för riktigheten i dina personuppgifter kan du be företaget begränsa behandlingen av dina personuppgifter.</p>
								<p>Om du begär att personuppgifter begränsas får personuppgifter endast behållas om du ger ditt samtycke eller för att skapa, utöva eller försvara lagliga rättigheter, eller för att försvara en annan fysisk persons rättigheter, eller om det finns en anledning som är av ett betydande allmänintresse inom Europeiska unionen eller en medlemsstat.</p>
								<p>Rätt till dataportabilitet</p>
								<p>Om processen utförs av ett automatiserat system och baseras på samtycke eller ett avtal om att du är involverad i avtalet, har du laglig rätt och rätt att granska dina personuppgifter som du har lämnat till företaget.</p>
								<p>Du har rätt att begära att dina personuppgifter överförs direkt från företaget till en annan personuppgiftsansvarig, om det är tekniskt möjligt. De rättigheter du har enligt rätten till radering ändras inte på grund av att du utövar din rätt till överförbarhet av uppgifter. Rätten att överföra data påverkar inte någon annans rättigheter eller friheter.</p>
								<p>Rätt att ifrågasätta</p>
								<p>Rätten att motsätta sig all användning av personuppgifter som rör dig som är baserad på berättigade intressen som eftersträvas av företaget eller en tredje part är tillgänglig när som helst. Detta är inte begränsat till profilering enbart baserad på dessa legitima intressen. Om vi kan fastställa tvingande berättigade skäl för behandling av personuppgifter kommer vi inte att kunna fortsätta att göra det såvida du inte kan bevisa att de väger tyngre än dina rättigheter, friheter eller intressen, eller utövande, upprättande eller försvar av lagliga rättigheter.</p>
								<p>När det gäller direktmarknadsföring har du rätt att när som helst motsätta dig behandling av personuppgifter som rör dig.</p>
								<p>Rätt att vägra samtycke</p>
								<p>Du kan när som helst återkalla ditt samtycke till att vi behandlar personuppgifter om dig. Detta kommer inte att ändra lagligheten och lagligheten av någon behandling som var beroende av ditt samtycke före borttagningen.</p>
								<p>Du har rätt att lämna in ett klagomål till den myndighet som övervakar dig.</p>
								<p>Du kan överklaga till en tillsynsmyndighet som inrättats av en medlemsstat för att skydda enskilda personers grundläggande rättigheter i samband med behandling av personuppgifter inom Europeiska unionen.</p>
								<p>Lagstiftningen i Europeiska unionen och medlemsstaterna kan begränsa dina rättigheter i förhållande till personuppgifter som rör dig, enligt vad som beskrivs i detta avsnitt 13.</p>
								<p>Vi kommer att förse dig med den begärda informationen enligt de rättigheter du har i avsnitt 13 i detta avtal inom en månad efter mottagandet av din begäran. Tidsramen kan förlängas till upp till två månader, om det behövs beroende på begäran och mängden förfrågningar. Inom en månad efter att vi fått din förfrågan meddelar vi dig om eventuella förlängningar, liksom orsakerna.</p>
								<p>Så länge det inte strider mot bestämmelserna i 13 § i lagen kommer den information du begär enligt dina rättigheter enligt 13 § att göras tillgänglig kostnadsfritt. Om begäran inte är motiverad eller överdriven, särskilt om de upprepas, kan vi ta ut ett rimligt belopp för att täcka de administrativa kostnaderna för att lämna informationen eller meddela den begärda åtgärden. Vi kanske inte heller agerar.</p>
								<p>Om vi tvivlar på identiteten på den verkliga personen som skickade in din begäran Om vi tvivlar på identiteten på den person som gör begäran, kan företaget be om ytterligare information.</p>
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