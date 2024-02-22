<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\Store_ajout_produit_categorie;
use App\Http\Controllers\Store_appreciation;
use App\Http\Controllers\Store_produitController;

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

Route::get('/', function () {
    return view('pages.dashbord');
});
Route::get('/dashbord', [DashbordController::class,'dashbord']);
Route::get('/ajout_page/{pageID}', [DashbordController::class,'ajout_page'])->name('ajout_page');
Route::get('/ajout_produit/{produitID}', [DashbordController::class,'ajout_produit'])->name('ajout_produit');
Route::get('/liste_page', [DashbordController::class,'liste_page'])->name('liste_page');
Route::get('/liste_produit', [DashbordController::class,'liste_produit'])->name('liste_produit');
Route::post('/stores', [StoresController::class,'store'])->name('stores');
Route::post('/store', [StoreController::class,'ajout_page'])->name('store');
Route::post('/store_produit', [Store_produitController::class,'ajout_produit'])->name('store_produit');
Route::post('/store_ajout_produit_categorie', [Store_ajout_produit_categorie::class,'ajout_categorie_produit'])->name('store_ajout_produit_categorie');
Route::post('/store_appreciation', [Store_appreciation::class,'ajout_appreciation'])->name('store_appreciation');
Route::get('supprimer_page', [StoreController::class,'supprime_page'])->name('supprime_page');
Route::get('supprimer_produit', [Store_produitController::class,'supprime_produit'])->name('supprime_page');
