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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Pagina iniziale</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">piattaforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Vantaggi</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Il nostro team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Contattaci</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrati</a>
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
								<h1 class="policy__title h2">Informativa sulla privacy</h1>
								<p class="policy__date">Ultimo aggiornamento: 30/9/22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>Noi (noti anche come «Noi», «Ci» o «Nostro») ci impegniamo a salvaguardare i tuoi dati personali e la tua privacy.</p>
								<p>La presente Informativa sulla privacy è stata progettata per informarti sui modi in cui raccogliamo e archiviamo le informazioni fornite attraverso il sito Web {{site_name}} (il «sito Web»).</p>
								<p>Questi principi saranno difesi:</p>
								<ul>
									<li>Per essere trasparenti in merito al trattamento e alla raccolta di informazioni personali su di te:</li>
								</ul>
								<p>Vorremmo che tu fossi in grado di fare scelte informate in merito all&#39;uso e al trattamento dei dati personali. Questo è il motivo per cui abbiamo creato il nostro sito Web. A tal fine, utilizziamo diversi metodi e procedure per fornirti informazioni pertinenti sull&#39;uso dei dati personali.</p>
								<p>Se riteniamo che tu abbia bisogno di dettagli specifici, ti forniremo le informazioni alla data e all&#39;ora appropriate.</p>
								<p>Saremo lieti di rispondere a qualsiasi domanda e forniremo tutti i chiarimenti necessari in merito a eventuali limitazioni imposte dalla legge. Siamo raggiungibili via e-mail all&#39;indirizzo seguente: info@ {{site_name}} .com</p>
								<ul>
									<li>I dati personali verranno utilizzati solo per gli scopi specificati nella politica.</li>
								</ul>
								<p>I dati personali possono essere trattati da noi per una serie di scopi, ad esempio per offrirti il sito Web e connetterti con piattaforme di trading di terze parti (i «Servizi») e per migliorare il sito, proteggere i nostri diritti e interessi, facilitare la manutenzione e la fornitura dei servizi, soddisfare eventuali obblighi normativi o legali e condurre attività amministrative e commerciali per facilitare la fornitura e l&#39;uso dei servizi.</p>
								<p>I dati personali vengono inoltre trattati da noi per comprendere meglio le tue preferenze ed esigenze.</p>
								<ul>
									<li>Per utilizzare strumenti significativi per proteggere i tuoi diritti in relazione ai dati personali:</li>
								</ul>
								<p>Per consentire l&#39;esercizio dei tuoi diritti disponiamo di risorse sostanziali. Contattaci in qualsiasi momento per richiedere i dati personali relativi ai tuoi dati personali. Li modificheremo o elimineremo, smetteremo di utilizzarli per scopi specifici o per scopi generali. Trasferisci le informazioni a te o a una parte esterna. Saremo in grado di soddisfare le tue richieste.</p>
								<ul>
									<li>Proteggi i tuoi dati personali:</li>
								</ul>
								<p>Sebbene non possiamo garantire la completa sicurezza dei tuoi dati personali, possiamo garantire che continueremo a utilizzare una varietà di metodi e tecniche per garantire che i tuoi dati personali siano protetti.</p>
								<p>La nostra politica sulla privacy e sulla sicurezza è completa.</p>
								<h3>1. L&#39;ambito?</h3>
								<p>Questa politica descrive il tipo di dati personali che l&#39;azienda raccoglie sulle persone fisiche e come li elabora, li condivide con terze parti, protegge i processi e così via.</p>
								<p>La presente Informativa riguarda le informazioni relative a una persona fisica identificata o identificabile. Una persona fisica identificabile può essere definita come una persona direttamente identificabile o una combinazione di informazioni aggiuntive a cui abbiamo o possiamo accedere.</p>
								<p>La Politica definisce il «trattamento» come un processo che richiede l&#39;uso o la raccolta di dati personali. Include la gestione, la strutturazione e l&#39;archiviazione dei dati personali.</p>
								<p>I nostri servizi sono destinati a un pubblico generico e non sono progettati per l&#39;uso da parte di minori di 18 anni. Non cerchiamo o raccogliamo intenzionalmente informazioni da persone di età inferiore ai 18 anni. Non consentiamo consapevolmente a tali persone di utilizzare i nostri servizi. Cancelleremo tutte le informazioni che scopriamo sui bambini il più rapidamente possibile se ne veniamo a conoscenza.</p>
								<h3>2. Quali dati personali abbiamo su di te?</h3>
								<p>Se accedi al servizio e ai canali o visiti il nostro sito Web, raccogliamo dati personali. Potremmo richiedere i tuoi dati personali in determinati casi. In altri casi raccogliamo i tuoi dati personali analizzando e analizzando l&#39;uso dei nostri servizi o dei nostri canali di servizio o ricevendo le tue informazioni dai nostri partner terzi.</p>
								<h3>3. Non è necessario divulgare informazioni personali all&#39;azienda e le relative conseguenze.</h3>
								<p>Tuttavia, non sei obbligato a fornirci alcun dato personale. In determinate circostanze, tuttavia, potrebbe non essere necessario fornirci alcun dato personale. Ciò potrebbe impedirci di offrire i servizi o impedire agli utenti di accedere al sito Web.</p>
								<h3>4. Che tipo di dati personali siamo in grado di raccogliere? Quando visitate il nostro sito Web, raccogliamo le seguenti informazioni personali:</h3>
								<p>Ciò include informazioni sul registro delle attività online, i dati sul traffico (incluso l&#39;indirizzo IP, la data di accesso, l&#39;ora di accesso e la data di accesso), la lingua utilizzata, i registri degli arresti anomali del software, il tipo di browser utilizzato e le informazioni relative al dispositivo utilizzato. Le informazioni raccolte non sono informazioni private e non possono essere utilizzate per identificarti.</p>
								<p>Dati personali che riceviamo da te: tutti i dati personali che ci fornisci a tua scelta quando ti connetti a una piattaforma di trading online di una terza parte tramite noi.</p>
								<p>Informazioni personali fornite specificamente a piattaforme di terze parti per facilitare il commercio: queste informazioni contengono nome completo, indirizzo, numero di telefono e indirizzo email.</p>
								<h3>5. La base giuridica e i motivi del trattamento dei dati personali</h3>
								<p>I tuoi dati personali sono trattati dalla società per le finalità descritte in questa sezione e in conformità con la base giuridica ad essa applicabile.</p>
								<p>Senza una base legale, l&#39;azienda non è in grado di utilizzare i dati personali che ti riguardano. Le basi legali su cui l&#39;azienda è in grado di utilizzare per trattare i dati personali che ti riguardano:</p>
								<ul class="small">
									<li>Hai dato il tuo consenso al trattamento dei tuoi dati personali per uno o più motivi. Questo è il caso in cui invii informazioni personali tramite il sito Web per consentirci di trasferirle su una piattaforma di trading di terze parti.</li>
									<li>La Società o una terza parte potrebbero richiedere l&#39;elaborazione per soddisfare il loro legittimo interesse. Ad esempio, è necessario migliorare i nostri servizi o difendere rivendicazioni legali.</li>
									<li>Il trattamento deve soddisfare un obbligo di legge.</li>
								</ul>
								<p>Contattaci via e-mail per maggiori dettagli sul trattamento necessario per salvaguardare gli interessi legittimi.</p>
								<p>Di seguito è riportato un elenco dei motivi e delle basi legali per cui possiamo utilizzare le informazioni che ci fornisci. Dati personali.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Ambito</div>
										<div class="table-1__header-column">Base giuridica</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>Fornire le tue informazioni personali a terze parti su tua richiesta di accesso al trading digitale</p>
												<p>Se lo richiedi, potremmo richiederti dati personali per inoltrarli a società terze.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Hai dato il tuo consenso al trattamento dei tuoi dati personali per uno o più motivi.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Per rispondere alle tue richieste, domande o dubbi, i dati personali sono necessari per aiutarti a rispondere a qualsiasi domanda tu possa avere sui servizi.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>È necessario trattare gli interessi legittimi dell&#39;azienda o gli interessi di una terza parte.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>Per soddisfare qualsiasi obbligo legale o amministrativo, giudiziario o legale o giudiziario, i dati personali vengono trattati per soddisfare i requisiti legali.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Per garantire il rispetto degli obblighi legali, il trattamento è necessario.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>Per migliorare i nostri servizi, i dati personali possono essere utilizzati da noi per migliorare i nostri servizi. Ciò include, tra le altre cose, eventuali segnalazioni di arresti anomali o malfunzionamenti che raccogliamo in relazione ai servizi.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>È necessario trattare gli interessi legittimi dell&#39;azienda o gli interessi di una terza parte.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Per fermare le frodi e l&#39;uso improprio dei nostri servizi</p>
											</div>
										</div>
										<div class="table-1__column">
											È necessario trattare gli interessi legittimi dell&#39;azienda o gli interessi di una terza parte.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>Per eseguire e gestire azioni in linea con i requisiti dei nostri servizi, tali attività includono funzioni di back-office, attività di sviluppo aziendale, processi decisionali strategici, meccanismi di supervisione, ecc.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>È necessario trattare gli interessi legittimi dell&#39;azienda o gli interessi di una terza parte.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>Per condurre analisi, ad esempio analisi statistiche per prendere decisioni su diverse questioni, utilizziamo diverse tecniche analitiche (comprese quelle statistiche).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>È necessario trattare gli interessi legittimi dell&#39;azienda o gli interessi di una terza parte.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Per salvaguardare i nostri beni, diritti e interessi, nonché quelli di terzi, abbiamo sviluppato HTML0 per avviare e difendere azioni legali I dati personali possono essere trattati da noi al fine di salvaguardare i nostri diritti, interessi e beni, o quelli di terzi, in conformità a qualsiasi legge, regolamento o accordo applicabile e a qualsiasi condizione, termine o politica.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>È necessario trattare gli interessi legittimi dell&#39;azienda o gli interessi di una terza parte.</p>
										</div>
									</div>
								</div>

								<h3>6. Trasferimento di dati personali a terzi</h3>
								<p>L&#39;azienda può anche fornire dati personali a società terze che ci offrono servizi come fornitori di hosting e archiviazione, informazioni sull&#39;indirizzo IP e analisi delle esperienze degli utenti.</p>
								<p>Puoi anche chiederci di fornire dati personali specifici che ti riguardano a piattaforme di trading di terze parti. Forniremo i tuoi dati personali che ci fornisci in questi casi a piattaforme di trading di terze parti. L&#39;uso dei tuoi dati personali è soggetto alle loro politiche sulla privacy. I tuoi dati personali potrebbero essere condivisi con più piattaforme di trading.</p>
								<p>La Società potrebbe essere in grado di condividere dati personali con entità o partner commerciali correlati. Ciò può fornire all&#39;azienda le risorse necessarie per consentirle di potenziare e migliorare i prodotti e i servizi che fornisce ai propri clienti.</p>
								<p>In caso di necessità di salvaguardare i diritti di terzi o beni, la Società è autorizzata a divulgare i dati personali alle autorità normative, locali o ad altre autorità ufficiali.</p>
								<p>Potremmo inoltre condividere i dati personali dell&#39;utente con potenziali investitori o acquirenti o con finanziatori della società o di qualsiasi altra società del gruppo di società nel caso in cui si verifichi la stessa transazione (incluso il trasferimento o la vendita di beni appartenenti alla società o a qualsiasi altra società del gruppo) o nell&#39;ambito di una fusione o ristrutturazione, consolidamento o fallimento della società o di qualsiasi altra attività all&#39;interno del gruppo.</p>
								<h3>7. Cookie e servizi di terze parti</h3>
								<p>Potrebbero essere utilizzati servizi di terze parti, come quelli che forniscono pubblicità sul nostro sito Web o società di analisi. Queste società potrebbero anche utilizzare cookie o altre tecnologie.</p>
								<p>I cookie sono piccoli file di testo che vengono salvati sul tuo dispositivo ogni volta che visiti o accedi al sito web. I cookie vengono utilizzati per raccogliere informazioni sulle tue preferenze e abitudini di navigazione per migliorare la tua esperienza utente, tenere traccia delle tue preferenze e personalizzare i prodotti e i servizi che potresti apprezzare. I cookie vengono utilizzati anche per statistiche e analisi.</p>
								<p>Alcuni cookie che possiamo utilizzare sono cookie di sessione. Vengono scaricati temporaneamente sul dispositivo e dureranno per un breve periodo di tempo prima di chiudere il browser. Altri cookie sono persistenti. I cookie permanenti rimangono sul dispositivo per un certo periodo di tempo dopo la chiusura del browser. Sono utilizzati per aiutare il sito Web a identificarti come utente abituale e consentire agli utenti di tornare sul sito Web.</p>
								<h3>Tipi di cookie:</h3>
								<p>Possono essere utilizzati da noi in base al loro scopo:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Il tipo di cookie</div>
											<div class="table-2__text">
												<p>I cookie sono assolutamente necessari</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Ambito</div>
											<div class="table-2__text">
												<p>Questi cookie sono necessari per poter accedere alle funzionalità richieste e per navigare nel nostro sito Web. I cookie vengono utilizzati per fornire le informazioni, i prodotti e i servizi che ci hai richiesto.</p>
												<p>Sono necessari per consentire al dispositivo dell&#39;utente di scaricare e trasmettere dati in streaming. Ciò consente di navigare nel sito Web, utilizzarne le funzionalità e quindi tornare alle pagine visitate in precedenza.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Informazioni aggiuntive</div>
											<div class="table-2__text">
												<p>I cookie raccolgono dati personali, come il nome utente, nonché la data dell&#39;ultimo accesso per confermare che l&#39;utente ha effettuato l&#39;accesso al sito.</p>
												<p>Vengono cancellati una volta chiuso il browser web (cookie di sessione).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Il tipo di cookie</div>
											<div class="table-2__text">
												<p>Cookie di funzionalità</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Ambito</div>
											<div class="table-2__text">
												<p>I cookie ci consentono di riconoscerti ogni volta che visiti il nostro sito e anche di salvare le tue preferenze e preferenze.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Informazioni aggiuntive</div>
											<div class="table-2__text">
												<p>Durano fino alla data di scadenza e vengono salvati anche dopo la chiusura del browser.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Il tipo di cookie</div>
											<div class="table-2__text">
												<p>Cookie per le prestazioni</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Ambito</div>
											<div class="table-2__text">
												<p>I cookie vengono utilizzati per raccogliere dati statistici sulle prestazioni del sito e per migliorarlo. Ci consentono inoltre di effettuare analisi sul nostro sito Web.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Informazioni aggiuntive</div>
											<div class="table-2__text">
												<p>I cookie memorizzano dati anonimi che non sono associati a nessuna persona fisica identificabile o identificata.</p>
												<p>Possono essere rimossi quando si chiude il browser. Altri cookie hanno una validità indefinita.</p>
											</div>
										</div>
									</div>
								</div>


								<p>I cookie vengono bloccati o rimossi</p>
								<p>Per impedire o rimuovere i cookie, è necessario modificare le impostazioni del browser. Di seguito sono riportati i collegamenti che aiutano l&#39;utente nella procedura per alcuni dei browser più noti.</p>
								<ul class="small">
									<li>firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Tuttavia, tieni presente che alcune o tutte le funzioni e caratteristiche del sito Web potrebbero non funzionare nel modo previsto se ciò dovesse accadere.</p>
								<h3>AVVISO DI TRACCIAMENTO ONLINE <br> Questo servizio attualmente non supporta i segnali Do-Not-Track. <br>8. La conservazione dei dati personali su di te</h3>
								<p>La Società desidera conservare i dati personali dell&#39;utente per il tempo necessario a soddisfare lo scopo del trattamento dei dati personali, come descritto nella presente informativa, o per periodi di tempo più lunghi, come consentito dalla legge o dai regolamenti, dalle politiche e dagli ordini applicabili.</p>
								<p>Condivideremo le tue informazioni con piattaforme di trading di terze parti per un periodo di 12 mesi. Se acconsenti, continueremo a condividere i tuoi dati per altri 12 mesi.</p>
								<p>Esaminiamo regolarmente i dati personali che abbiamo conservato per assicurarci che non siano più necessari.</p>
								<h3>9. Trasferimenti di informazioni personali a un paese terzo o a un&#39;organizzazione internazionale</h3>
								<p>Le tue informazioni personali possono essere trasferite in altri paesi (ad esempio i tuoi dati personali possono essere trasmessi a un paese terzo (cioè un altro paese diverso da quello in cui risiedi) o a organizzazioni internazionali. Organizzazioni o giurisdizioni internazionali. La Società adotta tutte le misure necessarie per proteggere i dati personali forniti e garantire che gli utenti dei dati abbiano la possibilità di far valere i propri diritti e accedere a ricorsi legali efficaci.</p>
								<p>Queste protezioni e garanzie sono accessibili a tutti coloro che risiedono nel SEE (Spazio economico europeo).</p>
								<ul class="small">
									<li>Trasferimento verso un paese terzo o un&#39;organizzazione internazionale che la Commissione UE ha stabilito fornisce un&#39;adeguata sicurezza dei dati personali trasferiti ad esso ai sensi dell&#39;articolo 45, paragrafo 3, del regolamento 2016/679 del Parlamento europeo e del Consiglio del 27 aprile 2016. (il «GDPR»)</li>
									<li>Il trasferimento viene effettuato ai sensi di un accordo legalmente vincolante e giuridicamente vincolante ed esecutivo tra enti o autorità pubbliche ai sensi dell&#39;articolo 46, paragrafo 2, lettera a).</li>
									<li>Il trasferimento è stato effettuato in conformità alle clausole comuni di protezione dei dati adottate dalla Commissione UE ai sensi dell&#39;articolo 46, paragrafo 2, lettera c), del GDPR. Le clausole adottate dalla Commissione UE possono essere visualizzate all&#39;indirizzo https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>La Società può fornire informazioni sulle misure di sicurezza utilizzate per salvaguardare i dati personali dell&#39;utente che vengono trasferiti a paesi terzi o organizzazioni internazionali. Invia un&#39;email al seguente indirizzo all&#39;indirizzo info@wealthwaydigital.uk</p>
								<h3>10. Sicurezza dei dati personali</h3>
								<p>Abbiamo adottato adeguate precauzioni organizzative e tecniche per salvaguardare i dati personali. Ciò include la prevenzione della distruzione, della perdita o della modifica accidentale o illegale dei dati personali.</p>
								<p>Non possiamo garantire o garantire che la sicurezza dei tuoi dati personali verrà mantenuta senza errori. Non possiamo inoltre essere responsabili per eventuali danni immateriali, incidentali o risultanti derivanti dall&#39;uso o dalla divulgazione di dati personali. Tuttavia, ciò include, non è limitato alla divulgazione di dati personali a causa di errori di trasmissione, accesso non autorizzato da parte di terzi o qualsiasi altra causa al di fuori del nostro controllo.</p>
								<p>In caso di obblighi legali o altri obblighi che sfuggono al nostro controllo, potremmo essere tenuti a fornire i dati personali che vi riguardano a terzi, come le autorità pubbliche. Non possiamo controllare la sicurezza data ai tuoi dati personali da terze parti in queste situazioni.</p>
								<p>I dati personali non possono essere trasferiti sul Web in modo completamente sicuro. La Società non può garantire la sicurezza dei dati personali che ci trasmetti tramite Internet.</p>
								<h3>11. Collegamenti ipertestuali a siti Web appartenenti a siti Web di terzi</h3>
								<p>I collegamenti a siti e applicazioni di terze parti sono forniti sul sito Web. Queste applicazioni e siti Web non sono soggetti alla supervisione della società. Non siamo responsabili della raccolta o del trattamento di dati personali da parte di questi siti Web o app. La presente Informativa non è applicabile alle azioni intraprese tramite tali siti o app.</p>
								<p>Quando visiti uno qualsiasi dei siti Web o delle app di terze parti, ti consigliamo di leggere le loro politiche sulla privacy prima di decidere di accedere o utilizzare le loro app. Ti suggeriamo inoltre di fornire loro qualsiasi dato personale.</p>
								<h3>12. Modifiche alla presente Politica</h3>
								<p>Questa politica è soggetta a modifiche in qualsiasi momento. Se modifichiamo questa politica, ti informeremo delle modifiche pubblicando la politica aggiornata sul nostro sito web. Inoltre, quando apporteremo modifiche significative a questa politica, cercheremo di informarti utilizzando i metodi che riteniamo appropriati e pubblicheremo un annuncio sul nostro sito web. Eventuali modifiche, se non diversamente specificato, entreranno in vigore dopo la pubblicazione della politica rivista.</p>
								<h3>13. I tuoi diritti in relazione alle tue informazioni personali</h3>
								<p>Hai il diritto di richiederci di verificare l&#39;accuratezza dei dati personali raccolti su di te, di correggere eventuali errori e di eliminare tutti i dati personali non richiesti da noi. È inoltre possibile limitare l&#39;ambito dei tipi di trattamento delle informazioni personali.</p>
								<p>Se risiedi nella residenza del SEE, consulta questa pagina:</p>
								<p>Questi diritti sono accessibili all&#39;utente per quanto riguarda le informazioni fornite in relazione ai propri dati personali. Puoi richiedere di esercitare i tuoi diritti scrivendo un&#39;email all&#39;indirizzo seguente.</p>
								<p>Diritti di accesso</p>
								<p>La Società è in grado di verificare l&#39;accuratezza dei dati personali che vengono trattati su di te. Se sei in grado di accedere ai tuoi dati personali.</p>
								<p>La Società desidera fornire una copia elettronica dei dati personali attualmente oggetto di trattamento e potrebbe addebitare un costo ragionevole per eventuali copie aggiuntive. I dati saranno resi disponibili elettronicamente, se richiesto dall&#39;utente.</p>
								<p>Il diritto di accesso ai dati personali non deve essere in conflitto con i diritti e le libertà altrui. Se la richiesta è lesiva dei diritti e delle libertà altrui o dei loro diritti, l&#39;azienda può rifiutarsi di soddisfare la richiesta o limitare la propria capacità di soddisfarla.</p>
								<p>Diritto di rettifica</p>
								<p>La Società ha il diritto di rettificare dati personali inesatti. Hai il diritto di richiedere la rettifica di eventuali dati personali insufficienti che ti riguardano, tenendo conto del motivo del trattamento.</p>
								<p>Diritto alla cancellazione</p>
								<p>Sono applicabili i seguenti motivi: (a) I dati personali non sono più necessari per lo scopo per il quale sono stati raccolti o trattati; (b) Revoca il consenso e non esiste una base legale per il trattamento; (c) L&#39;utente si oppone in qualsiasi momento, per un motivo specifico della sua situazione, al trattamento dei dati personali che lo riguardano sia basato su interessi legittimi perseguiti da noi o da terzi; (e) I dati personali sono trattati illegalmente o f) I dati personali devono essere rimossi per soddisfare l&#39;obbligo legale dell&#39;azienda.</p>
								<p>Questo diritto non è applicabile nel caso in cui il trattamento sia necessario (a) per adempiere a un obbligo imposto dalla legge che deve essere trattato ai sensi del diritto dell&#39;Unione Europea o del diritto degli Stati membri; o (b), per creare, esercitare o difendere diritti legali.</p>
								<p>Restrizioni al trattamento</p>
								<p>Se sei preoccupato per l&#39;accuratezza dei tuoi dati personali, puoi chiedere alla società di limitare il trattamento dei tuoi dati personali.</p>
								<p>Se chiedi che i dati personali siano limitati, i dati personali possono essere conservati solo se dai il tuo consenso o per creare, esercitare o difendere diritti legali, o per difendere i diritti di un&#39;altra persona fisica, o nel caso di un motivo che è di interesse pubblico significativo all&#39;interno dell&#39;Unione europea o di uno Stato membro.</p>
								<p>Diritto alla portabilità dei dati</p>
								<p>Se il processo viene eseguito da un sistema automatizzato e si basa sul consenso o su un contratto in cui siete coinvolti nel contratto, avete il diritto legale e il diritto di rivedere i vostri dati personali che avete fornito alla società.</p>
								<p>Hai il diritto di chiedere che i tuoi dati personali siano trasferiti direttamente dalla società a un altro titolare del trattamento, se tecnicamente fattibile. I diritti che avete in base al diritto di cancellazione non cambiano a causa dell&#39;esercizio del vostro diritto alla trasferibilità dei dati. Il diritto al trasferimento dei dati non interferisce con i diritti o le libertà di nessun altro.</p>
								<p>Diritto di contestazione</p>
								<p>Il diritto di opporsi a qualsiasi utilizzo dei dati personali che vi riguardano basato su interessi legittimi perseguiti dalla società o da terzi è disponibile in qualsiasi momento. Ciò non si limita alla profilazione basata esclusivamente su questi interessi legittimi. Se siamo in grado di stabilire motivi legittimi e convincenti per il trattamento dei dati personali, non saremo in grado di continuare a farlo a meno che non dimostriate che prevalgono sui vostri diritti, libertà o interessi o sull&#39;esercizio, l&#39;istituzione o la difesa dei diritti legali.</p>
								<p>Per quanto riguarda il marketing diretto, avete il diritto di opporvi in qualsiasi momento al trattamento dei dati personali che vi riguardano.</p>
								<p>Diritto di negare il consenso</p>
								<p>Puoi revocare il tuo consenso al trattamento dei tuoi dati personali in qualsiasi momento. Ciò non altererà la legalità e la liceità di qualsiasi trattamento che dipendesse dal consenso dell&#39;utente prima della rimozione.</p>
								<p>Hai il diritto di presentare un reclamo all&#39;autorità che ti supervisiona.</p>
								<p>È possibile presentare un ricorso a un&#39;autorità di controllo istituita da uno Stato membro per salvaguardare i diritti fondamentali delle persone in relazione al trattamento dei dati personali all&#39;interno dell&#39;Unione europea.</p>
								<p>Le leggi dell&#39;Unione Europea e degli Stati membri potrebbero limitare i tuoi diritti in relazione ai dati personali che ti riguardano, come dettagliato nella presente sezione 13.</p>
								<p>Ti forniremo le informazioni richieste in base ai diritti di cui alla sezione 13 del presente accordo entro un mese dal ricevimento della tua richiesta. Il periodo di tempo può essere esteso fino a due mesi, se necessario a seconda della natura della richiesta e della quantità di richieste. Entro un mese dal ricevimento della richiesta, ti informeremo di qualsiasi proroga e dei motivi.</p>
								<p>Purché non sia contrario alle disposizioni della sezione 13 della legge, le informazioni richieste in base ai diritti dell&#39;utente ai sensi della sezione 13 saranno rese disponibili gratuitamente. Se la richiesta non è giustificata o eccessiva, in particolare se viene ripetuta, potremmo addebitare un importo ragionevole per coprire le spese amministrative per fornire le informazioni o annunciare l&#39;azione richiesta. Potremmo inoltre non agire.</p>
								<p>In caso di dubbi sull&#39;identità della persona reale che ha presentato la richiesta In caso di dubbi sull&#39;identità della persona che ha effettuato la richiesta, la società potrebbe richiedere ulteriori informazioni.</p>
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