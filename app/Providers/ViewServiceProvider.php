<?php

namespace App\Providers;
use App\ctegory;
use App\Counrty;
use App\Setting;
use App\SiteContent;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        view()->composer('Front/includes/header',function($view){
            $view->with('cats',Ctegory::select('id','name')->get());
            $view->with('cities',Counrty::select('id','name')->get());
            $view->with('sett',Setting::first());
        });
        view()->composer('Front/includes/footer',function($view){
            $view->with('sett',Setting::first());
            $view->with('footer_content',SiteContent::select('content')->where('name','=','footer')->first());

        });


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
