<?php

namespace App\Http\Requests\Groups;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class InviteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:5',
            'apellido_paterno' => 'required|string|max:5',
            'apellido_materno' => 'required|string|max:30',
        ];
    }


    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nombre' => __('Name'),
            'apellido_paterno' => __('First Last Name'),
            'apellido_materno' => __('Second Last Name'),
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
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
