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
            Además podes crear tus propios cuestionarios en la categoría que desees.<br>
            Demostrá tu conocimiento y continuá aprendiendo mientras jugás!!</p>
        </article>
        <article class="">
            <div id="botonJugar" class="">
              <button type="submit" name="button"> <a href={{url('/quizzes')}}>Jugar</a> </button>
            </div>
          </article>
        </div>
      </section>

      <footer><p>Copyright 2019 | Canosa, Reale, Suarez, Yagusz. | Todos los derechos reservados.</p></footer>

  </body>
  @endsection
  </html>
