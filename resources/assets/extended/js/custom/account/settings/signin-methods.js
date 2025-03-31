"use strict";

// Class definition
var KTAccountSettingsSigninMethods = function () {
    // Private functions
    var initSettings = function () {

        // UI elements
        /* var signInMainEl = document.getElementById('kt_signin_email');
        var signInEditEl = document.getElementById('kt_signin_email_edit'); */
        var passwordMainEl = document.getElementById('kt_signin_password');
        var passwordEditEl = document.getElementById('kt_signin_password_edit');

        // button elements
        /* var signInChangeEmail = document.getElementById('kt_signin_email_button');
        var signInCancelEmail = document.getElementById('kt_signin_cancel'); */
        var passwordChange = document.getElementById('kt_signin_password_button');
        var passwordCancel = document.getElementById('kt_password_cancel');

        // toggle UI
        /* signInChangeEmail.querySelector('button').addEventListener('click', function () {
            toggleChangeEmail();
        }); */

        /* signInCancelEmail.addEventListener('click', function () {
            toggleChangeEmail();
        }); */

        passwordChange.querySelector('button').addEventListener('click', function () {
            toggleChangePassword();
        });

        passwordCancel.addEventListener('click', function () {
            toggleChangePassword();
        });

        /* var toggleChangeEmail = function () {
            signInMainEl.classList.toggle('d-none');
            signInChangeEmail.classList.toggle('d-none');
            signInEditEl.classList.toggle('d-none');
        } */

        var toggleChangePassword = function () {
            passwordMainEl.classList.toggle('d-none');
            passwordChange.classList.toggle('d-none');
            passwordEditEl.classList.toggle('d-none');
        }
    }

    var handleChangeEmail = function (e) {
        var validation;

        // form elements
        var form = document.getElementById('kt_signin_change_email');
        var submitButton = form.querySelector('#kt_signin_submit');

        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita un correo electrónico'
                            },
                            emailAddress: {
                                message: 'Formato de correo Incorrecto'
                            }
                        }
                    },

                    current_password_email: {
                        validators: {
                            notEmpty: {
                                message: 'Ingresa tu contraseña'
                            }
                        }
                    }
                },

                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );

        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status === 'Valid') {

                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Send ajax request
                    axios.post(form.getAttribute('action'), new FormData(form))
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
                            $('.correo').empty();
                            $('.correo').html($('#email').val());
                            $('#current_email').val($('#email').val());
                            $('#current_email_password').val($('#email').val());
                            $('#kt_signin_change_email').trigger('reset');
                            $('#kt_signin_change_email .form-control').removeClass('is-valid is-invalid');
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

    var handleChangePassword = function (e) {
        var validation;
        // form elements
        var form = document.getElementById('kt_signin_change_password');
        var submitButton = form.querySelector('#kt_password_submit');
        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    current_password: {
                        validators: {
                            notEmpty: {
                                message: 'Ingresa tu contraseña actual'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Ingresa una nueva contraseña'
                            },
                            regexp: {
                                message: 'Formato incorrecto',
                                regexp: '^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$'
                            }
                        }
                    },
                    password_confirmation: {
                        validators: {
                            notEmpty: {
                                message: 'Se necesita confirmar la contraseña'
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'No coincide con la contraseña nueva'
                            }
                        }
                    },
                },
                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: 'is-invalid',
                        eleValidClass: 'is-valid'
                    })
                }
            }
        );
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            validation.validate().then(function (status) {
                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    // Disable button to avoid multiple click
                    submitButton.disabled = true;
                    // Send ajax request
                    axios.post(form.getAttribute('action'), new FormData(form))
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
                            $('#current_email').val($('#email').val());
                            $('#current_email_password').val($('#email').val());
                            $('#kt_signin_change_password').trigger('reset');
                            $('#kt_signin_change_password .form-control').removeClass('is-valid is-invalid');
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
            initSettings();
            //handleChangeEmail();
            handleChangePassword();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAccountSettingsSigninMethods.init();
});
