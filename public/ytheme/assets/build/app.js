!function e(t,n,i){function r(o,s){if(!n[o]){if(!t[o]){var u="function"==typeof require&&require;if(!s&&u)return u(o,!0);if(a)return a(o,!0);var l=new Error("Cannot find module '"+o+"'");throw l.code="MODULE_NOT_FOUND",l}var c=n[o]={exports:{}};t[o][0].call(c.exports,function(e){var n=t[o][1][e];return r(n?n:e)},c,c.exports,e,t,n,i)}return n[o].exports}for(var a="function"==typeof require&&require,o=0;o<i.length;o++)r(i[o]);return r}({1:[function(e,t,n){"use strict";function i(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var a=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),o=e("./modules/search"),s=i(o),u=function(){function e(){r(this,e),this.initMaterial(),this.search=new s.default}return a(e,[{key:"initMaterial",value:function(){}}]),e}();new u},{"./modules/search":2}],2:[function(e,t,n){"use strict";function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(n,"__esModule",{value:!0});var r=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),a=function(){function e(){i(this,e),this.searchText="",this.searchInput=document.querySelector(".js-searchbox__textfield"),this.searchButton=document.querySelector(".js-searchbox__button"),this.state={},this.isSearching=!1,this.onChange=this.onChange.bind(this),this.getPlaylist=this.getPlaylist.bind(this),this.getVideo=this.getVideo.bind(this),this.validateUrl=this.validateUrl.bind(this),this.attachEvents()}return r(e,[{key:"attachEvents",value:function(){this.searchInput.addEventListener("keyup",this.onChange),this.searchButton.addEventListener("click",this.onChange)}},{key:"onChange",value:function(){if(!this.isSearching){this.isSearching=!0;var e=this.searchInput.value,t=this.validateUrl(e);if(t)switch(this.searchText=e,t.type){case"video":this.getVideo(this.searchText);break;case"playlist":this.getPlaylist(this.searchText);break;default:return}}}},{key:"getPlaylist",value:function(e){console.log("get playlist")}},{key:"getVideo",value:function(e){console.log("get video")}},{key:"validateUrl",value:function(e){if(console.log(e.indexOf("https://www.youtube.com/watch")),0===e.indexOf("https://www.youtube.com/watch")){var t=this.getParamByNameFromUrlString("v",e);return 11===t.length&&{id:t,type:"video",url:e}}if(0===e.indexOf("https://www.youtube.com/playlist")){console.log("play");var n=this.getParamByNameFromUrlString("list",e);return!n.length&&{id:n,type:"playlist",url:e}}return!1}},{key:"getParamByNameFromUrlString",value:function(e,t){e=e.replace(/[\[\]]/g,"\\$&");var n=new RegExp("[?&]"+e+"(=([^&#]*)|&|#|$)"),i=n.exec(t);return i?i[2]?decodeURIComponent(i[2].replace(/\+/g," ")):"":null}}]),e}();n.default=a},{}]},{},[1]);
//# sourceMappingURL=maps/app.js.map
