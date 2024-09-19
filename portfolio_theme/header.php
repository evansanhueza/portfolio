<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css" />

    <script>
      // À décommenter lorsque rendu dans le fichier .php pour que les icônes fonctionnent dans WP
       iconsPath = '<?php bloginfo('template_url') ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js" defer></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header" data-component="Header">
     
      <a href="<?php bloginfo('url'); ?>" class="brand">
          <svg class="icon icon--md">
            <use xlink:href="#icon-logo"></use>
          </svg>
          <?php bloginfo('name'); ?>
      </a>

      <?php wp_nav_menu(array(
          'theme_location' => 'menu_principal',
          'container' => 'nav',
          'menu_class' => 'nav__menu',
      )); ?>


    <button class="header__toggle js-toggle">
          <span></span>
          <span></span>
          <span></span>
    </button>

  </header>