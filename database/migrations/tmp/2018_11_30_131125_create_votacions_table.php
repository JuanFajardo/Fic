<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotacionsTable extends Migration
{
    public function up()
    {
        Schema::create('votacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->integer('voto');
            $table->integer('id_artista');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('votacions');
    }
}
