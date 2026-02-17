<?php
/**
 * The template for displaying all pages
 *
 * @package flavor-press
 */

get_header(); ?>

<main class="section section--warm" id="main-content">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( ! is_cart() && ! is_checkout() && ! is_account_page() ) : ?>
                    <header class="entry-header section__header" style="margin-bottom: var(--space-2xl);">
                        <h1 class="entry-title section__title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'flavor-press' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>

            </article>
        <?php
        endwhile; // End of the loop.
        ?>
    </div>
</main>

<?php get_footer(); ?>
