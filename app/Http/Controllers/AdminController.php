<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\ImageGallery;
use App\News;
use App\Event;
use App\Blog;
use App\Koferi;
use App\Position;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function loginView(){

        // ako je korisnik ulogovan ne moze otici na login ponovo 
        if(!Auth::guest()){
            return view("admin/pages/home");
        }else{
            return view("admin/pages/login");
        }

    } 

    public function homePage(){

        return view("admin/pages/home");

    }


    public function getAddKofer(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-kofere", compact("allImages"));

    }

    public function storeKofer(Request $request){

        $kofer = new Koferi();

        $alias = str_slug($request->input('kofer_naziv'), '-');
        
        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
        }else{
            $gallery = "";
        }

        $kofer->kategorija                   = $request->input("kategorija");
        $kofer->kofer_naziv                  = $request->input("kofer_naziv");
        $kofer->alias                        = $alias;
        $kofer->kofer_cena                   = $request->input("kofer_cena");
        $kofer->duzina_sirina_visina         = $request->input("duzina_sirina_visina");
        $kofer->unutrasnja_dimenzija         = $request->input("unutrasnja_dimenzija");
        $kofer->litraza                      = $request->input("litraza");
        $kofer->tezina_kofera                = $request->input("tezina_kofera");
        $kofer->max_nosivost                 = $request->input("max_nosivost");
        $kofer->otvaranje                    = $request->input("otvaranje");
        $kofer->zakljucavanje                = $request->input("zakljucavanje");
        $kofer->nacin_kacenja                = $request->input("nacin_kacenja");
        $kofer->za_skije                     = $request->input("za_skije");
        $kofer->boja                         = $request->input("boja");
        $kofer->status                       = $request->input("status");
        $kofer->main_image                   = $request->input("mainImage");
        $kofer->image_gallery                = $gallery;

        $saveKoferi = $kofer->save();

        if($saveKoferi){

            return redirect()->back()->with('success', 'Uspešno ste dodali kofer');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali kofer');

        }


    }


    public function getListKoferi(){

        $koferi = Koferi::get();

        return view("admin/pages/lista-kofera", compact("koferi"));

    }


    public function getEditKofer($id){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        $kofer = Koferi::where("id", $id)->first();

        return view("admin/pages/izmeni-kofer", compact("kofer", "allImages"));

    }


    public function editKofer(Request $request){

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
        }else{
            $gallery = "";
        }


        $updateKofer = Koferi::where("id", $request->input("id"))->update([

            "kategorija"     => $request->input("kategorija"),
            "kofer_naziv"    => $request->input("kofer_naziv"),
            "alias"          => str_slug($request->input('kofer_naziv'), '-'),
            "kofer_cena"     => $request->input("kofer_cena"),
            "duzina_sirina_visina" => $request->input("duzina_sirina_visina"),
            "unutrasnja_dimenzija"  => $request->input("unutrasnja_dimenzija"),
            "litraza"        => $request->input("litraza"),
            "tezina_kofera"  => $request->input("tezina_kofera"),
            "max_nosivost"   => $request->input("max_nosivost"),
            "otvaranje"      => $request->input("otvaranje"),
            "zakljucavanje"  => $request->input("zakljucavanje"),
            "nacin_kacenja"  => $request->input("nacin_kacenja"),
            "za_skije"       => $request->input("za_skije"),
            "boja"           => $request->input("boja"),
            "status"         => $request->input("status"),
            "main_image"     => $request->input("mainImage"),
            "image_gallery"  => $gallery
  
        ]);


        if($updateKofer){

            return redirect()->back()->with('success', 'Uspešno ste izmenili kofer');

        }else{

            return redirect()->back()->with('messageError', 'Niste izmenili kofer');

        }


    }
   






































    public function storeImages(Request $request){
        
        $images = $request->file("images");

        for($i = 0; $i < count($images); $i++){

            $new = $i.time().".".$images[$i]->getClientOriginalExtension();
            $slika = $images[$i]->move(public_path("images_gallery"), $new);

            $gallery = new ImageGallery();
            $gallery->image_name = $new;
            $gallery->save();

        }

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return $allImages;

    }




    public function getAddAdmin(){

        return view("admin/pages/dodaj-administratora");

    }

    public function storeAdmin(Request $request){

        $user = new User();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));

        $storeAdmin = $user->save();

        if($storeAdmin){

            return redirect()->back()->with("success", "Admin je uspesno dodat");

        }else{

            return redirect()->back()->with("Niste dodali admina");

        }

    }

    public function listAdmins(){

        $users = User::get();

        return view("admin/pages/lista-administratora", compact("users"));

    }

    public function deleteAdmin($id){

        $deleteUser = User::where("id", $id)->delete();

        if($deleteUser){

            return redirect()->back()->with("success", "Admin je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Niste izbrisali admina");

        }

    }

}
