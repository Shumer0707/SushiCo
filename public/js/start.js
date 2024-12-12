/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/start/scroll_anchor.js":
/*!*********************************************!*\
  !*** ./resources/js/start/scroll_anchor.js ***!
  \*********************************************/
/***/ (() => {

window.my_hash = null;
// history.replaceState(null, null, " ");

// document.addEventListener("DOMContentLoaded", function () {
//     if (window.location.hash) {
//         // window.my_hash = window.location.hash;
//         window.history.replaceState(null, null, " ");
//         window.scrollTo(0, 0);
//     }
// });

if (window.location.hash) {
  window.my_hash = window.location.hash;
  window.history.replaceState(null, null, " ");
  window.scrollTo(0, 0);
  console.log(window.my_hash);
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!*************************************!*\
  !*** ./resources/js/start/start.js ***!
  \*************************************/
__webpack_require__(/*! ./scroll_anchor */ "./resources/js/start/scroll_anchor.js");
})();

/******/ })()
;