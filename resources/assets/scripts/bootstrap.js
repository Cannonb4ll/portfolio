window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

require('es6-promise').polyfill();
window.axios = require('axios');
