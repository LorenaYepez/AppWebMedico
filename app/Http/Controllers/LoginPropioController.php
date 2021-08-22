<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Redirect;
use Illuminate\Http\Request;
use DB;

class LoginPropioController extends Controller
{
    public function login(Request $request)
	{
	$userusuario = $request->input('correo');
	$password = $request->input('contrasena');
    $tipo = $request->input('Tipo');

    if($tipo==1)
    {
        // si entro aqui significa que esta buscando  admin y debe verificar si existe 
        
        echo '<pre>';  
       
        $laConsulta=DB::select("select * from Persona , Admin where Persona.IdPersona = Admin.IdPersona and  Persona.Correo= '$userusuario' And Persona.Contrasena = '$password' ");
   
        if(count($laConsulta) >0)
        {
            $auth = User::WHERE('Correo', '=', $userusuario   )->where('Contrasena', '=', $password )->first();

            if($auth){
                Auth::login($auth);
                return Redirect::to('admin');
            }
        }else{
          //  return Redirect::to('/');
            echo "No existe  el admin";
        }
        
     

    }else{
        // si entro aqui significa que esta buscando medico  y debe verificar si existe 
         
        
        $laConsulta=DB::select("select * from Persona , medico where Persona.IdPersona = medico.IdPersona and  Persona.Correo= '$userusuario' And Persona.Contrasena = '$password'");
      
        if(count($laConsulta) >0)
        {
            print_r($laConsulta);
            $auth = User::WHERE('Correo', '=', $userusuario   )->where('Contrasena', '=', $password )->first();

            if($auth){
                Auth::login($auth);
                return Redirect::to('medico');
            }
        }else{
            //echo "No existe  el medico";
            return Redirect::to('/');
        }
        
        echo '</pre>' ;
    }
        
        
	}
}
