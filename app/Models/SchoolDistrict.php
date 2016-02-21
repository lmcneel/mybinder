<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolDistrict extends Model
{
    /**
     * Set up attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'geolat', 'geolong', 'address_line1', 'address_line2', 'city', 'state_code', 'country_code', 'postal_code', 'telephone'
    ];
     
    /**
     * Set up relationships
     */
    
    /**
     * A school district belongs to an administrator
     */
    public function administrator(){
        return $this->belongsTo('App\Models\User', 'id', 'administrator_id');
    }
    
    /**
     * A school district has many schools 
     */
    public function schools(){
        return $this->hasMany("App\Models\Schools");
    }
}
