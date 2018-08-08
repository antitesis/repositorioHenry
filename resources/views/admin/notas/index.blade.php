@extends('admin.layouts.main')

@section('title', 'Lista de Notas')

@section('content')

<div class="container">
	<div class="row">
		<div class="container">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Vista General</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Vista de Tablas</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  		<div class="row">
			  			<br>
			  			<div class="card-deck">
			  				@foreach($notas as $nota)
			  				<div class="col-6 mr-auto">
			  					@if($nota->estado == "pendiente")
								<div class="card text-white bg-danger mb-3 ">
								@elseif($nota->estado == "en proceso")
								<div class="card text-white bg-warning mb-3 ">
								@else($nota->estado == "terminado")
								<div class="card text-white bg-success mb-3 ">
								@endif
								 	<div class="card-header text-center">
										<h5 class="card-title">{{ $nota->titulo }}</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-4">
												Descripción:
											</div>
											<div class="col-8">
												<p class="card-text">{{ $nota->descripcion }}</p>
											</div>	
										</div>
										<div class="row">
											<div class="col-4">
												Solicitante:
											</div>
											<div class="col-8">
												<p class="card-text">{{ $nota->solicitante }}</p>
											</div>	
										</div>
										<div class="row">
											<div class="col-4">
												Encargado:
											</div>
											<div class="col-8">
												<p class="card-text">{{ $nota->encargado }}</p>
											</div>	
										</div>
										<div class="row">
											<div class="col-4">
												Fecha de Inicio:
											</div>
											<div class="col-8">
												<p class="card-text">{{ $nota->fechaInicio }}</p>
											</div>	
										</div>
										<div class="row">
											<div class="col-4">
												Duración:
											</div>
											<div class="col-8">
												<p class="card-text">{{ $nota->duracion }}</p>
											</div>	
										</div>
										<div class="row">
											<div class="col-4">
												Comentarios:
											</div>
											<div class="col-8">
												<p class="card-text">{{ $nota->comentarios }}</p>
											</div>	
										</div>
								  	</div>
								  	<div class="card-footer text-center">
								    	<a href="{{route('notas.edit', $nota->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
										<a href="{{route('admin.notas.destroy', $nota->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
								  	</div>
								</div>
			  				</div>
			  				@endforeach
			  			</div>
			  		</div>
				</div>
			 	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			 		<br>
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<h3 >Lista de Notas</h3>		
							</div>
							<div class="col-md-3">
								<a href="{{ route('notas.create')}}" class="btn btn-info"> Registrar Nueva Nota</a>	
							</div>
						</div>

						<div class="row">
						 	<table class="table table-striped">
								<thead align="center">
									<th>Id</th>
									<th>Titulo</th>
									<th>Descripción</th>
									<th>Solicitante</th>
									<th>Encargado</th>
									<th>Estado</th>
									<th>Fecha Inicio</th>
									<th>Duración</th>
									<th>Comentarios</th>
									<th>Acción</th>
								</thead>
								<tbody align="center">
									@foreach($notas as $nota)
										<tr>
											<td>{{ $nota->id }}</td>
											<td>{{ $nota->titulo }}</td>
											<td>{{ $nota->descripcion }}</td>
											<td>{{ $nota->solicitante }}</td>
											<td>{{ $nota->encargado }}</td>
											<td>
												@if($nota->estado == "terminado")
													<span class="badge badge-success">{{ $nota->estado }}</span>
												@elseif($nota->estado =="en proceso")
													<span class="badge badge-warning">{{ $nota->estado }}</span>
												@else
													<span class="badge badge-danger">{{ $nota->estado }}</span>
												@endif	
											</td>
											<td>{{ $nota->fechaInicio }}</td>
											<td>{{ $nota->duracion }}</td>
											<td>{{ $nota->comentarios }}</td>
											<td>
												<a href="{{route('notas.edit', $nota->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
												<a href="{{route('admin.notas.destroy', $nota->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
											</td>
										</tr>
									@endforeach		
								</tbody>	
							</table>
							{!! $notas->render()!!}
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


@endsection