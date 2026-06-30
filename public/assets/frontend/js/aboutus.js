document.addEventListener("DOMContentLoaded", () => {
    // Page Transition Overlay
    const overlay = document.getElementById("page-transition-overlay");
    setTimeout(() => { overlay.classList.add("hidden"); }, 50);
    
    document.querySelectorAll('.transition-link').forEach(link => {
        link.addEventListener('click', function(e) {
            if (e.ctrlKey || e.metaKey || this.target === "_blank") return;
            const href = this.getAttribute('href');
            if(href && href !== '#' && !href.startsWith('#')) {
                e.preventDefault();
                overlay.classList.remove("hidden");
                setTimeout(() => { window.location.href = href; }, 400); 
            }
        });
    });

    // Mobile Menu Toggle
    const menuToggle = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('nav-active');
            menuToggle.classList.toggle('toggle-active');
        });
    }

    // Sticky Header Scroll Effect
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Intersection Observer for scroll animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        observer.observe(element);
    });

    // --- BIOGRAPHY SLIDE-IN LOGIC ---
    
    // SVG Icons Map
    const icons = {
        edu: `<svg viewBox="0 0 24 24"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>`,
        briefcase: `<svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>`,
        chart: `<svg viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>`,
        person: `<svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>`,
        bank: `<svg viewBox="0 0 24 24"><path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/></svg>`
    };

    // Database of Team Bios (Images are purposefully omitted here and passed dynamically via data-image from HTML)
    const bioData = {
        "anna": {
            name: "Ms. Anna Young",
            title: "Portfolio Manager",
            intro: "Ms. Anna Young is Portfolio Manager at AVANTY Capital, supporting the firm's portfolio oversight and transaction management across its real estate and private capital activities. She works closely with the leadership team in monitoring portfolio performance, commercial pricing, asset strategy and transaction progression across multiple jurisdictions.",
            sections: [
                { icon: "edu", title: "EDUCATION", content: "Graduated from the National University of Singapore with a degree in Journalism and Communications." },
                { icon: "briefcase", title: "PROFESSIONAL BACKGROUND", content: "Anna began her career through the graduate programme at Ernst & Young Singapore, where she developed experience in financial reporting, commercial advisory and corporate operations, building a strong foundation in analytical thinking and client engagement." },
                { icon: "chart", title: "EXPERIENCE AT AVANTY CAPITAL", content: "Following her time at EY, Anna joined AVANTY Capital, where she has become an integral member of the firm's portfolio management function. Her responsibilities include overseeing transaction workflows, monitoring portfolio performance, reviewing commercial pricing, supporting asset restructuring initiatives and maintaining oversight of real estate backed opportunities across Europe and Central Asia. She also monitors market movements and pricing trends, contributing to the firm's broader portfolio review process." },
                { icon: "person", title: "PERSONAL INTERESTS", content: "Outside of her professional responsibilities, Anna enjoys spending time with her family and is recently engaged. She has a passion for reading, travelling and beach surfing, valuing the balance these pursuits bring to both her personal and professional life." }
            ]
        },
        "jenny": {
            name: "Jenny Won Lee",
            title: "Head of Capital Markets",
            intro: "Jenny Won Lee is Head of Capital Markets at AVANTY Capital, supporting commercial pricing, capital market strategy and transaction structuring across the firm's private capital activities. She works closely with the leadership team on commercial pricing, capital structures, debt facilities and market analysis, supporting the execution of cross-border transactions and capital solutions.",
            sections: [
                { icon: "edu", title: "EDUCATION", content: "Graduated from the University of Seoul with a degree in Mathematics." },
                { icon: "briefcase", title: "PROFESSIONAL BACKGROUND", content: "Jenny graduated from the University of Seoul with a degree in Mathematics before beginning her career in Hong Kong with Affinity Equity Partners, where she gained experience across private equity markets, investment analysis and transaction execution. Following her relocation to Singapore she joined AVANTY Capital." },
                { icon: "chart", title: "EXPERIENCE AT AVANTY CAPITAL", content: "She works closely with the leadership team on commercial pricing, capital structures, debt facilities and market analysis, supporting the execution of cross border transactions and capital solutions." },
                { icon: "person", title: "PERSONAL INTERESTS", content: "Outside of her professional responsibilities, Jenny enjoys spending time with her family and daughters, together with sewing, knitting and travelling." }
            ]
        },
        "kai": {
            name: "Ms. Kai Laui",
            title: "Head of Operations",
            intro: "Ms. Kai Yung Lau is Head of Operations at AVANTY Capital, where she oversees the firm's internal management, commercial processes and organisational framework. She plays an integral role in supporting the delivery of complex transactions while ensuring the firm's operational standards and governance remain aligned with its long term strategic objectives.",
            sections: [
                { icon: "edu", title: "EDUCATION", content: "Graduated from Singapore Management University with a degree in Economics." },
                { icon: "briefcase", title: "PROFESSIONAL BACKGROUND", content: "Kai began her career with Ernst & Young Singapore, joining the firm's Junior Leadership Programme, where she developed a strong foundation in financial analysis, corporate advisory, commercial operations and strategic problem solving.<br><br>Kai subsequently relocated to Kuala Lumpur to join PETRONAS as a Trading Sector Analyst, where she spent several years developing expertise in market analysis, commercial strategy and international trade within one of Asia's leading energy companies. Her experience further strengthened her commercial judgement, analytical capability and understanding of global markets.<br><br>Returning to Singapore, Kai joined a respected private investment office, where she specialised in private capital, portfolio management and investment structuring. Working alongside senior professionals, she contributed to complex transactions through financial analysis, strategic planning, risk assessment and stakeholder engagement." },
                { icon: "chart", title: "ROLE AT AVANTY CAPITAL", content: "Today, Kai is responsible for AVANTY Capital's operational management and internal governance. Working alongside private equity firms, family offices, structured debt providers and professional advisers, she supports the firm's activities through disciplined planning, organisational oversight and the effective management of complex commercial matters." },
                { icon: "person", title: "PERSONAL INTERESTS", content: "Outside of her professional responsibilities, Kai enjoys travelling, maintaining an active lifestyle and spending time with family and friends. A former varsity lacrosse player, she continues to enjoy sport and values the discipline, resilience and teamwork it has instilled throughout both her personal and professional life." }
            ]
        },
        "tanaz": {
            name: "Tanaz Choudhury",
            title: "Founder & Principal",
            intro: "Tanaz Choudhury is the Founder and Principal of AVANTY Capital, leading the firm's strategic direction, governance and institutional relationships. Her career spans international banking, governance and private capital, bringing an institutional perspective to complex cross-border transactions.",
            sections: [
                { icon: "edu", title: "EDUCATION", content: "Honours graduate from University College London (UCL) in International Politics and Journalism." },
                { icon: "briefcase", title: "CAREER HIGHLIGHTS", content: "Began her career with HSBC in international banking before being promoted to a senior governance and compliance role supporting the bank's offshore operations, with responsibility for governance and compliance across HSBC's Cayman Islands banking division. During her tenure, she developed expertise in international banking, corporate governance, regulatory oversight and enterprise risk management." },
                { icon: "bank", title: "EXPERIENCE", content: "Established and led a private family office focused on UK real estate investment, asset-backed acquisitions and strategic investment opportunities. Under her leadership, the platform successfully originated and executed its investment strategy, culminating in a successful exit to a Zurich-based private equity firm, strengthening its investment platform and strategic capabilities." }
            ]
        }
    };

    const teamCards = document.querySelectorAll('.team-card');
    const bioOverlay = document.getElementById('bio-overlay');
    const bioPanel = document.getElementById('bio-panel');
    const bioCloseBtn = document.getElementById('bio-close');

    const bioImg = document.getElementById('bio-img-large');
    const bioName = document.getElementById('bio-details-name');
    const bioTitle = document.getElementById('bio-details-title');
    const bioIntro = document.getElementById('bio-intro-text');
    const dynamicSections = document.getElementById('bio-dynamic-sections');

    teamCards.forEach(card => {
        // Allow clicking anywhere on the card
        card.addEventListener('click', (e) => {
            e.preventDefault();
            
            const memberKey = card.getAttribute('data-member');
            const memberImage = card.getAttribute('data-image'); // Retrieve asset link from HTML
            const memberData = bioData[memberKey];

            if(memberData) {
                // Populate Header & Intro
                bioImg.src = memberImage;
                bioName.innerText = memberData.name;
                bioTitle.innerText = memberData.title;
                bioIntro.innerText = memberData.intro;

                // Build Dynamic Sections
                dynamicSections.innerHTML = '';
                memberData.sections.forEach(sec => {
                    const sectionHTML = `
                        <div class="bio-section-item">
                            <div class="bio-icon-box">
                                ${icons[sec.icon]}
                            </div>
                            <div class="bio-text-content">
                                <h4>${sec.title}</h4>
                                <p>${sec.content}</p>
                            </div>
                        </div>
                    `;
                    dynamicSections.innerHTML += sectionHTML;
                });

                // Open Panel
                bioOverlay.classList.add('active');
                bioPanel.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            }
        });
    });

    // Close logic
    const closeBiography = () => {
        bioOverlay.classList.remove('active');
        bioPanel.classList.remove('active');
        document.body.style.overflow = ''; // Restore background scrolling
    };

    bioCloseBtn.addEventListener('click', closeBiography);
    bioOverlay.addEventListener('click', closeBiography);
    
    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if(e.key === 'Escape' && bioPanel.classList.contains('active')) {
            closeBiography();
        }
    });

});