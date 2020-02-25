<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    //CARGA INICIAL
    public function CargaJuego()
    {
        return view("detalleJuego");
    }

    //CALCULAR RESULTADOS
    public function Resultados()
    {
        return view("resultadoJuego");
    }






}



