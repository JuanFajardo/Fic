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

/*Route::get('/', function () {
    return view('welcome');
});*/


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


//Route::get('reserva', 'PersonaController@index');
//Route::get('reserva/{id}', 'PersonaController@show');
//Route::post('reserva', 'PersonaController@store');
