<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UserRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para realizar esta solicitud.
     *
     * @return bool `true` si el usuario está autorizado, de lo contrario `false`.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * Este método define las reglas de validación para los diferentes campos de la solicitud,
     * incluyendo validaciones condicionales según el tipo de persona (FÍSICA o MORAL).
     *
     * @return array<string, mixed> Un arreglo asociativo con las reglas de validación.
     */
    public function rules()
    {
        $rules = [
            // Usuario
            'user' => ['required', 'string', 'alpha_dash', 'min:4', 'max:30', 'unique:users,user'], // Validación para el nombre de usuario
            'correo' => ['required', 'email','unique:users,email'], // Validación para el correo electrónico
            'telefono' => [
                'required',
                'regex:/^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/',
                function ($attribute, $value, $fail) {
                    $numbersOnly = preg_replace('/\D/', '', $value);
                    if (strlen($numbersOnly) > 12) {
                        $fail('El número debe tener como máximo 12 dígitos.');
                    }
                }
            ], // Validación para el teléfono
            'nombre' => ['required', 'string', 'min:3', 'max:30'], // Validación para el nombre
            'apellido_paterno' => ['required', 'string', 'min:3', 'max:30'], // Validación para el apellido paterno
            'apellido_materno' => ['required', 'string', 'min:3', 'max:30'], // Validación para el apellido materno
            'password' => [
                'nullable',
                'string',
                'min:8',
                'max:30',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/'
            ],
            'confirm_password' => [
                'nullable',
                'string',
                'same:password',
            ],
            'rfc' => ['required', 'regex:/^([A-ZÑ&]{3,4})\d{6}(?:[A-Z\d]{3})?$/', 'min:12', 'max:13','unique:user_infos,rfc'], // Validación para el RFC
            'beneficiario1' => ['required', 'string'], // Validación para el primer beneficiario
            'beneficiario2' => ['nullable', 'string', 'min:3', 'max:60'], // Validación para el segundo beneficiario
            'cuenta_apdiamantes' => ['required', 'string', 'min:3', 'max:60','unique:users,cuenta_ap'], // Validación para el segundo beneficiario
            'parentescoBeneficiario1' => ['nullable', 'string', 'min:3', 'max:60'], // Validación para el segundo beneficiario
            'parentescoBeneficiario2' => ['nullable', 'string', 'min:3', 'max:60'], // Validación para el segundo beneficiario
            'estatus' => ['nullable', 'in:on'],
            'radioPersona' => ['required', 'in:FISICA,MORAL'], // Validación para el tipo de persona
            'nivel' => ['required', 'string'], // Validación para el nivel
            'grupo' => ['required', 'string'], // Validación para el grupo
            'posicion' => ['required', 'string'], // Validación para el nivel

            // Información bancaria
            'banco' => ['required', 'string', 'min:5', 'max:30'], // Validación para el banco
            'cuenta' => ['required', 'regex:/^\d{18}$/', 'size:18','unique:user_infos,cuenta'], // Validación para la cuenta bancaria
            'sucursal' => ['nullable', 'string', 'min:3', 'max:60'], // Validación para la sucursal
            'titular_cuenta' => ['required', 'string', 'min:5', 'max:60'], // Validación para el titular de la cuenta

            // Dirección fiscal
            'direccion_fiscal_calle' => ['required', 'string', 'min:5', 'max:80'], // Validación para la calle fiscal
            'direccion_fiscal_numero' => ['required', 'string', 'min:2', 'max:30'], // Validación para el número fiscal
            'direccion_fiscal_colonia' => ['required', 'string', 'min:5', 'max:30'], // Validación para la colonia fiscal
            'direccion_fiscal_ciudad' => ['required', 'string', 'min:5', 'max:30'], // Validación para la ciudad fiscal
            'direccion_fiscal_estado' => ['required', 'string', 'min:5', 'max:30'], // Validación para el estado fiscal
            'direccion_fiscal_codigo_postal' => ['required', 'regex:/^\d{5}$/'], // Validación para el código postal fiscal
            'direccion_fiscal_telefono_fiscal' => [
                'nullable',
                'regex:/^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/',
                function ($attribute, $value, $fail) {
                    $numbersOnly = preg_replace('/\D/', '', $value);
                    if (strlen($numbersOnly) > 12) {
                        $fail('El número debe tener como máximo 12 dígitos.');
                    }
                }
            ], // Validación para el teléfono fiscal

            // Dirección de envío
            'direccion_envio_calle' => ['required', 'string', 'min:5', 'max:80'], // Validación para la calle de envío
            'direccion_envio_numero' => ['required', 'string', 'min:2', 'max:30'], // Validación para el número de envío
            'direccion_envio_colonia' => ['required', 'string', 'min:5', 'max:30'], // Validación para la colonia de envío
            'direccion_envio_ciudad' => ['required', 'string', 'min:5', 'max:30'], // Validación para la ciudad de envío
            'direccion_envio_estado' => ['required', 'string', 'min:5', 'max:30'], // Validación para el estado de envío
            'direccion_envio_codigo_postal' => ['required', 'regex:/^\d{5}$/'], // Validación para el código postal de envío
            'direccion_envio_telefono_fiscal' => [
                'nullable',
                'regex:/^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/',
                function ($attribute, $value, $fail) {
                    $numbersOnly = preg_replace('/\D/', '', $value);
                    if (strlen($numbersOnly) > 12) {
                        $fail('El número debe tener como máximo 12 dígitos.');
                    }
                }
            ], // Validación para el teléfono de envío

            // Imagen
            'avatar' => ['nullable', 'file', 'mimes:jpeg,jpg,png', 'max:10240'], // Validación para el avatar
            'inscripcion' => ['nullable', 'file', 'mimes:jpeg,jpg,pdf', 'max:10240'],
            'ine' => ['nullable', 'file', 'mimes:jpeg,jpg,pdf', 'max:10240'],
            'comprobante_domicilio' => ['nullable', 'file', 'mimes:jpeg,jpg,pdf', 'max:10240'],
        ];

        // Validaciones condicionales según el tipo de persona
        if ($this->input('radioPersona') === 'FISICA') {
            $rules['cosolicitante'] = ['required', 'string', 'min:3', 'max:60']; // Validación para el co-solicitante
            $rules['cosolicitante_rfc'] = ['required', 'regex:/^([A-ZÑ&]{3,4})\d{6}(?:[A-Z\d]{3})?$/', 'min:12', 'max:13']; // Validación para el RFC del co-solicitante
        } elseif ($this->input('radioPersona') === 'MORAL') {
            $rules['persona_autorizada'] = ['required', 'string', 'min:3', 'max:60']; // Validación para la persona autorizada
            $rules['company'] = ['required', 'string', 'min:3', 'max:30']; // Validación para la empresa
        }

        return $rules;
    }

    /**
     * Obtiene los nombres personalizados de los atributos para los mensajes de error de validación.
     *
     * @return array<string, string> Un arreglo asociativo donde las claves son los nombres de los atributos
     *                               y los valores son los nombres personalizados traducidos.
     */
    public function attributes()
    {
        return [
            'nombre' => __('Name'), // Traducción para el atributo 'nombre'
            'apellido_paterno' => __('First Last Name'), // Traducción para el atributo 'apellido_paterno'
            'apellido_materno' => __('Second Last Name'), // Traducción para el atributo 'apellido_materno'
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
            $translator = app('translator'); // Obtén el traductor
            $message .= ' ' . $translator->get('(and :count more :pluralized)', [
                'count' => $count,
                'pluralized' => $pluralized,
            ]);
        }
        throw new ValidationException($validator, response()->json(['message' => $message], 422));
    }
}
