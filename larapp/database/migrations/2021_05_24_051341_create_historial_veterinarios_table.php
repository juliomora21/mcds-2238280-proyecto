<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialVeterinariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_veterinarios', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_historial_veterinario');
            $table->id('id_bovino');
            $table->date('fecha_proceso');
            $table->string('diagnostico');
            $table->string('medicamentos');
            $table->string('procedimiento');
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
        Schema::dropIfExists('historial_veterinarios');
    }
}
