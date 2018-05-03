<?php

namespace App\Http\Controllers;

use App\ClientForm;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Vicopo\Vicopo;
use Nexmo\Laravel\Facade\Nexmo;
Use Illuminate\Contracts\Session\Session;
class FormController extends Controller
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

        $chauffage =$request->type_chauffage;
        $nbrFoyer = $request->nombre_personne;
        $departement = substr($request->code_postal, 0, 2);
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
        $revenu = $request->revenus_reference;
        //$revenu = str_replace(" ", "", $revenu);
        //$revenu = intval($revenu);

        if($chauffage == 'Electrique'){
            $situation = 'classique';
        }else{
            /*if ($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)){
                switch ($nbrFoyer){
                    case 1:
                        if($revenu<= 19803){
                            $situation = 'grand-précaire';
                        }elseif($revenu>19803 && $revenu<= 24107){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 2:
                        if($revenu<= 29066){
                            $situation = 'grand-précaire';
                        }elseif($revenu>29066 && $revenu<= 35382){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 3:
                        if($revenu<= 34906){
                            $situation = 'grand-précaire';
                        }elseif($revenu>34906 && $revenu<= 42495){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 4:
                        if($revenu<= 40758){
                            $situation = 'grand-précaire';
                        }elseif($revenu>40758 && $revenu<= 49620){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 5:
                        if($revenu<= 46630){
                            $situation = 'grand-précaire';
                        }elseif($revenu>46630 && $revenu<= 56765){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 6:
                        if($revenu<= 52490){
                            $situation = 'grand-précaire';
                        }elseif($revenu>52490 && $revenu<=63901){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 7:
                        if($revenu<= 58350){
                            $situation = 'grand-précaire';
                        }elseif($revenu>58350 && $revenu<=71037){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 8:
                        if($revenu<= 64210){
                            $situation = 'grand-précaire';
                        }elseif($revenu>64210 && $revenu<= 78173){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                    case 9:
                        if($revenu<= 70070){
                            $situation = 'grand-précaire';
                        }elseif($revenu>19803 && $revenu<= 85309){
                            $situation = 'précaire';
                        }else{
                            $situation = 'classique';
                        }
                        break;

                }
            }*/
                switch ($nbrFoyer){
                    case 1:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu <= 19803){
                                $situation = 'grand-précaire';
                            }elseif(($revenu > 19803) && ($revenu <= 24107)){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if ($revenu <= 14308) {
                                $situation = 'grand-précaire';
                            } elseif (($revenu > 14308) && ($revenu <= 18342)) {
                                $situation = 'précaire';
                            } else {
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 2:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 29066){
                                $situation = 'grand-précaire';
                            }elseif(($revenu>29066) && ($revenu<= 35382)){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 20925){
                                $situation = 'grand-précaire';
                            }elseif($revenu>20925 && $revenu<= 26826){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 3:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 34906){
                                $situation = 'grand-précaire';
                            }elseif($revenu>34906 && $revenu<= 42495){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 25166){
                                $situation = 'grand-précaire';
                            }elseif($revenu>25166 && $revenu<= 32260){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }

                        break;

                    case 4:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 40758){
                                $situation = 'grand-précaire';
                            }elseif($revenu>40758 && $revenu<= 49620){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 29400){
                                $situation = 'grand-précaire';
                            }elseif($revenu>29400 && $revenu<= 37690){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 5:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 46630){
                                $situation = 'grand-précaire';
                            }elseif($revenu>46630 && $revenu<= 56765){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 33652){
                                $situation = 'grand-précaire';
                            }elseif($revenu>33652 && $revenu<= 43141){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 6:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 52490){
                                $situation = 'grand-précaire';
                            }elseif($revenu>52490 && $revenu<=63901){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 37893){
                                $situation = 'grand-précaire';
                            }elseif($revenu>37893 && $revenu<=48575){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 7:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 58350){
                                $situation = 'grand-précaire';
                            }elseif($revenu>58350 && $revenu<=71037){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }

                        }else{
                            if($revenu<= 42134){
                                $situation = 'grand-précaire';
                            }elseif($revenu>42134 && $revenu<=54009){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 8:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 64210){
                                $situation = 'grand-précaire';
                            }elseif($revenu>64210 && $revenu<= 78173){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 46375){
                                $situation = 'grand-précaire';
                            }elseif($revenu>46375 && $revenu<= 59443){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }
                        break;

                    case 9:
                        if($departement == (77 || 78 ||91 || 91 || 93 || 94 || 95)) {
                            if($revenu<= 70070){
                                $situation = 'grand-précaire';
                            }elseif($revenu>19803 && $revenu<= 85309){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }
                        }else{
                            if($revenu<= 50616){
                                $situation = 'grand-précaire';
                            }elseif($revenu>50616 && $revenu<= 64877){
                                $situation = 'précaire';
                            }else{
                                $situation = 'classique';
                            }

                        }
                        break;
                }
            }

        /*else{
            if ($departement == 91) {
                if (($nbrFoyer == 1 && $revenu<= 19803) || ($nbrFoyer == 2 && $revenu<= 29066) || ($nbrFoyer == 3 && $revenu<=34906) || ($nbrFoyer == 4 && $revenu<=40758) || ($nbrFoyer == 5 && $revenu<=46630) || ($nbrFoyer == 6 && $revenu<=52490) || ($nbrFoyer == 7 && $revenu<=58350) || ($nbrFoyer == 8 && $revenu<=64210) || ($nbrFoyer == 9 && $revenu<=70070)) {

                    $situation = 'grand-précaire';


                }elseif (($nbrFoyer == 1 && (($revenu>19803 )&&($revenu<= 24107))) || ($nbrFoyer == 2 && (($revenu>29066 )($revenu <= 35382)) || ($nbrFoyer == 3 && (($revenu >29066 && $revenu <=42495)) || ($nbrFoyer == 4 && $revenu <= 49620) || ($nbrFoyer == 5 && $revenu <= 56765) || ($nbrFoyer == 6 && $revenu <= 63901) || ($nbrFoyer == 7 && $revenu <= 718173) || ($nbrFoyer == 8 && $revenu <= 85309) || ($nbrFoyer == 9 && $revenu <= 92445)){

                    $situation = 'précaire';

                }elseif (($nbrFoyer == 1 && $revenu <= 19803) || ($nbrFoyer == 2 && $revenu <= 29066) || ($nbrFoyer == 3 && $revenu <= 34906) || ($nbrFoyer == 4 && $revenu <= 40758) || ($nbrFoyer == 5 && $revenu <= 46630) || ($nbrFoyer == 6 && $revenu <= 52490) || ($nbrFoyer == 7 && $revenu <= 58350) || ($nbrFoyer == 8 && $revenu <= 64210) || ($nbrFoyer == 9 && $revenu <= 70070)){

                    $situation = 'classique';
                }
            }else{
                if (($nbrFoyer == 1 && $revenu <= 14308) || ($nbrFoyer == 2 && $revenu <= 20925) || ($nbrFoyer == 3 && $revenu <= 25166) || ($nbrFoyer == 4 && $revenu <= 29400) || ($nbrFoyer == 5 && $revenu <= 33652) || ($nbrFoyer == 6 && $revenu <= 37893) || ($nbrFoyer == 7 && $revenu <= 42134) || ($nbrFoyer == 8 && $revenu <= 46375) || ($nbrFoyer == 9 && $revenu <= 50616)) {

                    $situation = 'grand précaire';

                }elseif (($nbrFoyer == 1 && $revenu <= 18342) || ($nbrFoyer == 2 && $revenu <= 26826) || ($nbrFoyer == 3 && $revenu <= 32260) || ($nbrFoyer == 4 && $revenu <= 37690) || ($nbrFoyer == 5 && $revenu <= 43141) || ($nbrFoyer == 6 && $revenu <= 48575) || ($nbrFoyer == 7 && $revenu <= 54009) || ($nbrFoyer == 8 && $revenu <= 59443) || ($nbrFoyer == 9 && $revenu <= 64877)){

                    $situation = 'précaire';

                }else{

                    $situation = 'classique';
                }
            }
        }*/

        $clientForm = new ClientForm();
        $clientForm->civilite = $request->civilite;
        $clientForm->nom = $request->nom;
        $clientForm->telephone_fixe = $telephone_fixe;
        $clientForm->telephone_mobile = $telephone_mobile;
        $clientForm->codePostal = $request->code_postal;
        $clientForm->departement = $departement;
        $clientForm->rue = $request->rue;
        $clientForm->revenu_fiscal = $revenu;
        $clientForm->nombre_personne = $request->nombre_personne;
        $clientForm->type_bail = $request->type_bail;
        $clientForm->chauffage = $request->type_chauffage;
        $clientForm->surface_maison = $request->type_surface;
        $clientForm->isolation_combles = $request->isolation_combles;
        $clientForm->isolation_garage = $request->isolation_garage;
        $clientForm->isolation_caves = $request->isolation_caves;

        $data = Vicopo::http($request->code_postal);
        $clientForm->ville = $data[0]->city;

        $clientForm->situation = $situation;

        $clientForm->save();
        if($situation == 'grand-précaire'){
            Nexmo::message()->send([
            'to'   => '+33762071832',
            'from' => '+33762071836',
            'text' => 'Nouvelle demande d\'éligibilité : ' .
                       ucfirst($situation) . " - " .
                       ucfirst($request->civilite) . ' ' . strtoupper($request->nom) . " - " .
                       $request->rue . " - " .
                       $request->code_postal . ' ' . strtoupper($request->ville)  . " - " .
                       $telephone_fixe . " - " .
                       $telephone_mobile . "."
            ]);
        }
        return response()->json([
            'id' => $clientForm->id,
            'situation' => $clientForm->situation,
        ]);

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
        $telephone = $request->telephone;
        $telephoneSubs = substr($telephone, 0, 2);
        if($telephoneSubs == 06){
            echo 'est un mobile';
        }
        elseif($telephoneSubs == 07){
            echo 'est un mobile';

        }
        else{
            echo 'est un fixe';

        }
        //return view('site-web.test-revenu', ['telephone' => $telephoneSubs, 'telephone_mobile' => $telephone_mobile]);
    }


}
