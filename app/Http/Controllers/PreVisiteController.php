<?php

namespace App\Http\Controllers;
use App\Previsite;
use App\ClientForm;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PreVisiteController extends Controller
{
    public function saveFromWebForm(Request $request){

        $departement = substr($request->code_postal, 0, 2);
        $clientPrevisite = new Previsite();
        $clientPrevisite->civilite = $request->civilite;
        $clientPrevisite->nom = $request->nom;
        $clientPrevisite->prenom = $request->prenom;
        $clientPrevisite->rue = $request->rue;
        $clientPrevisite->codePostal = $request->code_postal;
        $clientPrevisite->ville = $request->ville;
        $clientPrevisite->departement = $departement;
        $clientPrevisite->telephone_fixe = $request->telephone_fixe;
        $clientPrevisite->telephone_mobile = $request->telephone_mobile;
        $clientPrevisite->email = $request->email;
        $clientPrevisite->revenu_fiscal = $request->revenu_fiscal;
        $clientPrevisite->nombre_personne = $request->nombre_personne;
        $clientPrevisite->type_bail = $request->type_bail;
        $clientPrevisite->chauffage = $request->type_chauffage;
        $clientPrevisite->surface_maison = $request->type_surface;
        $clientPrevisite->isolation_combles = $request->isolation_combles;
        $clientPrevisite->isolation_combles_surface = $request->isolation_combles_surface;
        $clientPrevisite->isolation_combles_accee = $request->isolation_combles_accee;
        $clientPrevisite->isolation_combles_type = $request->isolation_combles_type;
        $clientPrevisite->isolation_garage = $request->isolation_garage;
        $clientPrevisite->isolation_garages_surface = $request->isolation_garages_surface;
        $clientPrevisite->isolation_caves = $request->isolation_caves;
        $clientPrevisite->isolation_caves_surface = $request->isolation_caves_surface;
        $clientPrevisite->cave_voutee = $request->cave_voutee;
        $clientPrevisite->isolation_voutee_surface = $request->isolation_voutee_surface;
        $clientPrevisite->commentaires = $request->commentaires;
        $clientPrevisite->source_isolation = $request->source_isolation;

        $clientPrevisite->save();
        Session::flash('suceess', 'Client enregistré pour une pré-visite');
        return redirect()->back();

    }

    public function displayVisite(Request $request){

        if($ville = $request->get('ville')){
            $clientVisites = Previsite::where('ville', $ville)->get();
        }
        else{
            $clientVisites = Previsite::orderBy('id', 'asc')->get();
        }
        return view ('crm.lead-previsite', compact('clientVisites'));
    }

    public function searchVille($ville){
       // $clientPrevisiteVille = Previsite::where('ville', $ville)->get();
    }

    public function test(Request $request){

        /*$clientPrevisite = ClientForm::find($id);*/
        //$clientPrevisite = $request->civilite;
        $clientPrevisite = $request->nom;
        echo $clientPrevisite;
    }
}
