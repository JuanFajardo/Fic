<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  protected $table    = 'eventos';
  protected $fillable = ['id', 'evento', 'fecha', 'horario', 'lugar', 'descripcion'];
}
