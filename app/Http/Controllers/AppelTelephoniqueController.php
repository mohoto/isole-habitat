<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppelTelephoniqueController extends Controller
{
    public function index(){
        return view('crm.lead-appel-telephonique');
    }
}
