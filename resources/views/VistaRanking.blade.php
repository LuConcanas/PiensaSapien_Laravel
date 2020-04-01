@extends('/layout/plantillaGeneral')
@section('Principal')
  <div class="contenedor_ranking">
    <table class="table table-striped table-border" id="tabla">}
      <caption class="titulo_tabla">TOP 10 RANKING DE JUGADORES </caption>
          <thead class="thead-dark">
              <tr>
                <th>Nombre</th>
                <th>Puntaje</th>
                {{-- <th>Avatar</th> --}}
                </tr>
                </thead>
                <tbody>
        <var>$contador=0;</var>
        @foreach ($usuarios as $usuario)
          <tr>
          <td>{{$usuario->userName}}</td>
          <td>{{$usuario->puntaje}}</td>
          {{-- <td><img src="{{$usuario->avatar}}" alt="avatar.png"></td> --}}
          <hr>
        @endforeach
        </tbody>
      </table>
    </div>
@endsection
</body>
</html>
