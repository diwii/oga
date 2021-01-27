<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Http\View\Composers\IndexComposer;
use App\Http\View\Composers\AboutComposer;
use App\Http\View\Composers\ProductsComposer;
use App\Http\View\Composers\RecipesComposer;
use App\Http\View\Composers\ContactsComposer;

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
        //
        View::share('siteTitle', 'Viksieni');

        View::composer('index', IndexComposer::class);
        View::composer('about', AboutComposer::class);
        View::composer('products', ProductsComposer::class);
        View::composer('recipes', RecipesComposer::class);
        View::composer('contacts', ContactsComposer::class);
    }
}
