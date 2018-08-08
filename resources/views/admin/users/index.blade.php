@extends('admin.layouts.main')

@section('title', 'Lista de Usuarios')

@section('content')

<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3 >Lista de usuarios</h3>		
			</div>
			<div class="col-md-3">
				<a href="{{ route('usuarios.create')}}" class="btn btn-info"> Registrar Nuevo Usuario</a>	
			</div>
		</div>

		<div class="row">
		 	<table class="table table-striped">
				<thead align="center">
					<th>Id</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Email</th>
					<th>Cts</th>
					<th>Tipo</th>
					<th>Estado</th>
					<th>Sede</th>
					<th>Perfil</th>
					<th>Acción</th>
				</thead>
				<tbody align="center">
					@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->lastname }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->cts }}</td>
							<td>
								@if($user->tipo == "admin")
									<span class="badge badge-warning">{{ $user->tipo }}</span>
								@else
									<span class="badge badge-info">{{ $user->tipo }}</span>
								@endif					
							</td>
							<td>
								@if($user->estado == "activo")
									<span class="badge badge-success">{{ $user->estado }}</span>
								@else
									<span class="badge badge-danger">{{ $user->estado }}</span>
								@endif	
							</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $user->nombreSede }}">{{ $user->abrSede }}</td>
							<td data-toggle="tooltip" data-placement="top" title="{{ $user->nombrePerfil }}">{{ $user->abrPerfil }}</td>
							<td>
								<a href="{{route('usuarios.edit', $user->id)}}" class="btn btn-warning"><i class="material-icons" style="font-size: 18px">build</i></a>
								<a href="{{route('admin.users.destroy', $user->id )}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><i class="material-icons" style="font-size: 18px">delete</i></a>
							</td>
						</tr>
					@endforeach		
				</tbody>	
			</table>
			{!! $users->render()!!}
		</div>
	</div>
</div>

@endsection