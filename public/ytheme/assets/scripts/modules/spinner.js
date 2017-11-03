'use strict'

class Spinner
{
  constructor(selector) {
    this._element = document.querySelector(selector);
    this._show = this._show.bind(this);
    this.addToggleEvt = this.addToggleEvt.bind(this);
  }

  show() {
    this._timeout = setTimeout(this._show, 200);
  }

  _show() {
    this._element.classList.add('-visible');
    this._element.classList.remove('-hidden');
  }

  hide() {
    if ( this._timeout ) clearTimeout(this._timeout);
    this._element.classList.add('-hidden')
    this._element.classList.remove('-visible');
  }
  toggle() {
    if ( !this._element.classList.contains('-visible') ) {
      this.show();
    } else {
      this.hide();
    }
  }
  addToggleEvt(element) {
    element.addEventListener('click', evt => this.toggle());
  }
}

export default Spinner