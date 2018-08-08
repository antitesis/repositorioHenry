@extends('admin.layouts.main')

@section('title','Editar Servicio')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Editar Servicio
		</div>

		<div class="container">

		 	{!! Form::open(['route' => ['servicios.update', $servicio->id], 'method' => 'PUT']) !!}﻿

			<div class="row">

	            <div class="col-6">

					<div class="form-group">
						{!! Form::label('nombre', 'Nombre') !!}
						{!! Form::text('nombre', $servicio->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcion', 'Descripcion') !!}
						{!! Form::text('descripcion', $servicio->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcionAlt1', 'Descripcion Alternativa 1') !!}
						{!! Form::text('descripcionAlt1', $servicio->descripcionAlt1, ['class' => 'form-control', 'placeholder' => 'Descripcion Alternativa 1']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcionAlt2', 'Descripcion Alternativa 2') !!}
						{!! Form::text('descripcionAlt2', $servicio->descripcionAlt2, ['class' => 'form-control', 'placeholder' => 'Descripcion Alternativa 2']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('link', 'Link') !!}
						{!! Form::text('link', $servicio->link, ['class' => 'form-control', 'placeholder' => 'Link']) !!}
					</div>

	            </div>

	            <div class="col-3">

	            	<div class="form-group">
						{!! Form::label('abreviatura', 'Abreviatura') !!}
						{!! Form::text('abreviatura', $servicio->abreviatura, ['class' => 'form-control', 'placeholder' => 'Abreviatura', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('imagen1', 'Imagen 1') !!}
						{!! Form::text('imagen1', $servicio->imagen1, ['class' => 'form-control', 'placeholder' => 'Imagen 1']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('icono1', 'Icono 1') !!}
						{!! Form::text('icono1', $servicio->icono1, ['class' => 'form-control', 'placeholder' => 'Icono 1']) !!}
					</div>
					
					<div class="form-group">
						{!! Form::label('estado','Estado') !!}
						{!! Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], $servicio->estado , ['placeholder' => 'Selecciona estado...', 'class' => 'form-control']) !!}﻿
					</div>

	            </div>

	            <div class="col-3">
	            	
	            	<div class="form-group">
						{!! Form::label('prioridad', 'Prioridad') !!}
						{!! Form::text('prioridad', $servicio->prioridad, ['class' => 'form-control', 'placeholder' => 'Prioridad', 'required']) !!}
					</div>

	            	<div class="form-group">
						{!! Form::label('imagen2', 'Imagen 2') !!}
						{!! Form::text('imagen2', $servicio->imagen2, ['class' => 'form-control', 'placeholder' => 'Imagen 2']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('icono2', 'Icono 2') !!}
						{!! Form::text('icono2', $servicio->icono2, ['class' => 'form-control', 'placeholder' => 'Icono 2']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('tipo', 'Tipo') !!}
						{!! Form::select('tipo', ['publico' => 'Publico', 'privado' => 'Privado','en desarrollo' => 'En Desarrollo', 'otro' => 'Otro '], $servicio->tipo, ['placeholder' => 'Selecciona tipo...', 'class' => 'form-control', 'required']) !!}﻿
					</div>

	            </div>

            </div>

            <div class="row">
            	<div class="container">
		
					<div class="form-group">
						{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
					</div>            	

				</div>
            </div>

			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection
