<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = [
		'organizer_id','sport_id','specification_id','name','date','description','cronograma','direccion','contacto',
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

    public function specification() {
        return $this->belongsTo(Specification::class);
    }    

    public function city() {
        return $this->belongsTo(City::class);
    }

}
