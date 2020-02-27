<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth\RegisterConstroller;
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

         $nuevoUsuario = new User();
        //Armo la ruta de la imagen  
        // $ruta = $req->file('avatar')->store('public');
        // $nombreDeArchivo = basename($ruta);

         //Una vez hecha la validacion armo el usuario con
         // los datos del registro. 
         $nuevoUsuario->name = $req['name'];
         $nuevoUsuario->email = $req['email'];
         $nuevoUsuario->password = $req['password'];
        // $nuevoUsuario->avatar = $nombreDeArchivo;
         //Con save() guardo el user en la db
         $nuevoUsuario->save();
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
