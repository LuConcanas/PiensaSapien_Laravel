<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quizzes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('Quizzes_name');
          $table->unsignedBigInteger('idCategoria');
          $table->foreign('idCategoria')->references('id')->on('categorias');
          $table->unsignedBigInteger('idCreator');
          $table->foreign('idCreator')->references('idUser')->on('users');
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
        Schema::dropIfExists('quizzes');
    }
}