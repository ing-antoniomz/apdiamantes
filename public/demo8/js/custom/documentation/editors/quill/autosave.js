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

/***/ "./resources/assets/core/js/custom/documentation/editors/quill/autosave.js":
/*!*********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/quill/autosave.js ***!
  \*********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsQuillAutosave = function () {\n  // Private functions\n  var exampleAutosave = function exampleAutosave() {\n    var Delta = Quill[\"import\"]('delta');\n    var quill = new Quill('#kt_docs_quill_autosave', {\n      modules: {\n        toolbar: true\n      },\n      placeholder: 'Type your text here...',\n      theme: 'snow'\n    });\n\n    // Store accumulated changes\n    var change = new Delta();\n    quill.on('text-change', function (delta) {\n      change = change.compose(delta);\n    });\n\n    // Save periodically\n    setInterval(function () {\n      if (change.length() > 0) {\n        console.log('Saving changes', change);\n        /*\n        Send partial changes\n        $.post('/your-endpoint', {\n        partial: JSON.stringify(change)\n        });\n         Send entire document\n        $.post('/your-endpoint', {\n        doc: JSON.stringify(quill.getContents())\n        });\n        */\n        change = new Delta();\n      }\n    }, 5 * 1000);\n\n    // Check for unsaved data\n    window.onbeforeunload = function () {\n      if (change.length() > 0) {\n        return 'There are unsaved changes. Are you sure you want to leave?';\n      }\n    };\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleAutosave();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsQuillAutosave.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy9xdWlsbC9hdXRvc2F2ZS5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLG9CQUFvQixHQUFHLFlBQVk7RUFDbkM7RUFDQSxJQUFJQyxlQUFlLEdBQUcsU0FBbEJBLGVBQWVBLENBQUEsRUFBZTtJQUM5QixJQUFJQyxLQUFLLEdBQUdDLEtBQUssVUFBTyxDQUFDLE9BQU8sQ0FBQztJQUNqQyxJQUFJQyxLQUFLLEdBQUcsSUFBSUQsS0FBSyxDQUFDLHlCQUF5QixFQUFFO01BQzdDRSxPQUFPLEVBQUU7UUFDTEMsT0FBTyxFQUFFO01BQ2IsQ0FBQztNQUNEQyxXQUFXLEVBQUUsd0JBQXdCO01BQ3JDQyxLQUFLLEVBQUU7SUFDWCxDQUFDLENBQUM7O0lBRUY7SUFDQSxJQUFJQyxNQUFNLEdBQUcsSUFBSVAsS0FBSyxDQUFDLENBQUM7SUFDeEJFLEtBQUssQ0FBQ00sRUFBRSxDQUFDLGFBQWEsRUFBRSxVQUFVQyxLQUFLLEVBQUU7TUFDckNGLE1BQU0sR0FBR0EsTUFBTSxDQUFDRyxPQUFPLENBQUNELEtBQUssQ0FBQztJQUNsQyxDQUFDLENBQUM7O0lBRUY7SUFDQUUsV0FBVyxDQUFDLFlBQVk7TUFDcEIsSUFBSUosTUFBTSxDQUFDSyxNQUFNLENBQUMsQ0FBQyxHQUFHLENBQUMsRUFBRTtRQUNyQkMsT0FBTyxDQUFDQyxHQUFHLENBQUMsZ0JBQWdCLEVBQUVQLE1BQU0sQ0FBQztRQUNyQztBQUNoQjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7UUFFZ0JBLE1BQU0sR0FBRyxJQUFJUCxLQUFLLENBQUMsQ0FBQztNQUN4QjtJQUNKLENBQUMsRUFBRSxDQUFDLEdBQUcsSUFBSSxDQUFDOztJQUVaO0lBQ0FlLE1BQU0sQ0FBQ0MsY0FBYyxHQUFHLFlBQVk7TUFDaEMsSUFBSVQsTUFBTSxDQUFDSyxNQUFNLENBQUMsQ0FBQyxHQUFHLENBQUMsRUFBRTtRQUNyQixPQUFPLDREQUE0RDtNQUN2RTtJQUNKLENBQUM7RUFDTCxDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FLLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWM7TUFDZGxCLGVBQWUsQ0FBQyxDQUFDO0lBQ3JCO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUVIO0FBQ0FtQixNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVk7RUFDbENyQixvQkFBb0IsQ0FBQ21CLElBQUksQ0FBQyxDQUFDO0FBQy9CLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9lZGl0b3JzL3F1aWxsL2F1dG9zYXZlLmpzP2NlNDYiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5cbi8vIENsYXNzIGRlZmluaXRpb25cbnZhciBLVEZvcm1zUXVpbGxBdXRvc2F2ZSA9IGZ1bmN0aW9uICgpIHtcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xuICAgIHZhciBleGFtcGxlQXV0b3NhdmUgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBEZWx0YSA9IFF1aWxsLmltcG9ydCgnZGVsdGEnKTtcbiAgICAgICAgdmFyIHF1aWxsID0gbmV3IFF1aWxsKCcja3RfZG9jc19xdWlsbF9hdXRvc2F2ZScsIHtcbiAgICAgICAgICAgIG1vZHVsZXM6IHtcbiAgICAgICAgICAgICAgICB0b29sYmFyOiB0cnVlXG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICdUeXBlIHlvdXIgdGV4dCBoZXJlLi4uJyxcbiAgICAgICAgICAgIHRoZW1lOiAnc25vdydcbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy8gU3RvcmUgYWNjdW11bGF0ZWQgY2hhbmdlc1xuICAgICAgICB2YXIgY2hhbmdlID0gbmV3IERlbHRhKCk7XG4gICAgICAgIHF1aWxsLm9uKCd0ZXh0LWNoYW5nZScsIGZ1bmN0aW9uIChkZWx0YSkge1xuICAgICAgICAgICAgY2hhbmdlID0gY2hhbmdlLmNvbXBvc2UoZGVsdGEpO1xuICAgICAgICB9KTtcblxuICAgICAgICAvLyBTYXZlIHBlcmlvZGljYWxseVxuICAgICAgICBzZXRJbnRlcnZhbChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpZiAoY2hhbmdlLmxlbmd0aCgpID4gMCkge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKCdTYXZpbmcgY2hhbmdlcycsIGNoYW5nZSk7XG4gICAgICAgICAgICAgICAgLypcbiAgICAgICAgICAgICAgICBTZW5kIHBhcnRpYWwgY2hhbmdlc1xuICAgICAgICAgICAgICAgICQucG9zdCgnL3lvdXItZW5kcG9pbnQnLCB7XG4gICAgICAgICAgICAgICAgcGFydGlhbDogSlNPTi5zdHJpbmdpZnkoY2hhbmdlKVxuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgU2VuZCBlbnRpcmUgZG9jdW1lbnRcbiAgICAgICAgICAgICAgICAkLnBvc3QoJy95b3VyLWVuZHBvaW50Jywge1xuICAgICAgICAgICAgICAgIGRvYzogSlNPTi5zdHJpbmdpZnkocXVpbGwuZ2V0Q29udGVudHMoKSlcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAqL1xuICAgICAgICAgICAgICAgIGNoYW5nZSA9IG5ldyBEZWx0YSgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LCA1ICogMTAwMCk7XG5cbiAgICAgICAgLy8gQ2hlY2sgZm9yIHVuc2F2ZWQgZGF0YVxuICAgICAgICB3aW5kb3cub25iZWZvcmV1bmxvYWQgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpZiAoY2hhbmdlLmxlbmd0aCgpID4gMCkge1xuICAgICAgICAgICAgICAgIHJldHVybiAnVGhlcmUgYXJlIHVuc2F2ZWQgY2hhbmdlcy4gQXJlIHlvdSBzdXJlIHlvdSB3YW50IHRvIGxlYXZlPyc7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICByZXR1cm4ge1xuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGV4YW1wbGVBdXRvc2F2ZSgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xuICAgIEtURm9ybXNRdWlsbEF1dG9zYXZlLmluaXQoKTtcbn0pO1xuIl0sIm5hbWVzIjpbIktURm9ybXNRdWlsbEF1dG9zYXZlIiwiZXhhbXBsZUF1dG9zYXZlIiwiRGVsdGEiLCJRdWlsbCIsInF1aWxsIiwibW9kdWxlcyIsInRvb2xiYXIiLCJwbGFjZWhvbGRlciIsInRoZW1lIiwiY2hhbmdlIiwib24iLCJkZWx0YSIsImNvbXBvc2UiLCJzZXRJbnRlcnZhbCIsImxlbmd0aCIsImNvbnNvbGUiLCJsb2ciLCJ3aW5kb3ciLCJvbmJlZm9yZXVubG9hZCIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/quill/autosave.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/quill/autosave.js"]();
/******/ 	
/******/ })()
;