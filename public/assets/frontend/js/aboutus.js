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
                observer.unobserve(entry.target); // Unobserve after animating once
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        observer.observe(element);
    });

    // --- BIOGRAPHY SLIDE-IN LOGIC ---
    
    // SVG Icons Map
    const icons = {
        person: `<svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>`,
        briefcase: `<svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>`,
        chart: `<svg viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>`,
        bank: `<svg viewBox="0 0 24 24"><path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/></svg>`,
        edu: `<svg viewBox="0 0 24 24"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>`
    };

    // Database of Team Bios with Updated Content
    // Note: Image paths removed to adhere to constraint - we now pull the blade parsed images directly from the DOM on click.
    const bioData = {
        "tanaz": {
            name: "Tanaz Islam",
            title: "Executive Director, Corporate Strategy and International Growth",
            intro: "Tanaz Islam is Executive Director of AVANTY Capital, supporting the firm’s corporate strategy, international growth and senior stakeholder relationships. She works closely with the leadership team on governance, business development, brand positioning and the coordination of strategic partnerships. Her role helps ensure that AVANTY Capital maintains a disciplined, professional and relationship-led approach as it expands its private capital activities across key markets.",
            sections: [
                { icon: "person", title: "EXECUTIVE OVERVIEW", content: "Tanaz Islam serves as Executive Director of AVANTY Capital, supporting the firm’s strategic direction, international positioning and long-term corporate growth. Her role sits across leadership, governance, business development and stakeholder management, helping ensure that AVANTY Capital presents itself with the discipline, credibility and commercial judgement expected of a private capital platform operating across multiple jurisdictions." },
                { icon: "briefcase", title: "PROFESSIONAL BIOGRAPHY", content: "Tanaz’s professional focus is centred on strategic coordination, relationship management and the development of institutional-quality business infrastructure. She supports the leadership team in shaping the firm’s market presence, strengthening its corporate identity and ensuring that AVANTY Capital’s external messaging remains aligned with its commercial objectives.<br><br>As Executive Director, Tanaz works closely with senior management on cross-border growth initiatives, helping coordinate relationships with advisers, introducers, investors, counterparties and strategic partners. Her work is particularly important where transactions require careful presentation, clear communication and the coordination of multiple professional parties.<br><br>She has a strong understanding of how private capital businesses need to position themselves in front of lenders, family offices, entrepreneurs and professional advisers. Her role is therefore not limited to internal management; she also contributes to the wider narrative of AVANTY Capital as a relationship-led, execution-focused business built around trust, discretion and long-term value creation.<br><br>Tanaz also supports the development of the firm’s governance culture. This includes helping management maintain clear processes around decision-making, documentation, communication standards and stakeholder engagement. Her approach is practical, commercially aware and focused on building a business that can scale without losing control of quality, reputation or execution standards." },
                { icon: "chart", title: "CORE AREAS OF RESPONSIBILITY", content: "<ul style='margin-left: 20px;'><li style='margin-bottom:6px;'>Corporate strategy and executive coordination</li><li style='margin-bottom:6px;'>International business development and strategic partnerships</li><li style='margin-bottom:6px;'>Brand positioning, reputation and stakeholder communication</li><li style='margin-bottom:6px;'>Governance support, internal organisation and leadership alignment</li><li>Supporting senior management across transaction presentation and relationship-led growth</li></ul>" }
            ]
        },
        "jenny": {
            name: "Jenny Won Lee",
            title: "Head of Capital Markets, Funding Strategy and Transaction Structuring",
            intro: "Jenny Won Lee is Head of Capital Markets at AVANTY Capital, supporting the firm’s commercial pricing, capital market strategy and transaction structuring. She works closely with the leadership team on debt facilities, capital structures, lender engagement and market analysis, helping position transactions for successful execution across private capital and cross-border opportunities.",
            sections: [
                { icon: "person", title: "EXECUTIVE OVERVIEW", content: "Jenny Won Lee leads AVANTY Capital’s capital markets function, with responsibility for commercial pricing, capital strategy, lender engagement and transaction structuring. She supports the firm’s private capital activities by helping shape funding solutions that are commercially realistic, lender-aligned and capable of being executed across complex real estate and private capital transactions." },
                { icon: "briefcase", title: "PROFESSIONAL BIOGRAPHY", content: "Jenny’s background is positioned around financial analysis, market assessment and private capital execution. She brings a strong analytical foundation to the firm, supported by a degree in Mathematics from the University of Seoul and experience across investment analysis, private equity markets and transaction support.<br><br>Before joining AVANTY Capital, Jenny developed experience in Hong Kong’s financial markets, including exposure to private equity, investment analysis and transaction execution. This background gave her a practical understanding of how capital providers assess risk, pricing, security, exit strategy and sponsor credibility.<br><br>At AVANTY Capital, Jenny works closely with the leadership team to review commercial pricing, capital structures, debt facilities, market comparables and funding strategy. She assists in shaping the financial narrative of each transaction so that counterparties can understand the opportunity, the security position, the repayment strategy and the commercial rationale.<br><br>Her role also includes supporting negotiations with lenders, advisers and institutional counterparties. Jenny helps translate deal information into a structured capital markets presentation, ensuring that valuation assumptions, debt sizing, projected returns and execution milestones are presented in a clear, credible and commercially disciplined manner." },
                { icon: "bank", title: "CORE AREAS OF RESPONSIBILITY", content: "<ul style='margin-left: 20px;'><li style='margin-bottom:6px;'>Capital markets strategy and lender engagement</li><li style='margin-bottom:6px;'>Commercial pricing, debt sizing and funding analysis</li><li style='margin-bottom:6px;'>Transaction structuring and capital stack review</li><li style='margin-bottom:6px;'>Market analysis, comparables and execution planning</li><li>Supporting cross-border capital solutions and lender-facing materials</li></ul>" }
            ]
        },
        "kai": {
            name: "Kai Yung Lau",
            title: "Head of Operations, Governance and Transaction Delivery",
            intro: "Kai Yung Lau is Head of Operations at AVANTY Capital, overseeing the firm’s internal management, operational framework and transaction delivery processes. She coordinates key workstreams across advisers, lenders, borrowers and management, ensuring that complex transactions are progressed with discipline, structure and professional oversight.",
            sections: [
                { icon: "person", title: "EXECUTIVE OVERVIEW", content: "Kai Yung Lau is Head of Operations at AVANTY Capital, responsible for internal management, operational governance and the delivery framework that supports the firm’s transaction activity. Her function is to ensure that the firm’s commercial processes, documentation flows, professional advisers and stakeholder communications remain organised, consistent and aligned with the firm’s long-term objectives." },
                { icon: "briefcase", title: "PROFESSIONAL BIOGRAPHY", content: "Kai’s background combines operational management, financial analysis and commercial coordination. She is positioned as a disciplined operator with experience supporting complex processes across financial services, corporate advisory and market-facing business environments.<br><br>Kai began her career in Singapore, developing a foundation in analytical thinking, financial reporting, process management and client engagement. Her early career gave her exposure to structured corporate environments where accuracy, communication and process discipline were central to delivery.<br><br>She subsequently developed experience across commercial operations and strategic analysis, including work connected to regional markets, portfolio oversight and transaction coordination. This experience strengthened her ability to manage competing priorities, assess commercial information and support senior decision-makers through clear operational execution.<br><br>At AVANTY Capital, Kai oversees the internal framework behind the firm’s transaction activity. This includes coordinating workstreams between management, borrowers, lenders, valuers, lawyers, monitoring surveyors and other professional advisers. She helps ensure that each transaction moves through the required stages in an orderly manner, with clear ownership, timely follow-up and accurate communication.<br><br>Kai’s role is particularly important in complex cross-border transactions where multiple parties need to be coordinated and where delays can occur if information is not managed properly. Her operational oversight supports the firm’s ability to move quickly while maintaining professionalism, governance and control." },
                { icon: "edu", title: "CORE AREAS OF RESPONSIBILITY", content: "<ul style='margin-left: 20px;'><li style='margin-bottom:6px;'>Operational management and transaction coordination</li><li style='margin-bottom:6px;'>Internal governance, process control and workflow management</li><li style='margin-bottom:6px;'>Coordination with advisers, lenders, borrowers and counterparties</li><li style='margin-bottom:6px;'>Supporting execution timelines and documentation management</li><li>Maintaining operational standards across the firm’s private capital activities</li></ul>" }
            ]
        },
        "anna": {
            name: "Anna Young",
            title: "Portfolio Manager, Portfolio Oversight and Transaction Management",
            intro: "Anna Young is Portfolio Manager at AVANTY Capital, supporting portfolio oversight and transaction management across the firm’s real estate and private capital activities. She works closely with the leadership team to monitor portfolio performance, transaction progression, commercial pricing and reporting, helping maintain clear oversight across active opportunities and live mandates.",
            sections: [
                { icon: "person", title: "EXECUTIVE OVERVIEW", content: "Anna Young is Portfolio Manager at AVANTY Capital, supporting portfolio oversight, asset monitoring and transaction management across the firm’s real estate and private capital activities. Her role focuses on ensuring that portfolio performance, transaction progression, commercial pricing and key reporting matters remain visible to the leadership team." },
                { icon: "briefcase", title: "PROFESSIONAL BIOGRAPHY", content: "Anna’s professional profile is built around portfolio monitoring, transaction workflow and commercial reporting. She brings a structured approach to the management of information, helping the firm maintain clarity across live opportunities, active transactions and ongoing portfolio positions.<br><br>Anna began her career through a graduate programme in Singapore, where she gained experience in financial reporting, commercial advisory, corporate operations and analytical review. This foundation helped her develop a strong understanding of how financial information, management reporting and client communication support commercial decision-making.<br><br>At AVANTY Capital, Anna monitors transaction progress across multiple workstreams. She supports the leadership team by tracking commercial assumptions, reviewing portfolio performance, coordinating updates and ensuring that relevant information is available when decisions need to be made.<br><br>Her role also includes supporting the firm’s review of real estate backed opportunities, debt facilities, pricing movements, valuation updates and market developments. She helps convert complex information into clear internal reporting so that the firm can understand risk, performance and execution status at each stage.<br><br>Anna’s work is essential to maintaining discipline across the portfolio. By keeping oversight of transactions and performance data, she helps the firm manage its pipeline, monitor risk and support stakeholders with consistent and professional communication." },
                { icon: "chart", title: "CORE AREAS OF RESPONSIBILITY", content: "<ul style='margin-left: 20px;'><li style='margin-bottom:6px;'>Portfolio monitoring and transaction progression</li><li style='margin-bottom:6px;'>Internal reporting and commercial performance review</li><li style='margin-bottom:6px;'>Tracking pricing, valuation, debt and asset-level updates</li><li style='margin-bottom:6px;'>Supporting portfolio review meetings and management decisions</li><li>Coordinating information across active transactions and investment opportunities</li></ul>" }
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
        card.addEventListener('click', (e) => {
            e.preventDefault();
            
            const memberKey = card.getAttribute('data-member');
            const memberData = bioData[memberKey];
            
            // Extract the parsed Blade Image SRC directly from the clicked card
            const memberImageSrc = card.querySelector('.team-img').src;

            if(memberData) {
                // Populate Header & Intro
                bioImg.src = memberImageSrc; 
                bioName.innerText = memberData.name;
                bioTitle.innerText = memberData.title;
                bioIntro.innerText = memberData.intro;

                // Build Dynamic Sections with animation-ready structure
                dynamicSections.innerHTML = '';
                memberData.sections.forEach(sec => {
                    const sectionHTML = `
                        <div class="bio-section-item">
                            <div class="bio-icon-box">
                                ${icons[sec.icon]}
                            </div>
                            <div class="bio-text-content">
                                <h4>${sec.title}</h4>
                                <div>${sec.content}</div>
                            </div>
                        </div>
                    `;
                    dynamicSections.innerHTML += sectionHTML;
                });

                // Trigger Open Panel & Animations
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