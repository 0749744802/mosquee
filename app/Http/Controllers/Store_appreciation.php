<?php

namespace App\Http\Controllers;

use App\Models\Appreciation_produit;
use Illuminate\Http\Request;

class Store_appreciation extends Controller
{

     //ajout dans la appreciation
     public function ajout_appreciation(Request $request)
     {

         // dd($request->toArray());
         Appreciation_produit::updateOrCreate(

             [
                 //'id'   => $request->categorie_produit_ID,
                 'titre_appreciation' => $request->titre_appreciation

             ]);
             // return
         return redirect()->back()->with('success', 'Appreciation Produit ajouté avec succès');
     }
}
