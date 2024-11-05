<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="page_contact" data-scrolly="fromTop">

            <div class="wrapper">

                <div class="contact" data-scrolly="fromTop">
                    <div class="infos_contact">
                        <h3>Mon CV : <a href="<?php bloginfo('template_url'); ?>/dist/assets/sanhueza_evan_CV.pdf" download class="download">télécharger</a></h3>

                        <?php if (get_field('telephone', 'options')): ?>
                             <h3><a href="tel:+14387633339"><?php the_field('telephone', 'options'); ?></a></h3>
                        <?php endif; ?>

                        <?php if (get_field('couriel', 'options')): ?>
                            <h3><a href="mailto:evan.sanhu@gmail.com"><?php the_field('couriel', 'options'); ?></a></h3> 
                        <?php endif; ?>

                    </div>

                    <div class="icones_reseaux" data-scrolly="fromTop">
                        <?php if( have_rows('sociaux', 'options') ): ?>
                            <nav class="nav-social">
                                <ul data-scrolly="fromLeft">
                                    <?php while( have_rows('sociaux', 'options') ) : the_row(); ?>

                                        <li>
                                            <a href="<?php the_sub_field('lien', 'options'); ?>" target="_blank" class="nav__link <?php the_sub_field('nom', 'options'); ?>">
                                                <svg class="icon icon--lg">
                                                    <use xlink:href="#icon-<?php the_sub_field('nom', 'options'); ?>"></use>
                                                </svg>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form" data-scrolly="fromRight">

                    <?php the_content(); ?>
                    
                </div>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>