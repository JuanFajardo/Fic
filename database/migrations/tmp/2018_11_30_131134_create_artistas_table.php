<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistasTable extends Migration
{

    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('rama');
            $table->string('obra');
            $table->string('foto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artistas');
    }
}
