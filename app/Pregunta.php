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
  public function Respuesta(){
    return $this->hasMany('App\Respuesta');
  }

  public function scopeBuscarPregunta($query,$id){
    return $query->where('id','=',$id);
  }


}
