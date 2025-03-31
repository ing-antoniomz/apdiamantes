@extends('base.base')

@section('content')
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        {{ $slot }}
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap px-5">
                    <!--begin::Links-->
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_nosotros" class="px-5 text-white user-select-none">{{ __('About') }}</a>
                        <a href="{{ $theme->getOption('general', 'contact') }}" class="px-5 text-white user-select-none">{{ __('Contact Us') }}</a>
                        <a href="{{ $theme->getOption('product', 'purchase') }}" class="px-5 text-white user-select-none">{{ __('Purchase') }}</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url({{ asset('apdiamantes/media/fondo_1.jpg') }})">
                <!--begin::Content-->
                <div class="d-flex flex-column pt-5 pt-lg-10 pb-20 pb-lg-15 px-5 px-md-15 w-100">
                    <!--begin::Logo-->
                    <img alt="Logo" src="{{ asset('apdiamantes/media/logo_blanco_2.png') }}"
                        class="mx-auto mb-12 mb-xl-0 h-50px h-lg-150px h-xl-200px">
                    <!--end::Logo-->
                    <!--begin::Image-->
                    <img class="mx-auto w-275px w-md-300px w-lg-400px w-xl-500px mb-10 mb-lg-20 d-block d-lg-none"
                        src="{{ asset('apdiamantes/media/apdiamantes-dark.svg') }}" alt="">
                    <!--end::Image-->
                    <!--begin::Text-->
                    <div class="text-white fw-bolder fs-base fs-3 position-absolute bottom-0 start-75 translate-middle-x pb-1 pb-xl-10 text-center d-none d-lg-block user-select-none">
                        <p>Inserte un frase al respecto de la empresa o sbre los valores que representa.</p>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_nosotros">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h3 class="modal-title">{{ __('About') }}</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" />
                            <path d="M6 18L18 6" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <!--end::Close-->
                </div> --}}

                <div class="modal-body mx-5">
                    <div class="d-flex justify-content-end">
                        <div class="btn btn-icon btn-sm btn-active-light-primary" data-bs-dismiss="modal" aria-label="Close">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" />
                                <path d="M6 18L18 6" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                    @include('pages.about._nosotros')
                </div>

                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ __('Close') }}</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
