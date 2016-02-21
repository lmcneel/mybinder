<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'WelcomeController@index');
    Route::auth();

    Route::get('/home', 'HomeController@index');
    
    Route::get('/student', 'StudentController@index');
    Route::get('/teacher', 'TeacherController@index');
    Route::get('/parent', 'ParentController@index');
    Route::get('/administrator', 'AdministratorController@index');
    
    
    Route::resource('school', 'SchoolController', ['except' => ['destroy']]);
    Route::resource('schooldistrict', 'SchoolDistrictController', ['except' => ['destroy']]);
    Route::resource('class', 'ClassController', ['except' => ['destroy']]);
    Route::resource('activity', 'ActivityController', ['except' => ['destroy']]);
    Route::resource('event', 'EventController');
    Route::resource('photo', 'PhotoController');
    Route::resource('attachment', 'AttachmentController');
    Route::resource('comment', 'CommentController');
    Route::resource('list', 'ListController');
    
});
