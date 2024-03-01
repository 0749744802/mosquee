<?php

namespace App\Http\Controllers;

use App\Models\Logiciel;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Video;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function get_slide(slide $slide)
    {
       // $data = Categorie::get();

        //
         $slides = Slide::orderby('id','desc')->take(3)->get();
         $services = Service::orderby('id','asc')->take(6)->get();
         $videos = Video::orderby('id','desc')->take(1)->get();
         $logiciels = Logiciel::orderby('id','desc')->take(5)->get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('logiciel.pages.accueil', compact( "slides","services","videos","logiciels"));
    }
    public function get_accueil(slide $slide)
    {
       // $data = Categorie::get();

        //
         //$slides = Slide::orderby('id','desc')->take(1)->get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('logiciel.pages.accueil');
    }
}
