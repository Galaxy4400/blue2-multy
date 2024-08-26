<?php
include_once 'aff.php';
include_once $dir_prefix . 'reg/click.php';
$subid = fetchSubId($token);
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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Inicio</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plataforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Beneficios</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">¿Nuestro equipo</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Póngase en contacto con nosotros</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registrarse</a>
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

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">¡Te damos la bienvenida a {{site_name}}, lo juro!</h2>
								<p class="main-form__text">Experimente una nueva era de negociación con nuestra revolucionaria plataforma de negociación de criptomonedas. Con la avanzada tecnología de inteligencia artificial de {{site_name}}, puede maximizar sus ganancias y tomar decisiones informadas.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Deco">
							</figure>
						</div>
						<div class="main-form__column main-form__column_form">
							<?php include 'forms/main.php' ?>
						</div>
					</div>
				</div>
			</section>

			<div class="block-2">
				<div class="block-2__container _container">
					<div class="block-2__slider block-2-slider">
						<div class="block-2-slider__slides">
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">65+</p>
									<p class="block-2-slider-slide__desc">Divisas disponibles</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 mm</p>
									<p class="block-2-slider-slide__desc">Usuarios verificados</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">400 millones de dólares</p>
									<p class="block-2-slider-slide__desc">Volumen de negociación</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">Más de 98</p>
									<p class="block-2-slider-slide__desc">Países compatibles</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="block-1">
				<div class="block-1__container _container">
					<div class="block-1__body">
						<div class="block-1__column block-1__column_left">
							<h1 class="block-1__title">Acerca de {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Experimente una nueva era de negociación con nuestra revolucionaria plataforma de negociación de criptomonedas. Con la avanzada tecnología de inteligencia artificial de {{site_name}}, puede maximizar sus ganancias y tomar decisiones informadas.</p>
							<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Lea más</a>
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">¿Por qué elegir {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} es la opción preferida para los comerciantes de criptomonedas en Suiza. Desde seguridad y transparencia hasta potentes algoritmos y una interfaz fácil de usar, ofrecemos todo lo que necesita para operar con éxito.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="imagen">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Fianza</h4>
											<p class="block-3-slide__text">Los más altos estándares de protección de datos e inversiones.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="imagen">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalización</h4>
											<p class="block-3-slide__text">Personalice las estrategias de negociación según sus preferencias.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="imagen">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Demo sin riesgos</h4>
											<p class="block-3-slide__text">Obtenga experiencia práctica sin utilizar capital real.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="imagen">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Estrategias de IA</h4>
											<p class="block-3-slide__text">Señales comerciales precisas para tomar decisiones exitosas.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="imagen">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Comercio automatizado</h4>
											<p class="block-3-slide__text">Operaciones eficientes y orientadas a las ganancias utilizando bots de IA.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
											<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="imagen">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Interfaz fácil de usar</h4>
											<p class="block-3-slide__text">Intuitiva para todos los usuarios, facilita el inicio de las operaciones.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">¡Revolucione el mundo financiero con {{site_name}}™!</h3>
								<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">¡Regístrate</a>
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
								<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="imagen">
							</figure>
						</div>
					</div>
				</div>
			</section>

			<section class="block-10">
				<div class="block-10__container _container">
					<div class="block-10__body">
						<div class="block-10__column">
							<div class="block-10__content">
								<h2 class="block-10__title">¡Comercio eficiente!</h2>
								<div class="block-10__desc">
									<p>¡Opere de forma fácil y segura y obtenga beneficios! Explore varias criptomonedas como Bitcoin, Ethereum y Dogecoin.</p>
								</div>
								<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Regístrese</a>
							</div>
						</div>
						<div class="block-10__column">
							<figure class="block-10__image" data-adapt="block-10__content,991,3"><img src="<?=$dir_prefix?>assets/img/deco/9.svg" alt="Figura"></figure>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="partners__container _container">
					<h2 class="partners__title">Nuestros socios</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="¿Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Socio"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Socio"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">¿Cómo puedo empezar con {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Descubre lo fácil que es empezar a operar con criptomonedas con {{site_name}}. Desde el registro hasta tu primer depósito, te guiaremos paso a paso a través del proceso.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">¡Inscríbase</h3>
							<p class="block-9-item__text">Simplemente regístrese en línea, complete sus datos personales y obtenga acceso seguro a {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validar</h3>
							<p class="block-9-item__text">Una vez que haya recibido su correo electrónico de confirmación, puede empezar a operar de inmediato.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Abra una cuenta</h3>
							<p class="block-9-item__text">Puede abrir su cuenta de operaciones con solo un depósito de 250 CHF. Pero tenga cuidado: las inversiones más grandes significan mayores oportunidades de ganancias, pero también riesgos de pérdida. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Deposita dinero en tu cuenta</h3>
							<p class="block-9-item__text">Transferencia bancaria, monedero electrónico o tarjeta de crédito: la elección es suya. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Personaliza tu cuenta</h3>
							<p class="block-9-item__text">Personalice su cuenta para que se adapte a sus necesidades Determine su apetito por el riesgo, establezca objetivos comerciales y determine sus parámetros para operar con criptomonedas. Nuestros experimentados corredores suizos están listos para ayudarlo a dar sus primeros pasos, de forma automática o manual, todo está en sus manos.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Comience su viaje bursátil</h3>
							<p class="block-9-item__text">Ahora está listo para empezar. {{site_name}}™ es la clave del éxito en el mercado de las criptomonedas. ¡Comience su viaje bursátil ahora y aproveche las oportunidades del mundo de las monedas digitales!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
							<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">¡Regístrese</a>
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ ofrece varios métodos de pago en todo el mundo.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="tarjeta">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="tarjeta">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="tarjeta">
								</div>
								<div class="block-12__item">
									<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="tarjeta">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ reseñas</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">¡Una fantástica plataforma de negociación es {{site_name}}! El registro sencillo, las tarifas transparentes y el soporte profesional hacen que las operaciones sean fluidas y exitosas. ¡Estoy muy satisfecho y los recomiendo a todos los minoristas!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Múnich</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Gracias a {{site_name}}, he empezado a operar con criptomonedas fácilmente. Registro sencillo, excelente soporte y tarifas justas. ¡La plataforma me hace sentir segura y profesional!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburgo</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} es un socio fiable en el mundo del comercio de criptomonedas. Registro sencillo, condiciones claras y asistencia de expertos. ¡Operar en esta plataforma es un placer!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlín</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Gracias a {{site_name}}, ¡he aprendido cómo empezar a operar con criptomonedas sin esfuerzo! Registrarse fue muy fácil y las comisiones transparentes son una verdadera ventaja. Como comerciante, me siento muy cómodo y me siento apoyado profesionalmente en esta plataforma.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="persona"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Fráncfort</p>
								</div>
							</div>
						</div>
						<div class="quotes-slider__pagination quotes-slider-pagination">
							<div class="quotes-slider-pagination__body"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="faq">
				<div class="faq__container _container">
					<h2 class="faq__title">PREGUNTAS MÁS FRECUENTES</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">¿Cómo uso {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">¿Estás listo para comenzar tu aventura criptográfica en Suiza? Con {{site_name}}, ¡es pan comido! Simplemente regístrese en línea, deposite dinero y estará listo para comenzar. Tanto si eres un experto en criptomonedas como si eres un novato, {{site_name}} te lo pone fácil: ajustes individuales, paneles intuitivos, operaciones manuales o automatizadas: ¡aquí tú mandas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">¿Cuál es la inversión mínima para {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">¿Estás listo para comenzar tu aventura criptográfica en Suiza? Con {{site_name}}, ¡es pan comido! Simplemente regístrese en línea, deposite dinero y estará listo para comenzar. Tanto si eres un experto en criptomonedas como si eres un novato, {{site_name}} te lo pone fácil: ajustes individuales, paneles intuitivos, operaciones manuales o automatizadas: ¡aquí tú mandas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>

							<span class="faq-spoiler__control-text">¿Qué mercados admite {{site_name}}?</span> <button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">¿Estás listo para comenzar tu aventura criptográfica en Suiza? Con {{site_name}}, ¡es pan comido! Simplemente regístrese en línea, deposite dinero y estará listo para comenzar. Tanto si eres un experto en criptomonedas como si eres un novato, {{site_name}} te lo pone fácil: ajustes individuales, paneles intuitivos, operaciones manuales o automatizadas: ¡aquí tú mandas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">¿Cómo se retira dinero de {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">¿Estás listo para comenzar tu aventura criptográfica en Suiza? Con {{site_name}}, ¡es pan comido! Simplemente regístrese en línea, deposite dinero y estará listo para comenzar. Tanto si eres un experto en criptomonedas como si eres un novato, {{site_name}} te lo pone fácil: ajustes individuales, paneles intuitivos, operaciones manuales o automatizadas: ¡aquí tú mandas!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
							<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
								<span class="faq-spoiler__control-text">¿Cómo funciona {{site_name}}?</span>
								<span class="faq-spoiler__arrow _icon-arrow-simple">
								</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">¿Estás listo para comenzar tu aventura criptográfica en Suiza? Con {{site_name}}, ¡es pan comido! Simplemente regístrese en línea, deposite dinero y estará listo para comenzar. Tanto si eres un experto en criptomonedas como si eres un novato, {{site_name}} te lo pone fácil: ajustes individuales, paneles intuitivos, operaciones manuales o automatizadas: ¡aquí tú mandas!</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="main-form">
				<div class="main-form__container _container">
					<div class="main-form__body">
						<div class="main-form__column main-form__column_image">
							<div class="main-form__content">
								<h2 class="main-form__title">Esto es operar con {{site_name}}™</h2>
								<p class="main-form__text">Somos el lugar más confiable para que las personas y las empresas compren, vendan y administren criptomonedas.</p>
							</div>
							<figure class="main-form__image">
								<img src="<?=$dir_prefix?>assets/img/deco/3.webp" alt="Deco">
							</figure>
						</div>
						<div class="main-form__column main-form__column_form">
							<?php include 'forms/main.php' ?>
						</div>
					</div>
				</div>
			</section>

			<section class="block-13">
				<div class="block-13__container _container">
					<h2 class="block-13__title">Lo más destacado de {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">tipo de plataforma</dt>
							<dd class="block-13-list__value">Sistema de comercio de criptomonedas con inteligencia artificial (Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">fondos de inversión</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash y varias otras criptomonedas populares</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Protección de datos</dt>
							<dd class="block-13-list__value">Sí, la protección de datos se proporciona de acuerdo con la Directiva suiza de protección de datos</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">gastos</dt>
							<dd class="block-13-list__value">{{site_name}} Suiza se puede utilizar de forma gratuita</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Opciones de depósito</dt>
							<dd class="block-13-list__value">Tarjeta de crédito, PayPal y transferencia bancaria directa</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">tierras</dt>
							<dd class="block-13-list__value">El acceso mundial está disponible</dd>
						</div>
					</dl>
				</div>
			</section>

		</main>

		<?php include 'footer.php' ?>
	</div>




	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
	</button>

<?php include 'scripts.php' ?>


</body>

</html>
<?php include 'ywbp.php'; ?>