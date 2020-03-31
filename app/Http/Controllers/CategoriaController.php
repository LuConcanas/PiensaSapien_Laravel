<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Quizz;
use Storage;

class CategoriaController extends Controller
{



  //ALTA CATEGORIA NUEVA GET
  public function AltaCategoria_GET(request $request)
  {

      return view("AltaCategoria");
  }
  //ALTA CATEGORIA NUEVA POST
  public function NuevaCategoria_POST(request $request)
  {

    //Validacion
      $this->validate($request,
        [
        "catNombre"=> "required|unique:categorias,nameCategoria",
        ],
        [
            "required"=> "El campo es obligatorio",
            "unique"=> "La categoria ya existe",
        ]
      );
      //Crea nueva categoria.
      $categoria = new Categoria;
      if($request->hasFile('imagen')){
          $ruta = $request->file('imagen')->store('public');
          $nombreArchivo = basename($ruta);
          $categoria->imagen = $nombreArchivo;
      }
      $categoria->nameCategoria= $request->input('catNombre');
      $categoria->save();
      session()->flash('notif','Se ha guardado exitosamente! La nueva categoria puede verse en el menu principal.');
    //dd($request);
    return view('AltaCategoria');
  }

//listado de categorias existentes
  public function listarCategorias(){
    $categorias = Categoria::all();
    return view('selectCategoria',compact('categorias'));
  }


}
