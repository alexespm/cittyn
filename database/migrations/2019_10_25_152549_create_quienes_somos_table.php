<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuienesSomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quienes_somos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('acerca');
            $table->text('color');
            $table->text('colortext');
            $table->text('acontenido');
            $table->text('mision');
            $table->text('mcontenido');
            $table->text('vision');
            $table->text('vcontenido');
            $table->string('background'); 
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
        Schema::dropIfExists('quienes_somos');
    }
}
