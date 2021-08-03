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
        $cv= $request->input('cv');
        $correo= $request->input('correo');
        $contrasena= $request->input('contrasena');

        echo $nombre;

        $idPersona =  DB::table('persona')
        ->insertGetId([
            'Nombre' => $nombre,
            'FechaDeNacimiento' => $fecha,
            'FotoDePerfil' => $foto,
            'Genero' => $sexo,
            'Correo' => $correo,
            'Contrasena' => $contrasena,
        ]);

        $idMedico = DB::table('medico')
        ->insert([
            'IdPersona' => $idPersona,
            'DireccionLaboral ' => $direccion,
            'Estado ' => 1,
            'NroMatricula ' => $matricula,
            'TelefonoLaboral ' => $telefono,
            'TituloProfesional ' => $cv,
        ]);

        return response()->json($idMedico);
        // return response()->json($idPersona);
        // return response()->json($request->all());
        // return response()->json($idPersona);
    }
}
