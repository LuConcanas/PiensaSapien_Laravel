<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth\RegisterConstroller;
use Illuminate\Support\Facades\Storage;
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
    public function editFoto($id)
    {
        //
        $usuario = User::find($id);
        return view('/formModificarFoto', [ 'usuario'=>$usuario ]);
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

}*///

  public function updateUser(Request $req, $id){

  //  $usuario->avatar = $nombreDeArchivo;
 //  $usuario = User::find($req->input('idUser'));
   $usuario = User::find($id);

   //Una vez hecha la validacion armo el usuario con
   // los datos del registro.
  //$usuario->avatar = $nombreDeArchivo;
  $usuario->email= $req->input('email');
  $usuario->userName= $req->input('userName');

  $usuario->save();
  return redirect('/vistaUsuario')->with('mensaje', 'Datos  de '.$usuario->userName.' modificados con éxito');;


}
public function updateAvatarUser(request $req, $id){

  $usuario = User::find($id);
  if ($req->file('avatar')) {
    unlink(storage_path('/app/public/'.$usuario->avatar));
    $ruta = request()->file('avatar')->store('public');
    $nombreDeArchivo = basename($ruta);
    $usuario->avatar = $nombreDeArchivo;
    $usuario->save();

  }
  return redirect('/vistaUsuario');

}
public function verRanking(){
  $usuarios = User::orderBy('puntaje','desc')->limit('10')->get();
  return view('vistaRanking',compact('usuarios'));
}


}
