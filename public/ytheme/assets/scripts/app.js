'use strict'

import Search from './modules/search';

class App {
  constructor() {
    this.initMaterial();
    this.search = new Search();
  }

  initMaterial() {
    //return $.material.init();
  }
}

new App();

