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

/***/ "./resources/assets/core/js/custom/utilities/modals/create-project/files.js":
/*!**********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/utilities/modals/create-project/files.js ***!
  \**********************************************************************************/
/***/ ((module) => {

eval("\n\n// Class definition\nvar KTModalCreateProjectFiles = function () {\n  // Variables\n  var nextButton;\n  var previousButton;\n  var form;\n  var stepper;\n\n  // Private functions\n  var initForm = function initForm() {\n    // Project logo\n    // For more info about Dropzone plugin visit:  https://www.dropzonejs.com/#usage\n    var myDropzone = new Dropzone(\"#kt_modal_create_project_files_upload\", {\n      url: \"https://keenthemes.com/scripts/void.php\",\n      // Set the url for your upload script location\n      paramName: \"file\",\n      // The name that will be used to transfer the file\n      maxFiles: 10,\n      maxFilesize: 10,\n      // MB\n      addRemoveLinks: true,\n      accept: function accept(file, done) {\n        if (file.name == \"justinbieber.jpg\") {\n          done(\"Naha, you don't.\");\n        } else {\n          done();\n        }\n      }\n    });\n  };\n  var handleForm = function handleForm() {\n    nextButton.addEventListener('click', function (e) {\n      // Prevent default button action\n      e.preventDefault();\n\n      // Disable button to avoid multiple click \n      nextButton.disabled = true;\n\n      // Show loading indication\n      nextButton.setAttribute('data-kt-indicator', 'on');\n\n      // Simulate form submission\n      setTimeout(function () {\n        // Hide loading indication\n        nextButton.removeAttribute('data-kt-indicator');\n\n        // Enable button\n        nextButton.disabled = false;\n\n        // Go to next step\n        stepper.goNext();\n      }, 1500);\n    });\n    previousButton.addEventListener('click', function () {\n      stepper.goPrevious();\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      form = KTModalCreateProject.getForm();\n      stepper = KTModalCreateProject.getStepperObj();\n      nextButton = KTModalCreateProject.getStepper().querySelector('[data-kt-element=\"files-next\"]');\n      previousButton = KTModalCreateProject.getStepper().querySelector('[data-kt-element=\"files-previous\"]');\n      initForm();\n      handleForm();\n    }\n  };\n}();\n\n// Webpack support\nif ( true && typeof module.exports !== 'undefined') {\n  window.KTModalCreateProjectFiles = module.exports = KTModalCreateProjectFiles;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL3V0aWxpdGllcy9tb2RhbHMvY3JlYXRlLXByb2plY3QvZmlsZXMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSx5QkFBeUIsR0FBRyxZQUFZO0VBQzNDO0VBQ0EsSUFBSUMsVUFBVTtFQUNkLElBQUlDLGNBQWM7RUFDbEIsSUFBSUMsSUFBSTtFQUNSLElBQUlDLE9BQU87O0VBRVg7RUFDQSxJQUFJQyxRQUFRLEdBQUcsU0FBWEEsUUFBUUEsQ0FBQSxFQUFjO0lBQ3pCO0lBQ0E7SUFDQSxJQUFJQyxVQUFVLEdBQUcsSUFBSUMsUUFBUSxDQUFDLHVDQUF1QyxFQUFFO01BQ3RFQyxHQUFHLEVBQUUseUNBQXlDO01BQUU7TUFDdkNDLFNBQVMsRUFBRSxNQUFNO01BQUU7TUFDbkJDLFFBQVEsRUFBRSxFQUFFO01BQ1pDLFdBQVcsRUFBRSxFQUFFO01BQUU7TUFDakJDLGNBQWMsRUFBRSxJQUFJO01BQ3BCQyxNQUFNLEVBQUUsU0FBUkEsTUFBTUEsQ0FBV0MsSUFBSSxFQUFFQyxJQUFJLEVBQUU7UUFDekIsSUFBSUQsSUFBSSxDQUFDRSxJQUFJLElBQUksa0JBQWtCLEVBQUU7VUFDakNELElBQUksQ0FBQyxrQkFBa0IsQ0FBQztRQUM1QixDQUFDLE1BQU07VUFDSEEsSUFBSSxDQUFDLENBQUM7UUFDVjtNQUNKO0lBQ1YsQ0FBQyxDQUFDO0VBQ0gsQ0FBQztFQUVELElBQUlFLFVBQVUsR0FBRyxTQUFiQSxVQUFVQSxDQUFBLEVBQWM7SUFDM0JoQixVQUFVLENBQUNpQixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBVUMsQ0FBQyxFQUFFO01BQ2pEO01BQ0FBLENBQUMsQ0FBQ0MsY0FBYyxDQUFDLENBQUM7O01BRWxCO01BQ0FuQixVQUFVLENBQUNvQixRQUFRLEdBQUcsSUFBSTs7TUFFMUI7TUFDQXBCLFVBQVUsQ0FBQ3FCLFlBQVksQ0FBQyxtQkFBbUIsRUFBRSxJQUFJLENBQUM7O01BRWxEO01BQ0FDLFVBQVUsQ0FBQyxZQUFXO1FBQ3JCO1FBQ0F0QixVQUFVLENBQUN1QixlQUFlLENBQUMsbUJBQW1CLENBQUM7O1FBRS9DO1FBQ0F2QixVQUFVLENBQUNvQixRQUFRLEdBQUcsS0FBSzs7UUFFM0I7UUFDQWpCLE9BQU8sQ0FBQ3FCLE1BQU0sQ0FBQyxDQUFDO01BQ2pCLENBQUMsRUFBRSxJQUFJLENBQUM7SUFDVCxDQUFDLENBQUM7SUFFRnZCLGNBQWMsQ0FBQ2dCLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFZO01BQ3BEZCxPQUFPLENBQUNzQixVQUFVLENBQUMsQ0FBQztJQUNyQixDQUFDLENBQUM7RUFDSCxDQUFDO0VBRUQsT0FBTztJQUNOO0lBQ0FDLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWM7TUFDakJ4QixJQUFJLEdBQUd5QixvQkFBb0IsQ0FBQ0MsT0FBTyxDQUFDLENBQUM7TUFDckN6QixPQUFPLEdBQUd3QixvQkFBb0IsQ0FBQ0UsYUFBYSxDQUFDLENBQUM7TUFDOUM3QixVQUFVLEdBQUcyQixvQkFBb0IsQ0FBQ0csVUFBVSxDQUFDLENBQUMsQ0FBQ0MsYUFBYSxDQUFDLGdDQUFnQyxDQUFDO01BQzlGOUIsY0FBYyxHQUFHMEIsb0JBQW9CLENBQUNHLFVBQVUsQ0FBQyxDQUFDLENBQUNDLGFBQWEsQ0FBQyxvQ0FBb0MsQ0FBQztNQUV0RzNCLFFBQVEsQ0FBQyxDQUFDO01BQ1ZZLFVBQVUsQ0FBQyxDQUFDO0lBQ2I7RUFDRCxDQUFDO0FBQ0YsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQSxJQUFJLEtBQTZCLElBQUksT0FBT2dCLE1BQU0sQ0FBQ0MsT0FBTyxLQUFLLFdBQVcsRUFBRTtFQUMzRUMsTUFBTSxDQUFDbkMseUJBQXlCLEdBQUdpQyxNQUFNLENBQUNDLE9BQU8sR0FBR2xDLHlCQUF5QjtBQUM5RSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vdXRpbGl0aWVzL21vZGFscy9jcmVhdGUtcHJvamVjdC9maWxlcy5qcz8xY2U4Il0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RNb2RhbENyZWF0ZVByb2plY3RGaWxlcyA9IGZ1bmN0aW9uICgpIHtcblx0Ly8gVmFyaWFibGVzXG5cdHZhciBuZXh0QnV0dG9uO1xuXHR2YXIgcHJldmlvdXNCdXR0b247XG5cdHZhciBmb3JtO1xuXHR2YXIgc3RlcHBlcjtcblxuXHQvLyBQcml2YXRlIGZ1bmN0aW9uc1xuXHR2YXIgaW5pdEZvcm0gPSBmdW5jdGlvbigpIHtcblx0XHQvLyBQcm9qZWN0IGxvZ29cblx0XHQvLyBGb3IgbW9yZSBpbmZvIGFib3V0IERyb3B6b25lIHBsdWdpbiB2aXNpdDogIGh0dHBzOi8vd3d3LmRyb3B6b25lanMuY29tLyN1c2FnZVxuXHRcdHZhciBteURyb3B6b25lID0gbmV3IERyb3B6b25lKFwiI2t0X21vZGFsX2NyZWF0ZV9wcm9qZWN0X2ZpbGVzX3VwbG9hZFwiLCB7IFxuXHRcdFx0dXJsOiBcImh0dHBzOi8va2VlbnRoZW1lcy5jb20vc2NyaXB0cy92b2lkLnBocFwiLCAvLyBTZXQgdGhlIHVybCBmb3IgeW91ciB1cGxvYWQgc2NyaXB0IGxvY2F0aW9uXG4gICAgICAgICAgICBwYXJhbU5hbWU6IFwiZmlsZVwiLCAvLyBUaGUgbmFtZSB0aGF0IHdpbGwgYmUgdXNlZCB0byB0cmFuc2ZlciB0aGUgZmlsZVxuICAgICAgICAgICAgbWF4RmlsZXM6IDEwLFxuICAgICAgICAgICAgbWF4RmlsZXNpemU6IDEwLCAvLyBNQlxuICAgICAgICAgICAgYWRkUmVtb3ZlTGlua3M6IHRydWUsXG4gICAgICAgICAgICBhY2NlcHQ6IGZ1bmN0aW9uKGZpbGUsIGRvbmUpIHtcbiAgICAgICAgICAgICAgICBpZiAoZmlsZS5uYW1lID09IFwianVzdGluYmllYmVyLmpwZ1wiKSB7XG4gICAgICAgICAgICAgICAgICAgIGRvbmUoXCJOYWhhLCB5b3UgZG9uJ3QuXCIpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgIGRvbmUoKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG5cdFx0fSk7ICBcblx0fVxuXG5cdHZhciBoYW5kbGVGb3JtID0gZnVuY3Rpb24oKSB7XG5cdFx0bmV4dEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG5cdFx0XHQvLyBQcmV2ZW50IGRlZmF1bHQgYnV0dG9uIGFjdGlvblxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG5cdFx0XHQvLyBEaXNhYmxlIGJ1dHRvbiB0byBhdm9pZCBtdWx0aXBsZSBjbGljayBcblx0XHRcdG5leHRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xuXG5cdFx0XHQvLyBTaG93IGxvYWRpbmcgaW5kaWNhdGlvblxuXHRcdFx0bmV4dEJ1dHRvbi5zZXRBdHRyaWJ1dGUoJ2RhdGEta3QtaW5kaWNhdG9yJywgJ29uJyk7XG5cblx0XHRcdC8vIFNpbXVsYXRlIGZvcm0gc3VibWlzc2lvblxuXHRcdFx0c2V0VGltZW91dChmdW5jdGlvbigpIHtcblx0XHRcdFx0Ly8gSGlkZSBsb2FkaW5nIGluZGljYXRpb25cblx0XHRcdFx0bmV4dEJ1dHRvbi5yZW1vdmVBdHRyaWJ1dGUoJ2RhdGEta3QtaW5kaWNhdG9yJyk7XG5cblx0XHRcdFx0Ly8gRW5hYmxlIGJ1dHRvblxuXHRcdFx0XHRuZXh0QnV0dG9uLmRpc2FibGVkID0gZmFsc2U7XG5cdFx0XHRcdFxuXHRcdFx0XHQvLyBHbyB0byBuZXh0IHN0ZXBcblx0XHRcdFx0c3RlcHBlci5nb05leHQoKTtcblx0XHRcdH0sIDE1MDApOyBcdFx0XG5cdFx0fSk7XG5cblx0XHRwcmV2aW91c0J1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcblx0XHRcdHN0ZXBwZXIuZ29QcmV2aW91cygpO1xuXHRcdH0pO1xuXHR9XG5cblx0cmV0dXJuIHtcblx0XHQvLyBQdWJsaWMgZnVuY3Rpb25zXG5cdFx0aW5pdDogZnVuY3Rpb24gKCkge1xuXHRcdFx0Zm9ybSA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldEZvcm0oKTtcblx0XHRcdHN0ZXBwZXIgPSBLVE1vZGFsQ3JlYXRlUHJvamVjdC5nZXRTdGVwcGVyT2JqKCk7XG5cdFx0XHRuZXh0QnV0dG9uID0gS1RNb2RhbENyZWF0ZVByb2plY3QuZ2V0U3RlcHBlcigpLnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LWVsZW1lbnQ9XCJmaWxlcy1uZXh0XCJdJyk7XG5cdFx0XHRwcmV2aW91c0J1dHRvbiA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldFN0ZXBwZXIoKS5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1lbGVtZW50PVwiZmlsZXMtcHJldmlvdXNcIl0nKTtcblxuXHRcdFx0aW5pdEZvcm0oKTtcblx0XHRcdGhhbmRsZUZvcm0oKTtcblx0XHR9XG5cdH07XG59KCk7XG5cbi8vIFdlYnBhY2sgc3VwcG9ydFxuaWYgKHR5cGVvZiBtb2R1bGUgIT09ICd1bmRlZmluZWQnICYmIHR5cGVvZiBtb2R1bGUuZXhwb3J0cyAhPT0gJ3VuZGVmaW5lZCcpIHtcblx0d2luZG93LktUTW9kYWxDcmVhdGVQcm9qZWN0RmlsZXMgPSBtb2R1bGUuZXhwb3J0cyA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0RmlsZXM7XG59XG4iXSwibmFtZXMiOlsiS1RNb2RhbENyZWF0ZVByb2plY3RGaWxlcyIsIm5leHRCdXR0b24iLCJwcmV2aW91c0J1dHRvbiIsImZvcm0iLCJzdGVwcGVyIiwiaW5pdEZvcm0iLCJteURyb3B6b25lIiwiRHJvcHpvbmUiLCJ1cmwiLCJwYXJhbU5hbWUiLCJtYXhGaWxlcyIsIm1heEZpbGVzaXplIiwiYWRkUmVtb3ZlTGlua3MiLCJhY2NlcHQiLCJmaWxlIiwiZG9uZSIsIm5hbWUiLCJoYW5kbGVGb3JtIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImRpc2FibGVkIiwic2V0QXR0cmlidXRlIiwic2V0VGltZW91dCIsInJlbW92ZUF0dHJpYnV0ZSIsImdvTmV4dCIsImdvUHJldmlvdXMiLCJpbml0IiwiS1RNb2RhbENyZWF0ZVByb2plY3QiLCJnZXRGb3JtIiwiZ2V0U3RlcHBlck9iaiIsImdldFN0ZXBwZXIiLCJxdWVyeVNlbGVjdG9yIiwibW9kdWxlIiwiZXhwb3J0cyIsIndpbmRvdyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/utilities/modals/create-project/files.js\n");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/js/custom/utilities/modals/create-project/files.js");
/******/ 	
/******/ })()
;