@extends("/layout/plantillaGeneral")
@section("Principal")

<!-- ALTA QUIZZ -->
    <article class="container preguntas">
      <div class="row p-2 h4 row justify-content-center">
          <form action="" method="post" enctype="multipart/form-data">
              @csrf

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
              {{-- </div> --}}
          </form>

      </div>
  </article>




@endsection
