<?php

namespace App\Http\Controllers;

use App\Models\Categorie_produit;
use Illuminate\Http\Request;

class Store_ajout_produit_categorie extends Controller
{
    //ajout dans la categorie produit
    public function ajout_categorie_produit(Request $request)
    {

        // dd($request->toArray());
        Categorie_produit::updateOrCreate(

            [
                //'id'   => $request->categorie_produit_ID,
                'categorie_produit_principale' => $request->categorie_produit_principale,
                'categorie_produit_secondaire' => $request->categorie_produit_secondaire

            ]);
            // return
        return redirect()->back()->with('success', 'Categorie Produit ajouté avec succès');
    }
}
