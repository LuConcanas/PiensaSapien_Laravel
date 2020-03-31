<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quizz;
use App\Pregunta;
use App\Respuesta;
class JuegoController extends Controller
{
  //seleccionar de una lista de quizzes
  public function verSelectQuizz(){
    return view('selectQuizz');
  }

    //CARGA INICIAL
    public function CargaJuego($id)
    {
      $quizz=Quizz::BuscarQuizz($id)->first();
      $preguntas=$quizz->pregunta;
      // foreach ($preguntas as $pregunta) {
      //   $pregunta=Pregunta::BuscarRespuesta()->first();
      // }
        dd($preguntas);
        return view("jugando");
    }

    //CALCULAR RESULTADOS
    public function Resultados()
    {
        return view("resultadoJuego");
    }






}
