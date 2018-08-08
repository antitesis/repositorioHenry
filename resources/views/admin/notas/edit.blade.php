@extends('admin.layouts.main')

@section('title','Editar Nota')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Editar Nota
		</div>
		<div class="container">

		 	{!! Form::open(['route' => ['notas.update', $nota->id], 'method' => 'PUT']) !!}

		 	<br>

		 	<div class="row">

			 	<div class="col-6">

					<div class="form-group">
						{!! Form::label('titulo', 'Titulo') !!}
						{!! Form::text('titulo', $nota->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcion', 'Descripcion') !!}
						{!! Form::text('descripcion', $nota->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('solicitante', 'Solicitante') !!}
						{!! Form::text('solicitante', $nota->solicitante, ['class' => 'form-control', 'placeholder' => 'Solicitante']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('encargado', 'Encargado') !!}
						{!! Form::text('encargado', $nota->encargado, ['class' => 'form-control', 'placeholder' => 'Encargado']) !!}
					</div>

				</div>

				<div class="col-6">

					<div class="form-group">
						{!! Form::label('fechaInicio', 'Fecha de Inicio') !!}
						{!! Form::date('fechaInicio', $nota->fechaInicio, ['class' => 'form-control',  'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('duracion', 'Duracion') !!}
						{!! Form::text('duracion', $nota->duracion, ['class' => 'form-control', 'placeholder' => 'Duracion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('comentarios', 'Comentarios') !!}
						{!! Form::text('comentarios', $nota->comentarios, ['class' => 'form-control', 'placeholder' => 'Comentarios']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('estado','Estado') !!}
						{!! Form::select('estado', ['pendiente' => 'Pendiente', 'en proceso' => 'En Proceso','terminado' => 'Terminado'], $nota->estado, ['class' => 'form-control', 'required']) !!}﻿
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


