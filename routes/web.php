<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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

Route::get('/home', function () {
    return view('welcome');
});
// passage par action dans un controlleur
Route::get('/',[homeController::class,"index"]);
//route parametré passant par action dans controleur
Route::get("/produit/{i}/buyers/{v}",[homeController::class,"testAction"]);
//passage direct vers view sans controlleur lorsque l'action n' a pas des taches logiques
Route::view("/testview","testview");
//creation de route parametré sans passé par controlleur
Route::get("/ps/{u}", function($u){
    return view('vp',['user'=>$u]);
});

