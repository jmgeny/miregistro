<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = [
		'organizer_id','sport_id','nombre','fecha','descripcion','cronograma','direccion','contacto',
	];


    public function athletes() {

    	return $this->belongsToMany(Athlete::class);
    }

    public function organizer() {

    	return $this->belongsTo(Organizer::class);
    }

    public function sport() {
    	return $this->belongsTo(Sport::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

}
