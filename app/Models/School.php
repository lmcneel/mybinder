<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * Set up attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'logo', 'mascot', 'mascot_uri', 'color1', 'color2', 'telephone', 'address_line1', 'address_line2', 'city', 'state_code', 'country_code',
        'postal_code', 'start_grade', 'end_grade', 'school_type'
    ];
     
    /**
     * Set up relationships
     */
    
    /**
     * A school belongs to an administrator
     */
    public function administrator(){
        return $this->belongsTo("App\Models\User", 'id', 'administrator_id');
    }
    
    /**
     * A school has many users
     */
    public function users(){
        return $this->belongsToMany('App\Models\User', 'school_user');
    }
    
    /**
     * A school has many classes
     */
    public function classes(){
        return $this->hasMany('App\Models\Classes');
    }
    
    /**
     * A school belongs to a school district
     */
    public function school_district(){
        return $this->belongsTo('App\Models\SchoolDistrict', 'id', 'school_district_id');
    }
}
