<?php

namespace App\Http\Controllers;

use App\User;
use App\Sede;
use App\Perfil;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::join("sedes","users.idSede","=","sedes.id")->join("perfils","users.idPerfil","=","perfils.id")->select("users.id","users.name","users.lastname","users.email","users.cts","users.tipo","users.estado","users.idPerfil","users.idSede","sedes.nombre as nombreSede","sedes.abreviatura as abrSede","perfils.nombre as nombrePerfil","perfils.abreviatura as abrPerfil")->orderBy('id', 'ASC')->paginate(7);
        
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = Sede::all();
        $perfils = Perfil::all();

        return view('admin.users.create')->with('sedes', $sedes)->with('perfils', $perfils);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->cts = $request->input('cts');
        $user->tipo = $request->input('tipo');
        $user->estado = $request->input('estado');
        $user->idSede = $request->input('idSede');
        $user->idPerfil = $request->input('idPerfil');

        $user->save();

        Flash::success("Se ha registrado el usuario(a) " . $usuario->nombre . " de forma exitosa!");

        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sedes = Sede::all();
        $perfils = Perfil::all();
        $user = User::find($id);

        return view('admin.users.edit')->with('user', $user)->with('sedes', $sedes)->with('perfils', $perfils);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->cts = $request->input('cts');
        $user->tipo = $request->input('tipo');
        $user->estado = $request->input('estado');
        $user->idSede = $request->input('idSede');
        $user->idPerfil = $request->input('idPerfil');

        $user->save();

        flash::warning('El usuario(a) ' . $user->nombre . ' ha sido editado con exito!');

        return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Flash::error('El usuario(a) ' . $user->nombre . ' ha sido borrado de forma exitosa!');

        return redirect()->action('UserController@index');
    }
}
