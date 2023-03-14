<?php

namespace Steven1303\AdminTemplate;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    
    public function boot()
    {
        // Route
        $this->loadRoutesFrom(__DIR__.'/routes/test.php');

        // View Source
        $this->loadViewsFrom(__DIR__.'/views','admin-templates');
    }
}