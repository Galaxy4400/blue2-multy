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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Strona główna</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platforma</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Korzyści</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Nasz zespół</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Skontaktuj się z nami</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
								<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Rejestracja</a>
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
								<h1 class="policy__title h2">Polityka prywatności</h1>
								<p class="policy__date">Ostatnia aktualizacja: 30.09.22</p>
							</div>
							<div class="policy__content _special-styles">
								<p>My (znani również jako „My”, „Nas” lub „Nasz”) zobowiązujemy się do ochrony Twoich danych osobowych, a także Twojej prywatności.</p>
								<p>Niniejsza Polityka Prywatności została zaprojektowana, aby poinformować Cię o sposobach gromadzenia i przechowywania informacji przekazywanych przez Ciebie za pośrednictwem strony internetowej {{site_name}} („strona internetowa”).</p>
								<p>Zasady te będą bronione:</p>
								<ul>
									<li>Aby zachować przejrzystość w zakresie przetwarzania i gromadzenia danych osobowych o Tobie:</li>
								</ul>
								<p>Chcielibyśmy, abyś był w stanie dokonywać świadomych wyborów dotyczących wykorzystywania i przetwarzania danych osobowych. To jest powód, dla którego stworzyliśmy naszą stronę internetową. Aby to osiągnąć, stosujemy różne metody i procedury, aby przekazać użytkownikowi istotne informacje na temat wykorzystania danych osobowych.</p>
								<p>Jeśli uważamy, że potrzebujesz szczegółowych informacji, przekażemy Ci informacje w odpowiednim terminie i godzinie.</p>
								<p>Chętnie odpowiemy na wszelkie pytania i udzielimy wszelkich wymaganych wyjaśnień w odniesieniu do wszelkich ograniczeń nałożonych przez prawo. Można się z nami skontaktować za pośrednictwem poczty elektronicznej pod poniższym adresem: info@ {{site_name}} .com</p>
								<ul>
									<li>Dane osobowe będą wykorzystywane wyłącznie w celach określonych w polityce.</li>
								</ul>
								<p>Dane osobowe mogą być przetwarzane przez nas w różnych celach, takich jak oferowanie strony internetowej i łączenie Cię z platformami handlowymi stron trzecich („Usługi”) oraz w celu ulepszenia witryny, ochrony naszych praw, interesów, ułatwienia utrzymania i świadczenia usług, wypełniania wszelkich obowiązków regulacyjnych lub prawnych oraz prowadzenia działalności administracyjnej i biznesowej w celu ułatwienia świadczenia i korzystania z usług.</p>
								<p>Dane osobowe są również przetwarzane przez nas w celu lepszego zrozumienia Twoich preferencji i potrzeb.</p>
								<ul>
									<li>Aby skorzystać z ważnych narzędzi służących ochronie swoich praw w odniesieniu do danych osobowych:</li>
								</ul>
								<p>Aby umożliwić korzystanie z Twoich praw, dysponujemy znacznymi zasobami. Skontaktuj się z nami w dowolnym momencie, aby zażądać Danych Osobowych dotyczących Twoich danych osobowych. Zmodyfikujemy go lub usuniemy, zaprzestaniemy używania go do określonych celów lub do celów ogólnych. Przekaż informacje Tobie lub osobie zewnętrznej. Będziemy w stanie spełnić Twoje prośby.</p>
								<ul>
									<li>Zabezpiecz swoje dane osobowe:</li>
								</ul>
								<p>Chociaż nie możemy zagwarantować pełnego bezpieczeństwa Twoich danych osobowych, możemy zagwarantować, że będziemy nadal stosować różne metody i techniki, aby zapewnić ochronę Twoich danych osobowych.</p>
								<p>Nasza polityka prywatności i bezpieczeństwa jest kompletna.</p>
								<h3>1. Zakres?</h3>
								<p>Niniejsza polityka opisuje rodzaj danych osobowych, które firma gromadzi na temat osób fizycznych i jak je przetwarza, udostępnia je stronom trzecim, zabezpiecza procesy i tak dalej.</p>
								<p>Niniejsza Polityka dotyczy informacji związanych z zidentyfikowaną lub możliwą do zidentyfikowania osobą fizyczną. Osobę fizyczną, którą można zidentyfikować, można zdefiniować jako osobę, którą można bezpośrednio zidentyfikować, lub jako kombinację dodatkowych informacji, do których mamy lub do których mamy dostęp.</p>
								<p>Polityka definiuje „przetwarzanie” jako proces wymagający wykorzystania lub gromadzenia danych osobowych. Obejmuje zarządzanie, strukturyzację i przechowywanie danych osobowych.</p>
								<p>Nasze usługi są przeznaczone do korzystania przez odbiorców ogólnych i nie są przeznaczone do użytku przez osoby poniżej 18 roku życia. Nie poszukujemy świadomie ani nie zbieramy informacji od osób poniżej 18 roku życia Nie zezwalamy świadomie takim osobom na korzystanie z naszych usług. Usuwamy wszelkie informacje, które odkryjemy o dzieciach tak szybko, jak to możliwe, jeśli się o nich dowiemy.</p>
								<h3>2. Jakie dane osobowe posiadamy o Tobie?</h3>
								<p>Jeśli uzyskujesz dostęp do usługi i kanałów lub odwiedzasz naszą stronę internetową, zbieramy dane osobowe. W niektórych przypadkach możemy zażądać Twoich danych osobowych. W innych przypadkach gromadzimy Twoje dane osobowe poprzez analizę i analizę korzystania z naszych usług lub naszych kanałów usług lub poprzez otrzymywanie informacji od naszych partnerów zewnętrznych.</p>
								<h3>3. Nie ma wymogu ujawniania danych osobowych firmie i konsekwencji.</h3>
								<p>Nie jesteś jednak zobowiązany do przekazywania nam żadnych danych osobowych. W pewnych okolicznościach może jednak nie być konieczne dostarczanie nam żadnych danych osobowych. Może to utrudniać nam oferowanie usług lub utrudniać użytkownikom dostęp do strony internetowej.</p>
								<h3>4. Jakie dane osobowe jesteśmy w stanie zebrać? Kiedy odwiedzasz naszą stronę internetową, zbieramy następujące dane osobowe użytkownika:</h3>
								<p>Obejmuje to informacje o dzienniku aktywności online, dane o ruchu (w tym adres IP, data dostępu, czas dostępu i data dostępu) używanego języka, dzienniki awarii oprogramowania, rodzaj używanej przeglądarki, a także informacje dotyczące urządzenia, z którego korzystałeś. Gromadzone przez Ciebie informacje nie są informacjami prywatnymi i nie mogą być wykorzystywane do identyfikacji użytkownika.</p>
								<p>Dane osobowe, które otrzymujemy od Ciebie: Wszelkie dane osobowe, które przekazujesz Nam według własnego wyboru, gdy łączysz się za pośrednictwem Nas z internetową platformą handlową strony trzeciej.</p>
								<p>Dane osobowe przekazywane specjalnie platformom zewnętrznym w celu ułatwienia handlu: informacje te zawierają pełne imię i nazwisko, adres, numer telefonu i adres e-mail.</p>
								<h3>5. Podstawa prawna i powody przetwarzania danych osobowych</h3>
								<p>Państwa dane osobowe są przetwarzane przez firmę w celach opisanych w niniejszym punkcie oraz zgodnie z obowiązującą do niej podstawą prawną.</p>
								<p>Bez podstawy prawnej firma nie może wykorzystywać Twoich danych osobowych. Podstawy prawne, na których firma może wykorzystywać do przetwarzania Twoich danych osobowych:</p>
								<ul class="small">
									<li>Wyrazili Państwo zgodę na przetwarzanie swoich danych osobowych z jednego lub różnych powodów. Dzieje się tak w przypadku, gdy przekazujesz dane osobowe za pośrednictwem strony internetowej, abyśmy mogli je przenieść na platformę handlową innej firmy.</li>
									<li>Firma lub strona trzecia może wymagać przetwarzania w celu spełnienia ich uzasadnionego interesu. Na przykład konieczna jest poprawa naszych usług lub obrona roszczeń prawnych.</li>
									<li>Przetwarzanie musi spełniać obowiązek prawny.</li>
								</ul>
								<p>Skontaktuj się z nami za pośrednictwem poczty elektronicznej, aby uzyskać więcej informacji na temat przetwarzania niezbędnego do ochrony uzasadnionych interesów.</p>
								<p>Poniżej znajduje się lista powodów i podstaw prawnych, dla których możemy wykorzystać informacje, które nam przekazujesz. Dane osobowe.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Zakres</div>
										<div class="table-1__header-column">Podstawa prawna</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>Aby przekazać swoje dane osobowe stronom trzecim na żądanie uzyskania dostępu do handlu cyfrowego</p>
												<p>Jeśli o to poprosisz, możemy zażądać od Ciebie danych osobowych przekazania ich firmom zewnętrznym.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Wyrazili Państwo zgodę na przetwarzanie swoich danych osobowych z jednego lub wielu powodów.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Aby odpowiedzieć na Twoje prośby, pytania lub wątpliwości, dane osobowe są niezbędne, aby pomóc Ci odpowiedzieć na wszelkie pytania dotyczące usług.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Należy przetwarzać uzasadnione interesy firmy lub interesy osoby trzeciej.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>W celu spełnienia jakichkolwiek zobowiązań prawnych lub administracyjnych, sądowych lub prawnych lub sądowych dane osobowe są przetwarzane w celu spełnienia wymogów prawnych.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Aby zapewnić zgodność z obowiązkami prawnymi, wymagane jest przetwarzanie danych.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>W celu ulepszenia naszych usług Dane osobowe mogą być wykorzystywane przez nas w celu ulepszania naszych Usług. Obejmuje to między innymi wszelkie raporty o awariach lub awariach, które zbieramy w związku z usługami.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Należy przetwarzać uzasadnione interesy firmy lub interesy osoby trzeciej.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Aby powstrzymać oszustwa i niewłaściwe korzystanie z naszych usług</p>
											</div>
										</div>
										<div class="table-1__column">
											Należy przetwarzać uzasadnione interesy firmy lub interesy osoby trzeciej.
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>Aby wykonywać i zarządzać działaniami zgodnymi z wymaganiami naszych usług, takie działania obejmują funkcje back-office, działania związane z rozwojem biznesu, podejmowanie strategicznych decyzji, mechanizmy nadzoru itp.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Należy przetwarzać uzasadnione interesy firmy lub interesy osoby trzeciej.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>Aby przeprowadzić analizy, takie jak analiza statystyczna w celu podejmowania decyzji w różnych kwestiach, stosujemy różne techniki analityczne (w tym te, które są statystyczne).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Należy przetwarzać uzasadnione interesy firmy lub interesy osoby trzeciej.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Aby chronić nasze aktywa, prawa i interesy osób trzecich, opracowaliśmy HTML0 w celu ustalenia i obrony roszczeń prawnych Dane osobowe mogą być przetwarzane przez nas w celu ochrony naszych praw, interesów i aktywów lub praw stron trzecich, zgodnie z obowiązującymi przepisami, regulacjami lub umowami oraz wszelkimi warunkami, warunkami lub zasadami.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Należy przetwarzać uzasadnione interesy firmy lub interesy osoby trzeciej.</p>
										</div>
									</div>
								</div>

								<h3>6. Przekazywanie danych osobowych osobom trzecim</h3>
								<p>Firma może również przekazywać dane osobowe firmom zewnętrznym, które oferują nam usługi, takie jak informacje o adresie IP dostawców hostingu i pamięci masowej, a także analizę doświadczeń użytkowników.</p>
								<p>Możesz również poprosić nas o przekazanie konkretnych danych osobowych dotyczących Ciebie platformom handlowym stron trzecich. Przekażemy Twoje dane osobowe, które nam przekazujesz w takich przypadkach platformom handlowym stron trzecich. Wykorzystanie Twoich danych osobowych podlega ich polityce prywatności. Twoje dane osobowe mogą być udostępniane wielu platformom handlowym.</p>
								<p>Spółka może udostępniać dane osobowe podmiotom powiązanym lub partnerom biznesowym. Może to zapewnić firmie zasoby potrzebne do ulepszania i ulepszania produktów i usług, które zapewnia swoim klientom.</p>
								<p>W przypadku konieczności zabezpieczenia praw osób trzecich lub aktywów Spółka może ujawnić dane osobowe organom regulacyjnym, lokalnym lub innym organom urzędowym.</p>
								<p>Możemy również udostępniać dane osobowe użytkownika potencjalnym inwestorom lub nabywcom lub pożyczkodawcom firmy lub innej spółce z grupy spółek w przypadku takiej samej transakcji (w tym przeniesienia lub sprzedaży aktywów należących do spółki lub innej spółki w ramach grupy) lub w ramach połączenia lub restrukturyzacji, konsolidacji lub upadłości spółki lub innej działalności w ramach grupy.</p>
								<h3>7. Pliki cookie i usługi stron trzecich</h3>
								<p>Można skorzystać z usług stron trzecich, takich jak osoby, które publikują reklamy na naszej stronie internetowej lub firmy analityczne. Firmy te mogą również wykorzystywać pliki cookie lub inne technologie.</p>
								<p>Pliki cookie to małe pliki tekstowe, które są umieszczane na Twoim urządzeniu za każdym razem, gdy odwiedzasz witrynę lub uzyskujesz dostęp do niej. Pliki cookie służą do zbierania informacji o Twoich preferencjach i nawykach przeglądania, aby poprawić komfort użytkowania, śledzić Twoje preferencje i dostosowywać produkty i usługi, które mogą Ci się spodobać. Pliki cookie są również wykorzystywane do statystyk i analiz.</p>
								<p>Niektóre pliki cookie, z których możemy korzystać, to pliki cookie sesyjne. Są one tymczasowo pobierane na Twoje urządzenie i będą działać przez krótki czas przed zamknięciem przeglądarki. Inne pliki cookie są trwałe. Trwałe pliki cookie pozostają na Twoim urządzeniu przez pewien czas po zamknięciu przeglądarki. Są one wykorzystywane do pomocy witrynie w identyfikacji użytkownika jako powracającego użytkownika i umożliwienia użytkownikom powrotu do witryny.</p>
								<h3>Rodzaje plików cookie:</h3>
								<p>Mogą być używane przez nas w oparciu o ich przeznaczenie:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Rodzaj pliku cookie</div>
											<div class="table-2__text">
												<p>Pliki cookie są absolutnie niezbędne</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Zakres</div>
											<div class="table-2__text">
												<p>Te pliki cookie są niezbędne, abyś mógł uzyskać dostęp do żądanych funkcji i poruszać się po naszej stronie internetowej. Pliki cookie służą do dostarczania informacji, produktów i usług, o które nas poprosiłeś.</p>
												<p>Są one wymagane, aby urządzenie mogło pobierać i przesyłać strumieniowo dane. Pozwala to poruszać się po witrynie, korzystać z jej funkcji, a następnie powrócić do stron, na których wcześniej byłeś.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Dodatkowe informacje</div>
											<div class="table-2__text">
												<p>Pliki cookie zbierają dane osobowe, takie jak nazwa użytkownika, a także data ostatniego logowania, aby potwierdzić, że jesteś zalogowany na stronie.</p>
												<p>Są one usuwane po zamknięciu przeglądarki internetowej (sesyjne pliki cookie).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Rodzaj pliku cookie</div>
											<div class="table-2__text">
												<p>Funkcjonalne pliki cookie</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Zakres</div>
											<div class="table-2__text">
												<p>Pliki cookie pozwalają nam rozpoznać Cię za każdym razem, gdy odwiedzasz naszą witrynę, a także zapisywać Twoje preferencje i preferencje.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Dodatkowe informacje</div>
											<div class="table-2__text">
												<p>Trwają do daty wygaśnięcia i są zapisywane nawet po zamknięciu przeglądarki.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">Rodzaj pliku cookie</div>
											<div class="table-2__text">
												<p>Pliki cookie dla wydajności</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Zakres</div>
											<div class="table-2__text">
												<p>Pliki cookie służą do gromadzenia danych statystycznych na temat wydajności witryny, a także do jej poprawy. Pozwalają nam również na przeprowadzanie analiz na naszej stronie internetowej.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Dodatkowe informacje</div>
											<div class="table-2__text">
												<p>Pliki cookie przechowują anonimowe dane, które nie są powiązane z żadną możliwą do zidentyfikowania lub zidentyfikowania osobą fizyczną.</p>
												<p>Można je usunąć po zamknięciu przeglądarki. Inne pliki cookie mają nieokreśloną ważność.</p>
											</div>
										</div>
									</div>
								</div>


								<p>Pliki cookie są blokowane lub usuwane</p>
								<p>Aby zapobiec lub usunąć pliki cookie, musisz zmienić ustawienia przeglądarki. Poniżej znajdują się linki, które pomogą Ci w procesie kilku najbardziej znanych przeglądarek.</p>
								<ul class="small">
									<li>firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>safari</li>
								</ul>
								<p>Należy jednak pamiętać, że niektóre lub całe funkcje i funkcje witryny mogą nie działać w sposób, w jaki się spodziewasz, jeśli tak się stanie.</p>
								<h3>POWIADOMIENIE O ŚLEDZENIE ONLINE <br> Ta usługa obecnie nie obsługuje sygnałów do nie śledzenia. <br>8. Przechowywanie danych osobowych o Tobie</h3>
								<p>Spółka chce przechowywać Twoje dane osobowe tak długo, jak jest to konieczne do realizacji celu przetwarzania danych osobowych, zgodnie z opisem w niniejszej polityce lub przez dłuższy czas dozwolony przez prawo lub przepisy, zasady i obowiązujące zamówienia.</p>
								<p>Będziemy udostępniać Twoje informacje platformom handlowym stron trzecich przez okres 12 miesięcy. Jeśli wyrażasz zgodę na to, będziemy nadal udostępniać Twoje dane przez kolejne 12 miesięcy.</p>
								<p>Regularnie sprawdzamy przechowywane przez nas dane osobowe, aby upewnić się, że nie są już potrzebne.</p>
								<h3>9. Przekazywanie danych osobowych do kraju trzeciego lub organizacji międzynarodowej</h3>
								<p>Twoje dane osobowe mogą być przekazywane do innych krajów (tj. Twoje dane osobowe mogą być przekazywane do państwa trzeciego (tj. do innego kraju innego niż kraj, w którym mieszkasz) lub do organizacji międzynarodowych. Organizacje międzynarodowe lub jurysdykcje. Firma podejmuje wszelkie niezbędne kroki w celu ochrony podanych przez Ciebie danych osobowych i zapewnienia, że użytkownicy danych mają możliwość dochodzenia swoich praw i dostępu do skutecznych środków prawnych.</p>
								<p>Te zabezpieczenia i zabezpieczenia są dostępne dla wszystkich osób mieszkających w EOG (Europejskim Obszarze Gospodarczym).</p>
								<ul class="small">
									<li>Przekazywanie do państwa trzeciego lub organizacji międzynarodowej, które Komisja Europejska uznała, zapewnia odpowiednie bezpieczeństwo przekazywanych mu danych osobowych zgodnie z art. 45 ust. 3 rozporządzenia Parlamentu Europejskiego i Rady 2016/679 z dnia 27 kwietnia 2016 r. („RODO”)</li>
									<li>Przekazanie dokonuje się na podstawie prawnie wiążącej i prawnie wiążącej, wykonalnej umowy między podmiotami lub organami publicznymi określonej w art. 46 ust. 2 lit. a).</li>
									<li>Przekazanie zostało przeprowadzone zgodnie ze wspólnymi klauzulami ochrony danych, które zostały przyjęte przez Komisję UE na podstawie art. 46 ust. 2 lit. c) RODO. Klauzule przyjęte przez Komisję Europejską można zapoznać się na stronie https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en.</li>
								</ul>
								<p>Firma może przekazywać informacje o środkach bezpieczeństwa stosowanych w celu ochrony danych osobowych przekazywanych do krajów trzecich lub organizacji międzynarodowych. Wyślij e-mail na następujący adres: info@wealthwaydigital.uk</p>
								<h3>10. Bezpieczeństwo danych osobowych</h3>
								<p>Podjęliśmy odpowiednie środki organizacyjne i techniczne w celu ochrony danych osobowych. Obejmuje to zapobieganie przypadkowemu lub nielegalnemu zniszczeniu, utracie lub modyfikacji danych osobowych.</p>
								<p>Nie możemy zagwarantować ani zagwarantować, że bezpieczeństwo Twoich danych osobowych będzie zachowane bezbłędnie. Nie możemy ponosić odpowiedzialności za jakiekolwiek niematerialne, przypadkowe lub wynikające z tego szkody wynikające z wykorzystania lub ujawnienia danych osobowych. Obejmuje to jednak, że nie ogranicza się do ujawniania jakichkolwiek danych osobowych z powodu błędów w transmisji, nieuprawnionego dostępu osób trzecich lub innych przyczyn poza naszą kontrolą.</p>
								<p>W przypadku zobowiązań prawnych lub innych zobowiązań, które pozostają poza naszą kontrolą, możemy być zobowiązani do przekazania danych osobowych dotyczących Ciebie osobom trzecim, takim jak organy publiczne. W takich sytuacjach nie możemy kontrolować bezpieczeństwa danych osobowych przez osoby trzecie.</p>
								<p>Dane osobowe nie mogą być przesyłane przez Internet w całkowicie bezpieczny sposób. Spółka nie może zapewnić bezpieczeństwa danych osobowych przekazywanych nam przez Ciebie za pośrednictwem Internetu.</p>
								<h3>11. Hiperłącza do stron internetowych należących do stron trzecich</h3>
								<p>Linki do witryn i aplikacji stron trzecich znajdują się na stronie internetowej. Te aplikacje i strony internetowe nie podlegają nadzorowi firmy. Nie ponosimy odpowiedzialności za gromadzenie lub przetwarzanie danych osobowych przez te strony internetowe lub aplikacje. Niniejsza Polityka nie ma zastosowania do działań podejmowanych za pośrednictwem takich witryn lub aplikacji.</p>
								<p>Kiedy odwiedzasz którąkolwiek ze stron internetowych lub aplikacji innych firm, zalecamy zapoznanie się z ich polityką prywatności przed podjęciem decyzji o uzyskaniu dostępu do ich aplikacji lub korzystania z nich. Sugerujemy również podanie im wszelkich danych osobowych.</p>
								<h3>12. Zmiany w niniejszej Polityce</h3>
								<p>Niniejsza Polityka może ulec zmianie w dowolnym momencie. Jeśli zmienimy tę politykę, powiadomimy Cię o zmianach, publikując zaktualizowaną politykę na naszej stronie internetowej. Ponadto, gdy wprowadzimy znaczące zmiany w niniejszej polityce, postaramy się poinformować Cię za pomocą metod, które uważamy za odpowiednie i opublikujemy ogłoszenie na naszej stronie internetowej. Wszelkie zmiany, chyba że wyraźnie określono, wejdą w życie po opublikowaniu zmienionej polityki.</p>
								<h3>13. Twoje prawa w odniesieniu do Twoich danych osobowych</h3>
								<p>Masz prawo zażądać od nas weryfikacji dokładności gromadzonych danych osobowych dotyczących Ciebie, skorygowania wszelkich błędów i usunięcia wszystkich danych osobowych, które nie są przez nas wymagane. Możesz również ograniczyć zakres rodzajów przetwarzania danych osobowych.</p>
								<p>Jeśli jesteś rezydentem miejsca zamieszkania w EOG, zapoznaj się z tą stroną:</p>
								<p>Prawa te są dostępne dla Ciebie w odniesieniu do informacji, które przekazujesz w związku z Twoimi danymi osobowymi. Możesz poprosić o skorzystanie z przysługujących Ci praw, pisząc wiadomość e-mail na poniższy adres.</p>
								<p>Prawa dostępu</p>
								<p>Firma jest w stanie zweryfikować dokładność przetwarzanych przez Ciebie danych osobowych. Jeśli są oni w stanie uzyskać dostęp do swoich danych osobowych.</p>
								<p>Spółka chce dostarczyć elektroniczną kopię aktualnie przetwarzanych danych osobowych i może pobierać rozsądną opłatę za wszelkie dodatkowe kopie. Dane zostaną udostępnione drogą elektroniczną, jeśli o to poprosisz.</p>
								<p>Prawo dostępu do danych osobowych nie może być sprzeczne z prawami i wolnościami innych osób. Jeśli wniosek szkodzi prawom i wolnościom innej osoby lub jej prawom, firma może odmówić spełnienia wniosku lub ograniczyć swoją zdolność do jego spełnienia.</p>
								<p>Prawo do sprostowania</p>
								<p>Spółka jest uprawniona do sprostowania niedokładnych danych osobowych. Masz prawo żądać sprostowania wszelkich niewystarczających danych osobowych, które Cię dotyczą, z uwzględnieniem przyczyny przetwarzania.</p>
								<p>Prawo do usunięcia</p>
								<p>Obowiązują następujące powody: (a) Dane osobowe nie są już potrzebne do celu, dla którego zostały zebrane lub przetwarzane; (b) wycofujesz zgodę i nie ma podstawy prawnej do przetwarzania; (c) w dowolnym momencie sprzeciwiasz się, z powodu specyficznego dla Twojej sytuacji, przetwarzanie danych osobowych o Tobie oparte jest na uzasadnionych interesach realizowanych przez nas lub przez osobę trzecią; (e) Dane osobowe są przetwarzane niezgodnie z prawem lub f) Dane osobowe muszą zostać usunięte w celu wypełnienia prawnego obowiązku spółki.</p>
								<p>Prawo to nie ma zastosowania w przypadku, gdy przetwarzanie jest konieczne (a) do wypełnienia obowiązku nałożonego przez prawo, który jest zobowiązany do przetwarzania na mocy prawa Unii Europejskiej lub prawa państwa członkowskiego; lub (b) w celu stworzenia, wykonywania lub obrony praw prawnych.</p>
								<p>Ograniczenia przetwarzania</p>
								<p>Jeśli obawiasz się dokładności swoich danych osobowych, możesz poprosić firmę o ograniczenie przetwarzania Twoich danych osobowych.</p>
								<p>Jeżeli użytkownik poprosi o ograniczenie danych osobowych, dane osobowe mogą być przechowywane tylko wtedy, gdy wyrażają Państwo zgodę lub w celu stworzenia, wykonywania lub obrony praw prawnych lub obrony praw innej osoby fizycznej lub w przypadku przyczyn stanowiących istotny interes publiczny w Unii Europejskiej lub w państwie członkowskim.</p>
								<p>Prawo do przenoszenia danych</p>
								<p>Jeśli proces jest realizowany przez zautomatyzowany system i opiera się na zgodzie lub umowie, że jesteś zaangażowany w umowę, masz prawo i prawo wglądu do swoich danych osobowych, które przekazałeś firmie.</p>
								<p>Masz prawo poprosić o przekazanie Twoich danych osobowych bezpośrednio od firmy innemu administratorowi, jeśli jest to technicznie wykonalne. Prawa przysługujące Państwu wynikające z prawa do usunięcia danych nie ulegają zmianie ze względu na skorzystanie z prawa do przenoszenia danych. Prawo do przekazywania danych nie koliduje z prawami ani wolnościami innych osób.</p>
								<p>Prawo do kwestionowania</p>
								<p>Prawo do sprzeciwu wobec jakiegokolwiek wykorzystania danych osobowych dotyczących Ciebie opartego na uzasadnionych interesach realizowanych przez firmę lub osobę trzecią jest dostępne w dowolnym momencie. Nie ogranicza się to do profilowania wyłącznie w oparciu o te uzasadnione interesy. Jeśli będziemy w stanie ustalić istotne uzasadnione podstawy przetwarzania danych osobowych, nie będziemy mogli kontynuować tego, chyba że będziesz w stanie udowodnić, że przeważają one nad Twoimi prawami, wolnościami lub interesami lub wykonywaniem, ustanowieniem lub obroną praw.</p>
								<p>Jeśli chodzi o marketing bezpośredni, masz prawo w każdej chwili sprzeciwić się przetwarzaniu dotyczących Ciebie danych osobowych.</p>
								<p>Prawo do odmowy zgody</p>
								<p>W dowolnym momencie możesz odwołać swoją zgodę na przetwarzanie przez nas Twoich danych osobowych. Nie zmieni to legalności i zgodności z prawem jakiegokolwiek przetwarzania, które było zależne od Twojej zgody przed usunięciem.</p>
								<p>Masz prawo złożyć skargę do organu, który nad Tobą nadzoruje.</p>
								<p>Użytkownik może wnieść odwołanie do organu nadzorczego powołanego przez państwo członkowskie w celu ochrony podstawowych praw osób fizycznych w związku z przetwarzaniem danych osobowych w Unii Europejskiej.</p>
								<p>Prawo Unii Europejskiej i państw członkowskich może ograniczyć Twoje prawa w odniesieniu do danych osobowych dotyczących Ciebie, jak określono w niniejszej sekcji 13.</p>
								<p>Przekażemy Ci wymagane informacje zgodnie z prawami przysługującymi Ci w punkcie 13 niniejszej umowy w ciągu miesiąca od otrzymania żądania. Ramy czasowe mogą zostać przedłużone do dwóch miesięcy, w razie potrzeby w zależności od charakteru wniosku i ilości wniosków. W ciągu miesiąca od otrzymania prośby powiadomimy Cię o każdym przedłużeniu, a także o przyczynach.</p>
								<p>Dopóki nie jest to sprzeczne z postanowieniami § 13 ustawy, informacje, o które żądasz zgodnie z przysługującymi przysługującymi przysługującymi mu prawami wynikającymi z § 13, będą udostępniane bezpłatnie. Jeśli żądanie nie jest uzasadnione lub nadmierne, w szczególności w przypadku ich powtarzania, możemy naliczyć rozsądną kwotę na pokrycie kosztów administracyjnych związanych z przekazaniem informacji lub ogłoszeniem żądanego działania. Możemy też nie działać.</p>
								<p>Jeśli mamy wątpliwości co do tożsamości prawdziwej osoby, która złożyła Twoją prośbę Jeśli mamy wątpliwości co do tożsamości osoby składającej wniosek, firma może poprosić o dalsze informacje.</p>
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