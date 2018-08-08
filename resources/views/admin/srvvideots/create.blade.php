@extends('admin.layouts.main')

@section('title','Crear Videotutorial')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Nuevo Videotutorial
		</div>
		<div class="container">

		 	{!! Form::open(['route' => 'srvvideotutoriales.store', 'method' => 'POST']) !!}

		 	<br>
		 	<div class="row">

			 	<div class="col-6">

					<div class="form-group">
						{!! Form::label('nombre', 'Nombre') !!}
						{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('abreviatura', 'Abreviatura') !!}
						{!! Form::text('abreviatura', null, ['class' => 'form-control', 'placeholder' => 'Abreviatura', 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcion', 'Descripcion') !!}
						{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('descripcionAlt1', 'Descripcion Alternativa 1') !!}
						{!! Form::text('descripcionAlt1', null, ['class' => 'form-control', 'placeholder' => 'Descripcion Alternativa 1']) !!}
					</div>

				</div>

				<div class="col-6">

					<div class="form-group">
						{!! Form::label('imagen', 'Imagen') !!}
						{!! Form::text('imagen', null, ['class' => 'form-control', 'placeholder' => 'Imagen']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('icono', 'Icono') !!}
						{!! Form::text('icono', null, ['class' => 'form-control', 'placeholder' => 'Icono']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('video', 'Video') !!}
						{!! Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'Video']) !!}
					</div>

					<div class="form-group">
		                <label for="idServicio">{{ __('Servicio') }}</label>
		                <div >
			                <select id="idServicio" class="form-control"  name="idServicio" required autofocus>
			                    @foreach($servicios as $servicio)
			                        <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
			                    @endforeach
			                </select>
		            	</div>   
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


