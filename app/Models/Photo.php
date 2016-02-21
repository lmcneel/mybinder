<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
      /**
     * Set up attributes that are mass assignable
     * 
     * @var array 
     */
    protected $fillable = [
        'uri'
    ];
    
    /**
     * Set up relationships for the Model
     */
    
    /**
     * An photo belongs to an User
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    /**
     * Get the morph relationships
     */
    public function attachable(){
        return $this->morphTo();
    }
}
