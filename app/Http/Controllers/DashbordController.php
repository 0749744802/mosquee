<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Page;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashbord()
    {
        return view('pages.dashbord');
    }
    public function ajout_page($pageID)
    {
        $data = Categorie::get();


        //
        $page = Page::find($pageID);

        return view('pages.ajout_page', compact("data" ,'page'));
    }


    public function liste_page(Page $page)
    {
        $data = Categorie::get();

        //
        // $pages = Page::get();
        $pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_page', compact("data", "pages"));
    }
}
