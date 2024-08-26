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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Benefits</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Our team</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Contact us</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Register</a>
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
								<h1 class="conditions__title h2">Conditions of Use</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1st general</h3>
								<p>1.1. You are invited to visit the {{site_name}} (“Site”)</p>
								<p>Our email info@ {{site_name}} .com</p>
								<p>1.2. This website offers information on third-party platforms (“Third-Party Platforms”) to trade (the “Services”)</p>
								<p>1.3. The Terms regulate Your (“You,” “Your,” or “User”) access to the Website and Services. Before you are able to access the services you must read these terms carefully. These terms are a legally binding agreement between you and the owner of the website you, and the owner of the website. You must accept the terms in all respects if you do not wish to use the website. The terms can be amended from time to time.</p>
								<p>These terms contain our privacy policy. You accept these terms and agree to our privacy policy. (You can read our privacy policy here).</p>
								<h3>2. Eligibility</h3>
								<p>2.1. If you stick to these terms and conditions The website will be accessible to you.</p>
								<p>2.1.1. Minimum age 18 years old</p>
								<p>2.1.2. You can sign these conditions and terms.</p>
								<p>2.1.3. The laws in the country in which you live or use the services are not in any way preventing users from using the website or any of its services.</p>
								<p>2.2. We do not make any guarantees, representations or warranties about the legality or usage of the services or website for any person. We are not responsible for any illegal usage of the website or the services of any user.</p>
								<h3>3. Territories with Restricted Access</h3>
								<p>3.1. Without limiting the scope of the information provided We reserve the right to restrict access to the Services and/or Website (or any portion of them) to: (i), Users who reside in restricted areas (the “Restricted Territories”) and (ii) users we believe may be a regulatory, legal or reputational risk.</p>
								<p>3.2. We may also impose additional terms prior to accepting users who are citizens of or of certain countries. If users travel into restricted areas The Website or the Services may be temporarily unavailable or blocked.</p>
								<h3>4. Prohibited activities</h3>
								<p>4.1. You accept to utilize the Site and Services respectfully and not to:</p>
								<p>4.1.1. You are able to connect to our website and use it to download, upload, share and publish, as well as to transmit or send (a) information or other material that violates intellectual rights to privacy, property rights and other rights; or (b) information that is not permitted to be published or distributed because of a threat or injury caused by insult or defamation, slander, or racism, or (c) information that includes viruses or other software May harm our computer systems or those of third parties, or in a manner that blocks or restricts other users from Accessing the website. (d) Any information or other material that is in violation of any law. (e) Information or materials that includes advertisements or other content that is not subject to our prior written consent.</p>
								<p>4.1.2. Modify or delete any attributions, legal notices, labels or designations that are proprietary to this website.</p>
								<p>4.1.3. The access to the services may be obtained through any interface that is not the website.</p>
								<p>4.1.4. Do not interfere with the usage of the website or services provided by other users</p>
								<p>4.1.5. Bots and other automated techniques are used to gain access to the site and/or its services.</p>
								<p>4.1.6. You are not allowed to upload or transmit, or even attempt to upload, any content that is active or passively involved in data collection or transmission mechanisms, such as web bugs, cookies, or spyware devices, without our express permission.</p>
								<p>4.1.7. Engage in “framing,” mirroring, or in any other method to imitate the appearance or function of the services.</p>
								<p>4.1.8. You may violate any applicable laws or regulations, and encourage or encourage any illegal activity such as trademark infringement copyright violation defamation privacy breach hacking of identities, or the distribution of fake software;</p>
								<p>4.1.9. You are able to modify or alter the source code of this website. You may also upload applications or software that may cause damage to the website or another individual.</p>
								<p>4.1.10. You are not allowed to disassemble, decompile or reverse engineer any technology or software that is on the website or utilized to provide the services.</p>
								<p>4.2. The terms of this agreement are in addition to any rights we might possess. If we believe that your use of the site is not in compliance with the terms of these terms, or any other applicable laws, we may be able to monitor your use of the website or the services or block access to it, or reveal your behavior patterns on the website to other parties or take any other appropriate measure to safeguard third-party rights and property.</p>
								<h3>5. Intellectual property rights</h3>
								<p>5.1. The website's content, including that is video-related, such as text images, logos, sounds, designs trademarks, and other material are protected by our and third-party intellectual property rights.</p>
								<p>5.2. All rights, titles and all rights and interests related to the services and website are ours. Other than the rights to utilize the services and the website in accordance to these conditions, the use by the user of the services and the website do not grant any intellectual property rights to them.</p>
								<p>5.3. The Website and/or the Services may only be accessed by the user only for personal, non-commercial use.</p>
								<p>5.4. You will not permit anyone to modify or reverse engineer, decompile or copy the services or website, or make derivative works using the sub-license or rent.</p>
								<h3>6. Limitation of liability</h3>
								<p>6.1. The Website and Services are the Responsibility of You. Any warranties, whether implied or expressly stated, regarding the website and services or your use of them including implied warranties of quality and merchantability, as well as the purpose for which it was designed like non-infringement and usability, authority in terms of accuracy, completeness, timeliness and prompt delivery are not provided by us. The content and functions accessible or accessible via the website are offered “as is,” “as accessible,” and “with any consequence.”</p>
								<p>6.2. We are not responsible for any mistakes, omissions, or inaccuracies of the information on the website. We do not take responsibility for any disruptions or interruption of transmissions to or through the services.</p>
								<p>6.3. We will indemnify you for any loss, directly or indirectly incurred by you or any third party through the website or services. You will be accountable for any decisions by relying on information on the website and/or in the services.</p>
								<p>6.4. We are not responsible for any loss or damage that directly, indirectly, or related to you or any other third person. This includes any loss of income or data that results from your usage of the site and/or services. This limitation of liability is allowed in the manner by law in the applicable region.</p>
								<p>6.5. If there's a technical issue with an Internet or telephone line or computer provider or system server, or any hardware we do not assume any responsibility. We are not accountable for any usage of the Internet.</p>
								<h3>7. Content and Services from Third Parties</h3>
								<p>7.1. You are able to view content from third parties and services when using the services. This could include ads or reviews of third-party platforms.</p>
								<p>7.2. We do not take responsibility for the information or products that are referred to. They may not be current or up-to-date at all times.</p>
								<p>7.3. We suggest that you verify the accuracy of all information prior to making any decision. You are accountable for all decisions and actions from the information.</p>
								<h3>8. Links</h3>
								<p>8.1. The site contains advertisements as well as content. The materials are made available through websites of third parties (“links”). We advise you to be aware of this before you download, rely on or access any information obtained from these websites, software or other materials or complete any purchase or other transactions we will advise you. These links are provided for the convenience of users only. We are not accountable for any damage or loss caused by the use or reliance on any information, products or services that are made available through other websites or programs.</p>
								<p>8.2. The inclusion of hyperlinks on this website does not imply endorsement, authorization or affiliation or any other form of endorsement by us in connection with the websites their software or administrators.</p>
								<p>8.3. We haven't reviewed all of the hyperlinks and cannot be held accountable for the software or website that are referred to. Before you decide to use, rely on or purchase anything from these websites or applications, we warn you. In no way will you be held accountable for any damage or loss caused by the use or reliance on any products, information or content accessible through other websites.</p>
								<p>8.4. It is your responsibility and obligation to review the terms and policies of any websites operated by third parties. We strongly suggest that you read them prior to making contact with third-party websites.</p>
								<h3>9. Miscellaneous</h3>
								<p>9.1. We are entitled to alter, cease or modify our services at any given moment. The changes won't cause any harm to you and you will not be able to assert any claims against us.</p>
								<p>9.2. The terms can be modified at anytime. We can change the terms anytime. We will inform you by publishing the most current version, and then revising the date on the top. Any modifications will be effective within a couple of working days. You are deemed to accept any modifications to the terms of the website if you continue to use it after they are released.</p>
								<p>9.3. The User acknowledges and agree that any information transmitted via or through the website does not create any kind of relationship that is not explicitly stated in these terms.</p>
								<p>9.4. These terms and the privacy policy, as well as the privacy policies, as amended from time to time are the sole valid agreements between us and the user and any other promise, declaration or agreement, whether oral or written, not included in the privacy policy is legally binding for the parties.</p>
								<p>9.5. Inability to exercise any right or power that is provided in is deemed to be a waiver of the right or power. Any one or only a portion of an exercise shall be an element of any additional or further exercise of the same or any other rights or remedies.</p>
								<p>9.6. These terms will be cancelled in the event that the provision in question is declared invalid by a court with competent jurisdiction. The remainder of the terms will be interpreted as in the event that the exclusion was implemented, and will be applied according to their terms. However, the terms will be interpreted in accordance with the intentions and meanings of the exclusion clauses according to the ruling of the courts.</p>
								<p>9.7. These terms permit third-party partners to transfer or assign the entire rights and obligations. Third-party operators are able to manage the website and all of its services, without restricting the previous. These terms do not permit you to assign or transfer the rights or obligations you have.</p>
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