<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
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
Route::get('/ajout_page', [DashbordController::class,'ajout_page']);
Route::get('/liste_page', [DashbordController::class,'liste_page']);
Route::post('/store', [StoreController::class,'store'])->name('store');