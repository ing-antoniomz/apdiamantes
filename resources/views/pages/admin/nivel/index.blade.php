@section('scripts')
    <script src="{{ mix('js/apps/admin_niveles.js') }}"></script>
        {{ $dataTable->scripts() }}
@endsection

<x-base-layout>

    <!--begin::Card-->
    <div class="card" id="admin-niveles-app">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            <!--begin::Table-->
            {{ $dataTable->table() }}
            <!--end::Table-->
        </div>
        <!--end::Card body-->
        <niveles-component
        :permisos='{{ $permisos }}'>
        </niveles-component>
    </div>
    <!--end::Card-->
</x-base-layout>