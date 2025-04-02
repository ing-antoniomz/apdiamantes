<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column {{ theme()->printHtmlClasses('footer', false) }}" id="kt_footer">
    <!--begin::Container-->
    <div class="{{ theme()->printHtmlClasses('footer-container', false) }} d-flex flex-column flex-md-row flex-stack">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1 user-select-none">
            <span class="text-gray-400 fw-bold me-1"><img alt="Logo" src="{{ asset('apdiamantes/media/logo_blanco_2.png') }}" class="h-30px mb-2 me-2" /> |
            <a href="#" class="text-muted text-hover-primary fw-bold ms-2 fs-6">APDIAMANTES</a>
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1 user-select-none">
            <li class="menu-item"><a href="{{ theme()->getOption('general', 'about') }}"  class="menu-link px-2">{{ __('About') }}</a></li>

            <li class="menu-item"><a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_soporte" class="menu-link px-2">{{ __('Support') }}</a></li>

            <li class="menu-item"><a href="{{ theme()->getOption('general', 'auth_contact') }}" class="menu-link px-2">{{ __('Contact Us') }}</a></li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
<div class="modal fade" tabindex="-1" id="kt_modal_soporte">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h3 class="modal-title">Modal title</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" />
                        <path d="M6 18L18 6" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
                <!--end::Close-->
            </div> --}}

            <div class="modal-body">
                <div class="d-flex justify-content-between pb-5">
                    <h3 class="modal-title user-select-none"><img alt="Logo" src="https://apdiamantes-local.com/apdiamantes/media/logo_blanco_2.png" class="h-30px mb-0 me-4">{{ __('Do you have any problems?') }}</h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" />
                            <path d="M6 18L18 6" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                </div>
                <p class="user-select-none">{{ __('If you experienced an issue with the app, please write down the error code and take a screenshot. Then, send us an email with a detailed description of the problem. We will get back to you as soon as possible to help you.') }}</p>
                <p>{{ __('E-mail') }}: apdiamantes@gmail.com</p>
                <hr>
                <p class="text-muted small text-end mb-0 fw-bold user-select-none"> APDIAMANTES</p>


            </div>

            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
            </div> --}}
        </div>
    </div>
</div>
