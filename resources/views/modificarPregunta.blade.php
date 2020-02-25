@extends("/layout/plantilla");
@section("Principal");

        <!-- MODIFICAR PREGUNTAS -->
        <article class="container preguntas">
            <div class= "row p-2">
              <div> PREGUNTA Nº 1</div>
            </div>
            <div class= "row justify-content-center">
                <input class ="col-10 text-center"  type="text" name="pregunta" id="pregunta" placeholder= "¿En qué año comenzó la segunda guerra mundial?">
            </div>
            <div class= "row p-2 justify-content-center">
                <input class ="col-3 text-center"  type="text" name="pregunta1" id="pregunta1" placeholder= "1929">
                <input class ="col-3 text-center"  type="text" name="pregunta2" id="pregunta2" placeholder= "1939">
                <input class ="col-3 text-center"  type="text" name="pregunta3" id="pregunta3" placeholder= "1949">
                <input class ="col-3 text-center"  type="text" name="pregunta4" id="pregunta4" placeholder= "1959">
            </div>
            <div class= "row p-2 justify-content-center">
                <div class="col-3 text-center text-success"><input type="radio" name="primero" value="2">  </div>
                <div class="col-3 text-center text-success"><input type="radio" name="primero" value="2">  </div>
                <div class="col-3 text-center text-success"><input type="radio" name="primero" value="3">  </div>
                <div class="col-3 text-center text-success"> <input type="radio" name="primero" value="4">  </div>
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
  

@endsection;