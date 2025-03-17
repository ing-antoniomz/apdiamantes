<x-auth-layout>


    <!--begin::Signin Form-->
    <form class="form w-100 " novalidate="novalidate" id="kt_sign_in_form" action="{{ theme()->getPageUrl('login') }}">
    @csrf

    <!--begin::Heading-->
        <div class="text-center mb-11">
            <img class="w-275px w-md-300px w-lg-400px w-xl-500px mb-10 mb-lg-20 pe-0 pe-xl-20 d-none d-lg-block ps-10 ps-xl-0"
                src="{{ asset('apdiamantes/media/apdiamantes-dark.svg') }}" alt="">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3 user-select-none">{{ __('Sign In') }}</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            {{-- <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div> --}}
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->
        <!--begin::Login options-->
        {{-- <div class="row g-3 mb-9">
            <!--begin::Col-->
            <div class="col-md-6">
                <!--begin::Google link=-->
                <a href="{{ url('/auth/redirect/google') }}?redirect_uri={{ url()->previous() }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                    <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'svg/brand-logos/google-icon.svg') }}" class="h-15px me-3">Sign in with Google</a>
                <!--end::Google link=-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6">
                <!--begin::Google link=-->
                <a href="{{ url('/auth/redirect/apple') }}?redirect_uri={{ url()->previous() }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                    <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3">
                    <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3">Sign in with Apple</a>
                <!--end::Google link=-->
            </div>
            <!--end::Col-->
        </div> --}}
        <!--end::Login options-->
        <!--begin::Separator-->
        <div class="separator separator-content border-light my-14">
            <span class="w-125px text-gray-700 fw-semibold fs-7 user-select-none"><label for="email">{{ __('E-Mail') }}</label></span>
        </div>
        <!--end::Separator-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
            <!--begin::Email-->
            <input type="text" placeholder="{{ __('E-Mail') }}" id="email" name="email" autocomplete="off" class="form-control bg-transparent" value="{{ old('email') }}" maxlength="60" required autofocus>
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
            <!--begin::Password-->
            <input type="password" placeholder="{{ __('Password') }}" id="password" name="password" autocomplete="off" class="form-control bg-transparent" maxlength="30"  required>
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            @if (Route::has('password.request'))
            <!--begin::Link-->
                <a href="{{ theme()->getPageUrl('password.request') }}" class="link-white user-select-none">{{ __('Forgot Password ?') }}</a>
                <!--end::Link-->
            @endif
        </div>
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-bg-dark btn-active-secondary btn-active-color-white btn-color-gray-100">
                @include('partials.general._button-indicator', ['label' => __('Continue')])
            </button>
        </div>
        <!--end::Submit button-->
        <!--begin::Sign up-->
        {{-- <div class="text-gray-700 text-center fw-semibold fs-6 user-select-none">{{ __('Not a Member yet ?') }}
            <a href="{{ theme()->getPageUrl('register') }}" class="link-white">{{ __('Sign Up') }}</a></div> --}}
        <!--end::Sign up-->
        <div></div>
    </form>
    <!--end::Signin Form-->

</x-auth-layout>
