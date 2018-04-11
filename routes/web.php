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
Route::get('laravel-version', function()
{
    $laravel = app();
    return "Your Laravel version is ".$laravel::VERSION;
});

Route::get('/message', array(
    'as' => 'site-web.message',
    'uses' => 'FormController@sendMessage'
));

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
Route::group(['prefix' =>'crm'], function() {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/' , [
            'as' =>'login',
            'uses' =>'AuthController@getLogin'
        ]);
        Route::post('/' , 'AuthController@postLogin');

        Route::get('inscription', 'AuthController@getRegister');
        Route::post('inscription', 'AuthController@postRegister');
    });

    Route::group(['middleware' => 'auth'], function () {

        Route::get('accueil', [
            'as' => 'crm.accueil',
            function () {
                return view('crm.accueil');
        }]);
        Route::get('/lead-rappel-web', [
            'as' => 'crm.lead-rappel-web',
            'uses' => 'RappelWebController@index'
        ]);
        Route::get('/lead-rappel-web/accepter/{id}', [
            'as' => 'crm.lead-rappel-web-accepter',
            'uses' => 'PreVisiteController@saveRappelWeb'
        ]);
        Route::get('/lead-rappel-web/supprimer/{id}', [
            'as' => 'crm.lead-rappel-web.supprimer',
            'uses' => 'RappelWebController@cancelRappelWeb'
        ]);
        Route::get('/lead-web', [
            'as' => 'crm.lead-web',
            'uses' => 'FormController@displayForm'
        ]);
        Route::get('/lead-web/supprimer/{id}', [
            'as' => 'crm.lead-web.supprimer',
            'uses' => 'FormController@cancelFormWeb'
        ]);
        Route::get('/lead-demarchage', [
            'as' => 'crm.lead-demarchage',
            'uses' => 'DemarchageController@index'
        ]);
        Route::get('/lead-previsite', [
            'as' => 'crm.lead-previsite',
            'uses' => 'PreVisiteController@displayVisite'
        ]);
        Route::get('/lead-web/accepter/{id}', [
            'as' => 'crm.lead-web-accepter',
            'uses' => 'PreVisiteController@saveFromWebForm'
        ]);
        Route::get('/deconnexion', [
            'as' => 'crm.deconnexion',
            'uses'=>'AuthController@logOut'
        ]);
    });

    Route::group(['middleware' => ['auth', 'admin']], function () {

        Route::get('admin/administration', [
            'as' => 'crm.admin.administration',
            function () {
                return view('crm.admin.administration');
        }]);
        Route::get('admin/chantier-validee', [
            'as' => 'crm.admin.chantier-validee',
            function () {
                return view('crm.admin.achantier-validee');
            }]);
        Route::get('admin/pose-validee', [
            'as' => 'crm.admin.pose-validee',
            function () {
                return view('crm.admin.pose-validee');
            }]);
    });

});


