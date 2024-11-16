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

/***/ "./resources/assets/core/js/custom/documentation/general/scroll.js":
/*!*************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/scroll.js ***!
  \*************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTGeneralScrollDemos = function () {\n  // Private functions\n  var exampleChangePosition = function exampleChangePosition() {\n    var scroll = document.querySelector(\"#kt_scroll_change_pos\");\n    var btnTop = document.querySelector(\"#kt_scroll_change_pos_top\");\n    var btnBottom = document.querySelector(\"#kt_scroll_change_pos_bottom\");\n    btnTop.addEventListener(\"click\", function (e) {\n      scroll.scrollTop = 0;\n    });\n    btnBottom.addEventListener(\"click\", function (e) {\n      scroll.scrollTop = parseInt(scroll.scrollHeight);\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleChangePosition();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTGeneralScrollDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9zY3JvbGwuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxvQkFBb0IsR0FBRyxZQUFXO0VBQ2xDO0VBQ0EsSUFBSUMscUJBQXFCLEdBQUcsU0FBeEJBLHFCQUFxQkEsQ0FBQSxFQUFjO0lBQ25DLElBQUlDLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsdUJBQXVCLENBQUM7SUFDNUQsSUFBSUMsTUFBTSxHQUFHRixRQUFRLENBQUNDLGFBQWEsQ0FBQywyQkFBMkIsQ0FBQztJQUNoRSxJQUFJRSxTQUFTLEdBQUdILFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLDhCQUE4QixDQUFDO0lBRXRFQyxNQUFNLENBQUNFLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFVQyxDQUFDLEVBQUU7TUFDMUNOLE1BQU0sQ0FBQ08sU0FBUyxHQUFHLENBQUM7SUFDeEIsQ0FBQyxDQUFDO0lBRUZILFNBQVMsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVDLENBQUMsRUFBRTtNQUM3Q04sTUFBTSxDQUFDTyxTQUFTLEdBQUdDLFFBQVEsQ0FBQ1IsTUFBTSxDQUFDUyxZQUFZLENBQUM7SUFDcEQsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFhO01BQ2JYLHFCQUFxQixDQUFDLENBQUM7SUFDM0I7RUFDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQVksTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDZCxvQkFBb0IsQ0FBQ1ksSUFBSSxDQUFDLENBQUM7QUFDL0IsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvc2Nyb2xsLmpzPzI5OTMiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVEdlbmVyYWxTY3JvbGxEZW1vcyA9IGZ1bmN0aW9uKCkge1xuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGVDaGFuZ2VQb3NpdGlvbiA9IGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgc2Nyb2xsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNrdF9zY3JvbGxfY2hhbmdlX3Bvc1wiKTtcbiAgICAgICAgdmFyIGJ0blRvcCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIja3Rfc2Nyb2xsX2NoYW5nZV9wb3NfdG9wXCIpO1xuICAgICAgICB2YXIgYnRuQm90dG9tID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNrdF9zY3JvbGxfY2hhbmdlX3Bvc19ib3R0b21cIik7XG5cbiAgICAgICAgYnRuVG9wLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgc2Nyb2xsLnNjcm9sbFRvcCA9IDA7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIGJ0bkJvdHRvbS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgIHNjcm9sbC5zY3JvbGxUb3AgPSBwYXJzZUludChzY3JvbGwuc2Nyb2xsSGVpZ2h0KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmV0dXJuIHtcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIGV4YW1wbGVDaGFuZ2VQb3NpdGlvbigpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XG4gICAgS1RHZW5lcmFsU2Nyb2xsRGVtb3MuaW5pdCgpO1xufSk7XG4iXSwibmFtZXMiOlsiS1RHZW5lcmFsU2Nyb2xsRGVtb3MiLCJleGFtcGxlQ2hhbmdlUG9zaXRpb24iLCJzY3JvbGwiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJidG5Ub3AiLCJidG5Cb3R0b20iLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInNjcm9sbFRvcCIsInBhcnNlSW50Iiwic2Nyb2xsSGVpZ2h0IiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/scroll.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/scroll.js"]();
/******/ 	
/******/ })()
;