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
           $request->image->StoreAs('/public/',$filename);

        }
        //dd($filename);
        // dd($request->toArray());
        $insert = Page::create([
            'titre_page' => $request->titre_page,
        'categorie_page_id' => $request->categorie_page_id,
        'public' => $request->public,
        'resume_page' => $request->resume_page,
        'description_page' => $request->description_page,
        'image' => $filename
    ]);
    }
}
