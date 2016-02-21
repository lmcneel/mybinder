<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'type_slug', 'pretty_name'
    ];
    
    /**
     * Set up relationships for ActivityType
     */
    
    /**
     * An activity type belongs to an Activity
     */
    public function activity(){
        return $this->belongsTo('App/Models/Activity', 'activity_type_id','id');
    }
}
