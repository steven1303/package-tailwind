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
        // View Components
        $this->loadViewsFrom(__DIR__.'/Components','admin-templates');
    }
}