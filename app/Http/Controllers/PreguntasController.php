<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    //MODIFICAR PREGUNTA EXISTENTE
    public function Modificar()
    {
        return view("modificarPregunta");
    }

    //ALTA PREGUNTA NUEVA
    public function AltaPregunta()
    {
        return view("AltaPregunta");
    }

    //ALTA JUEGO NUEVA
    public function AltaJuego()
    {
        return view("AltaJuego");
    }

    //ALTA CATEGORIA NUEVA GET
    public function AltaCategoria_GET()
    {
        return view("AltaCategoria");
    }


    
  //ALTA CATEGORIA NUEVA POST
  public function NuevaCategoria_POST(request $req)
  {
      // VALIDACION
      $this->validate($req,
        [
        "catNombre"=> "required|unique:nameCategoria|max:20",
        ],
        [
            "required"=> "El campo es obligatorio",
            "unique"=> "La categoria ya existe",
            "max"=> "Maximo 20 caracteres",
        ]
      );
        


  }



}
