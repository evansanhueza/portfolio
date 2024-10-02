<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="un_projet">

            <div class="wrapper">

                <div class="carousel swiper" data-component="Carousel" data-loop="true">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide projet1">
                            
                            <div class="bloc1">

                                <h1><?php the_title(); ?> (<?php the_date('Y'); ?>)</h1>

                                <?php if (get_field('description')) : ?>
                                    <h3><?php the_field('description'); ?></h3>
                                <?php endif; ?>

                            </div>

                            <div class="bloc2">

                                <h2>Description</h2>

                                <div class="description">

                                    <?php if (get_field('description')) : ?>
                                        <h3><?php the_field('description'); ?></h3>
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

                        <div class="swiper-slide projet2">
                            <?php if( have_rows('galerie') ): ?>
                                <?php while( have_rows('galerie') ) : the_row(); ?>

                                    <div class="galerie">

                                        <p><?php the_sub_field('explication'); ?></p>

                                        <?php 
                                            $image = get_sub_field('image');
                                            if( !empty( $image ) ):
                                            ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>    

                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <div class="swiper-slide projet3">

                            <?php if( have_rows('groupe_image') ): ?>
                                <?php while( have_rows('groupe_image') ) : the_row(); ?>

                                    <div class="img_solo">

                                        <p><?php the_sub_field('explication_seule'); ?></p>

                                        <?php 
                                            $image = get_sub_field('image_seule');
                                            if( !empty( $image ) ):
                                            ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>    

                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>      
                            
                            <div class="defis">

                                <h2>Défis techniques</h2>

                                <?php if (get_field('defis_techniques')) : ?>
                                    <h3><?php the_field('defis_techniques'); ?></h3>
                                <?php endif; ?>

                                <a href=""  class="btn">Voir plus</a>

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