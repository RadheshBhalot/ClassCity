<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
 use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
            Paginator::useBootstrap();

        View::composer('*', function ($view) {
            $count = DB::table('_add_cart_view')->count();
             $total = DB::table('_add_cart_view')->sum('Subtotal');
            $view->with('viewcount', $count)->with('total', $total);
        });
        
    }



}
