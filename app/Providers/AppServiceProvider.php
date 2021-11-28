<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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

        if (!$this->app->runningInConsole()) {
            view()->composer('*', function ($view) {
                $icons = [
                    '<i class="fas fa-fist-raised"></i>',
                    '<i class="fas fa-skull"></i>',
                    '<i class="fas fa-laugh"></i>',
                    '<i class="fas fa-horse"></i>',
                    '<i class="fas fa-theater-masks"></i>',
                    '<i class="fas fa-heart"></i>',
                    '<i class="fas fa-ghost"></i>',
                    '<i class="fas fa-dragon"></i>',
                    '<i class="fas fa-atom"></i>',
                    '<i class="fas fa-search"></i>',
                    '<i class="fas fa-user"></i>'
                ];
                $view->with('icons', $icons);
            });
            Paginator::defaultSimpleView('pagination::default');
        }
    }
}
