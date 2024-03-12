<?php

namespace App\Providers;

use App\Models\Site;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Store_siteController;
use App\Models\Devi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Paginator::useBootstrap();
        //affichage du dernier element de la table site
        $sites= Site::orderby('id','desc')->take(1)->get();
        $count_devis = Devi::count();
       view()->composer('*', function ($view) use($sites,$count_devis) {
        $view->with([
            'site'=> $sites,
            'count_devi'=>$count_devis
        ]);

       });
    }
}
