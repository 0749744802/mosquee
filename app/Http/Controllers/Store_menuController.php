<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Menu_principale;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_menuController extends Controller
{
     //
     public function liste_menu(Menu $menu)
     {
        // $data = Categorie::get();

         //
          $menu = Menu::get();
          $menu_principale = Menu_principale::get();

         return view('pages.liste_menu', compact('menu','menu_principale'));
     }
     public function liste_menu_principale(Menu_principale $menu_principale)
     {
        // $data = Categorie::get();

         //
         $menu = Menu::get();
          $menu_principale = Menu_principale::get();
         //$pages = $page->getAllpages();


         // Debug
         // dd($pages);
         return view('pages.liste_menu', compact('menu_principale','menu'));
     }
     public function ajout_menu($menuID)
     {
         $data = Menu_principale::get();


         //
         $menu = Menu::find($menuID);

         return view('pages.ajout_menu', compact('menu','data'));
     }
     public function ajout_menus(Request $request)
     {


         if ($request->hasFile("image_menu")) {
             $filename = $request->image_menu->extension();
             $filename = Str::random(10) . '.' . $filename;
             $request->image_menu->StoreAs('/public/', $filename);
         }


         //dd($filename);
         // dd($request->pageID);
         // dd($request->toArray()); // updateOrCreate
         if (isset($filename))
         {
             Menu::updateOrCreate(
                 ['id'   => $request->menuID],

                 [

                     'menu_principale_id' => $request->menu_principale_id,
                     'sous_menu' => $request->sous_menu,
                     'ordre_menu' => $request->ordre_menu,
                     'public_menu' => $request->public_menu,
                     'lien_menu' => $request->lien_menu


                 ]
             );
         }
         else
         {
             Menu::updateOrCreate(
                 ['id'   => $request->menuID],

                 [
                    'menu_principale_id' => $request->menu_principale_id,
                    'sous_menu' => $request->sous_menu,
                    'ordre_menu' => $request->ordre_menu,
                    'public_menu' => $request->public_menu,
                    'lien_menu' => $request->lien_menu

                 ]
             );
         }


         // return
         return redirect()->back()->with('success', 'menu ajouté avec succès');
     }




     public function ajout_menu_principale(Request $request)
     {





         //dd($filename);
         // dd($request->pageID);
         // dd($request->toArray()); // updateOrCreate


             Menu_principale::updateOrCreate(


                 [

                     'titre_menu_principale' => $request->titre_menu_principale


                 ]
             );




         // return
         return redirect()->back()->with('success', 'menu principale ajouté avec succès');
     }
     public function supprimer_menu(Request $request)
     {
         $id=$request->id;
         //recherche de la page a supprimé
         $menu=Menu::find($id);
         //ligne a supprimé
         $menu->delete();
         return redirect()->back()->with('success', 'menu supprimé avec succès');

     }

     public function supprimer_menu_principale(Request $request)
     {
         $id=$request->id;
         //recherche de la page a supprimé
         $menu=Menu_principale::find($id);
         //ligne a supprimé
         $menu->delete();
         return redirect()->back()->with('success', 'menu principale supprimé avec succès');

     }
}
