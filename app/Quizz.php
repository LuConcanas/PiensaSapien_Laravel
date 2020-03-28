<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
  public $table = "quizzes";
  public $guarded = [];

  public function categoria(){
    return $this->belongsTo('App\Categoria','idCategoria');
  }
  public function pregunta(){
    return $this->hasMany('App\Pregunta');
  }

  public function quizz_user(){
    return $this->belongsToMany(User::class,'quizz_user','idQuizz','idUser');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }



}
