<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\ClientRappel;

class RappelWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientRappels = ClientRappel::orderBy('id', 'desc')->get();
        return view('crm.lead-rappel-web', compact('clientRappels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        $ip= \Request::ip();
        $data = \Location::get($ip);
        $ville = $data->cityName;
        $codePostal = $data->zipCode;
        $departement = substr($codePostal, 0, 2);

        $telephone = $request->rappel_telephone;
        $telephoneSubs = substr($telephone, 0, 2);
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

        $clientRappel = new ClientRappel();
        $clientRappel->civilite = $request->rappel_civilite;
        $clientRappel->nom = $request->rappel_nom;
        $clientRappel->telephone_fixe = $telephone_fixe;
        $clientRappel->telephone_mobile = $telephone_mobile;
        $clientRappel->heure_rappel = $request->rappel_heure_modal;
        $clientRappel->ville = $ville;
        $clientRappel->codePostal = $codePostal;
        $clientRappel->departement = $departement;
        $clientRappel->save();

        return response()->json([
            'heureRappel'=> $clientRappel->heure_rappel,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
