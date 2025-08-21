<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserUpdateRequest extends FormRequest
{
    protected $user;

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
        // Recuperar el usuario por username
        $username = $this->route('username');
        $this->user = \App\Models\User::where('user', $username)->first();

        $userInfoId = $this->user->info->id ?? null;

        $rules = [
            'user' => [
                'required',
                'string',
                'alpha_dash',
                'min:4',
                'max:30',
                Rule::unique('users', 'user')->ignore($this->user->id),
            ],
            'correo' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],
            'telefono' => [
                'required',
                'regex:/^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/',
                function ($attribute, $value, $fail) {
                    $numbersOnly = preg_replace('/\D/', '', $value);
                    if (strlen($numbersOnly) > 12) {
                        $fail('El número debe tener como máximo 12 dígitos.');
                    }
                }
            ],
            'nombre' => ['required','string','min:3','max:30'],
            'apellido_paterno' => ['required','string','min:3','max:30'],
            'apellido_materno' => ['required','string','min:3','max:30'],
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
            'rfc' => [
                'required',
                'regex:/^([A-ZÑ&]{3,4})\d{6}(?:[A-Z\d]{3})?$/',
                'min:12',
                'max:13',
                Rule::unique('user_infos', 'rfc')->ignore($userInfoId),
            ],
            'beneficiario1' => ['required','string'],
            'beneficiario2' => ['nullable','string','min:3','max:60'],
            'cuenta_apdiamantes' => [
                'required','string','min:3','max:60',
                Rule::unique('users', 'cuenta_ap')->ignore($this->user->id)
            ],
            'parentescoBeneficiario1' => ['nullable','string','min:3','max:60'],
            'parentescoBeneficiario2' => ['nullable','string','min:3','max:60'],
            'estatus' => ['nullable','in:on'],
            'radioPersona' => ['required','in:FISICA,MORAL'],
            'nivel' => ['required','string'],
            'grupo' => ['required','string'],
            'posicion' => ['required','string'],

            // Información bancaria
            'banco' => ['required','string','min:5','max:30'],
            'cuenta' => [
                'required',
                'regex:/^\d{18}$/',
                'size:18',
                Rule::unique('user_infos', 'cuenta')->ignore($userInfoId),
            ],
            'sucursal' => ['nullable','string','min:3','max:60'],
            'titular_cuenta' => ['required','string','min:5','max:60'],

            // Dirección fiscal
            'direccion_fiscal_calle' => ['required','string','min:5','max:80'],
            'direccion_fiscal_numero' => ['required','string','min:2','max:30'],
            'direccion_fiscal_colonia' => ['required','string','min:5','max:30'],
            'direccion_fiscal_ciudad' => ['required','string','min:5','max:30'],
            'direccion_fiscal_estado' => ['required','string','min:5','max:30'],
            'direccion_fiscal_codigo_postal' => ['required','regex:/^\d{5}$/'],
            'direccion_fiscal_telefono_fiscal' => [
                'nullable',
                'regex:/^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/',
                function ($attribute, $value, $fail) {
                    $numbersOnly = preg_replace('/\D/', '', $value);
                    if (strlen($numbersOnly) > 12) {
                        $fail('El número debe tener como máximo 12 dígitos.');
                    }
                }
            ],

            // Dirección de envío
            'direccion_envio_calle' => ['required','string','min:5','max:80'],
            'direccion_envio_numero' => ['required','string','min:2','max:30'],
            'direccion_envio_colonia' => ['required','string','min:5','max:30'],
            'direccion_envio_ciudad' => ['required','string','min:5','max:30'],
            'direccion_envio_estado' => ['required','string','min:5','max:30'],
            'direccion_envio_codigo_postal' => ['required','regex:/^\d{5}$/'],
            'direccion_envio_telefono_fiscal' => [
                'nullable',
                'regex:/^\+?\d{1,3}?[-\s]?(\d{1,4}[-\s]?){1,4}$/',
                function ($attribute, $value, $fail) {
                    $numbersOnly = preg_replace('/\D/', '', $value);
                    if (strlen($numbersOnly) > 12) {
                        $fail('El número debe tener como máximo 12 dígitos.');
                    }
                }
            ],

            // Archivos
            'avatar' => ['nullable','file','mimes:jpeg,jpg,png','max:10240'],
            'inscripcion' => ['nullable','file','mimes:jpeg,jpg,pdf','max:10240'],
            'ine' => ['nullable','file','mimes:jpeg,jpg,pdf','max:10240'],
            'comprobante_domicilio' => ['nullable','file','mimes:jpeg,jpg,pdf','max:10240'],
        ];

        // Validaciones condicionales
        if ($this->input('avatar_remove') == 'true') {
            $rules['avatar_remove'] = ['nullable'];
        }
        if ($this->input('radioPersona') === 'FISICA') {
            $rules['cosolicitante'] = ['required','string','min:3','max:60'];
            $rules['cosolicitante_rfc'] = ['required','regex:/^([A-ZÑ&]{3,4})\d{6}(?:[A-Z\d]{3})?$/','min:12','max:13'];
        } elseif ($this->input('radioPersona') === 'MORAL') {
            $rules['persona_autorizada'] = ['required','string','min:3','max:60'];
            $rules['company'] = ['required','string','min:3','max:30'];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'nombre' => __('Name'),
            'apellido_paterno' => __('First Last Name'),
            'apellido_materno' => __('Second Last Name'),
        ];
    }

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
