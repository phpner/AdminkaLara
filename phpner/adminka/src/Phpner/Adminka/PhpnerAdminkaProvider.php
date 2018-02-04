<?php

namespace Phpner\Adminka;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class PhpnerAdminkaProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ ."/Http/Routes.php");
        $this->loadViewsFrom(__DIR__.'/Resources/', 'phpner');
        $this->loadMigrationsFrom(__DIR__.'/migrations/');

        Event::listen( \Phpner\Adminka\Events\MigrationCreateTableEvent::class,
            \Phpner\Adminka\Listeners\MigrationCreateTableListener::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
