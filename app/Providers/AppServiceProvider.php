<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
use Illuminate\Support\Facades\App;

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
        Schema::defaultStringLength(170);
    
        View::composer(['layout.main', 
        'static.basket', 
        'fetch.wraper_basket', 
        'fetch.main.mini_basket_catalog_wrapper',
        'fetch.main.order_details',
        'mail.order'
        ], 
        function($view){
            if(isset($_SESSION['prod'])){
                $view->with(['basket' => Menu::
                    when($_SESSION['prod'], function($query){
                        return $query->whereIn('id', $_SESSION['prod']->keys()); 
                    })->get()
                
                ]);
            }
        }); 
        // App::setLocale('ro');php artisan make:middleware SetLocale
    }
}