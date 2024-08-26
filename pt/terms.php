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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Início</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Plataforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Benefícios</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Nossa equipe</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Entre em contato conosco</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Registre-se</a> 
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
								<h1 class="conditions__title h2">Condições de uso</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1º general</h3>
								<p>1.1. Você está convidado a visitar o {{site_name}} (“Site”)</p>
								<p>Nossas informações de e-mail@ {{site_name}} .com</p>
								<p>1.2. Este site oferece informações sobre plataformas de terceiros (“Plataformas de terceiros”) para negociar (os “Serviços”)</p>
								<p>1.3. Os Termos regulam seu acesso (“Você”, “Seu” ou “Usuário”) ao Site e aos Serviços. Antes de poder acessar os serviços, você deve ler estes termos com atenção. Estes termos são um acordo legalmente vinculativo entre você e o proprietário do site, você e o proprietário do site. Você deve aceitar os termos em todos os aspectos se não quiser usar o site. Os termos podem ser alterados de tempos em tempos.</p>
								<p>Esses termos contêm nossa política de privacidade. Você aceita estes termos e concorda com nossa política de privacidade. (Você pode ler nossa política de privacidade aqui).</p>
								<h3>2. Elegibilidade</h3>
								<p>2.1. Se você cumprir estes termos e condições, o site estará acessível para você.</p>
								<p>2.1.1. Idade mínima 18 anos</p>
								<p>2.1.2. Você pode assinar essas condições e termos.</p>
								<p>2.1.3. As leis do país em que você mora ou usa os serviços não estão de forma alguma impedindo os usuários de usar o site ou qualquer um de seus serviços.</p>
								<p>2.2. Não oferecemos nenhuma garantia, representação ou garantia sobre a legalidade ou o uso dos serviços ou do site para qualquer pessoa. Não somos responsáveis por qualquer uso ilegal do site ou dos serviços de qualquer usuário.</p>
								<h3>3. Territórios com acesso restrito</h3>
								<p>3.1. Sem limitar o escopo das informações fornecidas, nos reservamos o direito de restringir o acesso aos Serviços e/ou ao Site (ou a qualquer parte deles) a: (i), Usuários que residem em áreas restritas (os “Territórios Restritos”) e (ii) usuários que acreditamos que possam ser um risco regulatório, legal ou de reputação.</p>
								<p>3.2. Também podemos impor termos adicionais antes de aceitar usuários que sejam cidadãos de ou de determinados países. Se os usuários viajarem para áreas restritas, o Site ou os Serviços podem estar temporariamente indisponíveis ou bloqueados.</p>
								<h3>4. Atividades proibidas</h3>
								<p>4.1. Você aceita utilizar o Site e os Serviços com respeito e não:</p>
								<p>4.1.1. Você pode se conectar ao nosso site e usá-lo para baixar, carregar, compartilhar e publicar, bem como para transmitir ou enviar (a) informações ou outro material que viole os direitos intelectuais de privacidade, direitos de propriedade e outros direitos; ou (b) informações que não podem ser publicadas ou distribuídas devido a uma ameaça ou lesão causada por insulto ou difamação, calúnia ou racismo, ou (c) informações que incluam vírus ou outras software Pode danificar nossos sistemas de computador ou de terceiros, ou de uma forma que bloqueie ou restrinja outros usuários de Acessando o site. (d) Qualquer informação ou outro material que viole qualquer lei. (e) Informações ou materiais que incluem anúncios ou outros conteúdos que não estão sujeitos ao nosso consentimento prévio por escrito.</p>
								<p>4.1.2. Modifique ou exclua quaisquer atribuições, avisos legais, rótulos ou designações que sejam de propriedade deste site.</p>
								<p>4.1.3. O acesso aos serviços pode ser obtido por meio de qualquer interface que não seja o site.</p>
								<p>4.1.4. Não interfira com o uso do site ou dos serviços fornecidos por outros usuários</p>
								<p>4.1.5. Bots e outras técnicas automatizadas são usados para obter acesso ao site e/ou seus serviços.</p>
								<p>4.1.6. Você não tem permissão para carregar ou transmitir, ou mesmo tentar fazer upload, de qualquer conteúdo que esteja ativo ou passivamente envolvido em mecanismos de coleta ou transmissão de dados, como web bugs, cookies ou dispositivos de spyware, sem nossa permissão expressa.</p>
								<p>4.1.7. Envolva-se em “enquadrar”, espelhar ou usar qualquer outro método para imitar a aparência ou a função dos serviços.</p>
								<p>4.1.8. Você pode violar quaisquer leis ou regulamentos aplicáveis e incentivar ou incentivar qualquer atividade ilegal, como violação de marca registrada, violação de direitos autorais, difamação, violação de privacidade, hackeamento de identidades ou distribuição de software falso;</p>
								<p>4.1.9. Você pode modificar ou alterar o código-fonte deste site. Você também pode fazer upload de aplicativos ou softwares que possam causar danos ao site ou a outro indivíduo.</p>
								<p>4.1.10. Você não tem permissão para desmontar, descompilar ou fazer engenharia reversa de qualquer tecnologia ou software que esteja no site ou seja utilizado para fornecer os serviços.</p>
								<p>4.2. Os termos deste contrato são adicionais a quaisquer direitos que possamos possuir. Se acreditarmos que seu uso do site não está em conformidade com os termos destes termos ou com qualquer outra lei aplicável, poderemos monitorar seu uso do site ou dos serviços ou bloquear o acesso a eles, revelar seus padrões de comportamento no site a terceiros ou tomar qualquer outra medida apropriada para proteger os direitos e a propriedade de terceiros.</p>
								<h3>5. Direitos de propriedade intelectual</h3>
								<p>5.1. O conteúdo do site, inclusive o relacionado a vídeos, como texto, imagens, logotipos, sons, designs, marcas registradas e outros materiais, é protegido por nossos direitos de propriedade intelectual e de terceiros.</p>
								<p>5.2. Todos os direitos, títulos e todos os direitos e interesses relacionados aos serviços e ao site são nossos. Além dos direitos de utilizar os serviços e o site de acordo com essas condições, o uso pelo usuário dos serviços e do site não concede nenhum direito de propriedade intelectual a eles.</p>
								<p>5.3. O Site e/ou os Serviços só podem ser acessados pelo usuário apenas para uso pessoal e não comercial.</p>
								<p>5.4. Você não permitirá que ninguém modifique ou faça engenharia reversa, descompile ou copie os serviços ou o site, nem faça trabalhos derivados usando a sublicença ou o aluguel.</p>
								<h3>6. Limitação de responsabilidade</h3>
								<p>6.1. O site e os serviços são de sua responsabilidade. Quaisquer garantias, implícitas ou expressamente declaradas, em relação ao site e aos serviços ou ao uso deles, incluindo garantias implícitas de qualidade e comercialização, bem como a finalidade para a qual foram projetados, como não violação e usabilidade, autoridade em termos de precisão, integridade, pontualidade e pronta entrega, não são fornecidas por nós. O conteúdo e as funções acessíveis ou acessíveis por meio do site são oferecidos “como estão”, “conforme acessíveis” e “com qualquer consequência”.</p>
								<p>6.2. Não somos responsáveis por quaisquer erros, omissões ou imprecisões das informações no site. Não nos responsabilizamos por quaisquer interrupções ou interrupções nas transmissões para ou por meio dos serviços.</p>
								<p>6.3. Nós o indenizaremos por qualquer perda, direta ou indiretamente, incorrida por você ou por terceiros por meio do site ou dos serviços. Você será responsável por qualquer decisão ao confiar nas informações do site e/ou dos serviços.</p>
								<p>6.4. Não somos responsáveis por qualquer perda ou dano direto, indireto ou relacionado a você ou a qualquer outra pessoa. Isso inclui qualquer perda de renda ou dados resultante do uso do site e/ou dos serviços. Essa limitação de responsabilidade é permitida de acordo com a lei na região aplicável.</p>
								<p>6,5. Se houver um problema técnico com a Internet, linha telefônica, provedor de computador, servidor do sistema ou qualquer hardware, não assumimos nenhuma responsabilidade. Não somos responsáveis por qualquer uso da Internet.</p>
								<h3>7. Conteúdo e serviços de terceiros</h3>
								<p>7.1. Você pode visualizar o conteúdo de terceiros e serviços ao usar os serviços. Isso pode incluir anúncios ou avaliações de plataformas de terceiros.</p>
								<p>7.2. Não nos responsabilizamos pelas informações ou produtos mencionados. Eles podem não estar sempre atualizados ou atualizados.</p>
								<p>7.3. Sugerimos que você verifique a precisão de todas as informações antes de tomar qualquer decisão. Você é responsável por todas as decisões e ações a partir das informações.</p>
								<h3>8. Links</h3>
								<p>8.1. O site contém anúncios e conteúdo. Os materiais são disponibilizados por meio de sites de terceiros (“links”). Aconselhamos que você esteja ciente disso antes de baixar, confiar ou acessar qualquer informação obtida desses sites, softwares ou outros materiais ou concluir qualquer compra ou outras transações que lhe aconselharemos. Esses links são fornecidos apenas para a conveniência dos usuários. Não somos responsáveis por quaisquer danos ou perdas causados pelo uso ou confiança em quaisquer informações, produtos ou serviços disponibilizados por meio de outros sites ou programas.</p>
								<p>8.2. A inclusão de hiperlinks neste site não implica endosso, autorização ou afiliação ou qualquer outra forma de endosso de nossa parte em relação aos sites, seus softwares ou administradores.</p>
								<p>8,3. Não analisamos todos os hiperlinks e não podemos ser responsabilizados pelo software ou site mencionado. Antes de decidir usar, confiar ou comprar qualquer coisa desses sites ou aplicativos, nós o avisamos. De forma alguma você será responsabilizado por qualquer dano ou perda causada pelo uso ou confiança em quaisquer produtos, informações ou conteúdos acessíveis por meio de outros sites.</p>
								<p>8.4. É sua responsabilidade e obrigação revisar os termos e políticas de quaisquer sites operados por terceiros. É altamente recomendável que você os leia antes de entrar em contato com sites de terceiros.</p>
								<h3>9. Diversos</h3>
								<p>9.1. Temos o direito de alterar, cessar ou modificar nossos serviços a qualquer momento. As alterações não causarão nenhum dano a você e você não poderá fazer nenhuma reclamação contra nós.</p>
								<p>9.2. Os termos podem ser modificados a qualquer momento. Podemos alterar os termos a qualquer momento. Informaremos você publicando a versão mais atual e, em seguida, revisando a data na parte superior. Qualquer modificação entrará em vigor em alguns dias úteis. Considera-se que você aceita quaisquer modificações nos termos do site se continuar a usá-lo após o lançamento.</p>
								<p>9.3. O Usuário reconhece e concorda que qualquer informação transmitida via ou através do site não cria nenhum tipo de relacionamento que não esteja explicitamente declarado nestes termos.</p>
								<p>9.4. Estes termos e a política de privacidade, bem como as políticas de privacidade, conforme alteradas de tempos em tempos, são os únicos acordos válidos entre nós e o usuário e qualquer outra promessa, declaração ou acordo, oral ou escrito, não incluída na política de privacidade é legalmente vinculativa para as partes.</p>
								<p>9,5. A incapacidade de exercer qualquer direito ou poder previsto é considerada uma renúncia ao direito ou poder. Qualquer uma ou apenas uma parte de um exercício deve ser um elemento de qualquer exercício adicional ou adicional dos mesmos ou de quaisquer outros direitos ou recursos.</p>
								<p>9.6. Estes termos serão cancelados no caso de a disposição em questão ser declarada inválida por um tribunal com jurisdição competente. O restante dos termos será interpretado como se a exclusão fosse implementada e será aplicado de acordo com seus termos. No entanto, os termos serão interpretados de acordo com as intenções e significados das cláusulas de exclusão, de acordo com a decisão dos tribunais.</p>
								<p>9,7. Esses termos permitem que parceiros terceirizados transfiram ou cedam todos os direitos e obrigações. Operadores terceirizados podem gerenciar o site e todos os seus serviços, sem restringir o anterior. Esses termos não permitem que você ceda ou transfira os direitos ou obrigações que você tem.</p>
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