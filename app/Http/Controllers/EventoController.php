<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
class EventoController extends Controller
{
  /*public function __construct(){
    $this->middleware('auth');
    if( \Auth::guest() )
      return redirect('index.php/login');
  }*/

  public function angular(){

    return view('evento.index');
  }

  public function index(){
    $datos = Evento::all();
    return $datos;
  }

  public function show($id){
    $dato = Evento::find($id);
    return $dato;
  }

  public function store(Request $request){
    $request['user_id'] = 1;
    $dato = new Evento;
    $dato->fill( $request->all() );
    $dato->save();
    return response()->json(array("respuesta"=>"200_OK"));
  }

  public function update(Request $request, $id){
    $request['user_id'] = 1;
    $dato = Evento::find($id);
    $dato->fill( $request->all() );
    $dato->save();
    return response()->json(array("respuesta"=>"200_OK"));
  }
  /*
  public function destroy($id){
    $dato = Evento::find($id);
    $dato->delete();
    return response()->json(array("respuesta"=>"200_OK"));
  }*/
}
