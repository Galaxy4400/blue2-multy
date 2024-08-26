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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Accueil</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plateforme</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Avantages</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Notre équipe</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Nous contacter</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">S&#39;inscrire</a>
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
								<h1 class="policy__title h2">Politique de confidentialité</h1>
								<p class="policy__date">Dernière mise à jour : 30/9/22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>Nous (également appelés « nous » ou « Nos ») nous engageons à protéger vos données personnelles ainsi que votre vie privée.</p>
								<p>Cette politique de confidentialité a été conçue pour vous informer de la manière dont nous collectons et stockons les informations que vous fournissez via le site Web {{site_name}} (le « site Web »).</p>
								<p>Ces principes seront défendus :</p>
								<ul>
									<li>Pour être transparent en ce qui concerne le traitement et la collecte des informations personnelles vous concernant :</li>
								</ul>
								<p>Nous aimerions que vous soyez en mesure de faire des choix éclairés concernant l&#39;utilisation et le traitement des données personnelles. C&#39;est la raison pour laquelle nous avons créé notre site Web. Pour ce faire, nous utilisons différentes méthodes et procédures pour vous fournir des informations pertinentes sur l&#39;utilisation des données personnelles.</p>
								<p>Si nous pensons que vous avez besoin de détails spécifiques, nous vous fournirons des informations à la date et à l&#39;heure appropriées.</p>
								<p>Nous serons heureux de répondre à toutes vos questions et de vous fournir les éclaircissements dont vous pourriez avoir besoin en ce qui concerne les limites imposées par la loi. Vous pouvez nous contacter par e-mail à l&#39;adresse ci-dessous : info@ {{site_name}} .com</p>
								<ul>
									<li>Les données personnelles ne seront utilisées qu&#39;aux fins spécifiées dans la politique.</li>
								</ul>
								<p>Nous pouvons traiter les données personnelles à diverses fins, notamment pour vous proposer le site Web et vous connecter à des plateformes commerciales tierces (les « Services ») et pour améliorer le site, protéger nos droits et nos intérêts, faciliter la maintenance et la fourniture des services, répondre à toutes les obligations réglementaires ou légales et mener des activités administratives et commerciales afin de faciliter la fourniture et l&#39;utilisation des services.</p>
								<p>Les données personnelles sont également traitées par nos soins afin de mieux comprendre vos préférences et vos besoins.</p>
								<ul>
									<li>Pour utiliser des outils importants pour protéger vos droits en matière de données personnelles :</li>
								</ul>
								<p>Afin de permettre l&#39;exercice de vos droits, nous disposons de ressources importantes. Contactez-nous à tout moment pour demander des données personnelles concernant vos données personnelles. Nous le modifierons ou le supprimerons, cesserons de l&#39;utiliser à des fins spécifiques ou à des fins générales. Transférez les informations à vous-même ou à un tiers. Nous serons en mesure de répondre à vos demandes.</p>
								<ul>
									<li>Sécurisez vos données personnelles :</li>
								</ul>
								<p>Bien que nous ne puissions garantir une sécurité totale de vos données personnelles, nous pouvons garantir que nous continuerons à utiliser diverses méthodes et techniques pour garantir la protection de vos données personnelles.</p>
								<p>Notre politique de confidentialité et de sécurité est complète.</p>
								<h3>1. La lunette ?</h3>
								<p>Cette politique décrit le type de données personnelles que l&#39;entreprise collecte sur des personnes physiques et la manière dont elle les traite, les partage avec des tiers, sécurise les processus, etc.</p>
								<p>La présente Politique concerne les informations relatives à une personne physique identifiée ou identifiable. Une personne physique identifiable peut être définie comme une personne directement identifiable ou une combinaison d&#39;informations supplémentaires dont nous disposons ou pouvons accéder.</p>
								<p>La Politique définit le « traitement » comme un processus qui nécessite l&#39;utilisation ou la collecte de données personnelles. Cela inclut la gestion, la structuration et le stockage des données personnelles.</p>
								<p>Nos services sont destinés à être utilisés par le grand public et ne sont pas conçus pour être utilisés par des personnes de moins de 18 ans. Nous ne recherchons ni ne collectons sciemment d&#39;informations auprès de personnes de moins de 18 ans. Nous n&#39;autorisons pas sciemment ces personnes à utiliser nos services. Nous effacerons toutes les informations que nous découvrons sur les enfants le plus rapidement possible si nous en prenons connaissance.</p>
								<h3>2. Quelles sont les données personnelles que nous détenons à votre sujet ?</h3>
								<p>Si vous accédez au service et aux chaînes, ou si vous visitez notre site Web, nous collectons des données personnelles. Nous pouvons demander vos données personnelles dans certains cas. Dans d&#39;autres cas, nous collectons vos données personnelles en analysant et en analysant l&#39;utilisation de nos services ou de nos canaux de service ou en recevant vos informations de la part de nos partenaires tiers.</p>
								<h3>3. Il n&#39;y a aucune obligation de divulguer des informations personnelles à l&#39;entreprise et ses conséquences.</h3>
								<p>Cependant, vous n&#39;êtes pas obligé de nous fournir des données personnelles. Dans certaines circonstances, il se peut toutefois que vous n&#39;ayez pas à nous fournir de données personnelles. Cela pourrait nous empêcher d&#39;offrir les services ou empêcher les utilisateurs d&#39;accéder au site Web.</p>
								<h3>4. Quels types de données personnelles sommes-nous en mesure de recueillir ? Lorsque vous visitez notre site Web, nous collectons les informations personnelles suivantes :</h3>
								<p>Cela inclut des informations sur votre journal d&#39;activité en ligne, des données sur votre trafic (y compris votre adresse IP, la date d&#39;accès, l&#39;heure d&#39;accès et la date d&#39;accès), la langue que vous avez utilisée, les journaux des pannes logicielles, le type de navigateur utilisé, ainsi que des informations concernant l&#39;appareil que vous avez utilisé. Les informations que vous collectez ne sont pas des informations privées et ne peuvent pas être utilisées pour vous identifier.</p>
								<p>Données personnelles que nous recevons de votre part : toutes les données personnelles que vous nous fournissez de votre propre choix lorsque vous vous connectez à la plateforme de trading en ligne d&#39;un tiers par notre intermédiaire.</p>
								<p>Informations personnelles que vous fournissez spécifiquement à des plateformes tierces pour faciliter le commerce : ces informations contiennent votre nom complet, votre adresse, votre numéro de téléphone et votre adresse e-mail.</p>
								<h3>5. La base légale et les raisons du traitement des données personnelles</h3>
								<p>Vos données personnelles sont traitées par la société aux fins décrites dans cette section, et conformément à la base légale qui lui est applicable.</p>
								<p>Sans base légale, la société n&#39;est pas en mesure d&#39;utiliser les données personnelles vous concernant. Les fondements juridiques sur lesquels l&#39;entreprise peut se fonder pour traiter les données personnelles vous concernant :</p>
								<ul class="small">
									<li>Vous avez donné votre consentement au traitement de vos données personnelles pour une ou plusieurs raisons. C&#39;est le cas lorsque vous soumettez des informations personnelles via le site Web afin que nous puissions les transférer vers une plateforme de trading tierce.</li>
									<li>La Société ou un tiers peut avoir besoin d&#39;un traitement afin de répondre à ses intérêts légitimes. Par exemple, cela est nécessaire pour améliorer nos services ou pour défendre des actions en justice.</li>
									<li>Le traitement doit répondre à une obligation légale.</li>
								</ul>
								<p>Contactez-nous par e-mail pour plus de détails concernant le traitement nécessaire à la sauvegarde des intérêts légitimes.</p>
								<p>Vous trouverez ci-dessous une liste des raisons et des fondements juridiques pour lesquels nous pouvons utiliser les informations que vous nous fournissez. Données personnelles.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Portée</div>
										<div class="table-1__header-column">Base légale</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>Pour fournir vos informations personnelles à des tiers à votre demande afin d&#39;accéder au commerce numérique</p>
												<p>Si vous le demandez, nous pouvons vous demander des données personnelles pour les transmettre à des sociétés tierces.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Vous avez donné votre consentement au traitement de vos données personnelles pour une ou plusieurs raisons.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Pour répondre à vos demandes, questions ou préoccupations, les données personnelles sont nécessaires pour vous aider à répondre à toutes les questions que vous pourriez avoir concernant les services.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Les intérêts légitimes de l&#39;entreprise ou ceux d&#39;un tiers doivent être traités.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>Pour répondre à toute obligation légale ou administrative, judiciaire ou légale ou judiciaire, les données personnelles sont traitées pour répondre aux exigences légales.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Pour garantir le respect des obligations légales, le traitement est nécessaire.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>Pour améliorer nos services, nous pouvons utiliser les données personnelles pour améliorer nos services. Cela inclut, entre autres, tous les rapports de pannes ou de dysfonctionnements que nous collectons en relation avec les services.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Les intérêts légitimes de l&#39;entreprise ou ceux d&#39;un tiers doivent être traités.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Pour mettre fin à la fraude et à l&#39;utilisation abusive de nos services</p>
											</div>
										</div>
										<div class="table-1__column">
											Les intérêts légitimes de l&#39;entreprise ou ceux d&#39;un tiers doivent être traités.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>Pour effectuer et gérer des actions conformes aux exigences de nos services, ces activités incluent les fonctions de back-office, les activités de développement commercial, la prise de décisions stratégiques, les mécanismes de supervision, etc.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Les intérêts légitimes de l&#39;entreprise ou ceux d&#39;un tiers doivent être traités.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>Pour effectuer des analyses, telles que des analyses statistiques afin de prendre des décisions sur différentes questions, nous utilisons différentes techniques analytiques (y compris celles qui sont statistiques).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Les intérêts légitimes de l&#39;entreprise ou ceux d&#39;un tiers doivent être traités.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Pour protéger nos actifs, droits et intérêts ainsi que ceux de tiers, nous avons développé le HTML0 pour établir et défendre les réclamations légales. Les données personnelles peuvent être traitées par nous afin de protéger nos droits, intérêts et actifs, ou ceux de tiers, conformément à toutes les lois, réglementations ou accords applicables et à toutes les conditions, conditions ou politiques.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Les intérêts légitimes de l&#39;entreprise ou ceux d&#39;un tiers doivent être traités.</p>
										</div>
									</div>
								</div>

								<h3>6. Transfert de données personnelles à des tiers</h3>
								<p>La société peut également fournir des données personnelles à des sociétés tierces qui nous proposent des services tels que les fournisseurs d&#39;hébergement et de stockage, les informations sur les adresses IP, ainsi que l&#39;analyse de l&#39;expérience des utilisateurs.</p>
								<p>Vous pouvez également nous demander de communiquer des données personnelles spécifiques vous concernant à des plateformes de trading tierces. Nous communiquerons les données personnelles que vous nous fournissez dans ces cas à des plateformes de trading de tiers. L&#39;utilisation de vos données personnelles est soumise à leurs politiques de confidentialité. Vos données personnelles peuvent être partagées avec plusieurs plateformes de trading.</p>
								<p>La Société pourrait être en mesure de partager des données personnelles avec des entités connexes ou des partenaires commerciaux. Cela peut fournir à l&#39;entreprise les ressources nécessaires pour lui permettre d&#39;améliorer et d&#39;améliorer les produits et services qu&#39;elle fournit à ses clients.</p>
								<p>En cas de nécessité de protéger les droits de tiers ou les actifs, la Société est autorisée à divulguer des données personnelles aux autorités réglementaires, locales ou autres autorités officielles.</p>
								<p>Nous pouvons également partager des données personnelles vous concernant avec des investisseurs ou des acheteurs potentiels, ou avec des prêteurs de la société ou de toute autre société du groupe de sociétés dans le cas où la même transaction aurait lieu (y compris le transfert ou la vente d&#39;actifs appartenant à la société ou à toute autre société du groupe) ou dans le cadre de toute fusion ou restructuration, consolidation ou faillite de la société ou de toute autre activité au sein du groupe.</p>
								<h3>7. Cookies et services de tiers</h3>
								<p>Des services tiers, tels que ceux qui proposent des publicités sur notre site Web ou des sociétés d&#39;analyse, peuvent être utilisés. Ces entreprises peuvent également utiliser des cookies ou d&#39;autres technologies.</p>
								<p>Les cookies sont de petits fichiers texte placés sur votre appareil chaque fois que vous visitez ou accédez au site Web. Les cookies sont utilisés pour recueillir des informations sur vos préférences et vos habitudes de navigation afin d&#39;améliorer votre expérience utilisateur, de suivre vos préférences et de personnaliser les produits et services dont vous pourriez bénéficier. Les cookies sont également utilisés à des fins statistiques et analytiques.</p>
								<p>Certains cookies que nous pouvons utiliser sont des cookies de session. Ils sont temporairement téléchargés sur votre appareil et ne dureront que pendant une courte période avant la fermeture de votre navigateur. Les autres cookies sont persistants. Les cookies persistants restent sur votre appareil pendant un certain temps après la fermeture de votre navigateur. Ils sont utilisés pour aider le site Web à vous identifier en tant qu&#39;utilisateur de retour et à permettre aux utilisateurs de revenir sur le site Web.</p>
								<h3>Types de cookies :</h3>
								<p>Nous pouvons les utiliser en fonction de leur objectif :</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Le type de cookie</div>
											<div class="table-2__text">
												<p>Les cookies sont absolument nécessaires</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Portée</div>
											<div class="table-2__text">
												<p>Ces cookies sont nécessaires pour que vous puissiez accéder aux fonctionnalités que vous avez demandées et pour naviguer sur notre site Web. Les cookies sont utilisés pour fournir les informations, les produits et les services que vous nous avez demandés.</p>
												<p>Ils sont nécessaires pour que votre appareil puisse télécharger et diffuser des données. Cela vous permet de naviguer sur le site Web, d&#39;utiliser ses fonctionnalités, puis de revenir aux pages que vous avez consultées précédemment.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Informations supplémentaires</div>
											<div class="table-2__text">
												<p>Les cookies collectent des données personnelles, telles que votre nom d&#39;utilisateur, ainsi que la dernière date de connexion pour confirmer que vous êtes connecté au site.</p>
												<p>Ils sont effacés dès que vous fermez votre navigateur Web (cookies de session).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Le type de cookie</div>
											<div class="table-2__text">
												<p>Cookies de fonctionnalité</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Portée</div>
											<div class="table-2__text">
												<p>Les cookies nous permettent de vous reconnaître chaque fois que vous visitez notre site et également d&#39;enregistrer vos préférences et préférences.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Informations supplémentaires</div>
											<div class="table-2__text">
												<p>Ils durent jusqu&#39;à leur date d&#39;expiration et sont enregistrés même après la fermeture du navigateur.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Le type de cookie</div>
											<div class="table-2__text">
												<p>Cookies pour la performance</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Portée</div>
											<div class="table-2__text">
												<p>Les cookies sont utilisés pour recueillir des données statistiques sur les performances du site ainsi que pour aider à l&#39;améliorer. Ils nous permettent également d&#39;effectuer des analyses sur notre site Web.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Informations supplémentaires</div>
											<div class="table-2__text">
												<p>Les cookies stockent des données anonymes qui ne sont associées à aucune personne physique identifiable ou identifiée.</p>
												<p>Ils peuvent être supprimés lorsque vous quittez votre navigateur. Les autres cookies ont une validité illimitée.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Les cookies sont bloqués ou supprimés</p>
								<p>Pour empêcher ou supprimer les cookies, vous devez modifier les paramètres de votre navigateur. Vous trouverez ci-dessous des liens qui vous aideront dans la procédure à suivre pour certains des navigateurs les plus connus.</p>
								<ul class="small">
									<li>firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Sachez toutefois que certaines fonctions et fonctionnalités du site Web peuvent ne pas fonctionner comme vous le souhaitez dans ce cas.</p>
								<h3>AVIS DE SUIVI EN LIGNE <br> Ce service ne prend actuellement pas en charge les signaux « Ne pas suivre ». <br>8. La conservation des données personnelles vous concernant</h3>
								<p>La Société souhaite conserver les données personnelles vous concernant aussi longtemps que nécessaire pour atteindre l&#39;objectif du traitement des données personnelles, tel que décrit dans la présente politique ou pendant des périodes plus longues, conformément à la loi ou à la réglementation, aux politiques et aux commandes applicables.</p>
								<p>Nous partagerons vos informations avec les plateformes de trading de tiers pendant une période de 12 mois. Si vous êtes d&#39;accord, nous continuerons à partager vos données pendant encore 12 mois.</p>
								<p>Nous révisons régulièrement les données personnelles que nous avons conservées pour nous assurer qu&#39;elles ne sont plus nécessaires.</p>
								<h3>9. Transferts d&#39;informations personnelles vers un pays tiers ou vers une organisation internationale</h3>
								<p>Vos informations personnelles peuvent être transférées vers d&#39;autres pays (c&#39;est-à-dire que vos données personnelles peuvent être transmises vers un pays tiers (c&#39;est-à-dire un pays supplémentaire autre que celui dans lequel vous résidez) ou vers des organisations internationales. Organisations ou juridictions internationales. La société prend toutes les mesures nécessaires pour protéger les données personnelles que vous fournissez et garantir que les utilisateurs des données ont la capacité de faire valoir leurs droits et d&#39;accéder à des recours juridiques efficaces.</p>
								<p>Ces protections et garanties sont accessibles à tous ceux qui résident dans l&#39;EEE (Espace économique européen).</p>
								<ul class="small">
									<li>Transfert vers un pays tiers ou une organisation internationale dont la Commission européenne a déterminé qu&#39;il assure une sécurité adéquate des données personnelles qui lui sont transférées conformément à l&#39;article 45, paragraphe 3, du règlement 2016/679 du Parlement européen et du Conseil du 27 avril 2016. (le « RGPD »)</li>
									<li>Le transfert est effectué conformément à un accord juridiquement contraignant, juridiquement contraignant et exécutoire entre des entités ou des autorités publiques conformément à l&#39;article 46, paragraphe 2, point a).</li>
									<li>Le transfert a été effectué conformément aux clauses communes de protection des données adoptées par la Commission européenne en vertu de l&#39;article 46 (2) (c) du RGPD. Les clauses adoptées par la Commission européenne peuvent être consultées à l&#39;adresse https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>La Société peut fournir des informations sur les mesures de sécurité qu&#39;elle utilise pour protéger vos données personnelles transférées vers des pays tiers ou des organisations internationales. Envoyez un e-mail à l&#39;adresse suivante : info@wealthwaydigital.uk</p>
								<h3>10. Sécurité des données personnelles</h3>
								<p>Nous avons pris les précautions organisationnelles et techniques appropriées pour protéger les données personnelles. Cela inclut la prévention de la destruction, de la perte ou de la modification accidentelles ou illégales des données personnelles.</p>
								<p>Nous ne pouvons pas garantir que la sécurité de vos données personnelles sera maintenue sans erreur. Nous ne pouvons pas non plus être tenus responsables des dommages immatériels, accessoires ou consécutifs résultant de l&#39;utilisation ou de la divulgation de données personnelles. Cela inclut toutefois la divulgation de données personnelles en raison d&#39;erreurs de transmission, d&#39;un accès non autorisé par un tiers ou de toute autre cause indépendante de notre volonté.</p>
								<p>En cas d&#39;obligations légales ou d&#39;autres obligations indépendantes de notre volonté, nous pouvons être tenus de fournir des données personnelles vous concernant à des tiers, tels que les autorités publiques. Nous ne pouvons pas contrôler la sécurité accordée à vos données personnelles par des tiers dans ces situations.</p>
								<p>Les données personnelles ne peuvent pas être transférées sur le Web de manière totalement sûre. La Société ne peut garantir la sécurité des données personnelles que vous nous transmettez via Internet.</p>
								<h3>11. Hyperliens vers des sites Web appartenant à des sites Web de tiers</h3>
								<p>Des liens vers des sites et des applications de tiers sont fournis sur le site Web. Ces applications et sites Web ne sont pas placés sous la supervision de l&#39;entreprise. Nous ne sommes pas responsables de la collecte ou du traitement des données personnelles par ces sites Web ou applications. La présente Politique ne s&#39;applique pas aux actions entreprises par le biais de tels sites ou applications.</p>
								<p>Lorsque vous accédez à l&#39;un des sites Web ou applications tiers, nous vous recommandons de lire leurs politiques de confidentialité avant de décider d&#39;accéder à leurs applications ou de les utiliser. Nous vous suggérons également de leur fournir des données personnelles.</p>
								<h3>12. Modifications apportées à cette politique</h3>
								<p>La présente Politique est susceptible d&#39;être modifiée à tout moment. Si nous modifions cette politique, nous vous en informerons en publiant la politique mise à jour sur notre site Web. En outre, lorsque nous apporterons des modifications importantes à cette politique, nous essaierons de vous informer en utilisant les méthodes que nous jugeons appropriées et publierons une annonce sur notre site Web. Toute modification, sauf indication explicite, entrera en vigueur après la publication de la politique révisée.</p>
								<h3>13. Vos droits en ce qui concerne vos informations personnelles</h3>
								<p>Vous avez le droit de nous demander de vérifier l&#39;exactitude des données personnelles collectées vous concernant, de rectifier toute erreur et de supprimer toutes les données personnelles dont nous n&#39;avons pas besoin. Vous pouvez également limiter la portée des types de traitement des informations personnelles.</p>
								<p>Si vous résidez dans un pays de l&#39;EEE, veuillez consulter cette page :</p>
								<p>Ces droits vous sont accessibles en ce qui concerne les informations que vous fournissez concernant vos données personnelles. Vous pouvez demander à exercer vos droits en écrivant un e-mail à l&#39;adresse ci-dessous.</p>
								<p>Droits d&#39;accès</p>
								<p>La Société est en mesure de vérifier l&#39;exactitude des données personnelles vous concernant qui sont traitées. Si tel est le cas, vous pouvez accéder à vos données personnelles.</p>
								<p>La Société souhaite fournir une copie électronique des données personnelles en cours de traitement et pourrait facturer des frais raisonnables pour toute copie supplémentaire. Les données seront mises à disposition par voie électronique, si vous le demandez.</p>
								<p>Le droit d&#39;accès aux données personnelles ne doit pas être en conflit avec les droits et libertés d&#39;autrui. Si la demande porte atteinte aux droits et libertés d&#39;autrui ou à ses droits, l&#39;entreprise peut refuser de donner suite à la demande ou limiter sa capacité à y répondre.</p>
								<p>Droit de rectification</p>
								<p>La Société a le droit de rectifier les données personnelles inexactes. Vous avez le droit d&#39;exiger que les données personnelles insuffisantes vous concernant soient rectifiées, en tenant compte de la raison du traitement.</p>
								<p>Droit à l&#39;effacement</p>
								<p>Les raisons suivantes sont applicables : (a) Les données personnelles ne sont plus nécessaires aux fins pour lesquelles elles ont été collectées ou traitées ; (b) Vous retirez votre consentement et il n&#39;existe aucune base légale pour le traitement ; (c) Vous vous opposez à tout moment, pour une raison spécifique à votre situation, à ce que le traitement des données personnelles vous concernant soit fondé sur des intérêts légitimes poursuivis par nous ou par un tiers ; (e) Les données personnelles sont traitées illégalement ou f) Les données personnelles doivent être supprimées pour répondre à l&#39;obligation légale de l&#39;entreprise.</p>
								<p>Ce droit n&#39;est pas applicable dans le cas où le traitement est nécessaire (a) pour remplir une obligation légale qui doit être traitée en vertu du droit de l&#39;Union européenne ou du droit des États membres ; ou (b) pour créer, exercer ou défendre des droits légaux.</p>
								<p>Restrictions de traitement</p>
								<p>Si vous êtes préoccupé par l&#39;exactitude de vos données personnelles, vous pouvez demander à l&#39;entreprise de limiter le traitement de vos données personnelles.</p>
								<p>Si vous demandez que les données personnelles soient limitées, les données personnelles ne peuvent être conservées que si vous donnez votre consentement ou afin de créer, d&#39;exercer ou de défendre des droits légaux, ou pour défendre les droits d&#39;une autre personne physique, ou pour une raison d&#39;intérêt public significatif au sein de l&#39;Union européenne ou d&#39;un État membre.</p>
								<p>Droit à la portabilité des données</p>
								<p>Si le processus est effectué par un système automatisé et est basé sur un consentement ou un contrat que vous êtes impliqué dans le contrat, vous avez le droit légal et le droit de consulter les données personnelles que vous avez communiquées à l&#39;entreprise.</p>
								<p>Vous avez le droit de demander que vos données personnelles soient transférées directement de l&#39;entreprise à un autre responsable du traitement, si cela est techniquement possible. Les droits dont vous disposez en vertu du droit d&#39;effacement ne changent pas en raison de l&#39;exercice de votre droit à la portabilité des données. Le droit de transférer des données ne porte pas atteinte aux droits ou libertés de quiconque.</p>
								<p>Droit de contestation</p>
								<p>Le droit de s&#39;opposer à toute utilisation des données personnelles vous concernant fondée sur des intérêts légitimes poursuivis par l&#39;entreprise ou par un tiers est disponible à tout moment. Cela ne se limite pas au profilage basé uniquement sur ces intérêts légitimes. Si nous sommes en mesure d&#39;établir des motifs légitimes et impérieux pour le traitement des données personnelles, nous ne serons pas en mesure de continuer à le faire à moins que vous ne puissiez prouver qu&#39;ils l&#39;emportent sur vos droits, libertés ou intérêts, ou sur l&#39;exercice, l&#39;établissement ou la défense de droits légaux.</p>
								<p>En ce qui concerne le marketing direct, vous avez le droit de vous opposer à tout moment au traitement des données personnelles vous concernant.</p>
								<p>Droit de refuser son consentement</p>
								<p>Vous pouvez révoquer à tout moment votre consentement au traitement des données personnelles vous concernant. Cela ne modifiera pas la légalité et la licéité de tout traitement qui dépendait de votre consentement avant la suppression.</p>
								<p>Vous avez le droit de déposer une plainte auprès de l&#39;autorité qui vous supervise.</p>
								<p>Vous pouvez introduire un recours auprès d&#39;une autorité de contrôle mise en place par un État membre pour protéger les droits fondamentaux des personnes en ce qui concerne le traitement des données personnelles au sein de l&#39;Union européenne.</p>
								<p>Les lois de l&#39;Union européenne et des États membres peuvent limiter vos droits en ce qui concerne les données personnelles vous concernant, comme détaillé dans cette section 13.</p>
								<p>Nous vous fournirons les informations demandées conformément aux droits dont vous disposez en vertu de la section 13 de cet accord dans le mois suivant la réception de votre demande. Le délai peut être prolongé jusqu&#39;à deux mois, si nécessaire, en fonction de la nature de la demande et du nombre de demandes. Dans le mois suivant la réception de votre demande, nous vous informerons de toute prolongation, ainsi que des raisons.</p>
								<p>Tant que cela n&#39;est pas contraire aux dispositions de l&#39;article 13 de la loi, les informations que vous demandez conformément à vos droits en vertu de l&#39;article 13 seront mises à disposition gratuitement. Si la demande n&#39;est pas justifiée ou excessive, en particulier si elle est répétée, nous pouvons facturer un montant raisonnable pour couvrir les frais administratifs liés à la fourniture des informations ou à l&#39;annonce de l&#39;action demandée. Il se peut également que nous n&#39;agissions pas.</p>
								<p>Si nous avons des doutes quant à l&#39;identité de la personne réelle qui a soumis votre demande Si nous avons des doutes quant à l&#39;identité de la personne qui fait la demande, l&#39;entreprise peut demander des informations supplémentaires.</p>
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