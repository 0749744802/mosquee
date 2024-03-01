<?php

namespace App\Providers;

use App\Models\Site;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Store_siteController;


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
       view()->composer('*', function ($view) use($sites) {
        $view->with([
            'site'=> $sites
        ]);
          
       });
    }
}
