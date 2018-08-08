<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfils = Perfil::orderBy('id', 'ASC')->paginate(7);

        return view('admin.perfils.index')->with('perfils', $perfils);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perfils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new perfil($request->all());

        $perfil->nombre = $request->input('nombre');
        $perfil->abreviatura = $request->input('abreviatura');
        $perfil->descripcion = $request->input('descripcion');

        $perfil->save();

        Flash::success("Se ha registrado el perfil " . $perfil->nombre . " de forma exitosa!");

        return redirect()->action('PerfilController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil = Perfil::find($id);
        return view('admin.perfils.edit')->with('perfil' ,$perfil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perfil = Perfil::find($id);

        $perfil->nombre = $request->input('nombre');
        $perfil->abreviatura = $request->input('abreviatura');
        $perfil->descripcion = $request->input('descripcion');

        $perfil->save();

        flash::warning('El perfil ' . $perfil->nombre . ' ha sido editado con exito');

        return redirect()->action('PerfilController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();

        Flash::error('El perfil ' . $perfil->nombre . ' ha sido borrado de forma exitosa!');

        return redirect()->action('PerfilController@index');
    }
}
