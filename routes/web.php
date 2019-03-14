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

Route::get('/', function () {
    return view('index');
});

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/utilisateurs', 'UtilisateursController@liste');

Route::get('/randonnees', 'RandonneesController@liste');
Route::get('/creer-randonnee', 'RandonneesController@formulaire');
Route::post('/creer-randonnee', 'RandonneesController@traitement');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function () {
    Route::get('/mon-compte', 'CompteController@accueil');
    Route::get('/deconnexion', 'CompteController@deconnexion');
    Route::post('/modification-mot-de-passe', 'CompteController@modificationMotDePasse');

    Route::post('/messages', 'MessagesController@nouveau');

    Route::post('/{nom}/suivis', 'SuivisController@nouveau');
    Route::delete('/{nom}/suivis', 'SuivisController@enlever');
});

Route::get('/{nom}', 'UtilisateursController@voir');
