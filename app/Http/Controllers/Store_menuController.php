<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_menuController extends Controller
{
     //
     public function liste_menu(Menu $Menu)
     {
        // $data = Categorie::get();

         //
          $menu = Menu::get();
         //$pages = $page->getAllpages();


         // Debug
         // dd($pages);
         return view('pages.liste_menu', compact( "menu"));
     }
     public function ajout_menu($menuID)
     {
         $data = Menu::get();


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

                     'principale_menu' => $request->principale_menu,
                     'sous_menu' => $request->sous_menu,
                     'ordre_menu' => $request->ordre_menu,
                     'public_menu' => $request->public_menu

                 ]
             );
         }
         else
         {
             Menu::updateOrCreate(
                 ['id'   => $request->menuID],

                 [
                    'principale_menu' => $request->principale_menu,
                    'sous_menu' => $request->sous_menu,
                    'ordre_menu' => $request->ordre_menu,
                    'public_menu' => $request->public_menu

                 ]
             );
         }


         // return
         return redirect()->back()->with('success', 'menu ajouté avec succès');
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
}
