// resources/js/plugins/errorHandlerPlugin.js

export default {
    install(app) {
        app.config.globalProperties.$handleError = function (error) {
            if (!error.response) {
                Swal.fire({
                    text: "No se pudo establecer comunicación con el servidor.",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                    customClass: { confirmButton: "btn btn-light btn-active-color-white" },
                });
                return;
            }

            let dataMessage = error.response.data.message;
            if (error.response.status === 419) {
                Swal.fire({
                    text: "Ha expirado la sesión, recarga la página.",
                    icon: "info",
                    buttonsStyling: false,
                    confirmButtonText: "Recargar",
                    customClass: {
                        confirmButton: "btn btn-light btn-active-color-white",
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload(true); // Recargar la página
                    }
                });
            } else if (error.response.status === 422) {
                Swal.fire({
                    text: dataMessage,
                    icon: "warning",
                    buttonsStyling: false,
                    confirmButtonText: "Aceptar",
                    customClass: {
                        confirmButton: "btn btn-light btn-active-color-white",
                    },
                });
            } else {
                Swal.fire({
                    text: "Ha ocurrido algo inesperado.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Aceptar",
                    customClass: {
                        confirmButton: "btn btn-light btn-active-color-white",
                    },
                });
            }
        };
    },
};
