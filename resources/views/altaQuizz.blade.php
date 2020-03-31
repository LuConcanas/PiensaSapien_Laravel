@extends("/layout/plantillaGeneral")
@section("Principal")
<div class="row p-2 h4 row justify-content-center" style="color:white">
  <h3>Categoria: {{$categoria->nameCategoria}}</h3>
</div>
<!-- ALTA QUIZZ -->
    <article class="container preguntas">
      <div class="row p-2 h4 row justify-content-center">
          <form action="" method="post" enctype="multipart/form-data">
              @csrf
              @if (session()->has('notif'))
                <div class="alert alert-success" style="font-size:14px">
                  {{session()->get('notif')}}
                </div>
              @endif
              {{-- Validacion y errores --}}
              @foreach ($errors->all() as $error)
              <div class="alert alert-danger">
                  <ul>
                      <li> <small style="font-size:13px">{{ $error }}</small></li>
                  </ul>
              </div>
              @endforeach
              {{-- Input Categoria --}}
              <div class="form-group column justify-content-center">
                  <label for="">Nuevo Quizz</label>
                  <input type="text" class="form-control" name="Quizzes_name"
                        placeholder="--Nombre del Quizz--" value="{{old('Quizzes_name') }}">
              </div>
              {{-- Input imagen --}}
              <div class="form-group column justify-content-center">
                  <label for="">Seleccionar imagen</label>
                  <input class="" type="file" name="imagen" style="font-size:14px">
              </div>
              {{-- Submit button--}}
              <button type="submit" class="btn btn-dark">
                  <i class="far fa-plus-square fa-lg"></i>
                  Enviar
              </button>
              @if (session()->has('notif'))
                <button type="button" name="button" class="btn btn-dark">
                  <a href={{url("/nuevaPregunta/$quizz->id")}} style="font-size:14px; text-decoration:none;color:white">Siguiente</a>
                </button>
              @endif
              {{-- </div> --}}
          </form>
      </div>
  </article>
  @endsection

  {{-- <script type="text/javascript">
    function mostrarBoton(){
      var boton = document.getElementById("siguiente");
      boton.style.display ="block";
    }
  </script> --}}
