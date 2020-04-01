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

    public function buscarQuizPorId($id){
      $quiz = Quizz::find($id);
      //Me traigo todas las preguntas de todos los quizzes
      $preguntas = Pregunta::All();
      $respuestas = Respuesta::All();
      //inicializo un array vacio
      $questions= [];
      //Recorro cada pregunta
       foreach($preguntas as $pregunta){
      //Si el idQuiz de la pregunta coincide con el id del quizz
        if($pregunta->idQuizz === $quiz->id){
          foreach ($respuestas as $respuestasAPreg) {
            //Si en idPregunta es igual al id de pregunta
            if($respuestasAPreg->idPregunta === $pregunta->id){
              //Guarda esa pregunta en el array questions
             $answers[]= $respuestasAPreg;
            }
          }
      //Me guarda esa pregunta en el array questions
          $questions[] = $pregunta;
        }
       }

       return view('jugando',compact('questions','answers'));

 }

  public function juego(){

    return view('/jugando');
  }
}
