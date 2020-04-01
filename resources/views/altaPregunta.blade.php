@extends("/layout/plantillaGeneral")
@section("Principal")
@if (Auth::user()->userAdministrador)

{{-- Validacion y errores --}}
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger">
      <ul>
          <li> <small style="font-size:13px">{{ $error }}</small></li>
      </ul>
  </div>
  @endforeach

  {{-- Titulo del Quizz --}}
<div class="row p-2 h4 row justify-content-center" style="color:white">
  <h3>{{$quizz->Quizzes_name}}</h3>
</div>
{{-- Formulario para nueva pregunta --}}
<div class=""style="width:50%;margin:0 auto;padding: 1rem;background-color:grey;">
  <form class="" action="" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="">Pregunta</label>
        <input class="form-control" type="text" name="descripcion"
         value="{{old('descripcion') }}" placeholder="Ej:¿Cuánto es 2+2?">
      </div>

      <div class="form-group">
        <label for="">Respuesta Correcta:</label>
        <input class="form-control" type="text" name="opcion1"
         value="{{old('opcion1') }}" placeholder="Ej:4">
      </div>

      <div class="form-group">
        <label for="">Respuesta Incorrecta:</label>
        <input class="form-control" type="text" name="opcion2"
         value="{{old('opcion2') }}" placeholder="Ej:22">
      </div>

      <div class="form-group">
        <label for="">Respuesta Incorrecta:</label>
        <input class="form-control" type="text" name="opcion3"
          value="{{old('opcion3') }}" placeholder="Ej:-4">
      </div>

      <div class="form-group">
        <label for="">Respuesta Incorrecta:</label>
        <input class="form-control" type="text" name="opcion4"
         value="{{old('opcion4') }}" placeholder="Ej:0">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
  </form>
</div>

@endif


@endsection
