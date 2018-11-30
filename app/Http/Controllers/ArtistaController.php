<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
class ArtistaController extends Controller
{

  public function index(){
    $datos = Artista::all();
    return view('votacion.index', compact('datos'));
  }

  public function mostrar(){
    $datos = Artista::all();
    return view('votacion.mostrar', compact('datos'));
  }

}
