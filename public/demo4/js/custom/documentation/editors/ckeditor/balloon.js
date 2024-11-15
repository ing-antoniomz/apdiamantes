/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/editors/ckeditor/balloon.js":
/*!***********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/ckeditor/balloon.js ***!
  \***********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsCKEditorBalloon = function () {\n  // Private functions\n  var exampleBalloon = function exampleBalloon() {\n    BalloonEditor.create(document.querySelector('#kt_docs_ckeditor_balloon')).then(function (editor) {\n      console.log(editor);\n    })[\"catch\"](function (error) {\n      console.error(error);\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleBalloon();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsCKEditorBalloon.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy9ja2VkaXRvci9iYWxsb29uLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsc0JBQXNCLEdBQUcsWUFBWTtFQUNyQztFQUNBLElBQUlDLGNBQWMsR0FBRyxTQUFqQkEsY0FBY0EsQ0FBQSxFQUFlO0lBQzdCQyxhQUFhLENBQ1JDLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsMkJBQTJCLENBQUMsQ0FBQyxDQUMzREMsSUFBSSxDQUFDLFVBQUFDLE1BQU0sRUFBSTtNQUNaQyxPQUFPLENBQUNDLEdBQUcsQ0FBQ0YsTUFBTSxDQUFDO0lBQ3ZCLENBQUMsQ0FBQyxTQUNJLENBQUMsVUFBQUcsS0FBSyxFQUFJO01BQ1pGLE9BQU8sQ0FBQ0UsS0FBSyxDQUFDQSxLQUFLLENBQUM7SUFDeEIsQ0FBQyxDQUFDO0VBQ1YsQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFjO01BQ2RWLGNBQWMsQ0FBQyxDQUFDO0lBQ3BCO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUVIO0FBQ0FXLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBWTtFQUNsQ2Isc0JBQXNCLENBQUNXLElBQUksQ0FBQyxDQUFDO0FBQ2pDLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9lZGl0b3JzL2NrZWRpdG9yL2JhbGxvb24uanM/NjEyNSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxudmFyIEtURm9ybXNDS0VkaXRvckJhbGxvb24gPSBmdW5jdGlvbiAoKSB7XG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcbiAgICB2YXIgZXhhbXBsZUJhbGxvb24gPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIEJhbGxvb25FZGl0b3JcbiAgICAgICAgICAgIC5jcmVhdGUoZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X2RvY3NfY2tlZGl0b3JfYmFsbG9vbicpKVxuICAgICAgICAgICAgLnRoZW4oZWRpdG9yID0+IHtcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhlZGl0b3IpO1xuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5jYXRjaChlcnJvciA9PiB7XG4gICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcihlcnJvcik7XG4gICAgICAgICAgICB9KTtcbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGV4YW1wbGVCYWxsb29uKCk7XG4gICAgICAgIH1cbiAgICB9O1xufSgpO1xuXG4vLyBPbiBkb2N1bWVudCByZWFkeVxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XG4gICAgS1RGb3Jtc0NLRWRpdG9yQmFsbG9vbi5pbml0KCk7XG59KTtcbiJdLCJuYW1lcyI6WyJLVEZvcm1zQ0tFZGl0b3JCYWxsb29uIiwiZXhhbXBsZUJhbGxvb24iLCJCYWxsb29uRWRpdG9yIiwiY3JlYXRlIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwidGhlbiIsImVkaXRvciIsImNvbnNvbGUiLCJsb2ciLCJlcnJvciIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/ckeditor/balloon.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/ckeditor/balloon.js"]();
/******/ 	
/******/ })()
;