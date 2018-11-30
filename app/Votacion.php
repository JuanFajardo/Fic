<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votacion extends Model
{
  protected $table = 'votacions';
  protected $fillable = ['id', 'ip', 'voto', 'id_artista'];
}
