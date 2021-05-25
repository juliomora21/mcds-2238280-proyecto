<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBovinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bovinos', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_bovino');
            $table->string('nombre');
            $table->string('genero');
            $table->id('id_corral');
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso_corral');
            $table->date('fecha_salida_corral');
            $table->string('estado');
            $table->string('descripciones');
            $table->string('observaciones');
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
            $table->id('id_raza');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bovinos');
    }
}
