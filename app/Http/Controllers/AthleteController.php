<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Athlete;



class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index() {

    	$athletes = Athlete::orderBy('apellido','ASC')->paginate(10);

    	return view('athlete.index',compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('athlete.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $athlete = Athlete::create($request->all());
        $athlete->user_id = Auth::user()->id;

        if ($request->file('avatar')) {
            $path = Storage::disk('public')->put('avatar', $request->file('avatar'));
            $athlete->fill(['avatar' => asset($path)]);
        }

        $athlete->save();

        return redirect()->route('athletes.show',$athlete->id)->with('info','Se creo un nuevo athleta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Athlete $athlete)
    {

        return view('athlete.show',compact('athlete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Athlete $athlete)
    {
        return view('athlete.edit',compact('athlete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Athlete $athlete)
    {
        $athlete->update($request->all());

        if ($request->file('avatar')) {
            $path = Storage::disk('public')->put('avatar', $request->file('avatar'));
            $athlete->fill(['avatar' => asset($path)])->save();
        }
// route('athletes.show',$athlete->id)
        return redirect()->route('athletes.show',$athlete->id)
                         ->with('info','El atleta fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Athlete $athlete)
    {
        
        if ($athlete->status === 0) 
            $athlete->status = 1;
         else 
            $athlete->status = 0;
    
        $athlete->save();

        return redirect()->route('athletes.show',$athlete->id)
                         ->with('info', 'El atleta fue desactivado');
    }    
}
