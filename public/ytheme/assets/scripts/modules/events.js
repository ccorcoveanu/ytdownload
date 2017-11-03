'use strict';

class Events
{
  constructor() {
    this.events = {};
  }

  emit(element, event) {
    if ( !this.events.hasOwnProperty(event) ) {
      const newEvt = document.createEvent('Event');
      newEvt.initEvent(event, true, true);''
      this.events[event] = newEvt;
    }

    element.dispatchEvent(this.events[event]);
  }
}

export default Events;