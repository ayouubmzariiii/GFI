<?php
/**
 * Flavor Press Theme Functions
 *
 * @package flavor-press
 * @version 1.0.0
 */

if (!defined('ABSPATH')) exit;

/**
 * Theme Setup
 */
function flavor_press_setup() {
    // Add title tag support
    add_theme_support('title-tag');
    
    // Add post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'flavor-press'),
        'footer'    => __('Footer Menu', 'flavor-press'),
    ));
    
    // Content width
    if (!isset($content_width)) {
        $content_width = 1280;
    }
}
add_action('after_setup_theme', 'flavor_press_setup');

/**
 * Enqueue Styles & Scripts
 */
function flavor_press_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'flavor-press-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Theme stylesheet
    wp_enqueue_style(
        'flavor-press-style',
        get_stylesheet_uri(),
        array('flavor-press-google-fonts'),
        wp_get_theme()->get('Version')
    );
    
    // Main JS
    wp_enqueue_script(
        'flavor-press-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // WooCommerce Custom Styles
    if (class_exists('WooCommerce')) {
        wp_enqueue_style(
            'flavor-press-woocommerce',
            get_template_directory_uri() . '/assets/css/woocommerce-custom.css',
            array('flavor-press-style'),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('wp_enqueue_scripts', 'flavor_press_scripts');

/**
 * Register Widget Areas
 */
function flavor_press_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'flavor-press'),
        'id'            => 'footer-widgets',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'flavor_press_widgets_init');

/**
 * Custom body classes
 */
function flavor_press_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }
    return $classes;
}
add_filter('body_class', 'flavor_press_body_classes');

/**
 * Add Favicon
 */
function flavor_press_favicon() {
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/favicon.png" />';
}
add_action('wp_head', 'flavor_press_favicon');
