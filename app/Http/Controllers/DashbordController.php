<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashbord()
    {
        return view('pages.dashbord');
    }
    public function ajout_page()
    {
        $data=Categorie::get();
        return view('pages.ajout_page',compact("data"));
    }
    public function liste_page()
    {
        $data=Categorie::get();
        return view('pages.liste_page',compact("data"));
    }

}