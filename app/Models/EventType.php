<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    /**
     * Set up attributes that can be mass assigned
     * 
     * @var array
     */
    protected $fillable = [
        'type_slug', 'pretty_name'
    ];
    
    /**
     * Set up relationships
     */
    
    public function event(){
        $this->belongsTo('App\Models\Event', 'id', 'event_type_id');
    }
}
