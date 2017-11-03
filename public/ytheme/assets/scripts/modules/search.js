'use strict';

import fetch from 'node-fetch';
import { getParamByNameFromUrlString } from './utils';
import Spinner from './spinner';

class Search
{
  constructor (env, events)
  {
    this.env = env;
    this.fetch = fetch;
    this.events = events;
    this.spinner = new Spinner('.wrapper--app__content .loader');
    this.searchText = '';
    this.searchInput = document.querySelector('.js-searchbox__textfield');
    this.searchButton = document.querySelector('.js-search__button');
    this.isSearching = false;

    this.onChange = this.onChange.bind(this);
    this.getPlaylist = this.getPlaylist.bind(this);
    this.getVideo = this.getVideo.bind(this);
    this.validateUrl = this.validateUrl.bind(this);

    this.attachEvents();
  }

  attachEvents () {
    this.searchInput.addEventListener('keyup', this.onChange);
    this.searchButton.addEventListener('click', this.onChange);
  }

  onChange () {

    if ( this.isSearching ) return;
    this.isSearching = true;

    if ( this.searchInput.value === this.searchText ) return false; // Input value has not changed
    const urlObj = this.validateUrl(this.searchInput.value);
    if ( !urlObj ) {
      // Maybe show some message ?
      this.isSearching = false;
      return;
    }

    this.searchText = this.searchInput.value;
    switch ( urlObj.type ) {
      case 'video':
        this.getVideo(this.searchText);
        this.isSearching = false;
        break;

      case 'playlist':

        this.spinner.show();
        window.scrollBy(0, 100);
        const spinner = this.spinner;
        const el = document.querySelector('.youtube-items__container');
        const playlist = this.getPlaylist(urlObj.id)
          .then(body => {
            el.innerHTML = body.data.html;
            el.dataset.playlistId = urlObj.id;
            spinner.hide();

            window.scrollBy(0, 450);
            this.events.emit(el, 'items-loaded');
          }).catch(err => console.warn(err));

        Promise.resolve(playlist);

        this.isSearching = false;
        break;

      default:
        this.isSearching = false;
        return;
    }
  }

  getPlaylist(playlistId) {
    return this.fetch(
      this.env.BASE_API_URL + 'youtube/playlist/' + encodeURIComponent(playlistId)
    )
      .then(res => res.json());
  }

  getVideo(url) {
    console.log('get video');
  }

  validateUrl(test_url) {

    if ( test_url.indexOf('https://www.youtube.com/watch') === 0 ) {
      let video_id = getParamByNameFromUrlString('v', test_url);
      if ( video_id.length !== 11 ) return false;

      return {
        id: video_id,
        type: 'video',
        url: test_url
      }
    }

    if ( test_url.indexOf('https://www.youtube.com/playlist') === 0 ) {

      let video_id = getParamByNameFromUrlString('list', test_url);
      if ( !video_id.length ) return false;

      return {
        id: video_id,
        type: 'playlist',
        url: test_url,
      }
    }

    return false;
  }
}

export default Search;