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

/***/ "./resources/assets/core/js/custom/apps/ecommerce/customers/details/update-profile.js":
/*!********************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/ecommerce/customers/details/update-profile.js ***!
  \********************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTEcommerceUpdateProfile = function () {\n  var submitButton;\n  var validator;\n  var form;\n\n  // Init form inputs\n  var handleForm = function handleForm() {\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    validator = FormValidation.formValidation(form, {\n      fields: {\n        'name': {\n          validators: {\n            notEmpty: {\n              message: 'Name is required'\n            }\n          }\n        },\n        'gen_email': {\n          validators: {\n            notEmpty: {\n              message: 'General Email is required'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    });\n\n    // Action buttons\n    submitButton.addEventListener('click', function (e) {\n      e.preventDefault();\n\n      // Validate form before submit\n      if (validator) {\n        validator.validate().then(function (status) {\n          console.log('validated!');\n          if (status == 'Valid') {\n            submitButton.setAttribute('data-kt-indicator', 'on');\n\n            // Disable submit button whilst loading\n            submitButton.disabled = true;\n            setTimeout(function () {\n              submitButton.removeAttribute('data-kt-indicator');\n              Swal.fire({\n                text: \"Your profile has been saved!\",\n                icon: \"success\",\n                buttonsStyling: false,\n                confirmButtonText: \"Ok, got it!\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              }).then(function (result) {\n                if (result.isConfirmed) {\n                  // Enable submit button after loading\n                  submitButton.disabled = false;\n                }\n              });\n            }, 2000);\n          } else {\n            Swal.fire({\n              text: \"Sorry, looks like there are some errors detected, please try again.\",\n              icon: \"error\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            });\n          }\n        });\n      }\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      // Elements\n      form = document.querySelector('#kt_ecommerce_customer_profile');\n      submitButton = form.querySelector('#kt_ecommerce_customer_profile_submit');\n      handleForm();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTEcommerceUpdateProfile.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvZWNvbW1lcmNlL2N1c3RvbWVycy9kZXRhaWxzL3VwZGF0ZS1wcm9maWxlLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsd0JBQXdCLEdBQUcsWUFBWTtFQUN2QyxJQUFJQyxZQUFZO0VBQ2hCLElBQUlDLFNBQVM7RUFDYixJQUFJQyxJQUFJOztFQUVSO0VBQ0EsSUFBSUMsVUFBVSxHQUFHLFNBQWJBLFVBQVVBLENBQUEsRUFBZTtJQUN6QjtJQUNORixTQUFTLEdBQUdHLGNBQWMsQ0FBQ0MsY0FBYyxDQUN4Q0gsSUFBSSxFQUNKO01BQ0NJLE1BQU0sRUFBRTtRQUNRLE1BQU0sRUFBRTtVQUN0QkMsVUFBVSxFQUFFO1lBQ1hDLFFBQVEsRUFBRTtjQUNUQyxPQUFPLEVBQUU7WUFDVjtVQUNEO1FBQ0QsQ0FBQztRQUNELFdBQVcsRUFBRTtVQUNaRixVQUFVLEVBQUU7WUFDWEMsUUFBUSxFQUFFO2NBQ1RDLE9BQU8sRUFBRTtZQUNWO1VBQ0Q7UUFDRDtNQUNELENBQUM7TUFDREMsT0FBTyxFQUFFO1FBQ1JDLE9BQU8sRUFBRSxJQUFJUCxjQUFjLENBQUNNLE9BQU8sQ0FBQ0UsT0FBTyxDQUFDLENBQUM7UUFDN0NDLFNBQVMsRUFBRSxJQUFJVCxjQUFjLENBQUNNLE9BQU8sQ0FBQ0ksVUFBVSxDQUFDO1VBQ2hEQyxXQUFXLEVBQUUsU0FBUztVQUNKQyxlQUFlLEVBQUUsRUFBRTtVQUNuQkMsYUFBYSxFQUFFO1FBQ2xDLENBQUM7TUFDRjtJQUNELENBQ0QsQ0FBQzs7SUFFRDtJQUNBakIsWUFBWSxDQUFDa0IsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVDLENBQUMsRUFBRTtNQUNuREEsQ0FBQyxDQUFDQyxjQUFjLENBQUMsQ0FBQzs7TUFFbEI7TUFDQSxJQUFJbkIsU0FBUyxFQUFFO1FBQ2RBLFNBQVMsQ0FBQ29CLFFBQVEsQ0FBQyxDQUFDLENBQUNDLElBQUksQ0FBQyxVQUFVQyxNQUFNLEVBQUU7VUFDM0NDLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLFlBQVksQ0FBQztVQUV6QixJQUFJRixNQUFNLElBQUksT0FBTyxFQUFFO1lBQ3RCdkIsWUFBWSxDQUFDMEIsWUFBWSxDQUFDLG1CQUFtQixFQUFFLElBQUksQ0FBQzs7WUFFcEQ7WUFDQTFCLFlBQVksQ0FBQzJCLFFBQVEsR0FBRyxJQUFJO1lBRTVCQyxVQUFVLENBQUMsWUFBVztjQUNyQjVCLFlBQVksQ0FBQzZCLGVBQWUsQ0FBQyxtQkFBbUIsQ0FBQztjQUVqREMsSUFBSSxDQUFDQyxJQUFJLENBQUM7Z0JBQ1RDLElBQUksRUFBRSw4QkFBOEI7Z0JBQ3BDQyxJQUFJLEVBQUUsU0FBUztnQkFDZkMsY0FBYyxFQUFFLEtBQUs7Z0JBQ3JCQyxpQkFBaUIsRUFBRSxhQUFhO2dCQUNoQ0MsV0FBVyxFQUFFO2tCQUNaQyxhQUFhLEVBQUU7Z0JBQ2hCO2NBQ0QsQ0FBQyxDQUFDLENBQUNmLElBQUksQ0FBQyxVQUFVZ0IsTUFBTSxFQUFFO2dCQUN6QixJQUFJQSxNQUFNLENBQUNDLFdBQVcsRUFBRTtrQkFDdkI7a0JBQ0F2QyxZQUFZLENBQUMyQixRQUFRLEdBQUcsS0FBSztnQkFDOUI7Y0FDRCxDQUFDLENBQUM7WUFDSCxDQUFDLEVBQUUsSUFBSSxDQUFDO1VBQ1QsQ0FBQyxNQUFNO1lBQ05HLElBQUksQ0FBQ0MsSUFBSSxDQUFDO2NBQ1RDLElBQUksRUFBRSxxRUFBcUU7Y0FDM0VDLElBQUksRUFBRSxPQUFPO2NBQ2JDLGNBQWMsRUFBRSxLQUFLO2NBQ3JCQyxpQkFBaUIsRUFBRSxhQUFhO2NBQ2hDQyxXQUFXLEVBQUU7Z0JBQ1pDLGFBQWEsRUFBRTtjQUNoQjtZQUNELENBQUMsQ0FBQztVQUNIO1FBQ0QsQ0FBQyxDQUFDO01BQ0g7SUFDRCxDQUFDLENBQUM7RUFDQSxDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FHLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWM7TUFDZDtNQUNBdEMsSUFBSSxHQUFHdUMsUUFBUSxDQUFDQyxhQUFhLENBQUMsZ0NBQWdDLENBQUM7TUFDL0QxQyxZQUFZLEdBQUdFLElBQUksQ0FBQ3dDLGFBQWEsQ0FBQyx1Q0FBdUMsQ0FBQztNQUUxRXZDLFVBQVUsQ0FBQyxDQUFDO0lBQ2hCO0VBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyxDQUFDOztBQUVIO0FBQ0F3QyxNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVk7RUFDckM3Qyx3QkFBd0IsQ0FBQ3lDLElBQUksQ0FBQyxDQUFDO0FBQ2hDLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vYXBwcy9lY29tbWVyY2UvY3VzdG9tZXJzL2RldGFpbHMvdXBkYXRlLXByb2ZpbGUuanM/YmQxNyJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxudmFyIEtURWNvbW1lcmNlVXBkYXRlUHJvZmlsZSA9IGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgc3VibWl0QnV0dG9uO1xuICAgIHZhciB2YWxpZGF0b3I7XG4gICAgdmFyIGZvcm07XG5cbiAgICAvLyBJbml0IGZvcm0gaW5wdXRzXG4gICAgdmFyIGhhbmRsZUZvcm0gPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIC8vIEluaXQgZm9ybSB2YWxpZGF0aW9uIHJ1bGVzLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBGb3JtVmFsaWRhdGlvbiBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOmh0dHBzOi8vZm9ybXZhbGlkYXRpb24uaW8vXG5cdFx0dmFsaWRhdG9yID0gRm9ybVZhbGlkYXRpb24uZm9ybVZhbGlkYXRpb24oXG5cdFx0XHRmb3JtLFxuXHRcdFx0e1xuXHRcdFx0XHRmaWVsZHM6IHtcbiAgICAgICAgICAgICAgICAgICAgJ25hbWUnOiB7XG5cdFx0XHRcdFx0XHR2YWxpZGF0b3JzOiB7XG5cdFx0XHRcdFx0XHRcdG5vdEVtcHR5OiB7XG5cdFx0XHRcdFx0XHRcdFx0bWVzc2FnZTogJ05hbWUgaXMgcmVxdWlyZWQnXG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9LFxuXHRcdFx0XHRcdCdnZW5fZW1haWwnOiB7XG5cdFx0XHRcdFx0XHR2YWxpZGF0b3JzOiB7XG5cdFx0XHRcdFx0XHRcdG5vdEVtcHR5OiB7XG5cdFx0XHRcdFx0XHRcdFx0bWVzc2FnZTogJ0dlbmVyYWwgRW1haWwgaXMgcmVxdWlyZWQnXG5cdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0sXG5cdFx0XHRcdHBsdWdpbnM6IHtcblx0XHRcdFx0XHR0cmlnZ2VyOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5UcmlnZ2VyKCksXG5cdFx0XHRcdFx0Ym9vdHN0cmFwOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5Cb290c3RyYXA1KHtcblx0XHRcdFx0XHRcdHJvd1NlbGVjdG9yOiAnLmZ2LXJvdycsXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVJbnZhbGlkQ2xhc3M6ICcnLFxuICAgICAgICAgICAgICAgICAgICAgICAgZWxlVmFsaWRDbGFzczogJydcblx0XHRcdFx0XHR9KVxuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0KTtcblxuXHRcdC8vIEFjdGlvbiBidXR0b25zXG5cdFx0c3VibWl0QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcblxuXHRcdFx0Ly8gVmFsaWRhdGUgZm9ybSBiZWZvcmUgc3VibWl0XG5cdFx0XHRpZiAodmFsaWRhdG9yKSB7XG5cdFx0XHRcdHZhbGlkYXRvci52YWxpZGF0ZSgpLnRoZW4oZnVuY3Rpb24gKHN0YXR1cykge1xuXHRcdFx0XHRcdGNvbnNvbGUubG9nKCd2YWxpZGF0ZWQhJyk7XG5cblx0XHRcdFx0XHRpZiAoc3RhdHVzID09ICdWYWxpZCcpIHtcblx0XHRcdFx0XHRcdHN1Ym1pdEJ1dHRvbi5zZXRBdHRyaWJ1dGUoJ2RhdGEta3QtaW5kaWNhdG9yJywgJ29uJyk7XG5cblx0XHRcdFx0XHRcdC8vIERpc2FibGUgc3VibWl0IGJ1dHRvbiB3aGlsc3QgbG9hZGluZ1xuXHRcdFx0XHRcdFx0c3VibWl0QnV0dG9uLmRpc2FibGVkID0gdHJ1ZTtcblxuXHRcdFx0XHRcdFx0c2V0VGltZW91dChmdW5jdGlvbigpIHtcblx0XHRcdFx0XHRcdFx0c3VibWl0QnV0dG9uLnJlbW92ZUF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InKTtcblx0XHRcdFx0XHRcdFx0XG5cdFx0XHRcdFx0XHRcdFN3YWwuZmlyZSh7XG5cdFx0XHRcdFx0XHRcdFx0dGV4dDogXCJZb3VyIHByb2ZpbGUgaGFzIGJlZW4gc2F2ZWQhXCIsXG5cdFx0XHRcdFx0XHRcdFx0aWNvbjogXCJzdWNjZXNzXCIsXG5cdFx0XHRcdFx0XHRcdFx0YnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxuXHRcdFx0XHRcdFx0XHRcdGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXG5cdFx0XHRcdFx0XHRcdFx0Y3VzdG9tQ2xhc3M6IHtcblx0XHRcdFx0XHRcdFx0XHRcdGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCJcblx0XHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHRcdH0pLnRoZW4oZnVuY3Rpb24gKHJlc3VsdCkge1xuXHRcdFx0XHRcdFx0XHRcdGlmIChyZXN1bHQuaXNDb25maXJtZWQpIHtcblx0XHRcdFx0XHRcdFx0XHRcdC8vIEVuYWJsZSBzdWJtaXQgYnV0dG9uIGFmdGVyIGxvYWRpbmdcblx0XHRcdFx0XHRcdFx0XHRcdHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xuXHRcdFx0XHRcdFx0XHRcdH1cblx0XHRcdFx0XHRcdFx0fSk7XHRcdFx0XHRcdFx0XHRcblx0XHRcdFx0XHRcdH0sIDIwMDApOyAgIFx0XHRcdFx0XHRcdFxuXHRcdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0XHRTd2FsLmZpcmUoe1xuXHRcdFx0XHRcdFx0XHR0ZXh0OiBcIlNvcnJ5LCBsb29rcyBsaWtlIHRoZXJlIGFyZSBzb21lIGVycm9ycyBkZXRlY3RlZCwgcGxlYXNlIHRyeSBhZ2Fpbi5cIixcblx0XHRcdFx0XHRcdFx0aWNvbjogXCJlcnJvclwiLFxuXHRcdFx0XHRcdFx0XHRidXR0b25zU3R5bGluZzogZmFsc2UsXG5cdFx0XHRcdFx0XHRcdGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXG5cdFx0XHRcdFx0XHRcdGN1c3RvbUNsYXNzOiB7XG5cdFx0XHRcdFx0XHRcdFx0Y29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIlxuXHRcdFx0XHRcdFx0XHR9XG5cdFx0XHRcdFx0XHR9KTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0pO1xuXHRcdFx0fVxuXHRcdH0pO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIC8vIFB1YmxpYyBmdW5jdGlvbnNcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgLy8gRWxlbWVudHNcbiAgICAgICAgICAgIGZvcm0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcja3RfZWNvbW1lcmNlX2N1c3RvbWVyX3Byb2ZpbGUnKTtcbiAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbiA9IGZvcm0ucXVlcnlTZWxlY3RvcignI2t0X2Vjb21tZXJjZV9jdXN0b21lcl9wcm9maWxlX3N1Ym1pdCcpO1xuXG4gICAgICAgICAgICBoYW5kbGVGb3JtKCk7XG4gICAgICAgIH1cbiAgICB9O1xufSgpO1xuXG4vLyBPbiBkb2N1bWVudCByZWFkeVxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XG5cdEtURWNvbW1lcmNlVXBkYXRlUHJvZmlsZS5pbml0KCk7XG59KTsiXSwibmFtZXMiOlsiS1RFY29tbWVyY2VVcGRhdGVQcm9maWxlIiwic3VibWl0QnV0dG9uIiwidmFsaWRhdG9yIiwiZm9ybSIsImhhbmRsZUZvcm0iLCJGb3JtVmFsaWRhdGlvbiIsImZvcm1WYWxpZGF0aW9uIiwiZmllbGRzIiwidmFsaWRhdG9ycyIsIm5vdEVtcHR5IiwibWVzc2FnZSIsInBsdWdpbnMiLCJ0cmlnZ2VyIiwiVHJpZ2dlciIsImJvb3RzdHJhcCIsIkJvb3RzdHJhcDUiLCJyb3dTZWxlY3RvciIsImVsZUludmFsaWRDbGFzcyIsImVsZVZhbGlkQ2xhc3MiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInByZXZlbnREZWZhdWx0IiwidmFsaWRhdGUiLCJ0aGVuIiwic3RhdHVzIiwiY29uc29sZSIsImxvZyIsInNldEF0dHJpYnV0ZSIsImRpc2FibGVkIiwic2V0VGltZW91dCIsInJlbW92ZUF0dHJpYnV0ZSIsIlN3YWwiLCJmaXJlIiwidGV4dCIsImljb24iLCJidXR0b25zU3R5bGluZyIsImNvbmZpcm1CdXR0b25UZXh0IiwiY3VzdG9tQ2xhc3MiLCJjb25maXJtQnV0dG9uIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJpbml0IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/ecommerce/customers/details/update-profile.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/ecommerce/customers/details/update-profile.js"]();
/******/ 	
/******/ })()
;