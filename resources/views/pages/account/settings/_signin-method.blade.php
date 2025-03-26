<!--begin::Sign-in Method-->
<div class="card {{ $class ?? '' }}" {{ util()->putHtmlAttributes(array('id' => $id ?? '')) }}>
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <i class="bi bi-shield-lock-fill fs-2x text-light"></i>
            <h3 class="fw-bolder ms-4 user-select-none">{{ __('Credentials') }}</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_signin_method" class="collapse">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
                <!--begin::Label-->
                <div id="kt_signin_email">
                    <div class="fs-6 fw-bolder mb-1 user-select-none">{{ __('E-Mail Address') }}</div>
                    <div class="fw-bold text-gray-600 correo user-select-none">{{ auth()->user()->email }}</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form" novalidate="novalidate" method="POST" action="{{ route('settings.changeEmail') }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="current_email" name="current_email" value="{{ auth()->user()->email }} "/>
                        <div class="row mb-6">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="fv-row mb-0">
                                    <label for="email" class="form-label fs-6 fw-bolder mb-3 user-select-none">{{ __('Enter New Email Address') }}</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" id="email"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-0">
                                    <label for="current_password_email" class="form-label fs-6 fw-bolder mb-3 user-select-none">{{ __('Confirm Password') }}</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="current_password_email" id="current_password_email"/>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_submit" type="button" class="btn btn-bg-dark btn-active-light-primary btn-active-color-white btn-color-gray-100 me-2 px-6">
                                @include('partials.general._button-indicator', ['label' => __('Update E-Mail')])
                            </button>
                            <button id="kt_signin_cancel" type="button" class="btn btn-bg-dark btn-active-light-danger btn-active-color-white btn-color-gray-100 px-6">{{ __('Cancel') }}</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                {{-- <div id="kt_signin_email_button" class="ms-auto">
                    <button class="btn btn-bg-dark btn-active-secondary btn-active-color-white btn-color-gray-100">{{ __('Change E-Mail') }}</button>
                </div> --}}
                <!--end::Action-->
            </div>
            <!--end::Email Address-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->

            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bolder mb-1 user-select-none">{{ __('Password') }}</div>
                    <div class="fw-bold text-gray-600 user-select-none">************</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_password" class="form" novalidate="novalidate" method="POST" action="{{ route('settings.changePassword') }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="current_email_password" name="current_email" value="{{ auth()->user()->email }} "/>
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="current_password" class="form-label fs-6 fw-bolder mb-3 user-select-none">{{ __('Current Password') }}</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="current_password" id="current_password" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="password" class="form-label fs-6 fw-bolder mb-3 user-select-none">{{ __('New Password') }}</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="password" id="password" required>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="password_confirmation" class="form-label fs-6 fw-bolder mb-3 user-select-none">{{ __('Confirm New Password') }}</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" id="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-text mb-5 text-light user-select-none">{{ __('The new password must be at least 8 characters and have 1 Uppercase, 1 Lowercase and 1 number') }}</div>

                        <div class="d-flex">
                            <button id="kt_password_submit" type="button" class="btn btn-bg-dark btn-active-light-primary btn-active-color-white btn-color-gray-100 me-2 px-6">
                                @include('partials.general._button-indicator', ['label' => __('Update Password')])
                            </button>
                            <button id="kt_password_cancel" type="button" class="btn btn-bg-dark btn-active-light-danger btn-active-color-white btn-color-gray-100 px-6">{{ __('Cancel') }}</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-bg-dark btn-active-secondary btn-active-color-white btn-color-gray-100">{{ __('Reset Password') }}</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->

        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>
<!--end::Sign-in Method-->
