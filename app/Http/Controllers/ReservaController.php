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

  public function verReserva(){
    $eventos =  \App\Evento::all();
    return view('reserva.reserva', compact('eventos'));

  }

  public function show($id){
    $dato = Reserva::find($id);
    return $dato;
  }

  public function mostrar(){
    $datos = \DB::table('reservas')->join('eventos', 'reservas.id_evento', 'eventos.id')
                                      ->select('reservas.*', 'eventos.evento')->get();
    $jueves  = \DB::table('reservas')->where('id_evento', '=', '1')->count();
    $viernes = \DB::table('reservas')->where('id_evento', '=', '2')->count();
    $sabado  = \DB::table('reservas')->where('id_evento', '=', '3')->count();
    return view('reserva.listar', compact('datos', 'jueves', 'viernes', 'sabado'));
  }

  public function reservar($id){
    $dato = Reserva::find($id);
    $dato->estado =  'e';
    $dato->save();
    return back();
  }

  public function store(Request $request){
    //return $request->all();
    $id_evento = "";
    if( isset($request->id_evento1) ){
      $id_evento = 1;
    }elseif( isset($request->id_evento2) ){
      $id_evento = 2;
    }elseif( isset($request->id_evento3) ){
      $id_evento = 3;
    }

    $numero = Reserva::Where('ci', '=', $request->ci)
                       ->where('celular', '=', $request->celular)
                       //->where('id_evento', '=', $id_evento)
                       ->count();

    if($numero > 0){
      return "<script>
                alert('¡ Ya se registro para este evento !');
                location.href = '".asset('/index.php')."';
              </script>
             ";
    }else{
      $request['estado'] = 'r';
      $request['fecha_reserva'] = date('Y-m-d H:m:s');
      $request['fecha_vencimiento'] = '2018-11-29 10:00:00';
      $request['ip'] = \Request::ip();
      $request['navegador'] = $request->header('User-Agent');
      $request['user_id'] = 1;

      if( isset($request->id_evento1) ){
        $request['id_evento'] = 1;
        $dato = new Reserva;
        $dato->fill( $request->all() );
        $dato->save();
      }
      if( isset($request->id_evento2) ){
        $request['id_evento'] = 2;
        $dato = new Reserva;
        $dato->fill( $request->all() );
        $dato->save();
      }
      if( isset($request->id_evento3) ){
        $request['id_evento'] = 3;
        $dato = new Reserva;
        $dato->fill( $request->all() );
        $dato->save();
      }

      $max = \DB::table('reservas')->max('id');
      $reservas = \DB::table('reservas')->join('eventos', 'reservas.id_evento', 'eventos.id')
                                       ->select('reservas.*', 'eventos.*')
                                       ->where('reservas.ci', '=', $request->ci)
                                       ->where('reservas.celular', '=', $request->celular)
                                       ->get();
      $eventos = \App\Evento::all();

      return view('reserva.mensaje', compact('eventos', 'reservas'));
    }
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
