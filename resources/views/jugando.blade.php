@extends("/layout/plantillaGeneral")
@section("Principal")

<div class="card text-center">

  <div class="card-body">
    <h5 class="card-title">Nombre de quiz</h5>
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
