@section('scripts')
    <script src="{{ mix('js/apps/admin_usuarios.js') }}"></script>
    {{ $dataTable->scripts() }}
@endsection

<x-base-layout>

    <!--begin::Card-->
    <div class="card" id="admin-usuarios-app">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            <!--begin::Table-->
                {{ $dataTable->table() }}
            <!--end::Table-->
        </div>
        <!--end::Card body-->
        <usuarios-component :grupos='{{ $grupos }}' :niveles='{{ $niveles }}'
            :avatarUrl="'{{ asset('demo3/media/avatars/blank.png') }}'">
        </usuarios-component>
    </div>
    <!--end::Card-->



</x-base-layout>
