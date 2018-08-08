@extends('admin.layouts.main')

@section('title','Crear Relaciones Perfil/Servicio')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="card-header" style="color: gray;">
			<i class="fa fa-pencil-square-o fa-fw"></i> Nuevo Perfil Servicio
		</div>
		<div class="container">
		 	{!! Form::open(['route' => 'perfilesservicios.store', 'method' => 'POST']) !!}

		 	<br>
		 	
            <div class="form-group">
                <label for="idPerfil">{{ __('Perfil') }}</label>
                <div >
	                <select id="idPerfil" class="form-control"  name="idPerfil" required autofocus>
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
	                    @foreach($servicios as $servicio)
	                        <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
	                    @endforeach
	                </select>
            	</div>   
            </div>

            <br>      
 
			<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection


