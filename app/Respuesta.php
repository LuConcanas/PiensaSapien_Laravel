<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    public $table = "respuestas";

    public function pregunta(){
      return $this->belongsTo('App\Pregunta');
    }
}
