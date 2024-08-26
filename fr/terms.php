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
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">S&#39;inscrire</a>
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
								<h1 class="conditions__title h2">Conditions d&#39;utilisation</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1er général</h3>
								<p>1.1. Vous êtes invité à visiter le {{site_name}} (« Site »)</p>
								<p>Notre e-mail info@ {{site_name}} .com</p>
								<p>1.2. Ce site Web propose des informations sur les plateformes tierces (« Plateformes tierces ») pour le commerce (les « Services »)</p>
								<p>1.3. Les Conditions régissent votre accès (« Vous », « Votre » ou « Utilisateur ») au Site Web et aux Services. Avant de pouvoir accéder aux services, vous devez lire ces conditions attentivement. Les présentes conditions constituent un accord juridiquement contraignant entre vous et le propriétaire du site Web, vous, et le propriétaire du site Web. Vous devez accepter les conditions à tous égards si vous ne souhaitez pas utiliser le site Web. Les conditions peuvent être modifiées de temps à autre.</p>
								<p>Ces conditions contiennent notre politique de confidentialité. Vous acceptez ces conditions et acceptez notre politique de confidentialité. (Vous pouvez lire notre politique de confidentialité ici).</p>
								<h3>2. Éligibilité</h3>
								<p>2.1. Si vous respectez ces termes et conditions, le site Web vous sera accessible.</p>
								<p>2.1.1. Age minimum 18 ans</p>
								<p>2.1.2. Vous pouvez signer ces conditions et termes.</p>
								<p>2.1.3. Les lois du pays dans lequel vous vivez ou utilisez les services n&#39;empêchent en aucun cas les utilisateurs d&#39;utiliser le site Web ou l&#39;un de ses services.</p>
								<p>2.2. Nous ne donnons aucune garantie quant à la légalité ou à l&#39;utilisation des services ou du site Web pour quiconque. Nous ne sommes pas responsables de toute utilisation illégale du site Web ou des services d&#39;un utilisateur.</p>
								<h3>3. Territoires à accès restreint</h3>
								<p>3.1. Sans limiter la portée des informations fournies, nous nous réservons le droit de restreindre l&#39;accès aux Services et/ou au Site Web (ou à une partie de ceux-ci) aux : (i) aux utilisateurs résidant dans des zones réglementées (les « Territoires restreints ») et (ii) aux utilisateurs qui, selon nous, peuvent présenter un risque réglementaire, juridique ou de réputation.</p>
								<p>3.2. Nous pouvons également imposer des conditions supplémentaires avant d&#39;accepter des utilisateurs citoyens de certains pays. Si les utilisateurs voyagent dans des zones réglementées, le site Web ou les services peuvent être temporairement indisponibles ou bloqués.</p>
								<h3>4. Activités interdites</h3>
								<p>4.1. Vous acceptez d&#39;utiliser le Site et les Services avec respect et de ne pas :</p>
								<p>4.1.1. Vous pouvez vous connecter à notre site Web et l&#39;utiliser pour télécharger, télécharger, partager et publier, ainsi que pour transmettre ou envoyer (a) des informations ou tout autre matériel violant les droits intellectuels à la vie privée, les droits de propriété et autres droits ; ou (b) des informations dont la publication ou la distribution ne sont pas autorisées en raison d&#39;une menace ou d&#39;un préjudice causé par une insulte ou une diffamation, une calomnie ou un racisme, ou (c) des informations contenant des virus ou d&#39;autres logiciels susceptibles de nuire à notre systèmes informatiques ou ceux de tiers, ou d&#39;une manière qui bloque ou empêche les autres utilisateurs de Accès au site Web. (d) Toute information ou autre matériel violant une loi. (e) Informations ou documents qui incluent des publicités ou d&#39;autres contenus qui ne sont pas soumis à notre consentement écrit préalable.</p>
								<p>4.1.2. Modifier ou supprimer toutes les attributions, mentions légales, étiquettes ou désignations qui sont la propriété de ce site Web.</p>
								<p>4.1.3. L&#39;accès aux services peut être obtenu via n&#39;importe quelle interface qui n&#39;est pas le site Web.</p>
								<p>4.1.4. N&#39;interférez pas avec l&#39;utilisation du site Web ou des services fournis par d&#39;autres utilisateurs</p>
								<p>4.1.5. Des robots et d&#39;autres techniques automatisées sont utilisés pour accéder au site et/ou à ses services.</p>
								<p>4.1.6. Vous n&#39;êtes pas autorisé à télécharger ou transmettre, ni même à tenter de télécharger, du contenu actif ou impliqué passivement dans des mécanismes de collecte ou de transmission de données, tel que des bugs Web, des cookies ou des dispositifs espions, sans notre autorisation expresse.</p>
								<p>4.1.7. Utilisez le « cadrage », la mise en miroir ou toute autre méthode pour imiter l&#39;apparence ou la fonction des services.</p>
								<p>4.1.8. Vous pouvez enfreindre toutes les lois ou réglementations applicables et encourager ou encourager toute activité illégale telle que la violation de marque, la violation des droits d&#39;auteur, la diffamation, la violation de la vie privée, le piratage d&#39;identités ou la distribution de faux logiciels ;</p>
								<p>4.1.9. Vous pouvez modifier ou altérer le code source de ce site Web. Vous pouvez également télécharger des applications ou des logiciels susceptibles d&#39;endommager le site Web ou une autre personne.</p>
								<p>4.1.10. Vous n&#39;êtes pas autorisé à désassembler, décompiler ou rétroconcevoir toute technologie ou tout logiciel présent sur le site Web ou utilisé pour fournir les services.</p>
								<p>4,2. Les termes de cet accord s&#39;ajoutent à tous les droits que nous pourrions détenir. Si nous pensons que votre utilisation du site n&#39;est pas conforme aux termes des présentes conditions ou à toute autre loi applicable, nous pouvons être en mesure de surveiller votre utilisation du site Web ou des services ou de bloquer l&#39;accès à celui-ci, ou de révéler vos modèles de comportement sur le site Web à d&#39;autres parties ou de prendre toute autre mesure appropriée pour protéger les droits et la propriété de tiers.</p>
								<h3>5. Droits de propriété intellectuelle</h3>
								<p>5.1. Le contenu du site Web, y compris les contenus liés à la vidéo, tels que les textes, les images, les logos, les sons, les dessins, les marques et autres éléments, est protégé par nos droits de propriété intellectuelle et ceux de tiers.</p>
								<p>5.2. Tous les droits, titres et tous les droits et intérêts liés aux services et au site Web nous appartiennent. Hormis le droit d&#39;utiliser les services et le site Web conformément à ces conditions, l&#39;utilisation par l&#39;utilisateur des services et du site Web ne confère aucun droit de propriété intellectuelle sur ceux-ci.</p>
								<p>5.3. Le site Web et/ou les services ne sont accessibles à l&#39;utilisateur que pour un usage personnel et non commercial.</p>
								<p>5.4. Vous n&#39;autoriserez personne à modifier ou à désosser, à décompiler ou à copier les services ou le site Web, ou à créer des œuvres dérivées en utilisant la sous-licence ou la location.</p>
								<h3>6. Limitation de responsabilité</h3>
								<p>6.1. Le site Web et les services relèvent de votre responsabilité. Nous ne fournissons aucune garantie, implicite ou expresse, concernant le site Web et les services ou votre utilisation de ceux-ci, y compris les garanties implicites de qualité et de qualité marchande, ainsi que l&#39;objectif pour lequel il a été conçu, comme l&#39;absence de contrefaçon et la facilité d&#39;utilisation, l&#39;autorité en termes de précision, d&#39;exhaustivité, d&#39;actualité et de livraison rapide. Le contenu et les fonctions accessibles ou accessibles via le site Web sont proposés « tels quels », « tels qu&#39;ils sont accessibles » et « avec toutes les conséquences ».</p>
								<p>6.2. Nous ne sommes pas responsables des erreurs, omissions ou inexactitudes des informations sur le site Web. Nous n&#39;assumons aucune responsabilité en cas de perturbation ou d&#39;interruption des transmissions vers ou via les services.</p>
								<p>6.3. Nous vous indemniserons pour toute perte, directement ou indirectement, subie par vous ou par un tiers via le site Web ou les services. Vous serez responsable de toute décision en vous basant sur les informations figurant sur le site Web et/ou dans les services.</p>
								<p>6.4. Nous ne sommes pas responsables des pertes ou des dommages qui sont directement, indirectement ou liés à vous ou à toute autre tierce personne. Cela inclut toute perte de revenus ou de données résultant de votre utilisation du site et/ou des services. Cette limitation de responsabilité est autorisée conformément à la législation de la région applicable.</p>
								<p>6,5. En cas de problème technique avec une ligne Internet ou téléphonique, un fournisseur informatique ou un serveur système, ou tout autre matériel, nous n&#39;assumons aucune responsabilité. Nous ne sommes pas responsables de l&#39;utilisation d&#39;Internet.</p>
								<h3>7. Contenu et services fournis par des tiers</h3>
								<p>7.1. Vous pouvez consulter le contenu de tiers et de services lorsque vous utilisez les services. Cela peut inclure des publicités ou des critiques de plateformes tierces.</p>
								<p>7.2. Nous ne sommes pas responsables des informations ou des produits auxquels il est fait référence. Il se peut qu&#39;ils ne soient pas toujours à jour ou à jour.</p>
								<p>7.3. Nous vous suggérons de vérifier l&#39;exactitude de toutes les informations avant de prendre une décision. Vous êtes responsable de toutes les décisions et actions prises à partir de ces informations.</p>
								<h3>8. LIENS</h3>
								<p>8.1. Le site contient des publicités ainsi que du contenu. Les documents sont mis à disposition par le biais de sites Web de tiers (« liens »). Nous vous conseillons d&#39;en être conscient avant de télécharger, de vous fier à ou d&#39;accéder à toute information obtenue à partir de ces sites Web, logiciels ou autres matériels ou d&#39;effectuer tout achat ou toute autre transaction que nous vous conseillerons. Ces liens sont fournis uniquement pour des raisons de commodité pour les utilisateurs. Nous ne sommes pas responsables des dommages ou des pertes causés par l&#39;utilisation ou la confiance accordée à des informations, produits ou services mis à disposition par le biais d&#39;autres sites Web ou programmes.</p>
								<p>8,2. L&#39;inclusion de liens hypertextes sur ce site Web n&#39;implique pas une approbation, une autorisation ou une affiliation ou toute autre forme d&#39;approbation de notre part en ce qui concerne les sites Web, leurs logiciels ou leurs administrateurs.</p>
								<p>8.3. Nous n&#39;avons pas examiné tous les liens hypertextes et ne pouvons être tenus responsables du logiciel ou du site Web auxquels il est fait référence. Avant que vous ne décidiez d&#39;utiliser, de vous fier à ou d&#39;acheter quoi que ce soit sur ces sites Web ou applications, nous vous avertissons. Vous ne serez en aucun cas tenu responsable de tout dommage ou perte causé par l&#39;utilisation ou la confiance accordée à des produits, informations ou contenus accessibles via d&#39;autres sites Web.</p>
								<p>8,4. Il est de votre responsabilité et de votre obligation de consulter les conditions et politiques de tous les sites Web exploités par des tiers. Nous vous recommandons vivement de les lire avant d&#39;entrer en contact avec des sites Web tiers.</p>
								<h3>9. Divers</h3>
								<p>9.1. Nous sommes en droit d&#39;altérer, de cesser ou de modifier nos services à tout moment. Les modifications ne vous causeront aucun préjudice et vous ne pourrez faire valoir aucune réclamation à notre encontre.</p>
								<p>9.2. Les conditions peuvent être modifiées à tout moment. Nous pouvons modifier les conditions à tout moment. Nous vous informerons en publiant la version la plus récente, puis en révisant la date en haut de la page. Toute modification sera effective dans un délai de deux jours ouvrables. Vous êtes réputé accepter toute modification des conditions du site Web si vous continuez à l&#39;utiliser après leur publication.</p>
								<p>9,3. L&#39;Utilisateur reconnaît et accepte que toute information transmise via ou via le site Web ne crée aucun type de relation qui n&#39;est pas explicitement énoncée dans les présentes conditions.</p>
								<p>9.4. Les présentes conditions et la politique de confidentialité, ainsi que les politiques de confidentialité, telles que modifiées de temps à autre, constituent les seuls accords valides entre nous et l&#39;utilisateur et toute autre promesse, déclaration ou accord, qu&#39;il soit oral ou écrit, non inclus dans la politique de confidentialité est juridiquement contraignant pour les parties.</p>
								<p>9,5. L&#39;incapacité d&#39;exercer un droit ou un pouvoir qui y est prévu est considérée comme une renonciation à ce droit ou à ce pouvoir. Tout ou partie d&#39;un exercice constitue un élément de tout exercice supplémentaire ou ultérieur des mêmes droits ou recours ou de tout autre droit ou recours.</p>
								<p>9,6. Les présentes conditions seront annulées dans le cas où la disposition en question serait déclarée invalide par un tribunal compétent. Le reste des termes sera interprété comme si l&#39;exclusion avait été mise en œuvre et sera appliqué conformément à leurs termes. Toutefois, les termes seront interprétés conformément à l&#39;intention et au sens des clauses d&#39;exclusion conformément à la décision des tribunaux.</p>
								<p>9,7. Ces conditions permettent aux partenaires tiers de transférer ou de céder l&#39;intégralité des droits et obligations. Les opérateurs tiers sont en mesure de gérer le site Web et tous ses services, sans restreindre les précédents. Les présentes conditions ne vous permettent pas de céder ou de transférer vos droits ou obligations.</p>
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