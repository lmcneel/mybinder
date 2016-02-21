<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Set up attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'message'
    ];
    
    /**
     * Set up relationships
     */
    
    /**
     * Get the morph relationships
     */
    public function commentable(){
        return $this->morphTo();
    }
    
    /**
     * A comment belongs to an user
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
