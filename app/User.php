<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     use Notifiable;


  //public $table = "users";
    public $primaryKey = 'idUser';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   //Agregue 'avatar' para que se pueda escribir en la db
   protected $fillable = [
    'userName', 'email', 'password','avatar',
];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relacion con tabla de quizzes resueltos.
    public function quizz_user(){
      return $this->belongsToMany(Quizz::class,'quizz_user','idUser','idQuizz');
    }

    //relacion de autoría de un quizz x.
    public function quizz(){
      return $this->hasMany('App\Quizz');
    }






}
