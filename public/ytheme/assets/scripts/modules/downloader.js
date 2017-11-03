'use strict';

import { makeQuery } from './utils';
import Spinner from './spinner';

class Downloader
{
  constructor(env, addHandler) {
    this.env = env;
    this.addHandler = addHandler;

    this.go = this.go.bind(this);
    this.selectAll = this.selectAll.bind(this);
    this.deselectAll = this.deselectAll.bind(this);
  }

  go(el) {
    const allItems = Array.from(document.querySelectorAll('.youtube-item.checked'));
    const allItemIds = allItems.map(item => item.dataset.position);

    const spinner = new Spinner('.wrapper--app__content .loader');
    spinner.show();
    this.addHandler.go()
      .then(body => document.querySelector('.shared-content__container').innerHTML = body.data.html);

    /*window.location.href = this.env.BASE_API_URL + 'youtube/download?' + makeQuery({
        all_items: allItemIds,
        playlist_id: document.querySelector('.youtube-items__container').dataset.playlistId
      });*/
  }

  attach(selector) {
    const elements = document.querySelectorAll(selector);
    for ( let i=0; i < elements.length; i++ ) {
      elements[i].addEventListener('click', this.go);
    }

    // Also attach select & deselect all functionality
    document.querySelector('#select-all').addEventListener('click', this.selectAll);
    document.querySelector('#deselect-all').addEventListener('click', this.deselectAll);
  }

  selectAll(ev) {
    document.querySelector('#deselect-all').classList.remove('hidden');
    document.querySelector('#select-all').classList.add('hidden');

    let allItems = document.querySelectorAll('.youtube-item');
    for ( let i=0; i < allItems.length; i++ ) {
      allItems[i].classList.add('checked');
      allItems[i].querySelector('input').checked = true;
    }
  }

  deselectAll(ev) {

    document.querySelector('#deselect-all').classList.add('hidden');
    document.querySelector('#select-all').classList.remove('hidden');

    let allItems = document.querySelectorAll('.youtube-item');
    for ( let i=0; i < allItems.length; i++ ) {
      allItems[i].classList.remove('checked');
      allItems[i].querySelector('input').checked = false;
    }
  }
}

export default Downloader;