<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Set the layout that will be used with these routes
     */
    protected $layout = 'layouts.home';
    
    public function index(){
        return view($this->layout, ['content' => view('welcome')]);
    }
}
