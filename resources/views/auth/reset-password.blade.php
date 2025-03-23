<x-auth-layout>

    <!--begin::Signup Form-->
    <form class="form w-100 " novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{ route('password.update')}}">
    @csrf

        <!-- Password Reset Token -->
        <input type="hidden" id="token" name="token" value="{{ $token }}">

        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3 user-select-none">{{ __('Update Your Password') }}</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6 user-select-none">{{ __('Confirm you e-mail and new password') }}</div>
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->

        <!--begin::Input group=-->
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
            <!--begin::Email-->
            <input type="text" placeholder="{{ __('E-mail') }}" name="email" autocomplete="off" class="form-control bg-transparent">
            <!--end::Email-->
        </div>
        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control bg-transparent" type="password" placeholder="{{ __('Password') }}" id="password" name="password" autocomplete="off" required>
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->
                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-dark bg-active-success rounded h-5px me-2 active"></div>
                    <div class="flex-grow-1 bg-dark bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-dark bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-dark bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Hint-->
            <div class="text-muted user-select-none">{{ __('Use 8 or more characters with a mix of letters & numbers.') }}</div>
            <!--end::Hint-->
        </div>
        <!--end::Input group=-->
        <!--end::Input group=-->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::Repeat Password-->
            <input placeholder="{{ __('Repeat Password') }}" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent">
            <!--end::Repeat Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_up_submit" class="btn btn-bg-dark btn-active-secondary btn-active-color-white btn-color-gray-100">
                @include('partials.general._button-indicator')
            </button>
        </div>
        <!--end::Submit button-->
        <div></div>
    </form>
    <!--end::Signup Form-->

    <script src="{{ assetCustom('js/custom/authentication/sign-up/general.js') }}" defer></script>
    <style>
        input[name="password"].is-invalid,
        input[name="password"].is-valid {
            background-image: none !important;
        }
    </style>
</x-auth-layout>
