<?php namespace Global4Communications\LaraMenu\Providers;

use Illuminate\Support\ServiceProvider;

class LaraMenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'laramenu');

        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/views.php');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
