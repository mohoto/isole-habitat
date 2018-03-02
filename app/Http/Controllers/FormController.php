<?php

namespace App\Http\Controllers;

use App\Http\Requests\RappelFormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\ClientRappel;
Use Illuminate\Contracts\Session\Session;
class FormController extends Controller
{

    public function storeRappel()
    {
        return view('site-web.formulaire-tel');

    }

    public function saveRappel(Request $request){

        $rules = [
            'rappel_nom'=>'required',
            'rappel_telephone'=>'required|min:14',
        ];
        $messages = [
            'rappel_nom.required'=>'Veuillez indiquer votre nom',
            'rappel_telephone.required'=>'Veuillez indiquer votre numero de telephone',
            'rappel_telephone.min'=>'Le numero de telephone n\'est pas valide',
        ];
        $validate = Validator::make($request->all(), $rules, $messages);
        if($validate->fails()){
            return response($validate->errors(), 401);
        }

        $clientRappel = new ClientRappel();
        $clientRappel->civilite = $request->rappel_civilite;
        $clientRappel->nom = $request->rappel_nom;
        $clientRappel->telephone = $request->rappel_telephone;
        $clientRappel->heure_rappel = $request->rappel_heure_modal;
        $clientRappelSave = $clientRappel->save();

        return response()->json([
            'heureRappel'=> $clientRappel->heure_rappel,
        ]);
    }

}
