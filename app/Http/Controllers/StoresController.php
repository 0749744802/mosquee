<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->toArray());
        $insert = Categorie::create(['parent' => $request->parent,
        'fils' => $request->fils]);
    }

}
