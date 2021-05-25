<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBovinosGenealogicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bovinos_genealogicos', function (Blueprint $table) {
            $table->increments('id');
            $table->id('id_bovino');
            $table->id('id_bovino_padre');
            $table->id('id_bovino_madre');
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
        Schema::dropIfExists('bovinos_genealogicos');
    }
}
