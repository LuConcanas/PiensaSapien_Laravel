<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public $table = "preguntas";
    public $id = "idPregunta";
    public $guarded = []; 
}
