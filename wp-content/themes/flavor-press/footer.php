<!-- Newsletter Section -->
<section class="newsletter" id="contact">
    <div class="container">
        <div class="newsletter__inner">
            <div class="newsletter__content">
                <h2 class="newsletter__title">Stay Saucy With Us</h2>
                <p class="newsletter__text">Subscribe and be the first to know about new flavors, recipes, and exclusive offers.</p>
            </div>
            <form class="newsletter__form" action="#" method="post">
                <input type="email" class="newsletter__input" placeholder="Enter your email" required>
                <button type="submit" class="newsletter__submit">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<!-- Marquee -->
<div class="marquee">
    <div class="marquee__inner">
        <div class="marquee__item">
            <span class="marquee__text">GFI</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Bold Sauces</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Pure Flavor</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Handcrafted</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Since 2015</span>
            <span class="marquee__dot"></span>
        </div>
        <div class="marquee__item">
            <span class="marquee__text">GFI</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Bold Sauces</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Pure Flavor</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Handcrafted</span>
            <span class="marquee__dot"></span>
            <span class="marquee__text">Since 2015</span>
            <span class="marquee__dot"></span>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer__grid">
            <!-- Brand Column -->
            <div class="footer__col">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="GFI" style="height: 40px; width: auto; filter: brightness(0) invert(1);">
                </a>
                <p class="footer__brand-text">Premium artisan sauces crafted with passion. Every bottle tells a story of bold flavors and quality ingredients.</p>
                <div class="footer__socials">
                    <a href="#" class="footer__social-btn" aria-label="Facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" class="footer__social-btn" aria-label="Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="#" class="footer__social-btn" aria-label="TikTok">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.52a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.73a8.19 8.19 0 0 0 4.76 1.52v-3.4a4.85 4.85 0 0 1-1-.16z"/></svg>
                    </a>
                    <a href="#" class="footer__social-btn" aria-label="LinkedIn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                </div>
            </div>

            <!-- Company Links -->
            <div class="footer__col">
                <h3 class="footer__heading">Company</h3>
                <nav class="footer__links">
                    <a href="#about">Our Story</a>
                    <a href="#products">Our Sauces</a>
                    <a href="#categories">Flavors</a>
                    <a href="#">Careers</a>
                    <a href="#">Press</a>
                </nav>
            </div>

            <!-- Help Links -->
            <div class="footer__col">
                <h3 class="footer__heading">Need Help?</h3>
                <nav class="footer__links">
                    <a href="#contact">Contact Us</a>
                    <a href="#">FAQs</a>
                    <a href="#">Shipping</a>
                    <a href="#">Returns</a>
                    <a href="#">Track Order</a>
                </nav>
            </div>

            <!-- Legal Links -->
            <div class="footer__col">
                <h3 class="footer__heading">Legal</h3>
                <nav class="footer__links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">Refund Policy</a>
                </nav>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer__bottom">
            <p>&copy; <?php echo date('Y'); ?> General Foods Industry. All rights reserved.</p>
            <div class="footer__payments">
                <span>Visa</span>
                <span>Mastercard</span>
                <span>PayPal</span>
                <span>Apple Pay</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
