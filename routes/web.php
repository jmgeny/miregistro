<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/prueba', function() {
	return 'Esto es el retorno';
});

Route::get('/', function () {
$fechaHoy = new DateTime();
	// $events = App\Event::orderBy('id','ASC')->paginate(10);
	// $events = App\Event::orderBy('id','ASC')->with('organizer', 'sport')->paginate(10);
	$eventsFut = App\Event::where('date', '>=', $fechaHoy->format('y-m-d'))->with('organizer', 'sport')->orderBy('date', 'ASC')->paginate(10);

	$eventPas = App\Event::where('date', '<', $fechaHoy->format('y-m-d'))->with('organizer', 'sport')->paginate(10);

    return view('welcome',[
    				'eventsFut' => $eventsFut,
    				'eventPas' => $eventPas]);

})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Organizadores
Route::get('/organizers','OrganizerController@index')->name('organizers.index');

Route::get('/organizers/create','OrganizerController@create')->name('organizers.create');
Route::post('/organizers','OrganizerController@store')->name('organizers.store');

Route::get('/organizers/{organizer}','OrganizerController@show')->name('organizers.show');

Route::get('/organizers/{organizer}/edit','OrganizerController@edit')->name('organizers.edit');
Route::put('/organizers/{organizer}','OrganizerController@update')->name('organizers.update');

Route::delete('/organizers/{organizer}','OrganizerController@destroy')->name('organizers.destroy');

// Route::resource('organizers','OrganizerController');
// Eventos
Route::get('/events','EventController@index')->name('events.index');

Route::get('/events/create','EventController@create')->name('events.create');
Route::post('/events','EventController@store')->name('events.store');

Route::get('/events/{event}','EventController@show')->name('events.show');

Route::get('/events/{event}/edit','EventController@edit')->name('events.edit');
Route::put('/events/{event}','EventController@update')->name('events.update');

Route::delete('/events/{event}','EventController@destroy')->name('events.destroy');

// Atletas

Route::get('/athletes','AthleteController@index')->name('athletes.index');

Route::get('/athletes/create','AthleteController@create')->name('athletes.create');
Route::post('/athletes','AthleteController@store')->name('athletes.store');

Route::get('/athletes/{athlete}','AthleteController@show')->name('athletes.show');

Route::get('/athletes/{athlete}/edit','AthleteController@edit')->name('athletes.edit');
Route::put('/athletes/{athlete}','AthleteController@update')->name('athletes.update');

Route::delete('/athletes/{athlete}','AthleteController@destroy')->name('athletes.destroy');

// Inscripciones
Route::get('/inscriptions/index/{event}','InscriptionController@index')->name('inscriptions.index');

Route::get('/inscriptions/create','InscriptionController@create')->name('inscriptions.create');

// Route::post('/inscriptions','InscriptionController@store')->name('inscriptions.store');

Route::get('/inscriptions/{event}','InscriptionController@show')->name('inscriptions.show');

Route::get('/inscriptions/{event}/edit','InscriptionController@edit')->name('inscriptions.edit');
// Route::get('/inscriptions/{event}','InscriptionController@registrar')->name('inscriptions.registrar');
