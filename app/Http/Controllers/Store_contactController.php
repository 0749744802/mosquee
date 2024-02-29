<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class Store_contactController extends Controller
{
    public function ajout_contacts(Request $request)
    {

                  Contact::updateOrCreate(
                ['id'   => $request->contactID],

                [

                    'nom_contact' => $request->nom_contact,
                    'numero_contact' => $request->numero_contact,
                    'email_contact' => $request->email_contact,
                    'sujet_contact' => $request->sujet_contact,
                    'message_contact' => $request->message_contact,


                ]
            );

            $subject = $request->sujet_contact;
            $nom = $request->nom_contact;
            $numero = $request->numero_contact;
            $email = $request->email_contact;
            $content = $request->message_contact;

            Mail::to('traore.m@ticafrique.com')->send(new SendMail($subject, $nom, $numero, $email, $content));


        // return

        return redirect()->back()->with('success', 'contact ajouté avec succès');
    }
    public function supprimer_contact(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $contact=contact::find($id);
        //ligne a supprimé
        $contact->delete();
        return redirect()->back()->with('success', 'menu supprimé avec succès');

    }
    public function liste_contact(contact $contact)
    {
       // $data = Categorie::get();

        //
         $contact = contact::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_contact', compact( "contact"));
    }


}
