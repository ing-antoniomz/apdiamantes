"use strict";

// Class definition
var KTAccountSettingsProfileDetails = function () {
    // Private variables
    var form;
    var submitButton;
    var validation;
    // Private functions
    var initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation: https://formvalidation.io/
        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    nombre: {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita un Nombre'
                            }
                        }
                    },
                    apellido_paterno: {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita un Apellido Paterno'
                            }
                        }
                    },
                    apellido_materno: {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita un Apellido Materno'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita un Teléfono de Contacto'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: 'is-invalid',
                        eleValidClass: 'is-valid'
                    })
                }
            }
        );
        // Select2 validation integration
        /* $(form.querySelector('[name="language"]')).on('change', function () {
            // Revalidate the color field when an option is chosen
            validation.revalidateField('language');
        }); */
    }
    var handleForm = function () {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            // Validate form
            validation.validate().then(function (status) {
                if (status === 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    // Disable button to avoid multiple click
                    submitButton.disabled = true;
                    // Send ajax request
                    axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form))
                        .then(function (response) {
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: response.data.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Aceptar",
                                customClass: {
                                    confirmButton: "btn btn-light btn-active-color-white"
                                }
                            });
                            $('#kt_account_profile_details_form .form-control').removeClass('is-valid is-invalid');
                        })
                        .catch(function (error) {
                            let dataMessage = error.response.data.message;
                            /* let dataErrors = error.response.data.errors;
                            for (const errorsKey in dataErrors) {
                                if (!dataErrors.hasOwnProperty(errorsKey)) continue;
                                dataMessage += "\r\n" + dataErrors[errorsKey];
                            } */
                            if (error.response.status=='422') {
                                Swal.fire({
                                    text: dataMessage,
                                    icon: "warning",
                                    buttonsStyling: false,
                                    confirmButtonText: "Aceptar",
                                    customClass: {
                                        confirmButton: "btn btn-light btn-active-color-white"
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: 'Ha ocurrido algo inesperado.',
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Aceptar",
                                    customClass: {
                                        confirmButton: "btn btn-light btn-active-color-white"
                                    }
                                });
                            }
                        })
                        .then(function () {
                            // always executed
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');
                            // Enable button
                            submitButton.disabled = false;
                        });
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Revisa bien los datos ingresados.",
                        icon: "warning",
                        buttonsStyling: false,
                        confirmButtonText: "Revisar",
                        customClass: {
                            confirmButton: "btn btn-light btn-active-color-white"
                        }
                    });
                }
            });
        });
    }
    // Public methods
    return {
        init: function () {
            form = document.getElementById('kt_account_profile_details_form');
            submitButton = form.querySelector('#kt_account_profile_details_submit');
            initValidation();
            handleForm();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAccountSettingsProfileDetails.init();
});
