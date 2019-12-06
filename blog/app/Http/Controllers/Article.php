<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Article extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function afficherArticle($id){ 
        switch ($id) {
            case 0:
                return view('article.alimentaire');
                break;
            case 1:
                return view('article.associations');
                break;
            case 2:
                return view('article.logement');
                break;
            case 3:
                return view('article.transport');
                break;
        }
    }
}
