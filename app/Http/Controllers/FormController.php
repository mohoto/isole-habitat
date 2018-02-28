<?php

namespace App\Http\Controllers;

//use App\Http\Requests\RappelFormRequest;
use Illuminate\Http\Request;
use App\ClientRappel;

class FormController extends Controller
{

    public function storeRappel()
    {
        return view('site-web.formulaire-tel');
    }

    public function saveRappel(Request $request){
        $clientRappel = new ClientRappel();
        /*$clientRappel->civilite = $request->rappel_civilite;
        $clientRappel->nom = $request->rappel_nom;
        $clientRappel->telephone = $request->rappel_telephone;
        $clientRappel->heure_rappel = $request->rappel_heure_modal;*/
        $clientRappel->civilite = 'Monsieur';
        $clientRappel->nom = 'walid';
        $clientRappel->telephone = '078789887';
        $clientRappel->heure_rappel = '9h-12h';
        $clientRappel->save();
        $nomClient = $clientRappel->nom;
        return response()->json([
            'nonClient'=> $nomClient,
        ]);
        //return redirect('/');
        //echo 'Salut';
    }

}
