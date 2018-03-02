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
            'rappel_nom'=>'required',
            'rappel_telephone'=>'required|min:14',
        ];
    }
    public function messages(){
        return [
            'rappel_nom.required'=>'Veuillez indiquer votre nom',
            'rappel_telephone.required'=>'Veuillez indiquer votre numero de telephone',
            'rappel_telephone.min'=>'Le numero de telephone n\'est pas valide',
        ];

    }
}
