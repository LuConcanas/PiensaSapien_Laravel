@extends("/layout/plantillaGeneral")
@section("Principal")
<div class="container" >
<div id="vistaUser" class="card bg-light col-md-6 mt-4 p-2 mx-auto">
<form action="/modificarFoto/{{$usuario->idUser}}" method="put" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

            <div class="col-md-6">
            <input type="file" name="avatar" id="" valeu="{{$usuario->avatar}}">
            <br> 
            </div>
 <div  class="col-md-6 offset-md-4">
            <button class="btn btn-dark">Guardar</button>


    </form>
 </div>
    </div>
        @endsection
        
