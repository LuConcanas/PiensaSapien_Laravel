<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Rutas del Index(Este era el home de la etapa anterior)
Route::get('/', "indexController@verIndex");
//RUTA CONTACTO
Route::get('/contacto', "indexController@verContacto");
//RUTA FAQ
Route::get('/FAQ', "indexController@verFAQ");
//RUTA Registro
Route::get('/registro', "indexController@verRegistro");
// RUTAS JUEGO(menu)
Route::get("/categorias", "CategoriaController@listarCategorias");
Route::get("/categorias/{id}", "quizzController@listarQuizzes");

//rutas JUEGO
Route::get("/juego", "JuegoController@CargaJuego");
Route::get("/resultados", "JuegoController@Resultados");

// ABM categorias
Route::get("/agregarCategoria", "CategoriaController@AltaCategoria_GET");
Route::post("/agregarCategoria", "CategoriaController@NuevaCategoria_POST");
//ABM Quizz
Route::get("/nuevoQuizz", "quizzController@AltaQuizz_GET");
Route::post("/nuevoQuizz", "quizzController@NuevoQuizz_POST");
// RUTAS PREGUNTAS (ABM)
Route::get("/indexP","PreguntasController@index");
Route::get("/modificar", "PreguntasController@Modificar");
Route::get("/nuevaPregunta", "PreguntasController@AltaPregunta");
Route::get("/nuevoJuego", "PreguntasController@AltaJuego");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//RUTAS USUARIO
//Route::get('/vistaUsuario', 'usersController@buscarUsuarioLogueado');

Route::get('/vistaUsuario', 'usersController@index');
//Route::get('/vistaUsuario/{{usuario->idUser}}',  function($id){
//$vac = compact('idUser');
//    return view('/formModificarDatos', $vac );
//});
Route::get('/formModificarDatos/{idUser}', 'usersController@edit');
Route::get('/modificarDatos/{idUser}', 'usersController@updateUser');
Route::get('/formModificarFoto/{idUser}', 'usersController@editFoto');
Route::get('/modificarFoto/{idUser}', 'usersController@updateAvatarUser');


//Route::post('/modificarDatos', 'usersController@updateUser');


//Ruta para el juego (por ahora solo con html y js)
Route::get('/jugando', function (){
    return view('/jugando');
  });