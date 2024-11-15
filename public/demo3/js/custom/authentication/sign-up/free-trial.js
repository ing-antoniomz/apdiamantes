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

/***/ "./resources/assets/core/js/custom/authentication/sign-up/free-trial.js":
/*!******************************************************************************!*\
  !*** ./resources/assets/core/js/custom/authentication/sign-up/free-trial.js ***!
  \******************************************************************************/
/***/ (() => {

eval("\n\n// Class Definition\nvar KTSignupFreeTrial = function () {\n  // Elements\n  var form;\n  var submitButton;\n  var validator;\n  var passwordMeter;\n\n  // Handle form\n  var handleForm = function handleForm(e) {\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    validator = FormValidation.formValidation(form, {\n      fields: {\n        'email': {\n          validators: {\n            regexp: {\n              regexp: /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/,\n              message: 'The value is not a valid email address'\n            },\n            notEmpty: {\n              message: 'Email address is required'\n            }\n          }\n        },\n        'password': {\n          validators: {\n            notEmpty: {\n              message: 'The password is required'\n            },\n            callback: {\n              message: 'Please enter valid password',\n              callback: function callback(input) {\n                if (input.value.length > 0) {\n                  return validatePassword();\n                }\n              }\n            }\n          }\n        },\n        'confirm-password': {\n          validators: {\n            notEmpty: {\n              message: 'The password confirmation is required'\n            },\n            identical: {\n              compare: function compare() {\n                return form.querySelector('[name=\"password\"]').value;\n              },\n              message: 'The password and its confirm are not the same'\n            }\n          }\n        },\n        'toc': {\n          validators: {\n            notEmpty: {\n              message: 'You must accept the terms and conditions'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger({\n          event: {\n            password: false\n          }\n        }),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    });\n    submitButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      validator.revalidateField('password');\n      validator.validate().then(function (status) {\n        if (status == 'Valid') {\n          // Show loading indication\n          submitButton.setAttribute('data-kt-indicator', 'on');\n\n          // Disable button to avoid multiple click \n          submitButton.disabled = true;\n\n          // Simulate ajax request\n          setTimeout(function () {\n            // Hide loading indication\n            submitButton.removeAttribute('data-kt-indicator');\n\n            // Enable button\n            submitButton.disabled = false;\n\n            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n            Swal.fire({\n              text: \"You have successfully registered!\",\n              icon: \"success\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            }).then(function (result) {\n              if (result.isConfirmed) {\n                form.reset(); // reset form                    \n                passwordMeter.reset(); // reset password meter\n\n                //form.submit(); // submit form\n                var redirectUrl = form.getAttribute('data-kt-redirect-url');\n                if (redirectUrl) {\n                  location.href = redirectUrl;\n                }\n              }\n            });\n          }, 1500);\n        } else {\n          // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n          Swal.fire({\n            text: \"Sorry, looks like there are some errors detected, please try again.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n    form.querySelector('input[name=\"password\"]').addEventListener('input', function () {\n      if (this.value.length > 0) {\n        validator.updateFieldStatus('password', 'NotValidated');\n      }\n    });\n  };\n\n  // Password input validation\n  var validatePassword = function validatePassword() {\n    return passwordMeter.getScore() === 100;\n  };\n\n  // Public functions\n  return {\n    // Initialization\n    init: function init() {\n      form = document.querySelector('#kt_free_trial_form');\n      submitButton = document.querySelector('#kt_free_trial_submit');\n      passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter=\"true\"]'));\n      handleForm();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTSignupFreeTrial.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2F1dGhlbnRpY2F0aW9uL3NpZ24tdXAvZnJlZS10cmlhbC5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGlCQUFpQixHQUFHLFlBQVc7RUFDL0I7RUFDQSxJQUFJQyxJQUFJO0VBQ1IsSUFBSUMsWUFBWTtFQUNoQixJQUFJQyxTQUFTO0VBQ2IsSUFBSUMsYUFBYTs7RUFFakI7RUFDQSxJQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBVUEsQ0FBWUMsQ0FBQyxFQUFFO0lBQ3pCO0lBQ0FILFNBQVMsR0FBR0ksY0FBYyxDQUFDQyxjQUFjLENBQzlDUCxJQUFJLEVBQ0o7TUFDQ1EsTUFBTSxFQUFFO1FBQ1AsT0FBTyxFQUFFO1VBQ1VDLFVBQVUsRUFBRTtZQUNSQyxNQUFNLEVBQUU7Y0FDSkEsTUFBTSxFQUFFLDRCQUE0QjtjQUNwQ0MsT0FBTyxFQUFFO1lBQ2IsQ0FBQztZQUN0QkMsUUFBUSxFQUFFO2NBQ1RELE9BQU8sRUFBRTtZQUNWO1VBQ0Q7UUFDRCxDQUFDO1FBQ2MsVUFBVSxFQUFFO1VBQ1JGLFVBQVUsRUFBRTtZQUNSRyxRQUFRLEVBQUU7Y0FDTkQsT0FBTyxFQUFFO1lBQ2IsQ0FBQztZQUNERSxRQUFRLEVBQUU7Y0FDTkYsT0FBTyxFQUFFLDZCQUE2QjtjQUN0Q0UsUUFBUSxFQUFFLFNBQVZBLFFBQVFBLENBQVdDLEtBQUssRUFBRTtnQkFDdEIsSUFBSUEsS0FBSyxDQUFDQyxLQUFLLENBQUNDLE1BQU0sR0FBRyxDQUFDLEVBQUU7a0JBQ3hCLE9BQU9DLGdCQUFnQixDQUFDLENBQUM7Z0JBQzdCO2NBQ0o7WUFDSjtVQUNKO1FBQ0osQ0FBQztRQUNELGtCQUFrQixFQUFFO1VBQ2hCUixVQUFVLEVBQUU7WUFDUkcsUUFBUSxFQUFFO2NBQ05ELE9BQU8sRUFBRTtZQUNiLENBQUM7WUFDRE8sU0FBUyxFQUFFO2NBQ1BDLE9BQU8sRUFBRSxTQUFUQSxPQUFPQSxDQUFBLEVBQWE7Z0JB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QUMsVUFBVSxFQUFFLGNBQWMsQ0FBQztNQUMzRDtJQUNKLENBQUMsQ0FBQztFQUNOLENBQUM7O0VBRUQ7RUFDQSxJQUFJdkMsZ0JBQWdCLEdBQUcsU0FBbkJBLGdCQUFnQkEsQ0FBQSxFQUFjO0lBQzlCLE9BQVNkLGFBQWEsQ0FBQ3NELFFBQVEsQ0FBQyxDQUFDLEtBQUssR0FBRztFQUM3QyxDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNIO0lBQ0FDLElBQUksRUFBRSxTQUFOQSxJQUFJQSxDQUFBLEVBQWE7TUFDYjFELElBQUksR0FBRzJELFFBQVEsQ0FBQ3ZDLGFBQWEsQ0FBQyxxQkFBcUIsQ0FBQztNQUNwRG5CLFlBQVksR0FBRzBELFFBQVEsQ0FBQ3ZDLGFBQWEsQ0FBQyx1QkFBdUIsQ0FBQztNQUM5RGpCLGFBQWEsR0FBR3lELGVBQWUsQ0FBQ0MsV0FBVyxDQUFDN0QsSUFBSSxDQUFDb0IsYUFBYSxDQUFDLGlDQUFpQyxDQUFDLENBQUM7TUFFbEdoQixVQUFVLENBQUMsQ0FBQztJQUNoQjtFQUNKLENBQUM7QUFDTCxDQUFDLENBQUMsQ0FBQzs7QUFFSDtBQUNBMEQsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDaEUsaUJBQWlCLENBQUMyRCxJQUFJLENBQUMsQ0FBQztBQUM1QixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2F1dGhlbnRpY2F0aW9uL3NpZ24tdXAvZnJlZS10cmlhbC5qcz8zZTIzIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBEZWZpbml0aW9uXG52YXIgS1RTaWdudXBGcmVlVHJpYWwgPSBmdW5jdGlvbigpIHtcbiAgICAvLyBFbGVtZW50c1xuICAgIHZhciBmb3JtO1xuICAgIHZhciBzdWJtaXRCdXR0b247XG4gICAgdmFyIHZhbGlkYXRvcjtcbiAgICB2YXIgcGFzc3dvcmRNZXRlcjtcblxuICAgIC8vIEhhbmRsZSBmb3JtXG4gICAgdmFyIGhhbmRsZUZvcm0gPSBmdW5jdGlvbihlKSB7XG4gICAgICAgIC8vIEluaXQgZm9ybSB2YWxpZGF0aW9uIHJ1bGVzLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBGb3JtVmFsaWRhdGlvbiBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOmh0dHBzOi8vZm9ybXZhbGlkYXRpb24uaW8vXG4gICAgICAgIHZhbGlkYXRvciA9IEZvcm1WYWxpZGF0aW9uLmZvcm1WYWxpZGF0aW9uKFxuXHRcdFx0Zm9ybSxcblx0XHRcdHtcblx0XHRcdFx0ZmllbGRzOiB7XHRcdFx0XHRcdCBcblx0XHRcdFx0XHQnZW1haWwnOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVnZXhwOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlZ2V4cDogL15bXlxcc0BdK0BbXlxcc0BdK1xcLlteXFxzQF0rJC8sXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdUaGUgdmFsdWUgaXMgbm90IGEgdmFsaWQgZW1haWwgYWRkcmVzcycsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcblx0XHRcdFx0XHRcdFx0bm90RW1wdHk6IHtcblx0XHRcdFx0XHRcdFx0XHRtZXNzYWdlOiAnRW1haWwgYWRkcmVzcyBpcyByZXF1aXJlZCdcblx0XHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdFx0fVxuXHRcdFx0XHRcdH0sXG4gICAgICAgICAgICAgICAgICAgICdwYXNzd29yZCc6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkYXRvcnM6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnVGhlIHBhc3N3b3JkIGlzIHJlcXVpcmVkJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ1BsZWFzZSBlbnRlciB2YWxpZCBwYXNzd29yZCcsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBmdW5jdGlvbihpbnB1dCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGlucHV0LnZhbHVlLmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gdmFsaWRhdGVQYXNzd29yZCgpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICAnY29uZmlybS1wYXNzd29yZCc6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkYXRvcnM6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnVGhlIHBhc3N3b3JkIGNvbmZpcm1hdGlvbiBpcyByZXF1aXJlZCdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkZW50aWNhbDoge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb21wYXJlOiBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwicGFzc3dvcmRcIl0nKS52YWx1ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ1RoZSBwYXNzd29yZCBhbmQgaXRzIGNvbmZpcm0gYXJlIG5vdCB0aGUgc2FtZSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgICd0b2MnOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbm90RW1wdHk6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ1lvdSBtdXN0IGFjY2VwdCB0aGUgdGVybXMgYW5kIGNvbmRpdGlvbnMnXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBwbHVnaW5zOiB7XG5cdFx0XHRcdFx0dHJpZ2dlcjogbmV3IEZvcm1WYWxpZGF0aW9uLnBsdWdpbnMuVHJpZ2dlcih7XG4gICAgICAgICAgICAgICAgICAgICAgICBldmVudDoge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhc3N3b3JkOiBmYWxzZVxuICAgICAgICAgICAgICAgICAgICAgICAgfSAgXG4gICAgICAgICAgICAgICAgICAgIH0pLFxuXHRcdFx0XHRcdGJvb3RzdHJhcDogbmV3IEZvcm1WYWxpZGF0aW9uLnBsdWdpbnMuQm9vdHN0cmFwNSh7XG4gICAgICAgICAgICAgICAgICAgICAgICByb3dTZWxlY3RvcjogJy5mdi1yb3cnLFxuICAgICAgICAgICAgICAgICAgICAgICAgZWxlSW52YWxpZENsYXNzOiAnJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGVsZVZhbGlkQ2xhc3M6ICcnXG4gICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgfVx0XHRcdCBcblx0XHRcdH1cblx0XHQpO1xuXG4gICAgICAgIHN1Ym1pdEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgICAgIHZhbGlkYXRvci5yZXZhbGlkYXRlRmllbGQoJ3Bhc3N3b3JkJyk7XG5cbiAgICAgICAgICAgIHZhbGlkYXRvci52YWxpZGF0ZSgpLnRoZW4oZnVuY3Rpb24oc3RhdHVzKSB7XG5cdFx0ICAgICAgICBpZiAoc3RhdHVzID09ICdWYWxpZCcpIHtcbiAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBsb2FkaW5nIGluZGljYXRpb25cbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBEaXNhYmxlIGJ1dHRvbiB0byBhdm9pZCBtdWx0aXBsZSBjbGljayBcbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLmRpc2FibGVkID0gdHJ1ZTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBTaW11bGF0ZSBhamF4IHJlcXVlc3RcbiAgICAgICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIEhpZGUgbG9hZGluZyBpbmRpY2F0aW9uXG4gICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBFbmFibGUgYnV0dG9uXG4gICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSBmYWxzZTtcblxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBtZXNzYWdlIHBvcHVwLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOiBodHRwczovL3N3ZWV0YWxlcnQyLmdpdGh1Yi5pby9cbiAgICAgICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogXCJZb3UgaGF2ZSBzdWNjZXNzZnVsbHkgcmVnaXN0ZXJlZCFcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcInN1Y2Nlc3NcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkgeyBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9ybS5yZXNldCgpOyAgLy8gcmVzZXQgZm9ybSAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhc3N3b3JkTWV0ZXIucmVzZXQoKTsgIC8vIHJlc2V0IHBhc3N3b3JkIG1ldGVyXG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy9mb3JtLnN1Ym1pdCgpOyAvLyBzdWJtaXQgZm9ybVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgcmVkaXJlY3RVcmwgPSBmb3JtLmdldEF0dHJpYnV0ZSgnZGF0YS1rdC1yZWRpcmVjdC11cmwnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHJlZGlyZWN0VXJsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbi5ocmVmID0gcmVkaXJlY3RVcmw7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgfSwgMTUwMCk7ICAgXHRcdFx0XHRcdFx0XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBlcnJvciBwb3B1cC4gRm9yIG1vcmUgaW5mbyBjaGVjayB0aGUgcGx1Z2luJ3Mgb2ZmaWNpYWwgZG9jdW1lbnRhdGlvbjogaHR0cHM6Ly9zd2VldGFsZXJ0Mi5naXRodWIuaW8vXG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIlNvcnJ5LCBsb29rcyBsaWtlIHRoZXJlIGFyZSBzb21lIGVycm9ycyBkZXRlY3RlZCwgcGxlYXNlIHRyeSBhZ2Fpbi5cIixcbiAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwiZXJyb3JcIixcbiAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgfVxuXHRcdCAgICB9KTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgZm9ybS5xdWVyeVNlbGVjdG9yKCdpbnB1dFtuYW1lPVwicGFzc3dvcmRcIl0nKS5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgaWYgKHRoaXMudmFsdWUubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgICAgIHZhbGlkYXRvci51cGRhdGVGaWVsZFN0YXR1cygncGFzc3dvcmQnLCAnTm90VmFsaWRhdGVkJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8vIFBhc3N3b3JkIGlucHV0IHZhbGlkYXRpb25cbiAgICB2YXIgdmFsaWRhdGVQYXNzd29yZCA9IGZ1bmN0aW9uKCkge1xuICAgICAgICByZXR1cm4gIChwYXNzd29yZE1ldGVyLmdldFNjb3JlKCkgPT09IDEwMCk7XG4gICAgfVxuXG4gICAgLy8gUHVibGljIGZ1bmN0aW9uc1xuICAgIHJldHVybiB7XG4gICAgICAgIC8vIEluaXRpYWxpemF0aW9uXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgZm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9mcmVlX3RyaWFsX2Zvcm0nKTtcbiAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9mcmVlX3RyaWFsX3N1Ym1pdCcpO1xuICAgICAgICAgICAgcGFzc3dvcmRNZXRlciA9IEtUUGFzc3dvcmRNZXRlci5nZXRJbnN0YW5jZShmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LXBhc3N3b3JkLW1ldGVyPVwidHJ1ZVwiXScpKTtcblxuICAgICAgICAgICAgaGFuZGxlRm9ybSgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XG4gICAgS1RTaWdudXBGcmVlVHJpYWwuaW5pdCgpO1xufSk7XG5cblxuICJdLCJuYW1lcyI6WyJLVFNpZ251cEZyZWVUcmlhbCIsImZvcm0iLCJzdWJtaXRCdXR0b24iLCJ2YWxpZGF0b3IiLCJwYXNzd29yZE1ldGVyIiwiaGFuZGxlRm9ybSIsImUiLCJGb3JtVmFsaWRhdGlvbiIsImZvcm1WYWxpZGF0aW9uIiwiZmllbGRzIiwidmFsaWRhdG9ycyIsInJlZ2V4cCIsIm1lc3NhZ2UiLCJub3RFbXB0eSIsImNhbGxiYWNrIiwiaW5wdXQiLCJ2YWx1ZSIsImxlbmd0aCIsInZhbGlkYXRlUGFzc3dvcmQiLCJpZGVudGljYWwiLCJjb21wYXJlIiwicXVlcnlTZWxlY3RvciIsInBsdWdpbnMiLCJ0cmlnZ2VyIiwiVHJpZ2dlciIsImV2ZW50IiwicGFzc3dvcmQiLCJib290c3RyYXAiLCJCb290c3RyYXA1Iiwicm93U2VsZWN0b3IiLCJlbGVJbnZhbGlkQ2xhc3MiLCJlbGVWYWxpZENsYXNzIiwiYWRkRXZlbnRMaXN0ZW5lciIsInByZXZlbnREZWZhdWx0IiwicmV2YWxpZGF0ZUZpZWxkIiwidmFsaWRhdGUiLCJ0aGVuIiwic3RhdHVzIiwic2V0QXR0cmlidXRlIiwiZGlzYWJsZWQiLCJzZXRUaW1lb3V0IiwicmVtb3ZlQXR0cmlidXRlIiwiU3dhbCIsImZpcmUiLCJ0ZXh0IiwiaWNvbiIsImJ1dHRvbnNTdHlsaW5nIiwiY29uZmlybUJ1dHRvblRleHQiLCJjdXN0b21DbGFzcyIsImNvbmZpcm1CdXR0b24iLCJyZXN1bHQiLCJpc0NvbmZpcm1lZCIsInJlc2V0IiwicmVkaXJlY3RVcmwiLCJnZXRBdHRyaWJ1dGUiLCJsb2NhdGlvbiIsImhyZWYiLCJ1cGRhdGVGaWVsZFN0YXR1cyIsImdldFNjb3JlIiwiaW5pdCIsImRvY3VtZW50IiwiS1RQYXNzd29yZE1ldGVyIiwiZ2V0SW5zdGFuY2UiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/authentication/sign-up/free-trial.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/authentication/sign-up/free-trial.js"]();
/******/ 	
/******/ })()
;