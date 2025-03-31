<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column {{ theme()->printHtmlClasses('footer', false) }}" id="kt_footer">
    <!--begin::Container-->
    <div class="{{ theme()->printHtmlClasses('footer-container', false) }} d-flex flex-column flex-md-row flex-stack">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1 user-select-none">
            <span class="text-gray-400 fw-bold me-1"><img alt="Logo" src="{{ asset('apdiamantes/media/logo_blanco_2.png') }}" class="h-30px mb-2 me-2" /> |
            <a href="{{ theme()->getOption('general', 'website') }}" target="_blank" class="text-muted text-hover-primary fw-bold ms-2 fs-6">APDIAMANTES</a>
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1 user-select-none">
            <li class="menu-item"><a href="{{ theme()->getOption('general', 'about') }}"  class="menu-link px-2">{{ __('About') }}</a></li>

            <li class="menu-item"><a href="{{ theme()->getOption('general', 'support') }}" target="_blank" class="menu-link px-2">{{ __('Support') }}</a></li>

            <li class="menu-item"><a href="{{ theme()->getOption('general', 'auth_contact') }}" class="menu-link px-2">{{ __('Contact Us') }}</a></li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
