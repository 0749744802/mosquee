<?php

namespace App\Http\Controllers;

use App\Models\Appreciation_produit;
use App\Models\Page;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Categorie_produit;

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
    public function ajout_produit($produitID)
    {
        $appreciation_produit = Appreciation_produit::get();
        $categorie_produit = Categorie_produit::get();
          //recherche du produit
          $produit = Produit::find($produitID);
        return view('pages.ajout_produit',compact("appreciation_produit","produit","categorie_produit"));
    }


    public function liste_page(Page $page)
    {
        $data = Categorie::get();

        //
         $pages = Page::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_page', compact("data", "pages"));
    }

    public function liste_produit(Produit $produit)
    {
        $categorie_produit = Categorie_produit::get();
        $appreciation_produit = Appreciation_produit::get();

        //
         $produits = Produit::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_produit', compact("categorie_produit","appreciation_produit", "produits"));
    }
}
