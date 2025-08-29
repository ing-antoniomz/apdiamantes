<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class NivelRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para realizar esta solicitud.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:30'],
            'descripcion' => ['required', 'string', 'min:10', 'max:250', 'regex:/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s.,-]*$/'],
            'volumen' => ['required', 'regex:/^\d{1,7}$/'],
            'status' => ['nullable', 'in:on'],
            'imagen' => ['nullable', 'file', 'mimes:jpeg,jpg,svg', 'max:10240'], // 10MB
            'permisos' => ['required', 'array', 'min:1'],
        ];
    }

    /**
     * Obtiene los nombres personalizados de los atributos para los mensajes de error de validación.
     *
     * @return array<string, string>
     */
    public function attributes()
    {
        return [
            'name' => __('Nombre'),
            'descripcion' => __('Descripción'),
            'volumen' => __('Volumen'),
            'status' => __('Estatus'),
            'imagen' => __('Imagen'),
            'permisos' => __('Permisos'),
        ];
    }

    /**
     * Obtiene los mensajes personalizados para los errores de validación.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'permisos.required' => 'Debes seleccionar al menos un permiso',
            'permisos.min' => 'Debes seleccionar al menos un permiso',
        ];
    }

    /**
     * Maneja un intento fallido de validación.
     *
     * Este método personaliza el mensaje de error que se devuelve cuando la validación falla.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator El validador que falló.
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException Si la validación falla.
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $messages = $validator->errors()->all();
        $message = array_shift($messages);
        if ($count = count($messages)) {
            $pluralized = $count === 1 ? __('error') : __('errors');
            $translator = app('translator');
            $message .= ' ' . $translator->get('(and :count more :pluralized)', [
                'count' => $count,
                'pluralized' => $pluralized,
            ]);
        }
        throw new ValidationException($validator, response()->json(['message' => $message], 422));
    }
}
