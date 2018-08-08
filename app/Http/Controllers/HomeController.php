<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Servicio;
use App\Nota;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexuser()
    {
        $idperfil = Auth::user()->idPerfil; 
        $servicios =  Servicio::join("perfil_servicios","servicios.id","=","perfil_servicios.idServicio")->where('perfil_servicios.idPerfil',$idperfil)->select("perfil_servicios.id AS idps","perfil_servicios.idPerfil","perfil_servicios.idServicio","servicios.prioridad", "servicios.nombre", "servicios.abreviatura","servicios.descripcion","servicios.descripcionAlt1","servicios.descripcionAlt2","servicios.imagen1","servicios.imagen2","servicios.icono1","servicios.icono2","servicios.tipo","servicios.link","servicios.estado")->where("servicios.estado","activo")->orderBy('servicios.prioridad', 'ASC')->get();

        return view('home')->with('servicios',$servicios);
    }

    public function indexadmin()
    {
        $notas = Nota::where('notas.estado','!=','terminado')->get();

        return view('admin')->with('notas' ,$notas);
    }
}
