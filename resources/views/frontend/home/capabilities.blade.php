<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>OUR CAPABILITIES - Avanty Capital</title>
    
    @include('frontend.home.css')
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/capabilities.css') }}?v=1.8">
</head>
<body>

    <div id="page-transition-overlay" class="page-transition-overlay"></div>

    <!-- The background image is handled inline using the asset() helper -->
    <div class="hero-bg-wrapper" style="background-image: url('{{ asset('assets/frontend/img/hero111.jpeg') }}');">
        @include('frontend.home.header')

        <main class="container hero-main">
            <div class="hero-text-box">
                <div class="eyebrow">
                    CAPABILITIES
                </div>
                
                <h1>
                    Deploying Capital Across.<br>
                    <span class="gold-text">the Full Transaction Lifecycle.</span>
                </h1>
                
                <div class="hero-paragraphs">
                    <p>Avanty Capital operates across the full capital lifecycle, originating, participating in and deploying capital across real estate, infrastructure, acquisition and corporate transactions.</p>
                    <p>Working alongside our own family office interests, as well as external family offices, institutional participants, high net worth individuals, developers and corporate groups, we bring capital, stakeholders and projects together through disciplined execution and rigorous transaction management.</p>
                    <p>Our role is defined by the requirements of each transaction and spans structuring, stakeholder management, capital participation and execution.</p>
                </div>
            </div>
        </main>
    </div>

    <section class="capabilities-section">
        <div class="container">
            <div class="cap-eyebrow">
                <div class="line"></div>
                <span>OUR CAPABILITIES</span>
            </div>
            
            <div class="cap-grid">
                
                <div class="cap-card">
                    <div class="cap-num">01</div>
                    <div class="cap-divider"></div>
                    <h3>Capital Origination</h3>
                    <p>We support the identification, structuring and coordination of capital requirements across a range of transaction types and sectors.</p>
                    <p>Our focus is on understanding project requirements, stakeholder objectives and capital considerations in order to facilitate efficient transaction execution.</p>
                </div>
                
                <div class="cap-card">
                    <div class="cap-num">02</div>
                    <div class="cap-divider"></div>
                    <h3>Capital Participation</h3>
                    <p>Through our own family office interests and broader network of capital relationships, we work alongside capital partners, institutional participants and private investors across a range of transactions and projects.</p>
                    <p>Our experience provides a practical understanding of capital provider requirements, transaction dynamics and execution considerations.</p>
                </div>
                
                <div class="cap-card">
                    <div class="cap-num">03</div>
                    <div class="cap-divider"></div>
                    <h3>Capital Deployment</h3>
                    <p>We support the deployment of capital into underlying projects, acquisitions, infrastructure developments and strategic initiatives through disciplined transaction management and stakeholder coordination.</p>
                    <p>Our objective is to assist in aligning project requirements with appropriate capital structures and execution frameworks.</p>
                </div>
                
                <div class="cap-card">
                    <div class="cap-num">04</div>
                    <div class="cap-divider"></div>
                    <h3>Real Estate</h3>
                    <p>We support transactions involving residential, commercial, mixed use and development assets across multiple jurisdictions.</p>
                    <p>This includes acquisition transactions, development projects, refinancing initiatives and broader strategic capital requirements relating to real estate assets.</p>
                </div>
                
                <div class="cap-card">
                    <div class="cap-num">05</div>
                    <div class="cap-divider"></div>
                    <h3>Infrastructure & EPC</h3>
                    <p>We support infrastructure sponsors, developers, contractors and EPC participants involved in the delivery of complex projects.</p>
                    <p>Our experience includes projects requiring significant stakeholder coordination, commercial structuring and capital deployment considerations.</p>
                </div>

                <div class="cap-card">
                    <div class="cap-num">06</div>
                    <div class="cap-divider"></div>
                    <h3>Corporate Transactions</h3>
                    <p>We work alongside business owners, entrepreneurs and corporate stakeholders involved in acquisitions, growth initiatives, refinancing exercises and strategic corporate transactions.</p>
                    <p>Our role focuses on facilitating execution, stakeholder alignment and commercial coordination throughout the transaction lifecycle.</p>
                </div>

                <div class="cap-card">
                    <div class="cap-num">07</div>
                    <div class="cap-divider"></div>
                    <h3>Cross Border Transactions</h3>
                    <p>Operating from Singapore and supporting clients across Asia, the Middle East and Europe, Avanty Capital understands the complexities associated with cross border transactions, multiple stakeholder environments and international capital participation.</p>
                    <p>Our global network enables us to support clients operating across jurisdictions while maintaining a practical focus on execution and delivery.</p>
                </div>

            </div>

            <div class="commitment-banner">
                <div class="commit-left">
                    <div class="short-gold-line"></div>
                    <h2>Capital Origination.<br>Capital Participation.<br>Capital Deployment.</h2>
                </div>
                <div class="commit-right">
                    <p>At its core, Avanty Capital remains focused on three fundamental principles: Capital Origination, Capital Participation, and Capital Deployment.</p>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.home.status')
    
    @include('frontend.home.footer')

    <!-- Custom JS -->
    <script src="{{ asset('assets/frontend/js/script.js') }}?v=1.5"></script>
</body>
</html>