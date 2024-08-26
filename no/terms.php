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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Hjem</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plattform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Fordeler</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Vårt team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Kontakt oss</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Registrere</a>
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
								<h1 class="conditions__title h2">Vilkår for bruk</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1. general</h3>
								<p>1.1. Du er invitert til å besøke {{site_name}} («Nettstedet»)</p>
								<p>Vår e-postinfo@ {{site_name}} .com</p>
								<p>1.2. Dette nettstedet tilbyr informasjon om tredjepartsplattformer («tredjepartsplattformer») for handel («tjenestene»)</p>
								<p>1.3. Vilkårene regulerer din («du», «din» eller «bruker») tilgang til nettstedet og tjenestene. Før du får tilgang til tjenestene, må du lese disse vilkårene nøye. Disse vilkårene er en juridisk bindende avtale mellom deg og eieren av nettstedet deg, og eieren av nettstedet. Du må godta vilkårene i alle henseender hvis du ikke ønsker å bruke nettstedet. Vilkårene kan endres fra tid til annen.</p>
								<p>Disse vilkårene inneholder vår personvernpolicy. Du godtar disse vilkårene og godtar personvernreglene våre. (Du kan lese vår personvernpolicy her).</p>
								<h3>2. Kvalifisering</h3>
								<p>2.1. Hvis du holder deg til disse vilkårene, vil nettstedet være tilgjengelig for deg.</p>
								<p>2.1.1. Minimumsalder 18 år</p>
								<p>2.1.2. Du kan signere disse betingelsene og vilkårene.</p>
								<p>2.1.3. Lovene i landet der du bor eller bruker tjenestene, hindrer ikke på noen måte brukere i å bruke nettstedet eller noen av dets tjenester.</p>
								<p>2.2. Vi gir ingen garantier, representasjoner eller garantier om lovligheten eller bruken av tjenestene eller nettstedet for noen person. Vi er ikke ansvarlige for ulovlig bruk av nettstedet eller tjenestene til noen bruker.</p>
								<h3>3. Områder med begrenset tilgang</h3>
								<p>3.1. Uten å begrense omfanget av informasjonen som gis, forbeholder vi oss retten til å begrense tilgangen til tjenestene og/eller nettstedet (eller deler av dem) til: (i) brukere som bor i begrensede områder («begrensede territorier») og (ii) brukere vi mener kan utgjøre en regulatorisk, juridisk eller omdømmerisiko.</p>
								<p>3.2. Vi kan også pålegge ytterligere vilkår før vi godtar brukere som er statsborgere i eller i visse land. Hvis brukere reiser til begrensede områder, kan nettstedet eller tjenestene være midlertidig utilgjengelige eller blokkert.</p>
								<h3>4. Forbudte aktiviteter</h3>
								<p>4.1. Du godtar å bruke nettstedet og tjenestene respektfullt og ikke å:</p>
								<p>4.1.1. Du kan koble til nettstedet vårt og bruke det til å laste ned, laste opp, dele og publisere, samt til å overføre eller sende (a) informasjon eller annet materiale som bryter immaterielle rettigheter til personvern, eiendomsrettigheter og andre rettigheter; eller (b) informasjon som ikke er tillatt å publiseres eller distribueres på grunn av en trussel eller skade forårsaket av fornærmelse eller ærekrenkelse, baktalelse eller rasisme, eller (c) informasjon som inkluderer virus eller annen programvare Kan skade våre datasystemer eller tredjeparts datasystemer, eller på en måte som blokkerer eller begrenser andre brukere fra Tilgang til nettstedet. (d) All informasjon eller annet materiale som er i strid med noen lov. (e) Informasjon eller materiale som inkluderer annonser eller annet innhold som ikke er underlagt vårt forutgående skriftlige samtykke.</p>
								<p>4.1.2. Endre eller slette eventuelle attribusjoner, juridiske merknader, etiketter eller betegnelser som er proprietære for dette nettstedet.</p>
								<p>4.1.3. Tilgangen til tjenestene kan oppnås gjennom ethvert grensesnitt som ikke er nettstedet.</p>
								<p>4.1.4. Ikke forstyrre bruken av nettstedet eller tjenestene som tilbys av andre brukere</p>
								<p>4.1.5. Bots og andre automatiserte teknikker brukes for å få tilgang til nettstedet og/eller dets tjenester.</p>
								<p>4.1.6. Du har ikke lov til å laste opp eller overføre, eller til og med forsøke å laste opp, innhold som er aktivt eller passivt involvert i datainnsamling eller overføringsmekanismer, for eksempel nettfeil, informasjonskapsler eller spionprogrammer, uten vår uttrykkelige tillatelse.</p>
								<p>4.1.7. Delta i «innramming», speiling eller i noen annen metode for å etterligne utseendet eller funksjonen til tjenestene.</p>
								<p>4.1.8. Du kan bryte gjeldende lover eller forskrifter, og oppmuntre til eller oppmuntre til ulovlig aktivitet, for eksempel brudd på varemerker, brudd på opphavsrett, ærekrenkelse personvern, hacking av identiteter, eller distribusjon av falsk programvare;</p>
								<p>4.1.9. Du kan endre eller endre kildekoden til dette nettstedet. Du kan også laste opp programmer eller programvare som kan forårsake skade på nettstedet eller en annen person.</p>
								<p>4.1.10. Du har ikke lov til å demontere, dekompilere eller omvendt konstruere teknologi eller programvare som er på nettstedet eller brukes til å levere tjenestene.</p>
								<p>4.2. Vilkårene i denne avtalen er i tillegg til eventuelle rettigheter vi måtte ha. Hvis vi mener at din bruk av nettstedet ikke er i samsvar med vilkårene i disse vilkårene, eller andre gjeldende lover, kan vi være i stand til å overvåke din bruk av nettstedet eller tjenestene eller blokkere tilgang til det, eller avsløre atferdsmønstrene dine på nettstedet til andre parter eller iverksette andre passende tiltak for å beskytte tredjeparts rettigheter og eiendom.</p>
								<h3>5. Immaterielle rettigheter</h3>
								<p>5.1. Nettstedets innhold, inkludert det som er videorelatert, for eksempel tekstbilder, logoer, lyder, designvaremerker og annet materiale, er beskyttet av våre og tredjeparts immaterielle rettigheter.</p>
								<p>5.2. Alle rettigheter, titler og alle rettigheter og interesser knyttet til tjenestene og nettstedet er våre. Bortsett fra rettighetene til å bruke tjenestene og nettstedet i samsvar med disse vilkårene, gir brukerens bruk av tjenestene og nettstedet ingen immaterielle rettigheter til dem.</p>
								<p>5.3. Nettstedet og/eller tjenestene kan kun brukes av brukeren for personlig, ikke-kommersiell bruk.</p>
								<p>5.4. Du vil ikke tillate noen å endre eller omvendt konstruere, dekompilere eller kopiere tjenestene eller nettstedet, eller lage avledede verk ved hjelp av underlisensen eller leien.</p>
								<h3>6. Ansvarsbegrensning</h3>
								<p>6.1. Nettstedet og tjenestene er ditt ansvar. Eventuelle garantier, enten det er underforstått eller uttrykkelig angitt, angående nettstedet og tjenestene eller din bruk av dem, inkludert underforståtte garantier for kvalitet og salgbarhet, samt formålet det ble designet for som ikke-krenkelse og brukervennlighet, autoritet når det gjelder nøyaktighet, fullstendighet, aktualitet og rask levering er ikke gitt av oss. Innholdet og funksjonene som er tilgjengelige eller tilgjengelige via nettstedet tilbys «som det er», «som tilgjengelig» og «med enhver konsekvens.»</p>
								<p>6.2. Vi er ikke ansvarlige for eventuelle feil, utelatelser eller unøyaktigheter i informasjonen på nettstedet. Vi tar ikke ansvar for eventuelle forstyrrelser eller avbrudd i overføringer til eller gjennom tjenestene.</p>
								<p>6.3. Vi vil holde deg skadesløs for ethvert tap, direkte eller indirekte pådratt deg eller tredjepart gjennom nettstedet eller tjenestene. Du vil være ansvarlig for eventuelle beslutninger ved å stole på informasjon på nettstedet og/eller i tjenestene.</p>
								<p>6.4. Vi er ikke ansvarlige for tap eller skade som direkte, indirekte eller relatert til deg eller noen annen tredjeperson. Dette inkluderer tap av inntekt eller data som skyldes din bruk av nettstedet og/eller tjenestene. Denne ansvarsbegrensningen er tillatt i henhold til loven i gjeldende region.</p>
								<p>6.5. Hvis det er et teknisk problem med en Internett- eller telefonlinje eller datamaskinleverandør eller systemserver, eller maskinvare, påtar vi oss ikke noe ansvar. Vi er ikke ansvarlige for bruk av Internett.</p>
								<h3>7. Innhold og tjenester fra tredjeparter</h3>
								<p>7.1. Du kan se innhold fra tredjeparter og tjenester når du bruker tjenestene. Dette kan omfatte annonser eller anmeldelser av tredjepartsplattformer.</p>
								<p>7.2. Vi tar ikke ansvar for informasjonen eller produktene som det henvises til. De er kanskje ikke aktuelle eller oppdaterte til enhver tid.</p>
								<p>7.3. Vi foreslår at du bekrefter nøyaktigheten av all informasjon før du tar noen beslutning. Du er ansvarlig for alle beslutninger og handlinger fra informasjonen.</p>
								<h3>8. Koblinger</h3>
								<p>8.1. Nettstedet inneholder annonser så vel som innhold. Materialet gjøres tilgjengelig via tredjeparts nettsteder («lenker»). Vi anbefaler deg å være oppmerksom på dette før du laster ned, stoler på eller får tilgang til informasjon innhentet fra disse nettstedene, programvaren eller annet materiale eller fullfører kjøp eller andre transaksjoner vi vil gi deg råd om. Disse koblingene er kun gitt for brukernes bekvemmelighet. Vi er ikke ansvarlige for skader eller tap forårsaket av bruk eller avhengighet av informasjon, produkter eller tjenester som er gjort tilgjengelig via andre nettsteder eller programmer.</p>
								<p>8.2. Inkluderingen av hyperkoblinger på dette nettstedet innebærer ikke godkjenning, autorisasjon eller tilknytning eller noen annen form for godkjenning fra oss i forbindelse med nettstedene deres programvare eller administratorer.</p>
								<p>8.3. Vi har ikke gjennomgått alle hyperkoblingene og kan ikke holdes ansvarlig for programvaren eller nettstedet som det henvises til. Før du bestemmer deg for å bruke, stole på eller kjøpe noe fra disse nettstedene eller applikasjonene, advarer vi deg. På ingen måte vil du bli holdt ansvarlig for skade eller tap forårsaket av bruk eller avhengighet av produkter, informasjon eller innhold tilgjengelig via andre nettsteder.</p>
								<p>8.4. Det er ditt ansvar og plikt å gjennomgå vilkårene og retningslinjene for nettsteder som drives av tredjeparter. Vi anbefaler på det sterkeste at du leser dem før du tar kontakt med tredjeparts nettsteder.</p>
								<h3>9. Diverse</h3>
								<p>9.1. Vi har rett til å endre, opphøre eller endre tjenestene våre når som helst. Endringene vil ikke skade deg, og du vil ikke kunne hevde noen krav mot oss.</p>
								<p>9.2. Vilkårene kan endres når som helst. Vi kan endre vilkårene når som helst. Vi vil informere deg ved å publisere den nyeste versjonen, og deretter revidere datoen øverst. Eventuelle endringer vil være effektive innen et par virkedager. Du anses å godta eventuelle endringer i vilkårene på nettstedet hvis du fortsetter å bruke det etter at de er utgitt.</p>
								<p>9.3. Brukeren erkjenner og godtar at all informasjon som overføres via eller gjennom nettstedet ikke skaper noen form for forhold som ikke er eksplisitt angitt i disse vilkårene.</p>
								<p>9.4. Disse vilkårene og personvernreglene, samt personvernreglene, som endres fra tid til annen, er de eneste gyldige avtalene mellom oss og brukeren, og ethvert annet løfte, erklæring eller avtale, enten muntlig eller skriftlig, som ikke er inkludert i personvernreglene, er juridisk bindende for partene.</p>
								<p>9.5. Manglende evne til å utøve noen rett eller makt som er gitt i anses å være et fraskrivelse av retten eller makten. Enhver eller bare en del av en øvelse skal være et element i ytterligere eller videre utøvelse av samme eller andre rettigheter eller rettsmidler.</p>
								<p>9.6. Disse vilkårene vil bli kansellert i tilfelle at den aktuelle bestemmelsen blir erklært ugyldig av en domstol med kompetent jurisdiksjon. Resten av vilkårene vil bli tolket som i tilfelle ekskluderingen ble implementert, og vil bli brukt i henhold til deres vilkår. Vilkårene vil imidlertid bli tolket i samsvar med intensjonene og betydningen av ekskluderingsklausulene i henhold til domstolenes kjennelse.</p>
								<p>9.7. Disse vilkårene tillater tredjepartspartnere å overføre eller tildele alle rettigheter og forpliktelser. Tredjepartsoperatører er i stand til å administrere nettstedet og alle dets tjenester, uten å begrense det forrige. Disse vilkårene tillater deg ikke å tildele eller overføre rettighetene eller forpliktelsene du har.</p>
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