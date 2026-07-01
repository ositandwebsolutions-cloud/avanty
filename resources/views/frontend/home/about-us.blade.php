<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>About Us - Avanty Capital</title>
      @include('frontend.home.css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aboutus.css') }}?v=1.4">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <!-- Background image moved to inline style using blade asset -->
    <div class="hero-bg-wrapper" style="background-image: url('{{ asset('assets/frontend/img/hero2.jpg') }}');">
          @include('frontend.home.header')

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    ABOUT US
                </div>
                
                <h1>
                    Built on Values.<br>
                    <span class="gold-text">Defined by Purpose.</span>
                </h1>
                
                <div class="hero-paragraphs">
                    <p>Avanty Capital is a strategic capital firm operating alongside its own family office interests and a trusted network of external family offices, institutional participants and strategic partners.</p>
                    <p>We deploy capital with conviction and execute with discipline across real estate, infrastructure, acquisitions and strategic transactions throughout Asia, the Middle East and Europe.</p>
                    <p>Our focus is on building enduring relationships, aligned outcomes and long term value across generations.</p>
                </div>
            </div>
        </main>
    </div>

    <section class="foundation-section">
        <div class="container foundation-grid">
            <div class="foundation-left animate-on-scroll">
                <div class="eyebrow">OUR FOUNDATION</div>
                <h2>We operate with the<br>mindset of owners and<br>the discipline of investors.</h2>
            </div>
            
            <div class="foundation-right">
                <div class="f-card animate-on-scroll delay-1">
                    <div class="f-line"></div>
                    <h3>Family Office Mindset</h3>
                    <p>We think in generations, act with stewardship and align with enduring objectives.</p>
                </div>
                
                <div class="f-card animate-on-scroll delay-2">
                    <div class="f-line"></div>
                    <h3>Trusted Relationships</h3>
                    <p>Deep relationships with family offices, institutional partners and operating leadership.</p>
                </div>
                
                <div class="f-card animate-on-scroll delay-3">
                    <div class="f-line"></div>
                    <h3>Execution Excellence</h3>
                    <p>We bring structure, rigour and accountability to every mandate we undertake.</p>
                </div>
                
                <div class="f-card animate-on-scroll delay-4">
                    <div class="f-line"></div>
                    <h3>Aligned Outcomes</h3>
                    <p>Our success is measured by the long term value we create alongside our partners.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="leadership-section">
        <div class="container">
            <div class="leadership-header animate-on-scroll">
                <!-- Updated Leadership Copy -->
                <div class="eyebrow">EXECUTIVE TEAM</div>
                <h2>The Team Behind AVANTY Capital</h2>
                <div class="header-line"></div>
                <p>AVANTY Capital brings together professionals with experience across international banking,<br>governance, private equity, capital markets and real estate finance.<br>Drawing on institutional expertise from Asia, the Middle East and Europe, our team combines disciplined execution,<br>commercial insight and long-term relationships to deliver complex cross-border transactions with confidence, integrity and precision.</p>
            </div>
            
            <div class="team-grid">
                <!-- Images are passed to JS via data-image to keep URLs out of JS -->
                <div class="team-card animate-on-scroll delay-1" data-member="tanaz" data-image="{{ asset('assets/frontend/img/tanaz.jpg') }}">
                    <div class="team-img-wrapper">
                        <img src="{{ asset('assets/frontend/img/tanaz.jpg') }}" alt="Tanaz Chowdhury" class="team-img">
                        <div class="team-gradient"></div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Tanaz Chowdhury</h3>
                        <p class="team-title">Founder / Principal</p>
                        <a href="#" class="bio-btn">
                            <span>Read Biography</span>
                            <span class="arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
                
                <div class="team-card animate-on-scroll delay-2" data-member="jenny" data-image="{{ asset('assets/frontend/img/lee.jpg') }}">
                    <div class="team-img-wrapper">
                        <img src="{{ asset('assets/frontend/img/lee.jpg') }}" alt="Jenny Won Lee" class="team-img">
                        <div class="team-gradient"></div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Jenny Won Lee</h3>
                        <p class="team-title">Head of Capital Markets</p>
                        <a href="#" class="bio-btn">
                            <span>Read Biography</span>
                            <span class="arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
                
                <div class="team-card animate-on-scroll delay-3" data-member="kai" data-image="{{ asset('assets/frontend/img/leuw.jpg') }}">
                    <div class="team-img-wrapper">
                        <img src="{{ asset('assets/frontend/img/leuw.jpg') }}" alt="Kai Yung Lau" class="team-img">
                        <div class="team-gradient"></div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Kai Yung Lau</h3>
                        <p class="team-title">Head of Operations</p>
                        <a href="#" class="bio-btn">
                            <span>Read Biography</span>
                            <span class="arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="stats-bar">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item animate-on-scroll delay-1">
                    <div class="stat-number">$800M+</div>
                    <div class="stat-text">Capital Origination</div>
                </div>
                
                <div class="stat-item animate-on-scroll delay-2">
                    <div class="stat-number">20+ Years</div>
                    <div class="stat-text">Family Office & Principal <span class="light">Mindset</span></div>
                </div>
                
                <div class="stat-item animate-on-scroll delay-3">
                    <div class="stat-number">Asia • Middle East • Europe</div>
                    <div class="stat-text">Cross Border <span class="light">Transactions</span></div>
                </div>
                
                <div class="stat-item animate-on-scroll delay-4">
                    <div class="stat-number">Focused on Execution</div>
                    <div class="stat-text"><span class="light">Disciplined • Trusted • Aligned</span></div>
                </div>
            </div>
        </div>
    </div>

      @include('frontend.home.footer')

    <div class="bio-overlay" id="bio-overlay"></div>
    <div class="bio-panel" id="bio-panel">
        <div class="bio-left">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Avanty Capital Logo" class="bio-logo-img">
            <div class="bio-image-wrapper-large">
                <img src="" alt="Leader Portrait" class="bio-image-large" id="bio-img-large">
            </div>
        </div>
        <div class="bio-right">
            <button class="bio-close" id="bio-close" aria-label="Close biography">&times;</button>
            <h2 class="bio-details-name" id="bio-details-name">Name</h2>
            <h3 class="bio-details-title" id="bio-details-title">Title</h3>
            
            <p class="bio-intro-text" id="bio-intro-text">Introduction</p>
            
            <div class="bio-dynamic-sections" id="bio-dynamic-sections"></div>
        </div>
    </div>

    <!-- Separated JS Link -->
    <script src="{{ asset('assets/frontend/js/aboutus.js') }}?v=1.4"></script>
</body>
</html>