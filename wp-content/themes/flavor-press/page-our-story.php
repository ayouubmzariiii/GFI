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
            <span class="section__label" style="color: var(--color-primary); letter-spacing: 0.2em;">Depuis 2015</span>
            <h1 class="hero__title" style="font-size: var(--font-size-5xl); margin-bottom: var(--space-lg); color: var(--color-white);">Créateurs de Saveurs Audacieuses</h1>
            <p class="hero__subtitle" style="font-size: var(--font-size-xl); max-width: 700px; margin: 0 auto; color: var(--color-white); opacity: 0.9;">D'une petite cuisine familiale aux tables du monde entier, notre voyage est alimenté par la passion et une pincée de piquant.</p>
        </div>
    </section>

    <!-- Origins / Timeline -->
    <section class="section section--warm" id="origins">
        <div class="container">
            <div class="row" style="display: flex; gap: var(--space-4xl); align-items: center; flex-wrap: wrap;">
                <div class="col-md-6 animate-on-scroll" style="flex: 1; min-width: 300px;">
                    <span class="section__label">Le Début</span>
                    <h2 class="section__title">Où Tout a Commencé</h2>
                    <div class="content-block" style="font-size: var(--font-size-lg); line-height: 1.8;">
                        <p>Tout a commencé par une idée simple : les sauces ne devraient pas être de simples condiments, elles devraient être la star du repas. Frustré par les options fades et produites en masse, notre fondateur a entrepris de recréer les saveurs authentiques et audacieuses de la cuisine familiale de son enfance.</p>
                        <p>Armé de recettes familiales transmises de génération en génération et d'une quête inlassable de l'équilibre parfait entre piquant et saveur, GFI est né.</p>
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
                <span class="section__label">Notre Philosophie</span>
                <h2 class="section__title">Nos Valeurs</h2>
            </div>
            
            <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--space-2xl); margin-top: var(--space-3xl);">
                 <!-- Value 1 -->
                <div class="value-card animate-on-scroll delay-1" style="background: var(--color-white); padding: var(--space-2xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; transition: transform 0.3s ease;">
                    <div class="value-icon" style="font-size: 3rem; margin-bottom: var(--space-md);">🌿</div>
                    <h3 class="value-title" style="font-family: var(--font-heading); font-size: var(--font-size-xl); margin-bottom: var(--space-md); color: var(--color-secondary);">100% Naturel</h3>
                    <p>Sans conservateurs ni colorants artificiels. Juste de vrais ingrédients pour une vraie saveur.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="value-card animate-on-scroll delay-2" style="background: var(--color-white); padding: var(--space-2xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; transition: transform 0.3s ease;">
                    <div class="value-icon" style="font-size: 3rem; margin-bottom: var(--space-md);">🔥</div>
                    <h3 class="value-title" style="font-family: var(--font-heading); font-size: var(--font-size-xl); margin-bottom: var(--space-md); color: var(--color-secondary);">Saveurs Audacieuses</h3>
                    <p>Nous ne faisons pas dans l'ennui. Chaque sauce a du punch, conçue pour exalter votre palais.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="value-card animate-on-scroll delay-3" style="background: var(--color-white); padding: var(--space-2xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; transition: transform 0.3s ease;">
                    <div class="value-icon" style="font-size: 3rem; margin-bottom: var(--space-md);">🤝</div>
                    <h3 class="value-title" style="font-family: var(--font-heading); font-size: var(--font-size-xl); margin-bottom: var(--space-md); color: var(--color-secondary);">La Communauté d'Abord</h3>
                    <p>Approvisionnement local autant que possible, soutenant les agriculteurs et producteurs que nous connaissons par leur nom.</p>
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
                    "La nourriture est le langage universel, et la sauce est son accent. Nous voulons nous assurer que chaque repas parle couramment."
                </blockquote>
                <cite style="font-style: normal; font-weight: bold; color: var(--color-primary-dark);">- Le Fondateur</cite>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section" style="position: relative; padding: var(--space-4xl) 0; text-align: center; color: var(--color-white); overflow: hidden;">
        <!-- Background Image with Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 67, 34, 0.85), rgba(10, 67, 34, 0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/story-bg.jpg'); background-size: cover; background-position: center; z-index: -1;"></div>
        
        <div class="container animate-on-scroll">
            <span class="section__label" style="color: var(--color-primary); letter-spacing: 0.2em; margin-bottom: var(--space-sm); display: block;">Prêt à Relever le Goût ?</span>
            <h2 class="section__title" style="font-size: var(--font-size-4xl); margin-bottom: var(--space-md); color: var(--color-white);">Goûtez la Tradition</h2>
            <p style="font-size: var(--font-size-xl); max-width: 600px; margin: 0 auto var(--space-2xl); opacity: 0.9;">Rejoignez les milliers de personnes qui ont sublimé leurs repas avec GFI. Des ingrédients honnêtes, une saveur inoubliable.</p>
            <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="btn btn--primary btn--lg">Voir Nos Collections</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
