'use strict'

import fetch from 'node-fetch';

class Ads
{
  constructor(env) {
    this.env = env;
  }

  go() {
    return fetch(this.env.BASE_API_URL + 'shared-content/fetch')
      .then(res => res.json());
  }
}

export default Ads;