<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_videoController extends Controller
{
     //

     public function liste_video(video $videos)
     {
        // $data = Categorie::get();

         //
          $videos = Video::get();
         //$pages = $page->getAllpages();


         // Debug
         // dd($pages);
         return view('pages.liste_video', compact( "videos"));
     }
     public function ajout_video($videoID)
     {
         //$data = Categorie::get();


         //
         $video = video::find($videoID);

         return view('pages.ajout_video', compact('video'));
     }
     public function ajout_videos(Request $request)
     {


         if ($request->hasFile("image_video")) {
             $filename = $request->image_video->extension();
             $filename = Str::random(10) . '.' . $filename;
             $request->image_video->StoreAs('/public/', $filename);
         }


         //dd($filename);
         // dd($request->pageID);
         // dd($request->toArray()); // updateOrCreate
         if (isset($filename))
         {
             Video::updateOrCreate(
                 ['id'   => $request->videoID],

                 [

                     'titre_video' => $request->titre_video,
                     'lien_video' => $request->lien_video,
                     'public_video' => $request->public_video,
                     'resume_video' => $request->resume_video,
                     'description_video' => $request->description_video,
                      'image_video' => $filename
                 ]
             );
         }
         else
         {
             video::updateOrCreate(
                 ['id'   => $request->videoID],

                 [
                     'titre_video' => $request->titre_video,
                     'lien_video' => $request->lien_video,
                     'public_video' => $request->public_video,
                     'resume_video' => $request->resume_video,
                     'description_video' => $request->description_video

                 ]
             );
         }


         // return
         return redirect()->back()->with('success', 'video ajouté avec succès');
     }
     public function supprimer_video(Request $request)
     {
         $id=$request->id;
         //recherche de la page a supprimé
         $video=video::find($id);
         //ligne a supprimé
         $video->delete();
         return redirect()->back()->with('success', 'video supprimé avec succès');

     }
}
