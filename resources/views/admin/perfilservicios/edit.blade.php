@extends('admin.layouts.main')

@section('title','Editar Relacion Perfil/Servicio')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Editar Perfil Servicio
		</div>
		<div class="container">
		 	{!! Form::open(['route' => ['perfilesservicios.update', $perfilservicio->id], 'method' => 'PUT']) !!}﻿

			<br>
		 	
            <div class="form-group">
                <label for="idPerfil">{{ __('Perfil') }}</label>
                <div >
	                <select id="idPerfil" class="form-control"  name="idPerfil" value="" required autofocus>
	                	<option value="{{ $perfilservicio->idPerfil }}" selected>{{ $perfilservicio->idPerfil }}</option>
	                    @foreach($perfils as $perfil)
	                        <option value="{{ $perfil->id }}">{{ $perfil->nombre }}</option>
	                    @endforeach
	                </select>
            	</div>   
            </div>

            <div class="form-group">
                <label for="idServicio">{{ __('Servicio') }}</label>
                <div >
	                <select id="idServicio" class="form-control"  name="idServicio" required autofocus>
	                	<option value="{{ $perfilservicio->idServicio }}" selected>{{ $perfilservicio->idServicio }}</option>
	                    @foreach($servicios as $servicio)
	                        <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
	                    @endforeach
	                </select>
            	</div>   
            </div>

			<div class="form-group">
				{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection
