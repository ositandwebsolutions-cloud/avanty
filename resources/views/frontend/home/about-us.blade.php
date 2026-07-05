<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>About Us - Avanty Capital</title>
      @include('frontend.home.css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aboutus.css') }}?v=1.9">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <div class="hero-bg-wrapper" style="background-image: url('{{ asset('assets/frontend/img/about.jpg') }}');">
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
                <h2>Building today with generations in mind.</h2>
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
                <h2>Leadership</h2>
                <div class="eyebrow">A SHARED VISION</div>
                <div class="header-line"></div>
                <p>Our team brings together experience across private banking, private credit, private equity, investment management, international governance and compliance, fintech and real estate-backed finance.<br><br>With perspectives shaped across Asia, the Middle East and Europe, this collective experience supports a disciplined approach to capital, risk, investment and complex cross-border transactions.</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card animate-on-scroll delay-1" data-member="tanaz">
                    <div class="team-info">
                        <h3 class="team-name">Tanaz Choudhury</h3>
                        <p class="team-title">Founder / Principal</p>
                        <a href="#" class="bio-btn">
                            <span>Read Biography</span>
                            <span class="arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
                
                <div class="team-card animate-on-scroll delay-2" data-member="jenny">
                    <div class="team-info">
                        <h3 class="team-name">Jenny Won Lee</h3>
                        <p class="team-title">Head of Capital Markets</p>
                        <a href="#" class="bio-btn">
                            <span>Read Biography</span>
                            <span class="arrow">&rarr;</span>
                        </a>
                    </div>
                </div>
                
                <div class="team-card animate-on-scroll delay-3" data-member="kai">
                    <div class="team-info">
                        <h3 class="team-name">Kai Leuw</h3>
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
        </div>
        <div class="bio-right">
            <button class="bio-close" id="bio-close" aria-label="Close biography">&times;</button>
            <h2 class="bio-details-name" id="bio-details-name">Name</h2>
            <h3 class="bio-details-title" id="bio-details-title">Title</h3>
            
            <p class="bio-intro-text" id="bio-intro-text">Introduction</p>
            
            <div class="bio-dynamic-sections" id="bio-dynamic-sections"></div>
        </div>
    </div>

    <script src="{{ asset('assets/frontend/js/aboutus.js') }}?v=1.9"></script>
</body>
</html>