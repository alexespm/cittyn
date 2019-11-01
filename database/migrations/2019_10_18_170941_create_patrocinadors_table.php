<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrocinadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrocinadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('logo_patrocinador');
            $table->string('contenido_patrocinador');
            $table->string('background');
            $table->string('color');
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
        Schema::dropIfExists('patrocinadors');
    }
}
