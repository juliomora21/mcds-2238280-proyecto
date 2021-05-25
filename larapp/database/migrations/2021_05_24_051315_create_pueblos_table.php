<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePueblosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pueblos', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_pueblo');
            $table->string('pueblo');
            $table->id('id_departamento');
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
        Schema::dropIfExists('pueblos');
    }
}
