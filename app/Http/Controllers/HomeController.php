<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
   

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Medico , Persona Where Medico.IdPersona =Persona.IdPersona And Medico.Estado=1 ");  
        return view('admin/administrador' , ["Medicos"=> $loConsultaCliente]);
    }
    
    public function MedicosAceptados()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Medico , Persona Where Medico.IdPersona =Persona.IdPersona And  Medico.Estado=2 ");  
        return view('admin/medicosaceptados' , ["Medicos"=> $loConsultaCliente]);
    }
    

    public function MedicosRechazados()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Medico , Persona Where Medico.IdPersona =Persona.IdPersona And  Medico.Estado=3 ");  
        return view('admin/medicosrechazados' , ["Medicos"=> $loConsultaCliente]);
    }
    
    
    public function index1()
    {
        $poConsultaCliente=DB::select("SELECT * FROM Paciente , Persona, Reserva Where Paciente.IdPersona =Persona.IdPersona and Paciente.IdPaciente =Reserva.IdPaciente");  
        return view('medico/medicos' , ["Pacientes"=> $poConsultaCliente]);
        //print_r($poConsultaCliente);
    }
}
