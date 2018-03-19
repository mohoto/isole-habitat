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
        $user->email = 'babi@gmail.com';
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->is_secretaire = 1;
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
