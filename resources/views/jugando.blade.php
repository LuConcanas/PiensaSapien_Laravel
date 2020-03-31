@extends("/layout/plantillaGeneral")
@section("Principal")

<div class="card text-center" id="contenido">

  <div class="card-body">
    <h5 class="card-title">{{$quiz->Quizzes_name}}</h5>
    <div id="pregunta"></div>
    <div id="respuestas">

    </div>
  <input type="button" value="Responder" id="boton">
  <p id="resolucion"></p>
  </div>

</div>


<script type="text/javascript" src="{{asset('js/juego.js')}}">

</script>

@endsection
