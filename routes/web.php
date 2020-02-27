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

Route::get('/', function () {
    return view('welcome');
});


// RUTAS JUEGO
Route::get("/juego", "JuegoController@CargaJuego");
Route::get("/resultados", "JuegoController@Resultados");


// RUTAS PREGUNTAS (ABM)
Route::get("/modificar", "PreguntasController@Modificar");
Route::get("/nueva", "PreguntasController@Alta");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');