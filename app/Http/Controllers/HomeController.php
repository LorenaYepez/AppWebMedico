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
// 
    public function MostrarEspecialidad()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Especialidad");  
        return view('admin/administrador' , ["Especialidad"=> $loConsultaCliente]);
    }
    // Medico
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
    // 
    public function index1()
    {
        $poConsultaCliente=DB::select("SELECT * FROM Paciente , Persona, Reserva Where Paciente.IdPersona =Persona.IdPersona and Paciente.IdPaciente =Reserva.IdPaciente AND Paciente.Estado=1");  
        return view('medico/medicos' , ["Pacientes"=> $poConsultaCliente]);
        //print_r($poConsultaCliente);
    }
    // Reserva
    public function PacientesAceptados()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Paciente , Persona, Reserva Where Paciente.IdPersona =Persona.IdPersona And  Paciente.Estado=2 AND Paciente.IdPaciente =Reserva.IdPaciente");  
        return view('medico/reservasaceptadas' , ["Pacientes"=> $loConsultaCliente]);
    }
    
    public function PacientesRechazados()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Paciente , Persona, Reserva Where Paciente.IdPersona =Persona.IdPersona And  Paciente.Estado=3 AND Paciente.IdPaciente =Reserva.IdPaciente");  
        return view('medico/reservasrechazadas' , ["Pacientes"=> $loConsultaCliente]);
    }
    
    
}
