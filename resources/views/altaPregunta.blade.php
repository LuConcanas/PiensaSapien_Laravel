@extends("/layout/plantillaGeneral")
@section("Principal")

<!-- ALTA PREGUNTA -->

  <!-- TITULO -->
    <article class="container preguntas">
      <div class= "row p-2 h1 row justify-content-center">
        CARGAR NUEVA IMAGEN
      </div>
    </article>


  <!-- CUERPO -->
    <article class="container preguntas">


      <!-- ELEGIR JUEGO -->
        <div class= "row p-2 row justify-content-center">
          SELECIONAR JUEGO
        </div>

        <div class= "row p-1 justify-content-center">
          <select class= "" name="juegos" id="juego">
            <option value="1"> LOS SIMPSOM </option>
          </select>
        </div>

      <!-- CARGA IMAGEN -->
        <div class= "row p-2 row justify-content-center">
          IMAGEN
        </div>
        <div class= "row justify-content-center">
          <form method="post" action="upload.php" enctype="multipart/form-data" id="uploadForm">
            <input class ="col-12 text-center"  type="file" name="imagen" id="imagen">
          </form>
        </div>



            <div class= "row p-2 text-left">
            <div> DESCRIPCION </div>
            </div>
            <div class= "row p-1 justify-content-center">
                <input class ="col-3 text-center"  type="text" name="respuesta" id="respuesta">
            </div>

            <div class= "row p-2 text-left">
            <div class= > RESPUESTA </div>
            </div>
            <div class= "row p-1 justify-content-center">
                <input class ="col-3 text-center"  type="text" name="respuesta" id="respuesta">
            </div>

            <div class= "row p-2">
            <div> DIFICULTAD </div>
            </div>
            <div class= "row p-1 justify-content-center">
                <input class ="col-3 text-center"  type="text" name="respuesta" id="respuesta">
            </div>
        </article>

        <article class= "container">



                <!-- BOTON GUARDAR -->
                  <form action= "juego" method="GET" class = "row justify-content-center p-1">
                    <button type="submit" class="btn btn-success col-3 botonjugar "> <b>GUARDAR</b> </button>
                  </form>
                <!-- BOTON VOLVER -->
                <form action="Home.html" method="GET" class="row justify-content-center p-2">
                  <button type="submit" class="btn btn-success col-3 botonjugar"> <b>HOME</b></a> </button>
                </form>
        </article>
          <br>



@endsection
