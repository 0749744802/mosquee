<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_siteController extends Controller
{
    //
    public function liste_site(site $site)
    {
       // $data = Categorie::get();

        //
         $sites = Site::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_site', compact( "sites"));
    }


   
    
    public function ajout_site($siteID)
    {
        //$data = Categorie::get();


        //
        $site = site::find($siteID);

        return view('pages.ajout_site', compact('site'));
    }
    public function ajout_sites(Request $request)
    {


        if ($request->hasFile("logo_site")) {
            $filename = $request->logo_site->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->logo_site->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            site::updateOrCreate(
                ['id'   => $request->siteID],

                [

                    'nom_site' => $request->nom_site,
                    'numero1_site' => $request->numero1_site,
                    'numero2_site' => $request->numero2_site,
                    'numero3_site' => $request->numero3_site,
                    'fixe1_site' => $request->fixe1_site,
                    'fixe2_site' => $request->fixe2_site,
                    'facebook_site' => $request->facebook_site,
                    'whatsapp_site' => $request->whatsapp_site,
                    'linkedin_site' => $request->linkedin_site,
                    'google_site' => $request->google_site,
                    'tag_site' => $request->tag_site,
                    'map_site' => $request->map_site,
                    'description_site' => $request->description_site,
                    'email1_site' => $request->email1_site,
                    'email2_site' => $request->email2_site,
                    'email3_site' => $request->email3_site,
                     'logo_site' => $filename
                ]
            );
        }
        else
        {
            site::updateOrCreate(
                ['id'   => $request->siteID],

                [
                    'nom_site' => $request->nom_site,
                    'numero1_site' => $request->numero1_site,
                    'numero2_site' => $request->numero2_site,
                    'numero3_site' => $request->numero3_site,
                    'fixe1_site' => $request->fixe1_site,
                    'fixe2_site' => $request->fixe2_site,
                    'facebook_site' => $request->facebook_site,
                    'whatsapp_site' => $request->whatsapp_site,
                    'linkedin_site' => $request->linkedin_site,
                    'google_site' => $request->google_site,
                    'tag_site' => $request->tag_site,
                    'map_site' => $request->map_site,
                    'description_site' => $request->description_site,
                    'email1_site' => $request->email1_site,
                    'email2_site' => $request->email2_site,
                    'email3_site' => $request->email3_site

                ]
            );
        }


        // return
        return redirect()->back()->with('success', 'information du site ajouté avec succès');
    }
    public function supprimer_site(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $site=site::find($id);
        //ligne a supprimé
        $site->delete();
        return redirect()->back()->with('success', 'information du site supprimé avec succès');

    }
    
}
