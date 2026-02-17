<?php
/**
 * Flavor Press Front Page Template
 *
 * @package flavor-press
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

get_header();
?>

<!-- ========== HERO SECTION ========== -->
<section class="hero" id="hero">
    <div class="hero__bg"></div>
    <div class="hero__overlay"></div>
    <div class="hero__pattern"></div>
    
    <!-- Decorative elements -->
    <div class="hero__deco hero__deco--1"></div>
    <div class="hero__deco hero__deco--2"></div>

    <div class="hero__content">
        <div class="hero__badge">
            <span class="hero__badge-dot"></span>
            Premium Artisan Sauces
        </div>
        <h1 class="hero__title">
            Dive Into
            <span>Flavors</span>
        </h1>
        <p class="hero__subtitle">
            Handcrafted sauces made with the finest ingredients. Bold, unique, and unforgettable — every drop tells a story.
        </p>
        <div class="hero__cta-group">
            <a href="#products" class="btn btn--primary">
                Shop Now
                <span class="btn__arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                </span>
            </a>
            <a href="#about" class="btn btn--outline">Our Story</a>
        </div>
    </div>

    <div class="hero__scroll-indicator">
        <span>Scroll</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"></path><path d="M19 12l-7 7-7-7"></path></svg>
    </div>
</section>

<!-- ========== BEST SELLERS / PRODUCTS ========== -->
<section class="section section--warm" id="products">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <span class="section__label">Best Sellers</span>
            <h2 class="section__title">Get Saucy With Us</h2>
            <p class="section__description">Our most-loved flavors, crafted to perfection and loved by sauce enthusiasts worldwide.</p>
        </div>

        <div class="products-grid">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
                    ?>
                    <div class="product-card animate-on-scroll delay-1">
                        <div class="product-card__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <!-- Fallback SVG if no image -->
                                <svg viewBox="0 0 400 500" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:55%;height:auto;">
                                    <defs>
                                        <linearGradient id="bg_<?php the_ID(); ?>" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#ffce2a" />
                                            <stop offset="100%" stop-color="#e6b800" />
                                        </linearGradient>
                                        <linearGradient id="cp_<?php the_ID(); ?>">
                                            <stop offset="0%" stop-color="#0d5a2e" />
                                            <stop offset="100%" stop-color="#0a4322" />
                                        </linearGradient>
                                    </defs>
                                    <rect x="130" y="180" width="140" height="250" rx="20" fill="url(#bg_<?php the_ID(); ?>)" />
                                    <rect x="155" y="120" width="90" height="70" rx="10" fill="url(#bg_<?php the_ID(); ?>)" />
                                    <rect x="165" y="85" width="70" height="45" rx="8" fill="url(#cp_<?php the_ID(); ?>)" />
                                    <rect x="145" y="240" width="110" height="100" rx="8" fill="#fefdf5" opacity=".9" />
                                    <rect x="155" y="258" width="90" height="6" rx="3" fill="#0a4322" />
                                    <rect x="165" y="274" width="70" height="4" rx="2" fill="#0a4322" opacity=".4" />
                                    <text x="200" y="325" text-anchor="middle" font-size="18">🌶️</text>
                                </svg>
                            <?php endif; ?>
                            
                            <?php if ($product->is_on_sale()) : ?>
                                <span class="product-card__badge">Sale!</span>
                            <?php elseif ($product->is_featured()) : ?>
                                <span class="product-card__badge">Best Seller</span>
                            <?php endif; ?>
                        </div>
                        <div class="product-card__info">
                            <h3 class="product-card__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="product-card__desc">
                                <?php echo apply_filters('woocommerce_short_description', wp_trim_words($post->post_excerpt, 10)); ?>
                            </div>
                            <div class="product-card__footer">
                                <span class="product-card__price"><?php echo $product->get_price_html(); ?></span>
                                <a href="<?php echo $product->add_to_cart_url(); ?>" class="product-card__cart-btn" aria-label="Add to cart">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No products found yet! Add some in WooCommerce.</p>
            <?php endif; ?>
        </div>

        <div style="text-align: center; margin-top: var(--space-3xl);">
            <a href="#" class="btn btn--outline-dark">
                View All Sauces
                <span class="btn__arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- ========== FLAVOUR CATEGORIES ========== -->
<section class="section" id="categories">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <span class="section__label">Our Collections</span>
            <h2 class="section__title">Choose Your Vibe</h2>
            <p class="section__description">Whether you love classic flavors, fiery heat, or bold experiments — we've got the sauce for you.</p>
        </div>

        <div class="categories-grid">
            <!-- Classic -->
            <div class="category-card category-card--classic animate-on-scroll delay-1">
                <div class="category-card__bg"></div>
                <div class="category-card__overlay"></div>
                <div class="category-card__content">
                    <span class="category-card__tag">Collection</span>
                    <h3 class="category-card__title">The Classics</h3>
                    <p class="category-card__count">12 Signature Flavors</p>
                    <a href="#" class="category-card__link">
                        Explore
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- BBQ -->
            <div class="category-card category-card--bbq animate-on-scroll delay-2">
                <div class="category-card__bg"></div>
                <div class="category-card__overlay"></div>
                <div class="category-card__content">
                    <span class="category-card__tag">Collection</span>
                    <h3 class="category-card__title">BBQ Lovers</h3>
                    <p class="category-card__count">8 Smoky Creations</p>
                    <a href="#" class="category-card__link">
                        Explore
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Special -->
            <div class="category-card category-card--special animate-on-scroll delay-3">
                <div class="category-card__bg"></div>
                <div class="category-card__overlay"></div>
                <div class="category-card__content">
                    <span class="category-card__tag">Limited Edition</span>
                    <h3 class="category-card__title">Chef's Special</h3>
                    <p class="category-card__count">5 Exclusive Recipes</p>
                    <a href="#" class="category-card__link">
                        Explore
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== ABOUT / STORY ========== -->
<section class="section section--warm" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about__image-wrapper animate-on-scroll">
                <div class="about__image"></div>
                <div class="about__image-badge">
                    <span class="about__image-badge-year">20+</span>
                    <span class="about__image-badge-text">Years</span>
                </div>
            </div>
            <div class="about__content animate-on-scroll delay-2">
                <span class="section__label">Our Story</span>
                <h2 class="about__title">
                    Born From
                    <span>Passion</span>
                </h2>
                <p class="about__text">
                    What started as a family recipe in a small kitchen has grown into a global flavor revolution. Every one of our sauces is crafted with love, using only the finest, ethically-sourced ingredients. We believe that great food deserves great sauce — and we're here to deliver.
                </p>
                <div class="about__features">
                    <div class="about__feature">
                        <div class="about__feature-icon">🌿</div>
                        <span class="about__feature-text">All-Natural Ingredients</span>
                    </div>
                    <div class="about__feature">
                        <div class="about__feature-icon">🔥</div>
                        <span class="about__feature-text">Small-Batch Crafted</span>
                    </div>
                    <div class="about__feature">
                        <div class="about__feature-icon">🌍</div>
                        <span class="about__feature-text">Globally Inspired</span>
                    </div>
                    <div class="about__feature">
                        <div class="about__feature-icon">❤️</div>
                        <span class="about__feature-text">Made With Love</span>
                    </div>
                </div>
                <a href="#" class="btn btn--secondary">
                    Learn More
                    <span class="btn__arrow">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS ========== -->
<section class="section section--dark stats" id="stats">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <span class="section__label">Our Impact</span>
            <h2 class="section__title">The Sauce That<br>Crosses Borders</h2>
        </div>

        <div class="stats-grid">
            <div class="stat-item animate-on-scroll delay-1">
                <div class="stat-item__icon">🍶</div>
                <div class="stat-item__number" data-count="50">0</div>
                <div class="stat-item__label">Unique Flavors</div>
            </div>
            <div class="stat-item animate-on-scroll delay-2">
                <div class="stat-item__icon">🌍</div>
                <div class="stat-item__number" data-count="30">0</div>
                <div class="stat-item__label">Countries Reached</div>
            </div>
            <div class="stat-item animate-on-scroll delay-3">
                <div class="stat-item__icon">🤝</div>
                <div class="stat-item__number" data-count="5000">0</div>
                <div class="stat-item__label">Happy Partners</div>
            </div>
            <div class="stat-item animate-on-scroll delay-4">
                <div class="stat-item__icon">⭐</div>
                <div class="stat-item__number" data-count="350">0</div>
                <div class="stat-item__label">Million Meals Served</div>
            </div>
        </div>
    </div>
</section>

<!-- ========== REVIEWS ========== -->
<section class="section" id="reviews">
    <div class="container">
        <div class="section__header animate-on-scroll">
            <span class="section__label">Testimonials</span>
            <h2 class="section__title">What People Are Saying</h2>
            <p class="section__description">Don't just take our word for it — hear from our flavor-loving community.</p>
        </div>

        <div class="reviews-grid">
            <!-- Review 1 -->
            <div class="review-card animate-on-scroll delay-1">
                <span class="review-card__quote">"</span>
                <div class="review-card__stars">
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                </div>
                <p class="review-card__text">
                    "The Golden Heat sauce is absolutely incredible! The balance between honey sweetness and spicy kick is perfection. My burgers have never been the same."
                </p>
                <div class="review-card__author">
                    <div class="review-card__avatar">M</div>
                    <div class="review-card__author-info">
                        <h4>Marcus T.</h4>
                        <p>Food Blogger</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="review-card animate-on-scroll delay-2">
                <span class="review-card__quote">"</span>
                <div class="review-card__stars">
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                </div>
                <p class="review-card__text">
                    "I've tried every hot sauce on the market, and GFI is on another level. The quality of ingredients shines through in every bottle. Total game changer!"
                </p>
                <div class="review-card__author">
                    <div class="review-card__avatar">S</div>
                    <div class="review-card__author-info">
                        <h4>Sarah K.</h4>
                        <p>Home Chef</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="review-card animate-on-scroll delay-3">
                <span class="review-card__quote">"</span>
                <div class="review-card__stars">
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                    <span class="review-card__star">★</span>
                </div>
                <p class="review-card__text">
                    "We've been using GFI sauces in our restaurant for over a year now. Our customers absolutely love them! The Forest Fire is our number one seller."
                </p>
                <div class="review-card__author">
                    <div class="review-card__avatar">J</div>
                    <div class="review-card__author-info">
                        <h4>James R.</h4>
                        <p>Restaurant Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="section section--primary cta-section">
    <div class="container">
        <div class="cta__inner animate-on-scroll">
            <span class="section__label">Ready to Get Saucy?</span>
            <h2 class="cta__title">Saucify Your Life</h2>
            <p class="cta__text">Join thousands of flavor enthusiasts who've upgraded their meals with our premium artisan sauces.</p>
            <a href="#products" class="btn btn--secondary">
                Shop Collection
                <span class="btn__arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                </span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
