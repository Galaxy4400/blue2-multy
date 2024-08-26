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
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Registrati</a>
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
								<h1 class="conditions__title h2">Condizioni d&#39;uso</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1° generale</h3>
								<p>1.1. Siete invitati a visitare il {{site_name}} («Sito»)</p>
								<p>La nostra email info@ {{site_name}} .com</p>
								<p>1.2. Questo sito Web offre informazioni su piattaforme di terze parti («Piattaforme di terze parti») per il commercio (i «Servizi»)</p>
								<p>1.3. I Termini regolano l&#39;accesso dell&#39;Utente («Tu», «Tuo» o «Utente») al Sito Web e ai Servizi. Prima di poter accedere ai servizi, è necessario leggere attentamente i presenti termini. Questi termini sono un accordo legalmente vincolante tra te e il proprietario del sito web, tu e il proprietario del sito web. È necessario accettare i termini in tutti gli aspetti se non si desidera utilizzare il sito Web. I termini possono essere modificati di volta in volta.</p>
								<p>Questi termini contengono la nostra politica sulla privacy. Accetti questi termini e accetti la nostra politica sulla privacy. (Puoi leggere la nostra politica sulla privacy qui).</p>
								<h3>2. Idoneità</h3>
								<p>2.1. Se rispetti questi termini e condizioni, il sito Web sarà accessibile all&#39;utente.</p>
								<p>2.1.1. Età minima 18 anni</p>
								<p>2.1.2. Puoi firmare queste condizioni e termini.</p>
								<p>2.1.3. Le leggi del paese in cui vivi o utilizzi i servizi non impediscono in alcun modo agli utenti di utilizzare il sito Web o uno qualsiasi dei suoi servizi.</p>
								<p>2.2. Non forniamo alcuna garanzia, dichiarazione o garanzia sulla legalità o sull&#39;utilizzo dei servizi o del sito Web per alcuna persona. Non siamo responsabili per l&#39;uso illegale del sito Web o dei servizi di alcun utente.</p>
								<h3>3. Territori con accesso limitato</h3>
								<p>3.1. Senza limitare l&#39;ambito delle informazioni fornite, ci riserviamo il diritto di limitare l&#39;accesso ai Servizi e/o al Sito Web (o a qualsiasi parte di essi) a: (i), Utenti che risiedono in aree riservate (i «Territori con restrizioni») e (ii) utenti che riteniamo possano rappresentare un rischio normativo, legale o reputazionale.</p>
								<p>3.2. Potremmo anche imporre condizioni aggiuntive prima di accettare utenti che sono cittadini di o di determinati Paesi. Se gli utenti viaggiano in aree riservate, il Sito Web o i Servizi potrebbero essere temporaneamente non disponibili o bloccati.</p>
								<h3>4. Attività proibite</h3>
								<p>4.1. L&#39;utente accetta di utilizzare il Sito e i Servizi con rispetto e di non:</p>
								<p>4.1.1. È possibile connettersi al nostro sito Web e utilizzarlo per scaricare, caricare, condividere e pubblicare, nonché per trasmettere o inviare (a) informazioni o altro materiale che viola i diritti intellettuali alla privacy, i diritti di proprietà e altri diritti; o (b) informazioni che non possono essere pubblicate o distribuite a causa di una minaccia o lesione causata da insulti o diffamazioni, calunnie o razzismo, o (c) informazioni che includono virus o altro il software può danneggiare i nostri sistemi informatici o quelli di terze parti o in modo da bloccare o limitare altri utenti Accesso al sito Web. (d) Qualsiasi informazione o altro materiale che violi qualsiasi legge. (e) Informazioni o materiali che includono pubblicità o altri contenuti non soggetti al nostro previo consenso scritto.</p>
								<p>4.1.2. Modifica o elimina qualsiasi attribuzione, nota legale, etichetta o designazione proprietaria di questo sito Web.</p>
								<p>4.1.3. L&#39;accesso ai servizi può essere ottenuto tramite qualsiasi interfaccia diversa dal sito Web.</p>
								<p>4.1.4. Non interferire con l&#39;utilizzo del sito Web o dei servizi forniti da altri utenti</p>
								<p>4.1.5. Bot e altre tecniche automatizzate vengono utilizzati per accedere al sito e/o ai suoi servizi.</p>
								<p>4.1.6. Non è consentito caricare o trasmettere, o addirittura tentare di caricare, alcun contenuto che sia attivo o coinvolto passivamente nei meccanismi di raccolta o trasmissione dei dati, come bug web, cookie o dispositivi spyware, senza la nostra espressa autorizzazione.</p>
								<p>4.1.7. Impegnati nel «framing», nel mirroring o in qualsiasi altro metodo per imitare l&#39;aspetto o la funzione dei servizi.</p>
								<p>4.1.8. L&#39;utente può violare qualsiasi legge o regolamento applicabile e incoraggiare o incoraggiare qualsiasi attività illegale come violazione del marchio, violazione del copyright, diffamazione, violazione della privacy, pirateria informatica o distribuzione di software falso;</p>
								<p>4.1.9. È possibile modificare o alterare il codice sorgente di questo sito Web. È inoltre possibile caricare applicazioni o software che possono causare danni al sito Web o a un&#39;altra persona.</p>
								<p>4.1.10. Non è consentito smontare, decompilare o decodificare alcuna tecnologia o software presente sul sito Web o utilizzato per fornire i servizi.</p>
								<p>4.2. I termini del presente accordo si aggiungono a tutti i diritti che potremmo possedere. Se riteniamo che l&#39;utilizzo del sito da parte dell&#39;utente non sia conforme ai termini di questi termini o a qualsiasi altra legge applicabile, potremmo essere in grado di monitorare l&#39;utilizzo del sito Web o dei servizi o bloccarne l&#39;accesso, o rivelare i modelli di comportamento dell&#39;utente sul sito Web ad altre parti o adottare qualsiasi altra misura appropriata per salvaguardare i diritti e la proprietà di terzi.</p>
								<h3>5. Diritti di proprietà intellettuale</h3>
								<p>5.1. Il contenuto del sito Web, incluso quello relativo ai video, come testo, immagini, loghi, suoni, design, marchi e altro materiale, è protetto dai diritti di proprietà intellettuale nostri e di terze parti.</p>
								<p>5.2. Tutti i diritti, i titoli e tutti i diritti e gli interessi relativi ai servizi e al sito Web sono nostri. Oltre ai diritti di utilizzo dei servizi e del sito Web in conformità alle presenti condizioni, l&#39;uso da parte dell&#39;utente dei servizi e del sito Web non conferisce loro alcun diritto di proprietà intellettuale.</p>
								<p>5.3. L&#39;utente può accedere al Sito Web e/o ai Servizi solo per uso personale e non commerciale.</p>
								<p>5.4. Non consentirai a nessuno di modificare o decodificare, decompilare o copiare i servizi o il sito Web o creare opere derivate utilizzando la sublicenza o il noleggio.</p>
								<h3>6. Limitazione di responsabilità</h3>
								<p>6.1. Il sito Web e i servizi sono di tua responsabilità. Non forniamo alcuna garanzia, implicita o esplicita, relativa al sito Web e ai servizi o al loro utilizzo da parte dell&#39;utente, comprese le garanzie implicite di qualità e commerciabilità, nonché lo scopo per il quale è stato progettato, ad esempio la non violazione e l&#39;usabilità, l&#39;autorità in termini di accuratezza, completezza, tempestività e pronta consegna. I contenuti e le funzioni accessibili o accessibili tramite il sito Web sono offerti «così come sono», «come accessibili» e «con qualsiasi conseguenza».</p>
								<p>6.2. Non siamo responsabili per eventuali errori, omissioni o imprecisioni delle informazioni sul sito web. Non ci assumiamo la responsabilità per eventuali interruzioni o interruzioni delle trasmissioni verso o attraverso i servizi.</p>
								<p>6.3. Ti risarciremo per qualsiasi perdita, direttamente o indirettamente subita da te o da terzi attraverso il sito Web o i servizi. Sarai responsabile di qualsiasi decisione facendo affidamento sulle informazioni sul sito Web e/o nei servizi.</p>
								<p>6.4. Non siamo responsabili per eventuali perdite o danni diretti, indiretti o correlati all&#39;utente o a qualsiasi altra terza persona. Ciò include qualsiasi perdita di reddito o di dati derivante dall&#39;utilizzo del sito e/o dei servizi. Questa limitazione di responsabilità è consentita secondo le modalità previste dalla legge nella regione applicabile.</p>
								<p>6.5. In caso di problemi tecnici con una linea Internet o telefonica, un fornitore di computer o un server di sistema o qualsiasi hardware, non ci assumiamo alcuna responsabilità. Non siamo responsabili per l&#39;uso di Internet.</p>
								<h3>7. Contenuti e servizi di terze parti</h3>
								<p>7.1. È possibile visualizzare contenuti e servizi di terze parti quando si utilizzano i servizi. Ciò potrebbe includere annunci o recensioni di piattaforme di terze parti.</p>
								<p>7.2. Non ci assumiamo la responsabilità per le informazioni o i prodotti a cui si fa riferimento. Potrebbero non essere sempre attuali o aggiornati.</p>
								<p>7.3. Ti suggeriamo di verificare l&#39;accuratezza di tutte le informazioni prima di prendere qualsiasi decisione. Sei responsabile di tutte le decisioni e le azioni derivanti dalle informazioni.</p>
								<h3>8. Collegamenti</h3>
								<p>8.1. Il sito contiene pubblicità e contenuti. I materiali sono resi disponibili tramite siti Web di terze parti («link»). Ti consigliamo di esserne consapevole prima di scaricare, fare affidamento o accedere a qualsiasi informazione ottenuta da questi siti Web, software o altri materiali o completare qualsiasi acquisto o altra transazione che ti consiglieremo. Questi collegamenti sono forniti solo per la comodità degli utenti. Non siamo responsabili per eventuali danni o perdite causati dall&#39;uso o dall&#39;affidamento su informazioni, prodotti o servizi resi disponibili tramite altri siti Web o programmi.</p>
								<p>8.2. L&#39;inclusione di collegamenti ipertestuali in questo sito Web non implica l&#39;approvazione, l&#39;autorizzazione o l&#39;affiliazione o qualsiasi altra forma di approvazione da parte nostra in relazione ai siti Web, ai loro software o amministratori.</p>
								<p>8.3. Non abbiamo esaminato tutti i collegamenti ipertestuali e non possiamo essere ritenuti responsabili del software o del sito Web a cui si fa riferimento. Prima che decidiate di utilizzare, affidarvi o acquistare qualcosa da questi siti Web o applicazioni, vi avvertiamo. In nessun modo sarai ritenuto responsabile per eventuali danni o perdite causati dall&#39;uso o dall&#39;affidamento su prodotti, informazioni o contenuti accessibili tramite altri siti Web.</p>
								<p>8.4. È tua responsabilità e obbligo rivedere i termini e le politiche di tutti i siti Web gestiti da terze parti. Ti consigliamo vivamente di leggerli prima di entrare in contatto con siti Web di terze parti.</p>
								<h3>9. Varie</h3>
								<p>9.1. Abbiamo il diritto di alterare, interrompere o modificare i nostri servizi in qualsiasi momento. Le modifiche non causeranno alcun danno all&#39;utente e non sarà in grado di far valere alcun reclamo nei nostri confronti.</p>
								<p>9.2. I termini possono essere modificati in qualsiasi momento. Possiamo modificare i termini in qualsiasi momento. Ti informeremo pubblicando la versione più recente e quindi rivedendo la data in alto. Qualsiasi modifica sarà effettiva entro un paio di giorni lavorativi. Si ritiene che l&#39;utente accetti qualsiasi modifica ai termini del sito Web se continua a utilizzarlo dopo la loro pubblicazione.</p>
								<p>9.3. L&#39;Utente riconosce e accetta che qualsiasi informazione trasmessa tramite o attraverso il sito Web non crea alcun tipo di relazione che non sia esplicitamente indicato in questi termini.</p>
								<p>9.4. I presenti termini e l&#39;informativa sulla privacy, nonché le politiche sulla privacy, come modificate di volta in volta, sono gli unici accordi validi tra noi e l&#39;utente e qualsiasi altra promessa, dichiarazione o accordo, orale o scritto, non incluso nell&#39;informativa sulla privacy è legalmente vincolante per le parti.</p>
								<p>9.5. L&#39;impossibilità di esercitare qualsiasi diritto o potere previsto è considerata una rinuncia al diritto o al potere. Qualsiasi o solo una parte di un esercizio costituirà un elemento di qualsiasi esercizio aggiuntivo o ulteriore dello stesso o di altri diritti o rimedi.</p>
								<p>9.6. Questi termini saranno annullati nel caso in cui la disposizione in questione venga dichiarata non valida da un tribunale con giurisdizione competente. Il resto dei termini verrà interpretato come valido nel caso in cui l&#39;esclusione sia stata implementata e verrà applicato in base ai relativi termini. Tuttavia, i termini saranno interpretati secondo le intenzioni e i significati delle clausole di esclusione in base alla sentenza dei tribunali.</p>
								<p>9.7. Questi termini consentono ai partner terzi di trasferire o assegnare tutti i diritti e gli obblighi. Gli operatori terzi sono in grado di gestire il sito Web e tutti i suoi servizi, senza limitare i precedenti. Questi termini non ti consentono di cedere o trasferire i diritti o gli obblighi che hai.</p>
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