@extends('admin.layouts.main')

@section('title', 'Lista de Videotutoriales')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-9"> 
			<h3 >Lista de Videotutoriales</h3>
		</div>
		<div class="col-md-3">
			<a href="{{ route('srvvideotutoriales.create')}}" class="btn btn-info"> Registrar Nuevo Videotutorial</a>	
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
					<th>DescAlt1</th>
					<th>Imagen</th>
					<th>Icono</th>
					<th>Video</th>
					<th>Servicio</th>
					<th>Acción</th>
				</thead>
				<tbody align="center">
					@foreach($srvvideots as $srvvideot)
						<tr>
							<td>{{ $srvvideot->id }}</td>
							<td>{{ $srvvideot->nombre }}</td>
							<td>{{ $srvvideot->abreviatura }}</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $srvvideot->descripcion }}">Desc</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $srvvideot->descripcionAlt1 }}">DescAlt1</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $srvvideot->imagen }}">Ver</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $srvvideot->icono }}">Ver</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $srvvideot->video }}">Ver</td>
							<td>{{ $srvvideot->idServicio }}</td>
							<td>
								<a href="{{route('srvvideotutoriales.edit', $srvvideot->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
								<a href="{{route('admin.srvvideotutoriales.destroy', $srvvideot->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
							</td>
						</tr>
					@endforeach		
				</tbody>	
			</table>
			{!! $srvvideots->render()!!}
		</div>
	</div>
</div>

@endsection