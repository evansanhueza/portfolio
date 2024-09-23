import Swiper from 'swiper/bundle';

export default class Carousel {
  constructor(element) {
    this.element = element;
    this.options = {
      slidesPerView: 1,
      margin: 0,
      pagination: {
        el: this.element.querySelector('.swiper-pagination'),
        type: 'bullets',
      },
      navigation: {
        nextEl: this.element.querySelector('.swiper-button-next'),
        prevEl: this.element.querySelector('.swiper-button-prev'),
      },
      breakpoints: '',
      autoplay: '',
      loop: '',
    };

    this.init();
  }

  init() {
    this.setOptions();

    new Swiper(this.element, this.options);
  }

  setOptions() {
    const variant = this.element.dataset.variant;

    if (variant == 'split') {
      this.options.loop = {
        loop: true,
      };
      this.options.breakpoints = {
        768: {
          slidesPerView: 2.5,
        },
      };
    }
    if (variant == 'split2') {
      this.options.loop = {
        loop: false,
      };
      this.options.breakpoints = {
        768: {
          slidesPerView: 2,
        },
      };
    }
    if ('autoplay' in this.element.dataset) {
      this.options.autoplay = {
        delay: 5000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
      };
    }

    if ('loop' in this.element.dataset) {
      this.options.loop = {
        loop: true,
      };
    }

    // if ('slidePerView' in this.element.dataset) {
    //   this.options.slidesPerView = this.element.dataset.slidesPerView;
    // }

    // if ('wheels' in this.element.dataset) {
    //   this.options.wheels = parseInt(this.element.dataset.wheels);
    // }
  }
}
