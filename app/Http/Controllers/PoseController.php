<?php

namespace App\Http\Controllers;
use App\ClientRappel;
use App\ClientForm;
use App\Pose;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PoseController extends Controller
{
    public function saveFromWebForm(Request $request, $id){

        $clientLead = ClientForm::find($id);
        $clientLead->lead_traite = 1;
        $clientLead->save();

        $departement = substr($request->code_postal, 0, 2);
        $pose = new Pose();
        $pose->civilite = $request->civilite;
        $pose->nom = $request->nom;
        $pose->prenom = $request->prenom;
        $pose->rue = $request->rue;
        $pose->codePostal = $request->code_postal;
        $pose->ville = $request->ville;
        $pose->departement = $departement;
        $pose->telephone_fixe = $request->telephone_fixe;
        $pose->telephone_mobile = $request->telephone_mobile;
        $pose->email = $request->email;
        $pose->revenu_fiscal = $request->revenu_fiscal;
        $pose->nombre_personne = $request->nombre_personne;
        $pose->situation_eligible = $request->situation;
        $pose->type_bail = $request->type_bail;
        $pose->chauffage = $request->type_chauffage;
        $pose->surface_maison = $request->type_surface;
        $pose->isolation_combles = $request->isolation_combles;
        $pose->isolation_combles_surface = $request->isolation_combles_surface;
        $pose->isolation_combles_accee = $request->isolation_combles_accee;
        $pose->isolation_combles_type = $request->isolation_combles_type;
        $pose->isolation_garage = $request->isolation_garage;
        $pose->isolation_garages_surface = $request->isolation_garages_surface;
        $pose->isolation_caves = $request->isolation_caves;
        $pose->isolation_caves_surface = $request->isolation_caves_surface;
        $pose->cave_voutee = $request->cave_voutee;
        $pose->isolation_voutee_surface = $request->isolation_voutee_surface;
        $pose->commentaires = $request->commentaires;
        $pose->source_isolation = $request->source_isolation;
        $pose->rdv_jour_previsite = $request->rdv_jour_previsite;
        $pose->rdv_heure_previsite = $request->rdv_heure_previsite;
        $pose->lead_previsite = 1;

        $pose->save();
        Session::flash('success', 'Client enregistré pour une pré-visite');
        return redirect()->back();

    }
    public function saveRappelWeb(Request $request, $id){

        $clientLead = ClientRappel::find($id);
        $clientLead->lead_traite = 1;
        $clientLead->save();

        $departement = substr($request->code_postal, 0, 2);
        $pose = new Pose();
        $pose->civilite = $request->civilite;
        $pose->nom = $request->nom;
        $pose->prenom = $request->prenom;
        $pose->rue = $request->rue;
        $pose->codePostal = $request->code_postal;
        $pose->ville = $request->ville;
        $pose->departement = $departement;
        $pose->telephone_fixe = $request->telephone_fixe;
        $pose->telephone_mobile = $request->telephone_mobile;
        $pose->email = $request->email;
        $pose->revenu_fiscal = $request->revenu_fiscal;
        $pose->nombre_personne = $request->nombre_personne;
        $pose->situation_eligible = $request->situation;
        $pose->type_bail = $request->type_bail;
        $pose->chauffage = $request->type_chauffage;
        $pose->surface_maison = $request->type_surface;
        $pose->isolation_combles = $request->isolation_combles;
        $pose->isolation_combles_surface = $request->isolation_combles_surface;
        $pose->isolation_combles_accee = $request->isolation_combles_accee;
        $pose->isolation_combles_type = $request->isolation_combles_type;
        $pose->isolation_garage = $request->isolation_garage;
        $pose->isolation_garages_surface = $request->isolation_garages_surface;
        $pose->isolation_caves = $request->isolation_caves;
        $pose->isolation_caves_surface = $request->isolation_caves_surface;
        $pose->cave_voutee = $request->cave_voutee;
        $pose->isolation_voutee_surface = $request->isolation_voutee_surface;
        $pose->commentaires = $request->commentaires;
        $pose->source_isolation = $request->source_isolation;
        $pose->lead_previsite = 1;
        $pose->rdv_jour = $request->rdv_jour;
        $pose->rdv_heure = $request->rdv_heure;

        $pose->save();
        Session::flash('success', 'Client planifié pour une pré-visite');
        return redirect()->back();

    }

    public function displayPrevisite(Request $request){
        if($ville = $request->get('ville')){
            $poses = Pose::where('ville', $ville)->where('lead_previsite', 1)->where('previsite_traite', 0)->get();
        }
        elseif($departement = $request->get('departement')){
            $poses = Pose::where('departement', $departement)->where('lead_previsite', 1)->where('previsite_traite', 0)->get();
        }
        else{
            $poses = Pose::orderBy('id', 'asc')->where('lead_previsite', 1)->where('previsite_traite', 0)->get();
        }
        return view ('crm.previsite', compact('poses'));
    }

    public function savePrevisite(Request $request, $id){

        $pose = Pose::find($id);
        $pose->previsite_traite = 1;
        $pose->save();
        $data = $request->all();
        $pose->save($data);
        Session::flash('success', 'Pré-visite validée');
        return redirect()->back();

    }
    public function displayPrevisiteValide(Request $request){
        if($ville = $request->get('ville')){
            $poses = Pose::where('ville', $ville)->where('previsite_traite', 1)->where('previsite_chantier', 0)->get();
        }
        elseif($departement = $request->get('departement')){
            $poses = Pose::where('departement', $departement)->where('previsite_traite', 1)->where('previsite_chantier', 0)->get();
        }
        else{
            $poses = Pose::orderBy('id', 'asc')->where('previsite_traite', 1)->where('previsite_chantier', 0)->get();
        }
        return view ('crm.previsite-valide', compact('poses'));
    }

    public function savePrevisiteValide(Request $request, $id){

        $pose = Pose::find($id);
        $pose->previsite_chantier = 1;
        $pose->save();
        $data = $request->all();
        $pose->save($data);
        Session::flash('success', 'Client planifié pour intervention');
        return redirect()->back();

    }

    public function displayChantier(Request $request){
        if($ville = $request->get('ville')){
            $poses = Pose::where('ville', $ville)->where('previsite_chantier', 1)->where('chantier_traite', 0)->get();
        }
        elseif($departement = $request->get('departement')){
            $poses = Pose::where('departement', $departement)->where('previsite_chantier', 1)->where('chantier_traite', 0)->get();
        }
        else{
            $poses = Pose::orderBy('id', 'asc')->where('previsite_chantier', 1)->where('chantier_traite', 0)->get();
        }
        return view ('crm.chantier-valide', compact('poses'));
    }
    public function saveChantierValide(Request $request, $id){

        $pose = Pose::find($id);
        $pose->chantier_traite = 1;
        $pose->chantier_pose = 1;
        $pose->save();
        $data = $request->all();
        $pose->save($data);
        Session::flash('success', 'La pose a été validé');
        return redirect()->back();

    }

    public function displayPoseValide(Request $request){
        if($ville = $request->get('ville')){
            $poses = Pose::where('ville', $ville)->where('chantier_pose', 1)->where('pose_traite', 0)->get();
        }
        elseif($departement = $request->get('departement')){
            $poses = Pose::where('departement', $departement)->where('chantier_pose', 1)->where('pose_traite', 0)->get();
        }
        else{
            $poses = Pose::orderBy('id', 'asc')->where('chantier_pose', 1)->where('pose_traite', 0)->get();
        }
        return view ('crm.pose-valide', compact('poses'));
    }





    public function searchVille($ville){
        // $poseVille = Pose::where('ville', $ville)->get();
    }

    public function test(Request $request){

        /*$pose = ClientForm::find($id);*/
        //$pose = $request->civilite;
        $pose = $request->nom;
        echo $pose;
    }
}
