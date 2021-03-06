<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Athlete;
use Auth;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        $id = Auth::id();
        $athlete = Athlete::find($id);

        return view('inscription.index', compact('event','athlete'));
    }

    public function verDNI(Request $request)
    {
        
        $athletes = Athlete::where('dni','=',$request->numeroDni)->get();

        if (count($athletes) == 1) 
        {
            return redirect('login');
        } 
        else
        {
            return redirect('register');
        }
    
    }

    public function verInscripcion(Request $request)
    {
        return 'hola';
    }

    // public function athlete(Athlete $athlete){
    //     return 'athlete';
    // }

    public function inscribir(Event $event) 
    {
        $idAthlete = Auth::id();
        $athlete = Athlete::find($idAthlete);


        $event->athletes()->syncWithoutDetaching($idAthlete);

        return redirect()->route('events.show',compact('event'))
                         ->with('info','Se agrego el atleta: ' . $athlete->name);
        // return view('event.show', compact('event'));
    }

    public function borrar(Event $event) 
    {
        $idAthlete = Auth::id();
        $athlete = Athlete::find($idAthlete);


        $event->athletes()->syncWithoutDetaching($idAthlete);

        return redirect()->route('events.show',compact('event'))
                         ->with('info','Se agrego el atleta: ' . $athlete->name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->id);
        return view('inscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->event_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event) {

        return view('inscription.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        // return view('inscription.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function registrar(Event $event) {
        return view('inscription.registrar');
    }


}
