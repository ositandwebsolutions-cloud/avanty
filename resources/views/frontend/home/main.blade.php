<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Avanty Capital - Empowering Legacy</title>
    <meta name="description" content="Avanty Capital operates alongside its own family office interests and a trusted network of external family offices, institutional participants, high net worth individuals and corporate stakeholders.">
    @include('frontend.home.css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}?v=1.8">
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

     @include('frontend.home.status')   

     @include('frontend.home.footer')

    <script src="{{ asset('assets/frontend/js/script.js') }}?v=1.5"></script>
</body>
</html>