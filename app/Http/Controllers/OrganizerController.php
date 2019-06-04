<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Organizer;
use App\Event;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizers = Organizer::all();
        return view('organizer.index', compact('organizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizer = Organizer::create($request->all());

        //imagen

        if ($request->file('logo')) {
            $path = Storage::disk('public')->put('image', $request->file('logo'));
            $organizer->fill(['logo' => asset($path)])->save();
        }

        return redirect()->route('organizers.show',$organizer->id)
                         ->with('info','Se creo un Organizador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Organizer $organizer)
    {
        $events = $organizer->events;

        return view('organizer.show',["events" => $events, "organizer" => $organizer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizer $organizer)
    {
        return view('organizer.edit',compact('organizer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizer $organizer)
    {
        $organizer->update($request->all());
        
        if ($request->file('logo')) {
            $path = Storage::disk('public')->put('image', $request->file('logo'));
            $organizer->fill(['logo' => asset($path)])->save();
        }

        return redirect()->route('organizers.show',compact('organizer'))
                         ->with('info','Se edito el Organizador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
