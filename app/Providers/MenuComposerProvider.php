<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer(
          'layouts._menu',
          'App\Http\ViewComposers\MenuComposer'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
