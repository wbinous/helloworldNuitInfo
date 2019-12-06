<?php

namespace App\Http\Controllers;

use App\p1_utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ForumController extends Controller
{
    public function listeSujets()
    {
        $sujets = DB::table('p1_forum')
            ->join('p1_utilisateur', 'p1_forum.auteur', '=', 'p1_utilisateur.id')
            ->join('p1_forummessage', 'p1_forum.id', '=', 'p1_forummessage.forumId')
            ->get();
        return view('forum/liste', ['data' => $sujets]);
    }

    public function afficherSujet($id){
        // recuperer les posts du sujet
        $sujet = DB::table('p1_forummessage')
            ->join('p1_forummessage', 'p1_forum.id', '=', 'p1_forummessage.forumId')
            ->where('p1_forummessage.forumId', $id)->get();
        // afficher
        return view('forum/sujet');
    }

    public function creerSujet(){
        return view('forum/formulaireSujet');
    }

    public function repondreSujet() {
        return view('forum/validerReponse');
    }
}
