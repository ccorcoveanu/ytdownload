'use strict';

class Search
{
  constructor () {
    this.searchText = '';
    this.searchInput = document.querySelector('.js-searchbox__textfield');
    this.searchButton = document.querySelector('.js-search__button');

    this.state = {};
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

    const text = this.searchInput.value;
    const urlObj = this.validateUrl(text);
    if ( !urlObj ) {
      // Maybe show some message ?
      return;
    }

    this.searchText = text;
    switch ( urlObj.type ) {
      case 'video':
        this.getVideo(this.searchText);
        break;

      case 'playlist':
        this.getPlaylist(this.searchText);
        break;

      default: return;
    }
  }

  getPlaylist(url) {
    console.log('get playlist');
  }

  getVideo(url) {
    console.log('get video');
  }

  validateUrl(url) {

    console.log(url.indexOf('https://www.youtube.com/watch'));

    if ( url.indexOf('https://www.youtube.com/watch') === 0 ) {
      let video_id = this.getParamByNameFromUrlString('v', url);
      if ( video_id.length !== 11 ) return false;

      return {
        id: video_id,
        type: 'video',
        url: url
      }
    }

    if ( url.indexOf('https://www.youtube.com/playlist') === 0 ) {
      console.log('play');
      let video_id = this.getParamByNameFromUrlString('list', url);

      if ( video_id.length ) return false;

      return {
        id: video_id,
        type: 'playlist',
        url: url,
      }
    }

    return false;
  }

  getParamByNameFromUrlString(name, url) {
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
}

export default Search;