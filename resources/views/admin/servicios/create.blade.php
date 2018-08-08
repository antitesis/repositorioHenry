@extends('admin.layouts.main')

@section('title','Crear Servicio')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Nuevo Servicio
		</div>
		<div class="container">

		 	{!! Form::open(['route' => 'servicios.store', 'method' => 'POST']) !!}

		 	<br>
		 	<div class="row">

			 	<div class="col-6">

					<div class="form-group">
						{!! Form::label('nombre', 'Nombre') !!}
						{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcion', 'Descripcion') !!}
						{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcionAlt1', 'Descripcion Alternativa 1') !!}
						{!! Form::text('descripcionAlt1', null, ['class' => 'form-control', 'placeholder' => 'Descripcion Alternativa 1']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcionAlt2', 'Descripcion Alternativa 2') !!}
						{!! Form::text('descripcionAlt2', null, ['class' => 'form-control', 'placeholder' => 'Descripcion Alternativa 2']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('link', 'Link') !!}
						{!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Link']) !!}
					</div>

				</div>

				<div class="col-3">
					
					<div class="form-group">
						{!! Form::label('abreviatura', 'Abreviatura') !!}
						{!! Form::text('abreviatura', null, ['class' => 'form-control', 'placeholder' => 'Abreviatura', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('imagen1', 'Imagen 1') !!}
						{!! Form::text('imagen1', null, ['class' => 'form-control', 'placeholder' => 'Imagen 1']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('icono1', 'Icono 1') !!}
						{!! Form::text('icono1', null, ['class' => 'form-control', 'placeholder' => 'Icono 1']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('estado','Estado') !!}
						{!! Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], null , ['placeholder' => 'Selecciona estado...', 'class' => 'form-control', 'required']) !!}﻿
					</div>

				</div>

				<div class="col-3">

					<div class="form-group">
						{!! Form::label('prioridad', 'Prioridad') !!}
						{!! Form::text('prioridad', null, ['class' => 'form-control', 'placeholder' => 'Prioridad', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('imagen2', 'Imagen 2') !!}
						{!! Form::text('imagen2', null, ['class' => 'form-control', 'placeholder' => 'Imagen 2']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('icono2', 'Icono 2') !!}
						{!! Form::text('icono2', null, ['class' => 'form-control', 'placeholder' => 'Icono 2']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('tipo', 'Tipo') !!}
						{!! Form::select('tipo', ['publico' => 'Publico', 'privado' => 'Privado','en desarrollo' => 'En Desarrollo', 'otro' => 'Otro '], null , ['placeholder' => 'Selecciona tipo...', 'class' => 'form-control', 'required']) !!}﻿
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


