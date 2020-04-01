@extends("/layout/plantillaGeneral")
@section("Principal")

<!-- ALTA CATEGORIA -->
@if (Auth::user()->userAdministrador)

  <article class="">
      <div class="row p-2 h4 row justify-content-center" style="color:white">
          <form action="/agregarCategoria" method="post" enctype="multipart/form-data">
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
                  <label for="">Nueva Categoria</label>
                  <input type="text" class="form-control" name="catNombre"
                        placeholder="--Nombre de la Categoria--" value="{{old('catNombre') }}">
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


@endif

@endsection
