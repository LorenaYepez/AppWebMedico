<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MedicoController extends Controller
{
    public function registrarMedico(Request $request){
        // $tnTransaccion = $request->input('tnTransaccion');
        // $tnCliente = $request->input('tnCliente');

        $file=$request->file("cv");
        $nombre = "pdf_".time().".pdf";

            $ruta = public_path("pdf/".$nombre);

            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
            }else{
                dd("NO ES UN PDF");
           }
           $rutacv = "localhost:8000/pdf/".$nombre;


            $file=$request->file("foto");
            $nombre = "imagen_".time().".".$file->guessExtension();;

            $rutafoto = public_path("fotomedico/".$nombre);

    
                copy($file, $rutafoto);
                $rutafoto = "localhost:8000/fotomedico/".$nombre;
        
        $correo= $request->input('correo');
        $dato2 = DB::table('persona')
            ->select('Correo')
            ->where('Correo', '=', $correo)
            ->exists();
        if($dato2 == true){
            echo 'existe';
        }else{
            $nombre= $request->input('nombre');
            $fecha= $request->input('fecha'); 
            $sexo= $request->input('sexo'); 
            $especialidad= $request->input('especialidad'); 
            $foto=  $rutafoto; 
            $matricula= $request->input('matricula'); 
            $direccion= $request->input('direccion'); 
            $telefono= $request->input('telefono'); 
            $ciudad= $request->input('ciudad'); 
            $horario= $request->input('horario');
            $cv=  $rutacv;
            $contrasena= $request->input('contrasena');

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
                'DireccionLaboral' => $direccion,
                'Estado' => 1,
                'NroMatricula' => $matricula,
                'TelefonoLaboral' => $telefono,
                'TituloProfesional' => $cv,
                'IdEspecialidad' => 6,
            ]);

            $to = $correo;
            $subject = "Confirmacion de  cuenta ";
            $message = "este mensaje es para confirmacion de la cuenta ";

            mail($to, $subject, $message);

        return response()->json($idMedico);
        }
    }

    public function RegistroMedico(Request $request)
    {
        return view('login/register');
    }

    public function aceptarmedico(Request $request)
    {
        $idmedico = $request->input('idmedico');
        $laUpdate= DB::table('Medico')
        ->where('IdMedico', $idmedico)
        ->update(['Estado' => 2]);
        if($laUpdate)
        {
            echo 1;
        }else{
            echo 2;
        }
    }
    public function rechazarmedico(Request $request)
    {
        $idmedico = $request->input('idmedico');
        $laUpdate=DB::table('Medico')
        ->where('IdMedico', $idmedico)
        ->update(['Estado' => 3]);
        if($laUpdate)
        {
            echo 1;
        }else{
            echo 2;
        }
    }

    // public function aceptarpaciente(Request $request)
    // {
    //     $idpaciente = $request->input('idpaciente');
    //     $idmedico = $request->input('idmedico');
    //     $laUpdate=DB::table('Medico')
    //     ->where('IdMedico', $idmedico)
    //     ->update(['Estado' => 3]);
    //     if($laUpdate)
    //     {
    //         echo 1;
    //     }else{
    //         echo 2;
    //     }
    // }

    public function aceptarpaciente(Request $request)
    {
        $idpaciente = $request->input('idpaciente');
        // $idmedico = $request->input('idmedico');
        $laUpdate=DB::table('Paciente')
        ->where('IdPaciente', $idpaciente)
        ->update(['Estado' => 2]);
        if($laUpdate)
        {
            echo 1;
        }else{
            echo 2;
        }
    }

    public function rechazarpaciente(Request $request)
    {
        $idpaciente = $request->input('idpaciente');
        // $idmedico = $request->input('idmedico');
        $laUpdate=DB::table('Paciente')
        ->where('IdPaciente', $idpaciente)
        ->update(['Estado' => 3]);
        if($laUpdate)
        {
            echo 1;
        }else{
            echo 2;
        }
    }

}
