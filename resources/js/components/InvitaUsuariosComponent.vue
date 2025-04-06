<template>
    <form ref="formRef" @submit.prevent="enviarFormulario" novalidate>
        <!-- Nombre completo -->
        <div class="row mb-6">
            <label class="col-lg-2 col-form-label fw-bold fs-6 user-select-none">Nombre Completo</label>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4 fv-row">
                        <input
                            type="text"
                            v-model="form.nombre"
                            class="form-control form-control-lg mb-3 mb-lg-0"
                            name="nombre"
                            placeholder="Nombre"
                        />
                    </div>
                    <div class="col-lg-4 fv-row">
                        <input
                            type="text"
                            v-model="form.apellido_paterno"
                            name="apellido_paterno"
                            class="form-control form-control-lg "
                            placeholder="Apellido Paterno"
                        />
                    </div>
                    <div class="col-lg-4 fv-row">
                        <input
                            type="text"
                            v-model="form.apellido_materno"
                            name="apellido_materno"
                            class="form-control form-control-lg "
                            placeholder="Apellido Materno"
                        />
                    </div>
                </div>
            </div>
        </div>

        <!-- RFC -->
        <div class="row mb-6">
            <label for="rfc" class="col-lg-1 col-form-label text-center fw-bold fs-6 user-select-none">RFC</label>
            <div class="col-lg-4 fv-row">
                <input
                    type="text"
                    v-model="form.rfc"
                    class="form-control form-control-lg "
                    placeholder="XXXX943101XDFRXN01"
                />
            </div>
        </div>

        <!-- Co-solicitante -->
        <div class="row mb-6">
            <label class="col-lg-2 col-form-label fw-bold fs-6 user-select-none">Co-solicitante</label>
            <div class="col-lg-5 fv-row">
                <input
                    type="text"
                    v-model="form.cosolicitante"
                    class="form-control form-control-lg "
                    placeholder="Co-solicitante"
                />
            </div>
            <label for="cosolicitante_rfc" class="col-lg-1 col-form-label text-center fw-bold fs-6 user-select-none">RFC</label>
            <div class="col-lg-4 fv-row">
                <input
                    type="text"
                    v-model="form.cosolicitante_rfc"
                    class="form-control form-control-lg "
                    placeholder="XXXX943101XDFRXN01"
                />
            </div>
        </div>

        <!-- Información bancaria -->
        <div class="row align-items-center">
            <div class="col px-0">
                <hr class="m-0">
            </div>
            <div class="col-auto">
                <p class="text-white text-center my-1 user-select-none">Información Bancaria</p>
            </div>
            <div class="col px-0">
                <hr class="m-0">
            </div>
        </div>

        <div class="row mt-3 mb-6">
            <div class="col-lg-3">
                <label for="banco" class="form-label fw-bold fs-6 user-select-none text-center d-block">Banco</label>
                <input
                    type="text"
                    v-model="form.banco"
                    class="form-control form-control-lg  mb-3 mb-lg-0"
                    placeholder="Banco"
                />
            </div>
            <div class="col-lg-3">
                <label for="cuenta" class="form-label fw-bold fs-6 user-select-none text-center d-block">Cuenta</label>
                <input
                    type="text"
                    v-model="form.cuenta"
                    class="form-control form-control-lg  mb-3 mb-lg-0"
                    placeholder="Cuenta"
                />
            </div>
            <div class="col-lg-3">
                <label for="sucursal" class="form-label fw-bold fs-6 user-select-none text-center d-block">Sucursal</label>
                <input
                    type="text"
                    v-model="form.sucursal"
                    class="form-control form-control-lg  mb-3 mb-lg-0"
                    placeholder="Sucursal"
                />
            </div>
            <div class="col-lg-3">
                <label for="titular_cuenta" class="form-label fw-bold fs-6 user-select-none text-center d-block">Titular</label>
                <input
                    type="text"
                    v-model="form.titular_cuenta"
                    class="form-control form-control-lg  mb-3 mb-lg-0"
                    placeholder="Titular"
                />
            </div>
        </div>

        <!--begin::Actions-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <submit-button-component
                :is-submitting="isSubmitting"
                :label="isSubmitting ? 'Por favor Espera' : 'Guardar'"
                :disabled="isSubmitting"
            />
        </div>
        <!--end::Actions-->
    </form>
</template>

<script>
export default {
    name: "InvitaUsuariosComponent",
    props: {
        ruta: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            form: {
                nombre: "",
                apellido_paterno: "",
                apellido_materno: "",
                rfc: "",
                cosolicitante: "",
                cosolicitante_rfc: "",
                banco: "",
                cuenta: "",
                sucursal: "",
                titular_cuenta: "",
            },
            isSubmitting: false, // Estado para manejar el indicador de carga
            validator: null,
        };
    },
    mounted() {
        this.initValidator();
    },
    methods: {
        initValidator() {
            const form = this.$refs.formRef;
            this.validator = FormValidation.formValidation(form, {
                fields: {
                    nombre: {
                        validators: {
                            notEmpty: {
                                message: "El nombre es obligatorio",
                            },
                        },
                    },
                    apellido_paterno: {
                        validators: {
                            notEmpty: {
                                message: "El apellido paterno es obligatorio",
                            },
                        },
                    },
                    apellido_materno: {
                        validators: {
                            notEmpty: {
                                message: "El apellido materno es obligatorio",
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
            if (result === "Valid") {
                this.isSubmitting = true; // Activar el indicador de carga
                try {
                    const response = await axios.post(this.ruta, this.form); // Enviar datos
                    this.form = {
                        nombre: "",
                        apellido_paterno: "",
                        apellido_materno: "",
                        rfc: "",
                        cosolicitante: "",
                        cosolicitante_rfc: "",
                        banco: "",
                        cuenta: "",
                        sucursal: "",
                        titular_cuenta: "",
                    };
                    this.validator.resetForm(true); // Limpiar validaciones
                } catch (error) {
                    this.$handleError(error);
                } finally {
                    this.isSubmitting = false; // Desactivar el indicador de carga
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
    },
};
</script>
