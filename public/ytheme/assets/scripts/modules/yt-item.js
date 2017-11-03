'use strict';

import { classNameToSelector } from './utils';

class YtItem
{
  constructor() {
    this.onClick = this.onClick.bind(this);
    this.addEvents = this.addEvents.bind(this);
  }

  init(container) {
    const containerEl = document.querySelector(container);
    containerEl.addEventListener('items-loaded', this.addEvents)
  }

  addEvents(evt) {
    const actionsContainer = document.querySelector('.video-actions__container');
    actionsContainer.classList.remove('-hidden');
    $.material.init();
    const items = document.querySelectorAll(classNameToSelector(evt.target.className) + ' .youtube-item');
    for ( let i=0; i<items.length; i++ ) {
      items[i].addEventListener('click', this.onClick);
    }
  }

  onClick(ev) {
    // Workaround for material that triggers a click for the input after we click the visible styled span element
    if ( ev.target.type === 'checkbox' ) {
      return;
    }
    ev.currentTarget.classList.toggle('checked');
    if ( ev.target.className !== 'check' && ev.target.className !== 'checkbox-material' ) {
      const currentInput = ev.currentTarget.querySelector('input');
      currentInput.checked = !currentInput.checked;
    }
  }
}

export default YtItem;