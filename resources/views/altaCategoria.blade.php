@extends("/layout/plantillaGeneral")
@section("Principal")

<!-- ALTA CATEGORIA -->


    <article class="container preguntas">
      <div class= "row p-2 h1 row justify-content-center">
        <form action="/agregarCategoria" method="post">
        @csrf

            <div class="form-group row justify-content-center">
                <label for="catNombre">NUEVA CATEGORIA</label>
                <input type="text" class="form-control" name="catNombre"  value="{{old('catNombre') }}" id="catNombre" placeholder="Nombre de la Categoria">
            </div>
            <div class="form-group row justify-content-center">
                <button type="submit" class="btn btn-dark">
                    <i class="far fa-plus-square fa-lg"></i>
                    AGREGAR
                </button>
            </div>
            <div class="form-group row justify-content-center">
                <a href="/nuevaPregunta" class="btn btn-outline-secondary">
                    VOLVER
                </a>
            </div>

            <!-- SI LA VALIDACION TIENE ERRORES, LOS MUESTRO -->
            @if(count($errors))
                <div class="form-group mt-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </form>
      </div>
    </article>





@endsection
