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
        $usuario = Auth::user();
        return view('vistaUsuario',
                [
                    'usuario'=>$usuario
                ]
            );
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
            return view('vistaUsuario',compact('usuario'));
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
    public function edit($id)
    {
        //
        $usuario = User::find($id);
        return view('/formModificarDatos', [ 'usuario'=>$usuario ]);
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
/*public function editUser($usuario)
{
  $usuario = User::find($usuario);
  
  return view('/formModificarDatos',['usuario' => $usuario]);

}*/
public function updateUser(Request $req, $id){

  $usuario = User::find($id);

  $ruta = $req->file('avatar')->store('public/avatars');
  $nombreDeArchivo = basename($ruta);
    //if($req->file('avatar') ) {
    //$imageName = time().'.'.request()->avatar->getClientOriginalExtension();
    //$imagen =$req->file('avatar');
    //$imagen->getClientOriginalExtension();
   // $imageName =$req->avatar->getClientOriginalName();
   // $req->avatar->move(public_path('avatars'), $imageName);
   // }

   //Una vez hecha la validacion armo el usuario con
   // los datos del registro.
  $usuario->avatar = $nombreDeArchivo;
  $usuario->email= $req->input('email');
  $usuario->userName= $req->input('userName');
  
  
  $usuario->save();
  return redirect('/vistaUsuario')->with( 'Usuario '.$usuario->userName.' modificado con éxito');
  
            
}
   
}
