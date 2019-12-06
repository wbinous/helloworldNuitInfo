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
    return view('welcome');
});

Route::get('/forum', 'ForumController@listeSujets');
Route::get('/voirSujet/{id}', 'ForumController@afficherSujet');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/inscription', 'ConnexionController@inscrireFormulaire');
Route::post('/inscription', 'ConnexionController@inscrireUtilisateur');

Route::post('/deconnexion', 'ConnexionController@deconnexion');

Route::view('/article/alimentaire','/article/alimentaire');
Route::view('/article/associations','/article/associations');
Route::view('/article/finance','/article/aidefinance');
Route::view('/article/logement','/article/logement');
Route::view('/article/transport','/article/transport');
Route::view('/article/loisirs','/article/loisirs');
Route::view('/article/sante','/article/sante');
