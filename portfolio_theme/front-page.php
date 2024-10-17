<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="overlay" data-component="Loading">
            <div class="overlayDoor"></div>
            <div class="overlayContent">
                <div class="loader">
                    <div class="inner"></div>
                </div>
                <h1 class="loading-title">Bienvenue sur mon site !</h1>
            </div>
        </div>

        <section class="accueil">

            <div class="wrapper">

                <div class="video_boite">

                    <a data-scrolly="fromLeft" href="<?php echo get_permalink(get_page_by_path('a-propos')); ?>" class="titre">
                        <?php if (get_field('nom', 'options')): ?>
                            <h1><?php the_field('nom', 'options'); ?></h1> 
                        <?php endif; ?>
                        <?php if (get_field('profession', 'options')): ?>
                            <h2><?php the_field('profession', 'options'); ?></h2> 
                        <?php endif; ?>
                    </a>

                    <video class="video" autoplay muted loop data-scrolly="fromBottom">
                        <source src="<?php bloginfo('template_url'); ?>/dist/assets/video/demo_projets.mp4" type="video/mp4">
                    </video>

                    <a data-scrolly="fromRight" href="<?php echo get_permalink(get_page_by_path('projets')); ?>"  class="btn">Voir mes projets</a>

                </div>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>