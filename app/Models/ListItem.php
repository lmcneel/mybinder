<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    /**
     * Set up attributes that are mass assignable
     */
    protected $fillable = [
        'title', 'description', 'start_at', 'end_at', 'due_at'
    ];
    
    /**
     * Set up dates that are manipulatable by Carbon\Carbon
     */
    protected $dates = [
        'created_at', 'updated_at', 'start_at', 'end_at', 'due_at'
    ];
    
    /**
     * Set up relations for list items
     */
    
    /**
     * A list item belongs to a List 
     */
    public function list(){
        return $this->belongsTo('App\Models\List');
    }
    
    /**
     * A list item can have attachments
     */
    public function attachments(){
        return $this->morphMany('App\Models\Attachment', 'attachable');
    }
    
    /**
     * A list item can have photos
     */
    public function photos(){
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
    
    /**
     * A list item can have comments
     */
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
