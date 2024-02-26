<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_blogController extends Controller
{
    //
    public function liste_blog(blog $blogs)
    {
       // $data = Categorie::get();

        //
         $blogs = blog::get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('pages.liste_blog', compact( "blogs"));
    }
    public function ajout_blog($blogID)
    {
        //$data = Categorie::get();


        //
        $blog = Blog::find($blogID);

        return view('pages.ajout_blog', compact('blog'));
    }
    public function ajout_blogs(Request $request)
    {


        if ($request->hasFile("image_blog")) {
            $filename = $request->image_blog->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image_blog->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            blog::updateOrCreate(
                ['id'   => $request->blogID],

                [

                    'titre_blog' => $request->titre_blog,
                    'public_blog' => $request->public_blog,
                    'resume_blog' => $request->resume_blog,
                    'description_blog' => $request->description_blog,
                     'image_blog' => $filename
                ]
            );
        }
        else
        {
            blog::updateOrCreate(
                ['id'   => $request->blogID],

                [
                    'titre_blog' => $request->titre_blog,
                    'public_blog' => $request->public_blog,
                    'resume_blog' => $request->resume_blog,
                    'description_blog' => $request->description_blog

                ]
            );
        }


        // return
        return redirect()->back()->with('success', 'blog ajouté avec succès');
    }
    public function supprimer_blog(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $blog=blog::find($id);
        //ligne a supprimé
        $blog->delete();
        return redirect()->back()->with('success', 'blog supprimé avec succès');

    }
}
