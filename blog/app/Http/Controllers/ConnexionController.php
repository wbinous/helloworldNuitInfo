<?php

namespace App\Http\Controllers;

use App\p1_utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion/connexion');
    }

    public function traitement(Request $request)
    {
        request()->validate([
            'nomutilisateur' => ['required'],
            //'nom' => ['required'],
            //'prenom' => ['required'],
            'password' => ['required'],
            /*'dateNaissance' =>
            'universite' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email'],*/
        ]);

        // À faire : vérification que l'email et le mot de passe sont corrects.
        $user = DB::table('p1_utilisateur')->where('nomutilisateur', request()->input('nomutilisateur'))->get();
        if (Hash::check(request()->input('nomutilisateur'), $user[0]->password)){
            echo "connecté";
            die;
            $request->session()->put('idUtilisateur', $user[0]->id);
            $request->session()->put('role', $user[0]->role);
            return view('connexion/connexion');
        }

        echo "pas connecté";
    }

    public function deconnexion(Request $request){
        $request->session()->forget('idUtilisateur');
        $request->session()->forget('role');
        $request->session()->flush();
    }

    public function inscrireFormulaire() {
        return view('connexion/inscription');
    }

    public function inscrireUtilisateur(Request $request) {
        // valider...

        request()->validate([
            'nomutilisateur' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'password' => ['required'],
            'dateNaissance' => ['required'],
            'universite' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email'],
        ]);

        $id = DB::table('p1_utilisateur')->insertGetId([
            'nomutilisateur' => request()->input('nomutilisateur'),
            'nom' => request()->input('nom'),
            'prenom' => request()->input('prenom'),
            'password' => request()->input('password'),
            'dateNaissance' => request()->input('dateNaissance'),
            'universite' => request()->input('universite'),
            'description' => request()->input('description'),
            'mail' => request()->input('email'),
            'role' => 1,
        ]);

        if(!empty($id)) {
            echo "yes!";
        }
    }
}
