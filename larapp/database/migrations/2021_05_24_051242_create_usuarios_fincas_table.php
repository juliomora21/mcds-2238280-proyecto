<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosFincasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_fincas', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_usuario');
            $table->id('id_finca');
            $table->id('id_rol');
            $table->string('estado');
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
        Schema::dropIfExists('usuarios_fincas');
    }
}
