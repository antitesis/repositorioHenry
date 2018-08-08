<?php

namespace App\Http\Controllers;

use App\Srvvideot;
use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class SrvvideotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $srvvideots = Srvvideot::orderBy('id', 'ASC')->paginate(7);
        return view('admin.srvvideots.index')->with('srvvideots', $srvvideots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::all();
        return view('admin.srvvideots.create')->with('servicios', $servicios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $srvvideot = new Srvvideot($request->all());
        
        $srvvideot->nombre = $request->input('nombre');
        $srvvideot->abreviatura = $request->input('abreviatura');
        $srvvideot->descripcion = $request->input('descripcion');
        $srvvideot->descripcionAlt1 = $request->input('descripcionAlt1');
        $srvvideot->imagen = $request->input('imagen');
        $srvvideot->icono = $request->input('icono');
        $srvvideot->video = $request->input('video');
        $srvvideot->idServicio = $request->input('idServicio');
        
        $srvvideot->save();

        Flash::success("Se ha registrado el video " . $srvvideot->nombre . " de forma exitosa!");

        return redirect()->action('SrvvideotController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Srvvideot  $srvvideot
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $srvvideots = Srvvideot::all();
        return view('servicios.videotutoriales')->with('srvvideots', $srvvideots);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Srvvideot  $srvvideot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicio::all();
        $srvvideot = Srvvideot::find($id);
        return view('admin.srvvideots.edit')->with('srvvideot', $srvvideot)->with('servicios',$servicios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Srvvideot  $srvvideot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $srvvideot = Srvvideot::find($id);

        $srvvideot->nombre = $request->input('nombre');
        $srvvideot->abreviatura = $request->input('abreviatura');
        $srvvideot->descripcion = $request->input('descripcion');
        $srvvideot->descripcionAlt1 = $request->input('descripcionAlt1');
        $srvvideot->imagen = $request->input('imagen');
        $srvvideot->icono = $request->input('icono');
        $srvvideot->video = $request->input('video');
        $srvvideot->idServicio = $request->input('idServicio');

        $srvvideot->save();

        flash::warning('El video ' . $srvvideot->nombre . ' ha sido editado con exito!');

        return redirect()->action('SrvvideotController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Srvvideot  $srvvideot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $srvvideot = Srvvideot::find($id);
        $srvvideot->delete();

        Flash::error('El video ' . $srvvideot->nombre . ' ha sido borrado de forma exitosa!');

        return redirect()->action('SrvvideotController@index');
    }
}
