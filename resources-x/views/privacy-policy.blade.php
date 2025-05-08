@extends('layouts.landing.app')

@section('title',translate('messages.privacy_policy'))

@section('content')
    <!-- ==== Privacy Section ==== -->
    <style>
        :root {
            --main-color: #04f283;
            --dark-color: #038a4a;
            --light-color: #b0ffe6;
            --text-color: #333;
            --bg-color: #f9f9f9;
        }
        
       
        
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        
        .policy-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        h1, h2 {
            color: var(--dark-color);
        }
        
        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid var(--main-color);
            padding-bottom: 15px;
        }
        
        h2 {
            font-size: 1.5rem;
            margin-top: 30px;
            padding-left: 15px;
            border-left: 4px solid var(--main-color);
        }
        
        p {
            margin-bottom: 15px;
        }
        
        .language-toggle {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .lang-btn {
            padding: 10px 20px;
            margin: 0 10px;
            background-color: white;
            border: 2px solid var(--main-color);
            border-radius: 30px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .lang-btn.active {
            background-color: var(--main-color);
            color: white;
        }
        
        .lang-content {
            display: none;
        }
        
        .lang-content.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        .accordion {
            background-color: var(--light-color);
            color: var(--text-color);
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
            margin-bottom: 5px;
            border-radius: 5px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .accordion:after {
            content: '\02795';
            font-size: 13px;
            color: var(--dark-color);
        }
        
        .active-accordion:after {
            content: '\2796';
        }
        
        .active-accordion, .accordion:hover {
            background-color: var(--main-color);
            color: white;
        }
        
        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            margin-bottom: 15px;
            border-radius: 0 0 5px 5px;
        }
        
        .panel-content {
            padding: 15px 0;
        }
        
        .contact-form {
            margin-top: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
        }
        
        textarea {
            height: 150px;
        }
        
        button {
            background-color: var(--main-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: var(--dark-color);
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: var(--text-color);
            font-size: 0.9rem;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .policy-container {
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
   <body>
    
    <div class="container">
        <div class="policy-container">
            <h1>Privacy Policy</h1>
            
            <div class="language-toggle">
                <button class="lang-btn active" onclick="toggleLanguage('hu')">Hungarian</button>
                <button class="lang-btn" onclick="toggleLanguage('en')">English</button>
            </div>
            
            <!-- Hungarian Content -->
            <div id="hu-content" class="lang-content active">
                <p>Kohinoor a Kohinoor alkalmazást ingyenes alkalmazásként építette fel. Ezt a SZOLGÁLTATÁST a Kohinoor térítésmentesen biztosítja, és változatlan formában történő használatra szánja.</p>
                
                <p>Ez az oldal arra szolgál, hogy tájékoztassa a látogatókat a személyes adatok gyűjtésével, felhasználásával és közzétételével kapcsolatos irányelveinkről, ha valaki úgy dönt, hogy igénybe veszi a Szolgáltatásainkat.</p>
                
                <p>Ha úgy dönt, hogy használja a Szolgáltatásainkat, akkor beleegyezik az információk gyűjtésébe és felhasználásába a jelen irányelvekkel kapcsolatban. Az általunk gyűjtött személyes adatokat a Szolgáltatás nyújtására és fejlesztésére használjuk. Az Ön adatait nem használhatjuk fel és nem oszthatjuk meg senkivel, kivéve a jelen Adatvédelmi szabályzatban leírtak szerint.</p>
                
                <p>A jelen Adatvédelmi szabályzatban használt kifejezések ugyanazzal a jelentéssel bírnak, mint az Általános Szerződési Feltételeinkben, amelyek a Kohinoor weboldalon érhetők el, kivéve, ha a jelen Adatvédelmi szabályzat másként nem határozza meg.</p>
                
                <button class="accordion">Információgyűjtés és felhasználás</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>A jobb élmény érdekében, a Szolgáltatásunk használata során megkövetelhetjük, hogy bizonyos személyazonosításra alkalmas adatokat adjon meg, beleértve, de nem kizárólagosan a nevet, e-mail címet, telefonszámot. Az általunk kért információk az Ön eszközén maradnak meg, és azokat semmilyen módon nem gyűjtjük be.</p>
                        
                        <p>Az alkalmazás harmadik fél szolgáltatásait használja, amelyek az Ön azonosítására szolgáló információkat gyűjthetnek.</p>
                        
                        <p>Link az alkalmazás által használt harmadik fél szolgáltatók adatvédelmi irányelveinkhez</p>
                        <ul>
                            <li>Google Play szolgáltatások</li>
                            <li>Google Analytics for Firebase</li>
                            <li>Firebase Crashlytics</li>
                        </ul>
                    </div>
                </div>
                
                <button class="accordion">Naplóadatok</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Tájékoztatjuk, hogy amikor Ön használja a szolgáltatásainkat, az alkalmazás hibája esetén (harmadik fél termékein keresztül) adatokat és információkat gyűjtünk a telefonjáról, úgynevezett naplóadatokat. Ezek a Naplóadatok olyan információkat tartalmazhatnak, mint az Ön eszközének Internet Protocol ("IP") címe, az eszköz neve, az operációs rendszer verziója, az alkalmazás konfigurációja a Szolgáltatásunk igénybevételekor, a Szolgáltatás használatának időpontja és dátuma, valamint egyéb statisztikák.</p>
                    </div>
                </div>
                
                <button class="accordion">Sütik</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>A cookie-k olyan kis mennyiségű adatot tartalmazó fájlok, amelyeket általában anonim egyedi azonosítóként használnak. Ezeket az Ön által meglátogatott weboldalak küldik el az Ön böngészőjének, és az eszköz belső memóriájában tárolódnak.</p>
                        
                        <p>Ez a Szolgáltatás nem használ kifejezetten ilyen "sütiket". Az alkalmazás azonban használhat olyan harmadik féltől származó kódot és könyvtárakat, amelyek "cookie-kat" használnak információgyűjtéshez és szolgáltatásaik fejlesztéséhez. Önnek lehetősége van arra, hogy elfogadja vagy visszautasítsa ezeket a cookie-kat, és tudnia kell, ha egy cookie-t küldenek az eszközére. Ha úgy dönt, hogy elutasítja a cookie-kat, előfordulhat, hogy nem tudja használni a szolgáltatás egyes részeit.</p>
                    </div>
                </div>
                
                <button class="accordion">Szolgáltatók</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>A következő okok miatt harmadik félként cégeket és magánszemélyeket alkalmazhatunk:</p>
                        <ul>
                            <li>Szolgáltatásunk megkönnyítése érdekében;</li>
                            <li>A Szolgáltatásnak a mi nevünkben történő nyújtása;</li>
                            <li>A Szolgáltatással kapcsolatos szolgáltatások elvégzése; vagy</li>
                            <li>Hogy segítsenek nekünk a Szolgáltatásunk használatának elemzésében.</li>
                        </ul>
                        
                        <p>Szeretném tájékoztatni a Szolgáltatás felhasználóit, hogy ezek a harmadik felek hozzáférhetnek a személyes adataikhoz. Ennek oka a nevünkben rájuk bízott feladatok elvégzése. Ugyanakkor kötelesek az adatokat semmilyen más célra nem továbbítani vagy felhasználni.</p>
                    </div>
                </div>
                
                <button class="accordion">Biztonság</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Nagyra értékelem az Ön bizalmát, hogy megadja nekünk Személyes adatait, ezért törekszünk arra, hogy kereskedelmi szempontból elfogadható eszközöket alkalmazzunk azok védelmére. Ne feledje azonban, hogy az interneten keresztül történő továbbítás vagy az elektronikus tárolás semmilyen módszere nem 100%-ig biztonságos és megbízható, és nem tudjuk garantálni az abszolút biztonságot.</p>
                    </div>
                </div>
                
                <button class="accordion">Más oldalakra mutató linkek</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Ez a szolgáltatás tartalmazhat más oldalakra mutató linkeket. Ha rákattint egy harmadik féltől származó linkre, akkor az adott webhelyre kerül átirányításra. Vegye figyelembe, hogy ezeket a külső oldalakat nem mi üzemeltetjük. Ezért nyomatékosan ajánljuk, hogy olvassa el ezen webhelyek adatvédelmi irányelveit. Nincs befolyásunk és nem vállalunk felelősséget a harmadik fél webhelyeinek vagy szolgáltatásainak tartalmáért, adatvédelmi szabályzatáért vagy gyakorlatáért.</p>
                    </div>
                </div>
                
                <button class="accordion">Gyermekek adatvédelme</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Ezek a szolgáltatások nem szólnak 13 év alattiakhoz. 13 év alatti gyermekekről tudatosan nem gyűjtünk személyazonosításra alkalmas adatokat. Abban az esetben, ha észleljük, hogy egy 13 év alatti gyermek személyes adatokat adott meg számunkra, azonnal töröljük azokat a szervereinkről. Ha Ön szülő vagy gyám, és tudomása van arról, hogy gyermeke személyes adatokat adott meg nekünk, kérem, lépjen kapcsolatba velünk, hogy megtehessük a szükséges lépéseket.</p>
                    </div>
                </div>
                
                <button class="accordion">Felhasználói adatok törlése</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>HA TÖRÖLNI KÍVÁNJA ADATAIT, KÉRJÜK LÁTOGASSON EL AZ APPUNKRA, AZON BELÜL NYISSA MEG A PROFIL MENÜPONTOT ÉS KERESSE MEG AZ "ÍRJON NEKÜNK SZEKCIÓT", VAGY ÍRJON ÜZENETET KÖZVETLENÜL a INFO@KOHINOOR.HU címre.</p>
                    </div>
                </div>
                
                <button class="accordion">Az adatvédelmi szabályzat változásai</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Időről időre frissíthetem az Adatvédelmi szabályzatot. Ezért javasoljuk, hogy rendszeresen tekintse át ezt az oldalt a változások miatt. A változásokról az új Adatvédelmi szabályzat ezen az oldalon történő közzétételével értesítem Önt.</p>
                        
                        <p>Ez a szabályzat 2023-05-24-től hatályos.</p>
                    </div>
                </div>
                
                <button class="accordion">Kapcsolatfelvétel</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Ha bármilyen kérdése vagy javaslata van az Adatvédelmi szabályzatunkkal kapcsolatban, ne habozzon kapcsolatba lépni velünk a info@kohinoor.hu címen.</p>
                        
                        <div class="contact-form">
                            <h3>Küldjön üzenetet közvetlenül</h3>
                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="name">Név:</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Üzenet:</label>
                                    <textarea id="message" name="message" required></textarea>
                                </div>
                                <button type="submit">Küldés</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- English Content -->
            <div id="en-content" class="lang-content">
                <p>Kohinoor built the Kohinoor app as a Free app. This SERVICE is provided by Kohinoor at no cost and is intended for use as is.</p>
                
                <p>This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.</p>
                
                <p>If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.</p>
                
                <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which are accessible at Kohinoor unless otherwise defined in this Privacy Policy.</p>
                
                <button class="accordion">Information Collection and Use</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information, including but not limited to Name, Email, Phone Number. The information that I request will be retained on your device and is not collected by me in any way.</p>
                        
                        <p>The app does use third-party services that may collect information used to identify you.</p>
                        
                        <p>Link to the privacy policy of third-party service providers used by the app</p>
                        <ul>
                            <li>Google Play Services</li>
                            <li>Google Analytics for Firebase</li>
                            <li>Firebase Crashlytics</li>
                        </ul>
                    </div>
                </div>
                
                <button class="accordion">Log Data</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third-party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol ("IP") address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.</p>
                    </div>
                </div>
                
                <button class="accordion">Cookies</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device's internal memory.</p>
                        
                        <p>This Service does not use these "cookies" explicitly. However, the app may use third-party code and libraries that use "cookies" to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>
                    </div>
                </div>
                
                <button class="accordion">Service Providers</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>I may employ third-party companies and individuals due to the following reasons:</p>
                        <ul>
                            <li>To facilitate our Service;</li>
                            <li>To provide the Service on our behalf;</li>
                            <li>To perform Service-related services; or</li>
                            <li>To assist us in analyzing how our Service is used.</li>
                        </ul>
                        
                        <p>I want to inform users of this Service that these third parties have access to their Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>
                    </div>
                </div>
                
                <button class="accordion">Security</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.</p>
                    </div>
                </div>
                
                <button class="accordion">Links to Other Sites</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
                    </div>
                </div>
                
                <button class="accordion">Children's Privacy</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>These Services do not address anyone under the age of 13. I do not knowingly collect personally identifiable information from children under 13 years of age. In the case I discover that a child under 13 has provided me with personal information, I immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact me so that I will be able to do the necessary actions.</p>
                    </div>
                </div>
                
                <button class="accordion">Deleting User Data</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>IF YOU WANT TO DELETE YOUR DATA, PLEASE VISIT OUR APP, OPEN THE PROFILE SECTION AND FIND THE "WRITE TO US SECTION", OR SEND A MESSAGE DIRECTLY TO INFO@KOHINOOR.HU.</p>
                    </div>
                </div>
                
                <button class="accordion">Changes to This Privacy Policy</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page.</p>
                        
                        <p>This policy is effective as of 2023-05-24.</p>
                    </div>
                </div>
                
                <button class="accordion">Contact Us</button>
                <div class="panel">
                    <div class="panel-content">
                        <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at info@kohinoor.hu.</p>
                        
                        <div class="contact-form">
                            <h3>Send us a message directly</h3>
                            <form id="contactFormEn">
                                <div class="form-group">
                                    <label for="nameEn">Name:</label>
                                    <input type="text" id="nameEn" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="emailEn">Email:</label>
                                    <input type="email" id="emailEn" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="messageEn">Message:</label>
                                    <textarea id="messageEn" name="message" required></textarea>
                                </div>
                                <button type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer">
                <p>© 2025 Kohinoor. All rights reserved.</p>
            </div>
        </div>
    </div>

    <script>
        // Language toggle functionality
        function toggleLanguage(lang) {
            // Hide all language content
            const contents = document.querySelectorAll('.lang-content');
            contents.forEach(content => content.classList.remove('active'));
            
            // Show selected language content
            document.getElementById(lang + '-content').classList.add('active');
            
            // Update button styles
            const buttons = document.querySelectorAll('.lang-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Find the clicked button and make it active
            const clickedBtn = Array.from(buttons).find(btn => 
                btn.textContent.toLowerCase().includes(lang === 'hu' ? 'hungarian' : 'english')
            );
            if (clickedBtn) clickedBtn.classList.add('active');
        }
        
        // Accordion functionality
        document.addEventListener('DOMContentLoaded', function() {
            const accordions = document.querySelectorAll('.accordion');
            
            accordions.forEach(accordion => {
                accordion.addEventListener('click', function() {
                    // Toggle active class
                    this.classList.toggle('active-accordion');
                    
                    // Toggle panel visibility
                    const panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            });
            
            // Form submission handling
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form data
                    const formData = new FormData(this);
                    const name = formData.get('name');
                    const email = formData.get('email');
                    const message = formData.get('message');
                    
                    // In a real implementation, you would send this data to your server
                    alert(`Thank you, ${name}! Your message has been received. We'll contact you at ${email} shortly.`);
                    
                    // Reset form
                    this.reset();
                });
            });
        });
    </script>
   </body>
    <!-- ==== Privacy Section ==== -->
@endsection
