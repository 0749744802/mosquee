<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function ajout_page(Request $request)
    {


        if ($request->hasFile("image")) {
            $filename = $request->image->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        Page::updateOrCreate(
            ['id'   => $request->pageID],
            [
                'titre_page' => $request->titre_page,
                'categorie_id' => $request->categorie_page_id,
                'public' => $request->public,
                'resume_page' => $request->resume_page,
                'description_page' => $request->description_page,
                'image' => $filename
            ]
        );

        // return
        return redirect()->back()->with('success', 'Page ajouté avec succès');
    }
}
