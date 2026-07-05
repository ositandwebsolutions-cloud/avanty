<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Areas of Focus - Avanty Capital</title>
    
    @include('frontend.home.css')
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/areaoffocus.css') }}?v=1.8">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <!-- The background image is now handled here via an inline style using asset() helper -->
    <div class="hero-bg-wrapper" style="background-image: url('{{ asset('assets/frontend/img/hero3.jpg') }}');">
        @include('frontend.home.header')

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    AREAS OF FOCUS
                </div>
                
                <h1>
                    Deploying Capital Across <br>
                    <span class="gold-text">Real Estate, Infrastructure and Strategic Transactions</span>
                </h1>
                
                <div class="hero-paragraphs">
                    <p>Avanty Capital operates across sectors where capital, execution and stakeholder alignment are critical to successful outcomes.</p>
                    <p>Drawing upon our own family office experience and broader relationships with external family offices, institutional participants, high net worth individuals, developers, infrastructure sponsors and corporate groups, we originate, participate in and deploy capital across a range of transaction types and sectors.</p>
                    <p>Our focus remains on aligning capital with execution and driving each transaction through to delivery.</p>
                </div>
            </div>
        </main>
    </div>

    <section class="areas-section">
        <div class="container">
            <div class="areas-eyebrow">
                <div class="line"></div>
                <span>OUR AREAS OF FOCUS</span>
            </div>
            
            <div class="areas-grid">
                
                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V7l8-4 8 4v14"></path>
                            <path d="M9 21v-4h6v4"></path>
                            <path d="M8 11h.01"></path>
                            <path d="M12 11h.01"></path>
                            <path d="M16 11h.01"></path>
                            <path d="M8 15h.01"></path>
                            <path d="M16 15h.01"></path>
                        </svg>
                    </div>
                    <h3>Real Estate</h3>
                    <p>Real estate forms a core area of focus for Avanty Capital.</p>
                    <p>We transact across residential, commercial, mixed use and development assets in multiple jurisdictions. Our activity spans acquisitions, development projects, refinancing initiatives, capital structuring and broader strategic transactions.</p>
                    <p>We partner with developers, family offices, institutional participants and private capital groups on transactions ranging from individual assets to large scale development and regeneration projects.</p>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 22V6"></path>
                            <path d="M20 22V6"></path>
                            <path d="M4 14c3-3 8-5 16-5"></path>
                            <path d="M4 18c3-3 8-5 16-5"></path>
                            <path d="M4 10h16"></path>
                            <path d="M6 10L4 6"></path>
                            <path d="M18 10l2-4"></path>
                            <path d="M1 22h22"></path>
                        </svg>
                    </div>
                    <h3>Infrastructure</h3>
                    <p>Infrastructure projects require significant capital commitment, stakeholder coordination and long term execution planning.</p>
                    <p>Avanty Capital backs sponsors, developers, capital participants and project stakeholders in infrastructure related transactions and initiatives.</p>
                    <p>Our focus spans capital commitment, stakeholder alignment and transaction execution across the infrastructure lifecycle.</p>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
                            <path d="M17 18h1"></path>
                            <path d="M12 18h1"></path>
                            <path d="M7 18h1"></path>
                        </svg>
                    </div>
                    <h3>EPC & Project Delivery</h3>
                    <p>Engineering, Procurement and Construction projects often involve multiple stakeholders, substantial capital requirements and complex delivery frameworks.</p>
                    <p>We partner project sponsors, contractors, consultants and capital participants on EPC projects requiring commercial structuring, capital participation and execution.</p>
                    <p>Our experience includes infrastructure, development and construction projects where disciplined execution and stakeholder management are essential.</p>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 3v18h18"></path>
                            <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"></path>
                            <path d="M14 8h5v5"></path>
                        </svg>
                    </div>
                    <h3>Acquisitions & Strategic Transactions</h3>
                    <p>We lead acquisitions, strategic transactions, corporate growth initiatives and expansion projects.</p>
                    <p>Successful acquisitions require effective planning, stakeholder alignment and disciplined transaction execution. We drive these processes and manage stakeholders throughout the transaction lifecycle.</p>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="8" y="8" width="8" height="8" rx="1"></rect>
                            <path d="M12 2v2"></path>
                            <path d="M12 20v2"></path>
                            <path d="M5 12H2"></path>
                            <path d="M22 12h-3"></path>
                            <path d="M16 4h2a2 2 0 0 1 2 2v2"></path>
                            <path d="M20 16v2a2 2 0 0 1-2 2h-2"></path>
                            <path d="M8 20H6a2 2 0 0 1-2-2v-2"></path>
                            <path d="M4 8V6a2 2 0 0 1 2-2h2"></path>
                            <path d="M10 5L8 7"></path>
                            <path d="M14 5l2 2"></path>
                            <path d="M5 10l2-2"></path>
                            <path d="M5 14l2 2"></path>
                            <path d="M10 19l-2-2"></path>
                            <path d="M14 19l2-2"></path>
                            <path d="M19 14l-2 2"></path>
                            <path d="M19 10l-2-2"></path>
                        </svg>
                    </div>
                    <h3>Family Office & Private Capital</h3>
                    <p>Avanty Capital operates alongside its own family office interests while working collaboratively with external family offices, institutional participants, high net worth individuals and private capital groups.</p>
                    <p>This provides a practical understanding of capital allocation, transaction evaluation and long term value creation from both the capital provider and project sponsor perspective.</p>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h3>Corporate Transactions</h3>
                    <p>We partner business owners, entrepreneurs, corporate groups and strategic stakeholders on refinancing initiatives, growth strategies and corporate transactions.</p>
                    <p>Our focus remains on capital commitment, stakeholder management and transaction execution, with a practical and commercially focused approach.</p>
                </div>

                <div class="area-card">
                    <div class="area-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <h3>Cross Border Transactions</h3>
                    <p>Operating from Singapore and active across Asia, the Middle East and Europe, Avanty Capital understands the complexities of international transactions and cross border capital participation.</p>
                    <p>Our experience spans transactions across multiple jurisdictions, legal frameworks and commercial environments.</p>
                    <p>This international perspective enables us to lead transactions requiring coordination between capital providers, sponsors, advisers and project participants across different regions.</p>
                </div>

            </div>

            <div class="commitment-banner">
                <div class="commit-left">
                    <div class="short-gold-line"></div>
                    <h2>Capital Origination.<br>Capital Participation.<br>Capital Deployment.</h2>
                </div>
                <div class="commit-right">
                    <p>Across every sector in which we operate, our focus remains consistent.</p>
                    <p>We originate capital, participate alongside capital partners and deploy capital into real estate, infrastructure, acquisitions and strategic transactions.</p>
                    <p>These principles form the foundation of Avanty Capital and underpin our approach to disciplined execution, stakeholder alignment and long term value creation.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="stats-bar">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">$800M+</div>
                    <div class="stat-text">Capital Origination</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">Strategy Compounded</div>
                    <div class="stat-text">Family Office & Principal <span class="light">Mindset</span></div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">Asia • Middle East • Europe</div>
                    <div class="stat-text">Cross Border <span class="light">Transactions</span></div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">Focused on Execution</div>
                    <div class="stat-text"><span class="light">Disciplined • Trusted • Aligned</span></div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.home.footer')

    <!-- Custom JS -->
    <script src="{{ asset('assets/frontend/js/script.js') }}?v=1.5"></script>
</body>
</html>