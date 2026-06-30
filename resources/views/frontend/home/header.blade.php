<header class="header">
    <div class="container nav-container">
        <a href="{{ url('/') }}" class="logo transition-link">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Avanty Capital Logo">
        </a>
        
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="nav-links" id="nav-links">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }} transition-link">HOME</a>
            <a href="{{ url('/about-us') }}" class="{{ request()->is('about-us') ? 'active' : '' }} transition-link">ABOUT US</a>
            <a href="{{ url('/capabilities') }}" class="{{ request()->is('capabilities') ? 'active' : '' }} transition-link">CAPABILITIES</a>
            <a href="{{ url('/areaoffocus') }}" class="{{ request()->is('areaoffocus') ? 'active' : '' }} transition-link">AREAS OF FOCUS</a>
            <a href="{{ url('/ourpresence') }}" class="{{ request()->is('ourpresence') ? 'active' : '' }} transition-link">OUR PRESENCE</a>
            <a href="{{ url('/ourapproach') }}" class="{{ request()->is('ourapproach') ? 'active' : '' }} transition-link">OUR APPROACH</a>
            <a href="{{ url('/contactus') }}" class="{{ request()->is('contactus') ? 'active' : '' }} transition-link">CONTACT US</a>
        </nav>
    </div>
</header>