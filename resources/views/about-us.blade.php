@extends('layouts.landing.app')

@section('title',translate('messages.about_us'))

@section('content')
        <!-- ==== About Section ==== -->
        @php($landing_page_text = \App\Models\BusinessSetting::where(['key' => 'landing_page_text'])->first())
        @php($landing_page_text = isset($landing_page_text->value) ? json_decode($landing_page_text->value, true) : null)
        <style>
            :root {
              --main-color: #04f283;
              --dark-color: #121212;
              --light-color: #ffffff;
              --accent-color: #f2a104;
            }
            
            * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: 'Poppins', sans-serif;
            }
            
            #body1 {
              /* background-color: var(--dark-color); */
              /* color: var(--light-color); */
              line-height: 1.6;
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh;
              position: relative;
              overflow-x: hidden;
            }
            
            .about-section {
              max-width: 100%;
              padding: 60px 30px;
              position: relative;
              z-index: 2;
            }
            
            h1 {
              font-size: 42px;
              margin-bottom: 30px;
              color: var(--main-color);
              text-align: center;
              font-weight: 700;
            }
            
            .about-content {
              display: grid;
              grid-template-columns: 1fr 1fr;
              gap: 40px;
              margin-bottom: 40px;
            }
            
            .store-info p {
              margin-bottom: 20px;
              font-size: 16px;
            }
            
            .store-name {
              color: var(--main-color);
              font-weight: 600;
            }
            
            .store-address {
              font-style: italic;
              opacity: 0.9;
            }
            
            .highlight {
              font-weight: 600;
              color: var(--main-color);
            }
            
            .mission {
              background-color: rgba(4, 242, 131, 0.1);
              padding: 30px;
              border-radius: 10px;
              border-left: 4px solid var(--main-color);
            }
            
            .mission h2 {
              color: var(--main-color);
              margin-bottom: 15px;
              font-size: 24px;
            }
            
            .cta {
              display: inline-block;
              background-color: var(--main-color);
              color: var(--dark-color);
              padding: 12px 28px;
              border-radius: 30px;
              font-weight: 600;
              text-decoration: none;
              margin-top: 20px;
              transition: all 0.3s ease;
            }
            
            .cta:hover {
              transform: translateY(-3px);
              box-shadow: 0 10px 20px rgba(4, 242, 131, 0.3);
            }
            
            .cuisine-tags {
              display: flex;
              flex-wrap: wrap;
              gap: 10px;
              margin: 20px 0;
            }
            
            .tag {
              background-color: rgba(4, 242, 131, 0.2);
              color: var(--main-color);
              padding: 6px 14px;
              border-radius: 20px;
              font-size: 14px;
            }
            
            .vector-bg {
              position: absolute;
              width: 100%;
              height: 100%;
              top: 0;
              left: 0;
              z-index: 1;
              opacity: 0.3;
            }
            
            @media (max-width: 768px) {
              .about-content {
                grid-template-columns: 1fr;
              }
            }
          </style>
        
        <!-- ==== About Section ==== -->

        <div id="body1">
            
            <svg class="vector-bg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1000 1000">
                <path d="M0,250 Q250,150 500,250 T1000,250 V1000 H0 Z" fill="url(#grad1)" opacity="0.3"></path>
                <path d="M0,350 Q250,250 500,350 T1000,350 V1000 H0 Z" fill="url(#grad2)" opacity="0.2"></path>
                <circle cx="150" cy="150" r="100" fill="url(#grad3)" opacity="0.2"></circle>
                <circle cx="850" cy="150" r="70" fill="url(#grad1)" opacity="0.2"></circle>
                <circle cx="250" cy="600" r="120" fill="url(#grad2)" opacity="0.1"></circle>
                <circle cx="750" cy="500" r="90" fill="url(#grad3)" opacity="0.1"></circle>
                <defs>
                  <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#04f283;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#044cf2;stop-opacity:1" />
                  </linearGradient>
                  <linearGradient id="grad2" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#04f283;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#f2a104;stop-opacity:1" />
                  </linearGradient>
                  <linearGradient id="grad3" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#04f283;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#121212;stop-opacity:1" />
                  </linearGradient>
                </defs>
              </svg>
            
              <section class="about-section">
                <h1>About Kohinoor Bazaar</h1>
                
                <div class="about-content">
                  <div class="store-info">
                    <p><span class="store-name">Kohinoor Bazaar <strong>Budapest</strong></span> has been welcoming its customers since 2011 at <span class="store-address">1085 Budapest, József krt. 23</span>, after which <span class="store-name">Kohinoor Bazaar <strong>Debrecen</strong></span> (<span class="store-address">4026 Debrecen Darabos utca 4</span>) opened in 2017, followed by <span class="store-name">Kohinoor Bazaar <strong>Szeged</strong></span> (<span class="store-address">6722 Szeged, Mérey utca 6B</span>) in 2021.</p>
                    
                    <p><span class="highlight">We welcome lovers of special cuisines with a constantly expanding selection in our stores.</span> Currently, the following cuisines are available:</p>
                    
                    <div class="cuisine-tags">
                      <span class="tag">Pakistani</span>
                      <span class="tag">Indian</span>
                      <span class="tag">Iranian</span>
                      <span class="tag">Arabic</span>
                      <span class="tag">South American</span>
                      <span class="tag">African</span>
                    </div>
                    
                    <p>If you would like to surprise your family or friends with a special lunch or dinner, followed by a chat over a delicious <span class="highlight">tea and a hookah</span>, then you have come to the right place. Here you will find everything you need.</p>
                    
                    <p>Come visit us!</p>
                    <a href="#" class="cta">Find Our Stores</a>
                  </div>
                  
                  <div class="mission">
                    <h2>A Friend in Trouble</h2>
                    <p>Our mission is to support those in need. We first launched our Needs for Life program, through which we reached many families and experienced how important it would be to help in other areas, as this is the only way we can truly help families in need get back on their feet.</p>
                    <p>If we manage to change the life of 1 person, it will be worth all the effort.</p>
                  
                  </div>

                  <h1>
                    Our currently running programs 
                  </h1>
                  <div class="mission">
                    <h2>Home Rescue</h2>
                    <p>Our mission is to support those in need. We first launched our Needs for Life program, through which we reached many families and experienced how important it would be to help in other areas, as this is the only way we can truly help families in need get back on their feet.</p>
                    <p>If we manage to change the life of 1 person, it will be worth all the effort.</p>
                   
                    <img src="{{asset('public/assets/home1.jpg')}}" alt="Our Community Programs" style="width: 100%; border-radius: 8px; margin-top: 15px;">
                  </div>
                  <div class="mission">
                    <h2>Clean city</h2>
                    <p>In South Asia, waste management systems are typically not developed. Because of this, the accumulated waste in cities and homes is a serious problem. As part of our Clean City program, we have placed waste collectors in households. We have organized their regular transportation using special waste collection trucks. This has successfully created jobs, improved the cleanliness of the area, and made life easier for households.</p>
                   
                    <img src="{{asset('public/assets/home2.jpg')}}" alt="Our Community Programs" style="width: 100%; border-radius: 8px; margin-top: 15px;">
                  </div>
                  <div class="mission">
                    <h2>Safe City</h2>
                    <p>In many places in South Asia, street lighting systems are not yet in place or are not properly maintained, which increases the level of crime in those areas. As part of our Safe City program, solar-powered street lights have been installed, which has greatly increased the safety of the area and made life easier for residents.</p>
                   
                    <img src="{{asset('public/assets/home3.jpg')}}" alt="Our Community Programs" style="width: 100%; border-radius: 8px; margin-top: 15px;">
                  </div>
                  <div class="mission">
                    <h2>Clean Water</h2>
                    <p>Unfortunately, in South Asia, it is still a problem that not all households have access to clean drinking water. This increases the risk of developing various diseases. Among others, Hepatitis A, cholera, salmonella. As part of our Clean Water program, we have established a water purification plant, from which clean water has become available to hundreds of families every day for free.</p>
                   
                    <img src="{{asset('public/assets/home4.jpg')}}" alt="Our Community Programs" style="width: 100%; border-radius: 8px; margin-top: 15px;">
                  </div>
                  <div class="mission">
                    <h2>Necessities for life</h2>
                    <p>As part of our Necessities for Life program, we distribute food packages and clothes to those in need.</p>
                   
                    <img src="{{asset('public/assets/home5.jpg')}}" alt="Our Community Programs" style="width: 100%; border-radius: 8px; margin-top: 15px;">
                  </div>
                </div>
              </section>
            </div>
@endsection
