@extends('admin.layouts.main')

@section('title', 'Lista de Perfiles')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3>Lista de perfiles</h3>			
		</div>
		<div class="col-md-3">
			<a href="{{ route('perfils.create')}}" class="btn btn-info"> Registrar Nuevo Perfil</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead align="center">
					<th>Id</th>
					<th>Nombre</th>
					<th>Abreviatura</th>
					<th>Descripcion</th>
					<th>Acción</th>
				</thead>
				<tbody align="center">
					@foreach($perfils as $perfil)
						<tr>
							<td>{{ $perfil->id }}</td>
							<td>{{ $perfil->nombre }}</td>
							<td>{{ $perfil->abreviatura }}</td>
							<td>{{ $perfil->descripcion }}</td>
							<td>
								<a href="{{route('perfils.edit', $perfil->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
								<a href="{{route('admin.perfils.destroy', $perfil->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
							</td>
						</tr>
					@endforeach		
				</tbody>	
			</table>
			{!! $perfils->render()!!}
		</div>
	</div>
</div>
@endsection