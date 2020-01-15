<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
	protected $fillable = ['name','apellido','dni','direccion','date','genero','telefono','avatar',];

    public function events() {
    	return $this->belongsToMany(Event::class);
    }

    public function user() {
    	
    	return $this->belongsTo(User::class);
    }
}
