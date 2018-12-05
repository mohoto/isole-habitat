<?php
use Phelium\Component\GeoApiFr;
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

Route::get('departement', function(){
    $GeoApiFr = new GeoApiFr;
    $datas = $GeoApiFr
        ->communes()
        ->fields(array('departement', 'region', 'nom'))
        ->search('codeDepartement', 77);
    //print_r($datas);
    //print_r($datas['datas'][0]);
    echo $ville = $datas['datas'][0]['nom'];
});
Route::get('ville', function(){
    $GeoApiFr = new GeoApiFr;
    $datas = $GeoApiFr
        ->communes()
        ->fields(array('departement', 'codeDepartement', 'region', 'nom'))
        ->search('codePostal', 92220);
    echo $ville = $datas['datas'][0]['nom'];
});

Route::get('/message', array(
    'as' => 'site-web.message',
    'uses' => 'FormController@sendMessage'
));

Route::get('/', array('as' => 'site-web.accueil', function () {
    return view('site-web.accueil-sol');
}));
Route::get('/wizard', array('as' => 'site-web.wizard', function () {
    return view('site-web.wizard');
}));

Route::get('qui-sommes-nous', array('as' => 'site-web.societe', function(){
    return view('site-web.qui-sommes-nous');
}));

Route::get('politique-de-confidentialite', array('as' => 'site-web.policy', function(){
    return view('site-web.politique-de-confidentialité');
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
Route::post('formulaire-eligibilite-sol' , [
    'as' => 'site-web.formulaire-eligibilite-sol',
    'uses' =>'FormSolController@saveForm'
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
            'uses' => 'PoseController@saveRappelWeb'
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
        Route::get('/lead-web/accepter/{id}', [
            'as' => 'crm.lead-web-accepter',
            'uses' => 'PoseController@saveFromWebForm'
        ]);
        Route::get('/appel-telephonique', [
            'as' => 'crm.appel-telephonique',
            'uses' => 'AppelTelephoniqueController@index'
        ]);
        Route::get('/previsite', [
            'as' => 'crm.previsite',
            'uses' => 'PoseController@displayPrevisite'
        ]);
        Route::get('/previsite/accepter/{id}', [
            'as' => 'crm.previsite-accepter',
            'uses' => 'PoseController@savePrevisite'
        ]);
        Route::get('/previsite-valide', [
            'as' => 'crm.previsite-valide',
            'uses' => 'PoseController@displayPrevisiteValide'
        ]);
        Route::get('/previsite-valide/accepter/{id}', [
            'as' => 'crm.previsite-valide-accepter',
            'uses' => 'PoseController@savePrevisiteValide'
        ]);
        Route::get('/chantier-valide', [
            'as' => 'crm.chantier-valide',
            'uses' => 'PoseController@displayChantier'
        ]);
        Route::get('/chantier-valide/accepter/{id}', [
            'as' => 'crm.chantier-valide-accepter',
            'uses' => 'PoseController@saveChantierValide'
        ]);
        Route::get('/pose-valide', [
            'as' => 'crm.pose-valide',
            'uses' => 'PoseController@displayPosevalide'
        ]);
        Route::get('/deconnexion', [
            'as' => 'crm.deconnexion',
            'uses'=>'AuthController@logOut'
        ]);
        Route::get('/events', 'EventController@index');
    });

    Route::group(['middleware' => ['auth', 'admin']], function () {

        Route::get('admin/administration', [
            'as' => 'crm.admin.administration',
            function () {
                return view('crm.admin.administration');
        }]);
    });

});


