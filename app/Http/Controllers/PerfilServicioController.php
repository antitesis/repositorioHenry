<?php

namespace App\Http\Controllers;

use App\PerfilServicio;
use App\Perfil;
use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class PerfilServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfilservicios = PerfilServicio::join("perfils","perfil_servicios.idPerfil","=","perfils.id")->join("servicios","perfil_servicios.idServicio","servicios.id")->select("perfil_servicios.id","servicios.id","servicios.nombre as nombreServicio","servicios.abreviatura as abrServicio","perfils.id as id_Perfil","perfils.nombre as nombrePerfil", "perfils.abreviatura as abrPerfil")->orderBy('idPerfil', 'ASC')->paginate(7);

        return view('admin.perfilservicios.index')->with('perfilservicios',$perfilservicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::all();
        $perfils = Perfil::all();
        return view('admin.perfilservicios.create')->with('servicios',$servicios)->with('perfils',$perfils);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfilservicio = new PerfilServicio($request->all());

        $perfilservicio->idServicio = $request->input('idServicio');
        $perfilservicio->idPerfil = $request->input('idPerfil');

        $perfilservicio->save();

        Flash::success("Se ha registrado el Perfil/Servicio " . $perfilservicio->id . " de forma exitosa!");

        return redirect()->action('PerfilServicioController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PerfilServicio  $perfilServicio
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilServicio $perfilServicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PerfilServicio  $perfilServicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicio::all();
        $perfils = Perfil::all();
        $perfilservicio = PerfilServicio::find($id);
        return view('admin.perfilservicios.edit')->with('perfilservicio', $perfilservicio)->with('servicios',$servicios)->with('perfils',$perfils);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PerfilServicio  $perfilServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilServicio $perfilServicio)
    {
        $perfilservicio = PerfilServicio::find($id);

        $perfilservicio->idServicio = $request->input('idServicio');
        $perfilservicio->idPerfil = $request->input('idPerfil');

        $perfilservicio->save();

        flash::warning('La relación perfil/servicio' . $perfilservicio->id . ' ha sido editada con exito!');

        return redirect()->action('PerfilServicioController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilServicio  $perfilServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfilservicio = PerfilServicio::find($id);
        $perfilservicio->delete();

        Flash::error('La relacion perfil/servicio ' . $perfilservicio->id . ' ha sido borrado de forma exitosa!');

        return redirect()->action('PerfilServicioController@index');
    }
}
