@extends('layouts.landing.app')

@section('title',translate('messages.terms_and_condition'))

@section('content')
    <!-- ==== Privacy Section ==== -->
  <style>

:root {
            --primary-color: #04f283;
            --primary-dark: #03c96c;
            --text-color: #333333;
            --bg-light: #f9f9f9;
            --white: #ffffff;
        }

    .terms-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .terms-title {
            color: var(--primary-color);
            font-size: 32px;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--primary-color);
        }
        
        .section-title {
            color: var(--primary-color);
            font-size: 24px;
            margin: 30px 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--primary-color);
        }
        
        .subsection-title {
            color: var(--primary-dark);
            font-size: 18px;
            margin: 20px 0 10px 0;
        }
        
        .paragraph {
            margin-bottom: 15px;
        }
        
        .definition {
            background-color: rgba(4, 242, 131, 0.05);
            padding: 15px;
            border-left: 4px solid var(--primary-color);
            margin-bottom: 15px;
        }
        
        .highlight {
            background-color: rgba(4, 242, 131, 0.1);
            padding: 10px;
            border-radius: 4px;
            margin: 15px 0;
        }
        
        ol, ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        .important {
            font-weight: bold;
        }
  </style>
    <!-- ==== Privacy Section ==== -->

    <div class="terms-container">
        <h1 class="terms-title">Terms and Conditions</h1>
        
        <p class="paragraph">A Kohinoor Foods Szolgáltatás használatával Ön elfogadja, hogy kötelező érvényűnek tekinti magára nézve a jelen Felhasználási Feltételeket („Terms & Conditions").</p>
        
        <p class="paragraph">Kérjük, alaposan olvassa el az alábbi Felhasználási Feltételeket, mielőtt használná a Kohinoor Foods Szolgáltatást. Ha nem ért egyet a Felhasználási Feltételekkel, kérjük, ne használja a Kohinoor Foods Szolgáltatást. Jelen Felhasználási Feltételek minden Kohinoor Foods Szolgáltatás használatára, valamint az ezek keretében létrejött kiszállítási szolgáltatásra vonatkoznak. A Felhasználási Feltételek kizárólag Ön és a Kohinoor Foods között jönnek létre.</p>

        <h2 class="section-title">1. Fogalommeghatározások</h2>
        
        <div class="definition">
            <p><span class="important">„Futárpartner":</span> olyan természetes vagy jogi személyek, akik a Kohinoor Foods alvállalkozóiként, vagy foglalkoztatottjaiként végeznek futárszolgáltatásokat.</p>
            
            <p><span class="important">„Kiszállítási Szolgáltatás":</span> a Kohinoor Foods által nyújtott kiszállítási szolgáltatások, amely egy Megrendelés során jön létre. A Kohinoor Foods Applikáción leadott Megrendelések esetében a Kiszállítási Szolgáltatás kötelező érvényű megállapodást képez a Kohinoor Foods és a Felhasználó között.</p>
            
            <p><span class="important">„Megrendelés":</span> a 3.2. pontban meghatározottak szerint.</p>
            
            <p><span class="important">„Partner":</span> olyan étterem vagy egyéb szolgáltató partner, amely aláírt egy partneri megállapodást a Kohinoor Foodsal, és termékeit, illetve adott esetben kiszállítási szolgáltatásait a Kohinoor Foods fellületein keresztül kínálja. Hacsak a Kohinoor Foods Szolgáltatásban másképp nincs feltüntetve, minden Partner kereskedő a magyar jog értelmében.</p>
            
            <p><span class="important">„Gyógyszertári Partner":</span> olyan Partner, amely megfelel a gyógyszertár fogalmának a 2006. évi XCVIII. törvény („Gyft.") alapján, érvényes működési és egyéb szükséges engedéllyel rendelkezik az időről időre módosított jogszabályok szerint, és az alkalmazandó nyilvántartásban szerepel.</p>
            
            <p><span class="important">„Kohinoor Foods":</span> Kashmir Traders Kft. (székhely: 1081 Budapest, Népszínház utca 21. földszint; cégjegyzékszám: 01-09-350580).</p>
            
            <p><span class="important">„Kohinoor Foods Alkalmazás":</span> a Kohinoor Foods nevű digitális alkalmazás, amelyet a Kohinoor Foods biztosít természetes és jogi személyek számára, hogy a Kohinoor Foods Partnereitől termékeket rendeljenek.</p>
            
            <p><span class="important">„Kohinoor Foods Szolgáltatás":</span> a Kohinoor Foods Alkalmazás, a Kohinoor.hu weboldal és egyéb további helyszínek, amelyeket a Kohinoor.hu említ.</p>
            
            <p><span class="important">„Felhasználó" vagy „Ön":</span> olyan természetes, vagy jogi személy, aki használja a Kohinoor Foods Szolgáltatást.</p>
            
            <p><span class="important">„Kiskereskedelmi Termékek":</span> élelmiszerek, fogyasztási cikkek, háztartási áruk és egyéb fogyasztási javak, amelyeket a Partner a Kohinoor Foods Szolgáltatáson keresztül elérhetővé tesz.</p>
            
            <p><span class="important">„SZÉP Kártya":</span> a Széchenyi Pihenőkártya, amelyre a 76/2018. (IV. 20.) Korm. rendelet vonatkozik.</p>
        </div>

        <h2 class="section-title">2. A Kohinoor Foods azonosító adatai</h2>
        
        <div class="paragraph">
            <p>Kashmir Traders KFT.<br>
            Székhely: 1081 Budapest, Népszínáz utca 21. Földszint<br>
            Cégjegyzékszám: 01-09-350580<br>
            Adószám: 27121267-2-42<br>
            Bejegyezve a Fővárosi Törvényszék Cégbíróságán.</p>
            
            <p>Kereskedelmi név: „Kohinoor Foods"<br>
            E-mail cím: info@Kohinoor.hu</p>
            
            <p>A tárhely-szolgáltató: Amazon Web Services, Inc.<br>
            Cím: USA 410 Terry Ave North, Washington</p>
            
            <p>A működési hely és a panaszkezelés megegyezik a Kohinoor Foods székhelyével.</p>
            
            <p>A Partnerek azonosítójával, termékeivel és szolgáltatásaival kapcsolatos információk elérhetők a Kohinoor Foods Alkalmazáson és a Kohinoor.hu weboldalon.</p>
        </div>

        <h2 class="section-title">3. A Kohinoor Foods Szolgáltatás leírása</h2>
        
        <h3 class="subsection-title">3.1. Szolgáltatás áttekintése</h3>
        <div class="paragraph">
            <p>A Kohinoor Foods egy olyan platformot biztosít, amelyen keresztül a Felhasználó élelmiszer-termékeket, Kiskereskedelmi Termékeket vásárolhat, és a Kohinoor Foods bizonyos Partnereitől vásárolt termékekhez kapcsolódóan kiszállítási szolgáltatásokat is nyújt. Amikor Ön termékeket vásárol egy Partnertől, a Kohinoor Foods elősegíti a vásárlás lebonyolítását a Kohinoor Foods Szolgáltatáson keresztül. A Kohinoor Foods jogosult szolgáltatási díjat és/vagy egyéb pótdíjakat felszámítani a Felhasználók részére minden vagy bizonyos Megrendelésekért (például bizonyos napszakban leadott Megrendelésekért, vagy bizonyos Partnerektől érkező Megrendelésekért). A Kohinoor Foods pontos információt nyújt a Kohinoor Foods Szolgáltatáson keresztül a szolgáltatási díjak és/vagy egyéb pótdíjak összegéről, amelyeket a Felhasználó a Megrendelés leadása előtt köteles elfogadni. A Kohinoor Foods Szolgáltatás használatával a Felhasználó elfogadja, hogy a Kohinoor Foods jogosult a meghatározott szolgáltatási díjak és egyéb pótdíjak felszámítására. A Megrendelés leadásával a Felhasználó elfogadja a szolgáltatási díjak és pótdíjak összegét, valamint a vonatkozó fizetési kötelezettséget.</p>
        </div>

        <h3 class="subsection-title">3.2. Termékek és árazás</h3>
        <div class="paragraph">
            <p>A Partnerek pontos és naprakész információkat nyújtanak termékeikről és szolgáltatásaikról a Kohinoor Foods Szolgáltatáson keresztül, beleértve a menüket és a termékárakat. A kiszállítási díjak, szolgáltatási díjak és/vagy egyéb pótdíjak aktuális összegéről a Kohinoor Foods Szolgáltatás nyújt információt. Ha Ön allergiás vagy egyéb étkezési korlátozással él, kérjük, közvetlenül vegye fel a kapcsolatot az érintett Partnerrel. A Partner kérésre élelmiszer-specifikus információkat nyújt. A Partner termékeinek és szolgáltatásainak eladására és vásárlására vonatkozóan a Partnerek további feltételeket is meghatározhatnak, amelyek a Kohinoor Foods Szolgáltatáson és itt kerülnek bemutatásra. A Kiskereskedelmi Termékek ára a Megrendelés leadásának időpontjában érvényes ár alapján kerül meghatározásra. Felhívjuk figyelmét, hogy előre csomagolt áruk esetében a csomagolás súlyának eltérései miatt kisebb árkülönbségek lehetnek a megjelölt ár és a Megrendelés végleges ára között.</p>
            
            <p>A Partner biztosítja a Kiskereskedelmi Termékekre vonatkozó allergén-információkat és egyéb szükséges termékspecifikus információkat a Kohinoor Foods Szolgáltatáson keresztül. A Partner felelős azért, hogy a Kiskereskedelmi Termékekkel kapcsolatos minden információt az alkalmazandó jogszabályoknak és előírásoknak megfelelően nyújtson, beleértve az EU 1169/2011 számú rendeletét a fogyasztók számára nyújtott élelmiszer-információkról. Szükség esetén a Partner felelős továbbá annak biztosításáért, hogy az eladási ár és az egységár az EU 98/6/EK irányelvének megfelelően legyen feltüntetve.</p>
            
            <p>A Partner saját belátása szerint határozza meg a Kohinoor Foods Szolgáltatáson elérhető Kiskereskedelmi Termékek választékát és árait. A Partner bizonyos korlátozásokat is alkalmazhat az Ön Megrendelésére, például mennyiségi és méretbeli korlátozásokat. A Partner felelős azért, hogy tájékoztassa Önt a Kiskereskedelmi Termékek elérhetőségével kapcsolatos bármely korlátozásról. A Felhasználó elfogadja, hogy ha egy termék átmenetileg nem elérhető, a Partner az adott termék nélkül teljesíti a Megrendelést. Az elérhetetlen termékekért nem számítunk fel díjat.</p>
        </div>

        <h3 class="subsection-title">3.3. Partner felelőssége</h3>
        <div class="paragraph">
            <p>Az a Partner, akit a Felhasználó kiválasztott, előkészíti a Megrendelésben szereplő termékeket a Felhasználó számára. A Kohinoor Foods nem vállal felelősséget a Felhasználó felé az Adásvételi szolgáltatás nem megfelelő teljesítéséért, amely kizárólag a Partner felelőssége.</p>
        </div>

        <h3 class="subsection-title">3.4. Megrendelés visszavonása</h3>
        <div class="paragraph">
            <p>Ön nem vonhatja vissza vagy mondhatja le a Megrendelését a termékekre vagy a kiszállítási szolgáltatásokra vonatkozóan, miután azt leadta. Kérjük, a termékek vagy szolgáltatások megrendelése előtt gondosan ellenőrizze választását.</p>
        </div>

        <h3 class="subsection-title">3.5. Fogyasztói elállási jog</h3>
        <div class="paragraph">
            <p>A fentiek ellenére, fogyasztóként (azaz olyan személy, aki nem a hivatásával, önálló foglalkozásával vagy üzleti tevékenységével összefüggésben jár el) Ön jogosult arra, hogy a Kiskereskedelmi Termékek megrendelését 14 napon belül indoklás nélkül visszavonja az ilyen termékek átvételétől számítva, vagy ennél hosszabb időtartamon belül, ha azt az adott Partner a Kohinoor Foods Szolgáltatásban meghatározta (ha alkalmazhetó). A törvényes 14 napos időtartamot betartottnak kell tekinteni, ha a termékeket a határidő lejárta előtt elküldi. Ha a Partner olyan termékeket forgalmaz, amelyekre vonatkozóan Ön indokolás nélkül visszavonhatja a vásárlást, a Partner köteles egy olyan keretrendszert kialakítani és üzemeltetni, amely lehetővé teszi a Felhasználók számára ezen joguk megfelelő gyakorlását.</p>
            
            <p>Ön visszavonhatja az ilyen Megrendelést vagy annak részeit úgy, hogy kapcsolatba lép a Partner értékesítési pontjával. Az értékesítési pont azonosítása a Kohinoor Foods vagy a Partner által kiállított rendelésszám alapján történik. Ha a Kohinoor Foods értesítést kap a visszavonásról, azt a Partner felé továbbítja bármilyen felülvizsgálat nélkül.</p>
            
            <p>A visszavonási jogot egyértelmű nyilatkozat útján gyakorolhatja a Partner felé (közvetlenül vagy a Kohinoor Foodson keresztül, ahogyan az fentebb említettük), amely a Felhasználó mint fogyasztó kötelezettsége. Ez a nyilatkozat bármilyen formában megtehető. A Partner köteles a Kohinoor Foods részére haladéktalanul írásban tájékoztatást nyújtani minden, a visszavonási jog gyakorlásáról szóló nyilatkozatról és a visszatérítésről. A Kohinoor Foods a Felhasználó részére, aki mint fogyasztó él visszavonási jogával, visszatéríti a teljes összeget (beleértve a szolgáltatási díjakat, pótdíjakat, szállítási díjakat és borravalót), azzal a fizetési móddal, amelyet a Felhasználó kezdeményez (Banki átutalás, vagy Kohinoor Egyenleg feltöltés).</p>
            
            <div class="highlight">
                <p>Vegye figyelembe, hogy a kiszállítási díj, szolgáltatási díj és egyéb pótdíjak (ha van ilyen) és a borravaló nem kerül visszatérítésre részleges visszavonás esetén. Tehát ha a rendelésben több termék szerepel és Ön csak néhány terméket kíván visszavonni Ön nem jogosult az egyéb díjak visszatérítésére.</p>
            </div>
            
            <p>Felhívjuk figyelmét, hogy a Partner külön feltételeket vagy garanciákat határozhat meg, amelyek ezen feltételeken felül alkalmazandók. A Partner ezekről a feltételekről külön tájékoztatást nyújt a Felhasználónak a Kohinoor Foods Szolgáltatáson keresztül.</p>
            
            <div class="highlight">
                <h4>Minta visszavonási nyilatkozat:</h4>
                <p>Címzett: [a Partner neve, címe és e-mail címe]:</p>
                <p>Ezúton kijelentem/kijelentjük (*), hogy a következő termékek megvásárlásától elállok/állunk: (a termékek felsorolása):</p>
                <p>Megrendelés dátuma (): / Átvétel dátuma ():</p>
                <p>A fogyasztó(k) neve:</p>
                <p>A fogyasztó(k) címe:</p>
                <p>A fogyasztó(k) aláírása (csak papír alapú értesítés esetén):</p>
                <p>Dátum:</p>
                <p>(*) A megfelelő rész törlendő.</p>
            </div>
        </div>

        <h3 class="subsection-title">3.6. Elállási jog korlátozásai</h3>
        <div class="paragraph">
            <p>A Kohinoor Foods a fogyasztók törvényi elállási jogait az alkalmazandó jogszabályok, többek között a 45/2014. (II.26.) Korm. rendelet 29. § (1) bekezdése által meghatározott korlátok között követi. Egyes áruk kizárhatók a törvényi elállási jogból, beleértve, de nem kizárólagosan az alábbiakat:</p>
            
            <ul>
                <li>Élelmiszerek és olyan termékek, amelyek természetüknél fogva gyorsan romlanak vagy lejárati idejük gyorsan közeledik.</li>
                <li>Olyan termékek, amelyek természetüknél fogva más termékekkel elválaszthatatlanul összekapcsolódnak az átvétel után.</li>
                <li>Játékok, filmek, szoftverek és más lezárt termékek, amelyek esetében a visszavonás nem lehetséges a pecsét vagy más csomagolás felnyitása után.</li>
                <li>Higiéniai és intim termékek a csomagolás felbontása után.</li>
                <li>Olyan áruk, amelyek a Felhasználó utasításai szerint kerültek legyártásra vagy egyedileg elkészítésre.</li>
            </ul>
            
            <p>Ez azt jelenti, hogy például élelmiszerek visszaküldésére nem hivatkozhat törvényi elállási joggal a vásárlás után. Az ilyen termékekre vonatkozó Megrendelést nem lehet visszavonni, lemondani vagy módosítani a leadás után. Kérjük, gondosan ellenőrizze választását a Megrendelés leadása előtt.</p>
        </div>

        <h3 class="subsection-title">3.7. Termékek visszaküldése</h3>
        <div class="paragraph">
            <p>A Kiskereskedelmi Termékeket a lehető leghamarabb vissza kell küldeni (ennek költsége a Felhasználót terheli) a Megrendelés visszavonása után, de legkésőbb a visszavonás dátumától számított 14 napon belül. A visszaküldött terméknek használatlan állapotúnak kell lennie, kivéve azokat az eseteket, amikor az a minőség, tulajdonságok és alkalmasság megállapításához szükséges volt (a Felhasználó azonban felelősséggel tartozik minden olyan értékcsökkenésért, amely ezen célon túlmutató használat miatt következett be). A terméket megfelelően kell védeni és csomagolni, akár az eredeti csomagolásban, akár ahhoz hasonló módon. A visszatérítés elutasításra kerülhet mindaddig, amíg a Partner nem kapja vissza a termékeket, vagy amíg Ön kétséget kizáró bizonyítékot nem nyújt arra, hogy a termékeket visszaküldte, attól függően, hogy melyik történik meg előbb.</p>
        </div>

        <h3 class="subsection-title">3.8. Megállapodás jellege</h3>
        <div class="paragraph">
            <p>Az Ön és a Kohinoor Foods közötti megállapodás járulékos szerződésnek minősül, amely automatikusan megszűnik, amikor Ön gyakorolja a törvényi fogyasztói elállási jogot az Adásvételi Szolgáltatás tekintetében. Ennek a megállapodásnak a természetéből adódóan a termékgaranciára és jótállásra vonatkozó szabályok nem alkalmazandók az Ön és a Kohinoor Foods közötti megállapodásra. A garanciális jogok között (amelyek variációját Ön viselheti, kivéve, ha az variáció alapos vagy a Kohinoor Foodsnak felróható) például 2 órát meghaladó késedelmes szállítás esetén arányos díjcsökkentést kérhet, vagy elállhat a megállapodásoktól a Kohinoor Foods felé tett értesítéssel. Felhívjuk figyelmét, hogy az értesítést késedelem nélkül meg kell tenni (fogyasztók esetében a 2 hónapon belüli értesítés késedelem nélkülinek tekinthető), az általános elévülési idő pedig 1 év (fogyasztók esetében 2 év, kivéve használt áruk esetén, ahol az 1 év az irányadó). Felhívjuk figyelmét, hogy jelentéktelen hibák nem eredményezhetik az elállási jogot. A garanciális igények 1 éven belüli érvényesítésének feltétele, hogy Ön bizonyítsa, hogy a Kohinoor Foods hibásan teljesített, további kritériumok nincsenek; azonban 1 év elteltével Önnek azt is bizonyítania kell, hogy a hiba a teljesítéskor fennállt.</p>
        </div>

        <h3 class="subsection-title">3.9. Magatartási kódex</h3>
        <div class="paragraph">
            <p>A Kohinoor Foods nem kötelezi magát, hogy bármilyen magatartási kódexnek alávesse magát.</p>
        </div>

        <h2 class="section-title">4. Felhasználói fiókok</h2>
        
        <h3 class="subsection-title">4.1. Felhasználási jog</h3>
        <div class="paragraph">
            <p>Ön korlátozott, nem kizárólagos, visszavonható, nem átruházható és nem továbbengedélyezhető jogot kap arra, hogy hozzáférjen a Kohinoor Foods Szolgáltatáshoz, valamint használja a Kohinoor Foods Szolgáltatáson keresztül elérhető tartalmakat az itt meghatározott célokból, az időről időre Önnek kínált formában. Az iOS Kohinoor Foods Alkalmazásra vonatkozóan az Apple App Store-ból letöltött alkalmazás esetén a Felhasználónak biztosított licenc tovább korlátozódik arra, hogy a Kohinoor Foods Alkalmazást kizárólag az Ön tulajdonában vagy ellenőrzése alatt álló Apple-márkájú termékeken használja, az App Store Felhasználási Feltételeiben és ezen Felhasználási Feltételekben meghatározott Használati Szabályoknak megfelelően. Az itt kifejezetten nem biztosított jogok fenntartva maradnak a Kohinoor Foods és annak licencadói számára.</p>
        </div>

        <h3 class="subsection-title">4.2. Regisztráció</h3>
        <div class="paragraph">
            <p>A Kohinoor Foods Szolgáltatás használatához a Felhasználónak felhasználói fiókot kell létrehoznia a Kohinoor Foods Szolgáltatásban szereplő regisztrációs utasításokat követve. A fiók regisztrációja megköveteli, hogy Ön felhasználónevet és jelszót hozzon létre, valamint megadjon bizonyos személyes adatokat, például nevét, címét, e-mail-címét, telefonszámát. Ön vállalja, hogy a fiókjában megadott információkat pontosan, teljes körűen és naprakészen tartja. A Kohinoor Foods a Felhasználói Adatvédelmi Nyilatkozatában foglaltak szerint kezeli az Ön személyes adatait. A Kohinoor Foods Szolgáltatás hitelesítő adatai személyesek. A Felhasználó köteles biztosítani, hogy a felhasználói fiók hitelesítő adatai és az azonosító információk bizalmasan és harmadik felek számára nem hozzáférhető módon kerüljenek megőrzésre. Egy Felhasználónak csak egy személyes felhasználói fiókja lehet. Ha törölni kívánja fiókját, kérjük, lépjen kapcsolatba velünk az itt megadott elérhetőségen. (info@Kohinoor.hu)</p>
        </div>

        <h3 class="subsection-title">4.3. Fiók biztonsága</h3>
        <div class="paragraph">
            <p>Ha felmerül a gyanú, hogy bármely jogosulatlan személy tudomást szerzett a Felhasználó fiókjának hitelesítő adatairól, vagy hozzáférése van a Felhasználó fiókjához, a Felhasználó köteles erről haladéktalanul tájékoztatni a Kohinoor Foodsot. A Felhasználó felelősséggel tartozik a Kohinoor Foods Szolgáltatás bármilyen használatáért, valamint minden olyan tevékenységért, amely a Felhasználó fiókján keresztül történik.</p>
        </div>

        <h3 class="subsection-title">4.4. Fizetési adatok</h3>
        <div class="paragraph">
            <p>A Kohinoor Foods Szolgáltatás használatához a Felhasználónak érvényes hitelkártya vagy más fizetési mód adatait kell megadnia a Kohinoor Foods számára. A Kohinoor Foods nem tárolja a fizetési eszköz adatait, mivel ezt a Kohinoor Foods által használt harmadik fél fizetési szolgáltató végzi. Ön vállalja, hogy fizet minden, a Kohinoor Foods Szolgáltatás használatából eredő vásárlásért. A Felhasználónak naprakészen kell tartania a felhasználói fiókjában megadott hitelkártya és egyéb fizetési adatokat.</p>
        </div>

        <h2 class="section-title">5. Fizetések</h2>
        
        <h3 class="subsection-title">5.1. Fizetési kötelezettség</h3>
        <div class="paragraph">
            <p>A Felhasználó köteles megfizetni a vásárlási árat, a kiszállítási díjat (ha kiszállítási díj alkalmazandó), valamint a szolgáltatási díjat és egyéb pótdíjakat (ha vannak) a Kohinoor Foods Szolgáltatáson keresztül elérhető fizetési funkció használatával. A Kohinoor Foods minden fizetést begyűjt a Felhasználóktól a Partnerek nevében, kivéve a kiszállítás díját (ha kiszállítás alkalmazandó) és a szolgáltatási díjat, valamint az egyéb pótdíjakat (ha felszámításra kerülnek), amelyeket a Kohinoor Foods saját nevében szed be. A Felhasználó fizetési kötelezettsége (beleértve a szolgáltatási díjat és egyéb pótdíjakat, ha ezek felszámításra kerültek) a Megrendelés leadásával keletkezik a Kohinoor Foods Szolgáltatáson keresztül, a Kiszállítási Szolgáltatás tekintetében pedig a kiszállítási megrendelés leadásával.</p>
        </div>
    </div>
@endsection
