<?php

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/votar', 'ArtistaController@index');
Route::get('/ver', 'ArtistaController@mostrar');
Route::get('/artista/{id}', 'VotacionController@votacion');

/******************************************************/
Route::get('Reserva', 'PreventaController@angular');
Route::put('reserva/{id}', 'PreventaController@update');
//Route::get('reserva/{id}/{cantidades}', 'PreventaController@credito');
Route::get('PreventaLista', 'PreventaController@angularlistar');
Route::get('preventa', 'PreventaController@index');
Route::get('preventa/{id}', 'PreventaController@show');
Route::post('preventa', 'PreventaController@store');


Route::get('/', 'ReservaController@angular');
Route::get('/68068b78a2583d20a0abe71c4fe38fe4', 'ReservaController@mostrar');
Route::get('/reserva', 'ReservaController@verReserva');
Route::post('/reserva', 'ReservaController@store');
Route::get('/Reservar/{id}', 'ReservaController@reservar');

Route::get('/confirmar', 'ReservaController@confirmar');
Route::post('/confirmar', 'ReservaController@confirmarPost');

Route::get('/revisar', 'ReservaController@revisar');
Route::get('/revisar/{id}', 'ReservaController@revisarGet');
Route::get('/total', 'ReservaController@total');


/******************************************************/
