<?php
/**
 * The Template for displaying product archives, including the main shop page
 *
 * @package flavor-press
 */

get_header(); ?>

<main class="section section--warm" id="main-content">
    <div class="container">
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <div class="section__header" style="margin-bottom: var(--space-2xl);">
                <span class="section__label">Premium Sauces</span>
                <h1 class="section__title"><?php woocommerce_page_title(); ?></h1>
                <?php do_action( 'woocommerce_archive_description' ); ?>
            </div>
        <?php endif; ?>

        <?php if ( woocommerce_product_loop() ) : ?>
            <?php do_action( 'woocommerce_before_shop_loop' ); ?>

            <?php woocommerce_product_loop_start(); ?>

            <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <?php
                    /**
                     * Hook: woocommerce_shop_loop.
                     */
                    do_action( 'woocommerce_shop_loop' );

                    wc_get_template_part( 'content', 'product' );
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php woocommerce_product_loop_end(); ?>

            <?php do_action( 'woocommerce_after_shop_loop' ); ?>
        <?php else : ?>
            <?php do_action( 'woocommerce_no_products_found' ); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
