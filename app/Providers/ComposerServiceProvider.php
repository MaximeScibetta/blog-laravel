<?php

namespace Blog\Providers;

use Illuminate\Support\ServiceProvider;
use Blog\Http\ViewComposers\SidebarComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer(
            'partials.sidebar-module-archive',
            SidebarComposer::class
        );
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
