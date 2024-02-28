<?php

namespace App\Http\Controllers;
use App\Models\slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_slideController extends Controller
{
    //
    public function liste_slide(slide $slide)
    {
       // $data = Categorie::get();

        //
         $slides = Slide::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_slide', compact( "slides"));
    }
    
    public function ajout_slide($slideID)
    {
        //$data = Categorie::get();


        //
        $slide = slide::find($slideID);

        return view('pages.ajout_slide', compact('slide'));
    }
    public function ajout_slides(Request $request)
    {


        if ($request->hasFile("image_slide")) {
            $filename = $request->image_slide->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image_slide->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            slide::updateOrCreate(
                ['id'   => $request->slideID],

                [

                    'titre_slide' => $request->titre_slide,
                    'sous_titre_slide' => $request->sous_titre_slide,
                    'description_slide' => $request->description_slide,
                    'lien_slide' => $request->lien_slide,
                    'public_slide' => $request->public_slide,
                     'image_slide' => $filename
                ]
            );
        }
        else
        {
            slide::updateOrCreate(
                ['id'   => $request->slideID],

                [
                    'titre_slide' => $request->titre_slide,
                    'sous_titre_slide' => $request->sous_titre_slide,
                    'description_slide' => $request->description_slide,
                    'lien_slide' => $request->lien_slide,
                    'public_slide' => $request->public_slide

                ]
            );
        }


        // return
        return redirect()->back()->with('success', 'slide ajouté avec succès');
    }
    public function supprimer_slide(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $slide=slide::find($id);
        //ligne a supprimé
        $slide->delete();
        return redirect()->back()->with('success', 'slide supprimé avec succès');

    }
}
