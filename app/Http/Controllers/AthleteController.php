<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Athlete;

class AthleteController extends Controller
{
    public function index() {

    	$athletes = Athlete::all();

    	return view('athlete.index',compact('athletes'));
    }
}
