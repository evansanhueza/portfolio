<?php
/* Template Name: Propos */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="a_propos">

            <div class="wrapper">

                <div class="carousel swiper" data-component="Carousel">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide propos1">
                            <div class="propos_img">
                                <?php the_post_thumbnail(); ?>

                                <?php if (get_field('profession', 'options')): ?>
                                    <h2><?php the_field('profession', 'options'); ?></h2> 
                                <?php endif; ?>
                            </div>
                            
                            <div class="infos_moi">
                                <?php if (get_field('nom', 'options')): ?>
                                    <h1><?php the_field('nom', 'options'); ?></h1> 
                                <?php endif; ?>

                                <?php if (get_field('courte_description', 'options')): ?>
                                    <h3><?php the_field('courte_description', 'options'); ?></h3> 
                                <?php endif; ?>

                            </div>
                            
                        </div>

                        <div class="swiper-slide propos2">
                            <?php if (get_field('canditature', 'options')): ?>
                                <h3><?php the_field('canditature', 'options'); ?></h3> 
                            <?php endif; ?>

                            <div class="icones_passions">

                                <svg class="icon icon--lg">
                                    <use xlink:href="#icon-logo"></use>
                                </svg>

                                <svg class="icon icon--lg">
                                    <use xlink:href="#icon-logo"></use>
                                </svg>

                                <svg class="icon icon--lg">
                                    <use xlink:href="#icon-logo"></use>
                                </svg>

                                <svg class="icon icon--lg">
                                    <use xlink:href="#icon-logo"></use>
                                </svg>

                            </div>
                            
                            <?php if (get_field('passions', 'options')): ?>
                                <h3><?php the_field('passions', 'options'); ?></h3> 
                            <?php endif; ?>
                        </div>

                        <div class="swiper-slide propos3">

                                <div class="bloc1">

                                    <h2>Ce que je suis</h2>

                                    <ul class="je_suis">



                                    </ul>

                                </div>

                                <div class="ligne"></div>

                                <div class="bloc2">

                                    <h2>Ce que je peux faire</h2>

                                    <div class="je_fais">

                                        <ul class="talents">

                                        
                                        </ul>

                                        <ul class="talents_icones">

                                        
                                        </ul>

                                    </div>

                                </div>
                            
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