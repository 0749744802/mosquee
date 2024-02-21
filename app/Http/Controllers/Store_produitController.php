<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_produitController extends Controller
{
    //
    public function ajout_produit(Request $request)
    {


        if ($request->hasFile("image_produit")) {
            $filename = $request->image_produit->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image_produit->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            Produit::updateOrCreate(
                
                [
                    'id'   => $request->produitID,
                    'titre_produit' => $request->titre_produit,
                    'public_produit' => $request->public_produit,
                    'categorie_produit_id' => $request->categorie_produit_id,
                    'resume_produit' => $request->resume_produit,
                    'description_produit' => $request->description_produit,
                    'stock_produit' => $request->stock_produit,
                    'prix_produit' => $request->prix_produit,
                    'reduction_produit' => $request->reduction_produit,
                    'appreciation_produit_id' => $request->appreciation_produit_id,
                    'image_produit' => $filename
                ]
            );
        }
        else
        {
            Produit::updateOrCreate(
                
                [
                    'id'   => $request->produitID,
                    'titre_produit' => $request->titre_produit,
                    'public_produit' => $request->public_produit,
                    'categorie_produit_id' => $request->categorie_produit_id,
                    'resume_produit' => $request->resume_produit,
                    'description_produit' => $request->description_produit,
                    'stock_produit' => $request->stock_produit,
                    'prix_produit' => $request->prix_produit,
                    'reduction_produit' => $request->reduction_produit,
                    'appreciation_produit_id' => $request->appreciation_produit_id
                ]
            );
        }


        // return
        return redirect()->back()->with('success', 'Produit ajouté avec succès');
    }
}
