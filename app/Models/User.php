<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_title', 'avatar', 'birth_date', 'graduation_date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Setting up the date fields to use with Carbon/Carbon
     */
    protected $dates = ['created_at', 'updated_at', 'birth_date', 'graduation_date'];
    
    /**
    * The relationships for the users
    */
    
    /**
     * A user belongs to one role 
     * Is a student, teacher, parent or administrator
     */
     
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }
    
    /**
     * A user relationships
     */
    public function belongsToUsers(){
        return $this->belongsToMany('App\Models\User', 'user_relations', 'user_id', 'belongsTo_user_id');
    }
    
    public function hasUsers(){
        return $this->belongsToMany('App\Models\User', 'user_relations', 'belongsTo_user_id', 'user_id');
    }
    
    /**
     * A user has many events
     */
    public function createdEvents(){
        return $this->hasMany('App\Models\Event', 'owner_id', 'id');
    }
     
    /**
     * A user belongs to many Events
     */
    public function events(){
        return $this->belongsToMany('App\Models\Event', 'events_users');
    }
      
    /**
     * A user can own many activities 
     */
    public function createdActivities(){
        return $this->hasMany('App\Models\Activity', 'owner_id', 'id');
    }
      
    /**
     * A user belongs to many activities
     */
    public function activities(){
        return $this->belongsToMany('App\Models\Activity', 'activities_users');
    }
      
      
    /**
     * A user can have many school districts
     */
    public function schoolDistrict(){
        return $this->hasManyThrough('App\Models\SchoolDistrict', 'AApp\Models\Schools');
    }
      
    /**
     * A user belongs to many schools
     */
    public function schools(){
        return $this->belongsToMany('App\Models\School');
    }
       
    /**
     * A user may administrate a school 
     */
    public function mySchool(){
        return $this->hasOne('App\Models\School', 'administrator_id', 'id');
    }
       
    /**
     * A user belongs to many classes
     */
    public function classes(){
        return $this->belongsToMany('App\Models\Classes', 'class_user', 'class_id', 'user_id');
    }
        
    /**
     * A user can teach many Classes
     */
     public function teachingClasses(){
        return $this->hasMany('App\Models\Classes', 'teacher_id', 'id');
    }
         
    /**
     * A user can create many classes
     */
    public function myClasses(){
        return $this->hasMany('App\Models\Classes', 'created_by', 'id');
    }
    
    /**
     * An user can have many attachments
     */
    public function attachments(){
        return $this->hasMany('App\Models\Attachment');
    }
    
    /**
     * An user can have many photos
     */
    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }
    
    /**
     * An user can have many comments
     */
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    
    /**
     * An user can have many lists
     */
    public function lists(){
        return $this->hasMany('App\Models\List');
    }
}
