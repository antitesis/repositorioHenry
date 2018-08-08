@extends('admin.layouts.main')

@section('title','Editar Perfil')

@section('content')

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="card-header" style="color: gray;">
            <i class="fa fa-pencil-square-o fa-fw"></i> Editar Perfil
        </div>

		<div class="container">

		 	{!! Form::open(['route' => ['perfils.update', $perfil->id], 'method' => 'PUT']) !!}﻿

			<div class="form-group">
				{!! Form::label('nombre', 'Nombre') !!}
				{!! Form::text('nombre', $perfil->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('abreviatura', 'Abreviatura') !!}
				{!! Form::text('abreviatura', $perfil->abreviatura, ['class' => 'form-control', 'placeholder' => 'Abreviatura', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('descripcion', 'Descripcion') !!}
				{!! Form::text('descripcion', $perfil->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
			</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection
