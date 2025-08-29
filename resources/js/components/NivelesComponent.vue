<template>
  <div class="modal fade" id="nivelModal" tabindex="-1" aria-labelledby="nivelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center text-white user-select-none fs-1">
                        <i class="me-4 text-white fa-duotone fs-1 fa-solid" :class="modoEdicion ? 'fa-user-pen' : 'fa-user-plus'"></i>
                        {{ modoEdicion ? 'Editar Nivel' : 'Registrar Nivel' }}
                    </h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" />
                            <path d="M6 18L18 6" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form ref="formRef" name="nivelForm" id="nivelForm" @submit.prevent="enviarFormulario" novalidate>
                        <!-- Datos varios-->
                        <div class="row mb-1">
                            <div class="col-lg-7">
                                <!-- Nombre  -->
                                <div class="row mb-3">
                                    <div class="col-lg-12 fv-row">
                                        <label for="name" class="form-label fw-bold fs-6 user-select-none required">Nombre</label>
                                        <input
                                            type="text"
                                            @input="toUppercase($event)"
                                            class="form-control form-control-lg"
                                            name="name"
                                            id="name"
                                            v-model="form.name"
                                        />
                                    </div>
                                </div>
                                <!-- Estatus y volumen  -->
                                <div class="row mb-3 align-items-center">
                                    <!-- Volumen -->
                                    <div class="col-lg-9 fv-row">
                                        <label for="volumen" class="form-label fw-bold fs-6 user-select-none required">Volumen</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            name="volumen"
                                            id="volumen"
                                            v-model="form.volumen"
                                        />
                                    </div>

                                    <!-- Checkbox alineado -->
                                    <div class="col-lg-3 d-flex align-items-center">
                                        <div class="form-check form-switch form-check-custom form-check-success form-check-solid w-100 mt-4" >
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                v-model="form.status"
                                                name="status"
                                                id="status"
                                            />
                                            <label class="form-check-label user-select-none ms-2" for="status">
                                                Activo
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5 fv-row">
                                <!-- Descripcion  -->
                                <label for="descripcion" class="form-label fw-bold fs-6 user-select-none text-center d-flex align-items-center mt-4 mt-lg-0">
                                    <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Descripción del nivel.">
                                        <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                    </span>
                                    <span class="required">Descripción</span>
                                </label>
                                <textarea
                                    v-model="form.descripcion"
                                    name="descripcion"
                                    id="descripcion"
                                    class="form-control form-control-lg mb-3 mb-lg-0"
                                    placeholder="Describe elocuentemente el nivel"
                                    rows="5"
                                    maxlength="250"
                                ></textarea>
                            </div>

                        </div>
                        <div class="row mb-3 align-items-center">
                            <!-- Input de imagen -->
                            <div class="col-lg-9 fv-row">
                                <label for="imagen" class="form-label fw-bold fs-6 user-select-none">
                                    Imágen
                                </label>
                                <input
                                    type="file"
                                    id="imagen"
                                    name="imagen"
                                    class="form-control form-control-lg"
                                    accept=".jpg, .jpeg, image/jpeg, image/svg+xml"
                                />
                            </div>

                            <!-- Enlace a imagen actual -->
                            <div class="col-lg-3 fv-row text-lg-start text-center mt-4">
                                <template v-if="form.imagen">
                                    <a
                                        :href="storageUrl(form.imagen)"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="fs-7 fw-semibold link-secondary"
                                        style="text-decoration: underline;"
                                    >
                                        Ver Imagen actual
                                        <i class="fas fa-external-link-alt ms-1"></i>
                                    </a>
                                </template>
                            </div>
                        </div>

                        <!-- Row de permisos debajo del input de imagen -->
                        <div class="row mb-3 px-4">
                            <div class="col-12">
                                <label class="form-label fw-bold fs-2 user-select-none mb-4">Permisos</label>
                            </div>
                            <div class="col-12 d-flex flex-wrap align-items-center">
                                <span v-for="permiso in permisos" :key="permiso.id" class="permisosSpanCrea">
                                    <label
                                        class="badge badge-lg fs-7 m-1 permisosLabelCrea"
                                        :class="form.permisos.includes(Number(permiso.id)) ? 'badge-light-primary' : 'badge-light-danger'"
                                        style="cursor: pointer"
                                        @click="togglePermiso(permiso.id)"
                                    >
                                        <span class="form-check-label">{{ permiso.name }}</span>
                                    </label>
                                    <input
                                        type="checkbox"
                                        style="display:none;"
                                        :value="permiso.id"
                                        name="permisos[]"
                                        v-model="form.permisos"
                                    />
                                </span>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="row mb-6">
                            <div class="col-lg-12 fv-row text-end">
                                <button type="button" class="btn btn-light btn-active-light-danger text-white me-5" data-bs-dismiss="modal">Cerrar</button>
                                <submit-button-component
                                :is-submitting="isSubmitting"
                                :label="isSubmitting ? 'Por favor Espera' : (modoEdicion ? 'Editar' : 'Registrar')"
                                :disabled="isSubmitting"
                            />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "AgregaEditaNivelesComponent",
    props: {
        permisos: {
            type: Array,   // ← en lugar de JSON
            required: true,
        },
    },
    data() {
        return {
            form: {
                name: "",
                descripcion: "",
                imagen: "",
                volumen: "",
                status: "",
                permisos: [],
            },
            modoEdicion: false,
            isSubmitting: false, // Estado para manejar el indicador de carga
            validator: null,
            ruta:'',
        };
    },
    mounted() {
        this.initValidator();
        window.addEventListener('editar-nivel', (event) => {
        //console.log(event);
            this.openEditNivel(event.detail,event.permissions);
        });
        window.addEventListener('nuevo-nivel', (event) => {
            this.openAddNivel();
        });

    },
    watch: {
    },
    methods: {
        formDefaults() {
            return {
            name: "",
            descripcion: "",
            imagen: "",
            volumen: "",
            status: false,
            permisos: [], // siempre array
            };
        },

        normalizeIds(list) {
            if (!Array.isArray(list)) return [];
            return list
            .map(p => (p && typeof p === "object" ? Number(p.id) : Number(p)))
            .filter(n => !Number.isNaN(n));
        },

        togglePermiso(id) {
            if (!Array.isArray(this.form.permisos)) this.form.permisos = [];
            id = Number(id);
            const i = this.form.permisos.indexOf(id);
            if (i === -1) {
            this.form.permisos.push(id);
            } else {
            this.form.permisos.splice(i, 1);
            }
        },
        toUppercase(event) {
            const el = event.target;
            const start = el.selectionStart;
            const end = el.selectionEnd;

            // Convierte a mayúsculas sin perder cursor
            el.value = el.value.toUpperCase();

            // Actualiza el v-model correspondiente
            const modelName = el.getAttribute('v-model') || el.name;
            if (modelName && this.form.hasOwnProperty(modelName)) {
            this.form[modelName] = el.value;
            }

            // Restaurar posición del cursor
            el.setSelectionRange(start, end);
        },
        storageUrl(path) {
            // Ajusta esta función si tu app está en subcarpeta o dominio diferente
            return `/storage/${path}`;
        },
        initValidator() {
            const form = this.$refs.formRef;
            this.validator = FormValidation.formValidation(form, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "El nombre es obligatorio",
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: "El nombre debe tener entre 3 y 30 caracteres",
                            },
                        },
                    },
                    descripcion: {
                        validators: {
                            notEmpty: {
                                message: "La descripción es obligatoria",
                            },
                            stringLength: {
                                min: 10,
                                max: 250,
                                message: "La descripción debe tener entre 10 y 250 caracteres",
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s.,-]*$/,
                                message: "Solo se permiten letras, números y signos básicos (.,-)",
                            },
                        },
                    },
                    imagen: {
                        validators: {
                            file: {
                                extension: 'jpg,jpeg,svg',
                                type: 'image/jpeg,image/svg+xml',
                                maxSize: 10485760, // 10 MB
                                message: '(10 MB máx) jpeg, jpg, svg únicamente'
                            },
                        },
                    },
                    volumen: {
                        validators: {
                            notEmpty: {
                                message: "El volumen es obligatorio",
                            },
                            regexp: {
                                // Solo números del 0 al 9, de 1 a 7 dígitos
                                regexp: /^\d{1,7}$/,
                                message: "Solo se permiten números y máximo 7 dígitos",
                            },
                            callback: {
                                message: "El número debe tener como máximo 7 dígitos",
                                callback: function(input) {
                                    const numbersOnly = input.value.replace(/\D/g, '');
                                    return numbersOnly.length <= 7;
                                },
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "is-invalid",
                        eleValidClass: "is-valid",
                    }),
                },
            });
        },
        async enviarFormulario() {
            const result = await this.validator.validate(); // Validar formulario
            const form = this.$refs.formRef; // Accede al formulario usando ref
            const formData = new FormData(form); // Pasa el formulario al constructor de FormData


            if (result === "Valid") {
                this.isSubmitting = true; // Activar el indicador de carga

                //Bloquear todos los inputs del formulario
                const inputs = form.querySelectorAll('input, select, textarea, button');
                inputs.forEach(input => input.disabled = true);
                try {
                    let response;  // Declarar antes

                    if(this.modoEdicion == false){
                        response = await axios.post(this.ruta, formData, {
                            headers: { 'Content-Type': 'multipart/form-data' },
                        });
                    } else {
                        formData.append('_method', 'PATCH'); // o 'PUT'
                        response = await axios.post(this.ruta, formData);
                    }

                    // Aquí response ya está definido y accesible
                    Swal.fire({
                        text: response.data.message,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Aceptar",
                        customClass: {
                            confirmButton: "btn btn-light btn-active-color-white",
                        },
                        allowOutsideClick: true, // Permite cerrar al hacer clic fuera
                        willClose: () => {
                            // Cerrar el modal userModal
                            const modalInstance = bootstrap.Modal.getInstance(document.getElementById('nivelModal'));
                            if (modalInstance) {
                                modalInstance.hide();
                            }

                            // Recargar DataTable
                            const table = $('#admin-niveles-table').DataTable();
                            if (table) {
                                table.ajax.reload(null, false); // false para mantener la página actual
                            }
                        }
                    });
                    // El resto de tu código para resetear formulario...
                } catch (error) {
                    this.$handleError(error);
                } finally {
                    inputs.forEach(input => input.disabled = false);
                    this.isSubmitting = false;
                }

            } else {
                Swal.fire({
                    text: "Revisa bien los datos ingresados.",
                    icon: "warning",
                    buttonsStyling: false,
                    confirmButtonText: "Revisar",
                    customClass: {
                        confirmButton: "btn btn-light btn-active-color-white",
                    },
                });
            }
        },
        openAddNivel() {
            this.form = this.formDefaults();       // ← garantiza permisos: []
            this.modoEdicion = false;
            this.ruta = '/admin/niveles';
            if (this.validator) this.validator.resetForm(true);
            $('#nivelModal').modal('show');
        },
        openEditNivel(nivel) {
            // Puede venir como nivel.permisos (objs o ids) o nivel.permisosSeleccionados
            const seleccion = nivel.permisos ?? nivel.permisosSeleccionados ?? [];
            this.form = {
                ...this.formDefaults(),              // ← rellena faltantes
                ...nivel,
                status: Boolean(nivel.status),
                permisos: this.normalizeIds(seleccion),
            };
            this.modoEdicion = true;
            this.ruta = `/admin/niveles/${nivel.id}`;
            if (this.validator) this.validator.resetForm(true);
            $('#nivelModal').modal('show');
        },
    },
};
</script>
