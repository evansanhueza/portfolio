<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kaisei+Decol:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css" />

    <script>
       iconsPath = '<?php bloginfo('template_url') ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js" defer></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header" >
      <div class="wrapper">

        <a href="<?php bloginfo('url'); ?>" class="brand">
            <svg class="icon icon--lg">
              <use xlink:href="#icon-logo"></use>
            </svg>
        </a>

        <?php wp_nav_menu(array(
            'theme_location' => 'menu_principal',
            'container' => 'nav',
            'container_class' => 'menu',
        )); ?>

        <!-- <button class="header__toggle js-toggle">
              <span></span>
              <span></span>
              <span></span>
        </button> -->

      </div>
    </header>