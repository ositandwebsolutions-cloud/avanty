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
    const bioData = {
        "tanaz": {
            name: "Tanaz Choudhury",
            title: "Founder / Principal",
            intro: "Tanaz Choudhury is Founder and Principal of Avanty Capital, setting the firm's strategic direction and leading its governance, institutional relationships and long term growth. Her background spans international banking, governance and compliance, and family office leadership, shaping a firm built on discipline, alignment and long term value.",
            sections: [
                { 
                    icon: "person", 
                    title: "EXECUTIVE OVERVIEW", 
                    content: "Tanaz Choudhury is Founder and Principal of Avanty Capital, setting the firm's strategic direction and leading its governance, institutional relationships and long term growth. Her background spans international banking, governance and compliance, and family office leadership, shaping a firm built on discipline, alignment and long term value." 
                },
                { 
                    icon: "briefcase", 
                    title: "PROFESSIONAL BIOGRAPHY", 
                    content: "Tanaz read International Politics and Journalism at University College London, an academic grounding that shaped her enduring focus on global affairs, governance and international markets.<br><br>Tanaz's command of governance and compliance is grounded in her time at HSBC, where she progressed from the bank's Governance and Compliance function into a senior international role overseeing regulatory compliance, internal controls and risk across cross border banking, international regulatory frameworks and corporate governance.<br><br>Tanaz was a key visionary behind a successful private family office focused on real estate backed and asset backed investment, which she co founded and where she led governance, transaction execution, asset oversight and long term capital strategy. She directed the successful sale of the family office's real estate portfolio to a Zurich based private equity firm, an outcome that brought firsthand exposure to institutional due diligence, governance review and strategic transaction execution.<br><br>As Founder and Principal of Avanty Capital, Tanaz leads the firm's strategic direction, long term growth and international relationships, identifying opportunities across global markets and building institutional partnerships across banking, fintech and real estate.<br><br>She applies the principles of ethical finance and Sharia compliant investment throughout, working with entrepreneurs, family offices, lenders and institutional investors through disciplined governance and cross border execution." 
                }
            ]
        },
        "jenny": {
            name: "Jenny Won Lee",
            title: "Head of Capital Markets, Funding Strategy and Transaction Structuring",
            intro: "Jenny Won Lee leads Avanty Capital's capital markets function, responsible for commercial pricing, capital strategy, capital provider engagement and transaction structuring. She shapes funding solutions that are commercially realistic, aligned to cost of capital and executable across complex real estate and private capital transactions.",
            sections: [
                { 
                    icon: "person", 
                    title: "EXECUTIVE OVERVIEW", 
                    content: "Jenny Won Lee leads Avanty Capital's capital markets function, responsible for commercial pricing, capital strategy, capital provider engagement and transaction structuring. She shapes funding solutions that are commercially realistic, aligned to cost of capital and executable across complex real estate and private capital transactions." 
                },
                { 
                    icon: "briefcase", 
                    title: "PROFESSIONAL BIOGRAPHY", 
                    content: "Jenny graduated with distinction in Mathematics from the University of Seoul, giving her a strong analytical foundation across investment analysis, private equity markets and transaction execution.<br><br>Before joining Avanty Capital, Jenny built her career in Hong Kong's financial markets, working across private equity, investment analysis and transaction execution. This gave her a practical understanding of how capital providers assess risk, pricing, security, exit strategy and sponsor credibility.<br><br>At Avanty Capital, Jenny reviews commercial pricing, capital structures, debt facilities, market comparables and funding strategy alongside the leadership team, shaping the financial narrative of each transaction so counterparties understand the opportunity, the security position, the repayment strategy and the commercial rationale.<br><br>She leads negotiations with capital providers, advisers and institutional counterparties, translating deal information into structured capital markets presentations with clear, credible and commercially disciplined valuation assumptions, debt sizing, projected returns and execution milestones." 
                }
            ]
        },
        "kai": {
            name: "Kai Leuw",
            title: "Head of Operations, Governance and Transaction Delivery",
            intro: "Kai Leuw is Head of Operations at Avanty Capital, directing internal management, operational governance and transaction delivery across the firm. She holds the firm's commercial processes, documentation and stakeholder communication to a single standard of order, consistency and long term discipline, ensuring the firm's transaction activity moves with the rigour institutional counterparties expect. As a key member of the firm's daily operations, Kai is the constant thread running through every transaction from origination to completion.",
            sections: [
                { 
                    icon: "person", 
                    title: "EXECUTIVE OVERVIEW", 
                    content: "Kai Leuw is Head of Operations at Avanty Capital, directing internal management, operational governance and transaction delivery across the firm. She holds the firm's commercial processes, documentation and stakeholder communication to a single standard of order, consistency and long term discipline, ensuring the firm's transaction activity moves with the rigour institutional counterparties expect. As a key member of the firm's daily operations, Kai is the constant thread running through every transaction from origination to completion." 
                },
                { 
                    icon: "briefcase", 
                    title: "PROFESSIONAL BIOGRAPHY", 
                    content: "Kai holds a Bachelor of Arts from the National University of Singapore, an early foundation that carried into her career in financial reporting, process management and client engagement within structured corporate environments demanding accuracy and discipline.<br><br>She went on to build experience across commercial operations and strategic analysis, spanning regional markets, portfolio oversight and transaction coordination. That grounding sharpened her instinct for managing competing priorities under pressure, reading commercial information quickly, and supporting senior decision makers with clear, timely operational judgement.<br><br>At Avanty Capital, Kai runs the operational framework behind every transaction, coordinating management, borrowers, capital providers, valuers, lawyers and monitoring surveyors. Every stage carries clear ownership, timely follow up and accurate communication, and every workstream is tracked against the firm's own standard rather than left to individual advisers to self report.<br><br>Her command is most evident in complex cross border transactions, where multiple parties, jurisdictions and timelines converge and where a single missed handoff can cost weeks. Kai's governance and control keep execution fast without compromise, giving the firm's counterparties confidence that process discipline sits behind every stage of delivery." 
                }
            ]
        }
    };

    const teamCards = document.querySelectorAll('.team-card');
    const bioOverlay = document.getElementById('bio-overlay');
    const bioPanel = document.getElementById('bio-panel');
    const bioCloseBtn = document.getElementById('bio-close');

    const bioName = document.getElementById('bio-details-name');
    const bioTitle = document.getElementById('bio-details-title');
    const bioIntro = document.getElementById('bio-intro-text');
    const dynamicSections = document.getElementById('bio-dynamic-sections');

    teamCards.forEach(card => {
        card.addEventListener('click', (e) => {
            e.preventDefault();
            
            const memberKey = card.getAttribute('data-member');
            const memberData = bioData[memberKey];

            if(memberData) {
                // Populate Header & Intro
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
    
    // Improved, robust Disclaimer Toggle Logic
    const seeMoreBtn = document.querySelector('.see-more-btn');
    const disclaimerText = document.querySelector('.disclaimer-text');

    if (seeMoreBtn && disclaimerText) {
        seeMoreBtn.addEventListener('click', function() {
            // Toggle the expanded class
            disclaimerText.classList.toggle('expanded');
            
            // Update button text and aria-expanded state based on the class
            if (disclaimerText.classList.contains('expanded')) {
                seeMoreBtn.textContent = 'See less';
                seeMoreBtn.setAttribute('aria-expanded', 'true');
            } else {
                seeMoreBtn.textContent = 'See more';
                seeMoreBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }
});