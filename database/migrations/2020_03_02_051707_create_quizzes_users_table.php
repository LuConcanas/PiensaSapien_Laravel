<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quizz_user', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('idUser');
          $table->unsignedBigInteger('idQuizz');
          $table->foreign('idUser')->references('idUser')->on('users');
          $table->foreign('idQuizz')->references('id')->on('quizzes');
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
        Schema::dropIfExists('quizzes_users');
    }
}
