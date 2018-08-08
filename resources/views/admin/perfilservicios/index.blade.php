@extends('admin.layouts.main')

@section('title', 'Lista de Relaciones Perfil/Servicio')

@section('content')

<div class="container">
	<div class="row ">
		<div class="col-md-8"> 
			<h3 >Lista de relaciones perfil/servicio</h3>			
		</div>
		<div class="col-3.5">
			<a href="{{ route('perfilesservicios.create')}}" class="btn btn-info"> Registrar Nueva Relación Perfil/Servicio</a>
		</div>
	</div>
 
	<table class="table table-striped">
		<thead align="center">
			<th>Id</th>
			<th>Perfil</th>
			<th>Servicio</th>
			<th>Acción</th>
		</thead>
		<tbody align="center">
			@foreach($perfilservicios as $perfilservicio)
				<tr>
					<td>{{ $perfilservicio->id_Perfil }}</td>
					<td data-toggle="tooltip" data-placement="top" title="{{ $perfilservicio->nombrePerfil }}">{{ $perfilservicio->abrPerfil }}</td>
					<td data-toggle="tooltip" data-placement="top" title="{{ $perfilservicio->nombreServicio }}">{{ $perfilservicio->abrServicio }}</td>
					<td>
						<a href="{{route('perfilesservicios.edit', $perfilservicio->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
					</td>
				</tr>
			@endforeach		
		</tbody>	
	</table>
	{!! $perfilservicios->render()!!}
</div>

@endsection