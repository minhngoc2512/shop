<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('header',function($view){
            $typeProduct = ProductType::all();

            //dat ten tham so truyen qua, gia tri truyen di
            $view->with('typeProduct',$typeProduct);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
