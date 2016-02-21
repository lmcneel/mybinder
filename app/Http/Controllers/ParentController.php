<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ParentController extends Controller
{
    protected $layout = 'layouts.app';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /**
         * @todo Move this to middleware
         */
        
        /**
         * Check to see if user is logged in
         * If user is not logged in, log in the demo user for this role type
         */
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role()->first();
            
            //If the user is logged in and this is a demo account
            //Make sure the demo account is in the right role
            if($role->role_slug != 'parent'){
                if(str_contains($user->name, 'Demo')){
                    //This is a demo account but not a student
                    //Lets log in the student account instead
                    Auth::loginUsingId(3);
                }else{
                    return redirect('/'.$role->role_slug);
                }
            }
        }else{
            //Lets log in the demo account since they aren't authenticated
            Auth::loginUsingId(3);
        }
    }

    /**
     * Return the landing page for the Student
     */
     
    public function index(){
        return view($this->layout, ["content" => view('parent')]);
    }
}
