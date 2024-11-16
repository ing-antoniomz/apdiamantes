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

/***/ "./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js":
/*!***********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js ***!
  \***********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormRepeaterBasic = function () {\n  // Private functions\n  var example1 = function example1() {\n    $('#kt_docs_repeater_basic').repeater({\n      initEmpty: false,\n      defaultValues: {\n        'text-input': 'foo'\n      },\n      show: function show() {\n        $(this).slideDown();\n      },\n      hide: function hide(deleteElement) {\n        $(this).slideUp(deleteElement);\n      }\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      example1();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormRepeaterBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvZm9ybXJlcGVhdGVyL2Jhc2ljLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsbUJBQW1CLEdBQUcsWUFBWTtFQUNsQztFQUNBLElBQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFRQSxDQUFBLEVBQWU7SUFDdkJDLENBQUMsQ0FBQyx5QkFBeUIsQ0FBQyxDQUFDQyxRQUFRLENBQUM7TUFDbENDLFNBQVMsRUFBRSxLQUFLO01BRWhCQyxhQUFhLEVBQUU7UUFDWCxZQUFZLEVBQUU7TUFDbEIsQ0FBQztNQUVEQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFjO1FBQ2RKLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0ssU0FBUyxDQUFDLENBQUM7TUFDdkIsQ0FBQztNQUVEQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBWUMsYUFBYSxFQUFFO1FBQzNCUCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNRLE9BQU8sQ0FBQ0QsYUFBYSxDQUFDO01BQ2xDO0lBQ0osQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBRSxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFjO01BQ2RWLFFBQVEsQ0FBQyxDQUFDO0lBQ2Q7RUFDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQVcsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFZO0VBQ2xDYixtQkFBbUIsQ0FBQ1csSUFBSSxDQUFDLENBQUM7QUFDOUIsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL2Zvcm1yZXBlYXRlci9iYXNpYy5qcz81MmFiIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RGb3JtUmVwZWF0ZXJCYXNpYyA9IGZ1bmN0aW9uICgpIHtcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xuICAgIHZhciBleGFtcGxlMSA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJCgnI2t0X2RvY3NfcmVwZWF0ZXJfYmFzaWMnKS5yZXBlYXRlcih7XG4gICAgICAgICAgICBpbml0RW1wdHk6IGZhbHNlLFxuXG4gICAgICAgICAgICBkZWZhdWx0VmFsdWVzOiB7XG4gICAgICAgICAgICAgICAgJ3RleHQtaW5wdXQnOiAnZm9vJ1xuICAgICAgICAgICAgfSxcblxuICAgICAgICAgICAgc2hvdzogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICQodGhpcykuc2xpZGVEb3duKCk7XG4gICAgICAgICAgICB9LFxuXG4gICAgICAgICAgICBoaWRlOiBmdW5jdGlvbiAoZGVsZXRlRWxlbWVudCkge1xuICAgICAgICAgICAgICAgICQodGhpcykuc2xpZGVVcChkZWxldGVFbGVtZW50KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmV0dXJuIHtcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBleGFtcGxlMSgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xuICAgIEtURm9ybVJlcGVhdGVyQmFzaWMuaW5pdCgpO1xufSk7XG4iXSwibmFtZXMiOlsiS1RGb3JtUmVwZWF0ZXJCYXNpYyIsImV4YW1wbGUxIiwiJCIsInJlcGVhdGVyIiwiaW5pdEVtcHR5IiwiZGVmYXVsdFZhbHVlcyIsInNob3ciLCJzbGlkZURvd24iLCJoaWRlIiwiZGVsZXRlRWxlbWVudCIsInNsaWRlVXAiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js"]();
/******/ 	
/******/ })()
;