"use strict";

// Class definition
var adminNiveles = function () {

    var editNivel = function () {
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.edit-nivel-btn');
            if (e.target && btn) {
                e.preventDefault();

                try {
                    const nivelJson = btn.getAttribute('data-nivel');
                    const permisosJson = btn.getAttribute('data-permisos');
                    const nivelData = JSON.parse(nivelJson);
                    const permisosSeleccionados = JSON.parse(permisosJson);

                    window.dispatchEvent(new CustomEvent('editar-nivel', {
                        detail: {
                            ...nivelData,
                            permisosSeleccionados // <-- agrega los permisos seleccionados
                        }
                    }));
                } catch (error) {
                    console.error('Error al parsear los datos del nivel`:', error);
                }
            }
        });
    }

    var newNivel = function () {
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('#add-nivel-btn'); // Busca el ancestro con ese ID
            if (btn) {
                window.dispatchEvent(new CustomEvent('nuevo-nivel'));
            }
        });
    }

    // Public methods
    return {
        init: function () {
            editNivel();
            newNivel();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    adminNiveles.init();
});
