<x-base-layout>
    <!--begin::Card-->
    <div class="card" id="invita-usuarios-app">
        <!--begin::Card body-->
        <div class="card-body pt-6 mx-5 mb-5 mt-8">
            <invita-usuarios-component
                :ruta="'{{ route("grupo.invitar.store") }}'"
                :grupo='@json(auth()->user()->grupos)'
                :url-descarga-aviso="'{{ route('descargar.aviso') }}'"
                :avatarUrl="'{{ asset('demo3/media/avatars/blank.png') }}'">
            </invita-usuarios-component>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</x-base-layout>
