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

/***/ "./resources/assets/core/js/custom/utilities/modals/create-project/team.js":
/*!*********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/utilities/modals/create-project/team.js ***!
  \*********************************************************************************/
/***/ ((module) => {

eval("\n\n// Class definition\nvar KTModalCreateProjectTeam = function () {\n  // Variables\n  var nextButton;\n  var previousButton;\n  var form;\n  var stepper;\n\n  // Private functions\n  var handleForm = function handleForm() {\n    nextButton.addEventListener('click', function (e) {\n      // Prevent default button action\n      e.preventDefault();\n\n      // Disable button to avoid multiple click \n      nextButton.disabled = true;\n\n      // Show loading indication\n      nextButton.setAttribute('data-kt-indicator', 'on');\n\n      // Simulate form submission\n      setTimeout(function () {\n        // Enable button\n        nextButton.disabled = false;\n\n        // Simulate form submission\n        nextButton.removeAttribute('data-kt-indicator');\n\n        // Go to next step\n        stepper.goNext();\n      }, 1500);\n    });\n    previousButton.addEventListener('click', function () {\n      stepper.goPrevious();\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      form = KTModalCreateProject.getForm();\n      stepper = KTModalCreateProject.getStepperObj();\n      nextButton = KTModalCreateProject.getStepper().querySelector('[data-kt-element=\"team-next\"]');\n      previousButton = KTModalCreateProject.getStepper().querySelector('[data-kt-element=\"team-previous\"]');\n      handleForm();\n    }\n  };\n}();\n\n// Webpack support\nif ( true && typeof module.exports !== 'undefined') {\n  window.KTModalCreateProjectTeam = module.exports = KTModalCreateProjectTeam;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL3V0aWxpdGllcy9tb2RhbHMvY3JlYXRlLXByb2plY3QvdGVhbS5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLHdCQUF3QixHQUFHLFlBQVk7RUFDMUM7RUFDQSxJQUFJQyxVQUFVO0VBQ2QsSUFBSUMsY0FBYztFQUNsQixJQUFJQyxJQUFJO0VBQ1IsSUFBSUMsT0FBTzs7RUFFWDtFQUNBLElBQUlDLFVBQVUsR0FBRyxTQUFiQSxVQUFVQSxDQUFBLEVBQWM7SUFDM0JKLFVBQVUsQ0FBQ0ssZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVDLENBQUMsRUFBRTtNQUNqRDtNQUNBQSxDQUFDLENBQUNDLGNBQWMsQ0FBQyxDQUFDOztNQUVsQjtNQUNBUCxVQUFVLENBQUNRLFFBQVEsR0FBRyxJQUFJOztNQUUxQjtNQUNBUixVQUFVLENBQUNTLFlBQVksQ0FBQyxtQkFBbUIsRUFBRSxJQUFJLENBQUM7O01BRWxEO01BQ0FDLFVBQVUsQ0FBQyxZQUFXO1FBQ3JCO1FBQ0FWLFVBQVUsQ0FBQ1EsUUFBUSxHQUFHLEtBQUs7O1FBRTNCO1FBQ0FSLFVBQVUsQ0FBQ1csZUFBZSxDQUFDLG1CQUFtQixDQUFDOztRQUUvQztRQUNBUixPQUFPLENBQUNTLE1BQU0sQ0FBQyxDQUFDO01BQ2pCLENBQUMsRUFBRSxJQUFJLENBQUM7SUFDVCxDQUFDLENBQUM7SUFFRlgsY0FBYyxDQUFDSSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBWTtNQUNwREYsT0FBTyxDQUFDVSxVQUFVLENBQUMsQ0FBQztJQUNyQixDQUFDLENBQUM7RUFDSCxDQUFDO0VBRUQsT0FBTztJQUNOO0lBQ0FDLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWM7TUFDakJaLElBQUksR0FBR2Esb0JBQW9CLENBQUNDLE9BQU8sQ0FBQyxDQUFDO01BQ3JDYixPQUFPLEdBQUdZLG9CQUFvQixDQUFDRSxhQUFhLENBQUMsQ0FBQztNQUM5Q2pCLFVBQVUsR0FBR2Usb0JBQW9CLENBQUNHLFVBQVUsQ0FBQyxDQUFDLENBQUNDLGFBQWEsQ0FBQywrQkFBK0IsQ0FBQztNQUM3RmxCLGNBQWMsR0FBR2Msb0JBQW9CLENBQUNHLFVBQVUsQ0FBQyxDQUFDLENBQUNDLGFBQWEsQ0FBQyxtQ0FBbUMsQ0FBQztNQUVyR2YsVUFBVSxDQUFDLENBQUM7SUFDYjtFQUNELENBQUM7QUFDRixDQUFDLENBQUMsQ0FBQzs7QUFFSDtBQUNBLElBQUksS0FBNkIsSUFBSSxPQUFPZ0IsTUFBTSxDQUFDQyxPQUFPLEtBQUssV0FBVyxFQUFFO0VBQzNFQyxNQUFNLENBQUN2Qix3QkFBd0IsR0FBR3FCLE1BQU0sQ0FBQ0MsT0FBTyxHQUFHdEIsd0JBQXdCO0FBQzVFIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS91dGlsaXRpZXMvbW9kYWxzL2NyZWF0ZS1wcm9qZWN0L3RlYW0uanM/NDdjOCJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxudmFyIEtUTW9kYWxDcmVhdGVQcm9qZWN0VGVhbSA9IGZ1bmN0aW9uICgpIHtcblx0Ly8gVmFyaWFibGVzXG5cdHZhciBuZXh0QnV0dG9uO1xuXHR2YXIgcHJldmlvdXNCdXR0b247XG5cdHZhciBmb3JtO1xuXHR2YXIgc3RlcHBlcjtcblxuXHQvLyBQcml2YXRlIGZ1bmN0aW9uc1xuXHR2YXIgaGFuZGxlRm9ybSA9IGZ1bmN0aW9uKCkge1xuXHRcdG5leHRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuXHRcdFx0Ly8gUHJldmVudCBkZWZhdWx0IGJ1dHRvbiBhY3Rpb25cblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcblxuXHRcdFx0Ly8gRGlzYWJsZSBidXR0b24gdG8gYXZvaWQgbXVsdGlwbGUgY2xpY2sgXG5cdFx0XHRuZXh0QnV0dG9uLmRpc2FibGVkID0gdHJ1ZTtcblxuXHRcdFx0Ly8gU2hvdyBsb2FkaW5nIGluZGljYXRpb25cblx0XHRcdG5leHRCdXR0b24uc2V0QXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicsICdvbicpO1xuXG5cdFx0XHQvLyBTaW11bGF0ZSBmb3JtIHN1Ym1pc3Npb25cblx0XHRcdHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XG5cdFx0XHRcdC8vIEVuYWJsZSBidXR0b25cblx0XHRcdFx0bmV4dEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xuXHRcdFx0XHRcblx0XHRcdFx0Ly8gU2ltdWxhdGUgZm9ybSBzdWJtaXNzaW9uXG5cdFx0XHRcdG5leHRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xuXHRcdFx0XHRcblx0XHRcdFx0Ly8gR28gdG8gbmV4dCBzdGVwXG5cdFx0XHRcdHN0ZXBwZXIuZ29OZXh0KCk7XG5cdFx0XHR9LCAxNTAwKTsgXHRcdFxuXHRcdH0pO1xuXG5cdFx0cHJldmlvdXNCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG5cdFx0XHRzdGVwcGVyLmdvUHJldmlvdXMoKTtcblx0XHR9KTtcblx0fVxuXG5cdHJldHVybiB7XG5cdFx0Ly8gUHVibGljIGZ1bmN0aW9uc1xuXHRcdGluaXQ6IGZ1bmN0aW9uICgpIHtcblx0XHRcdGZvcm0gPSBLVE1vZGFsQ3JlYXRlUHJvamVjdC5nZXRGb3JtKCk7XG5cdFx0XHRzdGVwcGVyID0gS1RNb2RhbENyZWF0ZVByb2plY3QuZ2V0U3RlcHBlck9iaigpO1xuXHRcdFx0bmV4dEJ1dHRvbiA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldFN0ZXBwZXIoKS5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1lbGVtZW50PVwidGVhbS1uZXh0XCJdJyk7XG5cdFx0XHRwcmV2aW91c0J1dHRvbiA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldFN0ZXBwZXIoKS5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1lbGVtZW50PVwidGVhbS1wcmV2aW91c1wiXScpO1xuXG5cdFx0XHRoYW5kbGVGb3JtKCk7XG5cdFx0fVxuXHR9O1xufSgpO1xuXG4vLyBXZWJwYWNrIHN1cHBvcnRcbmlmICh0eXBlb2YgbW9kdWxlICE9PSAndW5kZWZpbmVkJyAmJiB0eXBlb2YgbW9kdWxlLmV4cG9ydHMgIT09ICd1bmRlZmluZWQnKSB7XG5cdHdpbmRvdy5LVE1vZGFsQ3JlYXRlUHJvamVjdFRlYW0gPSBtb2R1bGUuZXhwb3J0cyA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0VGVhbTtcbn0iXSwibmFtZXMiOlsiS1RNb2RhbENyZWF0ZVByb2plY3RUZWFtIiwibmV4dEJ1dHRvbiIsInByZXZpb3VzQnV0dG9uIiwiZm9ybSIsInN0ZXBwZXIiLCJoYW5kbGVGb3JtIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImRpc2FibGVkIiwic2V0QXR0cmlidXRlIiwic2V0VGltZW91dCIsInJlbW92ZUF0dHJpYnV0ZSIsImdvTmV4dCIsImdvUHJldmlvdXMiLCJpbml0IiwiS1RNb2RhbENyZWF0ZVByb2plY3QiLCJnZXRGb3JtIiwiZ2V0U3RlcHBlck9iaiIsImdldFN0ZXBwZXIiLCJxdWVyeVNlbGVjdG9yIiwibW9kdWxlIiwiZXhwb3J0cyIsIndpbmRvdyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/utilities/modals/create-project/team.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/js/custom/utilities/modals/create-project/team.js");
/******/ 	
/******/ })()
;