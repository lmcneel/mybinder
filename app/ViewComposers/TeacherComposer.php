<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use Illuminate\Contracts\Auth\Guard;
use Carbon\Carbon;

class TeacherComposer{
    
    /**
     * The User Model comes from Guard
     * 
     * @var users;
     */
     
    protected $auth;
    protected $user;
    protected $classes;
    protected $activities;
    
    public function __construct(Guard $auth){
        $this->auth = $auth;
        $this->user = $this->auth->user();
        $this->classes = $this->auth->user()->classes()->with('Events')->get();
        $this->activities = $this->auth->user()->activities()->with('Events')->get();
    }
    
    public function compose(View $view){
        $today = Carbon::now();
        
        
        $view->withUser($this->user)->withToday($today)->withClasses($this->classes)->withActivities($this->activities);
    }
}