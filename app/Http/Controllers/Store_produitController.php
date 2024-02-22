<?php

namespace App\Http\Controllers;

use App\Models\Appreciation_produit;
use App\Models\Categorie_produit;
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
                ['id'   => $request->produitID],

                [

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
                ['id'   => $request->produitID],

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
    public function supprime_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $produit=produit::find($id);
        //ligne a supprimé
        $produit->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès');

    }
    public function supprimer_categorie_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $categorie_produit=Categorie_produit::find($id);
        //ligne a supprimé
        $categorie_produit->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès');

    }
    public function supprimer_appreciation_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $appreciation_produit=Appreciation_produit::find($id);
        //ligne a supprimé
        $appreciation_produit->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès');

    }
}
