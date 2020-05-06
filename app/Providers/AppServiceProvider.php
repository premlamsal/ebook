<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use DB;
use Exception;
use PDOException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 

         // Handle offline database
        try {
            DB::connection()
                ->getPdo();
        } catch (Exception $e) {
            abort($e instanceof PDOException ? 503 : 500);
            //will show maintaince mode 503
        }

        // ...
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
