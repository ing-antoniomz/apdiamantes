"use strict";

// Class definition
var adminUsers = function () {
    // Variables privadas
    var activationButton; // Variable para almacenar el selector del botón

    // Función para manejar la activación del usuario
    var sendActivation = function () {
        // Delegación de eventos para capturar clicks en los botones dentro de DataTables
        document.addEventListener('click', function (e) {
            if (e.target && e.target.matches(activationButton)) { // Usa la variable
                e.preventDefault();

                var user_id = e.target.getAttribute('data-user-id'); // Obtiene el ID del usuario

                // Mostrar SweetAlert
                Swal.fire({
                    title: 'Activar Usuario',
                    text: '¿Estás seguro de que deseas activar el usuario con ID ' + user_id + '?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, Activar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('Activado', 'El usuario ha sido activado.', 'success');
                    }
                });
            }
        });
    }


    // Public methods
    return {
        init: function () {
            activationButton = '.send-activation-btn'; // Se asigna el selector aquí
            sendActivation(); // Inicia la función
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    adminUsers.init();
});
