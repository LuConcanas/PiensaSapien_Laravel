<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categorias";
    public $guarded = [];

    public function quizz(){
      return $this->hasMany('App\Quizz');
    }
}
