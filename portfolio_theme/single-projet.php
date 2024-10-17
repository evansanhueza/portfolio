<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="un_projet">

            <div class="wrapper">

                <div class="carousel swiper" data-component="Carousel" data-loop="true">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide projet1">
                            
                            <div class="bloc1" data-scrolly="fromLeft">

                                <h1 data-scrolly="fromTop"><?php the_title(); ?> (<?php the_date('Y'); ?>)</h1>

                                <?php if (get_field('contexte')) : ?>
                                    <p data-scrolly="fromBottom"><?php the_field('contexte'); ?></p>
                                <?php endif; ?>

                            </div>

                            <div class="bloc2" data-scrolly="fromRight">

                                <h2 data-scrolly="fromTop">Description</h2>

                                <div class="description" data-scrolly="fromBottom">

                                    <?php if (get_field('description')) : ?>
                                        <p data-scrolly="fromBottom"><?php the_field('description'); ?></p>
                                    <?php endif; ?>

                                    <div class="icones" data-scrolly="fromBottom">
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

                                        <div data-scrolly="fromLeft" class="explication"><p><?php the_sub_field('explication'); ?></p></div>
                                        

                                        <?php 
                                            $image = get_sub_field('image');
                                            if( !empty( $image ) ):
                                            ?>
                                                <img data-scrolly="fromRight" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>    

                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <div class="swiper-slide projet3">

                            <?php if( have_rows('groupe_video') ): ?>
                                <?php while( have_rows('groupe_video') ) : the_row(); ?>

                                    <div class="bloc_video">

                                        <div class="video" data-scrolly="fromLeft">

                                            <?php $embedcode = the_sub_field('video'); ?>
                                            <iframe class="frame" src="<?php echo $embedcode; ?>" width="600" height="350" frameborder="0"></iframe>

                                        </div> 

                                        <div class="explication" data-scrolly="fromLeft"><p><?php the_sub_field('explication_video'); ?></p></div>     

                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>      
                            
                            <div class="defis">

                                <h2 data-scrolly="fromTop">Défis techniques</h2>

                                <?php if (get_field('defis_techniques')) : ?>
                                    <p data-scrolly="fromRight"><?php the_field('defis_techniques'); ?></p>
                                <?php endif; ?>

                                <?php if (get_field('lien_projet')) : ?>
                                    <a data-scrolly="fromBottom" href="<?php the_field('lien_projet'); ?>" target="_blank"  class="btn">Voir encore plus</a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                    <!-- N'oubliez pas votre pagination -->
                    <div data-scrolly="fromBottom" class="swiper-button-prev"></div>
                    <div data-scrolly="fromBottom" class="swiper-button-next"></div>
                    <div data-scrolly="fromBottom" class="swiper-pagination"></div>
                </div>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>