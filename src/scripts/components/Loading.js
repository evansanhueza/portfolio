export default class Loading {
  constructor() {
    this.init();
  }

  init() {
    document.addEventListener('DOMContentLoaded', function () {
      const overlay = document.querySelector('.overlay');
      const body = document.body;
      const skipButton = document.querySelector('.skip');

      // Fonction pour cacher l'overlay après l'animation
      function hideOverlay() {
        overlay.classList.add('loaded');
        body.classList.add('loaded');

        // Attendre la fin de l'animation avant de cacher l'overlay
        setTimeout(() => {
          overlay.style.display = 'none'; // Cache l'overlay après l'animation
        }, 3000); // Adapter cette durée à la durée de l'animation CSS
      }

      // Vérifier si c'est la première visite de la session sur la page d'accueil
      if (!sessionStorage.getItem('hasVisited')) {
        // Si c'est la première visite dans cette session, montrer l'overlay
        overlay.style.display = 'block';

        // Gestion du clic sur "Skip"
        if (skipButton) {
          skipButton.addEventListener('click', hideOverlay);
        }

        // Stocker que l'utilisateur a visité la page d'accueil pour cette session
        sessionStorage.setItem('hasVisited', 'true');
      } else {
        // Si ce n'est pas la première visite dans cette session, ne pas afficher l'overlay
        overlay.style.display = 'none';
      }
    });
  }
}
