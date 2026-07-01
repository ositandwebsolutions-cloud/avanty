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
});

// --- ADD THIS TO FIX THE BACK BUTTON BLANK SCREEN ---
window.addEventListener('pageshow', (event) => {
    // event.persisted is true if the page was restored from the browser's BFCache
    if (event.persisted) {
        const overlay = document.getElementById("page-transition-overlay");
        if (overlay) {
            // Instantly hide the overlay when coming back to the page
            overlay.classList.add("hidden");
        }
    }
});

document.addEventListener("DOMContentLoaded", function() {
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