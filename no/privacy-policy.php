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
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrere</a>
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
								<h1 class="policy__title h2">Personvernerklæring</h1>
								<p class="policy__date">Sist oppdatert: 30.09.22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>Vi (også kjent som «Vi», «Oss» eller «Vår») er forpliktet til å beskytte dine personlige data så vel som personvernet ditt.</p>
								<p>Denne personvernerklæringen ble utformet for å informere deg om måtene vi samler inn og lagrer informasjonen du oppgir via nettstedet {{site_name}} («nettstedet»).</p>
								<p>Disse prinsippene vil bli forsvart:</p>
								<ul>
									<li>For å være gjennomsiktig når det gjelder behandling og innsamling av personlig informasjon om deg:</li>
								</ul>
								<p>Vi ønsker at du skal være i stand til å ta informerte valg angående bruk og behandling av personopplysninger. Dette er grunnen til at vi har opprettet nettstedet vårt. For å oppnå dette bruker vi forskjellige metoder og prosedyrer for å gi deg relevant informasjon om bruken av personopplysninger.</p>
								<p>Hvis vi mener at du trenger spesifikke detaljer, vil vi gi deg informasjon til riktig dato og klokkeslett.</p>
								<p>Vi svarer gjerne på eventuelle spørsmål du måtte ha, og vil gi eventuelle avklaringer du trenger med hensyn til eventuelle begrensninger pålagt ved lov. Vi kan nås via e-post på adressen nedenfor: info@ {{site_name}} .com</p>
								<ul>
									<li>Personopplysninger vil kun bli brukt til de formålene som er spesifisert i policyen.</li>
								</ul>
								<p>Personopplysninger kan behandles av oss for en rekke formål, for eksempel for å tilby nettstedet til deg og for å koble deg til tredjeparts handelsplattformer («tjenestene») og for å forbedre nettstedet, beskytte våre rettigheter, interesser, for å lette vedlikehold og levering av tjenestene, for å oppfylle eventuelle regulatoriske eller juridiske forpliktelser, og for å utføre administrative og forretningsmessige aktiviteter for å lette levering og bruk av tjenestene.</p>
								<p>Personopplysninger behandles også av oss for å bedre forstå dine preferanser og behov.</p>
								<ul>
									<li>For å gjøre bruk av viktige verktøy for å beskytte dine rettigheter med hensyn til personopplysninger:</li>
								</ul>
								<p>For å tillate utøvelse av dine rettigheter har vi betydelige ressurser. Kontakt oss når som helst for å be om personopplysninger angående dine personlige data. Vi vil endre eller slette den, slutte å bruke den til spesifikke formål eller til generelle formål. Overføre informasjonen til deg eller til en utenforstående part. Vi vil være i stand til å imøtekomme dine forespørsler.</p>
								<ul>
									<li>Sikre dine personlige data:</li>
								</ul>
								<p>Selv om vi ikke kan garantere fullstendig sikkerhet for dine personopplysninger, kan vi garantere at vi vil fortsette å bruke en rekke metoder og teknikker for å sikre at personopplysningene dine er beskyttet.</p>
								<p>Vår personvern- og sikkerhetspolicy er komplett.</p>
								<h3>1. Omfanget?</h3>
								<p>Denne policyen beskriver hvilken type personopplysninger selskapet samler inn om fysiske personer og hvordan det behandler det, deler det med tredjeparter, sikrer prosesser, og så videre.</p>
								<p>Denne policyen handler om informasjon som er relatert til en identifisert eller identifiserbar fysisk person. En fysisk person som er identifiserbar kan defineres som noen som er direkte identifiserbar eller en kombinasjon av tilleggsinformasjon vi har eller er i stand til å få tilgang til.</p>
								<p>Retningslinjene definerer «behandling» som en prosess som krever bruk eller innsamling av personopplysninger. Det inkluderer administrasjon, strukturering og lagring av personopplysninger.</p>
								<p>Tjenestene våre er ment å brukes av generelle målgrupper og er ikke designet for bruk av noen under 18 år. Vi søker ikke bevisst eller samler informasjon fra noen person yngre enn 18 år gammel Vi tillater ikke bevisst slike personer å bruke tjenestene våre. Vi vil slette all informasjon vi oppdager om barn så raskt vi kan hvis vi lærer om det.</p>
								<h3>2. Hvilke personopplysninger har vi om deg?</h3>
								<p>Hvis du får tilgang til tjenesten og kanalene, eller besøker nettstedet vårt, samler vi inn personopplysninger. Vi kan be om dine personopplysninger i visse tilfeller. I andre tilfeller samler vi inn personopplysningene dine ved å analysere og analysere bruken av våre tjenester eller våre tjenestekanaler eller ved å motta informasjonen din fra våre tredjepartspartnere.</p>
								<h3>3. Det er ikke noe krav om å avsløre personlig informasjon til selskapet og konsekvensene.</h3>
								<p>Men du er ikke forpliktet til å gi oss noen personlige data. Under visse omstendigheter kan det imidlertid hende at du ikke trenger å gi oss noen personopplysninger. Dette kan hindre oss i å tilby tjenestene eller hindre brukere i å få tilgang til nettstedet.</p>
								<h3>4. Hva slags personopplysninger er vi i stand til å samle inn? Når du besøker nettstedet vårt, samler vi inn følgende personopplysninger:</h3>
								<p>Dette inkluderer informasjon om aktivitetsloggen din på nettet, data om trafikken din (inkludert IP-adresse datoen for tilgang, tidspunktet for tilgang og datoen for tilgang) språket du brukte, programvarekrasjlogger, typen nettleser som brukes, samt informasjon om enheten du brukte. Informasjonen du samler inn er ikke privat informasjon og kan ikke brukes til å identifisere deg.</p>
								<p>Personopplysninger vi mottar fra deg: Alle personopplysninger du gir oss etter eget valg når du kobler deg til en online handelsplattform fra en tredjepart gjennom oss.</p>
								<p>Personlig informasjon du oppgir spesifikt til tredjepartsplattformer for å lette handel: Denne informasjonen inneholder ditt fullstendige navn, adresse, telefonnummer og e-postadresse.</p>
								<h3>5. Det juridiske grunnlaget og årsakene til behandlingen av personopplysninger</h3>
								<p>Dine personopplysninger behandles av selskapet for formålene beskrevet i denne delen, og i samsvar med det juridiske grunnlaget som gjelder for det.</p>
								<p>Uten rettslig grunnlag kan selskapet ikke bruke personopplysninger om deg. De juridiske grunnene som selskapet kan bruke til å behandle personopplysninger om deg:</p>
								<ul class="small">
									<li>Du har gitt ditt samtykke til behandling av dine personopplysninger av en eller flere grunner. Dette er tilfellet der du sender inn personlig informasjon via nettstedet for at vi kan overføre dem til en tredjeparts handelsplattform.</li>
									<li>Selskapet eller en tredjepart kan kreve behandling for å møte deres legitime interesse. For eksempel er det nødvendig for å forbedre tjenestene våre eller for å forsvare juridiske krav.</li>
									<li>Behandlingen må oppfylle en lovplikt.</li>
								</ul>
								<p>Kontakt oss via e-post for mer informasjon om behandlingen som er nødvendig for å ivareta legitime interesser.</p>
								<p>Nedenfor er en liste over grunner og juridiske grunner til at vi kan bruke informasjonen du gir oss. Personopplysninger.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Omfang</div>
										<div class="table-1__header-column">Rettslig grunnlag</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>For å gi din personlige informasjon til tredjeparter på din forespørsel om å få tilgang til digital handel</p>
												<p>Hvis du ber om det, kan vi be om personopplysninger fra deg for å videresende dem til tredjeparts selskaper.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Du har gitt ditt samtykke til behandling av dine personopplysninger av en eller flere grunner.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>For å svare på dine forespørsler, spørsmål eller bekymringer er personopplysninger nødvendige for å hjelpe deg med å svare på spørsmål du måtte ha angående tjenestene.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>De legitime interessene til selskapet eller interessene til en tredjepart må behandles.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>For å oppfylle enhver juridisk forpliktelse eller administrative, rettslige eller juridiske eller rettslige personopplysninger behandles for å oppfylle de juridiske kravene.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>For å sikre overholdelse av juridiske forpliktelser, er behandling nødvendig.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>For å forbedre tjenestene våre kan personopplysninger brukes av oss til å forbedre tjenestene våre. Dette inkluderer blant annet eventuelle krasj- eller feilrapporter som vi samler inn i forbindelse med tjenestene.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>De legitime interessene til selskapet eller interessene til en tredjepart må behandles.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>For å stoppe svindel og misbruk av tjenestene våre</p>
											</div>
										</div>
										<div class="table-1__column">
											De legitime interessene til selskapet eller interessene til en tredjepart må behandles.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>For å utføre og administrere handlinger som er i tråd med kravene til våre tjenester, inkluderer slike aktiviteter back-office-funksjoner, forretningsutviklingsaktiviteter, strategisk beslutningstaking, tilsynsmekanismer osv.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>De legitime interessene til selskapet eller interessene til en tredjepart må behandles.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>For å utføre analyser, for eksempel statistisk analyse for å ta beslutninger om forskjellige spørsmål, bruker vi forskjellige analyseteknikker (inkludert de som er statistiske).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>De legitime interessene til selskapet eller interessene til en tredjepart må behandles.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>For å beskytte våre eiendeler, rettigheter og interesser så vel som tredjeparts, har vi utviklet HTML0 for å etablere og forsvare juridiske krav Personopplysninger kan behandles av oss for å beskytte våre rettigheter, interesser og eiendeler, eller tredjeparts, i samsvar med gjeldende lover, forskrifter eller avtaler og eventuelle betingelser, vilkår eller retningslinjer.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>De legitime interessene til selskapet eller interessene til en tredjepart må behandles.</p>
										</div>
									</div>
								</div>

								<h3>6. Overføring av personopplysninger til tredjepart</h3>
								<p>Selskapet kan også gi personopplysninger til tredjeparts selskaper som tilbyr tjenester til oss som hosting- og lagringsleverandørers IP-adresseinformasjon, samt analyse av brukeropplevelser.</p>
								<p>Du kan også be oss om å gi spesifikke personopplysninger om deg til tredjeparts handelsplattformer. Vi vil gi dine personlige data du gir oss i disse tilfellene til handelsplattformer fra tredjeparter. Bruken av dine personlige data er underlagt deres personvernregler. Dine personlige data kan deles med flere handelsplattformer.</p>
								<p>Selskapet kan være i stand til å dele personopplysninger med relaterte enheter eller forretningspartnere. Dette kan gi selskapet ressursene som trengs for å la det forbedre og forbedre produktene og tjenestene det gir sine kunder.</p>
								<p>I tilfelle det er behov for å ivareta rettighetene til tredjeparter eller eiendeler, har selskapet lov til å utlevere personopplysninger med regulatoriske, lokale eller andre offisielle myndigheter.</p>
								<p>Vi kan også i tillegg dele personopplysninger om deg med potensielle investorer eller kjøpere, eller med långivere til selskapet eller andre selskaper i konsernet i tilfelle den samme transaksjonen finner sted (inkludert overføring eller salg av eiendeler som tilhører selskapet eller et annet selskap i konsernet) eller som en del av fusjon eller restrukturering, konsolidering eller konkurs av selskapet eller annen virksomhet i konsernet.</p>
								<h3>7. Informasjonskapsler og tjenester fra tredjeparter</h3>
								<p>Tredjepartstjenester, for eksempel de som leverer annonser på nettstedet vårt eller analyseselskaper, kan brukes. Disse selskapene kan også bruke informasjonskapsler eller annen teknologi.</p>
								<p>Informasjonskapsler er små tekstfiler som plasseres på enheten din hver gang du besøker eller besøker nettstedet. Informasjonskapsler brukes til å samle informasjon om dine preferanser og surfevaner for å forbedre brukeropplevelsen din, holde oversikt over dine preferanser og tilpasse produktene og tjenestene du kan glede deg over. Informasjonskapsler brukes også til statistikk og analyse.</p>
								<p>Enkelte informasjonskapsler vi kan bruke er øktinformasjonskapsler. De lastes midlertidig ned til enheten din og vil vare i en kort periode før du lukker nettleseren. Andre informasjonskapsler er vedvarende. Vedvarende informasjonskapsler forblir på enheten din i en periode etter at du lukker nettleseren. De brukes til å hjelpe nettstedet med å identifisere deg som en tilbakevendende bruker og gjøre det mulig for brukere å komme tilbake til nettstedet.</p>
								<h3>Typer informasjonskapsler:</h3>
								<p>De kan brukes av oss basert på deres formål:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Informasjonskapseltypen</div>
											<div class="table-2__text">
												<p>Informasjonskapsler er absolutt nødvendige</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Omfang</div>
											<div class="table-2__text">
												<p>Disse informasjonskapslene er nødvendige for at du skal kunne få tilgang til funksjonene du har bedt om og for å navigere på nettstedet vårt. Informasjonskapsler brukes til å gi informasjonen, produktene og tjenestene du har bedt oss om.</p>
												<p>De kreves for at enheten din skal laste ned og streame data. Dette lar deg navigere rundt på nettstedet, bruke funksjonene, og deretter gå tilbake til sider du tidligere har vært på.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Tilleggsinformasjon</div>
											<div class="table-2__text">
												<p>Informasjonskapsler samler inn personopplysninger, for eksempel brukernavnet ditt, samt siste påloggingsdato for å bekrefte at du er logget inn på nettstedet.</p>
												<p>De slettes når du lukker nettleseren din (sesjonskapsler).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Informasjonskapseltypen</div>
											<div class="table-2__text">
												<p>Funksjonalitetskapsler</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Omfang</div>
											<div class="table-2__text">
												<p>Informasjonskapsler lar oss gjenkjenne deg hver gang du besøker nettstedet vårt og også lagre dine preferanser og preferanser.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Tilleggsinformasjon</div>
											<div class="table-2__text">
												<p>De varer til utløpsdatoen og lagres selv etter at nettleseren har stengt.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Informasjonskapseltypen</div>
											<div class="table-2__text">
												<p>Informasjonskapsler for ytelse</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Omfang</div>
											<div class="table-2__text">
												<p>Informasjonskapsler brukes til å samle statistiske data om nettstedets ytelse, samt for å forbedre den. De tillater oss også å utføre analyser på nettstedet vårt.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Tilleggsinformasjon</div>
											<div class="table-2__text">
												<p>Informasjonskapsler lagrer anonyme data som ikke er knyttet til noen identifiserbar eller identifisert fysisk person.</p>
												<p>De kan fjernes når du avslutter nettleseren din. Andre informasjonskapsler har ubestemt gyldighet.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Informasjonskapsler blokkeres eller fjernes</p>
								<p>For å forhindre eller fjerne informasjonskapsler, må du endre nettleserens innstillinger. Nedenfor er lenker for å hjelpe deg med prosessen for noen av de mest kjente nettleserne.</p>
								<ul class="small">
									<li>Firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Vær imidlertid oppmerksom på at visse eller hele nettstedets funksjoner og funksjoner kanskje ikke fungerer på den måten du forventer hvis dette skjer.</p>
								<h3>VARSEL OM SPORING PÅ <br> NETTET Denne tjenesten støtter foreløpig ikke do-not-track-signaler. <br>8. Oppbevaring av personopplysninger om deg</h3>
								<p>Selskapet ønsker å beholde personopplysninger om deg så lenge det er nødvendig for å oppfylle formålet med behandling av personopplysninger, som beskrevet i denne policyen eller i lengre perioder som tillatt i henhold til lov eller forskrifter, retningslinjer og gjeldende ordrer.</p>
								<p>Vi deler informasjonen din med tredjeparts handelsplattformer i en periode på 12 måneder. Hvis du samtykker i dette, vil vi fortsette å dele dataene dine i ytterligere 12 måneder.</p>
								<p>Vi gjennomgår regelmessig personopplysninger som vi har oppbevart for å sikre at de ikke lenger er nødvendige.</p>
								<h3>9. Overføring av personopplysninger til et tredjepartsland eller til en internasjonal organisasjon</h3>
								<p>Dine personopplysninger kan overføres til andre land (dvs. dine personopplysninger kan overføres til et tredjeland (dvs. et annet land enn det du bor i) eller til internasjonale organisasjoner. Internasjonale organisasjoner eller jurisdiksjoner. Selskapet tar alle nødvendige skritt for å beskytte personopplysningene du oppgir og sikre at databrukerne har muligheten til å hevde sine rettigheter og få tilgang til juridiske ressurser som er effektive.</p>
								<p>Disse beskyttelsene og sikkerhetstiltakene er tilgjengelige for alle som bor i EØS (EØS).</p>
								<ul class="small">
									<li>Overføring til et tredjeland eller en internasjonal organisasjon som EU-kommisjonen har fastslått gir tilstrekkelig sikkerhet for personopplysninger som overføres til det i samsvar med artikkel 45 nr. 3 i Europaparlaments- og rådsforordning 2016/679 av 27. april 2016. («GDPR»)</li>
									<li>Overføringen skjer i henhold til en juridisk bindende og juridisk bindende, håndhevbar avtale mellom offentlige enheter eller myndigheter i artikkel 46 nr. 2 bokstav a).</li>
									<li>Overføringen ble gjort i samsvar med felles databeskyttelsesklausuler som ble vedtatt av EU-kommisjonen i henhold til artikkel 46 (2) (c) i GDPR. Klausulene vedtatt av EU-kommisjonen kan sees på https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>Selskapet kan gi informasjon om sikkerhetstiltakene det bruker for å beskytte dine personopplysninger som overføres til tredjepartsland eller internasjonale organisasjoner. Send en e-post til følgende adresse på info@wealthwaydigital.uk</p>
								<h3>10. Sikkerhet av personopplysninger</h3>
								<p>Vi har tatt passende organisatoriske og tekniske forholdsregler for å beskytte personopplysninger. Dette inkluderer forebygging av utilsiktet eller ulovlig ødeleggelse, tap eller endring av personopplysninger.</p>
								<p>Vi kan ikke garantere eller garantere at sikkerheten til dine personopplysninger opprettholdes uten feil. Vi kan heller ikke være ansvarlige for immaterielle, tilfeldige eller resulterende skader som oppstår som følge av bruk eller utlevering av personopplysninger. Dette inkluderer imidlertid, det er ikke begrenset til personopplysninger som blir avslørt på grunn av feil i overføringen, uautorisert tilgang fra en tredjepart eller andre årsaker utenfor vår kontroll.</p>
								<p>I tilfelle juridiske forpliktelser eller andre forpliktelser som ligger utenfor vår kontroll, kan vi bli pålagt å oppgi personopplysninger om deg til tredjeparter, for eksempel offentlige myndigheter. Vi kan ikke kontrollere sikkerheten som gis til dine personopplysninger av tredjeparter i disse situasjonene.</p>
								<p>Personopplysninger kan ikke overføres over nettet på en helt sikker måte. Selskapet kan ikke sikre sikkerheten til personopplysninger du overfører til oss via Internett.</p>
								<h3>11. Hyperlenker til nettsteder som tilhører tredjeparts nettsteder</h3>
								<p>Lenker til tredjeparts nettsteder og applikasjoner er gitt på nettstedet. Disse applikasjonene og nettstedene kommer ikke under tilsyn av selskapet. Vi er ikke ansvarlige for innsamling eller behandling av personopplysninger av disse nettstedene eller appene. Denne policyen gjelder ikke for handlinger utført gjennom slike nettsteder eller apper.</p>
								<p>Når du går til noen av tredjepartsnettstedene eller appene, anbefaler vi at du leser deres personvernregler før du bestemmer deg for å få tilgang til eller bruke appene deres. Vi foreslår også at du oppgir personopplysninger til dem.</p>
								<h3>12. Endringer i denne policyen</h3>
								<p>Denne policyen kan endres når som helst. Hvis vi endrer denne policyen, vil vi varsle deg om endringene ved å legge ut den oppdaterte policyen på nettstedet vårt. I tillegg, når vi gjør betydelige endringer i denne policyen, vil vi forsøke å informere deg ved hjelp av metodene vi mener er passende, og vil publisere en kunngjøring på nettstedet vårt. Eventuelle endringer, med mindre det er eksplisitt spesifisert, trer i kraft etter publiseringen av den reviderte policyen.</p>
								<h3>13. Dine rettigheter med hensyn til din personlige informasjon</h3>
								<p>Du har rett til å be oss om å verifisere nøyaktigheten av personopplysninger som samles inn om deg, rette opp eventuelle feil og slette alle personopplysninger som ikke kreves av oss. Du kan også begrense omfanget av typer behandling av personopplysninger.</p>
								<p>Hvis du er bosatt i EØS-området, vennligst se denne siden:</p>
								<p>Disse rettighetene er tilgjengelige for deg med hensyn til informasjonen du oppgir i forbindelse med dine personopplysninger. Du kan be om å utøve rettighetene du har ved å skrive en e-post til adressen nedenfor.</p>
								<p>Tilgangsrettigheter</p>
								<p>Selskapet er i stand til å verifisere nøyaktigheten av personopplysninger som behandles om deg. Hvis de er, kan du få tilgang til dine personlige data.</p>
								<p>Selskapet ønsker å levere en elektronisk kopi av personopplysningene som behandles for øyeblikket, og kan kreve et rimelig gebyr for eventuelle tilleggskopier. Dataene vil bli gjort tilgjengelig elektronisk, hvis du ber om det.</p>
								<p>Retten til tilgang til personopplysninger må ikke være i strid med andres rettigheter og friheter. Hvis forespørselen er skadelig for andres rettigheter og friheter eller deres rettigheter, kan selskapet nekte å etterkomme forespørselen eller begrense sin evne til å oppfylle den.</p>
								<p>Rett til utbedring</p>
								<p>Selskapet har rett til å rette opp unøyaktige personopplysninger. Du har rett til å kreve at utilstrekkelige personopplysninger om deg blir rettet, med tanke på årsaken til behandlingen.</p>
								<p>Rett til sletting</p>
								<p>Følgende grunner gjelder: (a) Personopplysninger er ikke lenger nødvendige for formålet de ble samlet inn eller behandlet for; (b) Du trekker tilbake samtykke og det er ikke noe juridisk grunnlag for å behandle; (c) Du motsetter deg når som helst, på grunn av en grunn som er spesifikk for din situasjon, at behandlingen av personopplysninger om deg selv er basert på legitime interesser som forfølges av oss eller av tredjepart; (e) Personopplysninger behandles ulovlig eller f) Personopplysninger må fjernes for å oppfylle selskapets lovlige forpliktelse.</p>
								<p>Denne retten gjelder ikke hvis behandlingen er nødvendig (a) for å oppfylle en forpliktelse pålagt ved lov som er pålagt å behandles i henhold til EU-lovgivningen eller medlemsstatens lovgivning; eller (b), for å skape, utøve eller forsvare juridiske rettigheter.</p>
								<p>Behandlingsbegrensninger</p>
								<p>Hvis du er bekymret for nøyaktigheten av personopplysningene dine, kan du be selskapet begrense behandlingen av personopplysningene dine.</p>
								<p>Hvis du ber om at personopplysninger begrenses, kan personopplysninger bare oppbevares hvis du gir samtykke eller for å skape, utøve eller forsvare juridiske rettigheter, eller for å forsvare rettighetene til en annen fysisk person, eller i tilfelle av en grunn som er av en betydelig offentlig interesse i EU eller et medlemsland.</p>
								<p>Rett til dataportabilitet</p>
								<p>Hvis prosessen utføres av et automatisert system og er basert på samtykke eller en kontrakt om at du er involvert i kontrakten, har du juridisk rett og rett til å gjennomgå dine personopplysninger du har gitt til selskapet.</p>
								<p>Du har rett til å be om at dine personopplysninger overføres direkte fra selskapet til en annen behandlingsansvarlig, hvis det er teknisk mulig. Rettighetene du har i henhold til retten til sletting endres ikke på grunn av utøvelsen av din rett til overføring av data. Retten til å overføre data forstyrrer ikke andres rettigheter eller friheter.</p>
								<p>Rett til å utfordre</p>
								<p>Retten til å motsette seg enhver bruk av personopplysninger om deg som er basert på legitime interesser forfulgt av selskapet eller en tredjepart, er tilgjengelig når som helst. Dette er ikke begrenset til profilering utelukkende basert på disse legitime interessene. Hvis vi er i stand til å etablere overbevisende legitime grunner for behandling av personopplysninger, vil vi ikke kunne fortsette å gjøre det med mindre du kan bevise at de oppveier dine rettigheter, friheter eller interesser, eller utøvelse, etablering eller forsvar av juridiske rettigheter.</p>
								<p>Når det gjelder direkte markedsføring, har du rett til når som helst å motsette deg behandling av personopplysninger om deg.</p>
								<p>Rett til å nekte samtykke</p>
								<p>Du kan når som helst trekke tilbake samtykket til at vi behandler personopplysninger om deg. Dette vil ikke endre lovligheten og lovligheten av behandling som var avhengig av ditt samtykke før fjerningen.</p>
								<p>Du har rett til å sende inn en klage til myndigheten som fører tilsyn med deg.</p>
								<p>Du kan klage til en tilsynsmyndighet opprettet av en medlemsstat for å ivareta enkeltpersoners grunnleggende rettigheter i forbindelse med behandling av personopplysninger i EU.</p>
								<p>Lovene i EU og medlemslandene kan begrense dine rettigheter i forhold til personopplysninger om deg, som beskrevet i dette avsnitt 13.</p>
								<p>Vi vil gi deg den forespurte informasjonen i henhold til rettighetene du har i avsnitt 13 i denne avtalen innen en måned etter mottak av forespørselen din. Tidsrammen kan utvides til opptil to måneder, om nødvendig avhengig av arten av forespørselen samt mengden forespørsler. Innen en måned etter at vi har mottatt forespørselen din, vil vi varsle deg om eventuelle utvidelser, samt årsakene.</p>
								<p>Så lenge det ikke er i strid med bestemmelsene i lovens § 13, vil informasjonen du ber om i henhold til dine rettigheter i henhold til § 13 bli gjort tilgjengelig gratis. Hvis forespørselen ikke er berettiget eller overdreven, spesielt hvis de gjentas, kan vi kreve et rimelig beløp for å dekke administrasjonskostnadene for å gi informasjonen eller kunngjøre den forespurte handlingen. Vi kan heller ikke handle.</p>
								<p>Hvis vi er i tvil om identiteten til den virkelige personen som sendte inn forespørselen din Hvis vi er i tvil om identiteten til personen som sender forespørselen, kan selskapet be om ytterligere informasjon.</p>
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