<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>About Us - Avanty Capital</title>
      @include('frontend.home.css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aboutus.css') }}?v=1.9">
    
    <style>
        .f-card::before, 
        .f-card::after {
            display: none !important;
            background: none !important;
        }
        .f-card:hover, 
        .f-card:active, 
        .f-card:focus {
            background-color: transparent !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <div class="hero-bg-wrapper" style="background-image: url('{{ !empty($settings->hero_image) ? asset('storage/' . $settings->hero_image) : asset('assets/frontend/img/about.png') }}');">
        @include('frontend.home.header')

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    {{ $settings->hero_eyebrow ?? 'ABOUT US' }}
                </div>
                
                <h1>
                    {{ $settings->hero_title_line1 ?? 'Built on Values.' }}<br>
                    <span class="gold-text">{{ $settings->hero_title_line2_gold ?? 'Defined by Purpose.' }}</span>
                </h1>
                
                <div class="hero-paragraphs">
                    @if(!empty($settings->hero_paragraphs) && is_array($settings->hero_paragraphs))
                        @foreach($settings->hero_paragraphs as $para)
                            <p>{{ is_array($para) ? ($para['paragraph'] ?? '') : $para }}</p>
                        @endforeach
                    @else
                        <p>Avanty Capital is a strategic capital firm operating alongside its own family office interests and a trusted network of external family offices, institutional participants and strategic partners.</p>
                        <p>We deploy capital with conviction and execute with discipline across real estate, infrastructure, acquisitions and strategic transactions throughout Asia, the Middle East and Europe.</p>
                        <p>Our focus is on building enduring relationships, aligned outcomes and long term value across generations.</p>
                    @endif
                </div>
            </div>
        </main>
    </div>

    <section class="foundation-section">
        <div class="container foundation-grid">
            <div class="foundation-left animate-on-scroll">
                <div class="eyebrow">{{ $settings->foundation_eyebrow ?? 'OUR FOUNDATION' }}</div>
                <h2>{{ $settings->foundation_title ?? 'Building today with generations in mind.' }}</h2>
            </div>
            
            <div class="foundation-right">
                @if(!empty($settings->foundation_cards) && is_array($settings->foundation_cards))
                    @foreach($settings->foundation_cards as $index => $card)
                    <div class="f-card animate-on-scroll delay-{{ ($index % 4) + 1 }}">
                        <div class="f-line"></div>
                        <h3>{{ $card['title'] ?? '' }}</h3>
                        <p>{{ $card['description'] ?? '' }}</p>
                    </div>
                    @endforeach
                @else
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
                @endif
            </div>
        </div>
    </section>

    <section class="leadership-section">
        <div class="container">
            <div class="leadership-header animate-on-scroll">
                <h2>{{ $settings->leadership_title ?? 'Leadership' }}</h2>
                <div class="eyebrow">{{ $settings->leadership_eyebrow ?? 'A SHARED VISION' }}</div>
                <div class="header-line"></div>
                @if(!empty($settings->leadership_description))
                    <p>{!! nl2br(e($settings->leadership_description)) !!}</p>
                @else
                    <p>Our team brings together experience across private banking, private credit, private equity, investment management, international governance and compliance, fintech and real estate-backed finance.<br><br>With perspectives shaped across Asia, the Middle East and Europe, this collective experience supports a disciplined approach to capital, risk, investment and complex cross-border transactions.</p>
                @endif
            </div>
            
            <div class="team-grid">
                @if(isset($teamMembers) && $teamMembers->count() > 0)
                    @foreach($teamMembers as $index => $member)
                    <div class="team-card animate-on-scroll delay-{{ ($index % 3) + 1 }}" data-member="{{ $member->slug }}">
                        <div class="team-info">
                            <h3 class="team-name">{{ $member->name }}</h3>
                            <p class="team-title">{{ $member->title }}</p>
                            <a href="#" class="bio-btn">
                                <span>Read Biography</span>
                                <span class="arrow">&rarr;</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="team-card animate-on-scroll delay-1" data-member="tanaz">
                        <div class="team-info">
                            <h3 class="team-name">Tanaz Choudhury</h3>
                            <p class="team-title">Principal</p>
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
                @endif
            </div>
        </div>
    </section>

    @include('frontend.home.status')

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

    <script>
        window.dynamicBioData = @json($jsBioData ?? []);
    </script>
    <script src="{{ asset('assets/frontend/js/aboutus.js') }}?v=2"></script>
</body>
</html>