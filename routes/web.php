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
//Route::get('formulaire-tel', 'FormController@storeRappel');

Route::post('rappel-web', [
        'as' => 'site-web.rappel-web',
        'uses' =>'RappelWebController@store'
]);


Route::get('get-location-from-ip',function(){
    $ip= \Request::ip();
    //$ip= '78.227.102.12';
    $data = \Location::get($ip);
    dd($data);
});

/*Route::get('get-location-from-ip', 'FormController@getLocation');

Route::get('get-ville', function(){
    $data = Vicopo::http(92220);
    //echo $data[0]->city;
    print_r($data);

});*/

Route::post('formulaire-eligibilite' , [
    'as' => 'site-web.formulaire-eligibilite',
    'uses' =>'FormController@saveForm'
]);

Route::post('formulaire-eligibilite-rappel/{id}' , [
    'as' => 'site-web.formulaire-eligibilite-rappel',
    'uses' =>'FormController@saveFormWebRappel'
]);

//Route::get('essai', 'FormController@essai');
//Route::get('test', 'FormController@test');
//Route::post('test-revenu', 'FormController@testRevenu');

/*crm routes*/
Route::group(['prefix' =>'crm'], function(){
    Route::get('/', [
        'as' => 'crm.accueil',
        function () {
        return view('crm.accueil');
    }]);

    Route::get('/lead-rappel-web', [
        'as' => 'crm.lead-rappel-web',
        'uses' => 'RappelWebController@index'
    ]);
    Route::get('/lead-web', [
        'as' => 'crm.lead-web',
        'uses' => 'FormController@displayForm'
    ]);
    Route::get('/lead-demarchage', [
        'as' => 'crm.lead-demarchage',
        'uses' => 'ClientDemarchageController@index'
    ]);
    Route::get('/lead-previsite', [
        'as' => 'crm.lead-previsite',
        'uses' => 'PreVisiteController@displayVisite'
    ]);
    Route::get('/lead-previsite/recherche-ville/{ville}', [
        'as' => 'crm.search-ville',
        'uses' => 'PreVisiteController@searchVille'
    ]);


    Route::post('/lead-web/accepter', [
        'as' => 'crm.previsite-accepter',
        'uses' => 'PreVisiteController@saveFromWebForm'
    ]);
});
