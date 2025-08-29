<template>
    <button
        type="submit"
        :form="formId || undefined"
        :class="['btn', 'btn-bg-dark', 'btn-active-light-primary', 'btn-active-color-white', 'btn-color-gray-100']"
        :disabled="disabled"
        :data-kt-indicator="disabled ? 'on' : 'off'"
    >
        <span class="indicator-label">{{ label }}</span>
        <span v-if="disabled" class="indicator-progress">
            Por favor Espera
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
        </span>
    </button>
</template>

<script>
export default {
    props: {
        isSubmitting: {
            type: Boolean,
            required: true
        },
        label: {
            type: String,
            required: true
        },
        disabled: {
            type: Boolean,
            required: true
        },
        formId: {
            type: String,
            required: false,
            default: null
        }
    }
};
</script>
