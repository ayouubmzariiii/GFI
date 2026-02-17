<?php
/**
 * The Template for displaying all single products
 *
 * @package flavor-press
 */

get_header(); ?>

<main class="section section--warm" id="main-content">
    <div class="container">
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>

            <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
                
                <!-- Product Gallery -->
                <div class="product-gallery animate-on-scroll">
                    <?php
                    /**
                     * woocommerce_before_single_product_summary hook.
                     *
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
                    
                    // Remove default hooks to prevent duplication
                    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
                    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
                    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
                    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
                    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
                    ?>
                </div>

                <!-- Product Summary -->
                <div class="product-summary animate-on-scroll delay-2">
                    <span class="section__label">Premium Selection</span>
                    <h1 class="product_title entry-title"><?php the_title(); ?></h1>
                    
                    <div class="product-price-wrapper" style="margin-bottom: var(--space-lg);">
                        <span class="product-price" style="font-family: var(--font-heading); font-size: var(--font-size-2xl); font-weight: 800; color: var(--color-primary-dark);">
                            <?php echo $product->get_price_html(); ?>
                        </span>
                    </div>

                    <div class="woocommerce-product-details__short-description">
                        <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                    </div>

                    <?php
                    /**
                     * woocommerce_single_product_summary hook.
                     *
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data - 60
                     */
                    do_action( 'woocommerce_single_product_summary' );
                    ?>
                    
                    <div class="product-meta" style="margin-top: var(--space-xl); padding-top: var(--space-lg); border-top: 1px solid rgba(0,0,0,0.1);">
                        <div class="about__feature" style="margin-bottom: var(--space-sm);">
                            <div class="about__feature-icon" style="width: 32px; height: 32px; font-size: 16px;">🌿</div>
                            <span class="about__feature-text">100% Natural Ingredients</span>
                        </div>
                        <div class="about__feature">
                            <div class="about__feature-icon" style="width: 32px; height: 32px; font-size: 16px;">🔥</div>
                            <span class="about__feature-text">Small Batch Crafted</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details Section -->
            <div class="product-details-section section" style="padding-top: var(--space-4xl); border-top: 1px solid var(--color-border);">
                <div class="section__header animate-on-scroll">
                    <span class="section__label">In-Depth</span>
                    <h2 class="section__title">The Finer Details</h2>
                </div>
                <div class="product-description content-block animate-on-scroll delay-1" style="font-size: var(--font-size-lg); line-height: 1.8; color: var(--color-text-light); max-width: 800px;">
                     <?php the_content(); ?>
                </div>
            </div>

            <!-- Reviews Section -->
            <div id="product-reviews-wrapper" class="product-reviews-section section" style="padding-top: var(--space-4xl); border-top: 1px solid var(--color-border);">
                 <div class="section__header animate-on-scroll">
                    <span class="section__label">Community</span>
                    <h2 class="section__title">Flavor Feedback</h2>
                </div>
                <div class="animate-on-scroll delay-1">
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>

            <!-- Related Products -->
            <section class="related-products section" style="padding-top: var(--space-4xl);">
                <div class="section__header animate-on-scroll">
                    <span class="section__label">You Might Also Like</span>
                    <h2 class="section__title">Pair It With</h2>
                </div>
                <?php
                $related_limit = 4;
                $related_ids = wc_get_related_products( $product->get_id(), $related_limit );
                
                if ( $related_ids ) {
                    $args = array(
                        'post_type' => 'product',
                        'post__in' => $related_ids,
                        'posts_per_page' => $related_limit
                    );
                    $related_products = new WP_Query( $args );
                    
                    if ( $related_products->have_posts() ) : ?>
                        <div class="woocommerce columns-4">
                            <ul class="products columns-4">
                                <?php while ( $related_products->have_posts() ) : $related_products->the_post(); ?>
                                    <?php wc_get_template_part( 'content', 'product' ); ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                }
                ?>
            </section>

        <?php endwhile; // end of the loop. ?>
    </div>
</main>

<?php get_footer(); ?>
