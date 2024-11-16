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

/***/ "./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js ***!
  \********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsTinyMCEBasic = function () {\n  // Private functions\n  var exampleBasic = function exampleBasic() {\n    var options = {\n      selector: \"#kt_docs_tinymce_basic\",\n      height: \"480\"\n    };\n    if (KTThemeMode.getMode() === \"dark\") {\n      options[\"skin\"] = \"oxide-dark\";\n      options[\"content_css\"] = \"dark\";\n    }\n    tinymce.init(options);\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleBasic();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsTinyMCEBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy90aW55bWNlL2Jhc2ljLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsbUJBQW1CLEdBQUcsWUFBVztFQUNqQztFQUNBLElBQUlDLFlBQVksR0FBRyxTQUFmQSxZQUFZQSxDQUFBLEVBQWM7SUFDMUIsSUFBSUMsT0FBTyxHQUFHO01BQUNDLFFBQVEsRUFBRSx3QkFBd0I7TUFBR0MsTUFBTSxFQUFHO0lBQUssQ0FBQztJQUVuRSxJQUFJQyxXQUFXLENBQUNDLE9BQU8sQ0FBQyxDQUFDLEtBQUssTUFBTSxFQUFFO01BQ2xDSixPQUFPLENBQUMsTUFBTSxDQUFDLEdBQUcsWUFBWTtNQUM5QkEsT0FBTyxDQUFDLGFBQWEsQ0FBQyxHQUFHLE1BQU07SUFDbkM7SUFFQUssT0FBTyxDQUFDQyxJQUFJLENBQUNOLE9BQU8sQ0FBQztFQUN6QixDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FNLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWE7TUFDYlAsWUFBWSxDQUFDLENBQUM7SUFDbEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQVEsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDVixtQkFBbUIsQ0FBQ1EsSUFBSSxDQUFDLENBQUM7QUFDOUIsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2VkaXRvcnMvdGlueW1jZS9iYXNpYy5qcz8wYmI5Il0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RGb3Jtc1RpbnlNQ0VCYXNpYyA9IGZ1bmN0aW9uKCkge1xuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGVCYXNpYyA9IGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgb3B0aW9ucyA9IHtzZWxlY3RvcjogXCIja3RfZG9jc190aW55bWNlX2Jhc2ljXCIsICBoZWlnaHQgOiBcIjQ4MFwifTtcbiAgICAgICAgXG4gICAgICAgIGlmIChLVFRoZW1lTW9kZS5nZXRNb2RlKCkgPT09IFwiZGFya1wiKSB7XG4gICAgICAgICAgICBvcHRpb25zW1wic2tpblwiXSA9IFwib3hpZGUtZGFya1wiO1xuICAgICAgICAgICAgb3B0aW9uc1tcImNvbnRlbnRfY3NzXCJdID0gXCJkYXJrXCI7XG4gICAgICAgIH1cbiAgICAgICAgXG4gICAgICAgIHRpbnltY2UuaW5pdChvcHRpb25zKTtcbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgZXhhbXBsZUJhc2ljKCk7XG4gICAgICAgIH1cbiAgICB9O1xufSgpO1xuXG4vLyBPbiBkb2N1bWVudCByZWFkeVxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcbiAgICBLVEZvcm1zVGlueU1DRUJhc2ljLmluaXQoKTtcbn0pO1xuIl0sIm5hbWVzIjpbIktURm9ybXNUaW55TUNFQmFzaWMiLCJleGFtcGxlQmFzaWMiLCJvcHRpb25zIiwic2VsZWN0b3IiLCJoZWlnaHQiLCJLVFRoZW1lTW9kZSIsImdldE1vZGUiLCJ0aW55bWNlIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js"]();
/******/ 	
/******/ })()
;