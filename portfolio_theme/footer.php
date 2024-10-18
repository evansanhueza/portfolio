<footer data-scrolly="fromBottom">

    <div class="wrapper">

       <p class="footer_txt">Tous droits réservés © <?php echo Date('Y'); ?> <?php bloginfo('name'); ?></p> 

       <div class="footer_reseaux" data-scrolly="fromTop">
            <?php if( have_rows('sociaux', 'options') ): ?>
                <nav class="nav-social">
                    <ul data-scrolly="fromLeft">
                        <?php while( have_rows('sociaux', 'options') ) : the_row(); ?>

                            <li>
                                <a href="<?php the_sub_field('lien', 'options'); ?>" target="_blank" class="nav__link <?php the_sub_field('nom', 'options'); ?>">
                                    <svg class="icon icon--md">
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

</footer>
    <?php wp_footer(); ?>
</body>
</html>