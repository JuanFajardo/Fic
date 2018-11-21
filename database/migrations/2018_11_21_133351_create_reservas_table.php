<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{

    public function up(){
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('ci');
            $table->string('celular');
            $table->string('direccion');

            $table->string('estado')->commet('reservado/vencido/entregado');
            $table->dateTime('fecha_reserva');
            $table->dateTime('fecha_vencimiento');

            $table->string('ip');
            $table->string('navegador');

            $table->integer('id_evento');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('reservas');
    }
}
