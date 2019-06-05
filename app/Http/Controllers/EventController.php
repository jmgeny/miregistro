<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index() {

    	$events = Event::orderBy('fecha','DESC')->paginate(5);

    	return view('event.index',compact('events'));
    }

    public function create() {
        return view('event.create');
    }

    public function store(Request $request) {

        $event = Event::create($request->all());

        return redirect()->route('events.show',$event->id)
                         ->with('info','Se creo un nuevo evento');
    }

    public function edit(Event $event) {

    	return view('event.edit', compact('event'));
    }

    public function update(Request $request, Event $event) {

    	$event->update($request->all());

    	return redirect()->route('events.show',$event->id)
                          ->with('info','Se actualizo el Evento'); 
    }

    public function show(Event $event) {

        return view('event.show', compact('event'));
    }
}
