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

        $clientRappel = new ClientRappel();
        $clientRappel->civilite = $request->rappel_civilite;
        $clientRappel->nom = $request->rappel_nom;
        $clientRappel->telephone = $request->rappel_telephone;
        $clientRappel->heure_rappel = $request->rappel_heure_modal;
        $clientRappel->ville = $ville;
        $clientRappel->codePostal = $codePostal;
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
