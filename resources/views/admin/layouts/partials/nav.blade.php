<nav class="navbar navbar-expand-lg  navbar-light fixed-top"  style="background-color: #d0f3d3;" id="mainNav">
    <a class="navbar-brand" href="#"><img src="{{ URL::asset('css_admin/img/logo.png') }}" class="img-responsive" alt="img" ></img></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
	         	<a class="nav-link" href="{{ url('/n1md9')}}">
	        		<i class="fa fa-fw fa-home"></i>
	            	<span class="nav-link-text">Inicio</span>
	          	</a>
	        </li>
	        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Principal">
	        	<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Principal" data-parent="#exampleAccordion">
		        	<i class="fa fa-fw fa-cogs"></i>
		        	<span class="nav-link-text">Principal</span>
	        	</a>
	        	<ul class="sidenav-second-level collapse" id="Principal">
	        		<li>
	        			<a href="{{route('usuarios.index')}}">Usuarios</a>
	        			<a href="{{route('servicios.index')}}">Servicios</a>
	        			<a href="{{route('sedes.index')}}">Sedes</a>
	        			<a href="{{route('perfils.index')}}">Perfiles</a>
	        			<a href="{{route('perfilesservicios.index')}}">Perfiles/Servicios</a>
	        			<a href="{{route('notas.index')}}">Notas</a>
	        		</li>
	        	</ul>
	        </li>
	        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Servicios">
	        	<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Servicios" data-parent="#exampleAccordion">
		        	<i class="fa fa-fw fa-star"></i>
		        	<span class="nav-link-text">Servicios</span>
	        	</a>
	        	<ul class="sidenav-second-level collapse" id="Servicios">
	        		<li>
	        			<a href="{{route('srvdocumentos.index')}}">Documentos</a>
	        			<a href="#">Portal Procesos</a>
	        			<a href="{{route('srvnpscores.index')}}">NPS</a>
	        			<a href="{{route('srvvideotutoriales.index')}}">Videotutoriales</a>
	        		</li>
	        	</ul>
	        </li>

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                	<a class="nav-link dropdown-toggle mr-lg-3" id="menuUsuario" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                		{{ Auth::user()->name }} <span class="caret"></span>
                	</a>
                	<div class="dropdown-menu" aria-labelledby="menuUsuario">
                		<a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                	</div>
                </li>
            @endguest
            <!-- /Authentication Links -->
        </ul>
        <!-- Right Side Of Navbar -->

    </div>
</nav>