<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //Pagina Principal
    public function verIndex(){
      return view("vistaIndex");
    }

    public function verContacto(){
      return view("vistaContacto");
    }

    public function verFAQ(){
      return view("vistaFAQ");
    }

    public function verRegistro(){
      return view("auth/register");
    }

    


}
