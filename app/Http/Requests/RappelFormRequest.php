<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RappelFormRequest extends FormRequest
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
            'nom'=>'required',
            'telephone'=>'required|min:11',
        ];
    }
    public function messages(){
        return [
            'nom.required'=>'Veuillez indiqué votre nom',
            'telephone.required'=>'Veuillez indiquer votre numero de telephone',
            'telephone.min'=>'Le numero de telephone n\'est pas valide',
        ];

    }
}
