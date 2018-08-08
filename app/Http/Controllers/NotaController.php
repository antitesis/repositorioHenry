<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::orderBy('id', 'ASC')->paginate(7);

        return view('admin.notas.index')->with('notas', $notas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Nota($request->all());

        $nota->titulo = $request->input('titulo');
        $nota->descripcion = $request->input('descripcion');
        $nota->solicitante = $request->input('solicitante');
        $nota->encargado = $request->input('encargado');
        $nota->estado = $request->input('estado');
        $nota->fechaInicio = $request->input('fechaInicio');
        $nota->duracion = $request->input('duracion');
        $nota->comentarios = $request->input('comentarios');

        $nota->save();

        Flash::success("Se ha registrado la nota " . $nota->titulo . " de forma exitosa!");

        return redirect()->action('NotaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::find($id);
        return view('admin.notas.edit')->with('nota' ,$nota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nota = Nota::find($id);

        $nota->titulo = $request->input('titulo');
        $nota->descripcion = $request->input('descripcion');
        $nota->solicitante = $request->input('solicitante');
        $nota->encargado = $request->input('encargado');
        $nota->estado = $request->input('estado');
        $nota->fechaInicio = $request->input('fechaInicio');
        $nota->duracion = $request->input('duracion');
        $nota->comentarios = $request->input('comentarios');

        $nota->save();

        flash::warning('La nota' . $nota->titulo . ' ha sido editada con exito');

        return redirect()->action('NotaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota = Nota::find($id);
        $nota->delete();

        Flash::error('La nota ' . $nota->titulo . ' ha sido borrada de forma exitosa!');

        return redirect()->action('NotaController@index');
    }
}
