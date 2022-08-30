<?php

namespace App\Providers;

use App\Models\Category;
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
        view()->composer('*', function ($view) {
            $view->with([
                'nav_services' => Category::where('type', '=', 0)->get(),
                'services' => Category::where('type', '=', 0)->first(),
                'nav_print' => Category::where('type', '=', 1)->get(),
                'print' => Category::where('type', '=', 1)->first()
            ]);
        });
    }
}
