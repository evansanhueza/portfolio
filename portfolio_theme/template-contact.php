<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="section">

            <div class="wrapper">

                <div class="contact">
                    <div class="infos_contact">
                        Mon cv: <a href="" download>télécharger</a>

                        <?php if (get_field('telephone', 'options')): ?>
                             <a href="tel:+14387633339"><?php the_field('telephone', 'options'); ?></a>
                        <?php endif; ?>

                        <?php if (get_field('couriel', 'options')): ?>
                            <a href="mailto:evan.sanhu@gmail.com"><?php the_field('couriel', 'options'); ?></a>
                        <?php endif; ?>

                    </div>

                    <div class="icones_reseaux">

                    </div>
                </div>

                <div class="form">
                    <?php the_content(); ?>
                </div>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>