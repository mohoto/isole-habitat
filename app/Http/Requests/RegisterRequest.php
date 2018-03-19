<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:255|unique:users',
            'password' => 'required|min:6',
            'passwordConfirm' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Prénom obligatoire',
            'name.max' => 'Prénom trop long',
            'name.unique' => 'Prénom déjà utilisé',
            'password.required' => 'Mot de passe obligatoire',
            'password.min' => 'Mot de passe inférieur à 6 caractères',
            'passwordConfirm.required' => 'Confirmation de mot de passe obligatoire',
            'passwordConfirm.same' => 'Les 2 mot de passe sont différente',
        ];
    }
}
