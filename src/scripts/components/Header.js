export default class Header {
  constructor(element) {
    this.element = element;

    this.html = document.documentElement;

    this.init();
    this.initNavMobile();
  }

  init() {}

  initNavMobile() {
    const toggle = this.element.querySelector('.js-toggle');

    toggle.addEventListener('click', this.onToggleNav.bind(this));
  }

  onToggleNav() {
    this.html.classList.toggle('nav-is-active');
  }
}
