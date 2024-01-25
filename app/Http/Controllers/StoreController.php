<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(Request $request){

       // dd($request->toArray());
       $insert=Categorie::create(['parent' => $request->parent,'fils'=>$request->fils]);

    }
}