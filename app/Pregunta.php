<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  public $table = "preguntas";
  public $guarded = [];

  public function quizz(){
    return $this->belongsTo('App\Quizz');
  }



}
