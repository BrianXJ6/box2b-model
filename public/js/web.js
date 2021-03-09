(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/web"],{

/***/ "./resources/js/web/web.js":
/*!*********************************!*\
  !*** ./resources/js/web/web.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

// Vue
window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js").default; // Bootstrap

window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js").default;

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js"); // Axios


window.axios = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
window.axios.defaults.headers.common['Accept'] = 'application/json'; // Auto components
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Single components
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Start

var app = new Vue().$mount('#app');

/***/ }),

/***/ "./resources/sass/web.scss":
/*!*********************************!*\
  !*** ./resources/sass/web.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
0,[["./resources/js/web/web.js","/js/manifest","/js/vendor"],["./resources/sass/web.scss","/js/manifest","/js/vendor"]]]);