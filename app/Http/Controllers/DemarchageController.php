<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemarchageController extends Controller
{
    public function index(){
        return view('crm/lead-demarchage');
    }
}
