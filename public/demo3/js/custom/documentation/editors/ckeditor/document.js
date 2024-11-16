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

/***/ "./resources/assets/core/js/custom/documentation/editors/ckeditor/document.js":
/*!************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/ckeditor/document.js ***!
  \************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsCKEditorDocument = function () {\n  // Private functions\n  var exampleDocument = function exampleDocument() {\n    DecoupledEditor.create(document.querySelector('#kt_docs_ckeditor_document')).then(function (editor) {\n      var toolbarContainer = document.querySelector('#kt_docs_ckeditor_document_toolbar');\n      toolbarContainer.appendChild(editor.ui.view.toolbar.element);\n    })[\"catch\"](function (error) {\n      console.error(error);\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleDocument();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsCKEditorDocument.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy9ja2VkaXRvci9kb2N1bWVudC5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLHVCQUF1QixHQUFHLFlBQVk7RUFDdEM7RUFDQSxJQUFJQyxlQUFlLEdBQUcsU0FBbEJBLGVBQWVBLENBQUEsRUFBZTtJQUM5QkMsZUFBZSxDQUNWQyxNQUFNLENBQUNDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLDRCQUE0QixDQUFDLENBQUMsQ0FDNURDLElBQUksQ0FBQyxVQUFBQyxNQUFNLEVBQUk7TUFDWixJQUFNQyxnQkFBZ0IsR0FBR0osUUFBUSxDQUFDQyxhQUFhLENBQUMsb0NBQW9DLENBQUM7TUFFckZHLGdCQUFnQixDQUFDQyxXQUFXLENBQUNGLE1BQU0sQ0FBQ0csRUFBRSxDQUFDQyxJQUFJLENBQUNDLE9BQU8sQ0FBQ0MsT0FBTyxDQUFDO0lBQ2hFLENBQUMsQ0FBQyxTQUNJLENBQUMsVUFBQUMsS0FBSyxFQUFJO01BQ1pDLE9BQU8sQ0FBQ0QsS0FBSyxDQUFDQSxLQUFLLENBQUM7SUFDeEIsQ0FBQyxDQUFDO0VBQ1YsQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBRSxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFjO01BQ2RmLGVBQWUsQ0FBQyxDQUFDO0lBQ3JCO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUVIO0FBQ0FnQixNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVk7RUFDbENsQix1QkFBdUIsQ0FBQ2dCLElBQUksQ0FBQyxDQUFDO0FBQ2xDLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9lZGl0b3JzL2NrZWRpdG9yL2RvY3VtZW50LmpzPzYyYzEiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVEZvcm1zQ0tFZGl0b3JEb2N1bWVudCA9IGZ1bmN0aW9uICgpIHtcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xuICAgIHZhciBleGFtcGxlRG9jdW1lbnQgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIERlY291cGxlZEVkaXRvclxuICAgICAgICAgICAgLmNyZWF0ZShkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcja3RfZG9jc19ja2VkaXRvcl9kb2N1bWVudCcpKVxuICAgICAgICAgICAgLnRoZW4oZWRpdG9yID0+IHtcbiAgICAgICAgICAgICAgICBjb25zdCB0b29sYmFyQ29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X2RvY3NfY2tlZGl0b3JfZG9jdW1lbnRfdG9vbGJhcicpO1xuXG4gICAgICAgICAgICAgICAgdG9vbGJhckNvbnRhaW5lci5hcHBlbmRDaGlsZChlZGl0b3IudWkudmlldy50b29sYmFyLmVsZW1lbnQpO1xuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5jYXRjaChlcnJvciA9PiB7XG4gICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcihlcnJvcik7XG4gICAgICAgICAgICB9KTtcbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGV4YW1wbGVEb2N1bWVudCgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xuICAgIEtURm9ybXNDS0VkaXRvckRvY3VtZW50LmluaXQoKTtcbn0pO1xuIl0sIm5hbWVzIjpbIktURm9ybXNDS0VkaXRvckRvY3VtZW50IiwiZXhhbXBsZURvY3VtZW50IiwiRGVjb3VwbGVkRWRpdG9yIiwiY3JlYXRlIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwidGhlbiIsImVkaXRvciIsInRvb2xiYXJDb250YWluZXIiLCJhcHBlbmRDaGlsZCIsInVpIiwidmlldyIsInRvb2xiYXIiLCJlbGVtZW50IiwiZXJyb3IiLCJjb25zb2xlIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/ckeditor/document.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/ckeditor/document.js"]();
/******/ 	
/******/ })()
;