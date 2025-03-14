"use strict";

// Class definition
var adminUsers = function () {
    // Variables privadas
    var activationButton; // Variable para almacenar el selector del botón
    var editButton; // Variable para almacenar el selector del botón

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
    // Función para manejar la edición de usuario
    var editUser = function () {
        // Delegación de eventos para capturar clics en los botones de "Editar"
        document.addEventListener('click', function (e) {
            if (e.target && e.target.matches(editButton)) { // Verifica si es el botón de editar
                e.preventDefault();

                //var user_id = e.target.getAttribute('data-user-id'); // Obtiene el ID del usuario
                var user_name = e.target.getAttribute('data-user-name'); // Obtiene el nombre
                //var user_email = e.target.getAttribute('data-user-email'); // Obtiene el email

                // Actualiza el título del modal
                document.getElementById('userModalLabel').textContent = 'Editar Usuario';

                // Rellena los campos del formulario con la información del usuario
                document.getElementById('userName').value = user_name;
                //document.getElementById('userEmail').value = user_email;
                //document.getElementById('userId').value = user_id; // Guarda el ID para saber qué usuario editar

                // Abre el modal
                var myModal = new bootstrap.Modal(document.getElementById('userModal'));
                myModal.show();
            }
        });
    }

    // Función para manejar el envío del formulario (Agregar o Editar)
    var submitUserForm = function () {
        document.getElementById('userForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Evita el comportamiento predeterminado del formulario

            var user_id = document.getElementById('userId').value;
            var user_name = document.getElementById('userName').value;
            var user_email = document.getElementById('userEmail').value;

            if (user_id) {
                // Si hay un ID de usuario, es un caso de editar
                Swal.fire({
                    title: 'Editar Usuario',
                    text: '¿Estás seguro de que deseas editar este usuario?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, Editar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Realizar la solicitud de actualización
                        Swal.fire('Actualizado', 'El usuario ha sido actualizado.', 'success');
                        // Aquí puedes realizar la llamada AJAX para actualizar los datos
                    }
                });
            } else {
                // Si no hay ID de usuario, es un caso de agregar
                Swal.fire({
                    title: 'Agregar Usuario',
                    text: '¿Estás seguro de que deseas agregar este usuario?',
                    icon: 'success',
                    confirmButtonText: 'Sí, Agregar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Realizar la solicitud para agregar el nuevo usuario
                        Swal.fire('Agregado', 'El usuario ha sido agregado.', 'success');
                        // Aquí puedes realizar la llamada AJAX para agregar los datos
                    }
                });
            }

            // Cerrar el modal después de enviar el formulario
            var myModal = bootstrap.Modal.getInstance(document.getElementById('userModal'));
            myModal.hide();
        });
    }

    // Public methods
    return {
        init: function () {
            activationButton = '.send-activation-btn'; // Se asigna el selector aquí
            editButton = '.edit-btn'; // Se asigna el selector aquí
            sendActivation(); // Inicia la función
            editUser(); // Inicializa la lógica de edición
            submitUserForm(); // Inicializa el envío del formulario
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    adminUsers.init();
});
