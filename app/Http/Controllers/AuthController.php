<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{

    public function getRegister(){
        return view('crm.register');
    }
    public function postRegister(RegisterRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $fonction = $request->fonction;
        if($fonction == 'admin'){
            $user->is_admin = 1;
        }
        if($fonction == 'secretaire'){
            $user->is_secretaire = 1;
        }
        if($fonction == 'commercial'){
            $user->is_commercial = 1;
        }
        if($fonction == 'technicien'){
            $user->is_technicien = 1;
        }
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::login($user);
        return redirect('crm/admin/accueil');
    }
    public function getLogin(){
        return view('crm.connexion');
    }
    public function postLogin(LoginRequest $request){
        if(Auth::attempt(['name'=>$request->name, 'password'=>$request->password], $request->remember)){
            return redirect()->intended('crm/admin/accueil');
        }
        else{
            return redirect('crm')->withErrors('Identifiants erronés')->withInput();
        }
    }

    public function logOut(){
        Auth::logout();
        return redirect('crm');
    }
}
