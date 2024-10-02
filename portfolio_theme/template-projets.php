<?php
/* Template Name: Projets */
?>

<?php get_header(); ?>

        <section class="grille_projets">

            <div class="wrapper">

                <div class="carousel swiper" data-component="Carousel" data-loop="true">

                    <?php 
                        $args = array(
                            'post_type' => 'projet',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'order' => 'DESC',
                            'orderby' => 'date',
                        );

                        $query = new WP_Query( $args );
                    ?>

                    <div class="swiper-wrapper">

                        <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="swiper-slide projet_presentation">

                                    <div class="bloc_image">
                                        <a href="<?php the_permalink(); ?>"  class="btn">Voir plus</a>
                                        <?php the_post_thumbnail(); ?>
                                    </div>

                                    <div class="bloc_infos">
                                        <h2><?php the_title(); ?> (<?php the_date('Y'); ?>)</h2>

                                        <div class="boite_resume">

                                            <?php if (get_field('resume')) : ?>
                                                <h3><?php the_field('resume'); ?></h3>
                                            <?php endif; ?>

                                            <div class="icones">
                                                <?php if( have_rows('logiciels') ): ?>
                                                    <nav class="nav-logi">
                                                        <ul>
                                                            <?php while( have_rows('logiciels') ) : the_row(); ?>

                                                                <li>
                                                                    <svg class="icon icon--lg">
                                                                        <use xlink:href="#icon-<?php the_sub_field('nom'); ?>"></use>
                                                                    </svg>
                                                                </li>
                                                            <?php endwhile; ?>
                                                        </ul>
                                                    </nav>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                               
                                </div> 
                        
                            <?php endwhile; ?>

                        <?php else : ?>
                            <p>Aucun projet trouvé.</p>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

                    <!-- N'oubliez pas votre pagination -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
            
        </section>

<?php get_footer(); ?>