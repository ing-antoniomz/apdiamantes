<template>
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center text-white user-select-none fs-1">
                        <i class="me-4 text-white fa-duotone fs-1 fa-solid" :class="modoEdicion ? 'fa-user-pen' : 'fa-user-plus'"></i>
                        {{ modoEdicion ? 'Editar Usuario' : 'Registrar Usuario' }}
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
                    <form ref="formRef" name="userForm" id="userForm" @submit.prevent="enviarFormulario" novalidate enctype="multipart/form-data">

                        <!-- informacion del usuario -->
                        <div class="row align-items-center mb-2 mb-lg-6">
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                            <div class="col-auto">
                                <p class="text-white text-center my-1 user-select-none">Información del usuario</p>
                            </div>
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                        </div>

                        <!-- Datos varios-->
                        <div class="row mb-0 mb-lg-3">
                            <label for="user" class="col-lg-1 col-form-label fw-bold fs-6 user-select-none text-start text-lg-end d-flex align-items-center mb-lg-5 mb-0">
                                <span class="required">Usuario</span>
                            </label>
                            <div class="col-lg-3 fv-row">
                                <input
                                    type="text"
                                    v-model="form.user"
                                    class="form-control form-control-lg"
                                    id="user"
                                    name="user"
                                    placeholder="Debe ser único"
                                />
                            </div>
                            <label for="correo"  class="col-lg-1 col-form-label fw-bold fs-6 user-select-none text-start text-lg-end d-flex align-items-center mb-lg-5 mb-0">
                                <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="A este correo le llegará la activación.">
                                    <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                </span>
                                <span class="required">Correo</span>
                            </label>
                            <div class="col-lg-3 fv-row">
                                <input
                                    type="email"
                                    v-model="form.correo"
                                    class="form-control form-control-lg"
                                    name="correo"
                                    id="correo"
                                    placeholder="usuario@correo.com"
                                />
                            </div>
                            <label for="telefono"  class="col-lg-1 col-form-label fw-bold fs-6 user-select-none text-start text-lg-end d-flex align-items-center mb-lg-5 mb-0">
                                <span class="required">Teléfono</span>
                            </label>
                            <div class="col-lg-3 fv-row">
                                <input
                                    type="text"
                                    v-model="form.telefono"
                                    class="form-control form-control-lg"
                                    name="telefono"
                                    id="telefono"
                                    placeholder="55 4554 4454"
                                />
                            </div>
                        </div>

                        <!-- Nombre completo -->
                        <div class="row mb-1">
                            <div class="col-lg-10">

                                <!-- Nombre completo -->
                                <div class="row">
                                    <label for="nombre" class="col-lg-2 col-form-label fw-bold fs-6 user-select-none required text-start text-lg-center">Nombre Completo</label>
                                    <div class="col-lg-10 mb-2 mb-lg-6">
                                        <div class="row">
                                            <div class="col-lg-4 fv-row">
                                                <input
                                                    type="text"
                                                    v-model="form.nombre"
                                                    class="form-control form-control-lg"
                                                    name="nombre"
                                                    id="nombre"
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
                                <div class="row">
                                    <div class="col-lg-4 fv-row">
                                        <label for="rfc" class="form-label fw-bold fs-6 user-select-none text-center d-block required">RFC</label>
                                        <input
                                            type="text"
                                            v-model="form.rfc"
                                            @input="form.rfc = form.rfc.toUpperCase()"
                                            name="rfc"
                                            id="rfc"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            placeholder="XXXX943101XDFRXN01"
                                        />
                                    </div>
                                    <div class="col-lg-4 fv-row" v-show="tipoPersona === 'MORAL'">
                                        <label for="company" class="form-label fw-bold fs-6 user-select-none text-center d-block required">Compañia</label>
                                        <input
                                            type="text"
                                            v-model="form.company"
                                            @input="form.company = form.company.toUpperCase()"
                                            name="company"
                                            id="company"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            placeholder="Compañia"
                                        />
                                    </div>
                                    <div class="col-lg-4 fv-row" v-show="tipoPersona === 'MORAL'">
                                        <label for="persona_autorizada" class="form-label fw-bold fs-6 user-select-none text-center d-flex align-items-center">
                                            <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Se tendrá que identificar con el mismo nombre.">
                                                <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                            </span>
                                            <span class="required">Persona Autorizada</span>
                                        </label>
                                        <input
                                            type="text"
                                            v-model="form.persona_autorizada"
                                            name="persona_autorizada"
                                            id="persona_autorizada"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            placeholder="Nombre Completo"
                                        />
                                    </div>
                                </div>

                                <!-- Beneficiarios -->
                                <div class="row mb-6 mt-0 mt-lg-3">
                                    <div class="col-lg-4 fv-row d-flex flex-column justify-content-center align-items-center">
                                        <label for="beneficiario1" class="form-label fw-bold fs-6 user-select-none text-center d-flex align-items-center">
                                            <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Persona beneficiaria en caso de algún imprevisto.">
                                                <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                            </span>
                                            <span class="required">Beneficiario 1</span>
                                        </label>
                                        <input
                                            type="text"
                                            v-model="form.beneficiario1"
                                            name="beneficiario1"
                                            id="beneficiario1"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            placeholder="Nombre Completo"
                                        />
                                    </div>
                                    <div class="col-lg-4 fv-row">
                                        <label for="beneficiario2" class="form-label fw-bold fs-6 user-select-none text-center d-block">Beneficiario 2</label>
                                        <input
                                            type="text"
                                            v-model="form.beneficiario2"
                                            name="beneficiario2"
                                            id="beneficiario2"
                                            class="form-control form-control-lg  mb-3 mb-lg-0"
                                            placeholder="Nombre Completo"
                                        />
                                    </div>
                                    <div class="col-lg-4 fv-row">
                                        <label for="cuenta_apdiamantes" class="form-label fw-bold fs-6 user-select-none text-center d-block required">Cuenta APDiamantes</label>
                                        <input
                                            type="text"
                                            v-model="form.cuenta_apdiamantes"
                                            @input="form.cuenta_apdiamantes = form.cuenta_apdiamantes.toUpperCase()"
                                            name="cuenta_apdiamantes"
                                            id="cuenta_apdiamantes"
                                            class="form-control form-control-lg  mb-3 mb-lg-0"
                                            placeholder="Número de cuenta única"
                                        />
                                    </div>
                                </div>

                                <!-- Beneficiarios Parentesco-->
                                <div class="row mb-6 mt-0 mt-lg-3">
                                    <div class="col-lg-4 fv-row d-flex flex-column justify-content-center align-items-center">
                                        <label for="parentescoBeneficiario1" class="form-label fw-bold fs-6 user-select-none text-center d-flex align-items-center">
                                            <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Parentesco con el primer Beneficiario.">
                                                <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                            </span>
                                            <span class="">Parentesco <br>Beneficiario 1</span>
                                        </label>
                                        <input
                                            type="text"
                                            v-model="form.parentescoBeneficiario1"
                                            name="parentescoBeneficiario1"
                                            id="parentescoBeneficiario1"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            placeholder="Nombre Completo"
                                        />
                                    </div>
                                    <div class="col-lg-4 fv-row">
                                        <label for="parentescoBeneficiario2" class="form-label fw-bold fs-6 user-select-none text-center d-block">Parentesco <br> Beneficiario 2</label>
                                        <input
                                            type="text"
                                            v-model="form.parentescoBeneficiario2"
                                            name="parentescoBeneficiario2"
                                            id="parentescoBeneficiario2"
                                            class="form-control form-control-lg  mb-3 mb-lg-0"
                                            placeholder="Nombre Completo"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 d-flex flex-column align-items-center mt-3">
                                <div class="form-check form-switch form-check-custom form-check-success form-check-solid mb-8">
                                    <input
                                        class="form-check-input "
                                        type="checkbox"
                                        v-model="form.estatus"
                                        name="estatus"
                                        id="estatus"
                                    />
                                    <label class="form-check-label user-select-none" for="estatus">
                                        Activo
                                    </label>
                                </div>
                                <div class="form-check form-check-custom form-check-warning form-check-solid mb-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        id="radioMoral"
                                        value="MORAL"
                                        name="radioPersona"
                                        v-model="tipoPersona"
                                        @change="onTipoPersonaChange"
                                    />
                                    <label class="form-check-label user-select-none" for="radioMoral">
                                        Persona Moral
                                    </label>
                                </div>
                                <div class="form-check form-check-custom form-check-warning form-check-solid ">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        id="radioFisica"
                                        value="FISICA"
                                        name="radioPersona"
                                        v-model="tipoPersona"
                                        @change="onTipoPersonaChange"
                                    />
                                    <label class="form-check-label user-select-none" for="radioFisica">
                                        Persona Física
                                    </label>
                                </div>

                                <!--begin::Image input-->
                                <div class="pt-8">
                                    <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" :style="{ backgroundImage: `url(${avatarUrl})` }">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: none">
                                        </div>
                                        <!--end::Preview existing avatar-->

                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Subir Foto">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" @change="handleFileUpload" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->

                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text user-select-none text-center">Tipos Permitidos: png, jpg, jpeg.</div>
                                <!--end::Hint-->

                            </div>
                        </div>

                        <!-- Grupo y perfil -->
                        <div class="row mb-6 align-items-center">
                            <!-- filepath: /var/www/html/resources/js/components/UsuariosComponent.vue -->
                            <label for="nivel" class="col-lg-1 col-form-label fw-bold fs-6 user-select-none text-start text-lg-end d-flex align-items-center">
                                <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Determinado por sus ventas.">
                                    <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                </span>
                                <span class="required">Nivel</span>
                            </label>
                            <div class="col-lg-3 fv-row">
                                <select v-model="form.nivel" id="nivel" name="nivel" class="form-select">
                                    <option value="" disabled>Selecciona un nivel</option>
                                    <option v-for="(nombre, id) in niveles" :key="id" :value="nombre">{{ nombre }}</option>
                                </select>
                            </div>
                            <label for="grupo" class="col-lg-1 col-form-label fw-bold fs-6 user-select-none text-start text-lg-end d-flex align-items-center">
                                <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Cualquier grupo registrado en el sistema.">
                                    <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                </span>
                                <span class="required">Grupo</span>
                            </label>
                            <div class="col-lg-3 fv-row">
                                <select v-model="form.grupo" id="grupo" name="grupo" class="form-select">
                                    <option value="" disabled>Selecciona un grupo</option>
                                    <option v-for="(nombre, id) in grupos" :key="id" :value="nombre">{{ nombre }}</option>
                                </select>
                            </div>
                            <label for="posicion" class="col-lg-1 col-form-label fw-bold fs-6 user-select-none text-start text-lg-end d-flex align-items-center">
                                <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Posición en el grupo.">
                                    <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                </span>
                                <span class="required">Posición</span>
                            </label>
                            <div class="col-lg-3 fv-row">
                                <select v-model="form.posicion" id="posicion" name="posicion" class="form-select">
                                    <option value="" disabled>Selecciona una posición</option>
                                    <option value="MIEMBRO">Miembro</option>
                                    <option value="ADMINISTRADOR">Administrador</option>
                                    <option value="ESTRELLA">Estrella</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>

                        <!-- Archivos a subir -->
                        <div class="row mb-6 mt-0 mt-lg-3">
                            <div class="col-lg-4 fv-row d-flex flex-column justify-content-center align-items-center">
                                <label for="inscripcion" class="form-label fw-bold fs-6 user-select-none text-center d-block mb-5 required">Inscripción</label>
                                <input
                                    type="file"
                                    name="inscripcion"
                                    id="inscripcion"
                                    class="form-control form-control-lg"
                                    accept=".pdf, .jpg, .jpeg"
                                />
                            </div>
                            <div class="col-lg-4 fv-row">
                                <label for="ine" class="form-label fw-bold fs-6 user-select-none text-center d-block mb-5 required">INE</label>
                                <input
                                    type="file"
                                    name="ine"
                                    id="ine"
                                    class="form-control form-control-lg"
                                    accept=".pdf, .jpg, .jpeg"
                                />
                            </div>
                            <div class="col-lg-4 fv-row">
                                <label for="comprobante_domicilio" class="form-label fw-bold fs-6 user-select-none text-center d-block mb-5 required">Comprobante Domicilio</label>
                                <input
                                    type="file"
                                    name="comprobante_domicilio"
                                    id="comprobante_domicilio"
                                    class="form-control form-control-lg"
                                    accept=".pdf, .jpg, .jpeg"
                                />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 fv-row text-end">
                                <p class="text-gray-700 user-select-none">Solo archivos pdf, jpg, jpeg.</p>
                            </div>
                        </div>

                        <!-- Cosolicitante -->
                        <div class="row align-items-center mb-4 mb-lg-6" v-show="tipoPersona === 'FISICA'">
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                            <div class="col-auto">
                                <p class="text-white text-center my-1 user-select-none">Co-Solicitante</p>
                            </div>
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                        </div>

                        <div class="row mb-6" v-show="tipoPersona === 'FISICA'">
                            <label for="cosolicitante" class="col-lg-2 col-form-label fw-bold fs-6 user-select-none required text-start text-lg-end">Nombre Completo</label>
                            <div class="col-lg-5 fv-row">
                                <input
                                    type="text"
                                    v-model="form.cosolicitante"
                                    name="cosolicitante"
                                    id="cosolicitante"
                                    class="form-control form-control-lg"
                                    placeholder="Co-solicitante"
                                />
                            </div>
                            <label for="cosolicitante_rfc" class="col-lg-1 col-form-label text-lg-center fw-bold fs-6 user-select-none required text-start text-lg-end">RFC</label>
                            <div class="col-lg-4 fv-row">
                                <input
                                    type="text"
                                    v-model="form.cosolicitante_rfc"
                                    @input="form.cosolicitante_rfc = form.cosolicitante_rfc.toUpperCase()"
                                    name="cosolicitante_rfc"
                                    id="cosolicitante_rfc"
                                    class="form-control form-control-lg"
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

                        <div class="row mt-5 mb-6">
                            <div class="col-lg-3 fv-row">
                                <label for="banco" class="form-label fw-bold fs-6 user-select-none text-center d-block required">Banco</label>
                                <input
                                    type="text"
                                    v-model="form.banco"
                                    name="banco"
                                    id="banco"
                                    class="form-control form-control-lg  mb-3 mb-lg-0"
                                    placeholder="Banco"
                                />
                            </div>
                            <div class="col-lg-3 fv-row d-flex flex-column justify-content-center align-items-center">
                                <label for="cuenta" class="form-label fw-bold fs-6 user-select-none text-center d-flex align-items-center">
                                    <span class="me-1 mb-4 d-flex align-items-start" data-bs-toggle="tooltip" title="Cuenta CLABE">
                                        <i class="fa-sharp-duotone fa-solid fa-circle-question text-gray-500 fs-6"></i>
                                    </span>
                                    <span class="required">Cuenta</span>
                                </label>
                                <input
                                    type="text"
                                    v-model="form.cuenta"
                                    @input="form.cuenta = form.cuenta.toUpperCase()"
                                    name="cuenta"
                                    id="cuenta"
                                    class="form-control form-control-lg  mb-3 mb-lg-0"
                                    placeholder="Cuenta"
                                />
                            </div>
                            <div class="col-lg-3 fv-row">
                                <label for="sucursal" class="form-label fw-bold fs-6 user-select-none text-center d-block">Sucursal</label>
                                <input
                                    type="text"
                                    v-model="form.sucursal"
                                    name="sucursal"
                                    id="sucursal"
                                    class="form-control form-control-lg  mb-3 mb-lg-0"
                                    placeholder="Sucursal"
                                />
                            </div>
                            <div class="col-lg-3 fv-row">
                                <label for="titular_cuenta" class="form-label fw-bold fs-6 user-select-none text-center d-block required">Titular</label>
                                <input
                                    type="text"
                                    v-model="form.titular_cuenta"
                                    name="titular_cuenta"
                                    id="titular_cuenta"
                                    class="form-control form-control-lg mb-3 mb-lg-0"
                                    placeholder="Titular"
                                />
                            </div>
                        </div>

                        <!-- Direcciones -->
                        <div class="row align-items-center mb-4">
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                            <div class="col-auto">
                                <p class="text-white text-center my-1 user-select-none">Direcciones</p>
                            </div>
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                        </div>

                        <div class="row mb-6">

                            <!-- Dirección Fiscal -->
                            <div class="col-md-6 mt-4">

                                <h4 class="mb-7 text-center user-select-none">Dirección Fiscal</h4>

                                <div class="row mt-3">
                                    <div class="col-lg-9 fv-row">
                                        <label for="direccion_fiscal_calle" class="form-label fw-bold fs-6 user-select-none required">Calle</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_fiscal_calle"
                                            id="direccion_fiscal_calle"
                                            v-model="form.direccion_fiscal_calle"
                                        />
                                    </div>
                                    <div class="col-lg-3 fv-row">
                                        <label for="direccion_fiscal_numero" class="form-label fw-bold fs-6 user-select-none required">Número</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_fiscal_numero"
                                            id="direccion_fiscal_numero"
                                            v-model="form.direccion_fiscal_numero"
                                        />
                                    </div>
                                </div>

                                <div class="fv-row mb-3">
                                    <label for="direccion_fiscal_colonia" class="form-label required fw-bold fs-6 user-select-none">Colonia</label>
                                    <input
                                    type="text"
                                    class="form-control form-control-lg mb-3 mb-lg-0"
                                    name="direccion_fiscal_colonia"
                                    id="direccion_fiscal_colonia"
                                    v-model="form.direccion_fiscal_colonia"
                                    />
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6 fv-row">
                                        <label for="direccion_fiscal_ciudad" class="form-label fw-bold fs-6 user-select-none required">Ciudad</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_fiscal_ciudad"
                                            id="direccion_fiscal_ciudad"
                                            v-model="form.direccion_fiscal_ciudad"
                                        />
                                    </div>
                                    <div class="col-lg-6 fv-row">
                                        <label for="direccion_fiscal_estado" class="form-label fw-bold fs-6 user-select-none required">Estado</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_fiscal_estado"
                                            id="direccion_fiscal_estado"
                                            v-model="form.direccion_fiscal_estado"
                                        />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4 fv-row">
                                        <label for="direccion_fiscal_codigo_postal" class="form-label fw-bold fs-6 user-select-none required">Código Postal</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_fiscal_codigo_postal"
                                            id="direccion_fiscal_codigo_postal"
                                            v-model="form.direccion_fiscal_codigo_postal"
                                        />
                                    </div>
                                    <div class="col-lg-8 fv-row">
                                        <label for="direccion_fiscal_telefono_fiscal" class="form-label fw-bold fs-6 user-select-none">Teléfono</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_fiscal_telefono_fiscal"
                                            id="direccion_fiscal_telefono_fiscal"
                                            v-model="form.direccion_fiscal_telefono_fiscal"
                                        />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-12 fv-row">
                                        <div class="form-check form-check-custom form-check-solid mb-5">
                                            <input class="form-check-input" type="checkbox" id="mismo_domicilio" v-model="usarMismaDireccion">
                                            <label class="form-check-label user-select-none" for="mismo_domicilio">
                                                Usar la misma dirección para la Dirección de envío
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dirección de Envío -->
                            <div class="col-md-6 mt-4">
                                <h4 class="mb-7 text-center user-select-none">Dirección de Envío</h4>

                                <div class="row mt-3">
                                    <div class="col-lg-9 fv-row">
                                        <label for="direccion_envio_calle" class="form-label fw-bold fs-6 user-select-none required">Calle</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_envio_calle"
                                            id="direccion_envio_calle"
                                            v-model="form.direccion_envio_calle"
                                        />
                                    </div>
                                    <div class="col-lg-3 fv-row">
                                        <label for="direccion_envio_numero" class="form-label fw-bold fs-6 user-select-none required">Número</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_envio_numero"
                                            id="direccion_envio_numero"
                                            v-model="form.direccion_envio_numero"
                                        />
                                    </div>
                                </div>

                                <div class="fv-row mb-3">
                                    <label for="direccion_envio_colonia" class="form-label required fw-bold fs-6 user-select-none">Colonia</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-lg mb-3 mb-lg-0"
                                        name="direccion_envio_colonia"
                                        id="direccion_envio_colonia"
                                        v-model="form.direccion_envio_colonia"
                                    />
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6 fv-row">
                                        <label for="direccion_envio_ciudad" class="form-label fw-bold fs-6 user-select-none required">Ciudad</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_envio_ciudad"
                                            id="direccion_envio_ciudad"
                                            v-model="form.direccion_envio_ciudad"
                                        />
                                    </div>
                                    <div class="col-lg-6 fv-row">
                                        <label for="direccion_envio_estado" class="form-label fw-bold fs-6 user-select-none required">Estado</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_envio_estado"
                                            id="direccion_envio_estado"
                                            v-model="form.direccion_envio_estado"
                                        />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4 fv-row">
                                        <label for="direccion_envio_codigo_postal" class="form-label fw-bold fs-6 user-select-none required">Código Postal</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_envio_codigo_postal"
                                            id="direccion_envio_codigo_postal"
                                            v-model="form.direccion_envio_codigo_postal"
                                        />
                                    </div>
                                    <div class="col-lg-8 fv-row">
                                        <label for="direccion_envio_telefono_fiscal" class="form-label fw-bold fs-6 user-select-none">Teléfono</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-lg mb-3 mb-lg-0"
                                            name="direccion_envio_telefono_fiscal"
                                            id="direccion_envio_telefono_fiscal"
                                            v-model="form.direccion_envio_telefono_fiscal"
                                        />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-12 fv-row text-end">
                                        <p class="text-gray-700 user-select-none">Los campos con <span class="required"></span> son obligatorios.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

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

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <submit-button-component
                        :is-submitting="isSubmitting"
                        :label="isSubmitting ? 'Por favor Espera' : 'Invitar'"
                        :disabled="isSubmitting"
                        :form="userForm"
                    />
                </div> -->
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "AgregaEditaUsuariosComponent",
    props: {
        ruta: {
            type: String,
            required: true,
        },
        grupos: {
            type: Object,
            required: true
        },
        niveles: {
            type: Object,
            required: true
        },
        avatarUrl: {
            type: String,
            default: 'http://localhost:8000/demo3/media/avatars/blank.png', // URL por defecto
        },
    },
    data() {
        return {
            form: {
                nombre: "",
                apellido_paterno: "",
                apellido_materno: "",
                radioPersona: "",
                estatus: "",
                rfc: "",
                avatar: "",
                company: "",
                persona_autorizada: "",
                cuenta_apdiamantes: "",
                user: "",
                correo: "",
                telefono: "",
                beneficiario1: "",
                beneficiario2: "",
                cosolicitante: "",
                cosolicitante_rfc: "",
                banco: "",
                cuenta: "",
                sucursal: "",
                titular_cuenta: "",
                direccion_fiscal_calle: "",
                direccion_fiscal_numero: "",
                direccion_fiscal_colonia: "",
                direccion_fiscal_ciudad: "",
                direccion_fiscal_estado: "",
                direccion_fiscal_codigo_postal: "",
                direccion_fiscal_telefono_fiscal: "",
                direccion_envio_calle: "",
                direccion_envio_numero: "",
                direccion_envio_colonia: "",
                direccion_envio_ciudad: "",
                direccion_envio_estado: "",
                direccion_envio_codigo_postal: "",
                direccion_envio_telefono_fiscal: "",
                nivel: "",
                parentescoBeneficiario1: "",
                parentescoBeneficiario2: "",
                posicion: "",
                grupo: "",
                inscripcion: "",
                ine: "",
                comprobante_domicilio: "",
            },
            usarMismaDireccion: false,
            //usuario: null,
            modoEdicion: false,
            file: null,
            tipoPersona: 'FISICA', // 'moral' o 'fisica'
            isSubmitting: false, // Estado para manejar el indicador de carga
            validator: null,
        };
    },
    mounted() {
        this.initValidator();
        this.onTipoPersonaChange();
        window.addEventListener('editar-usuario', (event) => {
            this.openEditUser(event.detail);
        });
        window.addEventListener('nuevo-usuario', (event) => {
            this.openAddUser();
        });
        window.addEventListener('activar-usuario', (event) => {
            this.inviteUser(event.detail);
        });
    },
    watch: {
        usarMismaDireccion(nuevoValor) {
            if (nuevoValor) {
                this.form.direccion_envio_calle = this.form.direccion_fiscal_calle;
                this.form.direccion_envio_numero = this.form.direccion_fiscal_numero;
                this.form.direccion_envio_colonia = this.form.direccion_fiscal_colonia;
                this.form.direccion_envio_ciudad = this.form.direccion_fiscal_ciudad;
                this.form.direccion_envio_estado = this.form.direccion_fiscal_estado;
                this.form.direccion_envio_codigo_postal = this.form.direccion_fiscal_codigo_postal;
                this.form.direccion_envio_telefono_fiscal = this.form.direccion_fiscal_telefono_fiscal;
            } else {
                this.form.direccion_envio_calle = '';
                this.form.direccion_envio_numero = '';
                this.form.direccion_envio_colonia = '';
                this.form.direccion_envio_ciudad = '';
                this.form.direccion_envio_estado = '';
                this.form.direccion_envio_codigo_postal = '';
                this.form.direccion_envio_telefono_fiscal = '';
            }
        }
    },
    methods: {
        initValidator() {
            const form = this.$refs.formRef;
            this.validator = FormValidation.formValidation(form, {
                fields: {
                    correo: {
                        validators: {
                            notEmpty: {
                                message: "El correo es obligatorio",
                            },
                            emailAddress: {
                                message: "El formato del correo no es válido",
                            },
                        },
                    },
                    telefono: {
                        validators: {
                            notEmpty: {
                                message: "El teléfono es obligatorio",
                            },
                            regexp: {
                                regexp: /^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/,
                                message: 'Solo números, espacios, guiones y códigos de país (+52)',
                            },
                            callback: {
                                message: 'El número debe tener como máximo 12 dígitos',
                                callback: function (input) {
                                    // Elimina símbolos y cuenta solo los números
                                    const numbersOnly = input.value.replace(/\D/g, '');
                                    return numbersOnly.length <= 12;
                                },
                            },
                        },
                    },
                    nombre: {
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
                    apellido_paterno: {
                        validators: {
                            notEmpty: {
                                message: "El apellido paterno es obligatorio",
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: "El apellido paterno debe tener entre 3 y 30 caracteres",
                            },
                        },
                    },
                    apellido_materno: {
                        validators: {
                            notEmpty: {
                                message: "El apellido materno es obligatorio",
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: "El apellido materno debe tener entre 3 y 30 caracteres",
                            },
                        },
                    },
                    rfc: {
                        validators: {
                            notEmpty: {
                                message: "El RFC es obligatorio",
                            },
                            regexp: {
                                // Valida RFC de persona física (13) o moral (12)
                                regexp: /^([A-ZÑ&]{3,4})\d{6}(?:[A-Z\d]{3})?$/,
                                message: 'El RFC no es válido',
                            },
                            stringLength: {
                                min: 12,
                                max: 13,
                                message: 'El RFC debe tener 12 o 13 caracteres',
                            },
                        },
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: "La Compañia es obligatorio",
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: "La Compañia debe tener entre 3 y 30 caracteres",
                            },
                        },
                    },
                    persona_autorizada: {
                        validators: {
                            notEmpty: {
                                message: "Debe ingresar al menos una persona autorizada",
                            },
                            stringLength: {
                                min: 3,
                                max: 60,
                                message: "El nombre debe tener entre 3 y 60 caracteres",
                            },
                        },
                    },
                    beneficiario1: {
                        validators: {
                            notEmpty: {
                                message: "Debe ingresar al menos una persona beneficiaria",
                            },
                        },
                    },
                    cuenta_apdiamantes: {
                        validators: {
                            notEmpty: {
                                message: "La cuenta es obligatoria",
                            },
                            regexp: {
                                regexp: /^[A-Za-z0-9]+$/,
                                message: 'La cuenta solo debe contener letras y números',
                            },
                            stringLength: {
                                min: 1,
                                max: 40, // ajusta según el límite que necesites
                                message: 'La cuenta debe tener entre 1 y 40 caracteres',
                            },
                        },
                    },
                    cuenta_apdiamantes: {
                        validators: {
                            notEmpty: {
                                message: "La cuenta es obligatoria",
                            },
                            regexp: {
                                regexp: /^[A-Za-z0-9]+$/,
                                message: 'La cuenta solo debe contener letras y números',
                            },
                            stringLength: {
                                min: 1,
                                max: 40, // ajusta según el límite que necesites
                                message: 'La cuenta debe tener entre 1 y 40 caracteres',
                            },
                        },
                    },
                    user: {
                        validators: {
                            notEmpty: {
                                message: "El usuario es obligatorio",
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: "El usuario debe tener entre 3 y 30 caracteres",
                            },
                        },
                    },
                    grupo: {
                        validators: {
                            notEmpty: {
                                message: 'Debe eligir un grupo',
                            }
                        }
                    },
                    nivel: {
                        validators: {
                            notEmpty: {
                                message: 'Debe eligir un nivel',
                            }
                        }
                    },
                    posicion: {
                        validators: {
                            notEmpty: {
                                message: 'Debe eligir una pocisión',
                            }
                        }
                    },
                    inscripcion: {
                        validators: {
                            notEmpty: {
                                message: 'Sube una inscripción'
                            },
                            file: {
                                extension: 'jpg,jpeg,pdf',
                                type: 'image/jpeg,image/jpg,document/pdf',
                                maxSize: 10485760, // 10 MB
                                message: '(10 MB máx) jpeg, jpg, pdf únicamente'
                            },
                        },
                    },
                    ine: {
                        validators: {
                            notEmpty: {
                                message: 'Sube una INE'
                            },
                            file: {
                                extension: 'jpg,jpeg,pdf',
                                type: 'image/jpeg,image/jpg,document/pdf',
                                maxSize: 10485760, // 10 MB
                                message: '(10 MB máx) jpeg, jpg, pdf únicamente'
                            },
                        },
                    },
                    comprobante_domicilio: {
                        validators: {
                            notEmpty: {
                                message: 'Sube un compobante de domicilio'
                            },
                            file: {
                                extension: 'jpg,jpeg,pdf',
                                type: 'image/jpeg,image/jpg,document/pdf',
                                maxSize: 10485760, // 10 MB
                                message: '(10 MB máx) jpeg, jpg, pdf únicamente'
                            },
                        },
                    },
                    cosolicitante: {
                        validators: {
                            notEmpty: {
                                message: "Debe ingresar un cosolicitante",
                            },
                            stringLength: {
                                min: 3,
                                max: 60,
                                message: "El cosolicitante debe tener entre 3 y 60 caracteres",
                            },
                        },
                    },
                    cosolicitante_rfc: {
                        validators: {
                            notEmpty: {
                                message: "El RFC de cosolicitante es obligatorio",
                            },
                            regexp: {
                                // Valida RFC de persona física (13) o moral (12)
                                regexp: /^([A-ZÑ&]{3,4})\d{6}(?:[A-Z\d]{3})?$/,
                                message: 'El RFC no es válido',
                            },
                            stringLength: {
                                min: 12,
                                max: 13,
                                message: 'El RFC debe tener 12 o 13 caracteres',
                            },
                        },
                    },
                    banco: {
                        validators: {
                            notEmpty: {
                                message: "El banco es obligatorio",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'El banco debe tener 5 o 30 caracteres',
                            },
                        },
                    },
                    cuenta: {
                        validators: {
                            notEmpty: {
                                message: 'La cuenta CLABE es obligatoria',
                            },
                            regexp: {
                                regexp: /^\d{18}$/,
                                message: 'La cuenta CLABE debe contener exactamente 18 dígitos numéricos',
                            },
                            stringLength: {
                                min: 18,
                                max: 18,
                                message: 'La cuenta CLABE debe tener 18 caracteres',
                            },
                        },
                    },
                    titular_cuenta: {
                        validators: {
                            notEmpty: {
                                message: "El titular de la cuenta es obligatorio",
                            },
                            stringLength: {
                                min: 5,
                                max: 60,
                                message: 'El titular de la cuenta debe tener 5 a 60 caracteres',
                            },
                        },
                    },
                    direccion_fiscal_calle: {
                        validators: {
                            notEmpty: {
                                message: "La calle fiscal es obligatoria",
                            },
                            stringLength: {
                                min: 5,
                                max: 80,
                                message: 'La calle fiscal debe tener 5 a 80 caracteres',
                            },
                        },
                    },
                    direccion_fiscal_numero: {
                        validators: {
                            notEmpty: {
                                message: "El numero fiscal es obligatorio",
                            },
                            stringLength: {
                                min: 2,
                                max: 30,
                                message: 'El numero fiscal debe tener 2 a 30 caracteres',
                            },
                        },
                    },
                    direccion_fiscal_colonia: {
                        validators: {
                            notEmpty: {
                                message: "La colonia fiscal es obligatoria",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'La colonia fiscal debe tener 5 a 30 caracteres',
                            },
                        },
                    },
                    direccion_fiscal_ciudad: {
                        validators: {
                            notEmpty: {
                                message: "La ciudad fiscal es obligatoria",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'La ciudad fiscal debe tener 5 a 30 caracteres',
                            },
                        },
                    },
                    direccion_fiscal_estado: {
                        validators: {
                            notEmpty: {
                                message: "El estado fiscal es obligatorio",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'El estado fiscal debe tener 5 a 30 caracteres',
                            },
                        },
                    },
                    direccion_fiscal_codigo_postal: {
                        validators: {
                            notEmpty: {
                                message: 'El código postal es obligatorio',
                            },
                            regexp: {
                                regexp: /^\d{5}$/,
                                message: 'El código postal debe contener exactamente 5 dígitos numéricos',
                            },
                        },
                    },
                    direccion_envio_calle: {
                        validators: {
                            notEmpty: {
                                message: "La calle de envios es obligatoria",
                            },
                            stringLength: {
                                min: 5,
                                max: 80,
                                message: 'La calle de envios debe tener 5 a 80 caracteres',
                            },
                        },
                    },
                    direccion_envio_numero: {
                        validators: {
                            notEmpty: {
                                message: "El numero de envios es obligatorio",
                            },
                            stringLength: {
                                min: 2,
                                max: 30,
                                message: 'El numero de envios debe tener 2 a 30 caracteres',
                            },
                        },
                    },
                    direccion_envio_colonia: {
                        validators: {
                            notEmpty: {
                                message: "La colonia de envios es obligatoria",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'La colonia de envios debe tener 5 a 30 caracteres',
                            },
                        },
                    },
                    direccion_envio_ciudad: {
                        validators: {
                            notEmpty: {
                                message: "La ciudad de envio es obligatoria",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'La ciudad de envio debe tener 5 a 30 caracteres',
                            },
                        },
                    },
                    direccion_envio_estado: {
                        validators: {
                            notEmpty: {
                                message: "El estado de envio es obligatorio",
                            },
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: 'El estado de envio debe tener 5 a 30 caracteres',
                            },
                        },
                    },
                    direccion_envio_codigo_postal: {
                        validators: {
                            notEmpty: {
                                message: 'El código postal es obligatorio',
                            },
                            regexp: {
                                regexp: /^\d{5}$/,
                                message: 'El código postal debe contener exactamente 5 dígitos numéricos',
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

            // Adjuntar el archivo solo si es válido
            if (this.file instanceof File) {
                formData.append('avatar', this.file);
            } else {
                // Si no hay archivo válido, asegúrate de que el campo no esté presente
                formData.delete('avatar');
            }
            if (result === "Valid") {
                this.isSubmitting = true; // Activar el indicador de carga
                try {
                    const response = await axios.post(this.ruta, formData,{
                            headers: {
                                'Content-Type': 'multipart/form-data',
                            },
                        }); // Enviar datos
                    Swal.fire({
                        text: response.data.message,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Aceptar",
                        customClass: {
                            confirmButton: "btn btn-light btn-active-color-white",
                        },
                    });
                    this.form = {
                        nombre: "",
                        apellido_paterno: "",
                        apellido_materno: "",
                        radioPersona: "",
                        estatus: "",
                        rfc: "",
                        avatar: "",
                        company: "",
                        persona_autorizada: "",
                        cuenta_apdiamantes: "",
                        user: "",
                        correo: "",
                        telefono: "",
                        beneficiario1: "",
                        beneficiario2: "",
                        cosolicitante: "",
                        cosolicitante_rfc: "",
                        banco: "",
                        cuenta: "",
                        sucursal: "",
                        titular_cuenta: "",
                        direccion_fiscal_calle: "",
                        direccion_fiscal_numero: "",
                        direccion_fiscal_colonia: "",
                        direccion_fiscal_ciudad: "",
                        direccion_fiscal_estado: "",
                        direccion_fiscal_codigo_postal: "",
                        direccion_fiscal_telefono_fiscal: "",
                        direccion_envio_calle: "",
                        direccion_envio_numero: "",
                        direccion_envio_colonia: "",
                        direccion_envio_ciudad: "",
                        direccion_envio_estado: "",
                        direccion_envio_codigo_postal: "",
                        direccion_envio_telefono_fiscal: "",
                        nivel: "",
                        parentescoBeneficiario1: "",
                        parentescoBeneficiario2: "",
                        posicion: "",
                        grupo: "",
                        inscripcion: "",
                        ine: "",
                        comprobante_domicilio: "",
                    };
                    this.usarMismaDireccion = false;
                    this.validator.resetForm(true); // Limpiar validaciones

                    // Restablecer la imagen del avatar
                    const imageInput = document.querySelector('[data-kt-image-input="true"]');
                    if (imageInput) {
                        const cancelButton = imageInput.querySelector('[data-kt-image-input-action="cancel"]');
                        if (cancelButton) {
                            cancelButton.click(); // Simula el clic en el botón de cancelar
                        }
                    }
                    this.file = null;

                    // Cerrar el modal userModal
                    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('userModal'));
                    if (modalInstance) {
                        modalInstance.hide();
                    }
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
        onTipoPersonaChange() {
            if (this.tipoPersona === 'MORAL') {
                this.validator.enableValidator('company');
                this.validator.enableValidator('persona_autorizada');
                this.validator.disableValidator('cosolicitante');
                this.validator.disableValidator('cosolicitante_rfc');
            } else if (this.tipoPersona === 'FISICA') {
                this.validator.disableValidator('company');
                this.validator.disableValidator('persona_autorizada');
                this.validator.enableValidator('cosolicitante');
                this.validator.enableValidator('cosolicitante_rfc');
            }
        },
        handleFileUpload(event) {
            const file = event.target.files[0];
            this.file = file instanceof File ? file : null;
        },
        openEditUser(usuario) {
            this.form = usuario;
            this.modoEdicion = true;
            // ejemplo: abrir modal
            $('#userModal').modal('show'); // si usas Bootstrap
        },
        openAddUser() {
            this.form = {
                nombre: "",
                apellido_paterno: "",
                apellido_materno: "",
                radioPersona: "",
                estatus: "",
                rfc: "",
                avatar: "",
                company: "",
                persona_autorizada: "",
                cuenta_apdiamantes: "",
                user: "",
                correo: "",
                telefono: "",
                beneficiario1: "",
                beneficiario2: "",
                cosolicitante: "",
                cosolicitante_rfc: "",
                banco: "",
                cuenta: "",
                sucursal: "",
                titular_cuenta: "",
                direccion_fiscal_calle: "",
                direccion_fiscal_numero: "",
                direccion_fiscal_colonia: "",
                direccion_fiscal_ciudad: "",
                direccion_fiscal_estado: "",
                direccion_fiscal_codigo_postal: "",
                direccion_fiscal_telefono_fiscal: "",
                direccion_envio_calle: "",
                direccion_envio_numero: "",
                direccion_envio_colonia: "",
                direccion_envio_ciudad: "",
                direccion_envio_estado: "",
                direccion_envio_codigo_postal: "",
                direccion_envio_telefono_fiscal: "",
                nivel: "",
                parentescoBeneficiario1: "",
                parentescoBeneficiario2: "",
                posicion: "",
                grupo: "",
                inscripcion: "",
                ine: "",
                comprobante_domicilio: "",
            };
            this.modoEdicion = false;
            // ejemplo: abrir modal
            $('#userModal').modal('show'); // si usas Bootstrap
        },
        inviteUser(username) {
            Swal.fire({
                text: `Usuario ${username} invitado exitosamente.`,
                icon: "success",
                confirmButtonText: "Aceptar",
                customClass: {
                    confirmButton: "btn btn-light btn-active-light-success text-white",
                },
                buttonsStyling: false
            });
        },
    },
};
</script>
