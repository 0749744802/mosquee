<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\Store_ajout_produit_categorie;
use App\Http\Controllers\Store_appreciation;
use App\Http\Controllers\Store_produitController;
use App\Http\Controllers\Store_slideController;
use App\Http\Controllers\Store_serviceController;
use App\Http\Controllers\Store_blogController;
use App\Http\Controllers\Store_membreController;
use App\Http\Controllers\Store_menuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('logiciel.pages.accueil');
});
//lien formulaire devis
Route::get('/devis', function () {
    return view('logiciel.formulaire');
});
//lien services
   Route::get('/services', [Store_serviceController::class,'lien_services'])->name('services');
//lien contact
Route::get('/contact', function () {
    return view('logiciel.pages.contact');
});
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function ()
    {
        return view('pages.dashbord');
    });
    Route::get('/dashbord', [DashbordController::class,'dashbord'])->name('dashboard');
    //lien page
    Route::get('/ajout_page/{pageID}', [DashbordController::class,'ajout_page'])->name('ajout_page');
    Route::get('/liste_page', [DashbordController::class,'liste_page'])->name('liste_page');
    Route::post('/store', [StoreController::class,'ajout_page'])->name('store');
    Route::get('supprimer_page', [StoreController::class,'supprime_page'])->name('supprime_page');
    Route::get('supprimer_categorie_page', [StoreController::class,'supprimer_categorie_page'])->name('supprimer_categorie_page');

    //lien slide
    Route::get('/ajout_slide/{slideID}', [Store_slideController::class,'ajout_slide'])->name('ajout_slide');
    Route::get('/liste_slide', [Store_slideController::class,'liste_slide'])->name('liste_slide');
    Route::post('/store_slide', [Store_slideController::class,'ajout_slides'])->name('store_slide');
    Route::get('supprimer_slide', [Store_slideController::class,'supprimer_slide'])->name('supprimer_slide');



    //lien service
    Route::get('/ajout_service/{serviceID}', [Store_serviceController::class,'ajout_service'])->name('ajout_service');
    Route::get('/liste_service', [Store_serviceController::class,'liste_service'])->name('liste_service');
    Route::post('/store_service', [Store_serviceController::class,'ajout_services'])->name('store_service');
    Route::get('supprimer_service', [Store_serviceController::class,'supprimer_service'])->name('supprimer_service');


    //lien blog
    Route::get('/ajout_blog/{blogID}', [Store_blogController::class,'ajout_blog'])->name('ajout_blog');
    Route::get('/liste_blog', [Store_blogController::class,'liste_blog'])->name('liste_blog');
    Route::post('/store_blog', [Store_blogController::class,'ajout_blogs'])->name('store_blog');
    Route::get('supprimer_blog', [Store_blogController::class,'supprimer_blog'])->name('supprimer_blog');


    //lien membre
    Route::get('/ajout_membre/{membreID}', [Store_membreController::class,'ajout_membre'])->name('ajout_membre');
    Route::get('/liste_membre', [Store_membreController::class,'liste_membre'])->name('liste_membre');
    Route::post('/store_membre', [Store_membreController::class,'ajout_membres'])->name('store_membre');
    Route::get('supprimer_membre', [Store_membreController::class,'supprimer_membre'])->name('supprimer_membre');



     //lien memu
     Route::get('/ajout_menu/{menuID}', [Store_menuController::class,'ajout_menu'])->name('ajout_menu');
     Route::get('/liste_menu', [Store_menuController::class,'liste_menu'])->name('liste_menu');
     Route::post('/store_menu', [Store_menuController::class,'ajout_menus'])->name('store_menu');
     Route::get('supprimer_menu', [Store_menuController::class,'supprimer_menu'])->name('supprimer_menu');


    //lien produit
    Route::get('/ajout_produit/{produitID}', [DashbordController::class,'ajout_produit'])->name('ajout_produit');
    Route::get('/liste_produit', [DashbordController::class,'liste_produit'])->name('liste_produit');
    Route::post('/store_produit', [Store_produitController::class,'ajout_produit'])->name('store_produit');
    Route::post('/store_ajout_produit_categorie', [Store_ajout_produit_categorie::class,'ajout_categorie_produit'])->name('store_ajout_produit_categorie');
    Route::post('/store_appreciation', [Store_appreciation::class,'ajout_appreciation'])->name('store_appreciation');
    Route::get('supprimer_categorie_produit', [Store_produitController::class,'supprimer_categorie_produit'])->name('supprimer_categorie_produit');
    Route::get('supprimer_produit', [Store_produitController::class,'supprime_produit'])->name('supprime_produit');
    Route::get('supprimer_appreciation_produit', [Store_produitController::class,'supprimer_appreciation_produit'])->name('supprimer_appreciation_produit');
    Route::post('/stores', [StoresController::class,'store'])->name('stores');

    // lien profile
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
