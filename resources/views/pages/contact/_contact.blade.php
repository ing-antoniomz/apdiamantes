<!--begin::Row-->
<div class="row mb-3">
    <!--begin::Col-->
    <div class="col-md-6 pe-lg-10">
        <!--begin::Form-->
        <form action="" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="kt_contact_form">
            <h1 class="fw-bold text-gray-900 mb-9">Send Us Email</h1>

            <!--begin::Input group-->
            <div class="row mb-5">
                <!--begin::Col-->
                <div class="col-md-6 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-5 fw-semibold mb-2">Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="{{ auth()->check() ? auth()->user()->name : '' }}">
                    <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-6 fv-row fv-plugins-icon-container">
                    <!--end::Label-->
                    <label class="fs-5 fw-semibold mb-2">Email</label>
                    <!--end::Label-->
                    <!--end::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" value="{{ auth()->check() ? auth()->user()->email : '' }}" name="email">
                    <!--end::Input-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2">Subject</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="subject">
                <!--end::Input-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-10 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-semibold mb-2">Message</label>
                <textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
            </div>
            <!--end::Input group-->

            <!--begin::Submit-->
            <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">

                <!--begin::Indicator label-->
                <span class="indicator-label">
                    Send Feedback
                </span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress-->
            </button>
            <!--end::Submit-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 ps-lg-10">
        <!--begin::Map-->
        <div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px;" tabindex="0"></div>
        <!--end::Map-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row g-5 mb-5 mb-lg-15 ">
    <!--begin::Col-->
    <div class="col-sm-6 pe-lg-10">
        <!--begin::Phone-->
        <div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
            <!--begin::Icon-->
            <span class="text-warning">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3"
                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                        fill="currentColor" />
                    <path
                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Icon-->
            <!--begin::Subtitle-->
            <h1 class="text-gray-900 fw-bold my-5">
                Let’s Speak
            </h1>
            <!--end::Subtitle-->
            <!--begin::Number-->
            <div class="text-gray-700 fw-semibold fs-2">
                1 (833) 597-7538
            </div>
            <!--end::Number-->
        </div>
        <!--end::Phone-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-sm-6 ps-lg-10">
        <!--begin::Address-->
        <div class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
            <!--begin::Icon-->
            <span class="text-primary">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3"
                        d="M18.0624 15.3454L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3454C4.56242 13.6454 3.76242 11.4452 4.06242 8.94525C4.56242 5.34525 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24525 19.9624 9.94525C20.0624 12.0452 19.2624 13.9454 18.0624 15.3454ZM13.0624 10.0453C13.0624 9.44534 12.6624 9.04534 12.0624 9.04534C11.4624 9.04534 11.0624 9.44534 11.0624 10.0453V13.0453H13.0624V10.0453Z"
                        fill="currentColor" />
                    <path
                        d="M12.6624 5.54531C12.2624 5.24531 11.7624 5.24531 11.4624 5.54531L8.06241 8.04531V12.0453C8.06241 12.6453 8.46241 13.0453 9.06241 13.0453H11.0624V10.0453C11.0624 9.44531 11.4624 9.04531 12.0624 9.04531C12.6624 9.04531 13.0624 9.44531 13.0624 10.0453V13.0453H15.0624C15.6624 13.0453 16.0624 12.6453 16.0624 12.0453V8.04531L12.6624 5.54531Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Icon-->
            <!--begin::Subtitle-->
            <h1 class="text-gray-900 fw-bold my-5">
                Our Head Office
            </h1>
            <!--end::Subtitle-->
            <!--begin::Description-->
            <div class="text-gray-700 fs-3 fw-semibold">
                Churchill-laan 16 II, 1052 CD, Amsterdam
            </div>
            <!--end::Description-->
        </div>
        <!--end::Address-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Card-->
<div class="card mb-4 bg-light text-center ">
    <!--begin::Body-->
    <div class="card-body py-12">
        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/facebook-4.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->

        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/instagram-2-1.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->

        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/github.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->

        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/behance.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->

        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/pinterest-p.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->

        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/twitter.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->

        <!--begin::Icon-->
        <a href="#" class="mx-4">
            <img src="{{ theme()->getMediaUrlPath('svg/brand-logos/dribbble-icon-1.svg') }}" class="h-30px my-2" alt="">
        </a>
        <!--end::Icon-->
    </div>
    <!--end::Body-->
</div>
<!--end::Card-->
