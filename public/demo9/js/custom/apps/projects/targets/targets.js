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

/***/ "./resources/assets/core/js/custom/apps/projects/targets/targets.js":
/*!**************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/projects/targets/targets.js ***!
  \**************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTProjectTargets = function () {\n  var initDatatable = function initDatatable() {\n    var table = document.getElementById('kt_profile_overview_table');\n\n    // set date data order\n    var tableRows = table.querySelectorAll('tbody tr');\n    tableRows.forEach(function (row) {\n      var dateRow = row.querySelectorAll('td');\n      var realDate = moment(dateRow[1].innerHTML, \"MMM D, YYYY\").format();\n      dateRow[1].setAttribute('data-order', realDate);\n    });\n\n    // init datatable --- more info on datatables: https://datatables.net/manual/\n    var datatable = $(table).DataTable({\n      \"info\": false,\n      'order': [],\n      \"paging\": false\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      initDatatable();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTProjectTargets.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvcHJvamVjdHMvdGFyZ2V0cy90YXJnZXRzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsZ0JBQWdCLEdBQUcsWUFBWTtFQUUvQixJQUFJQyxhQUFhLEdBQUcsU0FBaEJBLGFBQWFBLENBQUEsRUFBZTtJQUM1QixJQUFNQyxLQUFLLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLDJCQUEyQixDQUFDOztJQUVsRTtJQUNBLElBQU1DLFNBQVMsR0FBR0gsS0FBSyxDQUFDSSxnQkFBZ0IsQ0FBQyxVQUFVLENBQUM7SUFDcERELFNBQVMsQ0FBQ0UsT0FBTyxDQUFDLFVBQUFDLEdBQUcsRUFBSTtNQUNyQixJQUFNQyxPQUFPLEdBQUdELEdBQUcsQ0FBQ0YsZ0JBQWdCLENBQUMsSUFBSSxDQUFDO01BQzFDLElBQU1JLFFBQVEsR0FBR0MsTUFBTSxDQUFDRixPQUFPLENBQUMsQ0FBQyxDQUFDLENBQUNHLFNBQVMsRUFBRSxhQUFhLENBQUMsQ0FBQ0MsTUFBTSxDQUFDLENBQUM7TUFDckVKLE9BQU8sQ0FBQyxDQUFDLENBQUMsQ0FBQ0ssWUFBWSxDQUFDLFlBQVksRUFBRUosUUFBUSxDQUFDO0lBQ25ELENBQUMsQ0FBQzs7SUFFRjtJQUNBLElBQU1LLFNBQVMsR0FBR0MsQ0FBQyxDQUFDZCxLQUFLLENBQUMsQ0FBQ2UsU0FBUyxDQUFDO01BQ2pDLE1BQU0sRUFBRSxLQUFLO01BQ2IsT0FBTyxFQUFFLEVBQUU7TUFDWCxRQUFRLEVBQUU7SUFDZCxDQUFDLENBQUM7RUFFTixDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNIQyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFjO01BQ2RqQixhQUFhLENBQUMsQ0FBQztJQUNuQjtFQUNKLENBQUM7QUFDTCxDQUFDLENBQUMsQ0FBQzs7QUFHSDtBQUNBa0IsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDcEIsZ0JBQWdCLENBQUNrQixJQUFJLENBQUMsQ0FBQztBQUMzQixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvcHJvamVjdHMvdGFyZ2V0cy90YXJnZXRzLmpzP2FmZGMiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVFByb2plY3RUYXJnZXRzID0gZnVuY3Rpb24gKCkge1xuXG4gICAgdmFyIGluaXREYXRhdGFibGUgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIGNvbnN0IHRhYmxlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X3Byb2ZpbGVfb3ZlcnZpZXdfdGFibGUnKTtcblxuICAgICAgICAvLyBzZXQgZGF0ZSBkYXRhIG9yZGVyXG4gICAgICAgIGNvbnN0IHRhYmxlUm93cyA9IHRhYmxlLnF1ZXJ5U2VsZWN0b3JBbGwoJ3Rib2R5IHRyJyk7XG4gICAgICAgIHRhYmxlUm93cy5mb3JFYWNoKHJvdyA9PiB7XG4gICAgICAgICAgICBjb25zdCBkYXRlUm93ID0gcm93LnF1ZXJ5U2VsZWN0b3JBbGwoJ3RkJyk7XG4gICAgICAgICAgICBjb25zdCByZWFsRGF0ZSA9IG1vbWVudChkYXRlUm93WzFdLmlubmVySFRNTCwgXCJNTU0gRCwgWVlZWVwiKS5mb3JtYXQoKTtcbiAgICAgICAgICAgIGRhdGVSb3dbMV0uc2V0QXR0cmlidXRlKCdkYXRhLW9yZGVyJywgcmVhbERhdGUpO1xuICAgICAgICB9KTtcblxuICAgICAgICAvLyBpbml0IGRhdGF0YWJsZSAtLS0gbW9yZSBpbmZvIG9uIGRhdGF0YWJsZXM6IGh0dHBzOi8vZGF0YXRhYmxlcy5uZXQvbWFudWFsL1xuICAgICAgICBjb25zdCBkYXRhdGFibGUgPSAkKHRhYmxlKS5EYXRhVGFibGUoe1xuICAgICAgICAgICAgXCJpbmZvXCI6IGZhbHNlLFxuICAgICAgICAgICAgJ29yZGVyJzogW10sXG4gICAgICAgICAgICBcInBhZ2luZ1wiOiBmYWxzZSxcbiAgICAgICAgfSk7XG5cbiAgICB9XG5cbiAgICAvLyBQdWJsaWMgbWV0aG9kc1xuICAgIHJldHVybiB7XG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGluaXREYXRhdGFibGUoKTtcbiAgICAgICAgfVxuICAgIH1cbn0oKTtcblxuXG4vLyBPbiBkb2N1bWVudCByZWFkeVxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcbiAgICBLVFByb2plY3RUYXJnZXRzLmluaXQoKTtcbn0pO1xuIl0sIm5hbWVzIjpbIktUUHJvamVjdFRhcmdldHMiLCJpbml0RGF0YXRhYmxlIiwidGFibGUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwidGFibGVSb3dzIiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJyb3ciLCJkYXRlUm93IiwicmVhbERhdGUiLCJtb21lbnQiLCJpbm5lckhUTUwiLCJmb3JtYXQiLCJzZXRBdHRyaWJ1dGUiLCJkYXRhdGFibGUiLCIkIiwiRGF0YVRhYmxlIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/projects/targets/targets.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/projects/targets/targets.js"]();
/******/ 	
/******/ })()
;