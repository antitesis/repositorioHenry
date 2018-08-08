<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::orderBy('id', 'ASC')->paginate(4);

        return view('admin.servicios.index')->with('servicios',$servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Servicio($request->all());
        
        $servicio->nombre = $request->input('nombre');
        $servicio->abreviatura = $request->input('abreviatura');
        $servicio->descripcion = $request->input('descripcion');
        $servicio->descripcionAlt1 = $request->input('descripcionAlt1');
        $servicio->descripcionAlt2 = $request->input('descripcionAlt2');
        $servicio->imagen1 = $request->input('imagen1');
        $servicio->imagen2 = $request->input('imagen2');
        $servicio->icono1 = $request->input('icono1');
        $servicio->icono2 = $request->input('icono2');
        $servicio->tipo = $request->input('tipo');
        $servicio->prioridad = $request->input('prioridad');
        $servicio->link = $request->input('link');
        $servicio->estado = $request->input('estado');
        
        $servicio->save();

        Flash::success("Se ha registrado el servicio " . $servicio->nombre . " de forma exitosa!");

        return redirect()->action('ServicioController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        $servicios = Servicio::orderby('prioridad','ASC')->get();
        return view('welcome')->with('servicios',$servicios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('admin.servicios.edit')->with('servicio', $servicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicio = Servicio::find($id);

        $servicio->nombre = $request->input('nombre');
        $servicio->abreviatura = $request->input('abreviatura');
        $servicio->descripcion = $request->input('descripcion');
        $servicio->descripcionAlt1 = $request->input('descripcionAlt1');
        $servicio->descripcionAlt2 = $request->input('descripcionAlt2');
        $servicio->imagen1 = $request->input('imagen1');
        $servicio->imagen2 = $request->input('imagen2');
        $servicio->icono1 = $request->input('icono1');
        $servicio->icono2 = $request->input('icono2');
        $servicio->tipo = $request->input('tipo');
        $servicio->prioridad = $request->input('prioridad');
        $servicio->link = $request->input('link');
        $servicio->estado = $request->input('estado');

        $servicio->save();

        flash::warning('El servicio ' . $servicio->nombre . ' ha sido editado con exito!');

        return redirect()->action('ServicioController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();

        Flash::error('El servicio ' . $servicio->nombre . ' ha sido borrado de forma exitosa!');

        return redirect()->action('ServicioController@index');
    }
}
