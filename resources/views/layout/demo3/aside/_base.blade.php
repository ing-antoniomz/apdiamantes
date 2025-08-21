<!--begin::Aside-->
<div
	id="kt_aside"
	class="aside py-9 user-select-none {{ theme()->printHtmlClasses('aside', false) }}"
	data-kt-drawer="true"
	data-kt-drawer-name="aside"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'200px', '300px': '250px'}"
	data-kt-drawer-direction="start"
	data-kt-drawer-toggle="#kt_aside_toggle"
	>

    <!--begin::Brand-->
    <div class="flex-column-auto px-9 mb-9" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ theme()->getPageUrl('') }}" class="d-flex flex-column align-items-center">
            <img alt="Logo" src="{{ asset('apdiamantes/media/apdiamantes-dark.svg') }}" class="h-50px mb-2" />
            <img alt="Logo" src="{{ asset('apdiamantes/media/logo_blanco_2.png') }}" class="h-40px" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside menu-->
	<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
        {{ theme()->getView('layout/aside/_menu') }}
    </div>
    <!--end::Aside menu-->

    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
        <!--begin::User panel-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <div class="symbol symbol-circle symbol-60px">
                    <img
                        src="{{ auth()->user()->getAvatarUrlAttribute() === url('storage')
                            ? url('demo3/media/avatars/blank.png')
                            : auth()->user()->getAvatarUrlAttribute()
                            ?? asset('avatars/blank.png')
                        }}"
                        alt="photo"
                    />
                </div>
                <!--end::Avatar-->

                <!--begin::User info-->
                <div class="ms-2">
                    <!-- Nombre del usuario -->
                    <div class="d-block fw-bolder fs-6 text-gray-800 text-hover-primary">
                        {{ auth()->user()->name }}
                    </div>
                    <!-- Rol del usuario -->
                    <div class="d-flex align-items-center mt-1 fs-7 text-muted fw-bold">
                        <span>{{ auth()->user()->roles()->first()->name }}</span>
                    </div>
                    <!-- Grupo del usuario -->
                    <div class="d-flex align-items-center mt-1 fs-7 text-muted fw-bold">
                        <img src="{{ auth()->user()->rol_url }}" alt="imagen_rol" class="img-fluid rounded me-1" style="max-height: 30px;">
                        <img src="{{ auth()->user()->grupo_url }}" alt="imagen_grupo" class="img-fluid rounded me-1" style="max-height: 30px;">
                        <span>{{ auth()->user()->grupos()->first()?->name }}</span>
                    </div>
                </div>
                <!--end::User info-->
            </div>
            <!--end::Wrapper-->

            <!--begin::User menu-->
            <div class="ms-1">
                <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                    {!! theme()->getSvgIcon("icons/duotune/coding/cod001.svg", "svg-icon-1") !!}
                </div>
                {{ theme()->getView('partials/topbar/_user-menu', array(
    "language-menu-placement" => "right-end",
    "language-menu-flip" => "{default: 'top', lg: ''}",
    "subscription-menu-placement" => "right-end",
    "subscription-menu-flip" => "{default: 'bottom', lg: ''}"
)) }}
            </div>
            <!--end::User menu-->
        </div>
        <!--end::User panel-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
