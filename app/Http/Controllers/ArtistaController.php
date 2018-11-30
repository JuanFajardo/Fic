<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
class ArtistaController extends Controller
{

  public function index(){
    $datos0 = Artista::Where('rama', '=', 'PRIMARIA')->where('obra', '=', 'ARTE MUSICAL')->get();
    $datos1 = Artista::Where('rama', '=', 'SECUNDARIA')->where('obra', '=', 'ARTE ESCÉNICAS')->get();
    $datos2 = Artista::Where('rama', '=', 'PRIMARIA')->where('obra', '=', 'ARTE MUSICAL')->get();
    $datos3 = Artista::Where('rama', '=', 'SECUNDARIA')->where('obra', '=', 'ARTE ESCÉNICAS')->get();
    return view('votacion.index', compact('datos0', 'datos1', 'datos2','datos3'));
  }

  public function mostrar(){
    $datos = Artista::all();
    return view('votacion.mostrar', compact('datos'));
  }

}
