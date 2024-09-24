export default class Loading {
  constructor() {
    this.init();
  }

  init() {
    document.addEventListener('DOMContentLoaded', function () {
      const overlay = document.querySelector('.overlay');
      const body = document.body;
      const skipButton = document.querySelector('.skip');

      // Pas de disparition automatique, l'utilisateur doit cliquer sur "Skip"
      if (skipButton) {
        skipButton.addEventListener('click', function () {
          overlay.classList.add('loaded');
          body.classList.add('loaded');
          setTimeout(function () {
            overlay.style.display = 'none';
          }, 2000); // Disparition rapide après avoir cliqué sur "Skip"
        });
      }
    });
  }
}
