<?php
 session_start();
?>
@extends('layouts/app')
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Rajdhani|Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <title>PiensaSapien</title>
  </head>
  <body>

  <!-- INICIO MENU -->
    <header class="menu">
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"> <img src="img/menu-icon.png" alt="" style="width:40px;"> </label>

      <nav id="barraNav">
      <ul>
        <li><a href={{url('/')}} style="text-decoration:none;">Home</a></li>
        <li><a href={{url('/contacto')}} style="text-decoration:none;">Contacto</a></li>
        <li><a href={{url('/FAQ')}} style="text-decoration:none;">F.A.Q.</a></li>
        <li><a href={{url('/categorias')}} style="text-decoration:none;">Juego</a></li>
      <!-- <?php if (isset($_SESSION)):?>
            <li><a href={{url('/register')}} style="text-decoration:none;">Registro</a></li>
             <li><a href={{url('/login')}} style="text-decoration:none;">Iniciar sesion</a></li>
        <?php endif; ?>
        <?php if (!isset($_SESSION)):?>
            <li><a href={{url('/')}} style="text-decoration:none;">Cerrar sesion</a></li>
            <li><a href={{url('/vistaUsuario')}} style="text-decoration:none;">Usuario</a></li>
       <?php endif; ?>
      -->
      @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
  @else

  <li class="nav-item dropdown" >

    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ Auth::user()->name }} <span class="caret"></span>
   </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="{{url('/vistaUsuario')}}"

        >  {{ Auth::user()->userName }}</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" >
            {{ __('Logout') }}
        </a>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

  </li>
  @endguest


</ul>
      </nav>

    </header>

  <!-- FIN MENU -->


  <section>
          @yield("Principal")
  </section>

  </body>
</html>
