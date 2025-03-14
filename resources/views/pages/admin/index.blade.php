<x-base-layout>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('pages.admin._table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    @include('pages.admin._add-user-modal')

</x-base-layout>
