<?php

namespace App\Http\Controllers;

use App\Models\Logiciel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_logicielController extends Controller
{
    public function liste_logiciel(logiciel $logiciels)
     {
        // $data = Categorie::get();

         //
          $logiciels = Logiciel::get();
         //$pages = $page->getAllpages();


         // Debug
         // dd($pages);
         return view('pages.liste_logiciel', compact( "logiciels"));
     }
     public function ajout_logiciel($logicielID)
     {
         //$data = Categorie::get();


         //
         $logiciel = logiciel::find($logicielID);

         return view('pages.ajout_logiciel', compact('logiciel'));
     }
     public function get_logiciel()
     {
         $logiciels = Logiciel::paginate(5);


         //
         //$logiciel = logiciel::find($logicielID);

         
         return view('logiciel.pages.logiciels', compact( "logiciels"));
         
     }
     public function ajout_logiciels(Request $request)
     {


         if ($request->hasFile("image_logiciel")) {
             $filename = $request->image_logiciel->extension();
             $filename = Str::random(10) . '.' . $filename;
             $request->image_logiciel->StoreAs('/public/', $filename);
         }


         //dd($filename);
         // dd($request->pageID);
         // dd($request->toArray()); // updateOrCreate
         if (isset($filename))
         {
             logiciel::updateOrCreate(
                 ['id'   => $request->logicielID],

                 [

                     'titre_logiciel' => $request->titre_logiciel,
                     'lien_logiciel' => $request->lien_logiciel,
                     'public_logiciel' => $request->public_logiciel,
                     'resume_logiciel' => $request->resume_logiciel,
                     'description_logiciel' => $request->description_logiciel,
                      'image_logiciel' => $filename
                 ]
             );
         }
         else
         {
             logiciel::updateOrCreate(
                 ['id'   => $request->logicielID],

                 [
                     'titre_logiciel' => $request->titre_logiciel,
                     'lien_logiciel' => $request->lien_logiciel,
                     'public_logiciel' => $request->public_logiciel,
                     'resume_logiciel' => $request->resume_logiciel,
                     'description_logiciel' => $request->description_logiciel

                 ]
             );
         }


         // return
         return redirect()->back()->with('success', 'logiciel ajouté avec succès');
     }
     public function supprimer_logiciel(Request $request)
     {
         $id=$request->id;
         //recherche de la page a supprimé
         $logiciel=logiciel::find($id);
         //ligne a supprimé
         $logiciel->delete();
         return redirect()->back()->with('success', 'logiciel supprimé avec succès');

     }
}
