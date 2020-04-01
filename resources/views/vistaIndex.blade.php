@extends("/layout/plantillaGeneral")
@section("Principal")


  <section id="HomeSection">
        <div class="titulo">
         <img src="img/piensasapien.png" alt="logo">
        </div>
        <div id="infoMasBotonJ" class="">

        <article class="">
        <p> En este juego podrás encontrar cuestionarios sobre diversas categorías y desafiar a tus amigos. <br>
            Cuantas mas preguntas correctas respondas más puntos ganás.<br>
            Demostrá tu conocimiento y continuá aprendiendo mientras jugás!!</p>
        </article>
        @guest
          @if (Route::has('register'))
            <article class="">
                <div id="botonJugar" class="" >
                  <button type="submit" name="button"> <a href={{url('/register')}}>Registrate</a> </button>
                </div>
              </article>
          @endif
        @endguest

        </div>
      </section>

       <footer class="footer">
        <div class="container" >
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Copyright 2019 | Canosa, Reale, Suarez, Yagusz. | Todos los derechos reservados.</font></font></span>
        </div>
      </footer>
  </body>
  @endsection
  </html>
