<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoCrecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_crecimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_seguimiento_crecimiento');
            $table->id('id_bovino');
            $table->date('fecha_seguimiento_crecimiento');
            $table->integer('peso');
            $table->string('observaciones');
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
        Schema::dropIfExists('seguimiento_crecimientos');
    }
}
