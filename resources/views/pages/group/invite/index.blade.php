@section('scripts')
    <script src="{{ mix('js/apps/invita_usuarios.js') }}"></script>
@endsection

<x-base-layout>
    <!--begin::Card-->
    <div class="card" id="invita-usuarios-app">
        <!--begin::Card body-->
        <div class="card-body pt-6 mx-5 mb-5 mt-8">
            <invita-usuarios-component
                :ruta="'{{ route("grupo.invitar.store") }}'"
                :grupo='@json(auth()->user()->grupos)'
                :url-descarga-aviso="'{{ route('descargar.aviso') }}'">
            </invita-usuarios-component>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</x-base-layout>
