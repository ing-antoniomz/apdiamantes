<!--begin::Action-->
<td class="text-center align-middle">
    <div class="d-flex justify-content-center gap-2">
        @can('admin_niveles_update')
            <button class="btn btn-light btn-active-light-primary edit-nivel-btn text-white" data-nivel='@json($grupo)' data-permisos='@json($grupo->permissions->pluck('id'))'>
                <i class="fa-solid fa-pen fs-3 me-1 text-primary"></i>{{ __("Edit") }}
            </button>
        @endcan
    </div>
</td>
<!--end::Action-->