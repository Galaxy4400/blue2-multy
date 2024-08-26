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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">ホーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">プラットフォーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">メリット</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">私たちのチーム</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">お問い合わせ</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">登録</a>
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
								<h1 class="policy__title h2">プライバシーポリシー</h1>
								<p class="policy__date">最終更新日:30/9/22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>当社（「当社」または「当社」とも呼ばれます）は、お客様の個人情報とプライバシーの保護に努めています。</p>
								<p>このプライバシーポリシーは、ウェブサイト {{site_name}}（以下「本ウェブサイト」）を通じてお客様が提供した情報を当社が収集および保存する方法についてお知らせすることを目的としています。</p>
								<p>以下の原則が守られます。</p>
								<ul>
									<li>お客様に関する個人情報の処理と収集について透明性を保つには:</li>
								</ul>
								<p>当社は、お客様が個人データの使用と処理について、十分な情報に基づいた選択を行えるようにしたいと考えています。これが、当社がウェブサイトを作成した理由です。そのために、当社はさまざまな方法や手順を採用して、個人データの使用に関する関連情報をユーザーに提供しています。</p>
								<p>お客様が特定の詳細情報を必要としていると判断した場合は、適切な日時に情報を提供します。</p>
								<p>お客様からのご質問には喜んでお答えし、法律によって課せられる制限に関して必要な説明を提供いたします。以下のアドレスに電子メールでお問い合わせください。info@ {{site_name}} .com</p>
								<ul>
									<li>個人データは、ポリシーで指定された目的にのみ使用されます。</li>
								</ul>
								<p>個人データは、お客様へのウェブサイト提供、第三者の取引プラットフォーム（以下「サービス」）との接続、サイトの強化、当社の権利と利益の保護、サービスの維持と提供の円滑化、規制上または法的義務の履行、サービスの提供と利用を促進するための管理上および事業上の活動の実施など、さまざまな目的で当社が処理する場合があります。</p>
								<p>また、お客様の好みやニーズをよりよく理解するために、個人データも処理されます。</p>
								<ul>
									<li>個人データに関するお客様の権利を保護するための重要なツールを利用するには：</li>
								</ul>
								<p>お客様の権利を行使できるように、当社には十分なリソースがあります。お客様の個人データに関する個人データについては、いつでも当社にご連絡ください。個人データを修正または削除し、特定の目的または一般的な目的での使用を停止します。お客様または外部の第三者に情報を転送します。お客様のご要望にお応えします。</p>
								<ul>
									<li>個人データの保護:</li>
								</ul>
								<p>お客様の個人データの完全なセキュリティを保証することはできませんが、お客様の個人データを確実に保護するために、さまざまな方法や手法を引き続き採用することは保証できます。</p>
								<p>当社のプライバシーとセキュリティに関する方針は完成しています。</p>
								<h3>1.スコープ？</h3>
								<p>このポリシーでは、企業が自然人について収集する個人データの種類と、その処理方法、第三者との共有方法、プロセスの保護方法などについて説明しています。</p>
								<p>本ポリシーは、特定された、または特定可能な自然人に関する情報に関するものです。特定可能な自然人とは、直接特定できる人物、または当社が所持している、またはアクセスできる追加情報の組み合わせとして定義できます。</p>
								<p>本ポリシーでは、「処理」を、個人データの使用または収集を必要とするプロセスと定義しています。これには、個人データの管理、構造化、保存が含まれます。</p>
								<p>当社のサービスは一般利用者を対象としており、18 歳未満の方による利用を目的としたものではありません。当社は、18歳未満の方から故意に情報を求めたり収集したりすることはありません。また、そのような人に当社のサービスの利用を故意に許可することもありません。当社は、発見した子供に関する情報を知った場合、できる限り速やかに消去します。</p>
								<h3>2.当社にはお客様に関するどのような個人データがありますか？</h3>
								<p>お客様がサービスやチャネルにアクセスしたり、当社のウェブサイトにアクセスしたりすると、個人データが収集されます。場合によっては、お客様の個人データを要求することがあります。また、当社のサービスやサービスチャネルの利用状況を分析したり、第三者のパートナーからお客様の情報を受け取ったりして、お客様の個人データを収集する場合もあります。</p>
								<h3>3.個人情報を会社に開示する必要はなく、その結果もありません。</h3>
								<p>ただし、個人データを当社に提供する義務はありません。ただし、状況によっては、個人データを当社に提供する必要がない場合もあります。これにより、当社によるサービスの提供が妨げられたり、ユーザーがウェブサイトにアクセスできなくなったりする可能性があります。</p>
								<h3>4.どのような種類の個人データを収集できますか？お客様が当社のウェブサイトにアクセスすると、以下の個人情報が収集されます。</h3>
								<p>これには、オンラインアクティビティログ、トラフィックに関するデータ (IP アドレス、アクセス日、アクセス時間、アクセス日を含む)、使用言語、ソフトウェアクラッシュログ、使用したブラウザの種類、使用したデバイスに関する情報が含まれます。収集した情報は個人情報ではないため、個人を特定することはできません。</p>
								<p>当社がお客様から受け取る個人データ：お客様が当社を通じて第三者のオンライン取引プラットフォームに接続する際に、お客様が任意で当社に提供する個人データ。</p>
								<p>取引を円滑に進めるためにお客様が第三者のプラットフォームに提供する個人情報：この情報には、お客様の氏名、住所、電話番号、電子メールアドレスが含まれます。</p>
								<h3>5.個人データを処理する法的根拠と理由</h3>
								<p>お客様の個人データは、本条に記載されている目的で、適用される法的根拠に従って会社によって処理されます。</p>
								<p>法的根拠がない限り、当社はお客様に関する個人データを使用することはできません。当社がお客様に関する個人データを処理するために使用できる法的根拠</p>
								<ul class="small">
									<li>お客様が 1 つまたは複数の理由で、お客様の個人データの処理に同意しました。これは、当社が第三者の取引プラットフォームに個人情報を転送するために、ウェブサイトを通じて個人情報を送信する場合です。</li>
									<li>当社または第三者は、正当な利益を得るために処理を必要とする場合があります。たとえば、サービスを改善したり、法的請求に応えたりするために必要です。</li>
									<li>処理には法的義務が課せられなければなりません。</li>
								</ul>
								<p>正当な利益を守るために必要な処理の詳細については、電子メールでお問い合わせください。</p>
								<p>以下は、お客様から提供された情報を当社が利用する理由と法的根拠のリストです。個人データ。</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">スコープ</div>
										<div class="table-1__header-column">法的根拠</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>デジタルトレーディングへのアクセスを求めるお客様のリクエストに応じて、お客様の個人情報を第三者に提供すること</p>
												<p>お客様から提供を求められた場合、当社は、第三者に個人データを転送するために、お客様から個人データを要求することがあります。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>お客様が 1 つまたは複数の理由で、お客様の個人データの処理に同意しました。</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>お客様のご要望、質問、懸念にお答えするには、本サービスに関するご質問にお答えするために、個人情報が必要です。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>会社の正当な利益または第三者の利益を処理する必要があります。</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>法的義務または行政上の義務を果たすため、司法上、法律上、司法上の個人データは法的要件を満たすように処理されます。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>法的義務を確実に遵守するには、処理が必要です。</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>当社のサービスを強化するために、当社は個人データを当社のサービスを強化するために使用する場合があります。これには、とりわけ、サービスに関連して収集したクラッシュまたは不具合の報告が含まれます。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>会社の正当な利益または第三者の利益を処理する必要があります。</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>当社サービスの詐欺や悪用を阻止するため</p>
											</div>
										</div>
										<div class="table-1__column">
											会社の正当な利益または第三者の利益を処理する必要があります。
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>当社のサービスの要件に沿ったアクションを実行および管理するための活動には、バックオフィス機能、事業開発活動、戦略的意思決定、監視メカニズムなどが含まれます。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>会社の正当な利益または第三者の利益を処理する必要があります。</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>さまざまな問題について決定を下すための統計分析などの分析を行うために、当社はさまざまな分析手法（統計的手法を含む）を採用しています。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>会社の正当な利益または第三者の利益を処理する必要があります。</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>当社および第三者の資産、権利、利益を保護するために、法的請求の確立と防御を目的として HTML0 を開発しました。当社または第三者の権利、利益、資産を保護するために、適用法、規制、合意、およびあらゆる条件、規約、ポリシーに従い、個人データを処理することがあります。</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>会社の正当な利益または第三者の利益を処理する必要があります。</p>
										</div>
									</div>
								</div>

								<h3>6.個人データの第三者への移転</h3>
								<p>また、ホスティングプロバイダーやストレージプロバイダーのIPアドレス情報、ユーザーエクスペリエンスの分析などのサービスを提供する第三者企業に、個人データを提供することもあります。</p>
								<p>また、お客様に関する特定の個人データを第三者の取引プラットフォームに提供するよう当社に依頼することもできます。このような場合にお客様から提供された個人データは、第三者の取引プラットフォームに提供されます。お客様の個人データの使用には、当該第三者のプライバシーポリシーが適用されます。個人データは複数の取引プラットフォームと共有される可能性があります。</p>
								<p>当社は、個人データを関連団体またはビジネスパートナーと共有できる可能性があります。これにより、顧客に提供する製品やサービスの強化と改善に必要なリソースを企業に提供できます。</p>
								<p>第三者または資産の権利を保護する必要がある場合、当社は規制当局、現地機関、またはその他の公的機関に個人データを開示することが許可されています。</p>
								<p>さらに、同じ取引が行われた場合（会社またはグループ内の他の会社に属する資産の譲渡または売却を含む）、または会社またはグループ内の他の事業の合併、再編、統合、破産の一環として、潜在的な投資家または買い手、または会社グループ内の他の会社の貸し手と、お客様に関する個人データを共有する場合があります。</p>
								<h3>7。第三者からのクッキーとサービス</h3>
								<p>当社のウェブサイトに広告を掲載するサービスや分析会社など、第三者のサービスを利用する可能性があります。これらの企業は、クッキーやその他の技術を利用することもあります。</p>
								<p>クッキーは小さなテキストファイルで、お客様がウェブサイトにアクセスしたりウェブサイトにアクセスしたりするたびにお客様のデバイスに保存されます。Cookie は、ユーザーの好みや閲覧習慣に関する情報を収集して、ユーザーエクスペリエンスを向上させたり、好みを追跡したり、お客様が楽しめる製品やサービスをカスタマイズしたりするために使用されます。クッキーは統計や分析にも使用されます。</p>
								<p>当社が利用できるクッキーの中には、セッションクッキーがあります。クッキーは一時的にお客様のデバイスにダウンロードされ、ブラウザを閉じるまで短時間保存されます。その他のクッキーは永続的です。パーシステントクッキーは、ブラウザを閉じた後も、一定期間デバイスに残ります。クッキーは、ウェブサイトがお客様をリピーターとして識別し、ユーザーがウェブサイトに戻ることができるようにするために使用されます。</p>
								<h3>クッキーの種類:</h3>
								<p>当社ではその目的に応じてクッキーを使用する場合があります。</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">クッキーの種類</div>
											<div class="table-2__text">
												<p>クッキーは絶対に必要です。</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">スコープ</div>
											<div class="table-2__text">
												<p>これらのクッキーは、お客様が求めている機能にアクセスしたり、当社のウェブサイトをナビゲートしたりするために必要です。クッキーは、お客様からリクエストされた情報、製品、サービスを提供するために使用されます。</p>
												<p>クッキーは、お使いのデバイスがデータをダウンロードしたりストリーミングしたりするために必要です。これにより、ウェブサイト内をナビゲートしてその機能を利用し、以前に閲覧したページに戻ることができます。</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">追加情報</div>
											<div class="table-2__text">
												<p>クッキーは、ユーザーがサイトにログインしていることを確認するために、ユーザー名や最終ログイン日などの個人データを収集します。</p>
												<p>ウェブブラウザを閉じると消去されます (セッションクッキー)。</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">クッキーのタイプ。</div>
											<div class="table-2__text">
												<p>機能性クッキー。</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">スコープ</div>
											<div class="table-2__text">
												<p>クッキーにより、当社は、お客様が当社サイトにアクセスするたびにお客様を認識し、お客様の好みや好みを保存することができます。</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">追加情報</div>
											<div class="table-2__text">
												<p>これらは有効期限まで有効で、ブラウザを閉じた後でも保存されます。</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">クッキーのタイプ。</div>
											<div class="table-2__text">
												<p>パフォーマンス用クッキー</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">スコープ</div>
											<div class="table-2__text">
												<p>クッキーは、サイトのパフォーマンスに関する統計データを収集するためだけでなく、サイトのパフォーマンス向上のためにも使用されます。また、クッキーにより当社ウェブサイト上で分析を行うこともできます。</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">追加情報</div>
											<div class="table-2__text">
												<p>クッキーには、特定可能または特定された自然人とは関係のない匿名のデータが保存されます。</p>
												<p>クッキーは、ブラウザを終了すると削除できます。その他のクッキーは無期限に有効です。</p>
											</div>
										</div>
									</div>
								</div>


								<p>Cookie はブロックまたは削除されます。</p>
								<p>Cookie を防止または削除するには、ブラウザの設定を変更する必要があります。以下は、よく知られているいくつかのブラウザでの処理に役立つリンクです。</p>
								<ul class="small">
									<li>Firefox</li>
									<li>マイクロソフトエッジ</li>
									<li>グーグル・クローム</li>
									<li>サファリ</li>
								</ul>
								<p>ただし、その場合、Web サイトの一部または全体の機能が期待どおりに機能しない可能性があることに注意してください。</p>
								<h3><br>オンライン追跡通知このサービスは現在、追跡禁止信号をサポートしていません。<br>8.お客様に関する個人データの保持</h3>
								<p>当社は、本ポリシーに記載されているように、個人データを処理する目的を果たすために必要な限り、または法律や規制、ポリシー、および該当する命令で許可されている期間を延長して、お客様に関する個人データを保持したいと考えています。</p>
								<p>当社は、お客様の情報を第三者の取引プラットフォームと12か月間共有します。お客様がこれに同意した場合、当社はお客様のデータをさらに12か月間共有し続けます。</p>
								<p>弊社は、保管していた個人データを定期的に見直し、不要になったことを確認しています。</p>
								<h3>9.第三国または国際機関への個人情報の転送</h3>
								<p>お客様の個人情報は、他の国に転送されることがあります（つまり、お客様の個人データが第三国（つまり、お客様が居住している国とは別の国）または国際機関に転送されることがあります。国際機関または管轄区域。当社は、お客様が提供する個人データを保護し、データ利用者が自らの権利を主張し、有効な法的手段にアクセスできるようにするために必要なすべての措置を講じます。</p>
								<p>これらの保護と保護措置は、EEA（欧州経済地域）に居住するすべての人が利用できます。</p>
								<ul class="small">
									<li>2016 年 4 月 27 日の欧州議会および理事会の規則 2016/679 の第 45 (3) 条に従い、転送された個人データの安全性が十分にあると欧州委員会が判断した第三国または国際機関への移転。(「GDPR」)</li>
									<li>移転は、第46条 (2) (a) に規定された公的機関または当局間の法的拘束力があり、法的拘束力があり、かつ強制力のある合意に従って行われます。</li>
									<li>移転は、GDPR第46条 (2) (c) に基づいて欧州委員会が採択した共通データ保護条項に従って行われました。欧州委員会が採択した条項は https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en でご覧いただけます。</li>
								</ul>
								<p>当社は、第三者の国または国際機関に転送されるお客様の個人データを保護するために採用しているセキュリティ対策に関する情報を提供することができます。次のアドレス info@wealthwaydigital.uk にメールを送信してください。</p>
								<h3>10.個人データのセキュリティ</h3>
								<p>当社は、個人データを保護するために適切な組織的および技術的予防措置を講じています。これには、個人データの偶発的または違法な破壊、紛失、または変更の防止が含まれます。</p>
								<p>当社は、お客様の個人データのセキュリティがエラーなく維持されることを保証することはできません。また、個人データの使用または開示から生じる無形損害、付随的損害、または結果的損害についても、弊社は責任を負いかねます。ただし、これには、送信時のエラー、第三者による不正アクセス、または当社の管理が及ばないその他の原因により開示された個人データには限定されません。</p>
								<p>法的義務または当社の管理が及ばないその他の義務が発生した場合、当社はお客様に関する個人データを公的機関などの第三者に提供するよう求められることがあります。このような状況では、第三者がお客様の個人データに与えるセキュリティを当社が管理することはできません。</p>
								<p>個人データを完全に安全な方法でウェブ経由で転送することはできません。当社は、お客様がインターネットを通じて当社に送信する個人データのセキュリティを保証することはできません。</p>
								<h3>11.第三者のウェブサイトに属するウェブサイトへのハイパーリンク</h3>
								<p>本ウェブサイトには、第三者のサイトやアプリケーションへのリンクが掲載されています。これらのアプリケーションおよびウェブサイトは、当社の監督下にはありません。これらのウェブサイトまたはアプリによる個人データの収集または処理について、当社は責任を負いません。本ポリシーは、そのようなサイトやアプリを通じて行われる行為には適用されません。</p>
								<p>第三者のウェブサイトやアプリにアクセスする際は、そのアプリへのアクセスや使用を決定する前に、その第三者のプライバシーポリシーを読むことをお勧めします。また、個人データを第三者に提供することもお勧めします。</p>
								<h3>12.本ポリシーの修正</h3>
								<p>本方針は随時変更されることがあります。本ポリシーを変更する場合、更新されたポリシーを当社のウェブサイトに掲載することで変更を通知します。さらに、本ポリシーに大幅な変更を加える場合は、適切と思われる方法でお客様に通知するよう努め、その旨を当社のウェブサイトに掲載します。すべての修正は、特に明記されていない限り、改訂されたポリシーが公開された後に有効になります。</p>
								<h3>13.個人情報に関するお客様の権利</h3>
								<p>お客様には、お客様に関して収集されている個人データの正確性の確認、誤りの訂正、および当社が必要としないすべての個人データの削除を当社に要求する権利があります。また、個人情報の処理の種類を制限することもできます。</p>
								<p>欧州経済領域（EEA）居住者の方は、以下のページを参照してください。</p>
								<p>これらの権利は、個人データに関連して提供した情報に関して利用者が利用することができます。以下のアドレスにメールを送ることで、保有する権利の行使をリクエストできます。</p>
								<p>アクセス権</p>
								<p>当社は、お客様に関して処理されている個人データの正確性を検証することができます。お客様がご自身の個人データにアクセスできる場合。</p>
								<p>当社は、現在処理中の個人データの電子コピーを提供したいと考えており、追加のコピーには妥当な手数料を請求する可能性があります。お客様からの要請があれば、データは電子的に提供されます。</p>
								<p>個人データにアクセスする権利は、他者の権利や自由と矛盾してはなりません。要求が他者の権利と自由、またはその権利を損なう場合、会社はその要求に応じないか、その要求に応じる能力を制限することができます。</p>
								<p>修正を求める権利</p>
								<p>当社には、不正確な個人データを修正する権利があります。お客様には、処理の理由を考慮して、ご自身に関する不十分な個人データの修正を要求する権利があります。</p>
								<p>削除する権利</p>
								<p>以下の理由が該当します。(a) 個人データが収集または処理された目的のためにはもはや必要ではない、(b) 同意を撤回し、処理する法的根拠がない、(c) お客様が、状況に固有の理由により、お客様に関する個人データの処理が当社または第三者によって追求される正当な利益に基づくことに対していつでも異議を申し立てること、(e) 個人データが違法に処理されていることまたは f) 会社の法的義務を果たすためには、個人データを削除する必要があります。</p>
								<p>この権利は、(a) 欧州連合法または加盟国法に基づいて処理が義務付けられている法律によって課せられた義務を履行するため、または (b) 法的権利を創造、行使、または保護するために処理が必要な場合には適用されません。</p>
								<p>処理制限</p>
								<p>個人データの正確性に懸念がある場合は、個人データの処理を制限するよう会社に依頼することができます。</p>
								<p>個人データの制限を求める場合、お客様の同意があった場合、法的権利を創出、行使、擁護するため、あるいは他の自然人の権利を守るため、あるいは欧州連合または加盟国内で重大な公共の利益となるような理由がある場合に限り、個人データを保持することができます。</p>
								<p>データポータビリティの権利</p>
								<p>処理が自動システムによって行われ、お客様の同意または契約に関わる契約に基づいている場合、お客様には、会社に提供した個人データを確認する法的権利および権利があります。</p>
								<p>技術的に可能な場合は、個人データを会社から別の管理者に直接転送するよう求める権利があります。データを譲渡する権利を行使しても、消去権に基づくお客様の権利は変わりません。データを転送する権利が他者の権利や自由を妨げることはありません。</p>
								<p>異議を申し立てる権利</p>
								<p>当社または第三者が追求する正当な利益に基づくお客様に関する個人データの使用に異議を申し立てる権利は、いつでも可能です。これは、これらの正当な利益のみに基づくプロファイリングに限定されません。当社が個人データを処理するための説得力のある正当な根拠を確立できたとしても、それがお客様の権利、自由、利益、または法的権利の行使、確立、防御を上回っていることをお客様が証明できない限り、それを継続することはできません。</p>
								<p>ダイレクトマーケティングに関しては、お客様にはいつでもご自身に関する個人データの処理に反対する権利があります。</p>
								<p>同意を拒否する権利</p>
								<p>お客様は、当社がお客様の個人データを処理することへの同意をいつでも取り消すことができます。これにより、削除前にお客様の同意が必要とされていた処理の合法性および合法性は変わりません。</p>
								<p>お客様には、ご自身を監督する機関に苦情を申し立てる権利があります。</p>
								<p>欧州連合内での個人データの処理に関する個人の基本的権利を保護するために、加盟国が設置した監督機関に異議を申し立てることができます。</p>
								<p>本第13条に詳述されているように、欧州連合および加盟国の法律により、お客様に関する個人データに関するお客様の権利が制限される場合があります。</p>
								<p>当社は、お客様からの要請を受けてから1か月以内に、本契約の第13条に定めるお客様の権利に従い、要求された情報をお客様に提供します。この期間は、リクエストの性質やリクエストの量にもよりますが、必要に応じて最大 2 か月まで延長できます。リクエストを受け取ってから1か月以内に、延長があった場合はその理由とともに通知します。</p>
								<p>法律第13条の規定に反しない限り、第13条に基づくお客様の権利に基づいてお客様が要求する情報は、無料で提供されます。要求が正当でない、または過剰である場合、特に要求が繰り返される場合、当社は、情報の提供または要求された措置の発表にかかる管理費を賄うために妥当な金額を請求することがあります。また、当社は何もしない場合もあります。</p>
								<p>リクエストを送信した実在の人物の身元について疑いがある場合リクエストを行った人物の身元について疑わしい場合、会社はさらなる情報を求めることがあります。</p>
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