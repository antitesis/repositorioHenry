@extends('admin.layouts.main')

@section('title', 'Lista de Sedes')

@section('content')

<div class="container">
	<div class="row ">
		<div class="col-md-9">
			<h3>Lista de sedes</h3>			
		</div>
		<div class="col-md-3">
			<a href="{{ route('sedes.create')}}" class="btn btn-info"> Registrar Nueva Sede</a>	
		</div>
	</div>
 	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead align="center">
					<th>Id</th>
					<th>Nombre</th>
					<th>Abreviatura</th>
					<th>Acción</th>
				</thead>
				<tbody align="center">
					@foreach($sedes as $sede)
						<tr>
							<td>{{ $sede->id }}</td>
							<td>{{ $sede->nombre }}</td>
							<td>{{ $sede->abreviatura }}</td>
							<td>
								<a href="{{route('sedes.edit', $sede->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
								<a href="{{route('admin.sedes.destroy', $sede->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
							</td>
						</tr>
					@endforeach		
				</tbody>	
			</table>
			{!! $sedes->render()!!}
		</div>
	</div>
</div>
@endsection