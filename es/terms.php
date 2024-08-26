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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Inicio</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plataforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Beneficios</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">¿Nuestro equipo</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Póngase en contacto con nosotros</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Registrarse</a>
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
								<h1 class="conditions__title h2">Condiciones de uso</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>Primera general</h3>
								<p>1.1. Estás invitado a visitar el {{site_name}} («Sitio»)</p>
								<p>Nuestro correo electrónico info@ {{site_name}} .com</p>
								<p>1.2. Este sitio web ofrece información sobre plataformas de terceros («Plataformas de terceros») para comerciar (los «Servicios»)</p>
								<p>1.3. Los Términos regulan su acceso («usted», «su» o «usuario») al sitio web y los servicios. Antes de poder acceder a los servicios, debe leer estos términos detenidamente. Estos términos son un acuerdo legalmente vinculante entre usted y el propietario del sitio web, usted y el propietario del sitio web. Debe aceptar los términos en todos los aspectos si no desea utilizar el sitio web. Los términos pueden modificarse de vez en cuando.</p>
								<p>Estos términos contienen nuestra política de privacidad. Aceptas estos términos y aceptas nuestra política de privacidad. (Puede leer nuestra política de privacidad aquí).</p>
								<h3>2. Elegibilidad</h3>
								<p>2.1. Si cumple con estos términos y condiciones, podrá acceder al sitio web.</p>
								<p>2.1.1. Edad mínima 18 años</p>
								<p>2.1.2. Puede firmar estas condiciones y términos.</p>
								<p>2.1.3. Las leyes del país en el que vive o utiliza los servicios no impiden en modo alguno a los usuarios utilizar el sitio web o cualquiera de sus servicios.</p>
								<p>2.2. No ofrecemos ninguna garantía sobre la legalidad o el uso de los servicios o el sitio web para ninguna persona. No somos responsables del uso ilegal del sitio web o de los servicios de ningún usuario.</p>
								<h3>3. Territorios con acceso restringido</h3>
								<p>3.1. Sin limitar el alcance de la información proporcionada, nos reservamos el derecho de restringir el acceso a los Servicios o al Sitio web (o a cualquier parte de ellos) a: (i) los usuarios que residan en áreas restringidas (los «Territorios restringidos») y (ii) los usuarios que consideremos que pueden representar un riesgo regulatorio, legal o para la reputación.</p>
								<p>3.2. También podemos imponer condiciones adicionales antes de aceptar usuarios que sean ciudadanos de o de ciertos países. Si los usuarios viajan a áreas restringidas, es posible que el sitio web o los servicios no estén disponibles o estén bloqueados temporalmente.</p>
								<h3>4. Actividades prohibidas</h3>
								<p>4.1. Usted acepta utilizar el Sitio y los Servicios con respeto y no:</p>
								<p>4.1.1. Puede conectarse a nuestro sitio web y usarlo para descargar, cargar, compartir y publicar, así como para transmitir o enviar (a) información u otro material que viole los derechos intelectuales a la privacidad, los derechos de propiedad y otros derechos; o (b) información cuya publicación o distribución no esté permitida debido a una amenaza o lesión causada por insultos o difamación, calumnia o racismo, o (c) información que incluya virus u otro software que pueda dañar nuestros sistemas informáticos o los de terceros, o de una manera que bloquee o restrinja a otros usuarios Acceder al sitio web. (d) Cualquier información u otro material que infrinja cualquier ley. (e) Información o materiales que incluyan anuncios u otro contenido que no estén sujetos a nuestro consentimiento previo por escrito.</p>
								<p>4.1.2. Modifique o elimine cualquier atribución, aviso legal, etiqueta o designación que sea propiedad de este sitio web.</p>
								<p>4.1.3. El acceso a los servicios se puede obtener a través de cualquier interfaz que no sea el sitio web.</p>
								<p>4.1.4. No interfiera con el uso del sitio web o los servicios proporcionados por otros usuarios</p>
								<p>4.1.5. Los bots y otras técnicas automatizadas se utilizan para acceder al sitio y/o a sus servicios.</p>
								<p>4.1.6. No está permitido cargar o transmitir, ni siquiera intentar cargar, ningún contenido que esté implicado activa o pasivamente en mecanismos de recopilación o transmisión de datos, como errores web, cookies o dispositivos de spyware, sin nuestro permiso expreso.</p>
								<p>4.1.7. Utilice el «encuadre», la duplicación o cualquier otro método para imitar la apariencia o la función de los servicios.</p>
								<p>4.1.8. Puede infringir cualquier ley o reglamento aplicable y fomentar o fomentar cualquier actividad ilegal, como la infracción de marcas comerciales, la infracción de derechos de autor, la difamación, la violación de la privacidad, el hackeo de identidades o la distribución de software falso;</p>
								<p>4.1.9. Puede modificar o alterar el código fuente de este sitio web. También puede cargar aplicaciones o software que puedan dañar el sitio web o a otra persona.</p>
								<p>4.1.10. No está permitido desensamblar, descompilar o aplicar ingeniería inversa a ninguna tecnología o software que se encuentre en el sitio web o que se utilice para proporcionar los servicios.</p>
								<p>4.2. Los términos de este acuerdo se suman a cualquier derecho que podamos poseer. Si creemos que su uso del sitio no cumple con los términos de estos términos o con cualquier otra ley aplicable, es posible que podamos supervisar su uso del sitio web o los servicios o bloquear el acceso a ellos, revelar a terceros sus patrones de comportamiento en el sitio web o tomar cualquier otra medida adecuada para proteger los derechos y la propiedad de terceros.</p>
								<h3>5. Derechos de propiedad intelectual</h3>
								<p>5.1. El contenido del sitio web, incluido el relacionado con vídeos, como textos, imágenes, logotipos, sonidos, diseños, marcas comerciales y otro material, está protegido por nuestros derechos de propiedad intelectual y los de terceros.</p>
								<p>5.2. Todos los derechos, títulos y todos los derechos e intereses relacionados con los servicios y el sitio web son nuestros. Además de los derechos a utilizar los servicios y el sitio web de acuerdo con estas condiciones, el uso por parte del usuario de los servicios y el sitio web no otorga ningún derecho de propiedad intelectual sobre los mismos.</p>
								<p>5.3. El usuario solo puede acceder al sitio web y/o a los servicios para uso personal y no comercial.</p>
								<p>5.4. No permitirás a nadie modificar o realizar ingeniería inversa, descompilar o copiar los servicios o el sitio web, ni crear obras derivadas utilizando la sublicencia o el alquiler.</p>
								<h3>6. Limitación de responsabilidad</h3>
								<p>6.1. El sitio web y los servicios son su responsabilidad. No ofrecemos ninguna garantía, ya sea implícita o expresa, en relación con el sitio web y los servicios o con el uso que usted haga de ellos, incluidas las garantías implícitas de calidad y comerciabilidad, así como la finalidad para la que se diseñó, es decir, la no infracción y la usabilidad, la autoridad en términos de precisión, integridad, puntualidad y pronta entrega. El contenido y las funciones accesibles o accesibles a través del sitio web se ofrecen «tal cual», «según sean accesibles» y «con cualquier consecuencia».</p>
								<p>6.2. No somos responsables de ningún error, omisión o inexactitud de la información del sitio web. No nos hacemos responsables de ninguna interrupción o interrupción de las transmisiones hacia o a través de los servicios.</p>
								<p>6.3. Le indemnizaremos por cualquier pérdida en la que incurra directa o indirectamente usted o un tercero a través del sitio web o los servicios. Usted será responsable de cualquier decisión basándose en la información del sitio web y/o de los servicios.</p>
								<p>6.4. No somos responsables de ninguna pérdida o daño que esté relacionado directa o indirectamente con usted o cualquier otra tercera persona. Esto incluye cualquier pérdida de ingresos o datos que resulte de su uso del sitio y/o los servicios. Esta limitación de responsabilidad está permitida según lo dispuesto por la ley en la región aplicable.</p>
								<p>6.5. Si hay un problema técnico con un proveedor de Internet o una línea telefónica, un servidor del sistema o un proveedor de ordenadores, o con cualquier hardware, no asumimos ninguna responsabilidad. No nos hacemos responsables del uso que se haga de Internet.</p>
								<h3>7. Contenido y servicios de terceros</h3>
								<p>7.1. Puede ver el contenido de terceros y servicios cuando utiliza los servicios. Esto podría incluir anuncios o reseñas de plataformas de terceros.</p>
								<p>7.2. No nos hacemos responsables de la información o los productos a los que se hace referencia. Es posible que no estén actualizados o actualizados en todo momento.</p>
								<p>7.3. Le sugerimos que verifique la exactitud de toda la información antes de tomar cualquier decisión. Usted es responsable de todas las decisiones y acciones que se deriven de la información.</p>
								<h3>8. Enlaces</h3>
								<p>8.1. El sitio contiene anuncios y contenido. Los materiales están disponibles a través de sitios web de terceros («enlaces»). Le recomendamos que lo tenga en cuenta antes de descargar, confiar en la información obtenida de estos sitios web, software u otros materiales o acceder a ella, o de completar cualquier compra u otra transacción que le informemos. Estos enlaces se proporcionan únicamente para la comodidad de los usuarios. No nos hacemos responsables de ningún daño o pérdida causados por el uso o la confianza depositada en cualquier información, producto o servicio que esté disponible a través de otros sitios web o programas.</p>
								<p>8.2. La inclusión de hipervínculos en este sitio web no implica nuestra aprobación, autorización o afiliación ni ninguna otra forma de aprobación por nuestra parte en relación con los sitios web, su software o sus administradores.</p>
								<p>8.3. No hemos revisado todos los hipervínculos y no nos hacemos responsables del software o el sitio web a los que se hace referencia. Antes de que decidas usar, confiar en ellos o comprar algo de estos sitios web o aplicaciones, te lo advertimos. No será responsable en modo alguno de los daños o pérdidas causados por el uso o la confianza depositada en cualquier producto, información o contenido al que se pueda acceder a través de otros sitios web.</p>
								<p>8.4. Es su responsabilidad y obligación revisar los términos y políticas de cualquier sitio web operado por terceros. Le recomendamos encarecidamente que los lea antes de ponerse en contacto con sitios web de terceros.</p>
								<h3>9. Misceláneo</h3>
								<p>9.1. Tenemos derecho a alterar, cesar o modificar nuestros servicios en cualquier momento. Los cambios no le causarán ningún daño y no podrá presentar ninguna reclamación contra nosotros.</p>
								<p>9.2. Los términos se pueden modificar en cualquier momento. Podemos cambiar los términos en cualquier momento. Le informaremos publicando la versión más reciente y, a continuación, modificando la fecha que aparece en la parte superior. Cualquier modificación entrará en vigor en un par de días hábiles. Se considerará que acepta cualquier modificación de los términos del sitio web si continúa utilizándolo después de su publicación.</p>
								<p>9.3. El Usuario reconoce y acepta que cualquier información transmitida a través del sitio web no crea ningún tipo de relación que no esté explícitamente establecida en estos términos.</p>
								<p>9.4. Estos términos y la política de privacidad, así como las políticas de privacidad, según se modifiquen periódicamente, son los únicos acuerdos válidos entre nosotros y el usuario y cualquier otra promesa, declaración o acuerdo, ya sea oral o escrito, no incluido en la política de privacidad es legalmente vinculante para las partes.</p>
								<p>9.5. La incapacidad de ejercer cualquier derecho o poder previsto en él se considera una renuncia al derecho o poder. Cualquier ejercicio, o solo una parte, será un elemento de cualquier ejercicio adicional o posterior del mismo o de cualquier otro derecho o recurso.</p>
								<p>9.6. Estos términos se cancelarán en caso de que un tribunal con jurisdicción competente declare inválida la disposición en cuestión. El resto de los términos se interpretarán como si se hubiera implementado la exclusión y se aplicarán de acuerdo con sus términos. Sin embargo, los términos se interpretarán de acuerdo con las intenciones y el significado de las cláusulas de exclusión de acuerdo con la sentencia de los tribunales.</p>
								<p>9.7. Estos términos permiten a los socios externos transferir o asignar la totalidad de los derechos y obligaciones. Los operadores externos pueden administrar el sitio web y todos sus servicios, sin restringir lo anterior. Estos términos no le permiten asignar o transferir los derechos u obligaciones que tiene.</p>
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