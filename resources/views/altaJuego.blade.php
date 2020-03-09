@extends("/layout/plantillaGeneral")
@section("Principal")

<!-- ALTA JUEGO -->

  <!-- TITULO -->
    <article class="container preguntas">
      <div class= "row p-2 h1 row justify-content-center">
        CREAR JUEGO NUEVO
      </div>
    </article>


  <!-- CUERPO -->

    <!-- CARGAR CATEGORIA -->
        <article class="container preguntas">

            <div class= "row p-1 row justify-content-center h6">
                CATEGORIA
            </div>

            <div class= "row p-1 justify-content-center">
                <select class= "btn btn-secondary col-3" name="juegos" id="juego">
                    <option value="1"> DIBUJOS </option>
                </select>
            </div>

            <div class= "row p-1 justify-content-center">
                <form action= "/agregarCategoria" method="GET" class = "row p-2 justify-content-center">
                    <button type="submit" class="btn btn-secondary col-12"> NUEVA CATEGORIA </button>
                </form>
            </div>
        </article>



    <!-- CARGA IMAGEN PRESENTACION -->

        <article class="container preguntas">
            <div class= "row p-1 row justify-content-center h6">
                IMAGEN PRESENTACION
            </div>

            <div class= "row p-1 justify-content-center">
                <form method="post" action="upload.php" enctype="multipart/form-data" id="uploadForm">
                    <input class ="col-12 text-center"  type="file" name="imagen" id="imagen">
                </form>
            </div>
        </article>

    <article class="container preguntas">

        <!-- CARGA NOMBRE JUEGO -->
            <div class= "row p-1 justify-content-center h6">
                NOMBRE DEL JUEGO
            </div>

            <div class= "row p-1 justify-content-center">
                <input class ="col-3 text-center"  type="text" name="respuesta" id="respuesta">
            </div>
    </article>





    <!-- BOTONES -->
        <article class= "container">
                <!-- BOTON GUARDAR -->
                  <form action= "juego" method="GET" class = "row justify-content-center p-1">
                    <button type="submit" class="btn btn-primary col-3 botonjugar "> <b>GUARDAR</b> </button>
                  </form>
                <!-- BOTON VOLVER -->
                <form action="Home.html" method="GET" class="row justify-content-center p-2">
                  <button type="submit" class="btn btn-primary col-3 botonjugar"> <b>HOME</b></a> </button>
                </form>
        </article>
        <br>



@endsection;
