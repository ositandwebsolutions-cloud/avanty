<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Avanty Capital | Empowering Legacy | Singapore Strategic Capital</title>
    <meta name="description" content="Avanty Capital is a Singapore-based firm specializing in capital origination, participation, and deployment across real estate, infrastructure, and strategic transactions.">
    
    @include('frontend.home.css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <div class="page-wrapper" style="background-image: url('{{ asset('assets/frontend/img/hero1.jpg') }}');">
        
    @include('frontend.home.header')

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    SINGAPORE <span class="dot">•</span> CAPITAL ORIGINATION
                </div>
                <h1>
                    Built on Family Office Values.<br>
                    <span class="gold-text">Driven by Execution.</span>
                </h1>
                <div class="hero-paragraphs">
                    <p>Avanty Capital operates alongside its own family office interests and a trusted network of external family offices, institutional participants, high net worth individuals and corporate stakeholders.</p>
                    <p>We originate, participate in and deploy capital across real estate, infrastructure, acquisitions and strategic transactions throughout Asia, the Middle East and Europe.</p>
                    <p>Our focus is on aligning capital, stakeholders and execution through trusted relationships, disciplined transaction management and long term partnerships.</p>
                </div>
                <div class="btn-group">
                    <a href="{{ url('/about-us') }}" class="btn btn-primary transition-link">LEARN MORE <span>&rarr;</span></a>
                </div>
            </div>
        </main>

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
    </div>

     @include('frontend.home.footer')

    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
</body>
</html>