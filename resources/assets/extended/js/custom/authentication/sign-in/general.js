"use strict";

// Class definition
var KTSigninGeneral = function () {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleForm = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'email': {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita una dirección de correo'
                            },
                            emailAddress: {
                                message: 'Formato de correo invalido'
                            }
                        }
                    },
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita una contraseña'
                            }
                            /* ,
                            callback: {
                                message: 'Ingrese una contraseña valida',
                            } */
                        }
                    }
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

        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status === 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Simulate ajax request
                    axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form))
                        .then(function (response) {
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            form.querySelector('[name="email"]').value = "";
                            form.querySelector('[name="password"]').value = "";
                            window.location.reload();
                        })
                        .catch(function (error) {
                            if (!error.response) {
                                Swal.fire({
                                    text: "No se pudo establecer comunicación con el servidor.",
                                    icon: "error",
                                    confirmButtonText: "Aceptar",
                                    customClass: { confirmButton: "btn btn-light btn-active-color-white" }
                                });
                                return;
                            }
                            let dataMessage = error.response.data.message;
                            /*
                                let dataErrors = error.response.data.errors;
                                for (const errorsKey in dataErrors) {
                                    if (!dataErrors.hasOwnProperty(errorsKey)) continue;
                                    dataMessage += "\r\n" + dataErrors[errorsKey];
                                }
                            */
                            if (error.response.status == '419') {
                                Swal.fire({
                                    text: 'Ha expirado la sesión, recarga la página.',
                                    icon: "info",
                                    buttonsStyling: false,
                                    confirmButtonText: "Recargar",
                                    customClass: {
                                        confirmButton: "btn btn-light btn-active-color-white"
                                    }
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Recargar la página y eliminar el caché
                                        window.location.reload(true); // El true borra la caché y recarga la página.
                                    }
                                });
                            } else if (error.response.status=='422') {
                                Swal.fire({
                                    text: dataMessage,
                                    icon: "warning",
                                    buttonsStyling: false,
                                    confirmButtonText: "Aceptar",
                                    customClass: {
                                        confirmButton: "btn btn-light btn-active-color-white"
                                    }
                                });
                            }  else {
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

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#kt_sign_in_form');
            submitButton = document.querySelector('#kt_sign_in_submit');

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
