<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{

    protected $fillable = [
        'nombre', 'mail', 'direccion','telefono','logo','status','user_id',
    ];

    public function events() {
    	
    	return $this->hasMany(Event::class);
    }
    
    public function user() {
    	return $this->belongsTo(User::class);
    }    
}
