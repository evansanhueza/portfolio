<?php get_header(); ?>

<section class="erreur">
    <div class="wrapper">
        <h1 data-scrolly="fromTop">Désolé! Cette page n'existe pas!</h1>
        <p data-scrolly="fromLeft">Il semble que la page que vous cherchez n'existe pas ou a été déplacée.</p>
        <p data-scrolly="fromRight">Pas de panique, vous pouvez revenir à la page d'accueil en cliquant sur le bouton ci-dessous.</p>
        <a data-scrolly="fromBottom" href="<?php echo home_url(); ?>" class="btn">Retour à l'accueil</a>
    </div>
</section>

<?php get_footer(); ?>