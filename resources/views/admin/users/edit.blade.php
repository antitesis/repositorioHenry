@extends('admin.layouts.main')

@section('title','Editar Usuario')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Editar Usuario
		</div>

		<div class="container">

		 	{!! Form::open(['route' => ['usuarios.update', $user->id], 'method' => 'PUT']) !!}﻿

		 	<div class="row">

			 	<div class="col-6">

			 		<div class="form-group">
						{!! Form::label('name', 'Nombres') !!}
						{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre(s)', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('email', 'Correo Electrónico') !!}
						{!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@auna.pe', 'required']) !!}
					</div>

					<div class="form-group">
                		<label for="idSede">{{ __('Sede') }}</label>
                		<div>
			                <select id="idSede" class="form-control"  name="idSede" value="" required autofocus>
			                	<option value="{{ $user->idSede }}" selected>{{ $user->idSede }}</option>
			                    @foreach($sedes as $sede)
			                        <option value="{{ $sede->id }}">{{ $sede->nombre }}</option>
			                    @endforeach
			                </select>
            			</div>   
            		</div>

					<div class="form-group">
						{!! Form::label('tipo','Tipo') !!}
						{!! Form::select('tipo', ['user' => 'Usuario', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}﻿
					</div>

			 	</div>

			 	<div class="col-6">

			 		<div class="form-group">
						{!! Form::label('lastname', 'Apellidos') !!}
						{!! Form::text('lastname', $user->lastname, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) !!}
					</div>

			 		<div class="form-group">
						{!! Form::label('cts', 'CTS') !!}
						{!! Form::text('cts', $user->cts, ['class' => 'form-control', 'placeholder' => 'CTS', 'required']) !!}
					</div>


		            <div class="form-group">
		                <label for="idPerfil">{{ __('Perfil') }}</label>
		                <div >
			                <select id="idPerfil" class="form-control"  name="idPerfil" required autofocus>
			                	<option value="{{ $user->idPerfil }}" selected>{{ $user->idPerfil }}</option>
			                    @foreach($perfils as $perfil)
			                        <option value="{{ $perfil->id }}">{{ $perfil->nombre }}</option>
			                    @endforeach
			                </select>
		            	</div>   
		            </div>

					<div class="form-group">
						{!! Form::label('estado','Estado') !!}
						{!! Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], null , ['class' => 'form-control']) !!}﻿
					</div>

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
