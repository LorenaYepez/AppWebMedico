<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Redirect;
use Illuminate\Http\Request;

class LoginPropioController extends Controller
{
    public function login(Request $request)
	{
	$userusuario = $request->input('correo');
	$password = $request->input('contrasena');

    
	$auth = User::where('Correo', '=', $userusuario   )->where('Contrasena', '=', $password )->first();
		if($auth){
			Auth::login($auth);
/*
		if (Auth::attempt(['Correo' => $userusuario, 'Contrasena' => $password]))
        {*/
            return Redirect::to('admin');
        }
        echo '<pre>';  
        print_r(Auth::attempt(['Correo' => $userusuario, 'Contrasena' => $password])) ;
        print_r($request->all() ) ;
        echo '</pre>' ;
        
	}
}
