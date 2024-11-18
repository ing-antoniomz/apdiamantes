<x-auth-layout>
    <!--begin::Forgot Password Form-->
    <form class="form w-100 " novalidate="novalidate" id="kt_password_reset_form" action="{{ theme()->getPageUrl('password.email') }}">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <img class="w-275px w-md-300px w-lg-400px w-xl-500px pb-10 pe-0 pe-xl-20 d-none d-lg-block ps-10 ps-xl-0"
                src="{{ asset('apdiamantes/media/apdiamantes-dark.svg') }}" alt="">
            <h1 class="text-dark fw-bolder mb-3 user-select-none">{{ __('Forgot Password ?') }}</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-700 fw-semibold fs-6 pt-2 user-select-none"><label for="email">{{ __('Enter your email to reset your password.') }}</label></div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::Email-->
            <input type="text" placeholder="{{ __('E-Mail') }}" id="email" name="email" autocomplete="off" class="form-control bg-transparent">
            <!--end::Email-->
        </div>
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="button" id="kt_password_reset_submit" class="btn btn-bg-dark btn-active-secondary btn-active-color-white btn-color-gray-100 me-4">
                @include('partials.general._button-indicator')
            </button>
            <a href="{{ theme()->getPageUrl('login') }}" class="btn btn-bg-dark btn-active-light-danger btn-active-color-white btn-color-gray-100">{{ __('Cancel') }}</a>
        </div>
        <!--end::Actions-->
        <div></div>
    </form>
    <!--end::Forgot Password Form-->

</x-auth-layout>
