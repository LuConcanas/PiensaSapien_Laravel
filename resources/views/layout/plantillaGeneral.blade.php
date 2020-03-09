<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <title>PiensaSapien</title>
  </head>
  <body>

  <!-- INICIO MENU -->
    <header class="menu">
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"> <img src="img/menu-icon.png" alt="" style="width:40px;"> </label>

      <nav>
      <ul>
        <li><a href={{url('/')}} style="text-decoration:none;">Home</a></li>
        <li><a href={{url('/contacto')}} style="text-decoration:none;">Contacto</a></li>
        <li><a href={{url('/FAQ')}} style="text-decoration:none;">F.A.Q.</a></li>
        <li><a href={{url('/juego')}} style="text-decoration:none;">Juego</a></li>
       <?php if (!isset($_SESSION["nombre"])):?>
            <li><a href={{url('/register')}} style="text-decoration:none;">Registro</a></li>
             <li><a href={{url('/login')}} style="text-decoration:none;">Iniciar sesion</a></li>
        <?php endif; ?>
        <?php if (isset($_SESSION["nombre"])):?>
            <li><a href={{url('/')}} style="text-decoration:none;">Cerrar sesion</a></li>
            <li><a href={{url('/vistaUsuario')}} style="text-decoration:none;">Usuario</a></li>
       <?php endif; ?>


      </ul>
      </nav>

    </header>

  <!-- FIN MENU -->


  <section>
          @yield("Principal");
  </section>

  </body>
</html>
