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
									<li class="menu__item" data-menu-item><a class="menu__link _active" href="<?=$language_suffix?>index.php">Início</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plataforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Benefícios</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Nossa equipe</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Entre em contato conosco</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Registre-se</a> 
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
								<h2 class="main-form__title">Bem-vindo ao {{site_name}} juro!</h2>
								<p class="main-form__text">Experimente uma nova era de negociação com nossa revolucionária plataforma de negociação de criptomoedas. Com a avançada tecnologia de IA de {{site_name}}, você pode maximizar seus lucros e tomar decisões informadas.</p>
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
									<p class="block-2-slider-slide__desc">Moedas disponíveis</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">34 m</p>
									<p class="block-2-slider-slide__desc">Usuários verificados</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">$400 milhões</p>
									<p class="block-2-slider-slide__desc">Volume de negociação</p>
								</div>
							</div>
							<div class="block-2-slider__slide block-2-slider-slide">
								<div class="block-2-slider-slide__content">
									<p class="block-2-slider-slide__value h2">98+</p>
									<p class="block-2-slider-slide__desc">Países suportados</p>
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
							<h1 class="block-1__title">Sobre {{site_name}}™</h1>
						</div>
						<div class="block-1__column block-1__column_right">
							<p class="block-1__text">Experimente uma nova era de negociação com nossa revolucionária plataforma de negociação de criptomoedas. Com a avançada tecnologia de IA de {{site_name}}, você pode maximizar seus lucros e tomar decisões informadas.</p>
<a class="block-1__link _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Leia mais</a> 
						</div>
					</div>
				</div>
			</section>

			<section class="block-3">
				<div class="block-3__container _container">
					<div class="block-3__body">
						<div class="block-3__column block-3__column_content">
							<div class="block-3__header">
								<h2 class="block-3__title">Por que escolher {{site_name}}?</h2>
								<p class="block-3__desc">{{site_name}} é a escolha preferida dos negociantes de criptomoedas na Suíça. De segurança e transparência a algoritmos poderosos e uma interface amigável, oferecemos tudo o que você precisa para uma negociação bem-sucedida.</p>
							</div>
							<div class="block-3__slider block-3-slider" data-swiper>
								<div class="block-3-slider__slides">
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/1.svg" alt="imagem">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Caução</h4>
											<p class="block-3-slide__text">Os mais altos padrões de proteção de dados e investimentos.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/2.svg" alt="imagem">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Personalização</h4>
											<p class="block-3-slide__text">Personalize as estratégias de negociação de acordo com suas preferências.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/3.svg" alt="imagem">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Demonstração sem riscos</h4>
											<p class="block-3-slide__text">Ganhe experiência prática sem usar capital real.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/4.svg" alt="imagem">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Estratégias de IA</h4>
											<p class="block-3-slide__text">Sinais de negociação precisos para decisões bem-sucedidas.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/5.svg" alt="imagem">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Negociação automática</h4>
											<p class="block-3-slide__text">Negociações eficientes e com fins lucrativos usando bots de IA.</p>
										</div>
									</div>
									<div class="block-3-slider__slide block-3-slide">
										<figure class="block-3-slide__image">
<img src="<?=$dir_prefix?>assets/img/figure/6.svg" alt="imagem">
										</figure>
										<div class="block-3-slide__content">
											<h4 class="block-3-slide__title">Interface amigável</h4>
											<p class="block-3-slide__text">Intuitivo para todos os usuários, facilita o início da negociação.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="block-3__footer">
								<h3 class="block-3__footer-title">Revolucione o mundo financeiro com {{site_name}}™!</h3>
<a class="block-3__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registre-se</a> 
							</div>
						</div>
						<div class="block-3__column block-3__column_image">
							<figure class="block-3__image">
<img src="<?=$dir_prefix?>assets/img/deco/6.webp" alt="imagem">
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
								<h2 class="block-10__title">Negociação eficiente!</h2>
								<div class="block-10__desc">
									<p>Negocie com facilidade e segurança e obtenha lucros! Explore várias criptomoedas, como Bitcoin, Ethereum e Dogecoin.</p>
								</div>
<a class="block-10__link btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registre-se</a> 
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
					<h2 class="partners__title">Nossos parceiros</h2>
					<div class="partners__slider partners-slider" data-swiper>
						<div class="partners-slider__slides">
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/1.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/2.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/3.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/4.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/5.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/6.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/7.svg" alt="Parceiro"></div>
							<div class="partners-slider__slide"><img src="<?=$dir_prefix?>assets/img/partners/8.svg" alt="Parceiro"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="block-9">
				<div class="block-9__container _container">
					<div class="block-9__header block-9-header">
						<div class="block-9-header__column">
							<h2 class="block-9-header__title">Como faço para começar com {{site_name}}™?</h2>
						</div>
						<div class="block-9-header__column">
							<div class="block-9-header__desc">Saiba como é fácil começar a negociar criptomoedas com {{site_name}}. Desde o registro até seu primeiro depósito, nós o guiaremos passo a passo pelo processo.</div>
						</div>
					</div>
					<div class="block-9__body">
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Cadastre-se</h3>
							<p class="block-9-item__text">Basta se cadastrar on-line, preencher seus dados pessoais e obter acesso seguro a {{site_name}}™.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Validar</h3>
							<p class="block-9-item__text">Depois de receber seu e-mail de confirmação, você pode começar a negociar imediatamente.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Abra uma conta</h3>
							<p class="block-9-item__text">Você pode abrir sua conta de negociação com apenas um depósito de 250 CHF. Mas tenha cuidado: investimentos maiores significam maiores oportunidades de lucro, mas também riscos de perda. </p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Deposite dinheiro em sua conta</h3>
							<p class="block-9-item__text">Transferência bancária, carteira eletrônica ou cartão de crédito — a escolha é sua. *</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Personalize sua conta</h3>
							<p class="block-9-item__text">Personalize sua conta para atender às suas necessidades Determine seu apetite pelo risco, defina metas de negociação e determine seus parâmetros para negociar criptomoedas. Nossos corretores suíços experientes estão prontos para ajudá-lo a dar os primeiros passos — automatizados ou manuais — está tudo em suas mãos.</p>
						</div>
						<div class="block-9__item block-9-item">
							<h3 class="block-9-item__title">Comece sua jornada de negociação</h3>
							<p class="block-9-item__text">Agora você está pronto para ir. {{site_name}}™ é sua chave para o sucesso no mercado de criptomoedas. Comece sua jornada de negociação agora e aproveite as oportunidades no mundo das moedas digitais!</p>
						</div>
					</div>
					<div class="block-9__footer">
						<div class="block-9__column">
<a class="btn btn_d btn_fw" href="<?=$language_suffix?>sign-up.php">Registre-se</a> 
						</div>
					</div>
				</div>
			</section>

			<div class="block-12">
				<div class="block-12__container _container">
					<div class="block-12__body">
						<div class="block-12__column">
							<p class="block-12__text">* {{site_name}}™ oferece vários métodos de pagamento em todo o mundo.</p>
						</div>
						<div class="block-12__column">
							<div class="block-12__items">
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/1.svg" alt="cartão">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/2.svg" alt="cartão">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/3.svg" alt="cartão">
								</div>
								<div class="block-12__item">
<img src="<?=$dir_prefix?>assets/img/cards/4.svg" alt="cartão">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="quotes">
				<div class="quotes__container _container">
					<div class="quotes__header">
						<h2 class="quotes__title">{{site_name}}™ avaliações</h2>
						<div class="quotes-slider-arrows">
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_prev _icon-arrow-small"></div>
							<div class="quotes-slider-arrows__arrow quotes-slider-arrows__arrow_next _icon-arrow-small"></div>
						</div>
					</div>
					<div class="quotes-slider" data-swiper>
						<div class="quotes-slider__slides">
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Uma plataforma de negociação fantástica é {{site_name}}! Registro fácil, taxas transparentes e suporte profissional tornam a negociação tranquila e bem-sucedida. Estou extremamente satisfeito e os recomendo a todos os varejistas!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/2.webp" alt="pessoa"></figure>
									<p class="quotes-slide__name h3">Johannes Becker, Munique</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Graças a {{site_name}}, comecei facilmente a negociar criptomoedas. Registro fácil, ótimo suporte e taxas justas. A plataforma me faz sentir segura e profissional!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/3.webp" alt="pessoa"></figure>
									<p class="quotes-slide__name h3">Lukas Schneider, Hamburgo</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">{{site_name}} é um parceiro confiável no mundo do comércio de criptomoedas. Registro fácil, termos claros e suporte especializado. Negociar nesta plataforma é um prazer!</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/5.webp" alt="pessoa"></figure>
									<p class="quotes-slide__name h3">Anna Fischer, Berlim</p>
								</div>
							</div>
							<div class="quotes-slider__slide quotes-slide">
								<p class="quotes-slide__text">Graças a {{site_name}}, eu dominei como começar a negociar criptomoedas sem esforço! A inscrição foi muito fácil e as taxas transparentes são uma vantagem real. Como trader, me sinto muito confortável e com suporte profissional nesta plataforma.</p>
								<div class="quotes-slide__persone">
									<figure class="quotes-slide__avatar _ibg"><img src="<?=$dir_prefix?>assets/img/quotes/1.webp" alt="pessoa"></figure>
									<p class="quotes-slide__name h3">Marie Hoffmann, Frankfurt</p>
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
					<h2 class="faq__title">PERGUNTAS FREQUENTES</h2>
					<div class="faq-spoiler" data-spoiler="faq-spoiler">
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Como faço para usar {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto para começar sua aventura criptográfica na Suíça? Com {{site_name}}, é muito fácil! Basta se inscrever on-line, depositar dinheiro e você está pronto para começar. Seja você um especialista em criptomoedas ou um novato, o {{site_name}} facilita as coisas: configurações individuais, painéis intuitivos, negociação manual ou automatizada — você é o chefe aqui!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Qual é o investimento mínimo para {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto para começar sua aventura criptográfica na Suíça? Com {{site_name}}, é muito fácil! Basta se inscrever on-line, depositar dinheiro e você está pronto para começar. Seja você um especialista em criptomoedas ou um novato, o {{site_name}} facilita as coisas: configurações individuais, painéis intuitivos, negociação manual ou automatizada — você é o chefe aqui!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Quais mercados o {{site_name}} suporta?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto para começar sua aventura criptográfica na Suíça? Com {{site_name}}, é muito fácil! Basta se inscrever on-line, depositar dinheiro e você está pronto para começar. Seja você um especialista em criptomoedas ou um novato, o {{site_name}} facilita as coisas: configurações individuais, painéis intuitivos, negociação manual ou automatizada — você é o chefe aqui!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Como você retira dinheiro de {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto para começar sua aventura criptográfica na Suíça? Com {{site_name}}, é muito fácil! Basta se inscrever on-line, depositar dinheiro e você está pronto para começar. Seja você um especialista em criptomoedas ou um novato, o {{site_name}} facilita as coisas: configurações individuais, painéis intuitivos, negociação manual ou automatizada — você é o chefe aqui!</p>
							</div>
						</div>
						<div class="faq-spoiler__item" data-spoiler-item>
<button class="faq-spoiler__control h3" type="button" data-spoiler-control>
<span class="faq-spoiler__control-text">Como funciona o {{site_name}}?</span> 
<span class="faq-spoiler__arrow _icon-arrow-simple">
</span></button>
							<div class="faq-spoiler__container" data-spoiler-container>
								<p class="faq-spoiler__content">Pronto para começar sua aventura criptográfica na Suíça? Com {{site_name}}, é muito fácil! Basta se inscrever on-line, depositar dinheiro e você está pronto para começar. Seja você um especialista em criptomoedas ou um novato, o {{site_name}} facilita as coisas: configurações individuais, painéis intuitivos, negociação manual ou automatizada — você é o chefe aqui!</p>
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
								<h2 class="main-form__title">Isso é negociação com {{site_name}}™</h2>
								<p class="main-form__text">Somos o lugar mais confiável para indivíduos e empresas comprarem, venderem e gerenciarem criptomoedas.</p>
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
					<h2 class="block-13__title">Destaques de {{site_name}}™</h2>
					<dl class="block-13__list block-13-list block-13-list_light">
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">tipo de plataforma</dt>
							<dd class="block-13-list__value">Sistema de negociação de criptomoedas com inteligência artificial (Bitcoin, Litecoin, Ethereum, etc.)</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">fundos de investimento</dt>
							<dd class="block-13-list__value">Bitcoin, Litecoing, Ethereum, Ripple, Dash e várias outras criptomoedas populares</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Proteção de dados</dt>
							<dd class="block-13-list__value">Sim, a proteção de dados é fornecida de acordo com a Diretiva Suíça de Proteção de Dados</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">despesas</dt>
							<dd class="block-13-list__value">{{site_name}} A Suíça pode ser usada gratuitamente</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">Opções de depósito</dt>
							<dd class="block-13-list__value">Cartão de crédito, PayPal e transferência bancária direta</dd>
						</div>
						<div class="block-13-list__item">
							<dt class="block-13-list__property h4">terras</dt>
							<dd class="block-13-list__value">O acesso mundial está disponível</dd>
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