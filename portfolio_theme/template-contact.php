<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <section class="page_contact">

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
                        <?php if( have_rows('sociaux', 'options') ): ?>
                            <nav class="nav-social">
                                <ul>
                                    <?php while( have_rows('sociaux', 'options') ) : the_row(); ?>

                                        <li>
                                            <a href="<?php the_sub_field('lien', 'options'); ?>" class="nav__link <?php the_sub_field('nom', 'options'); ?>">
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

                <div class="form">
                    <?php the_content(); ?>
                </div>

            </div>
            
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>