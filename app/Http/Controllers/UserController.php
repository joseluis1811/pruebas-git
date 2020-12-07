<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\User;
use App\Tipo_kit;

class UserController extends Controller
{

    public function formulario_registrar(){

        return view('dashboard.usuario.crear');
    }



    public function mostrar_tabla(){

        $usuarios = User::paginate(3);
        return view('dashboard.usuario.registrados', compact('usuarios'));
    }

   

    public function guardar_usuario(Request $request){

        $request->validate([
            'dni' => 'required',
            'nombres' => 'required',
            'sexo'=> 'required',
            'telefono'=> 'required',
            'edad' => 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required|min:8|confirmed',
        ]);

        $usuario = new User;

        $usuario->dni = $request->dni;
        $usuario->nombres = $request->nombres;
        $usuario->sexo = $request->sexo;
        $usuario->telefono = $request->telefono;
        $usuario->edad = $request->edad;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        return back()->with('flash', "Se ha guardado el usuario Correctamente");
    }


    public function editar(Request $request){
        
        $usuario = User::where('id',$request->id)->firstOrFail();

        $tipo_kit = Tipo_kit::all();
        
        return view('dashboard.usuario.editar',compact("usuario", 'tipo_kit'));
    }


    public function actualizar(Request $request){


        $isadmin = $request->admin;

        if($isadmin==""){

            $usuario = User::where('id',$request->id)->firstOrFail();

            $usuario->dni = $request->dni;
            $usuario->nombres = $request->nombres;
            $usuario->sexo = $request->sexo;
            $usuario->telefono = $request->telefono;
            $usuario->edad = $request->edad;
            $usuario->email = $request->email;
            $usuario['tipo_kit'] = $request->tipo_kit;
            $usuario->admin = 0;   
            $usuario->save();
            return back()->with('flash', "Se ha Actualizado el usuario con exito");

        }else{

            $usuario = User::where('id',$request->id)->firstOrFail();

            $usuario->dni = $request->dni;
            $usuario->nombres = $request->nombres;
            $usuario->sexo = $request->sexo;
            $usuario->telefono = $request->telefono;
            $usuario->edad = $request->edad;
            $usuario->email = $request->email;
            $usuario->tipo_kit = $request->tipo_kit;
            $usuario->admin = 1;   
            $usuario->save();
            return back()->with('flash', "Se ha Actualizado el usuario Correctamente"); 

        }
       
    }

    public function elimina_usuario(Request $request){
        $usuario = User::where('id',$request->id)->firstOrFail();
        $usuario->delete();
        return back();
    }
}
