<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    /**
     * Set up attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'public'
    ];
    
    /**
     * Set up date fields manipulatable by Carbon/Carbon
     */
    protected $dates = [
        'created_at', 'updated_at', 'due_at'
    ];
    
    /**
     * Set up relationships
     */
     
    /**
     * Get Polymorphic relationships
     */
    public function listable(){
        return $this->morphTo();
    }
    
    /**
     * A list belongs to an user
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    /**
     * A list has many list items
     */
    public function listitems(){
        return $this->hasMany('App\Models\ListItem');
    }
    
    /**
     * A list can have attachments
     */
    public function attachments(){
        return $this->morphMany('App\Models\Attachment', 'attachable');
    }
    
    /**
     * A list can have photos
     */
    public function photos(){
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
    
    /**
     * A list can have comments
     */
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
