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
        $loConsultaCliente=DB::select("SELECT * FROM Medico , Persona, Especialidad Where Medico.IdPersona =Persona.IdPersona And Medico.Estado=1 And Medico.IdEspecialidad = Especialidad.IdEspecialidad");  
        return view('admin/administrador' , ["Medicos"=> $loConsultaCliente]);
    }
    // Medico
    public function MedicosAceptados()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Medico , Persona, Especialidad Where Medico.IdPersona =Persona.IdPersona And  Medico.Estado=2 And Medico.IdEspecialidad = Especialidad.IdEspecialidad");  
        return view('admin/medicosaceptados' , ["Medicos"=> $loConsultaCliente]);
    }
    
    public function MedicosRechazados()
    {
        $loConsultaCliente=DB::select("SELECT * FROM Medico , Persona, Especialidad Where Medico.IdPersona =Persona.IdPersona And  Medico.Estado=3 And Medico.IdEspecialidad = Especialidad.IdEspecialidad");  
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
    // 
    // public function MostrarEspecialidad()
    // {
    //     $loConsultaCliente=DB::select("SELECT * FROM Especialidad");  
    //     return view('login/register' , ["Especialidad"=> $loConsultaCliente]);
    // }
    // 
    public function MostrarConsulta()
    {
        $loConsultaCliente=DB::select("SELECT * FROM paciente, persona WHERE persona.IdPersona=paciente.IdPersona and paciente.Estado=2");  
        return view('videollamada/video' , ["Paciente"=> $loConsultaCliente]);
    }
    public function MostrarPaciente()
    {
        $loConsultaCliente=DB::select("SELECT * FROM paciente, persona,consulta, reserva, diagnostico, recetai WHERE persona.IdPersona=paciente.IdPersona and paciente.Estado=2 and paciente.IdPaciente=reserva.IdPaciente and consulta.IdReserva=reserva.IdReserva and consulta.IdDiagnostico=diagnostico.IdDiagnostico and recetai.IdReceta=consulta.IdReceta");  
        return view('videollamada/historial' , ["Paciente"=> $loConsultaCliente]);
    }
}
