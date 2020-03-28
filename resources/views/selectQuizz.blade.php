@extends("/layout/plantillaGeneral")
@section("Principal")
@csrf
  {{--Quizzes segun categoria seleccionada(INVISIBLES HASTA QUE SE SELECCIONA UNA CATEGORIA) --}}
  <div class="selectQuizz">
    <div class="col"> {{--BOTON DE EDICIÓN PARA EL ADMIN --}}
      <a class="selectCategoriaAdmin" href={{url('/nuevoQuizz')}}
     style="background-color:magenta"> <span>Nuevo Quizz<br>(Admin) </span> </a>
    </div>
    @foreach ($quizzes as $quizz)
          <div class="col">
            <div class="selectCategoria"
               style="background-color:purple">
              <span>{{$quizz['Quizzes_name']}}</span>
            </div>
        </div>
    @endforeach
  </div>
  </div>
  @endsection
  </body>
  </html>
