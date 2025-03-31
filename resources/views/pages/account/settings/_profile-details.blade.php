<!--begin::Basic info-->
<div class="card {{ $class }}">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <i class="bi bi-person-lines-fill fs-2x text-light"></i>
            <h3 class="fw-bolder ms-4 user-select-none">{{ __('Personal Information') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form" method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!--begin::Card body-->
            <div class="card-body border-top p-9">

                <div class="row mb-5">
                    <div class="col-lg-10">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6 user-select-none">{{ __('Full Name') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-4 fv-row">
                                        <input type="text" name="nombre" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="Nombre" value="{{ old('nombre', auth()->user()->nombre ?? '') }}" readonly />
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4 fv-row">
                                        <input type="text" name="apellido_paterno" class="form-control form-control-lg form-control-solid"
                                            placeholder="Apellido Paterno"
                                            value="{{ old('apellido_paterno', auth()->user()->apellido_paterno ?? '') }}" readonly />
                                    </div>

                                    <!--begin::Col-->
                                    <div class="col-lg-4 fv-row">
                                        <input type="text" name="apellido_materno" class="form-control form-control-lg form-control-solid"
                                            placeholder="Apellido Materno"
                                            value="{{ old('apellido_materno', auth()->user()->apellido_materno ?? '') }}" readonly />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        @if ($info->tipo_persona == 'Moral')
                            <!--begin::Input group-->
                            <div class="row mb-6 ">
                                <!--begin::Label-->
                                <label for="company" class="col-lg-2 col-form-label fw-bold fs-6 user-select-none">{{ __('Company') }}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-5 fv-row">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                        placeholder="{{ __('Company name') }}" value="{{ old('company', $info->company ?? '') }}" readonly />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label for="rfc" class="col-lg-1 col-form-label text-center fw-bold fs-6 user-select-none">{{ __('RFC') }}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-4 fv-row">
                                    <input type="text" name="rfc" class="form-control form-control-lg form-control-solid"
                                        placeholder="XXXX943101XDFRXN01" value="{{ old('rfc', $info->rfc ?? '') }}" readonly />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label for="persona_autorizada" class="col-lg-2 col-form-label fw-bold fs-6 user-select-none">{{ __('Authorized Person') }}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-5 fv-row">
                                    <input type="text" name="persona_autorizada" class="form-control form-control-lg form-control-solid"
                                        placeholder="{{ __('Authorized Person') }}"
                                        value="{{ old('persona_autorizada', $info->persona_autorizada ?? '') }}" readonly />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        @else
                            <!--begin::Input group-->
                            <div class="row mb-6 ">
                                <!--begin::Label-->
                                <label for="company" class="col-lg-2 col-form-label "></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-5 fv-row"></div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label for="rfc" class="col-lg-1 col-form-label text-center fw-bold fs-6 user-select-none">{{ __('RFC') }}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-4 fv-row">
                                    <input type="text" name="rfc" class="form-control form-control-lg form-control-solid"
                                        placeholder="XXXX943101XDFRXN01" value="{{ old('rfc', $info->rfc ?? '') }}" readonly />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label for="cosolicitante" class="col-lg-2 col-form-label fw-bold fs-6 user-select-none">{{ __('Co-applicant')
                                    }}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-5 fv-row">
                                    <input type="text" name="cosolicitante" class="form-control form-control-lg form-control-solid"
                                        placeholder="{{ __('Co-applicant') }}" value="{{ old('cosolicitante', $info->cosolicitante ?? '') }}"
                                        readonly />
                                </div>
                                <!--end::Col-->

                                <!--begin::Label-->
                                <label for="cosolicitante_rfc" class="col-lg-1 col-form-label text-center fw-bold fs-6 user-select-none">{{
                                    __('RFC')}}</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-4 fv-row">
                                    <input type="text" name="cosolicitante_rfc" class="form-control form-control-lg form-control-solid"
                                        placeholder="XXXX943101XDFRXN01" value="{{ old('rfc', $info->cosolicitante_rfc ?? '') }}" readonly />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        @endif
                        <!--begin::Divider-->
                        <div class="row align-items-center">
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                            <div class="col-auto">
                                <p class="text-white text-center my-1 user-select-none">{{ __("Banking Information") }}</p>
                            </div>
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                        </div>
                        <!--end::Divider-->
                        <!--begin::Input group-->
                        <div class="row mt-3 mb-6">
                            <div class="col-lg-3">
                                <label for="banco" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Bank") }}</label>
                                <input type="text" name="banco" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Banco" value="{{ old('banco', $info->banco ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="cuenta" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Acount") }}</label>
                                <input type="text" name="cuenta" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Cuenta" value="{{ old('cuenta', $info->cuenta ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="sucursal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Branch") }}</label>
                                <input type="text" name="sucursal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Sucursal" value="{{ old('sucursal', $info->sucursal ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="titular_cuenta" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Holder") }}</label>
                                <input type="text" name="titular_cuenta" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Titular" value="{{ old('titular_cuenta', $info->titular_cuenta ?? '') }}" readonly />
                            </div>
                        </div>
                        <!--end::Input group-->

                    </div>
                    <div class="col-lg-2">
                        <!--begin::Image input-->
                        <div class="pb-4 d-flex justify-content-center align-items-center">
                            <div class="image-input image-input-outline {{ isset($info) && $info->avatar ? '' : 'image-input-empty' }}" data-kt-image-input="true" style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: {{ isset($info) && $info->avatar_url ? 'url('.asset($info->avatar_url).')' : 'none' }};">
                                </div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                {{-- <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{ __('Change avatar') }}">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label> --}}
                                <!--end::Label-->

                                <!--begin::Cancel-->
                                {{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span> --}}
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                {{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span> --}}
                                <!--end::Remove-->
                            </div>
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        {{-- <div class="form-text user-select-none">{{ __('Allowed file types') }}: png, jpg, jpeg.</div> --}}
                        <!--end::Hint-->
                        <p class="text-white text-center fw-bold">{{ $info->membresia }}</p>
                        <hr class="my-4 mx-4">
                        <p class="text-white text-center small">{{ auth()->user()->user }}</p>
                        <p class="text-white text-center small">{{ auth()->user()->email }}</p>
                        <p class="text-white text-center small">{{  $info->phone }}</p>
                        @if(isset($info->beneficiario1) || isset($info->beneficiario2))
                            <hr class="my-4 mx-4">
                            <p class="text-white text-center small user-select-none">{{ __("Beneficiaries") }}</p>
                            @isset($info->beneficiario1)
                                <p class="text-white text-center small user-select-none">{{ $info->beneficiario1 }}</p>
                            @endisset
                            @isset($info->beneficiario2)
                                <p class="text-white text-center small user-select-none">{{ $info->beneficiario2 }}</p>
                            @endisset
                        @endif
                    </div>
                    <div class="col-lg-12">
                        <!--begin::Divider-->
                        <div class="row align-items-center">
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                            <div class="col-auto">
                                <p class="text-white text-center my-1 user-select-none">{{ __("Tax Address") }}</p>
                            </div>
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                        </div>
                        <!--end::Divider-->
                        <!--begin::Input group-->
                        <div class="row mt-3 mb-6">
                            <div class="col-lg-5">
                                <label for="calle_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Street")
                                    }}</label>
                                <input type="text" name="calle_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Calle" value="{{ old('calle_fiscal', $info->calle_fiscal ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-2">
                                <label for="numero_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Number")
                                    }}</label>
                                <input type="text" name="numero_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Numero" value="{{ old('numero_fiscal', $info->numero_fiscal ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-5">
                                <label for="colonia_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{
                                    __("Neighborhood")
                                    }}</label>
                                <input type="text" name="colonia_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Colonia" value="{{ old('colonia_fiscal', $info->colonia_fiscal ?? '') }}" readonly />
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3 mb-6">
                            <div class="col-lg-3">
                                <label for="ciudad_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("City") }}</label>
                                <input type="text" name="ciudad_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Ciudad" value="{{ old('ciudad_fiscal', $info->ciudad_fiscal ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="estado_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("State") }}</label>
                                <input type="text" name="estado_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Estado" value="{{ old('estado_fiscal', $info->estado_fiscal ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="cp_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Postal Code") }}</label>
                                <input type="text" name="cp_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Código Postal" value="{{ old('cp_fiscal', $info->cp_fiscal ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono_fiscal" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Phone") }}</label>
                                <input type="text" name="telefono_fiscal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Teléfono" value="{{ old('telefono_fiscal', $info->telefono_fiscal ?? '') }}" readonly />
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-12">
                        <!--begin::Divider-->
                        <div class="row align-items-center">
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                            <div class="col-auto">
                                <p class="text-white text-center my-1 user-select-none">{{ __("Shipping Address") }}</p>
                            </div>
                            <div class="col px-0">
                                <hr class="m-0">
                            </div>
                        </div>
                        <!--end::Divider-->
                        <!--begin::Input group-->
                        <div class="row mt-3 mb-6">
                            <div class="col-lg-5">
                                <label for="calle_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Street") }}</label>
                                <input type="text" name="calle_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Calle" value="{{ old('calle_envios', $info->calle_envios ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-2">
                                <label for="numero_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Number") }}</label>
                                <input type="text" name="numero_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Numero" value="{{ old('numero_envios', $info->numero_envios ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-5">
                                <label for="colonia_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Neighborhood") }}</label>
                                <input type="text" name="colonia_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Colonia"
                                    value="{{ old('colonia_envios', $info->colonia_envios ?? '') }}" readonly />
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3 mb-6">
                            <div class="col-lg-3">
                                <label for="ciudad_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("City") }}</label>
                                <input type="text" name="ciudad_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Ciudad" value="{{ old('ciudad_envios', $info->ciudad_envios ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="estado_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("State") }}</label>
                                <input type="text" name="estado_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Estado" value="{{ old('estado_envios', $info->estado_envios ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="cp_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Postal Code") }}</label>
                                <input type="text" name="cp_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Código Postal" value="{{ old('cp_envios', $info->cp_envios ?? '') }}" readonly />
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono_envios" class="form-label fw-bold fs-6 user-select-none text-center d-block">{{ __("Phone") }}</label>
                                <input type="text" name="telefono_envios" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Teléfono"
                                    value="{{ old('telefono_envios', $info->telefono_envios ?? '') }}" readonly />
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-7"></div>
                    <div class="col-lg-5">
                        <hr class="my-4 mx-4">
                        <p class="text-muted small text-end me-4 user-select-none">*{{ __("If you require a change in the information please contact us.") }}</p>
                    </div>
                </div>
            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            {{-- <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-bg-dark btn-active-light-warning btn-active-color-white btn-color-gray-100 me-2">{{ __('Discard') }}</button>
                <button type="submit" class="btn btn-bg-dark btn-active-light-primary btn-active-color-white btn-color-gray-100" id="kt_account_profile_details_submit">
                    @include('partials.general._button-indicator', ['label' => __('Save Changes')])
                </button>
            </div> --}}
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->
