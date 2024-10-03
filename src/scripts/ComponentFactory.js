import Carousel from './components/Carousel';
import Loading from './components/Loading';
import Fading from './components/Fading';

export default class ComponentFactory {
  constructor() {
    this.componentInstances = [];
    this.componentList = {
      Carousel,
      Loading,
      Fading,
    };
    this.init();
  }
  init() {
    const components = document.querySelectorAll('[data-component]');

    for (let i = 0; i < components.length; i++) {
      const element = components[i];
      const componentName = element.dataset.component;

      if (this.componentList[componentName]) {
        const instance = new this.componentList[componentName](element);
        this.componentInstances.push(instance);
      } else {
        console.log(`La composante ${componentName} n'existe pas`);
      }
    }
  }
}
