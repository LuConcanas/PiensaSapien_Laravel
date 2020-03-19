
@extends("/layout/plantillaGeneral")
@section("Principal")
<div id="vistaUser" class="card bg-light col-md-6 mt-4 p-2 mx-auto">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf

            {{-- Campo para modificar userName --}}
             <div class="form-group row">
                <label for="userName" class="col-md-4 col-form-label text-md-right">Nombre de usuario:</label>
                 <br>
                <div class="col-md-6">
                    <input type="text" class="form-control" 
                    name="userName"  value="{{ $usuario->userName }}"
                    id="userName" placeholder="Agregar nombre de usuario" 
                    required><br>     
                </div>
           {{-- Campo para modificar email --}}
           <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right"> {{__('E-mail')}} </label>

            <div class="col-md-6">
                <input type="text" class="form-control" 
                name="email"  value="{{ $usuario->email }}"
                id="email" placeholder="E-mail" 
                required><br>        
            </div>
          {{-- Campo para agregar o modificar avatar--}}
          <div class="form-group row">
            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

            <div class="col-md-6">
            <input type="file" name="avatar" id="">
            <br>
            </div>
        </div>
        </div>
        <div  class="col-md-6 offset-md-4">
            <button class="btn btn-dark">Guardar</button>

       </div>
        </div>
        @endsection
        