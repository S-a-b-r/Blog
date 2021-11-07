<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        Paginator::useBootstrap();


        //adminBlade
        Blade::directive('admin',function (){
            return "<?php if(auth()->user()->role == 0): ?>";
        });
        Blade::directive('endadmin',function (){
            return "<?php endif; ?>";
        });

    }
}
