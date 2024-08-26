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
						<div class="header-actions" data-adapt="menu__body,520">
							<div class="header-actions__action">
								<a class="btn btn_w" href="<?=$language_suffix?>sign-up.php">Rejestracja</a>
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
								<h1 class="conditions__title h2">Warunki użytkowania</h1>
							</div>
							<div class="conditions__content _special-styles">
								<h3>1. generał</h3>
								<p>1.1. Zapraszamy do odwiedzenia strony {{site_name}} („Strona”)</p>
								<p>Nasze informacje e-mail@ {{site_name}} .com</p>
								<p>1.2. Ta strona internetowa zawiera informacje na temat platform zewnętrznych („Platformy stron trzecich”) do handlu („Usługi”)</p>
								<p>1.3. Warunki regulują Twój („Ty”, „Użytkownik” lub „Użytkownik”) dostęp do Witryny i Usług. Zanim będziesz mógł uzyskać dostęp do usług, musisz uważnie przeczytać niniejsze warunki. Niniejsze warunki stanowią prawnie wiążącą umowę między Tobą a właścicielem witryny, a właścicielem strony internetowej. Jeśli nie chcesz korzystać ze strony internetowej, musisz zaakceptować warunki pod każdym względem. Warunki mogą być od czasu do czasu zmieniane.</p>
								<p>Niniejsze warunki zawierają naszą politykę prywatności. Akceptujesz te warunki i zgadzasz się z naszą polityką prywatności. (Możesz przeczytać naszą politykę prywatności tutaj).</p>
								<h3>2. kwalifikowalność</h3>
								<p>2.1. Jeśli będziesz przestrzegać niniejszych warunków, strona internetowa będzie dla Ciebie dostępna.</p>
								<p>2.1.1. Minimalny wiek 18 lat</p>
								<p>2.1.2. Możesz podpisać te warunki i warunki.</p>
								<p>2.1.3. Prawo obowiązujące w kraju, w którym mieszkasz lub korzystasz z usług, w żaden sposób nie uniemożliwiają użytkownikom korzystania ze strony internetowej lub jakichkolwiek jej usług.</p>
								<p>2.2. Nie udzielamy żadnych gwarancji, oświadczeń ani gwarancji dotyczących legalności lub korzystania z usług lub strony internetowej dla jakiejkolwiek osoby. Nie ponosimy odpowiedzialności za jakiekolwiek nielegalne korzystanie ze strony internetowej lub usług jakichkolwiek użytkowników.</p>
								<h3>3. Terytoria z ograniczonym dostępem</h3>
								<p>3.1. Bez ograniczania zakresu dostarczanych informacji Zastrzegamy sobie prawo do ograniczenia dostępu do Usług i/lub Witryny (lub jakiejkolwiek ich części) do: (i) Użytkowników zamieszkujących obszary zastrzeżone („Obszary Ograniczone”) oraz (ii) użytkowników, których uważamy, że mogą stanowić zagrożenie regulacyjne, prawne lub reputacyjne.</p>
								<p>3.2. Możemy również nałożyć dodatkowe warunki przed akceptacją użytkowników będących obywatelami niektórych krajów lub niektórych krajów. Jeśli użytkownicy podróżują do obszarów zastrzeżonych, Witryna lub Usługi mogą być tymczasowo niedostępne lub zablokowane.</p>
								<h3>4. Zabronione działania</h3>
								<p>4.1. Akceptujesz korzystanie z Witryny i Usług z szacunkiem i nie:</p>
								<p>4.1.1. Użytkownik może połączyć się z naszą stroną internetową i używać jej do pobierania, przesyłania, udostępniania i publikowania, a także przesyłania lub wysyłania (a) informacji lub innych materiałów naruszających prawa intelektualne do prywatności, prawa własności i inne prawa; lub (b) informacje, których nie wolno publikować lub rozpowszechniać z powodu groźby lub obrażeń spowodowanych zniewagą lub zniesławieniem, oszczerstwami lub rasizmem, lub (c) informacje obejmujące wirusy lub inne oprogramowanie mogą zaszkodzić naszemu komputerowi systemów lub stron trzecich, lub w sposób, który blokuje lub ogranicza innych użytkowników Dostęp do strony internetowej. (d) wszelkie informacje lub inne materiały naruszające jakiekolwiek prawo. (e) Informacje lub materiały zawierające reklamy lub inne treści, które nie podlegają naszej uprzedniej pisemnej zgodzie.</p>
								<p>4.1.2. Modyfikuj lub usuń wszelkie atrybuty, informacje prawne, etykiety lub oznaczenia, które są własnością tej witryny.</p>
								<p>4.1.3. Dostęp do usług można uzyskać za pośrednictwem dowolnego interfejsu, który nie jest stroną internetową.</p>
								<p>4.1.4. Nie ingerować w korzystanie ze strony internetowej lub usług świadczonych przez innych użytkowników</p>
								<p>4.1.5. Boty i inne zautomatyzowane techniki są wykorzystywane do uzyskania dostępu do witryny i/lub jej usług.</p>
								<p>4.1.6. Użytkownik nie może przesyłać ani przesyłać, ani nawet próbować przesyłać żadnych treści, które są aktywne lub biernie zaangażowane w mechanizmy gromadzenia lub transmisji danych, takie jak błędy internetowe, pliki cookie lub urządzenia szpiegujące, bez naszej wyraźnej zgody.</p>
								<p>4.1.7. Zaangażuj się w „kadrowanie”, dublowanie lub jakąkolwiek inną metodę naśladowania wyglądu lub funkcji usług.</p>
								<p>4.1.8. Użytkownik może naruszać wszelkie obowiązujące przepisy i regulacje oraz zachęcać lub zachęcać do jakichkolwiek nielegalnych działań, takich jak naruszenie znaku towarowego naruszenie praw autorskich zniesławienie naruszenie prywatności naruszenie prywatności hakowanie tożsamości lub dystrybucja fałszywego oprogramowania;</p>
								<p>4.1.9. Możesz modyfikować lub zmienić kod źródłowy tej strony internetowej. Możesz także przesyłać aplikacje lub oprogramowanie, które mogą spowodować uszkodzenie strony internetowej lub innej osoby.</p>
								<p>4.1.10. Użytkownik nie może demontować, dekompilować ani inżynierii wstecznej jakiejkolwiek technologii lub oprogramowania znajdującego się na stronie internetowej lub wykorzystywanego do świadczenia usług.</p>
								<p>4.2. Warunki niniejszej umowy stanowią uzupełnienie wszelkich praw, które możemy posiadać. Jeśli uważamy, że korzystanie z witryny nie jest zgodne z warunkami niniejszych warunków lub jakimkolwiek innym obowiązującym prawem, możemy być w stanie monitorować korzystanie ze strony internetowej lub usług lub blokować dostęp do nich lub ujawnić wzorce zachowań użytkownika na stronie innym stronom lub podjąć wszelkie inne odpowiednie środki w celu ochrony praw i własności osób trzecich.</p>
								<h3>5. Prawa własności intelektualnej</h3>
								<p>5.1. Treści strony internetowej, w tym związane z wideo, takie jak obrazy tekstowe, logo, dźwięki, projekty znaków towarowych i inne materiały są chronione prawami własności intelektualnej naszych i osób trzecich.</p>
								<p>5.2. Wszelkie prawa, tytuły oraz wszelkie prawa i interesy związane z usługami i stroną internetową należą do nas. Poza prawami do korzystania z usług i strony internetowej zgodnie z niniejszymi warunkami, korzystanie przez użytkownika z usług i strony internetowej nie przyznaje im żadnych praw własności intelektualnej.</p>
								<p>5.3. Użytkownik może uzyskać dostęp do Witryny i/lub Usług wyłącznie w celach osobistych, niekomercyjnych.</p>
								<p>5.4. Użytkownik nie zezwala nikomu na modyfikację lub inżynierię wsteczną, dekompilację lub kopiowanie usług lub strony internetowej ani na tworzenie prac pochodnych przy użyciu sublicencji lub wynajmu.</p>
								<h3>6. Ograniczenie odpowiedzialności</h3>
								<p>6.1. Odpowiedzialność za witrynę internetową i usługi spoczywa na Tobie. Wszelkie gwarancje, dorozumiane lub wyraźnie określone, dotyczące strony internetowej i usług lub korzystania z nich przez użytkownika, w tym dorozumiane gwarancje jakości i przydatności handlowej, a także cel, dla którego został zaprojektowany, jak brak naruszenia i użyteczność, uprawnienia pod względem dokładności, kompletności, terminowości i szybkiej dostawy nie są przez nas udzielane. Treści i funkcje dostępne lub dostępne za pośrednictwem strony internetowej są oferowane „tak, jak są”, „jako dostępne” i „z jakąkolwiek konsekwencją”.</p>
								<p>6.2. Nie ponosimy odpowiedzialności za jakiekolwiek błędy, pominięcia lub nieścisłości informacji na stronie internetowej. Nie ponosimy odpowiedzialności za jakiekolwiek zakłócenia lub przerwy w transmisji do lub za pośrednictwem usług.</p>
								<p>6.3. Zrekompensujemy Cię za wszelkie straty, bezpośrednio lub pośrednio poniesione przez Ciebie lub jakąkolwiek osobę trzecią za pośrednictwem strony internetowej lub usług. Będziesz odpowiedzialny za wszelkie decyzje, opierając się na informacjach zawartych w witrynie i/lub w usługach.</p>
								<p>6.4. Nie ponosimy odpowiedzialności za jakiekolwiek straty lub szkody, które bezpośrednio, pośrednio lub są związane z Tobą lub jakąkolwiek inną osobą trzecią. Obejmuje to utratę dochodów lub danych wynikających z korzystania przez Ciebie z witryny i/lub usług. To ograniczenie odpowiedzialności jest dozwolone w sposób prawny w odpowiednim regionie.</p>
								<p>6.5. Jeśli wystąpi problem techniczny z linią internetową lub telefoniczną, dostawcą komputera lub serwerem systemowym lub jakimkolwiek sprzętem, nie ponosimy żadnej odpowiedzialności. Nie ponosimy odpowiedzialności za jakiekolwiek korzystanie z Internetu.</p>
								<h3>7. Treści i usługi stron trzecich</h3>
								<p>7.1. Podczas korzystania z usług możesz przeglądać treści stron trzecich i usług. Może to obejmować reklamy lub recenzje platform zewnętrznych.</p>
								<p>7.2. Nie ponosimy odpowiedzialności za informacje lub produkty, o których mowa. Mogą nie być przez cały czas aktualne ani aktualne.</p>
								<p>7.3. Zalecamy sprawdzenie dokładności wszystkich informacji przed podjęciem jakiejkolwiek decyzji. Jesteś odpowiedzialny za wszystkie decyzje i działania na podstawie informacji.</p>
								<h3>8. Linki</h3>
								<p>8.1. Strona zawiera zarówno reklamy, jak i treści. Materiały są udostępniane za pośrednictwem stron internetowych osób trzecich („linki”). Zalecamy, abyś wiedział o tym przed pobraniem, poleganiem na nich lub uzyskaniem dostępu do jakichkolwiek informacji uzyskanych z tych witryn internetowych, oprogramowania lub innych materiałów lub dokonaniem zakupu lub innych transakcji, które Ci doradzimy. Linki te są udostępniane wyłącznie dla wygody użytkowników. Nie ponosimy odpowiedzialności za jakiekolwiek szkody lub straty spowodowane wykorzystaniem lub poleganiem na jakichkolwiek informacjach, produktach lub usługach udostępnianych za pośrednictwem innych stron internetowych lub programów.</p>
								<p>8.2. Umieszczenie hiperłączy na tej stronie internetowej nie oznacza poparcia, autoryzacji lub przynależności ani żadnej innej formy poparcia przez nas w związku ze stronami internetowymi ich oprogramowaniem lub administratorami.</p>
								<p>8.3. Nie sprawdziliśmy wszystkich hiperłączy i nie możemy być pociągnięci do odpowiedzialności za oprogramowanie lub stronę internetową, do której się odwołuje. Zanim zdecydujesz się korzystać, polegać na tym lub kupić cokolwiek z tych witryn lub aplikacji, ostrzegamy Cię. W żaden sposób nie ponosisz odpowiedzialności za jakiekolwiek szkody lub straty spowodowane używaniem lub poleganiem na jakichkolwiek produktach, informacjach lub treściach dostępnych za pośrednictwem innych stron internetowych.</p>
								<p>8.4. Twoim obowiązkiem jest zapoznanie się z warunkami i polityką wszelkich stron internetowych obsługiwanych przez osoby trzecie. Zdecydowanie zalecamy przeczytanie ich przed nawiązaniem kontaktu z witrynami stron trzecich.</p>
								<h3>9. Różne</h3>
								<p>9.1. Jesteśmy uprawnieni do zmiany, zaprzestania lub modyfikacji naszych usług w dowolnym momencie. Zmiany nie wyrządzą Ci żadnej szkody i nie będziesz mógł dochodzić żadnych roszczeń przeciwko nam.</p>
								<p>9.2. Warunki mogą być modyfikowane w dowolnym momencie. Możemy zmienić warunki w każdej chwili. Poinformujemy Cię, publikując najnowszą wersję, a następnie zmieniając datę na górze. Wszelkie modyfikacje będą obowiązywać w ciągu kilku dni roboczych. Uznaje się, że akceptujesz wszelkie modyfikacje warunków witryny, jeśli nadal będziesz z niej korzystać po ich wydaniu.</p>
								<p>9.3. Użytkownik przyjmuje do wiadomości i zgadza się, że wszelkie informacje przekazywane za pośrednictwem strony internetowej lub za jej pośrednictwem nie tworzą żadnego rodzaju relacji, która nie jest wyraźnie określona w niniejszych warunkach.</p>
								<p>9.4. Niniejsze warunki i polityka prywatności, a także polityka prywatności, zmieniane od czasu do czasu, są jedynymi ważnymi umowami między nami a użytkownikiem, a wszelkie inne obietnice, oświadczenia lub umowa, ustne lub pisemne, niezawarte w polityce prywatności są prawnie wiążące dla stron.</p>
								<p>9.5. Niemożność skorzystania z jakiegokolwiek prawa lub uprawnień przewidzianych w nim jest uważana za zrzeczenie się prawa lub uprawnienia. Każde jedno lub tylko część wykonania jest elementem każdego dodatkowego lub dalszego korzystania z tych samych lub innych praw lub środków zaradczych.</p>
								<p>9.6. Warunki te zostaną anulowane w przypadku, gdy dany przepis zostanie uznany za nieważny przez właściwą jurysdykcję sąd. Pozostałe warunki będą interpretowane jako w przypadku wdrożenia wykluczenia i będą stosowane zgodnie z ich warunkami. Terminy będą jednak interpretowane zgodnie z intencjami i znaczeniem klauzul wykluczających zgodnie z orzeczeniem sądów.</p>
								<p>9.7. Niniejsze warunki zezwalają partnerom zewnętrznym na przeniesienie lub przeniesienie wszystkich praw i obowiązków. Operatorzy zewnętrzni mogą zarządzać witryną internetową i wszystkimi jej usługami, bez ograniczania poprzednich. Niniejsze warunki nie zezwalają na przeniesienie lub przeniesienie posiadanych praw lub obowiązków.</p>
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