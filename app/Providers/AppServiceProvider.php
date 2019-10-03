<?php

namespace App\Providers;
use App\models\catehealth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
       // Schema::defaultStringLength('191');
       if(! $this->app->runningInConsole()) {
        view()->share('catehealth', catehealth::all());


         }
    }
}
