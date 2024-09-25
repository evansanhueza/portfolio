<?php
/* Template Name: Propos */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="section">

            <div class="wrapper">

                <div class="carousel swiper" data-component="Carousel">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <?php the_post_thumbnail(); ?>
                            <div>
                                <?php if (get_field('nom', 'options')): ?>
                                    <h1><?php the_field('nom', 'options'); ?></h1> 
                                <?php endif; ?>

                                <?php if (get_field('courte_description', 'options')): ?>
                                    <h3><?php the_field('courte_description', 'options'); ?></h3> 
                                <?php endif; ?>

                                <?php if (get_field('profession', 'options')): ?>
                                    <h2><?php the_field('profession', 'options'); ?></h2> 
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <?php if (get_field('canditature', 'options')): ?>
                                <h3><?php the_field('canditature', 'options'); ?></h3> 
                            <?php endif; ?>

                            <div class="icones_passions">

                            </div>
                            
                            <?php if (get_field('passions', 'options')): ?>
                                <h3><?php the_field('passions', 'options'); ?></h3> 
                            <?php endif; ?>
                        </div>

                        

                    </div>

                    <!-- N'oubliez pas votre pagination -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>

                </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>