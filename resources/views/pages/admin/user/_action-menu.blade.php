<!--begin::Action-->
<td class="text-center align-middle">
    <div class="d-flex justify-content-center gap-2">
        @can('admin_users_activate')
            @if ($model->status === false)
                <button class="btn btn-light btn-active-light-warning send-activation-btn text-white"
                    data-user-name="{{ $model->user }}">
                    <i class="fa-solid fa-envelope fs-3 me-1"></i>{{ __("Activate") }}
                </button>
            @endif
        @endcan

        @can('admin_users_update')
            <button class="btn btn-light btn-active-light-primary edit-user-btn text-white" data-user='@json($model)'>
                <i class="fa-solid fa-pen fs-3 me-1"></i>{{ __("Edit") }}
            </button>
        @endcan
    </div>
</td>
<!--end::Action-->