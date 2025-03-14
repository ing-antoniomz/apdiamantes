<!--begin::Action--->
<td class="text-end">
    <button data-user-id="{{ $model->id }}"
        class="btn btn-sm btn-light btn-active-light-warning my-1 send-activation-btn">
        {{ __("Send Activation") }}
    </button>
    <button data-user-name="{{ $model->name }}"
        class="btn btn-sm btn-light btn-active-light-primary my-1 edit-btn">
        {{ __("Edit") }}
    </button>
    {{-- <button data-destroy="{{ route('admin.users.destroy', $model->id) }}" class="btn btn-sm btn-light btn-active-light-primary my-1">
        {{ __("Delete") }}
    </button> --}}
</td>
<!--end::Action--->
