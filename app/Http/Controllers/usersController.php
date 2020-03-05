<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth\RegisterConstroller;
//añado use auth para ver si esta logueado el usuario
use Auth;
class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


//
    public function store(Request $req){
        //instancio User
        $nuevoUsuario = new User();
        //Armo la ruta de la imagen
        $ruta = $req->file('avatar')->store('public');
        $nombreDeArchivo = basename($ruta);

         //Una vez hecha la validacion armo el usuario con
         // los datos del registro.
         $nuevoUsuario->avatar = $nombreDeArchivo;
         $nuevoUsuario->userName = $req['name'];
         $nuevoUsuario->email = $req['email'];
         $nuevoUsuario->password = $req['password'];

         //Con save() guardo el user en la db
         $nuevoUsuario->save();



            }
      public function buscarUsuarioLogueado(){
        //Traigo todos los ususarios de la db y  los almaceno en la var $usuarios
        $usuarios= User::All();
        //Recorro todos los ususarios que traje de db
        foreach ($usuarios as $usuario) {
        //veo si esta logueado,si el usuario no esta loguado devuelve null
          $usuario = Auth::user();
          //si el ususario no devuelve null lo retorna
          if($usuario!=null){

            return view("vistaUsuario",compact('usuario'));
          }else{
            return view("register");
          }
        }

      }


    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
