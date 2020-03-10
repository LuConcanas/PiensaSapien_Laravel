@extends("/layout/plantillaGeneral")
@section("Principal")
  <div style="text-align:center;margin-top:20px;">
  <h3>Categorías</h3>

  <div class="selectQuizz">
  	<a class="yellow" href={{url('/juego')}}><img src="img/logoSimpsons.png" alt="Los simpsons"></a>
  	<a class="green" href="#">No disponible</a>
  	<a class="pink" href="#">No disponible</a>
  	<a class="purple" href="#">No diponible</a>
  	<a class="blue" href="#">No Disponible</a>
  	<a class="orange" href="#">No disponible</a>
  </div>
@endsection

</body>
</html>
