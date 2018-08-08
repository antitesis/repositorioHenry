@extends('admin.layouts.main')

@section('title', 'Inicio')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-6">
			<h3 class="title">¡Bienvenido/a {{ Auth::user()->name }}!</h3>
		</div>	
	</div>
	<div class="card mb-3">
		<div class="card-header">
			<div style="color: gray;">
				<i class="fa fa-wrench fa-fw"></i>Mantenimiento
			</div>
		</div>
		<div style="height: 20px;"></div>
		<div class="row" style="padding: 10px;">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<a style="color: #ffff;" href="{{ route('perfils.index')}}">
									<i class="fa fa-users fa-5x"></i>
								</a>
							</div>
							<div class="col-md-7 text-right">
								<div class="title"><b>Perfiles</b></div>
							</div>		
						</div>
					</div>
					<a href="{{ route('perfils.index')}}">
					<div class="panel-footer">
						<span class="pull-left">Ver Lista</span>
						<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
		        <div class="panel panel-green">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                    <a  style="color: #ffff;" href="{{ route('sedes.index')}}">
		                        <i class="fa fa-map-marker fa-5x"></i></a>
		                    </div>
		                    <div class="col-md-9 text-right">
		                        <div class="huge"><b>Sedes</b></div>
		                    </div>
		                </div>
		            </div>
		            <a href="{{ route('sedes.index')}}">
		                <div class="panel-footer">
		                    <span class="pull-left">Ver Lista</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
		    <div class="col-lg-3 col-md-6">
		        <div class="panel panel-yellow">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <a style="color: #ffff;" href="{{ route('servicios.index')}}">
		                        <i class="fa fa-cogs fa-5x"></i></a>
		                    </div>
		                    <div class="col-md-7 text-right">
		                        <div class="huge"><b>Servicios</b></div>
		                        
		                    </div>
		                </div>
		            </div>
		            <a href="{{ route('servicios.index')}}">
		                <div class="panel-footer">
		                    <span class="pull-left">Ver Lista</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>
		    <div class="col-lg-3 col-md-6">
		        <div class="panel panel-red">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-3">
		                        <a style="color: #ffff;" href="{{ route('usuarios.index')}}">
		                        <i class="fa fa-user fa-5x"></i></a>
		                    </div>
		                    <div class="col-md-9 text-right">
		                        <div class="huge"><b>Usuarios</b></div>
		                    </div>
		                </div>
		            </div>
		            <a href="{{ route('usuarios.index')}}">
		                <div class="panel-footer">
		                    <span class="pull-left">Ver Lista</span>
		                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
		                    <div class="clearfix"></div>
		                </div>
		            </a>
		        </div>
		    </div>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-5">
            <div class="panel panel-default">
                <div class="card-header" style="color: gray;">
                    <i class="fa fa-pencil-square-o fa-fw"></i> Registro
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ route('perfils.create')}}" class="list-group-item">
                            Nuevo Perfil <span class="pull-right"><i class="fa fa-chevron-circle-right fa-fw"></i></span> 
                        </a>
                        <a href="{{ route('sedes.create')}}" class="list-group-item">
                            Nueva Sede <span class="pull-right"><i class="fa fa-chevron-circle-right fa-fw"></i></span> 
                        </a>
                        <a href="{{ route('servicios.create')}}" class="list-group-item">
                            Nuevo Servicio <span class="pull-right"><i class="fa fa-chevron-circle-right fa-fw"></i></span> 
                           </a>
                        <a href="{{ route('usuarios.create')}}" class="list-group-item">
                            Nuevo Usuario <span class="pull-right"><i class="fa fa-chevron-circle-right fa-fw"></i></span> 
                        </a>
                        <a href="{{ route('notas.create')}}" class="list-group-item">
                        	Nueva Nota <span class="pull-right"><i class="fa fa-chevron-circle-right fa-fw"></i></span> 
                        </a>
                        <a href="{{ route('perfilesservicios.create')}}" class="list-group-item">
                           Asignar Servicio a Perfil <span class="pull-right"><i class="fa fa-chevron-circle-right fa-fw"></i></span> 
                        </a>
                    </div>
                </div>
  			</div>
        </div>
        <div class="col-lg-7">
          	<div class="card mb-3">
            	<div class="card-header">
              		<i class="fa fa-pencil-square-o"></i> Tareas Pendientes 
              	</div>
            	<div class="card-body">
              		<div class="row">
              			<div class="col">
	                		<div class="list-group">
	                			@foreach($notas as $nota)
				              	<div class="list-group-item list-group-item-action flex-column align-items-start">
				              		<div class="d-flex w-100 justify-content-between">
				              			<h5 class="mb-1">{{ $nota->titulo }}</h5>
	      								<small class="text-muted">{{ $nota->fechaInicio }}</small>
				                	</div>
				                	<p class="mb-1">{{ $nota->descripcion }}</p>
				                	<div class="d-flex w-100 justify-content-between">
	    								<small class="text-muted">Encargado(a): {{ $nota->encargado }}</small>
	    								<small class="text-muted">{{ $nota->estado }}</small>
	    							</div>
				             	</div>
              					@endforeach
							</div>
						</div>
              		</div>
            	</div>
          	</div>
        </div>
	</div>
</div>

@endsection
