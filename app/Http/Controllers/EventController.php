<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index() {

    	$events = Event::withCount('athletes')->orderBy('date','DESC')->paginate(5);

    	return view('event.index',compact('events'));
        // return view('event.index');
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

       return view('event.show', ['event' => $event]);
    }
}
