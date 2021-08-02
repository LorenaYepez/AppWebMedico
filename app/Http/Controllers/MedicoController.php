<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class MedicoController extends Controller
{
    //
    public function registrarMedico(Request $request){
        // $tnTransaccion = $request->input('tnTransaccion');
        // $tnCliente = $request->input('tnCliente');
        $nombre= $request->input(['nombre']);
        $fecha= $request->input('fecha'); 
        $sexo= $request->input('sexo'); 
        $foto= $request->input('foto'); 
        $matricula= $request->input('matricula'); 
        $direccion= $request->input('direccion'); 
        $telefono= $request->input('telefono'); 
        $ciudad= $request->input('ciudad'); 
        $horario= $request->input('horario');
        $correo= $request->input('correo');
        $contrasena= $request->input('contrasena');

        echo $nombre;

        // $idPersona = DB::table('persona')
        // ->insert([
        //     'Nombre' => 'Lorena']);

        $idPersona =  DB::table('persona')
        ->insert([
            'Nombre' => $nombre,
            'FechaDeNacimiento' => $fecha,
            'FotoDePerfil' => $foto,
            'Genero' => $sexo,
            'Correo' => $correo,
            'Contrasena' => $contrasena,
        ]);

        return response()->json($idPersona);

        // DB::table('medico')->insertGetId([
        //     'nombre' => $nombre,
        //     'fecha' => $fecha,
        //     'foto' => $foto,
        //     'genero' => $genero,
        //     'correo' => $correo,
        //     'contrasena' => $contrasena,
        // ]);
        
        // return response()->json($request->all());
        // return response()->json($idPersona);
    }
}
