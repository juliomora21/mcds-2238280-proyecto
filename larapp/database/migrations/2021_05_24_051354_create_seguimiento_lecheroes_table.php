<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoLecheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_lecheroes', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_seguimiento_lechero');
            $table->id('id_bovino');
            $table->date('fecha_seguimiento_lechero');
            $table->integer('cantidad_leche');
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
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
        Schema::dropIfExists('seguimiento_lecheroes');
    }
}
