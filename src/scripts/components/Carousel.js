import Swiper from 'swiper/bundle';

export default class Carousel {
  constructor(element) {
    this.element = element;
    this.options = {
      slidesPerView: 1,
      margin: 0,
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      navigation: {
        nextEl: this.element.querySelector('.swiper-button-next'),
        prevEl: this.element.querySelector('.swiper-button-prev'),
      },

      breakpoints: '',
      autoplay: '',
      loop: '',
      freeMode: false,
    };

    this.init();
  }

  init() {
    this.setOptions();

    new Swiper(this.element, this.options);
  }

  setOptions() {
    const variant = this.element.dataset.variant;

    if (variant == 'freemode') {
      this.options.slidesPerView = 3;
      this.options.freeMode = true;

      this.options.breakpoints = {
        1440: {
          slidesPerView: 3.5,
        },

        768: {
          slidesPerView: 1.9,
        },

        375: {
          slidesPerView: 1,
        },
      };
    }

    if ('loop' in this.element.dataset) {
      this.options.loop = {
        loop: true,
        slidesPerView: 1,
      };

      this.options.breakpoints = {
        1440: {
          slidesPerView: 1,
        },

        768: {
          slidesPerView: 1,
        },

        375: {
          slidesPerView: 1,
        },
      };
    }

    if ('autoplay' in this.element.dataset) {
      this.options.autoplay = {
        delay: 3000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
        slidesPerView: 1,
      };
    }
  }
}
