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
    public function Alta()
    {
        return view("AltaPregunta");
    }







}
