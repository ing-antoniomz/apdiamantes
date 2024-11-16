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

/***/ "./resources/assets/core/js/custom/documentation/editors/tinymce/hidden.js":
/*!*********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/tinymce/hidden.js ***!
  \*********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsTinyMCEHidden = function () {\n  // Private functions\n  var exampleHidden = function exampleHidden() {\n    tinymce.init({\n      selector: '#kt_docs_tinymce_hidden',\n      menubar: false,\n      height: \"480\",\n      toolbar: ['styleselect fontselect fontsizeselect', 'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify', 'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],\n      plugins: 'advlist autolink link image lists charmap print preview code'\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleHidden();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsTinyMCEHidden.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy90aW55bWNlL2hpZGRlbi5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLG9CQUFvQixHQUFHLFlBQVc7RUFDbEM7RUFDQSxJQUFJQyxhQUFhLEdBQUcsU0FBaEJBLGFBQWFBLENBQUEsRUFBYztJQUMzQkMsT0FBTyxDQUFDQyxJQUFJLENBQUM7TUFDVEMsUUFBUSxFQUFFLHlCQUF5QjtNQUNuQ0MsT0FBTyxFQUFFLEtBQUs7TUFDZEMsTUFBTSxFQUFHLEtBQUs7TUFDZEMsT0FBTyxFQUFFLENBQUMsdUNBQXVDLEVBQzdDLHVHQUF1RyxFQUN2RyxrSUFBa0ksQ0FBQztNQUN2SUMsT0FBTyxFQUFHO0lBQ2QsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBTCxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFhO01BQ2JGLGFBQWEsQ0FBQyxDQUFDO0lBQ25CO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUVIO0FBQ0FRLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ1Ysb0JBQW9CLENBQUNHLElBQUksQ0FBQyxDQUFDO0FBQy9CLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9lZGl0b3JzL3RpbnltY2UvaGlkZGVuLmpzPzQ4ZTEiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVEZvcm1zVGlueU1DRUhpZGRlbiA9IGZ1bmN0aW9uKCkge1xuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGVIaWRkZW4gPSBmdW5jdGlvbigpIHtcbiAgICAgICAgdGlueW1jZS5pbml0KHtcbiAgICAgICAgICAgIHNlbGVjdG9yOiAnI2t0X2RvY3NfdGlueW1jZV9oaWRkZW4nLFxuICAgICAgICAgICAgbWVudWJhcjogZmFsc2UsXG4gICAgICAgICAgICBoZWlnaHQgOiBcIjQ4MFwiLFxuICAgICAgICAgICAgdG9vbGJhcjogWydzdHlsZXNlbGVjdCBmb250c2VsZWN0IGZvbnRzaXplc2VsZWN0JyxcbiAgICAgICAgICAgICAgICAndW5kbyByZWRvIHwgY3V0IGNvcHkgcGFzdGUgfCBib2xkIGl0YWxpYyB8IGxpbmsgaW1hZ2UgfCBhbGlnbmxlZnQgYWxpZ25jZW50ZXIgYWxpZ25yaWdodCBhbGlnbmp1c3RpZnknLFxuICAgICAgICAgICAgICAgICdidWxsaXN0IG51bWxpc3QgfCBvdXRkZW50IGluZGVudCB8IGJsb2NrcXVvdGUgc3Vic2NyaXB0IHN1cGVyc2NyaXB0IHwgYWR2bGlzdCB8IGF1dG9saW5rIHwgbGlzdHMgY2hhcm1hcCB8IHByaW50IHByZXZpZXcgfCAgY29kZSddLFxuICAgICAgICAgICAgcGx1Z2lucyA6ICdhZHZsaXN0IGF1dG9saW5rIGxpbmsgaW1hZ2UgbGlzdHMgY2hhcm1hcCBwcmludCBwcmV2aWV3IGNvZGUnXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcbiAgICAgICAgaW5pdDogZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBleGFtcGxlSGlkZGVuKCk7XG4gICAgICAgIH1cbiAgICB9O1xufSgpO1xuXG4vLyBPbiBkb2N1bWVudCByZWFkeVxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcbiAgICBLVEZvcm1zVGlueU1DRUhpZGRlbi5pbml0KCk7XG59KTtcbiJdLCJuYW1lcyI6WyJLVEZvcm1zVGlueU1DRUhpZGRlbiIsImV4YW1wbGVIaWRkZW4iLCJ0aW55bWNlIiwiaW5pdCIsInNlbGVjdG9yIiwibWVudWJhciIsImhlaWdodCIsInRvb2xiYXIiLCJwbHVnaW5zIiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/tinymce/hidden.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/tinymce/hidden.js"]();
/******/ 	
/******/ })()
;