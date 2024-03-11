<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Store_deconnexionController extends Controller
{
    //
    public function deconnexion()
    {
       // $data = Categorie::get();

        //
         //$slides = Slide::orderby('id','desc')->take(1)->get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.deconnexion');
    }
}
