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
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>index.php">Kezdőlap</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>platform.php">Platform</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>benefits.php">Előnyök</a></li>
									<!-- <li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>blog.php">Blog</a></li> -->
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>our-team.php">Csapatunk</a></li>
									<li class="menu__item" data-menu-item><a class="menu__link" href="<?=$language_suffix?>contact-us.php">Lépjen kapcsolatba velünk</a></li>
								</ul>
							</nav>
						</div>
						<div class="header-actions" data-adapt="menu__body,767">
							<div class="header-actions__action">
<a class="header-actions__btn btn _icon-arrow-simple" href="<?=$language_suffix?>sign-up.php">Regisztráció</a> 
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
								<h1 class="policy__title h2">Adatvédelmi szabályzat</h1>
								<p class="policy__date">Utolsó frissítés dátuma: 22.09.30</p>
							</div>
							<div class="policy__content _special-styles">
								<p>Mi (más néven „Mi”, „Mi” vagy „Mi”) elkötelezettek vagyunk az Ön személyes adatainak és a magánélet védelme mellett.</p>
								<p>Jelen Adatvédelmi Szabályzat célja, hogy tájékoztassa Önt arról, hogyan gyűjtjük és tároljuk az Ön által a {{site_name}} weboldalon (a továbbiakban: „weboldal”) által megadott információkat.</p>
								<p>Ezeket az elveket védik:</p>
								<ul>
									<li>Az Önre vonatkozó személyes adatok feldolgozásának és gyűjtésének átláthatósága érdekében:</li>
								</ul>
								<p>Szeretnénk, ha Ön megalapozott döntéseket hozhat a személyes adatok felhasználásával és feldolgozásával kapcsolatban. Ez az oka annak, hogy létrehoztuk weboldalunkat. Ennek érdekében különböző módszereket és eljárásokat alkalmazunk, hogy releváns információkat nyújtsunk Önnek a személyes adatok felhasználásával kapcsolatban.</p>
								<p>Ha úgy gondoljuk, hogy konkrét részletekre van szüksége, tájékoztatást adunk Önnek a megfelelő időpontban és időpontban.</p>
								<p>Örömmel válaszolunk minden kérdésére, és megadunk minden szükséges pontosítást a törvény által előírt korlátozásokkal kapcsolatban. E-mailben érhetünk el bennünket az alábbi címen: info@ {{site_name}} .com</p>
								<ul>
									<li>Személyes adatokat csak a szabályzatban meghatározott célokra használjuk fel.</li>
								</ul>
								<p>A Személyes Adatokat számos célból kezelhetjük, például hogy felajánljuk Önnek a weboldalt és összekapcsoljuk Önt harmadik féltől származó kereskedési platformokkal (a továbbiakban: Szolgáltatások), valamint a weboldal fejlesztése, jogaink, érdekeink védelme, a szolgáltatások karbantartásának és nyújtásának megkönnyítése érdekében a szolgáltatások nyújtásának és használatának megkönnyítésére szolgáló adminisztratív és üzleti tevékenységek lebonyolítása érdekében.</p>
								<p>Személyes adatokat is feldolgozzuk annak érdekében, hogy jobban megértsük az Ön preferenciáit és igényeit.</p>
								<ul>
									<li>Jelentős eszközök használata a személyes adatokkal kapcsolatos jogainak védelme érdekében:</li>
								</ul>
								<p>Annak érdekében, hogy lehetővé tegyük jogainak gyakorlását, jelentős erőforrásokkal rendelkezünk. Bármikor vegye fel velünk a kapcsolatot, hogy személyes adatait kérjen személyes adataival kapcsolatban. Módosítjuk vagy töröljük, abbahagyjuk a felhasználását meghatározott célokra vagy általános célokra. Adja át az információkat Önnek vagy egy külső félnek. Képesek leszünk kielégíteni az Ön kéréseit.</p>
								<ul>
									<li>Személyes adatainak védelme:</li>
								</ul>
								<p>Bár nem tudjuk garantálni személyes adatainak teljes biztonságát, garantálhatjuk, hogy továbbra is számos módszert és technikát alkalmazunk személyes adatainak védelme érdekében.</p>
								<p>Adatvédelmi és biztonsági szabályzatunk teljes.</p>
								<h3>1. A hatókör?</h3>
								<p>Ez a szabályzat leírja, hogy a vállalat milyen típusú személyes adatokat gyűjt a természetes személyekről, és hogyan dolgozza fel azokat, osztja meg harmadik felekkel, biztosítja a folyamatokat stb.</p>
								<p>Ez a Szabályzat olyan információkról szól, amelyek egy azonosított vagy azonosítható természetes személyhez kapcsolódnak. Az azonosítható természetes személyt úgy lehet meghatározni, aki közvetlenül azonosítható, vagy a rendelkezésünkre álló vagy hozzáférhető további információk kombinációja.</p>
								<p>A Szabályzat az „feldolgozást” olyan folyamatként határozza meg, amely személyes adatok felhasználását vagy gyűjtését igényli. Ez magában foglalja a személyes adatok kezelését, strukturálását és tárolását.</p>
								<p>Szolgáltatásainkat általános közönség számára szánjuk, és 18 év alatti emberek számára nem tervezték őket. Tudatosan nem keresünk vagy gyűjtünk információkat 18 évesnél fiatalabb személyektől. Tudatosan nem engedjük meg ilyen személyek számára, hogy igénybe vehessék szolgáltatásainkat. A gyermekekről felfedezett információkat a lehető leggyorsabban töröljük, ha megtudjuk róla.</p>
								<h3>2. Milyen személyes adatokkal rendelkezünk Önről?</h3>
								<p>Ha Ön hozzáférhet a szolgáltatáshoz és csatornákhoz, vagy meglátogatja weboldalunkat, személyes adatokat gyűjtünk. Bizonyos esetekben kérhetjük az Ön személyes adatait. Más esetekben az Ön személyes adatait úgy gyűjtjük, hogy elemezzük és elemezzük szolgáltatásaink vagy szolgáltatási csatornáink használatát, vagy adatait harmadik fél partnereinktől kapjuk.</p>
								<h3>3. Nincs követelmény személyes adatok nyilvánosságra hozatalára a társaságnak és annak következményeire.</h3>
								<p>De Ön nem köteles személyes adatot megadni nekünk. Bizonyos körülmények között azonban előfordulhat, hogy Önnek semmilyen személyes adatot nem kell megadnia nekünk. Ez akadályozhatja számunkra a szolgáltatások nyújtását, vagy akadályozhatja a felhasználók számára a weboldal elérését.</p>
								<h3>4. Milyen személyes adatokat tudunk gyűjteni? Amikor meglátogatja weboldalunkat, az alábbi személyes adatokat gyűjtjük össze:</h3>
								<p>Ez magában foglalja az online tevékenységnaplóját, a forgalomra vonatkozó adatokat (beleértve az IP-címet, a hozzáférés dátumát, a hozzáférés időpontját és a hozzáférés dátumát), az Ön által használt nyelvről, a szoftverösszeomlási naplókról, a használt böngésző típusáról, valamint az Ön által használt eszközről szóló információk. Az Ön által gyűjtött információk nem privát információk, és nem használhatók fel az Ön azonosítására.</p>
								<p>Személyes adatok, amelyeket Öntől kapunk: Bármely személyes adat, amelyet Ön saját választása szerint ad meg nekünk, amikor Ön kapcsolatba lép egy harmadik fél online kereskedési platformjával a ránk keresztül.</p>
								<p>Személyes adatok, amelyeket kifejezetten harmadik féltől származó platformoknak ad meg a kereskedelem megkönnyítése érdekében: ezek az információk tartalmazzák az Ön teljes nevét, címét, telefonszámát és e-mail címét.</p>
								<h3>5. A személyes adatok feldolgozásának jogalapja és indokai</h3>
								<p>Személyes adatait a vállalat az ebben a szakaszban leírt célokra és az arra vonatkozó jogalapnak megfelelően dolgozza fel.</p>
								<p>Jogalap nélkül a vállalat nem tudja felhasználni az Önre vonatkozó személyes adatokat. Azok a jogi okok, amelyek alapján a vállalat felhasználhatja az Önre vonatkozó személyes adatok feldolgozására:</p>
								<ul class="small">
									<li>Ön hozzájárulását személyes adatainak feldolgozásához egy vagy több okból adta meg. Ez az eset fordul elő, amikor személyes adatokat ad meg a weboldalon keresztül annak érdekében, hogy azokat harmadik fél kereskedési platformjára továbbítsuk.</li>
									<li>A Társaság vagy egy harmadik fél jogos érdekeinek kielégítése érdekében feldolgozást igényelhet. Szükség van például szolgáltatásaink javítására vagy jogi igények védelmére.</li>
									<li>Az adatfeldolgozásnak jogi kötelezettségnek kell megfelelnie.</li>
								</ul>
								<p>A jogos érdekek védelméhez szükséges adatkezeléssel kapcsolatos további részletekért vegye fel velünk a kapcsolatot e-mailben.</p>
								<p>Az alábbiakban felsoroljuk azokat az okokat és jogi okokat, amelyek miatt felhasználhatjuk az Ön által megadott információkat. Személyes adatok.</p>

								<div class="table-1">
									<div class="table-1__header">
										<div class="table-1__header-column">Hatókör</div>
										<div class="table-1__header-column">Jogi alap</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="1.">
												<p>Személyes adatainak továbbítása harmadik feleknek a digitális kereskedéshez való hozzáférés iránti kérelmére</p>
												<p>Ha ezt kéri, személyes adatokat kérhetünk Öntől, hogy továbbítsuk azokat harmadik féltől származó vállalatoknak.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>Ön hozzájárulását személyes adatainak feldolgozásához egy vagy több okból adta meg.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="2.">
												<p>Kéréseinek, kérdéseinek vagy aggályainak megválaszolásához személyes adatokra van szükség, amelyek segítenek a szolgáltatásokkal kapcsolatban felmerülő kérdések megválaszolásában.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>A társaság jogos érdekeit vagy harmadik fél érdekeit feldolgozni kell.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="3.">
												<p>Bármely jogi kötelezettség teljesítése érdekében vagy közigazgatási, bírósági vagy jogi vagy bírósági személyes adatokat a jogi követelmények teljesítése érdekében dolgozzuk fel.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>A jogi kötelezettségek teljesítésének biztosítása érdekében feldolgozásra van szükség.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="4.">
												<p>Szolgáltatásaink javítása érdekében Személyes adatokat használhatunk Szolgáltatásaink fejlesztésére. Ez magában foglalja többek között a szolgáltatásokkal összefüggésben gyűjtött összeomlásokat vagy meghibásodási jelentéseket.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>A társaság jogos érdekeit vagy harmadik fél érdekeit feldolgozni kell.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="5.">
												<p>Csalás és szolgáltatásainkkal való visszaélés megakadályozása</p>
											</div>
										</div>
										<div class="table-1__column">
A társaság jogos érdekeit vagy harmadik fél érdekeit feldolgozni kell. 
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="6.">
												<p>Szolgáltatásaink követelményeivel összhangban lévő tevékenységek végrehajtásához és irányításához ilyen tevékenységek magukban foglalják a back-office funkciókat, az üzletfejlesztési tevékenységeket, a stratégiai döntéshozatal, a felügyeleti mechanizmusokat stb.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>A társaság jogos érdekeit vagy harmadik fél érdekeit feldolgozni kell.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="7.">
												<p>Az elemzés elvégzéséhez, például statisztikai elemzéshez különböző kérdésekben döntések meghozatalához különböző analitikai technikákat alkalmazunk (beleértve azokat is, amelyek statisztikusak).</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>A társaság jogos érdekeit vagy harmadik fél érdekeit feldolgozni kell.</p>
										</div>
									</div>
									<div class="table-1__row">
										<div class="table-1__column">
											<div class="table-1__item" data-num="8.">
												<p>Vagyonunk, jogaink és érdekeink, valamint harmadik felek érdekeinek védelme érdekében kifejlesztettük a HTML0-t a jogi igények megállapítására és védelmére. A személyes adatokat kezelhetjük jogaink, érdekeink és vagyonaink védelme érdekében vagy harmadik felek jogainak, érdekeinek és vagyonainak védelme érdekében, az alkalmazandó törvényeknek, rendeleteknek vagy megállapodásoknak, valamint bármely feltételeknek, szabályzatnak megfelelően.</p>
											</div>
										</div>
										<div class="table-1__column">
											<p>A társaság jogos érdekeit vagy harmadik fél érdekeit feldolgozni kell.</p>
										</div>
									</div>
								</div>

								<h3>6. Személyes adatok továbbítása harmadik félnek</h3>
								<p>A vállalat személyes adatokat szolgáltathat harmadik féltől származó vállalatoknak is, akik szolgáltatásokat nyújtanak számunkra, például tárhely- és tárolási szolgáltatók IP-címét, valamint a felhasználói élmények elemzését.</p>
								<p>Azt is kérheti tőlünk, hogy adjunk meg Önnel kapcsolatos konkrét személyes adatokat harmadik féltől származó kereskedési platformoknak. Ezekben az esetekben az Ön által megadott személyes adatait harmadik felek kereskedési platformjainak továbbítjuk. Személyes adatainak felhasználására az adatvédelmi irányelvek vonatkoznak. Személyes adatai több kereskedési platformon is megoszthatók.</p>
								<p>A Társaság képes lehet személyes adatokat megosztani kapcsolódó szervezetekkel vagy üzleti partnerekkel. Ez biztosíthatja a vállalat számára azokat az erőforrásokat, amelyek szükségesek ahhoz, hogy javítsa és fejlessze az ügyfeleinek kínált termékeket és szolgáltatásokat.</p>
								<p>Harmadik felek vagy vagyontárgyak jogainak védelmének szükségessége esetén a Társaság jogosult személyes adatokat közölni szabályozó, helyi vagy más hivatalos hatóságokkal.</p>
								<p>Továbbá megoszthatjuk Önre vonatkozó személyes adatokat potenciális befektetőkkel vagy vevőkkel, vagy hitelezőkkel a társaság vagy a társasági csoport bármely más vállalatának hitelezőivel, amennyiben ugyanezen ügylet történik (beleértve a társaságnak vagy a csoporton belüli bármely más társaságnak tartozó vagyontárgyak átruházását vagy eladását), illetve a társaság vagy bármely más vállalkozás egyesülése vagy szerkezetátalakítása, konszolidációja vagy csődje részeként.</p>
								<h3>7. Harmadik felektől származó cookie-k és szolgáltatások</h3>
								<p>Felhasználhatók harmadik féltől származó szolgáltatások, például azok, akik weboldalunkon hirdetéseket szolgáltatnak, vagy elemző cégek. Ezek a vállalatok sütiket vagy más technológiát is használhatnak.</p>
								<p>A cookie-k apró szöveges fájlok, amelyek minden alkalommal, amikor meglátogatja vagy belép a webhelyre, elhelyezik a készülékén. A cookie-kat arra használják, hogy információkat gyűjtsenek az Ön preferenciáiról és böngészési szokásairól, hogy javítsák a felhasználói élményt, nyomon követhessék preferenciáit, és testreszabják az Ön által élvezhető termékeket és szolgáltatásokat. A cookie-kat statisztikákhoz és elemzésekhez is használják.</p>
								<p>Bizonyos cookie-k, amelyeket használhatunk, munkamenet sütik. Ezek ideiglenesen letöltődnek az eszközére, és rövid ideig tartanak a böngésző bezárása előtt. Más cookie-k tartósak. Az állandó cookie-k a böngésző bezárása után egy ideig maradnak az Ön készülékén. Ezeket arra használják, hogy segítsenek a weboldallal azonosítani Önt visszatérő felhasználóként, és lehetővé teszik a felhasználók számára, hogy visszatérjenek a weboldalra.</p>
								<h3>A cookie-k típusai:</h3>
								<p>Ezeket céljuk alapján használhatjuk:</p>

								<div class="table-2">
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">A süti típusa</div>
											<div class="table-2__text">
												<p>A cookie-k feltétlenül szükségesek</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Hatókör</div>
											<div class="table-2__text">
												<p>Ezek a cookie-k szükségesek ahhoz, hogy hozzáférhessen a kért funkciókhoz és navigálhasson weboldalunkon. A cookie-kat arra használjuk, hogy biztosítsuk azokat az információkat, termékeket és szolgáltatásokat, amelyeket Ön kért tőlünk.</p>
												<p>Ezek szükségesek ahhoz, hogy a készülék letölthesse és streamelhesse az adatokat. Ezzel navigálhat a webhelyen, kihasználhatja annak funkcióit, majd visszatérhet azokra az oldalakra, amelyeken korábban járt.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">További információk</div>
											<div class="table-2__text">
												<p>A cookie-k személyes adatokat gyűjtenek, például felhasználónevét, valamint az utolsó bejelentkezési dátumot annak megerősítésére, hogy bejelentkezett a webhelyre.</p>
												<p>A böngésző bezárása után törlődnek (munkamenet-sütik).</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">A süti típusa</div>
											<div class="table-2__text">
												<p>Funkcionális cookie-k</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Hatókör</div>
											<div class="table-2__text">
												<p>A sütik lehetővé teszik számunkra, hogy felismerjük Önt minden alkalommal, amikor meglátogatja webhelyünket, és mentsük preferenciáit és preferenciáit.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">További információk</div>
											<div class="table-2__text">
												<p>Ezek a lejárat dátumáig tartanak, és a böngésző bezárása után is mentésre kerülnek.</p>
											</div>
										</div>
									</div>
									<div class="table-2__row">
										<div class="table-2__column">
											<div class="table-2__title">A süti típusa</div>
											<div class="table-2__text">
												<p>Cookie-k a teljesítmény érdekében</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">Hatókör</div>
											<div class="table-2__text">
												<p>A cookie-kat arra használják, hogy statisztikai adatokat gyűjtsünk a webhely teljesítményéről, valamint elősegítsék annak javítását. Azt is lehetővé teszik számunkra, hogy elemzést végezzünk weboldalunkon.</p>
											</div>
										</div>
										<div class="table-2__column">
											<div class="table-2__title">További információk</div>
											<div class="table-2__text">
												<p>A cookie-k anonim adatokat tárolnak, amelyek nem kapcsolódnak azonosítható vagy azonosított természetes személyhez.</p>
												<p>Ezek eltávolíthatók, amikor kilép a böngészőből. Más cookie-k határozatlan érvényességgel rendelkeznek.</p>
											</div>
										</div>
									</div>
								</div>


								<p>A cookie-kat blokkolják vagy eltávolítják</p>
								<p>A cookie-k megakadályozásához vagy eltávolításához módosítania kell böngészője beállításait. Az alábbiakban linkek találhatók, amelyek segítenek néhány legismertebb böngésző folyamatában.</p>
								<ul class="small">
									<li>firefox</li>
									<li>Microsoft Edge</li>
									<li>Google Chrome</li>
									<li>szafari</li>
								</ul>
								<p>Ne feledje azonban, hogy a weboldal bizonyos vagy teljes funkciói és funkciói nem feltétlenül működnek az Ön által elvárt módon, ha ez megtörténik.</p>
								<h3>ONLINE KÖVETÉSI ÉRTESÍT <br> ÉS Ez a szolgáltatás jelenleg nem támogatja a nem követési jeleket. <br>8. Az Önről szóló személyes adatok megőrzése</h3>
								<p>A Társaság az Önről szóló személyes adatokat addig szeretné megőrizni, amíg szükséges a személyes adatok feldolgozásának céljának teljesítéséhez, a jelen szabályzatban leírtak szerint, vagy hosszabb ideig, amint azt a törvények vagy rendeletek, irányelvek és az alkalmazandó megrendelések engedélyezik.</p>
								<p>Az Ön adatait 12 hónapig megosztjuk harmadik felek kereskedési platformjaival. Ha beleegyezik ezzel, további 12 hónapig továbbra is megosztjuk adatait.</p>
								<p>Rendszeresen ellenőrizzük az általunk tárolt Személyes Adatokat annak biztosítása érdekében, hogy ezekre már nincs szükség.</p>
								<h3>9. Személyes adatok továbbítása harmadik országba vagy nemzetközi szervezetnek</h3>
								<p>Személyes adatai továbbíthatók más országokba (azaz személyes adatai továbbíthatók egy harmadik országba (azaz egy másik országba, amely nem az Ön lakóhelye szerinti országba) vagy nemzetközi szervezeteknek. Nemzetközi szervezetek vagy joghatóságok. A Társaság megtesz minden szükséges lépést az Ön által megadott személyes adatok védelme érdekében, és annak biztosítása érdekében, hogy az adatfelhasználók jogosultságukat érvényesítsék és hatékony jogi igényekhez férhessenek hozzá.</p>
								<p>Ezek a védelmek és biztosítékok az EGT-ben (Európai Gazdasági Térségben) lakók számára hozzáférhetők.</p>
								<ul class="small">
									<li>Harmadik országba vagy nemzetközi szervezetnek történő továbbítás, amely az Európai Bizottság által megállapított, a 2016. április 27-i 2016/679 európai parlamenti és tanácsi rendelet 45. cikkének (3) bekezdésével összhangban a részére továbbított személyes adatok megfelelő biztonságát biztosítja. (a „GDPR”)</li>
									<li>Az átruházás a 46. cikk (2) bekezdésének a) pontjában foglalt jogilag kötelező erejű és jogilag kötelező erejű, végrehajtható megállapodás alapján történik.</li>
									<li>Az átadás az Európai Bizottság által a GDPR 46. cikke (2) bekezdésének c) pontja alapján elfogadott közös adatvédelmi rendelkezéseknek megfelelően történt. Az Európai Bizottság által elfogadott záradékok megtekinthetők a https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en oldalon.</li>
								</ul>
								<p>A Társaság tájékoztatást nyújthat az Ön személyes adatainak védelme érdekében alkalmazott biztonsági intézkedésekről, amelyeket harmadik országoknak vagy nemzetközi szervezeteknek továbbítanak. Küldjön e-mailt az alábbi címre: info@wealthwaydigital.uk</p>
								<h3>10. Személyes adatok biztonsága</h3>
								<p>Megfelelő szervezeti és technikai óvintézkedéseket tettünk a személyes adatok védelme érdekében. Ez magában foglalja a személyes adatok véletlen vagy illegális megsemmisítésének, elvesztésének vagy módosításának megelőzését.</p>
								<p>Nem garantálhatjuk vagy garantálhatjuk, hogy személyes adatainak biztonságát hiba nélkül megőrizzük. Nem vállalunk felelősséget semmilyen immateriális, véletlen vagy ebből eredő károkért sem, amely a személyes adatok felhasználásából vagy közzétételéből származik. Ez azonban nem korlátozódik az átviteli hibák, harmadik fél jogosulatlan hozzáférése vagy bármely más, a mi felügyeletünkön kívüli okból eredő személyes adatok közzétételére.</p>
								<p>Jogi kötelezettségek vagy egyéb kötelezettségek esetén, amelyek nem rendelkeznek ellenőrzésünkön, előfordulhat, hogy az Önre vonatkozó személyes adatokat harmadik feleknek, például hatóságoknak kell megadnunk. Ilyen helyzetekben nem tudjuk ellenőrizni az Ön személyes adatainak harmadik felek által biztosított biztonságot.</p>
								<p>A személyes adatokat nem lehet teljesen biztonságos módon továbbítani az interneten keresztül. A Társaság nem tudja biztosítani az Ön által nekünk az interneten keresztül továbbított személyes adatok biztonságát.</p>
								<h3>11. Hiperlinkek harmadik fél webhelyeihez tartozó webhelyekre</h3>
								<p>A weboldalon harmadik féltől származó webhelyekre és alkalmazásokra mutató hivatkozások találhatók. Ezek az alkalmazások és weboldalak nem kerülnek a vállalat felügyelete alá. Nem vállalunk felelősséget a személyes adatok ezen weboldalak vagy alkalmazások általi gyűjtéséért vagy feldolgozásáért. Ez a Szabályzat nem vonatkozik az ilyen webhelyeken vagy alkalmazásokon keresztül végrehajtott intézkedésekre.</p>
								<p>Amikor harmadik féltől származó webhelyekre vagy alkalmazásokra látogat, javasoljuk, hogy olvassa el az adatvédelmi irányelveket, mielőtt úgy döntene, hogy hozzáférést szeretne vagy használni az alkalmazásaikat. Azt is javasoljuk, hogy adjon meg számukra bármilyen személyes adatot.</p>
								<h3>12. A jelen Szabályzat módosítása</h3>
								<p>Ez a Szabályzat bármikor megváltozhat. Ha megváltoztatjuk ezt a szabályzatot, értesítjük Önt a változásokról úgy, hogy közzétesszük a frissített irányelveket weboldalunkon. Ezen túlmenően, amikor jelentős módosításokat hajtunk végre ezen irányelvben, megpróbáljuk tájékoztatni Önt az általunk megfelelőnek tartott módszerekkel, és közzé teszünk egy bejelentést a weboldalunkon. Bármely módosítás, hacsak kifejezetten nincs meghatározva, a felülvizsgált szabályzat közzétételét követően lép hatályba.</p>
								<h3>13. Az Ön személyes adataival kapcsolatos jogai</h3>
								<p>Ön jogosult arra, hogy kérje tőlünk, hogy ellenőrizzük az Önről gyűjtött személyes adatok pontosságát, kijavítsuk az esetleges hibákat, és töröljük az általunk nem igényelt személyes adatokat. Ön korlátozhatja a személyes adatok feldolgozásának típusainak körét is.</p>
								<p>Ha Ön az EGT lakóhelyének lakosa, kérjük, olvassa el ezt az oldalt:</p>
								<p>Ezek a jogok hozzáférhetők az Ön személyes adataival kapcsolatban megadott információk tekintetében. Kérheti a jogainak gyakorlását, ha e-mailt ír az alábbi címre.</p>
								<p>Hozzáférési jogok</p>
								<p>A Társaság ellenőrizheti az Önre vonatkozó személyes adatok pontosságát. Ha tudnak hozzáférni személyes adataihoz.</p>
								<p>A Társaság a jelenleg feldolgozott személyes adatok elektronikus példányát kíván szolgáltatni, és az esetleges további másolatokért ésszerű díjat számíthat fel. Az adatokat elektronikusan elérhetővé tesszük, ha kérjük.</p>
								<p>A személyes adatokhoz való hozzáférés joga nem ütközhet mások jogaival és szabadságaival. Ha a kérelem károsítja egy másik személy jogait és szabadságait, vagy jogaikat, a vállalat megtagadhatja a kérelem teljesítését, vagy korlátozhatja annak teljesítésére való képességét.</p>
								<p>Helyesbítéshez való jog</p>
								<p>A Társaság jogosult a pontatlan személyes adatok helyesbítésére. Ön jogosult arra, hogy kérje az Önre vonatkozó elégtelen személyes adatok helyesbítését, figyelembe véve az adatkezelés okát.</p>
								<p>Törléshez való jog</p>
								<p>A következő okok érvényesek: a) A személyes adatok már nem szükségesek ahhoz a célhoz, amelyre gyűjtötték vagy feldolgozták őket; b) Ön visszavonja a hozzájárulását és nincs jogalapja a feldolgozásra; (c) Ön a helyzetére jellemző okból bármikor tiltakozik, hogy a személyes adatok kezelése a mi vagy harmadik fél jogos érdekein alapul; e) a személyes adatokat jogellenesen vagy kezeljük f) A személyes adatokat el kell távolítani a társaság törvényes kötelezettségének teljesítése érdekében.</p>
								<p>Ez a jog nem alkalmazható abban az esetben, ha az adatkezelés szükséges (a) az uniós jog vagy a tagállami jog értelmében feldolgozandó jogszabályok által előírt kötelezettség teljesítéséhez; vagy b) a törvényes jogok létrehozásához, gyakorlásához vagy védelméhez.</p>
								<p>Feldolgozási korlátozások</p>
								<p>Ha aggódik a személyes adatai pontossága miatt, kérheti a társaságot, hogy korlátozza személyes adatainak feldolgozását.</p>
								<p>Ha a személyes adatok korlátozását kéri, a személyes adatokat csak akkor lehet megőrizni, ha Ön hozzájárul, vagy törvényes jogok létrehozásához, gyakorlásához vagy védelméhez, vagy más természetes személy jogainak védelme érdekében, vagy az Európai Unión belül vagy valamely tagállamon belül jelentős közérdekű ok esetén.</p>
								<p>Az adathordozhatósághoz való jog</p>
								<p>Ha a folyamatot automatizált rendszer végzi, és hozzájáruláson vagy szerződésen alapul, amelyre Ön részt vesz a szerződésben, akkor jogában áll és joga felülvizsgálni a vállalatnak megadott személyes adatait.</p>
								<p>Ön jogosult arra kérni, hogy személyes adatait közvetlenül a társaságtól továbbítsák egy másik adatkezelőnek, amennyiben technikailag megvalósítható. A törlési jog alapján fennálló jogok nem változnak az adatok átruházhatóságához való jogának gyakorlása miatt. Az adattovábbításhoz való jog nem zavarja mások jogait vagy szabadságait.</p>
								<p>A kihíváshoz való jog</p>
								<p>Bármikor elérhető az Önre vonatkozó személyes adatok bármilyen felhasználásának tiltakozására, amely a vállalat vagy egy harmadik fél jogos érdekein alapul. Ez nem korlátozódik kizárólag ezen jogos érdeken alapuló profilalkotásra. Ha kényszerítő jogos okokat tudunk megállapítani a személyes adatok feldolgozására, akkor ezt nem tudjuk folytatni, hacsak nem bizonyítja, hogy ezek meghaladják az Ön jogait, szabadságait vagy érdekeit, vagy a törvényes jogok gyakorlását, megalapítását vagy védelmét.</p>
								<p>A közvetlen marketing vonatkozásában Önnek joga van bármikor tiltakozni az Önre vonatkozó személyes adatok feldolgozását.</p>
								<p>A hozzájárulás megtagadásának joga</p>
								<p>Ön bármikor visszavonhatja beleegyezését az Ön személyes adatainak feldolgozásához. Ez nem változtatja meg az eltávolítás előtt az Ön beleegyezésétől függő adatkezelés jogszerűségét és jogszerűségét.</p>
								<p>Ön jogosult panaszt benyújtani az Önt felügyelő hatósághoz.</p>
								<p>Fellebbezést nyújthat be valamely tagállam által létrehozott felügyeleti hatósághoz, hogy megvédje az egyének alapvető jogait a személyes adatok Európai Unión belüli feldolgozásával kapcsolatban.</p>
								<p>Az Európai Unió és a tagállamok jogszabályai korlátozhatják az Önre vonatkozó személyes adatokkal kapcsolatos jogait, amint azt e 13. szakasz részletezi.</p>
								<p>A kérelem kézhezvételét követő egy hónapon belül megadjuk Önnek a kért információkat a jelen szerződés 13. szakaszában szereplő jogokkal összhangban. A határidő legfeljebb két hónapra meghosszabbítható, szükség esetén a kérelem jellegétől és a kérelmek mennyiségétől függően. A kérés kézhezvételét követő egy hónapon belül értesítjük Önt az esetleges kiterjesztésről, valamint az okokról.</p>
								<p>Mindaddig, amíg ez nem ellentétes a törvény 13. szakasza rendelkezéseivel, a 13. cikk szerinti jogai alapján kért információkat ingyenesen hozzáférhetővé tesszük. Ha a kérelem nem indokolt vagy túlzott, különösen, ha megismétlődik, ésszerű összeget számíthatunk fel az információ megadásával vagy a kért intézkedés bejelentésével kapcsolatos adminisztratív költségek fedezésére. Lehet, hogy nem cselekszünk.</p>
								<p>Ha kétségei merülnek fel a kérelmét benyújtó valós személy személyazonosságával kapcsolatban Ha kétségeink merülnek fel a kérelmet benyújtó személy személyazonosságával kapcsolatban, a vállalat további információkat kérhet.</p>
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