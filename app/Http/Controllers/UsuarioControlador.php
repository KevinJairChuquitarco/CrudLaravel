<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;


class UsuarioControlador extends Controller
{
    //función para devolver todos los usuarios
    public function index(){
        $usuarios = Usuario::all();
        return response()->view('usuario',  compact('usuarios') );
    }
    //función para devolver sólo un usuario
    public function show($id){
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuarios);
    }
    //función para eliminar un usuario
    public function destroy($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 200);
    }
    //función para crear un usuario
    public function store(Request $request){
        $validacion = $request->validate([
            'nombre'=>'required|string|max:25',
            'apellido'=>'required|string|max:25',
            'email'=>'required|string|max:25',
            'direccion'=>'required|string|max:50',
        ]);

        $usuario = User::create([
            'nombre'=>$validacion['nombre'],
            'apellido'=>$validacion['apellido'],
            'email'=>$validacion['email'],
            'direccion'=>$validacion['direccion'],
        ]);

        return response()->json($usuario, 201);
    }

}
