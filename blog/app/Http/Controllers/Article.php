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
                //return view('article');
                echo "nice";
                break;
            case 1:
                return view('article');
                break;
            case 2:
                return view('article');
                break;
        }
    }
}
