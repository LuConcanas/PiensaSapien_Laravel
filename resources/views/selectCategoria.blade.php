@extends("/layout/plantillaGeneral")
@section("Principal")

  @php
    //COLORES PARA EL BACKGROUND DE LOS DIVS
    $color = ['#fdd22a','#96c11f','#e61c67','#574696','#009fe3','#ee7202'];
    //JSON INVISIBLE DE CATEGORIAS PARA PASAR A JS
    $cat = json_encode($categorias);
    echo "<div id='cat' style='display:none;'>".$cat."</div>";
    //JSON INVISIBLE DE QUIZZES PARA PASAR A JS
    $quiz = json_encode($quizzes);
    echo "<div id='quiz' style='display:none;'>".$quiz."</div>";
  @endphp


  @csrf
  <div class="menuCategorias">
  {{--listado de categorias  --}}
  <div class="selectQuizz" id="categoriasDisponibles">
     <div class="col"> {{--BOTON DE EDICIÓN PARA EL ADMIN --}}
      <a class="selectCategoriaAdmin" href={{url('/agregarCategoria')}}
     style="background-color:magenta"> <span>Nueva Categoria<br>(Admin) </span> </a>
    </div>
    @foreach ($categorias as $categoria){{-- POR CADA CATEGORIA EN DB SE CREA UN DIV --}}
      <div class="col">
        <div class="selectCategoria"
           id='{{ $categoria['id'] }}'{{--SE LE ASIGNA EL MISMO ID QUE A SU "DOBLE" EN LA DB--}}
           style="background-color:purple"
           onclick="ocultarMenu()">{{-- EVENTO DE JAVASCRIPT PARA INTERCAMBIAR LAS VISIBILIDAD DE LOS MENUS --}}
          @if ($categoria->imagen)
            <img src="/storage/{{$categoria->imagen}}" alt="">
          @endif
          <span>{{$categoria['nameCategoria']}}</span>
        </div>
    </div>
    @endforeach
  </div>


  {{--Quizzes segun categoria seleccionada(INVISIBLES HASTA QUE SE SELECCIONA UNA CATEGORIA) --}}
  <div class="selectQuizz" id="quizzesDisponibles" style="display:none">
    <div class="col"> {{--BOTON DE EDICIÓN PARA EL ADMIN --}}
      <a class="selectCategoriaAdmin" href={{url('/nuevoQuizz')}}
     style="background-color:magenta"> <span>Nuevo Quizz<br>(Admin) </span> </a>
    </div>
    @foreach ($quizzes as $quizz)
      {{-- SEGUN LA CATEGORIA SELECCIONADA, VISIBILIZA↓↓↓↓↓ LOS QUIZZES CON EL ID CORRESPONDIENTE --}}
      @if ($quizz['idCategoria']='<script type="text/javascript">event.target.id</script>')
        <div class="col">
          <div class="selectCategoria"
             style="background-color:purple">
            <span>{{$quizz['Quizzes_name']}}</span>
          </div>
      </div>
      @endif
    @endforeach
  </div>
</div>
@endsection
{{-- ACA ESTA EL ENLACE A JAVASCRIPT↓↓↓↓ --}}
<script type="text/javascript" src="/js/selectCategoria.js"></script>
</body>
</html>
