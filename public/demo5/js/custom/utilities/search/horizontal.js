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

/***/ "./resources/assets/core/js/custom/utilities/search/horizontal.js":
/*!************************************************************************!*\
  !*** ./resources/assets/core/js/custom/utilities/search/horizontal.js ***!
  \************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTSearchHorizontal = function () {\n  // Private functions\n  var initAdvancedSearchForm = function initAdvancedSearchForm() {\n    var form = document.querySelector('#kt_advanced_search_form');\n\n    // Init tags\n    var tags = form.querySelector('[name=\"tags\"]');\n    new Tagify(tags);\n  };\n  var handleAdvancedSearchToggle = function handleAdvancedSearchToggle() {\n    var link = document.querySelector('#kt_horizontal_search_advanced_link');\n    link.addEventListener('click', function (e) {\n      e.preventDefault();\n      if (link.innerHTML === \"Advanced Search\") {\n        link.innerHTML = \"Hide Advanced Search\";\n      } else {\n        link.innerHTML = \"Advanced Search\";\n      }\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      initAdvancedSearchForm();\n      handleAdvancedSearchToggle();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTSearchHorizontal.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL3V0aWxpdGllcy9zZWFyY2gvaG9yaXpvbnRhbC5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGtCQUFrQixHQUFHLFlBQVk7RUFDakM7RUFDQSxJQUFJQyxzQkFBc0IsR0FBRyxTQUF6QkEsc0JBQXNCQSxDQUFBLEVBQWU7SUFDdEMsSUFBSUMsSUFBSSxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQywwQkFBMEIsQ0FBQzs7SUFFN0Q7SUFDQSxJQUFJQyxJQUFJLEdBQUdILElBQUksQ0FBQ0UsYUFBYSxDQUFDLGVBQWUsQ0FBQztJQUM5QyxJQUFJRSxNQUFNLENBQUNELElBQUksQ0FBQztFQUNuQixDQUFDO0VBRUQsSUFBSUUsMEJBQTBCLEdBQUcsU0FBN0JBLDBCQUEwQkEsQ0FBQSxFQUFlO0lBQ3pDLElBQUlDLElBQUksR0FBR0wsUUFBUSxDQUFDQyxhQUFhLENBQUMscUNBQXFDLENBQUM7SUFFeEVJLElBQUksQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVDLENBQUMsRUFBRTtNQUN4Q0EsQ0FBQyxDQUFDQyxjQUFjLENBQUMsQ0FBQztNQUVsQixJQUFJSCxJQUFJLENBQUNJLFNBQVMsS0FBSyxpQkFBaUIsRUFBRTtRQUN0Q0osSUFBSSxDQUFDSSxTQUFTLEdBQUcsc0JBQXNCO01BQzNDLENBQUMsTUFBTTtRQUNISixJQUFJLENBQUNJLFNBQVMsR0FBRyxpQkFBaUI7TUFDdEM7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNIQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFjO01BQ2RaLHNCQUFzQixDQUFDLENBQUM7TUFDeEJNLDBCQUEwQixDQUFDLENBQUM7SUFDaEM7RUFDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQU8sTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFZO0VBQ2xDZixrQkFBa0IsQ0FBQ2EsSUFBSSxDQUFDLENBQUM7QUFDN0IsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS91dGlsaXRpZXMvc2VhcmNoL2hvcml6b250YWwuanM/YjhjNiJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcbiBcbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVFNlYXJjaEhvcml6b250YWwgPSBmdW5jdGlvbiAoKSB7XG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcbiAgICB2YXIgaW5pdEFkdmFuY2VkU2VhcmNoRm9ybSA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICB2YXIgZm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9hZHZhbmNlZF9zZWFyY2hfZm9ybScpO1xuXG4gICAgICAgLy8gSW5pdCB0YWdzXG4gICAgICAgdmFyIHRhZ3MgPSBmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwidGFnc1wiXScpO1xuICAgICAgIG5ldyBUYWdpZnkodGFncyk7XG4gICAgfVxuXG4gICAgdmFyIGhhbmRsZUFkdmFuY2VkU2VhcmNoVG9nZ2xlID0gZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgbGluayA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9ob3Jpem9udGFsX3NlYXJjaF9hZHZhbmNlZF9saW5rJyk7XG5cbiAgICAgICAgbGluay5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICBcbiAgICAgICAgICAgIGlmIChsaW5rLmlubmVySFRNTCA9PT0gXCJBZHZhbmNlZCBTZWFyY2hcIikge1xuICAgICAgICAgICAgICAgIGxpbmsuaW5uZXJIVE1MID0gXCJIaWRlIEFkdmFuY2VkIFNlYXJjaFwiO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICBsaW5rLmlubmVySFRNTCA9IFwiQWR2YW5jZWQgU2VhcmNoXCI7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pXG4gICAgfVxuXG4gICAgLy8gUHVibGljIG1ldGhvZHNcbiAgICByZXR1cm4ge1xuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpbml0QWR2YW5jZWRTZWFyY2hGb3JtKCk7XG4gICAgICAgICAgICBoYW5kbGVBZHZhbmNlZFNlYXJjaFRvZ2dsZSgpO1xuICAgICAgICB9XG4gICAgfSAgICAgXG59KCk7XG5cbi8vIE9uIGRvY3VtZW50IHJlYWR5XG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uICgpIHtcbiAgICBLVFNlYXJjaEhvcml6b250YWwuaW5pdCgpO1xufSk7XG4iXSwibmFtZXMiOlsiS1RTZWFyY2hIb3Jpem9udGFsIiwiaW5pdEFkdmFuY2VkU2VhcmNoRm9ybSIsImZvcm0iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ0YWdzIiwiVGFnaWZ5IiwiaGFuZGxlQWR2YW5jZWRTZWFyY2hUb2dnbGUiLCJsaW5rIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImlubmVySFRNTCIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/utilities/search/horizontal.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/utilities/search/horizontal.js"]();
/******/ 	
/******/ })()
;