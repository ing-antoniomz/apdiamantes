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

/***/ "./resources/assets/demo4/js/custom/pages/projects/targets/targets.js":
/*!****************************************************************************!*\
  !*** ./resources/assets/demo4/js/custom/pages/projects/targets/targets.js ***!
  \****************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTProjectTargets = function () {\n  var initDatatable = function initDatatable() {\n    var table = document.getElementById('kt_profile_overview_table');\n\n    // set date data order\n    var tableRows = table.querySelectorAll('tbody tr');\n    tableRows.forEach(function (row) {\n      var dateRow = row.querySelectorAll('td');\n      var realDate = moment(dateRow[1].innerHTML, \"MMM D, YYYY\").format();\n      dateRow[1].setAttribute('data-order', realDate);\n    });\n\n    // init datatable --- more info on datatables: https://datatables.net/manual/\n    var datatable = $(table).DataTable({\n      \"info\": false,\n      'order': [],\n      \"paging\": false\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      initDatatable();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTProjectTargets.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2RlbW80L2pzL2N1c3RvbS9wYWdlcy9wcm9qZWN0cy90YXJnZXRzL3RhcmdldHMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxnQkFBZ0IsR0FBRyxZQUFZO0VBRS9CLElBQUlDLGFBQWEsR0FBRyxTQUFoQkEsYUFBYUEsQ0FBQSxFQUFlO0lBQzVCLElBQU1DLEtBQUssR0FBR0MsUUFBUSxDQUFDQyxjQUFjLENBQUMsMkJBQTJCLENBQUM7O0lBRWxFO0lBQ0EsSUFBTUMsU0FBUyxHQUFHSCxLQUFLLENBQUNJLGdCQUFnQixDQUFDLFVBQVUsQ0FBQztJQUNwREQsU0FBUyxDQUFDRSxPQUFPLENBQUMsVUFBQUMsR0FBRyxFQUFJO01BQ3JCLElBQU1DLE9BQU8sR0FBR0QsR0FBRyxDQUFDRixnQkFBZ0IsQ0FBQyxJQUFJLENBQUM7TUFDMUMsSUFBTUksUUFBUSxHQUFHQyxNQUFNLENBQUNGLE9BQU8sQ0FBQyxDQUFDLENBQUMsQ0FBQ0csU0FBUyxFQUFFLGFBQWEsQ0FBQyxDQUFDQyxNQUFNLENBQUMsQ0FBQztNQUNyRUosT0FBTyxDQUFDLENBQUMsQ0FBQyxDQUFDSyxZQUFZLENBQUMsWUFBWSxFQUFFSixRQUFRLENBQUM7SUFDbkQsQ0FBQyxDQUFDOztJQUVGO0lBQ0EsSUFBTUssU0FBUyxHQUFHQyxDQUFDLENBQUNkLEtBQUssQ0FBQyxDQUFDZSxTQUFTLENBQUM7TUFDakMsTUFBTSxFQUFFLEtBQUs7TUFDYixPQUFPLEVBQUUsRUFBRTtNQUNYLFFBQVEsRUFBRTtJQUNkLENBQUMsQ0FBQztFQUVOLENBQUM7O0VBRUQ7RUFDQSxPQUFPO0lBQ0hDLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWM7TUFDZGpCLGFBQWEsQ0FBQyxDQUFDO0lBQ25CO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUdIO0FBQ0FrQixNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVc7RUFDakNwQixnQkFBZ0IsQ0FBQ2tCLElBQUksQ0FBQyxDQUFDO0FBQzNCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvZGVtbzQvanMvY3VzdG9tL3BhZ2VzL3Byb2plY3RzL3RhcmdldHMvdGFyZ2V0cy5qcz85ZTMxIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RQcm9qZWN0VGFyZ2V0cyA9IGZ1bmN0aW9uICgpIHtcblxuICAgIHZhciBpbml0RGF0YXRhYmxlID0gZnVuY3Rpb24gKCkge1xuICAgICAgICBjb25zdCB0YWJsZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9wcm9maWxlX292ZXJ2aWV3X3RhYmxlJyk7XG5cbiAgICAgICAgLy8gc2V0IGRhdGUgZGF0YSBvcmRlclxuICAgICAgICBjb25zdCB0YWJsZVJvd3MgPSB0YWJsZS5xdWVyeVNlbGVjdG9yQWxsKCd0Ym9keSB0cicpO1xuICAgICAgICB0YWJsZVJvd3MuZm9yRWFjaChyb3cgPT4ge1xuICAgICAgICAgICAgY29uc3QgZGF0ZVJvdyA9IHJvdy5xdWVyeVNlbGVjdG9yQWxsKCd0ZCcpO1xuICAgICAgICAgICAgY29uc3QgcmVhbERhdGUgPSBtb21lbnQoZGF0ZVJvd1sxXS5pbm5lckhUTUwsIFwiTU1NIEQsIFlZWVlcIikuZm9ybWF0KCk7XG4gICAgICAgICAgICBkYXRlUm93WzFdLnNldEF0dHJpYnV0ZSgnZGF0YS1vcmRlcicsIHJlYWxEYXRlKTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy8gaW5pdCBkYXRhdGFibGUgLS0tIG1vcmUgaW5mbyBvbiBkYXRhdGFibGVzOiBodHRwczovL2RhdGF0YWJsZXMubmV0L21hbnVhbC9cbiAgICAgICAgY29uc3QgZGF0YXRhYmxlID0gJCh0YWJsZSkuRGF0YVRhYmxlKHtcbiAgICAgICAgICAgIFwiaW5mb1wiOiBmYWxzZSxcbiAgICAgICAgICAgICdvcmRlcic6IFtdLFxuICAgICAgICAgICAgXCJwYWdpbmdcIjogZmFsc2UsXG4gICAgICAgIH0pO1xuXG4gICAgfVxuXG4gICAgLy8gUHVibGljIG1ldGhvZHNcbiAgICByZXR1cm4ge1xuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpbml0RGF0YXRhYmxlKCk7XG4gICAgICAgIH1cbiAgICB9XG59KCk7XG5cblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XG4gICAgS1RQcm9qZWN0VGFyZ2V0cy5pbml0KCk7XG59KTtcbiJdLCJuYW1lcyI6WyJLVFByb2plY3RUYXJnZXRzIiwiaW5pdERhdGF0YWJsZSIsInRhYmxlIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInRhYmxlUm93cyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwicm93IiwiZGF0ZVJvdyIsInJlYWxEYXRlIiwibW9tZW50IiwiaW5uZXJIVE1MIiwiZm9ybWF0Iiwic2V0QXR0cmlidXRlIiwiZGF0YXRhYmxlIiwiJCIsIkRhdGFUYWJsZSIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/demo4/js/custom/pages/projects/targets/targets.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/demo4/js/custom/pages/projects/targets/targets.js"]();
/******/ 	
/******/ })()
;