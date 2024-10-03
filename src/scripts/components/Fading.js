export default class Fading {
  constructor() {
    this.init();
  }

  init() {
    console.log('fadiiiiiiiiiing awaaaaaaaayyyyyyy');

    document.addEventListener('DOMContentLoaded', function () {
      // Appliquer la classe fade-in lorsque la page est chargée
      document.body.classList.add('fade-in');

      // Ajouter un événement sur les liens pour appliquer la transition
      const links = document.querySelectorAll('a');

      links.forEach((link) => {
        link.addEventListener('click', function (e) {
          // Vérifier que le lien mène à une autre page du même domaine
          if (link.hostname === window.location.hostname) {
            e.preventDefault();
            const url = link.href;

            // Appliquer la classe fade-out avant de naviguer
            document.body.classList.add('fade-out');

            // Attendre la fin de l'animation avant de changer de page
            setTimeout(function () {
              window.location = url;
            }, 500); // correspond à la durée de l'animation CSS (0.5s)
          }
        });
      });
    });
  }
}
