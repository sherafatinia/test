<?php

namespace App\Modules\Invoices\Providers;

use Illuminate\Support\ServiceProvider;

class MainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerViews();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }

    public function registerViews()
    {
        $this->loadViewsFrom(base_path('app/Modules/Invoices/Resources/Views'), 'invoices');
    }
}
