<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  protected $table    = 'reservas';
  protected $fillable = ['id', 'nombres', 'ci', 'celular', 'estado', 'fecha_reserva', 'fecha_vencimiento', 'ip', 'navegador', 'id_evento'];
}
