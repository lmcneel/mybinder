<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider{
    /**
     * Register bindings in the container
     * 
     * @return void 
     */
    public function boot(){
        //Using class based Composers 
        view()->composer([
        
        ]);
    }
    
    /**
     * Register the service provider 
     */
    public function register(){
        //
    }
}