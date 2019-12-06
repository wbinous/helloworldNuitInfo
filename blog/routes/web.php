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

<<<<<<< HEAD
Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/inscription', 'ConnexionController@inscrireFormulaire');
Route::post('/inscription', 'ConnexionController@inscrireUtilisateur');
=======
Route::get('/inscription', 'InscriptionController@afficherFormulaire');
Route::post('/inscription', 'InscriptionController@traiterFormulaire');


Route::view('/article/alimentaire','/article/alimentaire');
Route::view('/article/associations','/article/associations');
Route::view('/article/finance','/article/aidefinance');
Route::view('/article/logement','/article/logement');
Route::view('/article/transport','/article/transport');
Route::view('/article/loisirs','/article/loisirs');
Route::view('/article/sante','/article/sante');
>>>>>>> 0d833ccaaba39263e4b9c26f880ab372eeae06c9
