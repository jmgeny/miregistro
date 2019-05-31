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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Organizadores
Route::get('organizers','OrganizerController@index')->name('organizers.index');
Route::get('organizers/{organizer}','OrganizerController@show')->name('organizers.show');

Route::get('organizers/create','OrganizerController@create')->name('organizers.create');
Route::post('organizers/store','OrganizerController@store')->name('organizers.store');

Route::get('organizers/{organizer}/edit','OrganizerController@edit')->name('organizers.edit');
Route::put('organizers/{organizer}','OrganizerController@update')->name('organizers.update');

// Eventos
Route::get('events', 'EventController@index')->name('events.index');
Route::get('events/{event}','EventController@show')->name('events.show');

Route::get('events/{event}/edit','EventController@edit')->name('events.edit');
Route::put('events/{event}','EventController@update')->name('events.update');

// Atletas

Route::get('athetes','AthleteController@index')->name('athletes.index');
