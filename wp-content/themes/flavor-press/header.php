<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium artisan sauces crafted with passion. Explore our bold, unique flavors that transform every meal into an extraordinary experience.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Utility Bar -->
<div class="top-bar">
    <div class="container container--wide">
        <div class="top-bar__socials">
            <a href="#" aria-label="Facebook">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
            </a>
            <a href="#" aria-label="Instagram">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
            <a href="#" aria-label="TikTok">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.52a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.73a8.19 8.19 0 0 0 4.76 1.52v-3.4a4.85 4.85 0 0 1-1-.16z"/></svg>
            </a>
        </div>
        <div class="top-bar__tagline">✦ Handcrafted Sauces, Bold Flavors ✦</div>
    </div>
</div>

<!-- Main Header -->
<header class="site-header" id="site-header">
    <div class="header__inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="GFI - General Foods Industry" style="height: 50px; width: auto;">
        </a>

        <!-- Navigation -->
        <nav class="header__nav" id="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'header__menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <!-- Actions -->
        <div class="header__actions">
            <!-- Search Removed -->
            
            <?php if (class_exists('WooCommerce')) : ?>
                <a href="<?php echo wc_get_cart_url(); ?>" class="header__action-btn cart-btn" aria-label="Cart">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    <?php if (WC()->cart->get_cart_contents_count() > 0) : ?>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    <?php endif; ?>
                </a>
            <?php endif; ?>

            <!-- Mobile Toggle -->
            <button class="header__mobile-toggle" id="mobile-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
