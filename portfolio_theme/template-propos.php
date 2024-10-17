<?php
/* Template Name: Propos */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="a_propos">

            <div class="wrapper">

                <div class="carousel swiper" data-component="Carousel" data-loop="true">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide propos1">
                            <div class="propos_img" data-scrolly="fromLeft">
                                <?php the_post_thumbnail(); ?>

                                <?php if (get_field('profession', 'options')): ?>
                                    <h2><?php the_field('profession', 'options'); ?></h2> 
                                <?php endif; ?>
                            </div>
                            
                            <div class="infos_moi" data-scrolly="fromRight">
                                <?php if (get_field('nom', 'options')): ?>
                                    <h1><?php the_field('nom', 'options'); ?></h1> 
                                <?php endif; ?>

                                <?php if (get_field('courte_description', 'options')): ?>
                                    <h3><?php the_field('courte_description', 'options'); ?></h3> 
                                <?php endif; ?>

                                <?php if (get_field('presentation', 'options')): ?>
                                    <h3><a href="<?php the_field('presentation', 'options'); ?>" target="_blank">Vidéo de présentation</a></h3> 
                                <?php endif; ?>

                            </div>
                            
                        </div>

                        <div class="swiper-slide propos2">

                            <h2 data-scrolly="fromTop">Un petit résumé de moi</h2>

                            <div class="propos2_cont">

                                

                                <?php if (get_field('canditature', 'options')): ?>
                                    <h3 data-scrolly="fromTop"><?php the_field('canditature', 'options'); ?></h3> 
                                <?php endif; ?>

                                <div class="icones_passions">

                                    <svg class="icon icon--lg" data-scrolly="fromLeft">
                                        <use xlink:href="#icon-3d"></use>
                                    </svg>

                                    <svg class="icon icon--lg" data-scrolly="fromLeft">
                                        <use xlink:href="#icon-manette"></use>
                                    </svg>

                                    <svg class="icon icon--lg" data-scrolly="fromRight">
                                        <use xlink:href="#icon-camera"></use>
                                    </svg>

                                    <svg class="icon icon--lg" data-scrolly="fromRight">
                                        <use xlink:href="#icon-livre"></use>
                                    </svg>

                                </div>
                                
                                <?php if (get_field('passions', 'options')): ?>
                                    <h3 data-scrolly="fromBottom"><?php the_field('passions', 'options'); ?></h3> 
                                <?php endif; ?>
                                
                            </div>   

                            
                        </div>

                        <div class="swiper-slide propos3">

                                <div class="bloc1">

                                    <h2>Mes qualités</h2>

                                    <ul class="je_suis">

                                        <li data-scrolly="fromBottom"><h3>Sociable</h3></li>
                                        <li data-scrolly="fromBottom"><h3>Organisé</h3></li>
                                        <li data-scrolly="fromBottom"><h3>Bon en équipe</h3></li>

                                    </ul>

                                </div>

                                <div class="ligne" data-scrolly="fromBottom"></div>

                                <div class="bloc2">

                                    <h2 data-scrolly="fromTop">Mes compétences</h2>

                                    <div class="je_fais">

                                        <ul class="talents">

                                            <li data-scrolly="fromLeft"><h3>Modélisation/animation 3D (Blender)</h3></li>
                                            <li data-scrolly="fromLeft"><h3>Montage vidéo/sonore (suite Adobe, Reaper)</h3></li>
                                            <li data-scrolly="fromLeft"><h3>Programmation/design web (HTML/CSS, PHP/Mysql, figma)</h3></li>
                                        
                                        </ul>

                                        <ul class="talents_icones" data-scrolly="fromRight">

                                            <li>
                                                <svg class="icon icon--lg">
                                                    <use xlink:href="#icon-blender"></use>
                                                </svg>
                                            </li>

                                            <li>
                                                <svg class="icon icon--lg">
                                                    <use xlink:href="#icon-adobe"></use>
                                                </svg>
                                            </li>

                                            <li>
                                                <svg class="icon icon--lg">
                                                    <use xlink:href="#icon-html"></use>
                                                </svg>
                                            </li>

                                            <li>
                                                <svg class="icon icon--lg">
                                                    <use xlink:href="#icon-figma"></use>
                                                </svg>
                                            </li>
                                        
                                        </ul>

                                    </div>

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