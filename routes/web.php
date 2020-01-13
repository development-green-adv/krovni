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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
});

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/krovni-koferi', function () {
    return view('krovni-koferi');
});*/

Route::get("krovni-koferi/{category?}", "FrontController@getKoferiPage");

Route::get('/krovni-nosaci', function () {
    return view('krovni-nosaci');
});

/*Route::get('/jedan-proizvod', function () {
    return view('jedan-proizvod');
});*/

Route::get("/krovni-koferi/{category}/{kofer}", "FrontController@getSingleKofer");

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/galerija', function () {
    return view('galerija');
});


// rute za admin deo
Route::get("/admin/login", "AdminController@loginView")->name("admin.login");
Route::get("/admin/home", "AdminController@homePage")->middleware("auth");



// rute za proizvode
Route::get("/admin/add-products", "AdminController@getAddProducts")->middleware("auth");


// rute za admine
Route::get("/admin/dodaj-administratora", "AdminController@getAddAdmin")->middleware("auth");
Route::post("/admin/dodaj-administratora", "AdminController@storeAdmin")->middleware("auth");
Route::get("/admin/lista-administratora", "AdminController@listAdmins")->middleware("auth");
Route::get("/admin/obrisi-administratora/{id}", "AdminController@deleteAdmin")->middleware("auth");


// rute za kofere
Route::get("/admin/dodaj-kategorije-kofera", "AdminController@getAddCategoryKofer")->middleware("auth");;
Route::post("/admin/dodaj-kategorije-kofera", "AdminController@storeCategoryKofer")->middleware("auth");;
Route::get("/admin/dodaj-kofere", "AdminController@getAddKofer")->middleware("auth");
Route::post("/admin/dodaj-kofere", "AdminController@storeKofer")->middleware("auth");
Route::get("/admin/lista-kofera", "AdminController@getListKoferi")->middleware("auth");
Route::get("/admin/izmeni-kofer/{id}", "AdminController@getEditKofer")->middleware("auth");
Route::post("/admin/izmeni-kofer", "AdminController@editKofer")->middleware("auth");


// rute za rent kofere
Route::get("/admin/dodaj-rent-kofere", "AdminController@getAddKoferi")->middleware("auth");
Route::post("/admin/dodaj-rent-kofere", "AdminController@storeKoferi")->middleware("auth");
Route::get("/admin/lista-rent-kofera", "AdminController@listRentKofer")->middleware("auth");
Route::get("/admin/obrisi-rent-kofer/{id}", "AdminController@deleteRentKofer")->middleware("auth");


// rute za automobile 
Route::get("/admin/dodaj-automobile", "AdminController@getAddCar")->middleware("auth");
Route::post("/admin/dodaj-automobile", "AdminController@storeCar")->middleware("auth");
Route::get("/admin/lista-automobila", "AdminController@listCars")->middleware("auth");
Route::get("/admin/obrisi-automobil/{id}", "AdminController@deleteCar")->middleware("auth");


// rute za rent nosace
Route::get("/admin/dodaj-rent-nosaci", "AdminController@getAddNosac")->middleware("auth");
Route::post("/admin/dodaj-rent-nosaci", "AdminController@storeNosac")->middleware("auth");
Route::get("/admin/lista-rent-nosaca", "AdminController@listNosaca")->middleware("auth");
Route::get("/admin/obrisi-rent-nosac/{id}", "AdminController@deleteNosac")->middleware("auth");


// ruta za dodavanje slika
Route::post("/admin/dodaj-galeriju-slika", "AdminController@storeImages")->middleware("auth");

Route::get("/home", "HomeController@index");

Auth::routes();

