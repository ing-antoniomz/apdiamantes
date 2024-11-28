<?php

namespace App\Http\Requests\Account;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class SettingsEmailRequest extends FormRequest
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
            'email'            => 'required|string|email|max:255|unique:users',
            'current_password_email' => ['required', new MatchOldPassword],
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
            'current_password_email' => __('Confirm Password'),
            'email' => __('E-Mail'),
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
