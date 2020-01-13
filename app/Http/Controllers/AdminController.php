<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\ImageGallery;
use App\Kofer_category;
use App\Koferi;
use App\Modell;
use App\Rentkofer;
use App\Rentnosac;
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


    public function getAddCategoryKofer(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-kategorije-kofera", compact("allImages"));

    }


    public function storeCategoryKofer(Request $request){

        $categoryKofer = new Kofer_category();

        $last = $categoryKofer->orderBy('position', 'desc')->first();

        if(!$last){
            $pos = 0;
        }else{
            $pos = $last['position'] + 1;
        }

        $alias = str_slug($request->input('category_naziv'), '-');

        $categoryKofer->category_naziv      = $request->input("category_naziv");
        $categoryKofer->alias               = $alias;
        $categoryKofer->category_text       = $request->input("category_text");
        $categoryKofer->status              = $request->input("status");
        $categoryKofer->main_image          = $request->input("mainImage");
        $categoryKofer->position            = $pos;

        $saveCategory = $categoryKofer->save();

        if($saveCategory){

            return redirect()->back()->with('success', 'Uspešno ste dodali kategoriju');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali kategoriju');

        }

    }


    public function getAddKofer(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-kofere", compact("allImages"));

    }

    public function storeKofer(Request $request){

        $kofer = new Koferi();


        if($request->input("kategorija") != ""){

            $alias = str_slug($request->input('kofer_naziv'), '-');
            
            if(!empty($request->input("galleryImages"))){
                $gallery = implode(",", $request->input("galleryImages"));
            }else{
                $gallery = NULL;
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
            
        }else{

            return redirect()->back()->with('messageError', 'Morate odabrati kategoriju');

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


        $lastMainImg = Koferi::where("id", $request->input("id"))->first();

        if($request->input("mainImage") != ""){
            $mainImg = $request->input("mainImage");
        }else{
            $mainImg = $lastMainImg['main_image'];
        }

        if($request->input("galleryImages") != ""){

            if(!empty($request->input("galleryImages"))){
                $gallery = implode(",", $request->input("galleryImages"));
            }else{
                $gallery = NULL;
            }

        }else{
            $gallery = $lastMainImg['image_gallery'];
        }


        if($request->input("kategorija") != ""){

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
                "main_image"     => $mainImg,
                "image_gallery"  => $gallery
      
            ]);
    
    
            if($updateKofer){
    
                return redirect()->back()->with('success', 'Uspešno ste izmenili kofer');
    
            }else{
    
                return redirect()->back()->with('messageError', 'Niste izmenili kofer');
    
            }

        }else{

            return redirect()->back()->with('messageError', 'Morate izbrati kategoriju');

        }

    }



    public function getAddCar(){

        return view("admin/pages/dodaj-auto");

    }


    public function storeCar(Request $request){

        $modell = new Modell();

        if($request->input("marka") != ""){

            $modell->marka      = $request->input("marka");
            $modell->model      = $request->input("model");
            $modell->vrsta_nosaca = $request->input("vrsta_nosaca");
            $modell->kit        = $request->input("kit");
            $modell->sipka      = $request->input("sipka");

            $saveMode = $modell->save();

            if($saveMode){
        
                return redirect()->back()->with('success', 'Uspešno ste dodali model');

            }else{

                return redirect()->back()->with('messageError', 'Niste dodali model');

            }

        }else{

            return redirect()->back()->with('messageError', 'Morate odabrati Marku automobila'); 

        }

    }


    public function listCars(){

        $data = Modell::get();

        return view("admin/pages/lista-automobila", compact("data"));

    }



    public function deleteCar($id){

        $deleteCar = Modell::where("id", $id)->delete();

        if($deleteCar){
        
            return redirect()->back()->with('success', 'Uspešno ste obrisali model');

        }else{

            return redirect()->back()->with('messageError', 'Niste obrisali model');

        }

    }
   

    public function getAddKoferi(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-rent-kofere", compact("allImages"));

    }


    public function storeKoferi(Request $request){

        $rentKof = new Rentkofer();

        $rentKof->model_kofera    = $request->input("model_kofera");
        $rentKof->dimenzije       = $request->input("dimenzije");
        $rentKof->zapremina       = $request->input("zapremina");
        $rentKof->kofer0103       = $request->input("kofer0103");
        $rentKof->kofer0407       = $request->input("kofer0407");
        $rentKof->kofer0812       = $request->input("kofer0812");
        $rentKof->kofer1320       = $request->input("kofer1320");
        $rentKof->komplet0103     = $request->input("komplet0103");
        $rentKof->komplet0407     = $request->input("komplet0407");
        $rentKof->komplet0812     = $request->input("komplet0812");
        $rentKof->komplet1320     = $request->input("komplet1320");
        $rentKof->main_image      = $request->input("mainImage");

        $saveRentKof = $rentKof->save();


        if($saveRentKof){
        
            return redirect()->back()->with('success', 'Uspešno dodali kofer na rentiranje');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali kofer');

        }
        

    }


    public function listRentKofer(){

        $data = Rentkofer::get();

        return view("admin/pages/lista-rent-kofer", compact("data"));

    }


    public function deleteRentKofer($id){

        $deleteRentKofer = Rentkofer::where("id", $id)->delete();

        if($deleteRentKofer){
        
            return redirect()->back()->with('success', 'Uspešno ste obrisali kofer sa rentiranja');

        }else{

            return redirect()->back()->with('messageError', 'Niste obrisali kofer');

        }

    }


    public function getAddNosac(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-rent-nosaci", compact("allImages"));

    }


    public function storeNosac(Request $request){

        $rentNos = new Rentnosac();

        $rentNos->model_nosaca    = $request->input("model_nosaca");
        $rentNos->nosac0103       = $request->input("nosac0103");
        $rentNos->nosac0407       = $request->input("nosac0407");
        $rentNos->nosac0812       = $request->input("nosac0812");
        $rentNos->nosac1320       = $request->input("nosac1320");

        $saveRentNos = $rentNos->save();


        if($saveRentNos){
        
            return redirect()->back()->with('success', 'Uspešno dodali nosač na rentiranje');

        }else{

            return redirect()->back()->with('messageError', 'Niste dodali nosač');

        }
        

    }


    public function listNosaca(){

        $data = Rentnosac::get();

        return view("admin/pages/lista-rent-nosaca", compact("data"));

    }

    public function deleteNosac($id){

        $deleteRentNosac = Rentnosac::where("id", $id)->delete();

        if($deleteRentNosac){
        
            return redirect()->back()->with('success', 'Uspešno ste obrisali nosač sa rentiranja');

        }else{

            return redirect()->back()->with('messageError', 'Niste obrisali nosač');

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
