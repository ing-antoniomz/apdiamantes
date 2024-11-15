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

/***/ "./resources/assets/core/js/custom/documentation/charts/flotcharts/pie.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/charts/flotcharts/pie.js ***!
  \********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFlotDemoPie = function () {\n  // Private functions\n  var examplePie = function examplePie() {\n    var data = [{\n      label: \"CSS\",\n      data: 10,\n      color: KTUtil.getCssVariableValue('--kt-active-primary')\n    }, {\n      label: \"HTML5\",\n      data: 40,\n      color: KTUtil.getCssVariableValue('--kt-active-success')\n    }, {\n      label: \"PHP\",\n      data: 30,\n      color: KTUtil.getCssVariableValue('--kt-active-danger')\n    }, {\n      label: \"Angular\",\n      data: 20,\n      color: KTUtil.getCssVariableValue('--kt-active-warning')\n    }];\n    $.plot($(\"#kt_docs_flot_pie\"), data, {\n      series: {\n        pie: {\n          show: true\n        }\n      }\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      examplePie();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFlotDemoPie.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vY2hhcnRzL2Zsb3RjaGFydHMvcGllLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsYUFBYSxHQUFHLFlBQVk7RUFDNUI7RUFDQSxJQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBVUEsQ0FBQSxFQUFlO0lBQ3pCLElBQUlDLElBQUksR0FBRyxDQUNQO01BQUVDLEtBQUssRUFBRSxLQUFLO01BQUVELElBQUksRUFBRSxFQUFFO01BQUVFLEtBQUssRUFBRUMsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxxQkFBcUI7SUFBRSxDQUFDLEVBQ3BGO01BQUVILEtBQUssRUFBRSxPQUFPO01BQUVELElBQUksRUFBRSxFQUFFO01BQUVFLEtBQUssRUFBRUMsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxxQkFBcUI7SUFBRSxDQUFDLEVBQ3RGO01BQUVILEtBQUssRUFBRSxLQUFLO01BQUVELElBQUksRUFBRSxFQUFFO01BQUVFLEtBQUssRUFBRUMsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxvQkFBb0I7SUFBRSxDQUFDLEVBQ25GO01BQUVILEtBQUssRUFBRSxTQUFTO01BQUVELElBQUksRUFBRSxFQUFFO01BQUVFLEtBQUssRUFBRUMsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxxQkFBcUI7SUFBRSxDQUFDLENBQzNGO0lBRURDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDRCxDQUFDLENBQUMsbUJBQW1CLENBQUMsRUFBRUwsSUFBSSxFQUFFO01BQ2pDTyxNQUFNLEVBQUU7UUFDSkMsR0FBRyxFQUFFO1VBQ0RDLElBQUksRUFBRTtRQUNWO01BQ0o7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FDLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWM7TUFDZFgsVUFBVSxDQUFDLENBQUM7SUFDaEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQUksTUFBTSxDQUFDUSxrQkFBa0IsQ0FBQyxZQUFZO0VBQ2xDYixhQUFhLENBQUNZLElBQUksQ0FBQyxDQUFDO0FBQ3hCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9jaGFydHMvZmxvdGNoYXJ0cy9waWUuanM/YmRkNSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxudmFyIEtURmxvdERlbW9QaWUgPSBmdW5jdGlvbiAoKSB7XG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcbiAgICB2YXIgZXhhbXBsZVBpZSA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyIGRhdGEgPSBbXG4gICAgICAgICAgICB7IGxhYmVsOiBcIkNTU1wiLCBkYXRhOiAxMCwgY29sb3I6IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWt0LWFjdGl2ZS1wcmltYXJ5JykgfSxcbiAgICAgICAgICAgIHsgbGFiZWw6IFwiSFRNTDVcIiwgZGF0YTogNDAsIGNvbG9yOiBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1rdC1hY3RpdmUtc3VjY2VzcycpIH0sXG4gICAgICAgICAgICB7IGxhYmVsOiBcIlBIUFwiLCBkYXRhOiAzMCwgY29sb3I6IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWt0LWFjdGl2ZS1kYW5nZXInKSB9LFxuICAgICAgICAgICAgeyBsYWJlbDogXCJBbmd1bGFyXCIsIGRhdGE6IDIwLCBjb2xvcjogS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0ta3QtYWN0aXZlLXdhcm5pbmcnKSB9XG4gICAgICAgIF07XG5cbiAgICAgICAgJC5wbG90KCQoXCIja3RfZG9jc19mbG90X3BpZVwiKSwgZGF0YSwge1xuICAgICAgICAgICAgc2VyaWVzOiB7XG4gICAgICAgICAgICAgICAgcGllOiB7XG4gICAgICAgICAgICAgICAgICAgIHNob3c6IHRydWVcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgZXhhbXBsZVBpZSgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xuICAgIEtURmxvdERlbW9QaWUuaW5pdCgpO1xufSk7XG4iXSwibmFtZXMiOlsiS1RGbG90RGVtb1BpZSIsImV4YW1wbGVQaWUiLCJkYXRhIiwibGFiZWwiLCJjb2xvciIsIktUVXRpbCIsImdldENzc1ZhcmlhYmxlVmFsdWUiLCIkIiwicGxvdCIsInNlcmllcyIsInBpZSIsInNob3ciLCJpbml0Iiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/charts/flotcharts/pie.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/charts/flotcharts/pie.js"]();
/******/ 	
/******/ })()
;