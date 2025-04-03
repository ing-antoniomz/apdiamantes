<?php
$items = array(
    array(
        'icon'        => 'icons/duotune/abstract/abs027.svg',
        'title'       => 'Documentation & Videos',
        'description' => 'From guides and video tutorials, to live demos and code examples to get started.',
        'link'        => theme()->getPageUrl('documentation/getting-started/overview'),
        'color'       => 'warning'
    ),

    array(
        'icon'        => 'icons/duotune/ecommerce/ecm007.svg',
        'title'       => 'Plugins & Components',
        'description' => 'Check out our 300+ in-house components and customized 3rd-party plugins.',
        'link'        => theme()->getPageUrl('https://preview.keenthemes.com/metronic8/demo1/documentation/base/utilities.html'),
        'color'       => 'primary'
    ),

    array(
        'icon'        => 'icons/duotune/art/art006.svg',
        'title'       => 'Layout Builder',
        'description' => 'Build your layout, preview it and export the HTML for server side integration.',
        'link'        => 'https://preview.keenthemes.com/metronic8/laravel/demo1/layout-builder.html',
        'color'       => 'info'
    ),

    array(
        'icon'        => 'icons/duotune/electronics/elc009.svg',
        'title'       => 'What\'s New',
        'description' => 'Latest features and improvements added with our users feedback in mind.',
        'link'        => theme()->getPageUrl('documentation/getting-started/changelog'),
        'color'       => 'danger'
    )
);
?>
<!--begin::Help drawer-->
<div
    id="kt_help"
    class="bg-body"
    data-kt-drawer="true"
    data-kt-drawer-name="help"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'350px', 'md': '525px'}"
    data-kt-drawer-direction="{{ theme()->getOption('layout', 'engage/help/direction') }}"
    data-kt-drawer-toggle="#kt_help_toggle"
    data-kt-drawer-close="#kt_help_close">

    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_help_header">

                <h5 class="card-title fw-bold ">
                    <a class="text-gray-600" href="{{ url('faq') }}">
                    {{ __('FAQ') }}
                    </a>
                </h5>


            <div class="card-toolbar">

                <div class="btn btn-icon btn-sm btn-active-light-primary" id="kt_help_close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" />
                        <path d="M6 18L18 6" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body" id="kt_help_body">
            <!--begin::Content-->
            <div
                id="kt_help_scroll"
                class="hover-scroll-overlay-y"
                data-kt-scroll="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_help_body"
                data-kt-scroll-dependencies="#kt_help_header"
                data-kt-scroll-offset="5px">

                    @include('pages.faq._questions')
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Help drawer-->
