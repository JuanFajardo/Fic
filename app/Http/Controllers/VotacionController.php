<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Votacion;
class VotacionController extends Controller
{
    public function votacion(Request $request,  $id ){
      $respuesta = "";

      $ip   = \Request::ip();
      $dato = Votacion::Where('ip', '=', $ip)
                        ->where('id_artista', '=', $id)
                        ->count();
       $link = asset('index.php/artista');
       if( $dato > 1 ){
         $respuesta = array("respuesta"=>"NO");
       }else{
         $dato = new Votacion;
         $dato->id_artista= $id;
         $dato->ip        = $ip;
         $dato->voto      = 1;
         $dato->save();
         $respuesta = array("respuesta"=>"OK");
       }
      //echo ;
      return array($respuesta);
    }
}
