<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(){

        $usuario = DB::table('persona')
            ->orderBy('IdPersona', 'desc')
            ->get();

            return response()->json($usuario);

    }
    
    public function store(Request $request){
        $nombre= $request->input('nombre');
        $correo= $request->input('correo');
        $contrasena= $request->input('contrasena');

        // $validacion::make($data, [
        //     'nombre' => ['required', 'string', 'max:255'],
        //     'correo' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'contrasena' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        $reglas = [
            'nombre'     => 'required',
            'correo'      => ['required', 'correo', 'unique:persona'],
            'contrasena'      => 'required|min:6',
        ];
        $mensajes = [

            'nombre.required'   => 'No se permite campo vacio',
            'correo.unique'      => 'Ya existe ese usuario',
            'contrasena.min'         => 'No se permite menos de 6 caracteres',
        ];
        $validacion = Validator::make($request->all(), $reglas, $mensajes);

        if ($validacion->fails()){

            return new JsonResponse($validacion->errors(), 422);
        }else{
            $idPersona =  DB::table('persona')
            ->insertGetId([
            'Nombre' => $nombre,
            'FechaDeNacimiento' => $fecha,
            'FotoDePerfil' => $foto,
            'Genero' => $sexo,
            'Correo' => $correo,
            'Contrasena' => $contrasena,
        ]);
        }

        
    }


}
