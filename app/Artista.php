<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
  protected $table = 'artistas';
  protected $fillable = ['id', 'nombre', 'rama', 'obra', 'foto'];
}
