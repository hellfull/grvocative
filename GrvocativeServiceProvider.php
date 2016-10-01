<?php

namespace Hellfull\Grvocative;

use Illuminate\Support\ServiceProvider;

class GrvocativeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       include __DIR__.'/Introduce.php';
	$this->app->make('Hellfull\Grvocative\Introduce');
    }
}
