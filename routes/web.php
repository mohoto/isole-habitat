<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', array('as' => 'site-web.accueil', function () {
    return view('site-web.accueil');
}));

Route::get('qui-sommes-nous', array('as' => 'site-web.societe', function(){
    return view('site-web.qui-sommes-nous');
}));

Route::get('isolation-des-combles', array('as' =>'site-web.isolation-combles', function(){
    return view('site-web.isolation-combles');
}));

Route::get('isolation-des-murs', array('as' => 'site-web.isolation-murs', function(){
    return view('site-web.isolation-murs');
}));

Route::get('isolation-des-sols', array('as' => 'site-web.isolation-sols', function(){
    return view('site-web.isolation-sols');
}));
Route::get('formulaire-tel', 'FormController@storeRappel');

Route::post('formulaire-rappel', [
        'as' => 'site-web.formulaire-rappel',
        'uses' =>'FormController@saveRappel'
]);
