<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css" />

    <script>
       iconsPath = '<?php bloginfo('template_url') ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js" defer></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>  data-component="Scrolly" data-no-repeat>
    
    <div data-component="Cursor" class="cursor"></div>
    <div class="cursor2"></div>

    <header class="header" data-component="Header">
      <div class="wrapper">

        <a href="<?php bloginfo('url'); ?>" class="brand">
            <svg data-scrolly="fromLeft" class="icon icon--logo">
              <use xlink:href="#icon-logo"></use>
            </svg>
        </a>

        <?php wp_nav_menu(array(
            'theme_location' => 'menu_principal',
            'container' => 'nav',
            'container_class' => 'menu',
        )); ?>

        <button class="header__toggle js-toggle">
              <span></span>
              <span></span>
              <span></span>
        </button>

      </div>
    </header>