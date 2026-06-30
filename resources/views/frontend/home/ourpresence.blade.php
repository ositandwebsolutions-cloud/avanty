<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Our Presence - Avanty Capital</title>
    @include('frontend.home.css')
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ourpresence.css') }}">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <!-- Background image moved here from CSS to keep image links in Blade -->
    <div class="hero-bg-wrapper" style="background-image: url('{{ asset('img/hero4.jpg') }}');">
        <header class="header">
            <div class="container nav-container">
                <a href="{{ url('/') }}" class="logo transition-link">
                    <img src="{{ asset('img/logo.png') }}" alt="Avanty Capital Logo">
                </a>
                
                <div class="menu-toggle" id="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="nav-links" id="nav-links">
                    <a href="{{ url('/') }}" class="transition-link">HOME</a>
                    <a href="{{ url('about-us') }}" class="transition-link">ABOUT US</a>
                    <a href="{{ url('whatwedo') }}" class="transition-link">CAPABILITIES</a>
                    <a href="{{ url('areaoffocus') }}" class="transition-link">AREAS OF FOCUS</a>
                    <a href="{{ url('ourpresence') }}" class="active transition-link">OUR PRESENCE</a>
                    <a href="{{ url('ourapproach') }}" class="transition-link">OUR APPROACH</a>
                    <a href="{{ url('contactus') }}" class="transition-link">CONTACT US</a>
                </nav>
            </div>
        </header>

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    OUR PRESENCE
                </div>
                
                <h1>
                    Strategic<br>
                    <span class="gold-text">Foundation.</span>
                </h1>
                
                <div class="hero-paragraphs">
                    <p>Singapore serves as the strategic foundation of Avanty Capital’s operations and has played an important role in our long term outlook as a business and family.</p>
                    <p>With family roots extending back almost two decades in Singapore, our connection to the jurisdiction is built upon long standing relationships, familiarity with the local business environment and a deep appreciation for Singapore’s role as a leading international financial and commercial centre.</p>
                    <p>This long term presence provides a perspective that extends beyond simply establishing an office. It reflects an enduring commitment to one of the world’s most respected business jurisdictions.</p>
                </div>
            </div>
        </main>
    </div>

    <section class="sg-content-section">
        <div class="container">
            
            <div class="sg-grid">
                <div class="sg-intro">
                    <h2>A strategic base<br>for regional impact.</h2>
                    <p>Singapore offers an ideal base from which to build relationships, engage stakeholders and lead cross border activity.</p>
                </div>
                
                <div class="sg-card">
                    <div class="sg-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M4 21v-8"></path>
                            <path d="M8 21v-8"></path>
                            <path d="M12 21v-8"></path>
                            <path d="M2 13h14"></path>
                            <path d="M2 9h14"></path>
                            <path d="M4 13V9"></path>
                            <path d="M8 13V9"></path>
                            <path d="M12 13V9"></path>
                            <circle cx="18" cy="11" r="3"></circle>
                            <path d="M18 8v6"></path>
                            <path d="M15 11h6"></path>
                        </svg>
                    </div>
                    <h3>Strategic Location</h3>
                    <p>Positioned at the centre of Asia Pacific, Singapore provides direct access to key markets across Asia, the Middle East and Europe.</p>
                    <p>Its connectivity to global markets enables Avanty Capital to maintain relationships with family offices, institutional participants, developers and corporate stakeholders across multiple jurisdictions.</p>
                </div>
                
                <div class="sg-card">
                    <div class="sg-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Global Capital Ecosystem</h3>
                    <p>Singapore has established itself as one of the world’s leading centres for international capital, entrepreneurship and private wealth.</p>
                    <p>The jurisdiction continues to attract private capital groups seeking a stable and sophisticated environment in which to operate.</p>
                </div>
                
                <div class="sg-card">
                    <div class="sg-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <h3>Governance & Stability</h3>
                    <p>Singapore’s reputation for transparency, legal certainty and commercial stability has contributed significantly to its position as a global business hub.</p>
                    <p>Strong institutions and a respected legal framework provide confidence for businesses and investors.</p>
                </div>
                
                <div class="sg-card">
                    <div class="sg-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        </svg>
                    </div>
                    <h3>International Connectivity</h3>
                    <p>Successful transactions increasingly require coordination across multiple jurisdictions and stakeholder groups.</p>
                    <p>Singapore’s international connectivity enables us to engage effectively with counterparties while maintaining a practical focus on execution and delivery.</p>
                </div>
            </div>

            <div class="sg-banner">
                <div class="sg-banner-left">
                    <h2>Long Term<br>Commitment.</h2>
                </div>
                <div class="sg-banner-right">
                    <p>Singapore is not simply where Avanty Capital is headquartered. It represents a jurisdiction that has formed part of our family’s journey for almost two decades and continues to play an important role in our long term vision.</p>
                    <p>Our presence reflects a commitment to building enduring relationships, supporting cross border transactions and participating within one of the world’s most dynamic business and capital ecosystems.</p>
                    <p>As Avanty Capital continues to grow, Singapore will remain the strategic foundation from which we originate, participate in and deploy capital across real estate, infrastructure, acquisitions and strategic transactions.</p>
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
                    <div class="stat-number">20+ Years</div>
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

    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
</body>
</html>