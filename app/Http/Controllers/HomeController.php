<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DateTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fechaHoy = new DateTime();

        // $events = Event::orderBy('id','ASC')->with('organizer','sport')->paginate(3);

        $eventsFut = Event::where('date', '>=', $fechaHoy->format('y-m-d'))->with('organizer', 'sport')->orderBy('date', 'ASC')->paginate(7);

        $eventsPas = Event::where('date', '<', $fechaHoy->format('y-m-d'))->with('organizer', 'sport')->orderBy('date', 'ASC')->paginate(7);

        return view('home', ['eventsFut' => $eventsFut, 'eventsPas' => $eventsPas]);
    }
}
