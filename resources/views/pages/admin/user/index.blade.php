@section('scripts')
    <script src="{{ mix('js/apps/admin_usuarios.js') }}"></script>
    {{ $dataTable->scripts() }}
@endsection

<x-base-layout>

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            <!--begin::Table-->
                {{ $dataTable->table() }}
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <usuarios-component
        :ruta="'{{ route("admin.users.store") }}'"
        :grupos='{{ $grupos }}'
        :niveles='{{ $niveles }}'
        :avatarUrl="'{{ asset('demo3/media/avatars/blank.png') }}'">
    </usuarios-component>

</x-base-layout>
