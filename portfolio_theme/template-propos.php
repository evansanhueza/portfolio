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
                            <div class="propos_img">
                                <?php if (get_field('profession', 'options')): ?>
                                    <h2><?php the_field('profession', 'options'); ?></h2> 
                                <?php endif; ?>

                                <?php the_post_thumbnail(); ?>
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

                            <h2>Un petit résumé de moi</h2>

                            <div class="propos2_cont">

                                

                                <?php if (get_field('canditature', 'options')): ?>
                                    <h3><?php the_field('canditature', 'options'); ?></h3> 
                                <?php endif; ?>

                                <div class="icones_passions">

                                    <svg class="icon icon--lg">
                                        <use xlink:href="#icon-3d"></use>
                                    </svg>

                                    <svg class="icon icon--lg">
                                        <use xlink:href="#icon-manette"></use>
                                    </svg>

                                    <svg class="icon icon--lg">
                                        <use xlink:href="#icon-camera"></use>
                                    </svg>

                                    <svg class="icon icon--lg">
                                        <use xlink:href="#icon-livre"></use>
                                    </svg>

                                </div>
                                
                                <?php if (get_field('passions', 'options')): ?>
                                    <h3><?php the_field('passions', 'options'); ?></h3> 
                                <?php endif; ?>
                                
                            </div>   

                            
                        </div>

                        <div class="swiper-slide propos3">

                                <div class="bloc1">

                                    <h2>Mes qualités</h2>

                                    <ul class="je_suis">

                                        <li><h3>Sociable</h3></li>
                                        <li><h3>Organisé</h3></li>
                                        <li><h3>Bon en équipe</h3></li>
                                        <li><h3>Ouvert aux critiques</h3></li>

                                    </ul>

                                </div>

                                <div class="ligne"></div>

                                <div class="bloc2">

                                    <h2>Mes compétences</h2>

                                    <div class="je_fais">

                                        <ul class="talents">

                                            <li><h3>Modélisation/animation 3D (Blender)</h3></li>
                                            <li><h3>Montage vidéo/sonore (adobe After Effects/Premiere Pro, Reaper)</h3></li>
                                            <li><h3>Programmation/design web (HTML, CSS, PHP/Mysql, figma)</h3></li>
                                        
                                        </ul>

                                        <ul class="talents_icones">

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
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>

                </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>