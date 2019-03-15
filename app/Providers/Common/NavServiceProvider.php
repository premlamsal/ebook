<?php

namespace App\Providers\Common;

use Illuminate\Support\ServiceProvider;

class NavServiceProvider extends ServiceProvider
{
    public function register()
    {
      
    }

   
    public function boot()
    {
            view()->composer('partials.nav', function($view)
        {
            // $Category=Category::all()->load('subcategory');
            $view->with('Category', \App\Category::all()->load('SubCategory'));
        });

    }
}
