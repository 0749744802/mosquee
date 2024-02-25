<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_membreController extends Controller
{
    //
    public function liste_membre(Membres $membres)
    {
       // $data = Categorie::get();

        //
         $membres = Membres::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_membre', compact( "membres"));
    }
    public function ajout_membre($membreID)
    {
        //$data = Categorie::get();


        //
        $membre = Membres::find($membreID);

        return view('pages.ajout_membre', compact('membre'));
    }
    public function ajout_membres(Request $request)
    {


        if ($request->hasFile("image_membre")) {
            $filename = $request->image_membre->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image_membre->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            Membres::updateOrCreate(
                ['id'   => $request->membreID],

                [

                    'nom_membre' => $request->nom_membre,
                    'fonction_membre' => $request->fonction_membre,
                    'email_membre' => $request->email_membre,
                    'numero_membre' => $request->numero_membre,
                    'public_membre' => $request->public_membre,
                     'image_membre' => $filename
                ]
            );
        }
        else
        {
            Membres::updateOrCreate(
                ['id'   => $request->membreID],

                [
                    'nom_membre' => $request->nom_membre,
                    'fonction_membre' => $request->fonction_membre,
                    'email_membre' => $request->email_membre,
                    'numero_membre' => $request->numero_membre,
                    'public_membre' => $request->public_membre

                ]
            );
        }


        // return
        return redirect()->back()->with('success', 'membre ajouté avec succès');
    }
    public function supprimer_membre(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $membre=Membres::find($id);
        //ligne a supprimé
        $membre->delete();
        return redirect()->back()->with('success', 'membre supprimé avec succès');

    }
}
