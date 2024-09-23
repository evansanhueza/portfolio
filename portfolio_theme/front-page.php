<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="accueil">

            <div class="wrapper">

                <div class="titre">
                    <h1>Évan Sanhueza</h1>
                    <h2>Apprenti artiste 3D</h2>
                </div>

                <?php the_content(); ?>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>