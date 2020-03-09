<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('preguntas', function (Blueprint $table) 
      {
          $table->bigIncrements("id");
          $table->timestamps();
          $table->unsignedBigInteger('idQuizz');
          $table->foreign('idQuizz')->references('id')->on('quizzes');
          $table->string("imagen");
          $table->string("descripcion");
          $table->string("respuesta");
          $table->string("dificultad");

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}


