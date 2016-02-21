<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Set up the attributes that are mass fillable
     * 
     * @var array
     */
    protected $fillable = [
        'role_slug', 'pretty_name'
    ];
    
    /**
     * Set up relationships
     */
    
    /**
     * A role has many users
     */
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
