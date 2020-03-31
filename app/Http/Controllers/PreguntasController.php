<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quizz;
use App\Pregunta;
use App\Respuesta;


class PreguntasController extends Controller
{
    //MODIFICAR PREGUNTA EXISTENTE
    public function Modificar()
    {
        return view("modificarPregunta");
    }

    //ALTA PREGUNTA Get
    public function AltaPreguntaGET($id)
    {
      $quizz= Quizz::BuscarQuizz($id)->first();

        return view("AltaPregunta",compact('quizz'));
    }

    public function AltaPreguntaPOST(request $request, $id){
      $quizz= Quizz::BuscarQuizz($id)->first();//Sin esto no recarga la pagina despues del submit.
      //Validacion
        $this->validate($request,
          [
          "descripcion"=> "required",
          ],
          [
             "required"=> "El campo es obligatorio",
          ]
        );
        //nuevaPregunta
        $pregunta = new Pregunta;

        if($request->hasFile('imagen')){
            $ruta = $request->file('imagen')->store('public');
            $nombreArchivo = basename($ruta);
            $pregunta->imagen = $nombreArchivo;
        }
        $pregunta->descripcion= $request->input('descripcion');
        $pregunta->idQuizz=$id;
        $pregunta->save();
        //nuevas Respuestas
        $respuesta = new Respuesta;
        $respuesta->opcion1 = $request->input('opcion1');
        $respuesta->opcion2 = $request->input('opcion2');
        $respuesta->opcion3 = $request->input('opcion3');
        $respuesta->opcion4 = $request->input('opcion4');
        $respuesta->idPregunta = $pregunta->id;
        $respuesta->save();


        return view("AltaPregunta", compact('quizz'));
    }






}
