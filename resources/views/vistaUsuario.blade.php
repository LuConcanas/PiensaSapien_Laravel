@extends("/layout/plantillaGeneral")
@section("Principal")
 <div id="vistaUser" class="card bg-light col-md-7 mt-5 p-3 mx-auto"><h1 >Tus datos</h1></div>
 <br>   

   <div id="vistaUser" class="card bg-light col-md-7 mt-5 p-3 mx-auto">
      <h4>Avatar:</h4>
      <div class="card-img-top">
      <img src="storage/avatars/{{$usuario->avatar}}" alt="avatar"></div>

   </div>
    
    
        @if($usuario->userName != "")
        <div id="vistaUser"  class="card bg-light col-md-7 mt-5 p-3 mx-auto">
        <h3>Nombre de usuario {{$usuario->userName}} </h3>
    </div>
        @endif
   
   
   <div id="vistaUser" class="card bg-light col-md-7 mt-5 p-3 mx-auto" >
       <h3>E-mail: {{$usuario->email}} </h3>
       </div>
      <!--
        ruta a otro form, no funciona
        <div class="card bg-light col-md-2 mt-5 p-3 mx-auto" >
       <a href="/formModificarDatos/{{$usuario->idUser}}" class="btn btn-dark">Modificar datos</a>
       </div>-->
       <br>
      
       <br>
       <div id="vistaUser" class='card bg-light col-md-6 mt-4 p-2 mx-auto'><h4>Modificar datos</h4></div>
       
       <div id="vistaUser" class="card bg-light col-md-6 mt-4 p-2 mx-auto">
           <form action="" method="post" enctype="multipart/form-data">
               @csrf
       
               <div class="form-group">
                   <label for="userName">Nombre de usuario:</label>
                    <br>
                   <input type="text" class="form-control" 
                    name="userName"  value="{{ $usuario->userName }}"
                    id="userName" placeholder="Agregar nombre de usuario" 
                    required>
                   <br>
                   <label for="email">E-mail</label>
                    <br>
                   <input type="text" class="form-control" 
                    name="email"  value="{{ $usuario->email }}"
                    id="email" placeholder="E-mail" 
                    required>
                    <br>
                   <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                    <br>
                   <div class="col-md-6">
                   <input type="file" name="avatar" id="">
                   </div>
               </div>
               <div>
                   <button class="btn btn-dark">Guardar</button>
       
              </div>
               </div>
       
               
     

       @endsection