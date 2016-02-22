<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array 
     */
     protected $fillable = [
         'name', 'description', 'start_date', 'end_date', 'start_time', 'end_time', 'days', 'address', 'city', 'state_code', 'country_code', 'postal_code'
    ];
    
    /**
     * Date Columns manipulatable by Carbon\Carbon
     * 
     * @var array 
     */
/*     protected $dates = [
        'create_at', 'updated_at', 'start_date', 'end_date'
    ];
    */
    /**
     * The relationships for activities
     */
     
    /**
    * An Activity belongs to a user
    */
    public function owner(){
        return $this->belongsTo('App\Models\User', 'id', 'owner_id');
    }
      
    /**
    * An activity has many Users
    */
    public function users(){
        return $this->belongsToMany('App\Models\User', 'activities_users');
    }
       
    /**
    * An activity has one type
    */
    public function activityType(){
        return $this->hasOne('App\Models\ActivityType', 'id', 'activity_type_id');
    }
    
    /**
     * An activity can belong to a school
     */
    public function school(){
        return $this->belongsTo('App\Models\School');
    }
       
    /**
    * An activity can have many photos
    */
    public function photos(){
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
        
    /**
    * An activity can have many attachments
    */
    public function attachments(){
        return $this->morphMany('App\Models\Attachment','attachable');
    }
         
    /**
    * An activity can have many Comments
    */
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
        
    /**
    * An activity can have many events
    */
    public function events(){
        return $this->morphMany('App\Models\Events', 'eventable');
    }
        
    /**
    * An activity can have many lists
    */
    public function lists(){
        return $this->morphMany('App\Models\List', 'listable');
    }
}
