@extends('admin.layouts.main')

@section('title', 'Lista de Servicios ')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-9"> 
			<h3 >Lista de servicios</h3>
		</div>
		<div class="col-md-3">
			<a href="{{ route('servicios.create')}}" class="btn btn-info"> Registrar Nuevo Servicio</a>	
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">  
			<table class="table table-striped table-responsive">
				<thead align="center">
					<th>Id</th>
					<th>Nombre</th>
					<th>Abreviatura</th>
					<th>Desc</th>
					<th>Desc Alt 1</th>
					<th>Desc Alt 2</th>
					<th>Imagen 1</th>
					<th>Imagen 2</th>
					<th>Icono 1</th>
					<th>Icono 2</th>
					<th>Tipo</th>
					<th>Prioridad</th>
					<th>Link</th>
					<th>Estado</th>
					<th>Acción</th>
				</thead>
				<tbody align="center">
					@foreach($servicios as $servicio)
						<tr>
							<td>{{ $servicio->id }}</td>
							<td>{{ $servicio->nombre }}</td>
							<td>{{ $servicio->abreviatura }}</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->descripcion }}">Desc</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->descripcionAlt1 }}">DescAlt1</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->descripcionAlt2 }}">DescAlt2</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->imagen1 }}">Img1</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->imagen2 }}">Img2</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->icono1 }}">Ico1</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->icono2 }}">Ico2</td>
							<td>{{ $servicio->tipo }}</td>
							<td>{{ $servicio->prioridad }}</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $servicio->link }}"><a href="{{ $servicio->link }}">Acceder</a></td>
							<td>
								@if($servicio->estado == "activo")
									<span class="badge badge-success">{{ $servicio->estado }}</span>
								@else
									<span class="badge badge-danger">{{ $servicio->estado }}</span>
								@endif	
							</td>
							<td>
								<a href="{{route('servicios.edit', $servicio->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
								<a href="{{route('admin.servicios.destroy', $servicio->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
							</td>
						</tr>
					@endforeach		
				</tbody>	
			</table>
			{!! $servicios->render()!!}
		</div>
	</div>
</div>

@endsection