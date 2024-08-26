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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">홈</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">플랫폼</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">혜택</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">우리 팀</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">문의하기</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">등록하기</a> 
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
								<h1 class="policy__title h2">개인정보 보호 정책</h1>
								<p class="policy__date">최종 업데이트: 30/9/22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>당사 (“당사”, “당사” 또는 “당사의”라고도 함) 는 귀하의 개인 데이터와 개인 정보를 보호하기 위해 최선을 다하고 있습니다.</p>
								<p>본 개인정보 보호정책은 웹사이트 {{site_name}} (이하 “웹사이트”) 를 통해 귀하가 제공하는 정보를 수집하고 저장하는 방법을 알려드리기 위해 고안되었습니다.</p>
								<p>다음과 같은 원칙은 옹호될 것입니다.</p>
								<ul>
									<li>귀하에 관한 개인 정보의 처리 및 수집에 대해 투명하게 설명하기 위해:</li>
								</ul>
								<p>당사는 귀하가 개인 데이터의 사용 및 처리와 관련하여 정보에 입각한 선택을 할 수 있는 위치에 있기를 바랍니다.이것이 바로 우리가 웹사이트를 만든 이유입니다.이를 위해 당사는 다양한 방법과 절차를 사용하여 개인 데이터 사용에 관한 관련 정보를 제공합니다.</p>
								<p>특정 세부 정보가 필요하다고 판단되면 적절한 날짜와 시간에 정보를 제공합니다.</p>
								<p>궁금한 점이 있으면 기꺼이 답변해 드리며 법률에 의해 부과된 제한 사항과 관련하여 필요한 모든 설명을 제공해 드리겠습니다.아래 주소로 이메일을 보내 연락할 수 있습니다. info@ {site_name}} .com</p>
								<ul>
									<li>개인 데이터는 정책에 명시된 목적으로만 사용됩니다.</li>
								</ul>
								<p>당사는 웹 사이트를 귀하에게 제공하고, 귀하를 제3자 거래 플랫폼 (이하 “서비스”) 과 연결하고, 사이트를 개선하고, 당사의 권리, 이익을 보호하고, 서비스의 유지 관리 및 제공을 용이하게 하고, 규제 또는 법적 의무를 준수하고, 서비스의 제공 및 사용을 용이하게 하기 위한 행정 및 비즈니스 활동을 수행하는 등 다양한 목적으로 개인 데이터를 처리할 수 있습니다.</p>
								<p>또한 당사는 귀하의 선호도와 요구 사항을 더 잘 이해하기 위해 개인 데이터를 처리합니다.</p>
								<ul>
									<li>중요한 도구를 사용하여 개인 데이터와 관련된 귀하의 권리를 보호하려면:</li>
								</ul>
								<p>귀하의 권리를 행사할 수 있도록 당사는 상당한 자원을 보유하고 있습니다.개인 데이터에 관한 개인 데이터를 요청하려면 언제든지 저희에게 연락하십시오.당사는 이를 수정 또는 삭제하고 특정 목적 또는 일반 목적으로의 사용을 중단할 것입니다.정보를 귀하 또는 외부 당사자에게 전송하십시오.귀하의 요청을 수용할 수 있을 것입니다.</p>
								<ul>
									<li>개인 데이터를 보호하세요:</li>
								</ul>
								<p>개인 데이터의 완전한 보안을 보장할 수는 없지만 개인 데이터를 보호하기 위해 다양한 방법과 기술을 계속 사용할 것임을 보장할 수 있습니다.</p>
								<p>당사의 개인정보 보호 및 보안 정책은 완전합니다.</p>
								<h3>1.스코프?</h3>
								<p>이 정책은 회사가 자연인에 대해 수집하는 개인 데이터의 유형과 이를 처리하고, 제3자와 공유하고, 프로세스를 보호하는 방법 등을 설명합니다.</p>
								<p>이 정책은 식별되거나 식별 가능한 자연인과 관련된 정보에 관한 것입니다.식별 가능한 자연인은 직접 식별이 가능한 사람 또는 당사가 보유하고 있거나 액세스할 수 있는 추가 정보의 조합으로 정의될 수 있습니다.</p>
								<p>정책에서는 “처리”를 개인 데이터의 사용 또는 수집이 필요한 프로세스로 정의합니다.여기에는 개인 데이터의 관리, 구조화 및 저장이 포함됩니다.</p>
								<p>당사의 서비스는 일반 사용자를 대상으로 하며 18세 미만의 미성년자가 사용할 수 있도록 설계되지 않았습니다.당사는 18세 미만의 개인으로부터 고의로 정보를 구하거나 수집하지 않습니다. 당사는 그러한 사람이 당사의 서비스를 사용하는 것을 고의로 허용하지 않습니다.당사는 아동에 관한 정보를 알게 되는 경우 가능한 한 빨리 지울 것입니다.</p>
								<h3>2.당사가 보유한 귀하의 개인 데이터는 무엇입니까?</h3>
								<p>서비스 및 채널에 접속하거나 당사 웹사이트를 방문하는 경우 당사는 개인 데이터를 수집합니다.경우에 따라 개인 데이터를 요청할 수 있습니다.다른 경우에는 당사의 서비스 또는 서비스 채널 사용을 분석 및 분석하거나 타사 파트너로부터 사용자 정보를 수신하여 개인 데이터를 수집합니다.</p>
								<h3>3.개인 정보를 회사 및 그 결과에 공개할 필요는 없습니다.</h3>
								<p>하지만 개인 데이터를 당사에 제공할 의무는 없습니다.그러나 특정 상황에서는 당사에 개인 데이터를 제공하지 않아도 될 수 있습니다.이로 인해 서비스를 제공하지 못하거나 사용자가 웹사이트에 액세스하는 데 방해가 될 수 있습니다.</p>
								<h3>4.어떤 종류의 개인 데이터를 수집할 수 있나요?귀하가 당사 웹사이트를 방문할 때 당사는 다음과 같은 개인 정보를 수집합니다.</h3>
								<p>여기에는 온라인 활동 로그에 대한 정보, 트래픽에 대한 데이터 (IP 주소, 액세스 날짜, 액세스 시간 및 액세스 날짜 포함), 사용한 언어, 소프트웨어 충돌 로그, 사용한 브라우저 유형 및 사용한 장치에 관한 정보가 포함됩니다.수집한 정보는 개인 정보가 아니므로 사용자를 식별하는 데 사용할 수 없습니다.</p>
								<p>당사가 귀하로부터 받는 개인 데이터: 당사를 통해 제3자의 온라인 거래 플랫폼에 연결할 때 귀하가 원하는 대로 당사에 제공하는 모든 개인 데이터.</p>
								<p>거래를 용이하게 하기 위해 제3자 플랫폼에 귀하가 특별히 제공하는 개인 정보: 이 정보에는 귀하의 전체 이름, 주소, 전화번호 및 이메일 주소가 포함됩니다.</p>
								<h3>5.개인 데이터 처리의 법적 근거 및 이유</h3>
								<p>회사는 이 섹션에 설명된 목적을 위해 해당 법적 근거에 따라 귀하의 개인 데이터를 처리합니다.</p>
								<p>법적 근거 없이는 회사는 귀하와 관련된 개인 데이터를 사용할 수 없습니다.회사가 귀하와 관련된 개인 데이터를 처리하는 데 사용할 수 있는 법적 근거:</p>
								<ul class="small">
									<li>귀하는 한 가지 또는 여러 가지 이유로 개인 데이터 처리에 동의했습니다.당사가 해당 정보를 제3자 거래 플랫폼으로 전송할 수 있도록 웹사이트를 통해 개인정보를 제출하는 경우입니다.</li>
									<li>회사 또는 제3자는 정당한 이익을 충족하기 위해 정보 처리가 필요할 수 있습니다.예를 들어, 서비스를 개선하거나 법적 청구를 방어하기 위해 필요합니다.</li>
									<li>처리는 법적 의무를 준수해야 합니다.</li>
								</ul>
								<p>정당한 이익을 보호하는 데 필요한 처리에 관한 자세한 내용은 이메일을 통해 문의하십시오.</p>
								<p>다음은 귀하가 제공한 정보를 당사가 사용할 수 있는 이유와 법적 근거의 목록입니다.개인 데이터.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">범위</div>
										<div class="table-1__header-column">법적 근거</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>디지털 거래에 대한 액세스 권한 부여 요청에 따라 제3자에게 개인 정보 제공</p>
												<p>귀하가 요청하는 경우 당사는 이를 제3자에게 전달하기 위해 귀하에게 개인 데이터를 요청할 수 있습니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>귀하는 한 가지 또는 여러 가지 이유로 개인 데이터 처리에 동의했습니다.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>요청, 질문 또는 우려 사항에 답변하려면 서비스와 관련된 질문에 답변하는 데 도움이 되는 개인 데이터가 필요합니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>회사의 정당한 이익 또는 제3자의 이익을 처리해야 합니다.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>법적 의무 또는 행정적, 사법 또는 법적 또는 사법적 의무를 이행하기 위해 법적 요구 사항을 충족하도록 개인 데이터가 처리됩니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>법적 의무를 준수하려면 처리가 필요합니다.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>서비스를 개선하기 위해 당사는 개인 데이터를 사용하여 서비스를 개선할 수 있습니다.여기에는 무엇보다도 서비스와 관련하여 수집한 충돌 또는 오작동 보고서가 포함됩니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>회사의 정당한 이익 또는 제3자의 이익을 처리해야 합니다.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>당사 서비스의 사기 및 오용을 막기 위해</p>
											</div>
										</div>
										<div class="table-1__column">
회사의 정당한 이익 또는 제3자의 이익을 처리해야 합니다.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>당사 서비스의 요구 사항에 부합하는 활동을 수행하고 관리하기 위한 활동에는 백오피스 기능, 비즈니스 개발 활동, 전략적 의사 결정, 감독 메커니즘 등이 포함됩니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>회사의 정당한 이익 또는 제3자의 이익을 처리해야 합니다.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>다양한 문제에 대한 결정을 내리기 위한 통계 분석과 같은 분석을 수행하기 위해 당사는 다양한 분석 기법 (통계적 기법 포함) 을 사용합니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>회사의 정당한 이익 또는 제3자의 이익을 처리해야 합니다.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>당사뿐만 아니라 제3자의 자산, 권리 및 이익을 보호하기 위해 당사는 법적 청구를 확립하고 방어하기 위해 HTML0 제품을 개발했습니다. 당사는 관련 법률, 규정 또는 계약 및 조건, 약관 또는 정책에 따라 당사 또는 제3자의 권리, 이익 및 자산을 보호하기 위해 개인 데이터를 처리할 수 있습니다.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>회사의 정당한 이익 또는 제3자의 이익을 처리해야 합니다.</p>
										</div>
									</div>
								</div>

								<h3>6.제3자에게 개인 데이터 전송</h3>
								<p>회사는 또한 호스팅 및 스토리지 제공업체, IP 주소 정보, 사용자 경험 분석 등의 서비스를 제공하는 제3자에게 개인 데이터를 제공할 수 있습니다.</p>
								<p>또한 귀하에 관한 특정 개인 데이터를 타사 거래 플랫폼에 제공하도록 요청할 수도 있습니다.이러한 경우 당사는 귀하가 당사에 제공한 귀하의 개인 데이터를 제3자의 거래 플랫폼에 제공할 것입니다.개인 데이터 사용에는 해당 업체의 개인정보 보호정책이 적용됩니다.개인 데이터를 여러 거래 플랫폼과 공유할 수 있습니다.</p>
								<p>회사는 관련 기관 또는 비즈니스 파트너와 개인 데이터를 공유할 수 있습니다.이를 통해 회사는 고객에게 제공하는 제품 및 서비스를 개선하고 개선하는 데 필요한 자원을 확보할 수 있습니다.</p>
								<p>제3자 또는 자산의 권리를 보호해야 하는 경우 회사는 규제 기관, 지역 또는 기타 공식 기관에 개인 데이터를 공개할 수 있습니다.</p>
								<p>또한 당사는 동일한 거래 (회사 또는 그룹 내 다른 회사에 속한 자산의 양도 또는 매각 포함) 가 발생하는 경우 또는 회사 또는 그룹 내 다른 비즈니스의 합병 또는 구조 조정, 통합 또는 파산의 일환으로 잠재적 투자자 또는 구매자 또는 회사 그룹의 대출 기관과 귀하에 관한 개인 데이터를 공유할 수 있습니다.</p>
								<h3>7.제3자의 쿠키 및 서비스</h3>
								<p>당사 웹 사이트에 광고를 제공하는 서비스 또는 분석 회사와 같은 타사 서비스를 활용할 수 있습니다.이러한 회사는 쿠키 또는 기타 기술을 활용할 수도 있습니다.</p>
								<p>쿠키는 웹 사이트를 방문하거나 액세스할 때마다 장치에 저장되는 작은 텍스트 파일입니다.쿠키는 사용자의 기본 설정 및 탐색 습관에 대한 정보를 수집하여 사용자 경험을 개선하고, 기본 설정을 추적하고, 즐길 수 있는 제품 및 서비스를 사용자 지정하는 데 사용됩니다.쿠키는 통계 및 분석에도 사용됩니다.</p>
								<p>당사가 사용할 수 있는 특정 쿠키는 세션 쿠키입니다.쿠키는 일시적으로 기기에 다운로드되며 브라우저를 닫기 전까지 잠시 동안 지속됩니다.다른 쿠키는 영구적입니다.영구 쿠키는 브라우저를 닫은 후에도 일정 기간 장치에 남아 있습니다.쿠키는 웹 사이트에서 사용자를 재방문 사용자로 식별하고 사용자가 웹 사이트로 돌아올 수 있도록 하는 데 사용됩니다.</p>
								<h3>쿠키 유형:</h3>
								<p>당사는 쿠키의 용도에 따라 쿠키를 사용할 수 있습니다.</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">쿠키 유형</div>
											<div class="table-2__text">
												<p>쿠키는 반드시 필요합니다.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">범위</div>
											<div class="table-2__text">
												<p>이러한 쿠키는 귀하가 요청한 기능에 액세스하고 당사 웹사이트를 탐색하는 데 필요합니다.쿠키는 귀하가 요청한 정보, 제품 및 서비스를 제공하는 데 사용됩니다.</p>
												<p>디바이스에서 데이터를 다운로드하고 스트리밍하려면 쿠키가 필요합니다.이렇게 하면 웹 사이트를 탐색하고 해당 기능을 활용한 다음 이전에 방문했던 페이지로 돌아갈 수 있습니다.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">추가 정보</div>
											<div class="table-2__text">
												<p>쿠키는 사용자 이름 및 마지막 로그인 날짜와 같은 개인 데이터를 수집하여 사이트에 로그인했음을 확인합니다.</p>
												<p>웹 브라우저를 닫으면 쿠키가 지워집니다 (세션 쿠키).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">쿠키 유형</div>
											<div class="table-2__text">
												<p>기능성 쿠키</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">범위</div>
											<div class="table-2__text">
												<p>쿠키를 사용하면 사용자가 당사 사이트를 방문할 때마다 사용자를 인식하고 사용자의 기본 설정 및 기본 설정을 저장할 수 있습니다.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">추가 정보</div>
											<div class="table-2__text">
												<p>쿠키는 만료일까지 지속되며 브라우저가 종료된 후에도 저장됩니다.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">쿠키 유형</div>
											<div class="table-2__text">
												<p>퍼포먼스용 쿠키</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">범위</div>
											<div class="table-2__text">
												<p>쿠키는 사이트 성능에 대한 통계 데이터를 수집하고 사이트 성능을 향상시키는 데 사용됩니다.또한 쿠키를 통해 당사 웹사이트에서 분석을 수행할 수 있습니다.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">추가 정보</div>
											<div class="table-2__text">
												<p>쿠키는 식별 가능하거나 식별된 자연인과 관련이 없는 익명의 데이터를 저장합니다.</p>
												<p>브라우저를 종료하면 쿠키가 제거될 수 있습니다.다른 쿠키들은 무기한으로 유효합니다.</p>
											</div>
										</div>
									</div>
								</div>


								<p>쿠키가 차단되거나 제거되었습니다.</p>
								<p>쿠키를 방지하거나 제거하려면 브라우저 설정을 변경해야 합니다.다음은 가장 잘 알려진 일부 브라우저의 프로세스를 도와주는 링크입니다.</p>
								<ul class="small">
									<li>파이어폭스</li>
									<li>마이크로소프트 엣지</li>
									<li>구글 크롬</li>
									<li>사파리</li>
								</ul>
								<p>하지만 이 경우 특정 또는 전체 웹 사이트 기능 및 기능이 예상대로 작동하지 않을 수 있다는 점에 유의하세요.</p>
								<h3>온라인 추적 안내 <br> 이 서비스는 현재 추적 금지 신호를 지원하지 않습니다.<br>8.귀하에 관한 개인 데이터 보존</h3>
								<p>회사는 본 정책에 설명된 대로 개인 데이터 처리의 목적을 달성하는 데 필요한 기간 동안 또는 법률이나 규정, 정책 및 해당 명령에서 허용하는 한 더 오랜 기간 동안 귀하에 관한 개인 데이터를 보관하고자 합니다.</p>
								<p>당사는 12개월 동안 제3자의 거래 플랫폼과 귀하의 정보를 공유할 것입니다.이에 동의하면 당사는 12개월 동안 계속해서 귀하의 데이터를 공유할 것입니다.</p>
								<p>당사는 보관하고 있는 개인 데이터를 정기적으로 검토하여 더 이상 필요하지 않은지 확인합니다.</p>
								<h3>9.제3자 국가 또는 국제기구로의 개인 정보 전송</h3>
								<p>귀하의 개인정보는 다른 국가로 이전될 수 있습니다 (즉, 귀하의 개인정보는 제3국 (즉, 귀하가 거주하는 국가 이외의 추가 국가) 또는 국제기구로 전송될 수 있습니다.국제기구 또는 관할 구역.회사는 귀하가 제공하는 개인 데이터를 보호하고 데이터 사용자가 자신의 권리를 주장하고 유효한 법적 수단을 이용할 수 있도록 하기 위해 필요한 모든 조치를 취합니다.</p>
								<p>이러한 보호 및 보호 장치는 EEA (유럽경제지역) 에 거주하는 모든 사람이 이용할 수 있습니다.</p>
								<ul class="small">
									<li>2016년 4월 27일 유럽 의회 및 이사회 규정 2016/679 제45조 (3) 항에 따라 EU 위원회가 해당 국가로 전송되는 개인 데이터의 적절한 보안을 보장한다고 판단한 제3국 국가 또는 국제기구로 이전하는 경우(“GDPR”)</li>
									<li>이전은 제46조 (2) (a) 항의 공공 기관 또는 당국 간의 법적 구속력이 있고 법적 구속력이 있으며 집행 가능한 계약에 따라 이루어집니다.</li>
									<li>전송은 GDPR 제46조 (2) (c) 항에 따라 EU 위원회가 채택한 공통 데이터 보호 조항에 따라 이루어졌습니다.EU 위원회가 채택한 조항은 https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en 에서 확인할 수 있습니다.</li>
								</ul>
								<p>회사는 제3자 국가 또는 국제기구로 전송되는 귀하의 개인 데이터를 보호하기 위해 사용하는 보안 조치에 대한 정보를 제공할 수 있습니다.다음 주소 (info@wealthwaydigital.uk) 로 이메일을 보내십시오.</p>
								<h3>10.개인 데이터 보안</h3>
								<p>당사는 개인 데이터를 보호하기 위해 적절한 조직적, 기술적 예방 조치를 취했습니다.여기에는 개인 데이터의 우발적 또는 불법적인 파기, 손실 또는 수정의 방지가 포함됩니다.</p>
								<p>당사는 귀하의 개인 데이터 보안이 오류 없이 유지될 것이라고 보장하거나 보증할 수 없습니다.또한 당사는 개인 데이터의 사용 또는 공개로 인해 발생하는 무형적, 부수적 또는 결과적 손해에 대해 책임을 질 수 없습니다.그러나 여기에는 전송 오류, 제3자의 무단 액세스 또는 당사의 통제를 벗어난 기타 원인으로 인해 공개되는 개인 데이터가 포함되며 이에 국한되지 않습니다.</p>
								<p>당사가 통제할 수 없는 법적 의무나 기타 의무가 있는 경우, 당사는 공공 기관 등 제3자에게 귀하에 관한 개인 데이터를 제공해야 할 수 있습니다.당사는 이러한 상황에서 제3자가 사용자의 개인 데이터에 제공하는 보안을 통제할 수 없습니다.</p>
								<p>개인 데이터는 웹을 통해 완전히 안전한 방식으로 전송할 수 없습니다.회사는 귀하가 인터넷을 통해 당사에 전송하는 개인 데이터의 보안을 보장할 수 없습니다.</p>
								<h3>11.타사 웹 사이트에 속한 웹 사이트로 연결되는 하이퍼링크</h3>
								<p>타사 사이트 및 애플리케이션으로 연결되는 링크가 웹 사이트에 제공됩니다.이러한 애플리케이션 및 웹 사이트는 회사의 감독을 받지 않습니다.당사는 이러한 웹 사이트 또는 앱의 개인 데이터 수집 또는 처리에 대해 책임을 지지 않습니다.본 정책은 해당 사이트 또는 앱을 통해 취해진 조치에는 적용되지 않습니다.</p>
								<p>타사 웹 사이트 또는 앱을 방문할 때는 앱 액세스 또는 사용을 결정하기 전에 해당 회사의 개인정보 보호정책을 읽어보는 것이 좋습니다.또한 모든 개인 데이터를 해당 업체에 제공하는 것이 좋습니다.</p>
								<h3>12.본 정책의 수정</h3>
								<p>본 정책은 언제든지 변경될 수 있습니다.이 정책이 변경되는 경우 업데이트된 정책을 당사 웹사이트에 게시하여 변경 사항을 알려드립니다.또한 본 정책을 크게 수정하는 경우 적절하다고 판단되는 방법을 사용하여 귀하에게 알리고 당사 웹 사이트에 공지 사항을 게시할 것입니다.명시적으로 명시되지 않는 한 모든 수정 사항은 개정된 정책이 게시된 후 효력을 발휘합니다.</p>
								<h3>13.개인 정보에 관한 귀하의 권리</h3>
								<p>귀하는 귀하와 관련하여 수집되는 개인 데이터의 정확성을 확인하고, 실수를 수정하고, 당사가 요구하지 않는 모든 개인 데이터를 삭제하도록 당사에 요청할 권리가 있습니다.또한 개인 정보 처리 유형의 범위를 제한할 수도 있습니다.</p>
								<p>EEA 거주지의 거주자인 경우 다음 페이지를 참조하십시오.</p>
								<p>이러한 권리는 개인 데이터와 관련하여 귀하가 제공하는 정보와 관련하여 이용할 수 있습니다.아래 주소로 이메일을 보내 권리를 행사하도록 요청할 수 있습니다.</p>
								<p>접근 권한</p>
								<p>회사는 귀하에 대해 처리되고 있는 개인 데이터의 정확성을 확인할 수 있습니다.해당 직원이 귀하의 개인 데이터에 액세스할 수 있는 경우</p>
								<p>회사는 현재 처리 중인 개인 데이터의 전자 사본을 제공하고자 하며 추가 사본에 대해 합당한 수수료를 부과할 수 있습니다.요청하시면 해당 데이터를 전자적으로 이용할 수 있습니다.</p>
								<p>개인 데이터에 접근할 수 있는 권리는 타인의 권리 및 자유와 상충되지 않아야 합니다.요청이 타인의 권리와 자유 또는 권리를 침해하는 경우 회사는 요청을 거부하거나 요청 이행 능력을 제한할 수 있습니다.</p>
								<p>시정할 권리</p>
								<p>회사는 부정확한 개인 데이터를 수정할 권리가 있습니다.귀하는 처리 사유를 고려하여 귀하에 관한 불충분한 개인 데이터를 수정하도록 요구할 권리가 있습니다.</p>
								<p>삭제할 권리</p>
								<p>다음과 같은 이유가 적용됩니다. (a) 개인 데이터가 수집 또는 처리되는 목적에 더 이상 필요하지 않습니다. (b) 귀하가 동의를 철회했으며 처리할 법적 근거가 없습니다. (c) 귀하는 상황에 특정한 사유로 인해 언제든지 당사 또는 제3자가 추구하는 정당한 이익을 기반으로 하는 자신의 개인 데이터 처리에 이의를 제기합니다. (e) 개인 데이터가 불법입니다. 처리 또는 f) 회사의 법적 의무를 준수하려면 개인 데이터를 제거해야 합니다.</p>
								<p>이 권리는 (a) 유럽연합법 또는 회원국 법률에 따라 처리해야 하는 법률에 의해 부과된 의무를 이행하기 위해, 또는 (b) 법적 권리를 생성, 행사 또는 방어하기 위해 처리가 필요한 경우에는 적용되지 않습니다.</p>
								<p>처리 제한</p>
								<p>개인 데이터의 정확성이 우려되는 경우 회사에 개인 데이터 처리를 제한하도록 요청할 수 있습니다.</p>
								<p>개인 데이터를 제한하도록 요청하는 경우 개인 데이터는 사용자가 동의하거나 법적 권리를 생성, 행사 또는 방어하거나 다른 자연인의 권리를 방어하기 위해, 또는 유럽 연합 또는 회원국 내에서 중대한 공익을 위한 사유가 있는 경우에만 보관할 수 있습니다.</p>
								<p>데이터 이동에 대한 권리</p>
								<p>프로세스가 자동화된 시스템에 의해 수행되고 계약에 관련된 동의 또는 계약을 기반으로 하는 경우, 귀하는 회사에 제공한 개인 데이터를 검토할 법적 권리와 권리가 있습니다.</p>
								<p>기술적으로 가능한 경우 귀하는 회사에서 다른 관리자에게 개인 데이터를 직접 전송하도록 요청할 수 있습니다.삭제 권리에 따라 귀하가 가지는 권리는 데이터 양도 권한을 행사한다고 해서 변경되지 않습니다.데이터를 전송할 수 있는 권리는 다른 사람의 권리나 자유를 침해하지 않습니다.</p>
								<p>이의를 제기할 권리</p>
								<p>회사 또는 제3자가 추구하는 정당한 이익에 근거한 사용자 관련 개인 데이터 사용에 반대할 권리는 언제든지 제공됩니다.이는 이러한 정당한 이익만을 기반으로 한 프로파일링에만 국한되지 않습니다.개인 데이터 처리를 위한 설득력 있는 합법적 근거를 확립할 수 있는 경우, 그러한 근거가 귀하의 권리, 자유 또는 이익이나 법적 권리의 행사, 확립 또는 방어보다 중요하다는 것을 입증할 수 없는 한 계속 그렇게 할 수 없습니다.</p>
								<p>다이렉트 마케팅과 관련하여 귀하는 언제든지 본인에 관한 개인 데이터 처리를 거부할 권리가 있습니다.</p>
								<p>동의를 거부할 권리</p>
								<p>당사가 귀하에 관한 개인 데이터를 처리하는 것에 대한 동의를 언제든지 철회할 수 있습니다.이렇게 해도 삭제 전 귀하의 동의가 필요했던 처리의 적법성 및 적법성은 변경되지 않습니다.</p>
								<p>귀하는 귀하를 감독하는 기관에 불만을 제기할 권리가 있습니다.</p>
								<p>유럽 연합 내에서의 개인 데이터 처리와 관련된 개인의 기본권을 보호하기 위해 회원국이 설립한 감독 기관에 이의를 제기할 수 있습니다.</p>
								<p>유럽 연합 및 회원국의 법률은 본 섹션 13에 자세히 설명된 바와 같이 귀하에 관한 개인 데이터와 관련된 귀하의 권리를 제한할 수 있습니다.</p>
								<p>당사는 요청을 받은 날로부터 한 달 이내에 본 계약 제13조에 명시된 귀하의 권리에 따라 요청된 정보를 제공할 것입니다.요청의 성격과 요청 양에 따라 필요한 경우 기간을 최대 2개월까지 연장할 수 있습니다.요청을 받은 후 1개월 이내에 연장 여부와 사유를 알려 드립니다.</p>
								<p>법률 제13조의 조항에 위배되지 않는 한, 제13조에 따른 귀하의 권리에 따라 귀하가 요청하는 정보는 무료로 제공됩니다.요청이 정당하지 않거나 과도한 경우, 특히 요청이 반복되는 경우 당사는 정보를 제공하거나 요청된 조치를 발표하는 데 드는 관리 비용을 충당하기 위해 합당한 금액을 청구할 수 있습니다.또한 조치를 취하지 않을 수도 있습니다.</p>
								<p>요청을 제출한 실제 사람의 신원에 대해 의문이 있는 경우 요청을 한 사람의 신원에 대해 의심이 드는 경우 회사에서 추가 정보를 요청할 수 있습니다.</p>
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