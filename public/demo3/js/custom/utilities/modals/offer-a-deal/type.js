(()=>{"use strict";var e={8759:e=>{var t,r,o,i,a={init:function(){o=KTModalOfferADeal.getForm(),i=KTModalOfferADeal.getStepperObj(),t=KTModalOfferADeal.getStepper().querySelector('[data-kt-element="type-next"]'),r=FormValidation.formValidation(o,{fields:{offer_type:{validators:{notEmpty:{message:"Offer type is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}),t.addEventListener("click",(function(e){e.preventDefault(),t.disabled=!0,r&&r.validate().then((function(e){console.log("validated!"),"Valid"==e?(t.setAttribute("data-kt-indicator","on"),setTimeout((function(){t.removeAttribute("data-kt-indicator"),t.disabled=!1,i.goNext()}),1e3)):(t.disabled=!1,Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn btn-primary"}}))}))}))}};void 0!==e.exports&&(window.KTModalOfferADealType=e.exports=a)}},t={};(function r(o){var i=t[o];if(void 0!==i)return i.exports;var a=t[o]={exports:{}};return e[o](a,a.exports,r),a.exports})(8759)})();