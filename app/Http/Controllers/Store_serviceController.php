<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_serviceController extends Controller
{
    //
    public function lien_services($serviceID)
    {
        $service = service::find($serviceID);
        return view('logiciel.pages.services',compact("service"));
    }
    public function liste_service(service $services)
    {
       // $data = Categorie::get();

        //
         $services = service::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_service', compact( "services"));
    }
    public function ajout_service($serviceID)
    {
        //$data = Categorie::get();


        //
        $service = service::find($serviceID);

        return view('pages.ajout_service', compact('service'));
    }
    public function ajout_services(Request $request)
    {


        if ($request->hasFile("image_service")) {
            $filename = $request->image_service->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image_service->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            service::updateOrCreate(
                ['id'   => $request->serviceID],

                [

                    'titre_service' => $request->titre_service,
                    'public_service' => $request->public_service,
                    'resume_service' => $request->resume_service,
                    'description_service' => $request->description_service,
                     'image_service' => $filename
                ]
            );
        }
        else
        {
            Service::updateOrCreate(
                ['id'   => $request->serviceID],

                [
                    'titre_service' => $request->titre_service,
                    'public_service' => $request->public_service,
                    'resume_service' => $request->resume_service,
                    'description_service' => $request->description_service

                ]
            );
        }


        // return
        return redirect()->back()->with('success', 'service ajouté avec succès');
    }
    public function supprimer_service(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $service=service::find($id);
        //ligne a supprimé
        $service->delete();
        return redirect()->back()->with('success', 'service supprimé avec succès');

    }
}
