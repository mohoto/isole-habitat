<?php

namespace App\Http\Controllers;

use App\ClientForm;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Vicopo\Vicopo;
use Nexmo\Laravel\Facade\Nexmo;
Use Illuminate\Contracts\Session\Session;
use Phelium\Component\GeoApiFr;
class FormSolController extends Controller
{

    public function storeRappel()
    {
        return view('site-web.formulaire-tel');

    }

    public function getLocation(){
        $ip= '78.227.102.12';
        $data = \Location::get($ip);
        echo $data -> cityName;

    }
    public function saveForm(Request $request){

        $habitation =$request->type_habitation;
        $chauffage =$request->type_chauffage;
        $surface = $request->surface;
        $codePostal = $request->code_postal;
        $departement = substr($codePostal, 0, 2);
        $telephone = $request->telephone;
        $telephoneSubs = substr($request->telephone, 0, 2);
        if($telephoneSubs == 06){
            $telephone_mobile= $telephone;
            $telephone_fixe = '';
        }
        elseif($telephoneSubs == 07){
            $telephone_mobile = $telephone;
            $telephone_fixe = '';
        }
        else{
            $telephone_fixe = $telephone;
            $telephone_mobile = '';
        }


        /*Formulaire Wizard version2*/
        if($habitation == 'maison'){
            if($chauffage == 'electrique'){
                $situation = 'classique';
            }else {
                $situation = 'eligible';
            }
        }
        else{
            $situation = 'classique';
        }



        /*****************************/
        /*$data = Vicopo::http($request->code_postal);
        $clientForm->ville = $data[0]->city;*/

        $GeoApiFr = new GeoApiFr;
        $datas = $GeoApiFr
            ->communes()
            ->fields(array('departement', 'codeDepartement', 'region', 'nom'))
            ->search('codePostal', $codePostal);
        $ville = $datas['datas'][0]['nom'];


        $clientForm = new ClientForm();
        $clientForm ->type_habitation = $habitation;
        $clientForm->civilite = $request->civilite;
        $clientForm->nom = $request->nom;
        $clientForm->telephone_fixe = $telephone_fixe;
        $clientForm->telephone_mobile = $telephone_mobile;
        $clientForm->codePostal = $request->code_postal;
        $clientForm->departement = $departement;
        $clientForm->ville  = $ville;
        $clientForm->chauffage = $request->type_chauffage;
        $clientForm->type_bail = $request->type_bail;
        $clientForm->isolation_garage = $request->isolation_garage;
        $clientForm->isolation_caves = $request->isolation_caves;
        $clientForm->surface_maison = $request->surface;
        $clientForm->situation = $situation;
        $clientForm->save();

        /*$clientForm = ClientForm::create([
        'type_habitation' => $habitation,
        'civilite' => $request->civilite,
        'nom' => $request->nom,
        '$telephone_fixe' => $telephone_fixe,
        'telephone_mobile' => $telephone_mobile,
        'codePostal' => $request->code_postal,
        'departement' => $departement,
        'ville'  => 'Bagneux',
        'chauffage' => $request->type_chauffage,
        'type_bail' => $request->type_bail,
        'isolation_garage' => $request->isolation_garage,
        'isolation_caves' => $request->isolation_caves,
        'surface_maison' => $request->surface,
        'situation' => $situation,
            ]);*/

        /*if($situation == 'eligible'){
            Nexmo::message()->send([
                'to'   => '+33762071832',
                'from' => '+33762071836',
                'text' => 'Nouvelle demande d\'isolation : ' .
                    ucfirst($situation) . " - " .
                    ucfirst($request->civilite) . ' ' . strtoupper($request->nom) . " - " .
                    $request->surface . " - " .
                    $request->rue . " - " .
                    $request->code_postal . ' ' . strtoupper($ville)  . " - " .
                    $telephone_fixe . " - " .
                    $telephone_mobile . "."
            ]);
        }*/
        return response()->json([
            'id' => $clientForm->id,
            'situation' => $situation,
            'habitation' => $habitation,
            'chauffage' => $chauffage,
        ]);
        /*if($clientForm){
            return view('site-web.isolation-combles');
        }else{
            return view('site-web.qui-sommes-nous');
        }*/



    }

    public function saveFormWebRappel(Request $request, $id){
        $clientLead = ClientForm::find($id);
        $heure_rappel = $request->heure_rappel;
        $clientLead->heure_rappel = $heure_rappel;
        $clientLead->save();
        return response()->json([
            'heureRappel' => $heure_rappel,
        ]);

    }

    public function displayForm(Request $request)
    {
        if($ville = $request->get('ville')){
            $clientforms = ClientForm::orderby('id', 'asc')->where('ville', $ville)->get();
        }
        elseif($departement = $request->get('departement')){
            $clientforms = ClientForm::orderby('id', 'asc')->where('departement', $departement)->get();
        }
        elseif($heure_rappel = $request->get('heure_rappel')){
            $clientforms = ClientForm::where('heure_rappel', $heure_rappel)->get();
        }
        else{
            $clientforms = ClientForm::orderby('id', 'asc')->get();
        }
        return view('crm.lead-web', compact('clientforms'));
    }

    public function cancelFormWeb($id){
        $clientLead = ClientForm::find($id);
        $clientLead->lead_abondonne = 1;
        $clientLead->save();
        return redirect()->back();
    }



    public function essai (){
        $str = '16 500';
        $str = str_replace(" ", "",$str);
        echo intval($str);

        //$departement = substr(92220, 0, 2);
        //echo $departement;
    }
    public function test (){
        return view('site-web.test');
    }

    public function testRevenu(Request $request){
        $testRevenu = $request->revenus_reference;
        $codePostalTest = $request->code_postal;
        /*if($testRevenu<= 14308){
            $situation = 'grand-précaire';
        }elseif($testRevenu>14308 && $testRevenu<= 18342){
            $situation = 'précaire';
        }else{
            $situation = 'classique';
        }*/

        /*$telephone = $request->telephone;
        $telephoneSubs = substr($telephone, 0, 2);
        if($telephoneSubs == 06){
            echo 'est un mobile';
        }
        elseif($telephoneSubs == 07){
            echo 'est un mobile';

        }
        else{
            echo 'est un fixe';

        }*/
        //return view('site-web.test-revenu', ['telephone' => $telephoneSubs, 'telephone_mobile' => $telephone_mobile]);
    }



}

