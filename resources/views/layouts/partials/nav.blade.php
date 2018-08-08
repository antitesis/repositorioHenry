<!-- Navigation -->
<div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="site-logo">
                        <a href="#" class="brand"><img src="{{ URL::asset( 'css_public/img/logo2.png')}}" class="img-responsive" alt="img"></img></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Inicio</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Servicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                <div class="dropdown-menu" aria-labelledby="Servicios">
                                    &nbsp&nbsp<a class="dropdown-item" href="/#works">Principales </a>
                                    &nbsp&nbsp<a class="dropdown-item" href="/#service">Personalizados </a>
                                </div>
                            </li>
                            <li><a href="/#service2">Novedades</a></li>
                            <li><a href="/#contact">Contacto</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div> 
<!-- /Navigation -->  