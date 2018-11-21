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
Route::get('reserva/{id}/{cantidades}', 'PreventaController@credito');
Route::get('PreventaLista', 'PreventaController@angularlistar');
Route::get('preventa', 'PreventaController@index');
Route::get('preventa/{id}', 'PreventaController@show');
Route::post('preventa', 'PreventaController@store');


Route::get('/', 'ReservaController@angular');
Route::get('/Lista', 'ReservaController@mostrar');
Route::post('/reserva', 'ReservaController@store');

Route::get('reserva', 'PersonaController@index');
Route::get('reserva/{id}', 'PersonaController@show');
//Route::post('reserva', 'PersonaController@store');
