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
        view()->composer('student', 'App\ViewComposers\StudentComposer');
        view()->composer('teacher', 'App\ViewComposers\TeacherComposer');
        view()->composer('parent', 'App\ViewComposers\ParentComposer');
    }
    
    /**
     * Register the service provider 
     */
    public function register(){
        //
    }
}