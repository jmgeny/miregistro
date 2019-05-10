<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizer;
// use App\User;

class OrganizerController extends Controller
{
    public function index() {

    	$organizers = Organizer::all();

    	return view('organizer.index', compact('organizers'));
    }

    public function create() {

        // $users = User::all();

        return view('organizer.create',compact('users'));

    }

    public function store(Request $request) {

        $organizer = Organizer::create($request->all());

        return redirect()->route('organizers.edit',$organizer->id)
                         ->with('info','Se creo un Organizador');
    }

    public function edit(Organizer $organizer) {

    	return view('organizer.edit',compact('organizer'));
    }

    public function update(Request $request, Organizer $organizer) {
    	
    	$organizer->update($request->all());

    	return redirect()->route('organizers.edit',$organizer->id)
    					 ->with('info','Se edito el Organizador');
    }

}
