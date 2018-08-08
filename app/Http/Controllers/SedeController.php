<?php

namespace App\Http\Controllers;

use App\Sede;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::orderBy('id', 'ASC')->paginate(7);

        return view('admin.sedes.index')->with('sedes', $sedes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sedes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sede = new sede($request->all());
        
        $sede->nombre = $request->input('nombre');
        $sede->abreviatura = $request->input('abreviatura');

        $sede->save();

        Flash::success("Se ha registrado la sede " . $sede->nombre . " de forma exitosa!");

        return redirect()->action('SedeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::find($id);

        return view('admin.sedes.edit')->with('sede',$sede);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sede = Sede::find($id);

        $sede->nombre = $request->input('nombre');
        $sede->abreviatura = $request->input('abreviatura');

        $sede->save();

        flash::warning('La sede ' . $sede->nombre . ' ha sido editada con exito!');

        return redirect()->action('SedeController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sede = Sede::find($id);
        $sede->delete();

        Flash::error('La sede '. $sede->nombre . ' ha sido borrada de forma exitosa!');

        return redirect()->action('SedeController@index');
    }
}
