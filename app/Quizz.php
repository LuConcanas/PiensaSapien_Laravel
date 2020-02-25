<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    public $table = "quizzes";
    public $id = "idQuizz";
    public $guarded = [];
}
