@extends("/layout/plantillaGeneral")
@section("Principal")
@php
  foreach ($questions as $question) {
    $preg[]= [$question['descripcion']];
  }

  foreach ($answers as $answer) {
    $resp[]=[$answer['opcion1'],$answer['opcion2'],$answer['opcion3'],$answer['opcion4']];
  }

  $preguntas=json_encode($preg);
  $respuestas=json_encode($resp);
@endphp
<div id="preguntaX" style="display:none">{{$preguntas}}</div>
<div id="respuestasX"style="display:none">
  {{$respuestas}}
</div>
<div class="card text-center" id="contenido">

  <div class="card-body">
    <h5 class="card-title"></h5>
    <div id="pregunta"></div>
    <div id="respuestas"></div>
  <input type="button" value="Responder" id="boton">
  <p id="resolucion"></p>
  </div>

</div>

<script type="text/javascript" src="{{asset('js/juego.js')}}">

</script>
@endsection
