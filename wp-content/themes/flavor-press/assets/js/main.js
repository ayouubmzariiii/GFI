/**
 * Flavor Press - Main JavaScript
 * Handles animations, interactions, and dynamic behavior
 */

(function () {
    'use strict';

    // ========================================
    // STICKY HEADER
    // ========================================
    const header = document.getElementById('site-header');
    let lastScrollY = 0;

    function handleHeaderScroll() {
        const scrollY = window.scrollY;

        if (scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        lastScrollY = scrollY;
    }

    window.addEventListener('scroll', handleHeaderScroll, { passive: true });

    // ========================================
    // MOBILE MENU TOGGLE
    // ========================================
    const mobileToggle = document.getElementById('mobile-toggle');
    const mainNav = document.getElementById('main-nav');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function () {
            this.classList.toggle('active');
            mainNav.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
    }

    // ========================================
    // SMOOTH SCROLL FOR WP MENU LINKS
    // ========================================
    document.querySelectorAll('.header__menu a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const linkUrl = new URL(this.href);
            const currentUrl = new URL(window.location.href);

            // Check if link is for an anchor on the current page
            if (linkUrl.pathname === currentUrl.pathname && linkUrl.hash) {
                const target = document.querySelector(linkUrl.hash);
                if (target) {
                    e.preventDefault();

                    const headerOffset = header ? header.offsetHeight : 0;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.scrollY - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    // Update active state
                    document.querySelectorAll('.header__menu li').forEach(li => li.classList.remove('current-menu-item'));
                    this.parentElement.classList.add('current-menu-item');

                    // Close mobile menu if open
                    if (mobileToggle && mobileToggle.classList.contains('active')) {
                        mobileToggle.classList.remove('active');
                        mainNav.classList.remove('active');
                        document.body.classList.remove('menu-open');
                    }
                }
            }
        });
    });


    // ========================================
    // SCROLL-TRIGGERED ANIMATIONS (Intersection Observer)
    // ========================================
    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(el => observer.observe(el));
    } else {
        // Fallback: show all elements immediately
        animatedElements.forEach(el => el.classList.add('animated'));
    }

    // ========================================
    // ANIMATED STAT COUNTERS
    // ========================================
    const statNumbers = document.querySelectorAll('[data-count]');

    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'), 10);
        const duration = 2000; // 2 seconds
        const start = performance.now();
        const suffix = target >= 1000 ? '+' : '+';

        function formatNumber(num) {
            if (num >= 1000) {
                return num.toLocaleString();
            }
            return num.toString();
        }

        function step(timestamp) {
            const elapsed = timestamp - start;
            const progress = Math.min(elapsed / duration, 1);

            // Easing: ease-out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * target);

            element.textContent = formatNumber(current) + suffix;

            if (progress < 1) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    if ('IntersectionObserver' in window && statNumbers.length > 0) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    statsObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        statNumbers.forEach(el => statsObserver.observe(el));
    }

    // ========================================
    // MARQUEE PAUSE ON HOVER
    // ========================================
    const marquee = document.querySelector('.marquee');

    if (marquee) {
        const marqueeInner = marquee.querySelector('.marquee__inner');

        marquee.addEventListener('mouseenter', () => {
            if (marqueeInner) {
                marqueeInner.style.animationPlayState = 'paused';
            }
        });

        marquee.addEventListener('mouseleave', () => {
            if (marqueeInner) {
                marqueeInner.style.animationPlayState = 'running';
            }
        });
    }

    // ========================================
    // PRODUCT CARD TILT EFFECT
    // ========================================
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        card.addEventListener('mousemove', function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;

            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-12px) scale(1.02)`;
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = '';
        });
    });

    // ========================================
    // PARALLAX EFFECT ON HERO
    // ========================================
    const heroBg = document.querySelector('.hero__bg img');

    if (heroBg) {
        window.addEventListener('scroll', function () {
            const scrolled = window.scrollY;
            const heroHeight = document.querySelector('.hero').offsetHeight;

            if (scrolled <= heroHeight) {
                heroBg.style.transform = `scale(1.1) translateY(${scrolled * 0.3}px)`;
            }
        }, { passive: true });
    }

    // ========================================
    // NEWSLETTER FORM INTERACTION
    // ========================================
    const newsletterForm = document.querySelector('.newsletter__form');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const input = this.querySelector('.newsletter__input');
            const submit = this.querySelector('.newsletter__submit');

            if (input && input.value) {
                submit.textContent = 'Subscribed! ✓';
                submit.style.background = '#0d5a2e';
                input.value = '';

                setTimeout(() => {
                    submit.textContent = 'Subscribe';
                    submit.style.background = '';
                }, 3000);
            }
        });
    }

    // ========================================
    // ACTIVE NAVIGATION LINK ON SCROLL  
    // ========================================
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.header__menu a');

    function setActiveNavLink() {
        const scrollY = window.scrollY + 200;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    if (link.parentElement.tagName === 'LI') {
                        link.parentElement.classList.remove('current-menu-item');
                        link.parentElement.classList.remove('current_page_item');
                    }

                    const href = link.getAttribute('href');
                    if (href && (href === '#' + sectionId || href.endsWith('#' + sectionId))) {
                        if (link.parentElement.tagName === 'LI') {
                            link.parentElement.classList.add('current-menu-item');
                        }
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', setActiveNavLink, { passive: true });

})();
