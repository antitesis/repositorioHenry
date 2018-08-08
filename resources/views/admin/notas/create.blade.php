@extends('admin.layouts.main')

@section('title','Crear Nota')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Nueva Nota
		</div>
		<div class="container">

		 	{!! Form::open(['route' => 'notas.store', 'method' => 'POST']) !!}

		 	<br>

		 	<div class="row">

			 	<div class="col-6">

					<div class="form-group">
						{!! Form::label('titulo', 'Titulo') !!}
						{!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Titulo', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcion', 'Descripcion') !!}
						{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('solicitante', 'Solicitante') !!}
						{!! Form::text('solicitante', null, ['class' => 'form-control', 'placeholder' => 'Solicitante']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('encargado', 'Encargado') !!}
						{!! Form::text('encargado', null, ['class' => 'form-control', 'placeholder' => 'Encargado']) !!}
					</div>

				</div>

				<div class="col-6">

					<div class="form-group">
						{!! Form::label('fechaInicio', 'Fecha de Inicio') !!}
						{!! Form::date('fechaInicio', null, ['class' => 'form-control',  'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('duracion', 'Duracion') !!}
						{!! Form::text('duracion', null, ['class' => 'form-control', 'placeholder' => 'Duracion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('comentarios', 'Comentarios') !!}
						{!! Form::text('comentarios', null, ['class' => 'form-control', 'placeholder' => 'Comentarios']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('estado','Estado') !!}
						{!! Form::select('estado', ['pendiente' => 'Pendiente', 'en proceso' => 'En Proceso','terminado' => 'Terminado'], null , ['placeholder' => 'Selecciona estado...', 'class' => 'form-control', 'required']) !!}﻿
					</div>


				</div>

			</div>

			<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection


