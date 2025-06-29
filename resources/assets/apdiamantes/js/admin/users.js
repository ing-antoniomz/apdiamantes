"use strict";

// Class definition
var adminUsers = function () {

    var sendActivation = function () {
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.send-activation-btn');
            if (e.target && btn) {
                e.preventDefault();
                var user_name = e.target.getAttribute('data-user-name');
                Swal.fire({
                    title: 'Activar Usuario',
                    text: 'Se enviará el correo de activación al usuario ' + user_name + '. ¿Deseas continuar?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, Activar',
                    cancelButtonText: 'Cancelar',
                    customClass: {
                        confirmButton: 'btn btn-light btn-active-light-primary text-white',    // Cambia aquí la clase del botón de confirmar
                        cancelButton: 'btn btn-light btn-active-light-danger text-white'        // Cambia aquí la clase del botón de cancelar
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.dispatchEvent(new CustomEvent('activar-usuario', { detail: user_name }));
                    }
                });
            }
        });
    }

    var editUser = function () {
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.edit-user-btn');
            if (e.target && btn) {
                e.preventDefault();

                try {
                    const userJson = e.target.getAttribute('data-user');
                    const userData = JSON.parse(userJson);

                    window.dispatchEvent(new CustomEvent('editar-usuario', { detail: userData }));
                } catch (error) {
                    console.error('Error al parsear los datos del usuario:', error);
                }
            }
        });
    }

    var newUser = function () {
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('#add-user-btn'); // Busca el ancestro con ese ID
            if (btn) {
                window.dispatchEvent(new CustomEvent('nuevo-usuario'));
            }
        });
    }

    // Public methods
    return {
        init: function () {
            sendActivation();
            editUser();
            newUser();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    adminUsers.init();
});
