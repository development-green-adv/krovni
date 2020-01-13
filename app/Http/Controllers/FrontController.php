<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Koferi;

class FrontController extends Controller
{
    
    public function getKoferiPage($category=null){

        if($category == ""){

            $data = Koferi::where("status", 1)->get();

            return view("krovni-koferi", compact("data"));

        }else{

            $data = Koferi::where("kategorija", $category)->where("status", 1)->get();

            return view("krovni-koferi", compact("data"));

        }

    }


    public function getSingleKofer($category, $kofer){

        $kofer = Koferi::where("alias", $kofer)->first();

        return view("jedan-proizvod", compact("category", "kofer"));

    }




    

}
