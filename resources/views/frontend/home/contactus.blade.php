<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contact Us - Avanty Capital</title>
    @include('frontend.home.css')
    
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/contactus.css') }}?v=1.4">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <div class="hero-bg-wrapper" style="background-image: url('{{ asset('assets/frontend/img/hero6.jpg') }}');">
        @include('frontend.home.header')

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    CONTACT US
                </div>
                
                <h1>
                    Get in Touch<br>
                    <span class="gold-text" style="font-size: 0.55em; line-height: 1.3; display: block; margin-top: 15px;">Capital Origination. Strategic Execution.</span>
                </h1>
                
                <div class="hero-paragraphs">
                    <p>AVANTY Capital is a private capital origination platform specialising in institutional and complex real estate transactions. We work with borrowers, capital providers and professional advisers to originate, structure and coordinate carefully selected opportunities.</p>
                    <p>If your enquiry aligns with our areas of expertise, we welcome you to contact our team.</p>
                </div>
            </div>
        </main>
    </div>

    <section class="contact-section">
        <div class="container">
            
            <div class="contact-grid">
                
                <div class="contact-info">
                    <div class="eyebrow">
                        GET IN TOUCH
                    </div>
                    <p class="intro-p">Our team works across Asia, the Middle East and Europe, coordinating capital solutions alongside trusted funding partners and professional advisers.</p>
                    
                    <div class="info-list">
                        <div class="info-item">
                            <div class="info-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="info-text">
                                <strong>ADDRESS</strong>
                                <span>AVANTY Capital<br>Singapore Business Federation Center<br>160 Robinson Road, Office 14-04<br>Singapore 068914</span>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="info-text">
                                <strong>PHONE</strong>
                                <span>+65 69298171</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-col">
                    <div class="eyebrow">
                        SEND US A MESSAGE
                    </div>
                    <form class="contact-form" onsubmit="event.preventDefault();">
                        <div class="form-row">
                            <input type="text" placeholder="First Name" required>
                            <input type="text" placeholder="Last Name" required>
                        </div>
                        <input type="email" placeholder="Email Address" required>
                        <input type="text" placeholder="Company / Organization">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn-submit">
                            SEND MESSAGE <span>&rarr;</span>
                        </button>
                    </form>
                </div>

            </div>

            <div class="commitment-banner">
                <div class="commit-left">
                    <h2>We value relationships<br>built on trust, discretion<br>and shared ambition.</h2>
                </div>
                <div class="commit-right">
                    <p>We take the time to understand what matters most and bring our capital, network and execution to it.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="stats-bar">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">$800M+</div>
                    <div class="stat-text">
                        Capital Origination 
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">20+ Years</div>
                    <div class="stat-text">
                        Family Office & Principal
                        <span class="light">Mindset</span>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">Asia • Middle East • Europe</div>
                    <div class="stat-text">
                        Cross Border
                        <span class="light">Transactions</span>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">Focused on Execution</div>
                    <div class="stat-text">
                        <span class="light">Disciplined • Trusted • Aligned</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.home.footer')

    <script src="{{ asset('assets/frontend/js/script.js') }}?v=1.2"></script>
</body>
</html>