<?php
/**
 * Template Name: Our Story
 * 
 * Custom template for the "Our Story" page.
 * 
 * @package flavor-press
 */

get_header(); ?> 

<main id="main-content">
    
    <!-- Hero Section -->
    <section class="about-hero section section--dark" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/story-bg.jpg'); background-size: cover; background-position: center; min-height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="container animate-on-scroll">
            <span class="section__label" style="color: var(--color-primary); letter-spacing: 0.2em;">Since 2015</span>
            <h1 class="hero__title" style="font-size: var(--font-size-5xl); margin-bottom: var(--space-lg); color: var(--color-white);">Crafting Audacious Flavors</h1>
            <p class="hero__subtitle" style="font-size: var(--font-size-xl); max-width: 700px; margin: 0 auto; color: var(--color-white); opacity: 0.9;">From a small family kitchen to tables around the world, our journey is fueled by passion and a pinch of heat.</p>
        </div>
    </section>

    <!-- Origins / Timeline -->
    <section class="section section--warm" id="origins">
        <div class="container">
            <div class="row" style="display: flex; gap: var(--space-4xl); align-items: center; flex-wrap: wrap;">
                <div class="col-md-6 animate-on-scroll" style="flex: 1; min-width: 300px;">
                    <span class="section__label">The Beginning</span>
                    <h2 class="section__title">Where It All Started</h2>
                    <div class="content-block" style="font-size: var(--font-size-lg); line-height: 1.8;">
                        <p>It began with a simple idea: sauces shouldn't just be condiments; they should be the star of the show. Frustrated by bland, mass-produced options, our founder set out to recreate the bold, authentic flavors of their childhood home cooking.</p>
                        <p>Armed with family recipes passed down through generations and a relentless pursuit of the perfect balance between heat and flavor, GFI was born.</p>
                    </div>
                </div>
                <div class="col-md-6 animate-on-scroll delay-1" style="flex: 1; min-width: 300px;">
                    <div class="image-wrapper" style="position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-xl); transform: rotate(2deg);">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitchen-origin.jpg" alt="Our Original Kitchen" style="width: 100%; height: auto; display: block;">
                        <!-- Fallback gradient if image missing -->
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); opacity: 0.8; z-index: -1;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="section section--light">
        <div class="container">
            <div class="section__header text-center animate-on-scroll">
                <span class="section__label">Our Philosophy</span>
                <h2 class="section__title">What We Stand For</h2>
            </div>
            
            <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--space-2xl); margin-top: var(--space-3xl);">
                <!-- Value 1 -->
                <div class="value-card animate-on-scroll delay-1" style="background: var(--color-white); padding: var(--space-2xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; transition: transform 0.3s ease;">
                    <div class="value-icon" style="font-size: 3rem; margin-bottom: var(--space-md);">🌿</div>
                    <h3 class="value-title" style="font-family: var(--font-heading); font-size: var(--font-size-xl); margin-bottom: var(--space-md); color: var(--color-secondary);">100% Natural</h3>
                    <p>No artificial preservatives or colors. Just real ingredients for real flavor.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="value-card animate-on-scroll delay-2" style="background: var(--color-white); padding: var(--space-2xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; transition: transform 0.3s ease;">
                    <div class="value-icon" style="font-size: 3rem; margin-bottom: var(--space-md);">🔥</div>
                    <h3 class="value-title" style="font-family: var(--font-heading); font-size: var(--font-size-xl); margin-bottom: var(--space-md); color: var(--color-secondary);">Bold Flavors</h3>
                    <p>We don't do boring. Every sauce packs a punch tailored to excite your palate.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="value-card animate-on-scroll delay-3" style="background: var(--color-white); padding: var(--space-2xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; transition: transform 0.3s ease;">
                    <div class="value-icon" style="font-size: 3rem; margin-bottom: var(--space-md);">🤝</div>
                    <h3 class="value-title" style="font-family: var(--font-heading); font-size: var(--font-size-xl); margin-bottom: var(--space-md); color: var(--color-secondary);">Community First</h3>
                    <p>Sourced locally whenever possible, supporting farmers and growers we know by name.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder / Team -->
    <section class="section section--warm" id="team">
        <div class="container text-center">
            <div class="founder-bio animate-on-scroll" style="max-width: 800px; margin: 0 auto;">
                <div class="founder-image" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto var(--space-lg); border: 4px solid var(--color-primary); box-shadow: var(--shadow-lg);">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder.jpg" alt="Founder" style="width: 100%; height: 100%; object-fit: cover;">
                     <!-- Fallback -->
                     <div style="width: 100%; height: 100%; background: var(--color-secondary);"></div>
                </div>
                <blockquote style="font-size: var(--font-size-2xl); font-family: var(--font-heading); color: var(--color-secondary); font-style: italic; margin-bottom: var(--space-lg);">
                    "Food is the universal language, and sauce is its accent. We want to make sure every meal speaks fluently."
                </blockquote>
                <cite style="font-style: normal; font-weight: bold; color: var(--color-primary-dark);">- The Founder</cite>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section" style="position: relative; padding: var(--space-4xl) 0; text-align: center; color: var(--color-white); overflow: hidden;">
        <!-- Background Image with Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 67, 34, 0.85), rgba(10, 67, 34, 0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/story-bg.jpg'); background-size: cover; background-position: center; z-index: -1;"></div>
        
        <div class="container animate-on-scroll">
            <span class="section__label" style="color: var(--color-primary); letter-spacing: 0.2em; margin-bottom: var(--space-sm); display: block;">Ready to Get Saucy?</span>
            <h2 class="section__title" style="font-size: var(--font-size-4xl); margin-bottom: var(--space-md); color: var(--color-white);">Taste the Tradition</h2>
            <p style="font-size: var(--font-size-xl); max-width: 600px; margin: 0 auto var(--space-2xl); opacity: 0.9;">Join the thousands who have elevated their meals with GFI. Honest ingredients, unforgettable flavor.</p>
            <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="btn btn--primary btn--lg">Shop Our Collections</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
