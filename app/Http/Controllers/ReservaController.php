<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
class ReservaController extends Controller
{
  /*public function __construct(){
    $this->middleware('auth');
    if( \Auth::guest() )
      return redirect('index.php/login');
  }*/

  public function angular(){
    $eventos =  \App\Evento::all();
    return view('reserva.index', compact('eventos'));
  }

  public function index(){
    $datos = Reserva::all();
    return $datos;
  }

  public function show($id){
    $dato = Reserva::find($id);
    return $dato;
  }

  public function mostrar(){
    $datos = \DB::table('reservas')->join('eventos', 'reservas.id_evento', 'eventos.id')
                                      ->select('reservas.*', 'eventos.evento')->get();
    return view('reserva.listar', compact('datos'));
  }

  public function reservar($id){
    $dato = Reserva::find($id);
    $dato->estado =  'e';
    $dato->save();
    return back();
  }

  public function store(Request $request){
    $request['estado'] = 'r';
    $request['fecha_reserva'] = date('Y-m-d H:m:s');
    $request['fecha_vencimiento'] = '2018-11-29 10:00:00';
    $request['ip'] = \Request::ip();
    $request['navegador'] = $request->header('User-Agent');

    $request['user_id'] = 1;
    $dato = new Reserva;
    $dato->fill( $request->all() );
    $dato->save();

    $max = \DB::table('reservas')->max('id');
    $reserva = \DB::table('reservas')->join('eventos', 'reservas.id_evento', 'eventos.id')
                                      ->select('reservas.*', 'eventos.*')
                                    ->where('reservas.id', '=', $max)->get();
    $eventos = \App\Evento::all();
    return view('reserva.index', compact('eventos', 'reserva'));
  }

  public function update(Request $request, $id){
    $request['user_id'] = 1;
    $dato = Reserva::find($id);
    $dato->fill( $request->all() );
    $dato->save();
    return response()->json(array("respuesta"=>"200_OK"));
  }
  /*
  public function destroy($id){
    $dato = Reserva::find($id);
    $dato->delete();
    return response()->json(array("respuesta"=>"200_OK"));
  }*/

}
