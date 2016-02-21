<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    /**
     * This table has an unconventable names due to the protected word 'Class'
     * So set up the table name
     * 
     * @var string
     */
    protected $table = 'classes';
    
    /**
     * Set up attributes that are mass assignable
     * 
     * @var array 
     */
    protected $fillable = [
        'name', 'description', 'teacher_name', 'start_date', 'end_date', 'days', 'start_time', 'end_time'
    ];
    
    /**
     * Set up the dates that are maniputable with Carbon/Carbon
     * 
     * @var array 
     */
    protected $dates = [
        'created_at', 'updated_at', 'start_date', 'end_date', 'start_time', 'end_time'
    ];
    
    /**
     * Set up relationships for this Model
     */
     
    /**
     * A class belongs to a teacher
     */
    
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'id', 'teacher_id');
    }
    
    /**
     * A class was created by an user
     */
     
    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'id', 'createdBy');
    }
    
    /**
     * A class has many users (students)
     */
     
    public function users(){
        return $this->belongsToMany('App\Models\User', 'class_user');
    }
     
    /**
     * A class belongs to a school
     */
     
    public function school(){
        return $this->belongTo('App\Models\School');
    }
     
    /**
     * A class has many events
     */
    
    public function events(){
        return $this->morphMany('App\Model\Event', 'eventable');
    }
    
    /**
     * A class has many photos
     */
     
    public function photos(){
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
     
    /**
     * A class has many attachments
     */
     
    public function attachments(){
        return $this->morphMany('App\Models\Attachment', 'attachable');
    }
     
    /**
     * A class has many comments
     */
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
     
    /**
     * A class has many lists
     */
    public function lists(){
        return $this->morphMany('App\Models\List', 'listable');
    }
}
