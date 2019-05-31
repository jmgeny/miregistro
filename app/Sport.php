<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function events() {
    	
    	return $this->hasMany(Event::class);
    }
}
