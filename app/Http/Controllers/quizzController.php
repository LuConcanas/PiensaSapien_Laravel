<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Quizz;
use Illuminate\Http\Request;
use DB;

class quizzController extends Controller
{
  //ALTA Quizz GET
  public function AltaQuizz_GET($id){
    $categoria = Categoria::BuscarCategoria($id)->first();

      return view("altaQuizz",compact('categoria'));
  }


  //ALTA Quizz POST
  public function NuevoQuizz_POST(request $request , $id){
    $categoria = Categoria::BuscarCategoria($id)->first();
    //Validacion
      $this->validate($request,
        [
        "Quizzes_name"=> "required|unique:quizzes,Quizzes_name",
        ],
        [
            "required"=> "El campo es obligatorio",
            "unique"=> "La categoria ya existe",
        ]
      );
      //Crea nueva categoria.
      $quizz = new Quizz;
      if($request->hasFile('imagen')){
          $ruta = $request->file('imagen')->store('public');
          $nombreArchivo = basename($ruta);
          $quizz->imagen = $nombreArchivo;
      }
      $quizz->Quizzes_name= $request->input('Quizzes_name');
      $quizz->idCategoria= $id;
      $quizz->save();
      session()->flash('notif','Se ha guardado exitosamente. Presione "Siguiente" para añadir preguntas a su Quizz');
    //  dd($request);
      return view("altaQuizz",compact('quizz','categoria'));


  }

  public function listarQuizzes($id){
    $categoria= Categoria::BuscarCategoria($id)->first();
    $quizzes = $categoria->quizz;
    return view('selectQuizz',compact('quizzes','categoria'));
  }



}
