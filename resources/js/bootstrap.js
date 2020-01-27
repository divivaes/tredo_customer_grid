window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

import Popper from "popper.js/dist/umd/popper";

window.axios = require('axios');
window.Popper = Popper;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('bootstrap');
require('select2');


