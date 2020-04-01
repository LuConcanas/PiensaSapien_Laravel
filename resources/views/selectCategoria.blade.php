@extends("/layout/plantillaGeneral")
@section("Principal")
  @csrf
  <div class="menuCategorias">
  {{--listado de categorias  --}}
  <div class="selectQuizz">
     @if(Auth::user()->userAdministrador)
     <div class="col"> {{--BOTON DE EDICIÓN PARA EL ADMIN --}}
      <a class="selectCategoriaAdmin" href={{url('/agregarCategoria')}}
     style="background-color:magenta"> <span>Nueva Categoria<br>(Admin) </span> </a>
     </div>
     @endif
     @foreach ($categorias as $categoria){{-- POR CADA CATEGORIA EN DB SE CREA UN DIV --}}
      <div class="col">
        <a class="selectCategoria" href={{url("/categorias/$categoria->id")}}
           id='{{ $categoria['id'] }}'{{--SE LE ASIGNA EL MISMO ID QUE A SU "DOBLE" EN LA DB--}}
           style="background-color:purple">
          @if ($categoria->imagen)
            <img src="/storage/{{$categoria->imagen}}" alt="">
          @endif
          <span>{{$categoria['nameCategoria']}}</span>
        </a>
    </div>
    @endforeach
  </div>
@endsection
</body>
</html>
