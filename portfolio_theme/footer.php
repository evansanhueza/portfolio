<footer>
    <div class="wrapper">
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


        <?php if (get_field('legal', 'options')): ?>
            <p>&copy; <?php echo Date('Y'); ?> <?php bloginfo('name'); ?>. <?php the_field('legal', 'options'); ?>.</p>
        <?php endif; ?>
        
    </div>

</footer>
    <?php wp_footer(); ?>
</body>
</html>