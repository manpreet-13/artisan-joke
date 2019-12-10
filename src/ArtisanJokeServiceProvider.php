<?php

namespace manpreet\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanJokeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("command.manpreet.artisan-joke",function($app){
            return $app['manpreet\Commands\JokeCommand'];
        });
        $this->commands("command.manpreet.artisan-joke");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
