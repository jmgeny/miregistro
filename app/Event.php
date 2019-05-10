<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function athletes() {

    	return $this->belongsToMany(Athlete::class);
    }

    public function organizer() {

    	return $this->belongsTo(Organizer::class);
    }
}
