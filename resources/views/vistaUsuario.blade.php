@extends("/layout/plantillaGeneral")
@section("Principal")

       <div  class='col-md-4 mt-2 p-0 mx-auto' id="h1vistaUser"><h1 class="text-center">Mis datos</h1></div><br>
       <div id="contenedorUser">
       <div class="text-center" id="fotoUser">
        @if($usuario->avatar == " ")
        <img class="card-img" src="/img/Foto_Usuario.png" class="rounded-circle" alt="avatar">
        <!--<img src="../../public/img/Foto_Usuario.png" alt="avatar" class="rounded-circle" >
        {{-- --><!-- Saco temporalmente esto para ver como se ve una imagen: "storage/avatars/{{$usuario->avatar}}"--> --}}
        @elseif($usuario->avatar !== null)
        <img class="rounded-circle" id="imgVistaUsuario" src="/storage/{{$usuario->avatar}}"  alt="avatar" >

        @endif
        {{-- Opcion modificar la comento temporalmente--}}
        {{-- <div>
          <a href="/formModificarFoto/{{$usuario->idUser}}" class="btn btn-dark">Modificar foto</a>

        </div> --}}
      </div>



        <div  class='col-md-6 mt-4 p-0'  id="datosVistaUser">

          <div class="col-md-8 text-center">
            <div class="card-body" >
              <h5 class="card-title">{{$usuario->userName}}</h5>
              <p class="card-text"> {{$usuario->email}} </p>
              <p class="card-text"><small class="text-muted">Puntaje: {{$usuario->puntaje}}</small></p>
              <p class="card-text"><small class="text-muted">Quizes resueltos: {{--  Pendiente   --}} {{$usuario->puntaje}}</small></p>
              <p class="card-text"><small class="text-muted">Posicion en ranking: {{--  Pendiente  --}} {{$usuario->puntaje}}</small></p>

              <a href="/formModificarDatos/{{$usuario->idUser}}" class="btn btn-dark">Modificar datos</a>

            </div>

        </div>

      </div>

    </div>



       @endsection
