<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Set up attributes that are mass assignable
     * 
     * @var array 
     */
    protected $fillable = [
        'name', 'description', 'start_at', 'end_at', 'due_at'
    ];
    
    /**
     * Set up dates that are manipulated by Carbon/Carbon
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'start_at', 'end_at', 'due_at'
    ];
     
    /**
     * Set up relationships for Events
     */
    
    /**
     * An event was created by an user
     */
    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'id', 'owner_id');
    }
    /**
     * An event has many users
     */
    public function users(){
        return $this->belongsToMany('App\Models\User', 'events_users');
    }
    
    /**
     * An event has one event type
     */
    public function eventType(){
        return $this->hasOne('App\Models\EventType', 'id', 'event_type_id');
    }
    
    /**
     * An event belongs to a many tables (class, activity, school)
     */
    public function eventable(){
        return $this->morphTo();
    }
    
    /**
    * An event can have many photos
    */
    public function photos(){
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
        
    /**
    * An event can have many attachments
    */
    public function attachments(){
        return $this->morphMany('App\Models\Attachment','attachable');
    }
         
    /**
    * An event can have many Comments
    */
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    
    /**
    * An event can have many lists
    */
    public function lists(){
        return $this->morphMany('App\Models\List', 'listable');
    }
    
}
