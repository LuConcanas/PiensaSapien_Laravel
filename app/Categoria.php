<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categorias";
    public $guarded = [];

    public function quizz(){
      return $this->hasMany('App\Quizz','idCategoria');
    }

    public function scopeBuscarCategoria($query,$id){
      return $query->where('id','=',$id);      
    }
}
