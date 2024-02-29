<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail_devis;

class Stotr_devisController extends Controller
{
    //
    public function ajout_deviss(Request $request)
    {

                  Devi::updateOrCreate(
                ['id'   => $request->devisID],

                [

                    'personne_devis' => $request->personne_devis,
                    'domaine_devis' => $request->domaine_devis,
                    'numero_devis' => $request->numero_devis,
                    'pays_devis' => $request->pays_devis,
                    'ville_devis' => $request->ville_devis,
                    'adresse_devis' => $request->adresse_devis,
                    'nom_devis' => $request->nom_devis,
                    'numeroc_devis' => $request->numeroc_devis,
                    'emailc_devis' => $request->emailc_devis


                ]
            );

                    $personne_devis = $request->personne_devis;
                    $domaine_devis = $request->domaine_devis;
                    $numero_devis = $request->numero_devis;
                    $pays_devis = $request->pays_devis;
                    $ville_devis = $request->ville_devis;
                    $adresse_devis = $request->adresse_devis;
                    $nom_devis = $request->nom_devis;
                    $numeroc_devis = $request->numeroc_devis;
                    $emailc_devis = $request->emailc_devis;
                    $subject = "Formulaire de demande de devis";

            Mail::to('traore.m@ticafrique.com')->send(new SendMail_devis($personne_devis, $domaine_devis, $numero_devis, $pays_devis, $ville_devis, $adresse_devis, $nom_devis, $numeroc_devis, $emailc_devis,$subject));


        // return
        return redirect()->route('accueil')->with('success', 'L\'e-mail a été envoyé avec succès !');
        //return redirect()->back()->with('success', 'devis ajouté avec succès');
    }
    public function supprimer_devis(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $devi=Devi::find($id);
        //ligne a supprimé
        $devi->delete();
        return redirect()->back()->with('success', 'menu supprimé avec succès');

    }
    public function liste_devis(Devi $devis)
    {
       // $data = Categorie::get();

        //
         $devis = Devi::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_demande_devis', compact( "devis"));
    }
}
