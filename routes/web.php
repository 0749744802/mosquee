<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\DashbordController;

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
Route::get('/liste_page', [DashbordController::class,'liste_page'])->name('liste_page');
Route::post('/stores', [StoresController::class,'store'])->name('stores');
Route::post('/store', [StoreController::class,'ajout_page'])->name('store');
Route::post('supprimer_page/{pageID}', [StoreController::class,'supprime_page'])->name('supprime_page');
