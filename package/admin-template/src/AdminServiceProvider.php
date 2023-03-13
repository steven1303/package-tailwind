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
        // View Source
        $this->loadViewsFrom(__DIR__.'/views','admin-templates');
    }
}