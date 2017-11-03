'use strict'

import { ENV } from './env'
import { ENV_VARS } from './const.js';

import Search from './modules/search'
import Spinner from './modules/spinner'
import Downloader from './modules/downloader'
import YtItem from './modules/yt-item';
import Ads from './modules/ads';
import Events from './modules/events';

class App {
  constructor() {

    document.addEventListener('touchstart', evt => {}, {passive: true});

    this.initMaterial();
    this.env = ENV_VARS[ENV];
    this.ads = new Ads(this.env);
    this.events = new Events();
    this.search = new Search(this.env, this.events);
    this.downloader = new Downloader(this.env, this.ads);
    this.downloader.attach('.download-items');
    this.ytItem = new YtItem();
    this.ytItem.init('.youtube-items__container');
  }

  initMaterial() {
    //return $.material.init();
  }
}

new App();

