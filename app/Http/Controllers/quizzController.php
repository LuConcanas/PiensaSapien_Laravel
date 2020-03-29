<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Quizz;
use Illuminate\Http\Request;
use DB;

class quizzController extends Controller
{
  //ALTA Quizz GET
  public function AltaQuizz_GET($id)
  {
      $categoriaActual= Categoria::find($id)->first();

      return view("altaQuizz",compact('categoriaActual'));
  }
  //ALTA Quizz POST
  public function NuevoQuizz_POST(request $request)
  {

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
      $quizz->save();
    //  dd($request);
      return view("altaQuizz");


  }

  public function listarQuizzes($id){
    $categoria= Categoria::BuscarCategoria($id)->first();
    $quizzes = $categoria->quizz;
    return view('selectQuizz',compact('quizzes'));
  }



}
