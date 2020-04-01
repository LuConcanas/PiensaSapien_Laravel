@extends("/layout/plantillaGeneral")
@section("Principal")

@csrf
  {{--Quizzes segun categoria seleccionada--}}
  <div class="selectQuizz">
    @foreach ($quizzes as $quizz)
          <div class="col">
            <a class="selectCategoria"
               style="background-color:purple"
               href={{url("/jugando/$quizz->id")}}>
               @if ($quizz->imagen)
                 <img src="/storage/{{$quizz->imagen}}" alt="">
               @endif
              <span>{{$quizz['Quizzes_name']}}</span>
            </a>
        </div>
    @endforeach
    @if(Auth::user()->userAdministrador)
    <div class="col"> {{--BOTON DE EDICIÓN PARA EL ADMIN --}}
      <a class="selectCategoriaAdmin" href={{url("/nuevoQuizz/$categoria[id]")}}
     style="background-color:magenta"> <span>Nuevo Quizz<br>(Admin) </span> </a>
    </div>
    @endif
  </div>
  </div>
  @endsection
  </body>
  </html>
