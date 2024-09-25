<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="overlay" data-component="Loading">
            <div class="overlayDoor"></div>
            <div class="overlayContent">
                <div class="loader">
                    <div class="inner"></div>
                </div>
                <div class="skip">Entrer dans mon site</div>
            </div>
        </div>

        <section class="accueil">

            <div class="wrapper">

                <div class="titre">
                    <?php if (get_field('nom', 'options')): ?>
                        <h1><?php the_field('nom', 'options'); ?></h1> 
                    <?php endif; ?>
                    <?php if (get_field('profession', 'options')): ?>
                        <h2><?php the_field('profession', 'options'); ?></h2> 
                    <?php endif; ?>
                </div>

                <video class="video" autoplay muted loop>
                    <source src="<?php bloginfo('template_url'); ?>/dist/assets/video/demo_projets.mp4" type="video/mp4">
                </video>

                <a href="<?php echo get_permalink(get_page_by_path('projets')); ?>"  class="btn">Voir mes projets</a>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>