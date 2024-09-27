<?php get_header(); ?>

<section class="erreur">
    <div class="wrapper">
        <h1>Désolé! Cette page n'existe pas!</h1>
        <p>Il semble que la page que vous cherchez n'existe pas ou a été déplacée.</p>
        <p>Pas de panique, vous pouvez revenir à la page d'accueil en cliquant sur le bouton ci-dessous.</p>
        <a href="<?php echo home_url(); ?>" class="btn">Retour à l'accueil</a>
    </div>
</section>

<?php get_footer(); ?>