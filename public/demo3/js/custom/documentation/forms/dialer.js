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

/***/ "./resources/assets/core/js/custom/documentation/forms/dialer.js":
/*!***********************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/forms/dialer.js ***!
  \***********************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsDialerDemos = function () {\n  // Private functions\n  var example1 = function example1(element) {\n    // Dialer container element\n    var dialerElement = document.querySelector(\"#kt_dialer_example_1\");\n\n    // Create dialer object and initialize a new instance\n    var dialerObject = new KTDialer(dialerElement, {\n      min: 1000,\n      max: 50000,\n      step: 1000,\n      prefix: \"$\",\n      decimals: 2\n    });\n  };\n  return {\n    // Public Functions\n    init: function init(element) {\n      example1();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsDialerDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvZGlhbGVyLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsa0JBQWtCLEdBQUcsWUFBVztFQUNoQztFQUNBLElBQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFRQSxDQUFZQyxPQUFPLEVBQUU7SUFDN0I7SUFDQSxJQUFJQyxhQUFhLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLHNCQUFzQixDQUFDOztJQUVsRTtJQUNBLElBQUlDLFlBQVksR0FBRyxJQUFJQyxRQUFRLENBQUNKLGFBQWEsRUFBRTtNQUMzQ0ssR0FBRyxFQUFFLElBQUk7TUFDVEMsR0FBRyxFQUFFLEtBQUs7TUFDVkMsSUFBSSxFQUFFLElBQUk7TUFDVkMsTUFBTSxFQUFFLEdBQUc7TUFDWEMsUUFBUSxFQUFFO0lBQ2QsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBV1gsT0FBTyxFQUFFO01BQ3BCRCxRQUFRLENBQUMsQ0FBQztJQUNkO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUVIO0FBQ0FhLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ2Ysa0JBQWtCLENBQUNhLElBQUksQ0FBQyxDQUFDO0FBQzdCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9mb3Jtcy9kaWFsZXIuanM/Mzk3OSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxudmFyIEtURm9ybXNEaWFsZXJEZW1vcyA9IGZ1bmN0aW9uKCkge1xuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGUxID0gZnVuY3Rpb24oZWxlbWVudCkge1xuICAgICAgICAvLyBEaWFsZXIgY29udGFpbmVyIGVsZW1lbnRcbiAgICAgICAgdmFyIGRpYWxlckVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2t0X2RpYWxlcl9leGFtcGxlXzFcIik7XG5cbiAgICAgICAgLy8gQ3JlYXRlIGRpYWxlciBvYmplY3QgYW5kIGluaXRpYWxpemUgYSBuZXcgaW5zdGFuY2VcbiAgICAgICAgdmFyIGRpYWxlck9iamVjdCA9IG5ldyBLVERpYWxlcihkaWFsZXJFbGVtZW50LCB7XG4gICAgICAgICAgICBtaW46IDEwMDAsXG4gICAgICAgICAgICBtYXg6IDUwMDAwLFxuICAgICAgICAgICAgc3RlcDogMTAwMCxcbiAgICAgICAgICAgIHByZWZpeDogXCIkXCIsXG4gICAgICAgICAgICBkZWNpbWFsczogMlxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKGVsZW1lbnQpIHtcbiAgICAgICAgICAgIGV4YW1wbGUxKCk7XG4gICAgICAgIH1cbiAgICB9O1xufSgpO1xuXG4vLyBPbiBkb2N1bWVudCByZWFkeVxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcbiAgICBLVEZvcm1zRGlhbGVyRGVtb3MuaW5pdCgpO1xufSk7XG4iXSwibmFtZXMiOlsiS1RGb3Jtc0RpYWxlckRlbW9zIiwiZXhhbXBsZTEiLCJlbGVtZW50IiwiZGlhbGVyRWxlbWVudCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImRpYWxlck9iamVjdCIsIktURGlhbGVyIiwibWluIiwibWF4Iiwic3RlcCIsInByZWZpeCIsImRlY2ltYWxzIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/forms/dialer.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/forms/dialer.js"]();
/******/ 	
/******/ })()
;