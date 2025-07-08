       // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Initialize Vanta.js background
        VANTA.NET({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x8b5cf6, /* Changed primary color slightly to match purple-700 */
            backgroundColor: 0x0f172a,
            points: 18.00, /* Even more points */
            maxDistance: 28.00, /* Greater connection distance */
            spacing: 20.00, /* Wider spacing */
            showDots: true /* Ensure dots are visible */
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMobileMenuButton = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelectorAll('#mobile-menu a');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('open');
        });

        closeMobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
        });

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open'); // Close menu on link click
            });
        });

        // Animate skill bars on scroll
        const skillBars = document.querySelectorAll('.skill-progress');
        
        const animateSkillBars = () => {
            skillBars.forEach(bar => {
                const rect = bar.getBoundingClientRect();
                if (rect.top <= window.innerHeight * 0.8 && rect.bottom >= 0) {
                    bar.style.width = bar.parentElement.previousElementSibling.lastElementChild.textContent;
                } else {
                    bar.style.width = '0%'; // Reset if out of view to re-animate on scroll up/down
                }
            });
        };
        
        window.addEventListener('scroll', animateSkillBars);
        animateSkillBars(); // Run once on load for initial view

        // Observe sections for scroll animations (using native Intersection Observer)
        const animatedSections = document.querySelectorAll('.animated-section, .animated-left, .animated-right');
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15 // Trigger when 15% of the section is visible
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    // No need to unobserve if we want it to re-animate on scroll back
                    // observer.unobserve(entry.target); 
                } else {
                    entry.target.classList.remove('is-visible'); // Remove class when not intersecting
                }
            });
        }, observerOptions);

        animatedSections.forEach(section => {
            observer.observe(section);
        });
        
        // Smooth scrolling for navigation (using native CSS scroll-smooth)
        // Removed JavaScript smooth scroll as CSS `scroll-smooth` is used in HTML tag
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Prevent default only if it's an internal hash link
                    e.preventDefault(); 
                    const offsetTop = targetElement.offsetTop - 80; // Adjust for fixed header height
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });