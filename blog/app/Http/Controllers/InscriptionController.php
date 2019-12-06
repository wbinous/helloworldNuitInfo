<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function afficherFormulaire()
    {
      return view('inscription');
    }

    public function traiterFormulaire()
    {
      request()->validate([
        'nomUtilisateur' => ['required'],
        'universite' => ['required'],
        'nom' => ['required'],
        'prenom' => ['required'],
        'dateNaissance' => ['required','date'],
        'mail' => ['required','email'],
        'password' => ['required','confirmed'],
        'password_confirmation' => ['required'],
        'description' => ['required']
      ]);

      $utilisateur = p1_utilisateur::create([
        'nomUtilisateur' => request('nomUtilisateur'),
        'universite' => request('universite'),
        'nom' => request('nom'),
        'prenom' => request('prenom'),
        'dateNaissance' => request('dateNaissance'),
        'mail' => request('mail'),
        'password' => bcrypt(request('password')),
        'description' => request('description')
      ]);

      return redirect ('welcome');
    }
}
