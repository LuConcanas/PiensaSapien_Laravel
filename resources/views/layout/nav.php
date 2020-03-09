<html>
<nav>
      <ul>
        <li><a href="Home.php" style="text-decoration:none;">Home</a></li>
        <li><a href="Usuario.php" style="text-decoration:none;">Usuario</a></li>
        <li><a href="Contacto.php" style="text-decoration:none;">Contacto</a></li>
        <li><a href="F.A.Q.php" style="text-decoration:none;">F.A.Q.</a></li>
        <li><a href="juego.php" style="text-decoration:none;">Juego</a></li>
       <?php if (!isset($_SESSION["nombre"])):?>
            <li><a href="Registro.php" style="text-decoration:none;">Registro</a></li>
             <li><a href="Login.php" style="text-decoration:none;">Iniciar sesion</a></li>
        <?php endif; ?>
        <?php if (isset($_SESSION["nombre"])):?>
            <li><a href="logout.php" style="text-decoration:none;">Cerrar sesion</a></li>
            <li><a href="crearQuiz.php" style="text-decoration:none;">Crear Pregunta</a></li>
       <?php endif; ?>


      </ul>
    </nav>


</html>
