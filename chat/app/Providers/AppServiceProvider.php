<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Schema::defaultStringLength(191);
        if($this->app->environment() === 'local'){
            DB::listen(function (QueryExecuted $query){
                file_put_contents('php://stdout', "\e")
            });
        }*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
     public function register()
     {
         if ($this->app->environment() == 'local') {
             $this->app->register('Kurt\Repoist\RepoistServiceProvider');
         }
     }
}
