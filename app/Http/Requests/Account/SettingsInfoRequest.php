<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class SettingsInfoRequest extends FormRequest
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
            'nombre' => 'required|string|max:100|alpha',
            'apellido_paterno' => 'required|string|max:100|alpha',
            'apellido_materno' => 'required|string|max:100|alpha',
            'company' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:40',
            'website' => 'nullable|string|max:255',
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
            'company' => __('Company'),
            'phone' => __('Phone'),
            'website' => __('Web Site'),
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
            $message .= ' ' . $validator->getTranslator()->get('(and :count more :pluralized)', [
                'count' => $count,
                'pluralized' => $pluralized,
            ]);
        }
        throw new ValidationException($validator, response()->json(['message' => $message], 422));
    }

}
