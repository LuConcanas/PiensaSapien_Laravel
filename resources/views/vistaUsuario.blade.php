@extends("/layout/plantillaGeneral")
@section("Principal")

       <div id="vistaUser" class='card bg-light col-md-6 mt-4 p-2 mx-auto'><h1>Mis datos</h1></div><br>
       
                
       <div class="card mb-6" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            @if($usuario->avatar == "")
            <img src="../../public/img/Foto_Usuario.png" class="card-img" alt="avatar">
            <!--<img src="../../public/img/Foto_Usuario.png" alt="avatar" class="rounded-circle" >
            --><!-- Saco temporalmente esto para ver como se ve una imagen: "storage/avatars/{{$usuario->avatar}}"-->
            @elseif($usuario->avatar !== null)
            <img src="storage/avatars/{{$usuario->avatar}}" class="card-img" alt="avatar" >

            @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$usuario->userName}}</h5>
              <p class="card-text"> {{$usuario->email}} </p>
              <p class="card-text"><small class="text-muted">Puntaje: {{$usuario->puntaje}}</small></p>
              <a href="/formModificarDatos/{{$usuario->idUser}}" class="btn btn-dark">Modificar datos</a>

            </div>
          </div>
        </div>
      </div>



     

       @endsection