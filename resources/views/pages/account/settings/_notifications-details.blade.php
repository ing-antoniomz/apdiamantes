<!--begin::Basic info-->
<div class="card {{ $class }}">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_notifications" aria-expanded="true" aria-controls="kt_account_profile_notifications">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <i class="bi bi-bell-fill fs-2x text-light"></i>
            <h3 class="fw-bolder ms-4 user-select-none">{{ __('Notifications') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_profile_notifications" class="collapse">
        <!--begin::Form-->
        <form id="kt_account_profile_notifications_form" class="form" method="POST" action="{{-- {{ route('settings.update') }} --}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!--begin::Card body-->
            <div class="card-body border-top px-9 py-3">

                <div class="row mb-6">

                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-row-dashed border-gray-300 align-middle gy-6">
                            <tbody class="fs-6 fw-semibold">
                                <!--begin::Table row-->
                                <tr>
                                    <td class="min-w-250px fs-4 fw-bold"></td>
                                    <td class="w-125px">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email"
                                                checked="" data-kt-check="true"
                                                data-kt-check-target="[data-kt-settings-notification=email]">
                                            <label class="form-check-label ps-2 user-select-none" for="kt_settings_notification_email">
                                                {{ __("E-mail") }}
                                            </label>
                                        </div>
                                    </td>
                                    <td class="w-125px">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone"
                                                checked="" data-kt-check="true"
                                                data-kt-check-target="[data-kt-settings-notification=phone]">
                                            <label class="form-check-label ps-2 user-select-none" for="kt_settings_notification_phone">
                                                {{ __("Application") }}
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <td>
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-primary">
                                                    <i class="ki-duotone ki-compass fs-1 text-primary"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6 user-select-none">Quick Online Courses</span>
                                                <span class="fs-7 text-muted user-select-none">Creating a clear text structure is just one SEO</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" id="billing1" checked=""
                                                data-kt-settings-notification="email">
                                            <label class="form-check-label ps-2" for="billing1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="billing2" checked=""
                                                data-kt-settings-notification="phone">
                                            <label class="form-check-label ps-2" for="billing2"></label>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <td>
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-danger">
                                                    <i class="ki-duotone ki-element-11 fs-1 text-danger"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6 user-select-none">Face to Face Discussions</span>
                                                <span class="fs-7 text-muted user-select-none">Creating a clear text structure is just one aspect</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="team1" checked=""
                                                data-kt-settings-notification="email">
                                            <label class="form-check-label ps-2" for="team1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="team2"
                                                data-kt-settings-notification="phone">
                                            <label class="form-check-label ps-2" for="team2"></label>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <td>
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-timer fs-1 text-success"><span class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6 user-select-none">Full Intro Training</span>
                                                <span class="fs-7 text-muted user-select-none">Creating a clear text structure copywriting</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="project1"
                                                data-kt-settings-notification="email">
                                            <label class="form-check-label ps-2" for="project1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="project2" checked=""
                                                data-kt-settings-notification="phone">
                                            <label class="form-check-label ps-2" for="project2"></label>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::Table row-->

                                <!--begin::Table row-->
                                <tr>
                                    <td class="border-bottom-0">
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2">
                                            <!--begin:Icon-->
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-warning">
                                                    <i class="ki-duotone ki-timer fs-1 text-warning"><span class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </span>
                                            <!--end:Icon-->

                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6 user-select-none">Full Intro Training</span>
                                                <span class="fs-7 text-muted user-select-none">Creating a clear text structure copywriting</span>
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="newsletter1"
                                                data-kt-settings-notification="email">
                                            <label class="form-check-label ps-2" for="newsletter1"></label>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="newsletter2"
                                                data-kt-settings-notification="phone">
                                            <label class="form-check-label ps-2" for="newsletter2"></label>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::Table row-->
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-bg-dark btn-active-light-primary btn-active-color-white btn-color-gray-100" id="kt_account_profile_notifications_submit" disabled>
                    @include('partials.general._button-indicator', ['label' => __('Save Changes')])
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->
