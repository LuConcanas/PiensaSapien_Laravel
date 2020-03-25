@extends("/layout/plantillaGeneral")
@section("Principal")

  @php
    $color = ['#fdd22a','#96c11f','#e61c67','#574696','#009fe3','#ee7202'];

  @endphp
  @csrf
  <div class="menuCategorias">
  {{--listado de categorias  --}}
  <div class="selectQuizz" id="categoriasDisponibles">
    <div class="col">
      <a class="selectCategoria" href={{url('/agregarCategoria')}}
     style="background-color:magenta"> <span>Nueva Categoria<br>(Admin) </span> </a>
    </div>
    @foreach ($categorias as $categoria)
      <div class="col">
          <a class="selectCategoria" onclick="mostrarOcultar();" href="#"
           style="background-color:purple">
          @if ($categoria->imagen)
            <img src="/storage/{{$categoria->imagen}}" alt="">
          @endif
          <span>{{$categoria['nameCategoria']}}</span>
         </a>
    </div>
    @endforeach
  </div>
  {{--Quizzes segun categoria seleccionada --}}
  <div class="selectQuizz" id="quizzesDisponibles">
    <div class="col">
      <a class="selectCategoria" href={{url('/nuevoQuizz')}}
     style="background-color:magenta"> <span>Nuevo Quizz<br>(Admin) </span> </a>
    </div>
    @foreach ($quizzes as $quizz)
      <div class="col">
        <span>prueba</span>
          {{-- <a class="selectCategoria" href="{{route('categoria', ['id' => $categoria['id']])}}"
           style="background-color:purple">
          @if ($categoria->imagen)
            <img src="/storage/{{$categoria->imagen}}" alt="">
          @endif
          <span>{{$categoria['nameCategoria']}}</span>
         </a> --}}
    </div>
    @endforeach
  </div>

</div>
@endsection

</body>
</html>

<script type="text/javascript" src="/js/selectCategoria.js"></script>
