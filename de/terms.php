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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Home</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Produkt</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Angebot</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Unser Team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Ansprechpartner</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Anmeldung</a>
							</div>
							<div class="header-actions__action">
								<a class="header__login btn btn_w _icon-login" href="<?=$language_suffix?>sign-in.php"></a>
							</div>
						</div>
					</div>
					<button class="menu-icon" type="button" data-menu-icon="main-menu"></button>
				</div>
			</div>
		</header>
		
		<main class="page">

			<div class="page__inner page-inner page-inner_white">
				<div class="page-inner__content">
					<div class="inner-header__container _container-narrow">
						<div class="conditions">
							<div class="conditions__info">
								<h1 class="conditions__title h2">Conditions of Use</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1. Allgemeines</h3>
								<p>1.1. Sie sind eingeladen, die {{site_name}} („Site“) zu besuchen</p>
								<p>Unsere E-Mail info@ {{site_name}} .com</p>
								<p>1.2. Diese Website bietet Informationen über Plattformen Dritter („Drittanbieterplattformen“) zum Handel (die „Dienste“)</p>
								<p>1.3. Die Bedingungen regeln Ihren („Sie“, „Ihr“ oder „Benutzer“) Zugriff auf die Website und die Dienste. Bevor Sie auf die Dienste zugreifen können, müssen Sie diese Bedingungen sorgfältig lesen. Diese Bedingungen sind eine rechtsverbindliche Vereinbarung zwischen Ihnen und dem Eigentümer der Website, Ihnen und dem Eigentümer der Website. Sie müssen die Bedingungen in jeder Hinsicht akzeptieren, wenn Sie die Website nicht nutzen möchten. Die Bedingungen können von Zeit zu Zeit geändert werden.</p>
								<p>Diese Bedingungen enthalten unsere Datenschutzbestimmungen. Sie akzeptieren diese Bedingungen und stimmen unseren Datenschutzbestimmungen zu. (Sie können unsere Datenschutzbestimmungen hier lesen).</p>
								<h3>2. Teilnahmeberechtigung</h3>
								<p>2.1. Wenn Sie sich an diese Allgemeinen Geschäftsbedingungen halten, ist die Website für Sie zugänglich.</p>
								<p>2.1.1. Mindestalter 18 Jahre</p>
								<p>2.1.2. Sie können diese Bedingungen und Konditionen unterschreiben.</p>
								<p>2.1.3. Die Gesetze des Landes, in dem Sie leben oder die Dienste nutzen, hindern Benutzer in keiner Weise daran, die Website oder einen ihrer Dienste zu nutzen.</p>
								<p>2.2. Wir geben keine Garantien, Zusicherungen oder Gewährleistungen in Bezug auf die Rechtmäßigkeit oder Nutzung der Dienste oder der Website für eine Person ab. Wir sind nicht verantwortlich für die illegale Nutzung der Website oder der Dienste eines Benutzers.</p>
								<h3>3. Gebiete mit eingeschränktem Zugang</h3>
								<p>3.1. Ohne den Umfang der bereitgestellten Informationen einzuschränken, behalten wir uns das Recht vor, den Zugriff auf die Dienste und/oder die Website (oder Teile davon) auf folgende Personen zu beschränken: (i) Benutzer, die in Sperrgebieten (die „Sperrgebiete“) wohnen, und (ii) Benutzer, von denen wir glauben, dass sie ein regulatorisches, rechtliches oder Reputationsrisiko darstellen könnten.</p>
								<p>3.2. Wir können auch zusätzliche Bedingungen festlegen, bevor wir Benutzer akzeptieren, die Staatsbürger bestimmter Länder oder eines bestimmten Landes sind. Wenn Benutzer in eingeschränkte Bereiche reisen, sind die Website oder die Dienste möglicherweise vorübergehend nicht verfügbar oder gesperrt.</p>
								<h3>4. Verbotene Aktivitäten</h3>
								<p>4.1. Sie erklären sich damit einverstanden, die Website und die Dienste respektvoll zu nutzen und nicht:</p>
								<p>4.1.1. Sie können eine Verbindung zu unserer Website herstellen und sie verwenden, um (a) Informationen oder anderes Material herunterzuladen, hochzuladen, zu teilen und zu veröffentlichen sowie (a) Informationen oder anderes Material zu übertragen oder zu senden, das geistige Rechte an Datenschutz, Eigentumsrechten und anderen Rechten verletzt; oder (b) Informationen, die aufgrund einer Bedrohung oder Verletzung durch Beleidigung oder Verleumdung, Verleumdung oder Rassismus nicht veröffentlicht oder verbreitet werden dürfen, oder (c) Informationen, die Viren oder andere Software enthalten unsere Computersysteme oder die von Dritten schädigen oder auf eine Weise, die andere Benutzer daran hindert oder einschränkt Zugriff auf die Website. (d) Alle Informationen oder anderes Material, das gegen ein Gesetz verstößt. (e) Informationen oder Materialien, die Werbung oder andere Inhalte enthalten, die nicht unserer vorherigen schriftlichen Zustimmung bedürfen.</p>
								<p>4.1.2. Ändern oder löschen Sie alle Zuschreibungen, rechtlichen Hinweise, Labels oder Bezeichnungen, die Eigentum dieser Website sind.</p>
								<p>4.1.3. Der Zugriff auf die Dienste kann über jede Schnittstelle erfolgen, die nicht die Website ist.</p>
								<p>4.1.4. Beeinträchtigen Sie nicht die Nutzung der Website oder der von anderen Benutzern bereitgestellten Dienste</p>
								<p>4.1.5. Bots und andere automatisierte Techniken werden verwendet, um Zugriff auf die Website und/oder ihre Dienste zu erhalten.</p>
								<p>4.1.6. Ohne unsere ausdrückliche Genehmigung ist es Ihnen nicht gestattet, Inhalte hochzuladen oder zu übertragen oder gar zu versuchen, diese hochzuladen, die aktiv oder passiv an Datenerfassungs- oder Übertragungsmechanismen beteiligt sind, wie z. B. Web-Bugs, Cookies oder Spyware-Geräte.</p>
								<p>4.1.7. Verwenden Sie „Framing“, Spiegelung oder eine andere Methode, um das Erscheinungsbild oder die Funktion der Dienste nachzuahmen.</p>
								<p>4.1.8. Sie können gegen geltende Gesetze oder Vorschriften verstoßen und illegale Aktivitäten wie Markenverletzungen, Urheberrechtsverletzungen, Verleumdungen, Datenschutzverletzungen, das Hacken von Identitäten oder die Verbreitung gefälschter Software fördern oder fördern;</p>
								<p>4.1.9. Sie können den Quellcode dieser Website modifizieren oder ändern. Sie können auch Anwendungen oder Software hochladen, die der Website oder einer anderen Person Schaden zufügen können.</p>
								<p>4.1.10. Es ist Ihnen nicht gestattet, Technologien oder Software, die sich auf der Website befinden oder für die Bereitstellung der Dienste verwendet werden, zu disassemblieren, zu dekompilieren oder zurückzuentwickeln.</p>
								<p>4.2. Die Bedingungen dieser Vereinbarung gelten zusätzlich zu allen Rechten, die wir möglicherweise besitzen. Wenn wir der Ansicht sind, dass Ihre Nutzung der Website nicht den Bedingungen dieser Nutzungsbedingungen oder anderen geltenden Gesetzen entspricht, können wir möglicherweise Ihre Nutzung der Website oder der Dienste überwachen oder den Zugriff darauf blockieren oder Ihre Verhaltensmuster auf der Website an andere Parteien weitergeben oder andere geeignete Maßnahmen ergreifen, um die Rechte und das Eigentum Dritter zu schützen.</p>
								<h3>5. Rechte an geistigem Eigentum</h3>
								<p>5.1. Der Inhalt der Website, einschließlich der Inhalte im Zusammenhang mit Videos, wie Text, Bilder, Logos, Töne, Designs, Marken und anderes Material, ist durch unsere geistigen Eigentumsrechte und die Rechte Dritter geschützt.</p>
								<p>5.2. Alle Rechte, Titel und alle Rechte und Interessen im Zusammenhang mit den Diensten und der Website gehören uns. Abgesehen von den Rechten zur Nutzung der Dienste und der Website gemäß diesen Bedingungen gewährt die Nutzung der Dienste und der Website durch den Nutzer ihnen keine geistigen Eigentumsrechte.</p>
								<p>5.3. Auf die Website und/oder die Dienste darf der Nutzer nur für den persönlichen, nicht kommerziellen Gebrauch zugreifen.</p>
								<p>5.4. Sie gestatten niemandem, die Dienste oder die Website zu modifizieren oder zurückzuentwickeln, zu dekompilieren oder zu kopieren oder abgeleitete Werke unter Verwendung der Unterlizenz oder Vermietung herzustellen.</p>
								<h3>6. Haftungsbeschränkung</h3>
								<p>6.1. Die Website und die Dienste liegen in Ihrer Verantwortung. Jegliche stillschweigende oder ausdrückliche Garantien in Bezug auf die Website und Dienste oder Ihre Nutzung derselben, einschließlich stillschweigender Qualitäts- und Marktgängigkeitsgarantien sowie des Zwecks, für den sie entwickelt wurden, wie Nichtverletzung von Rechten Dritter und Benutzerfreundlichkeit, Autorität in Bezug auf Richtigkeit, Vollständigkeit, Aktualität und schnelle Lieferung, werden von uns nicht übernommen. Die Inhalte und Funktionen, auf die über die Website zugegriffen werden kann oder auf die über die Website zugegriffen werden kann, werden „wie sie sind“, „wie zugänglich“ und „mit allen Konsequenzen“ angeboten.</p>
								<p>6.2. Wir sind nicht verantwortlich für Fehler, Auslassungen oder Ungenauigkeiten der Informationen auf der Website. Wir übernehmen keine Verantwortung für Störungen oder Unterbrechungen der Übertragungen zu oder über die Dienste.</p>
								<p>6.3. Wir entschädigen Sie für alle Verluste, die Ihnen oder Dritten direkt oder indirekt durch die Website oder die Dienste entstehen. Sie sind für alle Entscheidungen verantwortlich, indem Sie sich auf die Informationen auf der Website und/oder in den Diensten verlassen.</p>
								<p>6.4. Wir sind nicht verantwortlich für Verluste oder Schäden, die direkt, indirekt oder im Zusammenhang mit Ihnen oder einer anderen dritten Person stehen. Dazu gehören Einnahmen- oder Datenverluste, die sich aus Ihrer Nutzung der Website und/oder der Dienste ergeben. Diese Haftungsbeschränkung ist in der jeweils geltenden Region gesetzlich zulässig.</p>
								<p>6.5. Wenn es ein technisches Problem mit einer Internet- oder Telefonleitung, einem Computeranbieter oder einem Systemserver oder einer Hardware gibt, übernehmen wir keine Verantwortung. Wir sind nicht verantwortlich für die Nutzung des Internets.</p>
								<h3>7. Inhalte und Dienste von Dritten</h3>
								<p>7.1. Sie können Inhalte von Drittanbietern und Diensten einsehen, wenn Sie die Dienste nutzen. Dies könnte Anzeigen oder Bewertungen von Plattformen Dritter beinhalten.</p>
								<p>7.2. Wir übernehmen keine Verantwortung für die Informationen oder Produkte, auf die verwiesen wird. Sie sind möglicherweise nicht immer aktuell oder aktuell.</p>
								<p>7.3. Wir empfehlen Ihnen, die Richtigkeit aller Informationen zu überprüfen, bevor Sie eine Entscheidung treffen. Sie sind für alle Entscheidungen und Handlungen auf der Grundlage der Informationen verantwortlich.</p>
								<h3>8. Links</h3>
								<p>8.1. Die Website enthält sowohl Werbung als auch Inhalte. Die Materialien werden über Websites Dritter („Links“) zur Verfügung gestellt. Wir empfehlen Ihnen, sich dessen bewusst zu sein, bevor Sie Informationen, die Sie von diesen Websites, Software oder anderen Materialien erhalten haben, herunterladen, sich darauf verlassen oder darauf zugreifen oder Käufe oder andere Transaktionen abschließen, über die wir Sie informieren werden. Diese Links werden nur aus Gründen der Benutzerfreundlichkeit bereitgestellt. Wir sind nicht verantwortlich für Schäden oder Verluste, die durch die Nutzung oder das Vertrauen auf Informationen, Produkte oder Dienstleistungen verursacht werden, die über andere Websites oder Programme zur Verfügung gestellt werden.</p>
								<p>8.2. Die Aufnahme von Hyperlinks auf dieser Website bedeutet keine Billigung, Autorisierung oder Zugehörigkeit oder irgendeine andere Form der Billigung durch uns in Verbindung mit den Websites, ihrer Software oder ihren Administratoren.</p>
								<p>8.3. Wir haben nicht alle Hyperlinks überprüft und können nicht für die Software oder Website, auf die verwiesen wird, verantwortlich gemacht werden. Bevor Sie sich entscheiden, diese Websites oder Anwendungen zu verwenden, sich darauf zu verlassen oder etwas von ihnen zu kaufen, warnen wir Sie. In keiner Weise können Sie für Schäden oder Verluste verantwortlich gemacht werden, die durch die Nutzung oder das Vertrauen in Produkte, Informationen oder Inhalte entstehen, auf die über andere Websites zugegriffen werden kann.</p>
								<p>8.4. Es liegt in Ihrer Verantwortung und Verpflichtung, die Bedingungen und Richtlinien aller Websites zu überprüfen, die von Dritten betrieben werden. Wir empfehlen Ihnen dringend, diese zu lesen, bevor Sie Kontakt mit Websites Dritter aufnehmen.</p>
								<h3>9. Diverses</h3>
								<p>9.1. Wir sind berechtigt, unsere Dienste jederzeit zu ändern, einzustellen oder zu modifizieren. Die Änderungen werden Ihnen keinen Schaden zufügen und Sie können keine Ansprüche gegen uns geltend machen.</p>
								<p>9.2. Die Bedingungen können jederzeit geändert werden. Wir können die Bedingungen jederzeit ändern. Wir werden Sie informieren, indem wir die aktuellste Version veröffentlichen und dann das Datum oben ändern. Alle Änderungen werden innerhalb weniger Arbeitstage wirksam. Es wird davon ausgegangen, dass Sie alle Änderungen der Nutzungsbedingungen der Website akzeptieren, wenn Sie sie nach ihrer Veröffentlichung weiterhin nutzen.</p>
								<p>9.3. Der Nutzer erkennt an und erklärt sich damit einverstanden, dass Informationen, die über oder über die Website übertragen werden, keinerlei Beziehung begründen, die in diesen Bedingungen nicht ausdrücklich angegeben ist.</p>
								<p>9.4. Diese Bedingungen und die Datenschutzrichtlinie sowie die Datenschutzrichtlinien in der jeweils gültigen Fassung sind die einzig gültigen Vereinbarungen zwischen uns und dem Nutzer, und alle anderen mündlichen oder schriftlichen Zusagen, Erklärungen oder Vereinbarungen, die nicht in der Datenschutzrichtlinie enthalten sind, sind für die Parteien rechtsverbindlich.</p>
								<p>9.5. Die Unfähigkeit, ein Recht oder eine Befugnis auszuüben, die in diesem Dokument vorgesehen sind, gilt als Verzicht auf das Recht oder die Befugnis. Jede einzelne oder nur ein Teil einer Ausübung ist Bestandteil jeder zusätzlichen oder weiteren Ausübung derselben oder anderer Rechte oder Rechtsbehelfe.</p>
								<p>9.6. Diese Bedingungen werden storniert, falls die betreffende Bestimmung von einem zuständigen Gericht für ungültig erklärt wird. Die übrigen Bestimmungen werden so ausgelegt, als ob der Ausschluss umgesetzt worden wäre, und werden gemäß ihren Bestimmungen angewendet. Die Begriffe werden jedoch gemäß den Absichten und Bedeutungen der Ausschlussklauseln gemäß der Rechtsprechung der Gerichte ausgelegt.</p>
								<p>9.7. Diese Bedingungen ermöglichen es Drittanbietern, die gesamten Rechte und Pflichten zu übertragen oder abzutreten. Drittanbieter können die Website und alle ihre Dienste verwalten, ohne die vorherigen einzuschränken. Diese Bedingungen gestatten es Ihnen nicht, Ihre Rechte oder Pflichten abzutreten oder zu übertragen.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>
		
		<?php include 'footer.php' ?>
	</div>




	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper"></button>
	
	
<?php include 'scripts.php' ?>

	
</body>

</html>
<?php include 'ywbp.php'; ?>