<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Auna GGYDP</title>
    
    <link href="{{ URL::asset( 'css_public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset( 'css_public/css/nivo-lightbox.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset( 'css_public/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset( 'css_public/css/animations.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset( 'css_public/css/style_2.css')}}" rel="stylesheet">
    <link href="{{ URL::asset( 'css_public/color/default.css')}}" rel="stylesheet">
    <link href="{{ URL::asset( 'css_public/css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    
    <!-- Navigation -->

    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="site-logo">
                            <a href="{{ url('/') }}" class="brand"><img src="{{ URL::asset( 'css_public/img/logo2.png')}}" class="img-responsive" alt="img"></img></a>
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
                                <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="{{ url('/#works') }}">Servicios</a></li>
                                <li><a href="{{ url('/#service') }}">Novedades</a></li>
                                <li><a href="{{ url('/#contact') }}">Contacto</a></li>
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

    <section id="works" class="home-section color-dark text-center bg-white">
        
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="animatedParent">
                        <div class="section-heading text-center">
                            <h2 class="h-bold animated bounceInDown">Conoce la Atención del Paciente en Auna</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row gallery-item">
                    @foreach($srvvideots as $srvvideot)
                        <div class="col-sm-2 animated {{$srvvideot -> descripcionAlt1}}">
                            <a href="#{{$srvvideot -> abreviatura}}" tittle="{{ $srvvideot -> nombre }}">
                                <img src="{{asset($srvvideot -> imagen)}}" class="img-responsive" alt="{{$srvvideot -> abreviatura}}">
                            </a>
                            <div class="animated slower text-center">
                                <a href="#{{$srvvideot->abreviatura}}">
                                    <h6>{{ $srvvideot->nombre }}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        @foreach($srvvideots as $srvvideot)
        <section id="{{$srvvideot -> abreviatura}}" hidden="true" class="section color-dark bg-gray">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 ">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">{{$srvvideot -> nombre}}</h2>
                        <div class="divider-header"></div>
                    </div>
                </div>
            </div>
            <div class="text-center" >
                <div class="video-container">
                    <video class="responsive-video" src="{{asset($srvvideot -> video)}}"  controls controlsList="nodownload" width="60%" ></video>
                </div>
            </div>          
        </section>
        @endforeach

    </section>

    <!-- Core JavaScript Files -->

    <script src="{{ URL::asset( 'css_public/js/jquery.min.js')}}"></script>     
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/promise-polyfill"></script>

    <script src="{{ URL::asset( 'css_public/js/jquery.sticky.js')}}"></script>
    <script src="{{ URL::asset( 'css_public/js/jquery.easing.min.js')}}"></script>    
    <script src="{{ URL::asset( 'css_public/js/jquery.scrollTo.js')}}"></script>
    <script src="{{ URL::asset( 'css_public/js/jquery.appear.js')}}"></script>
    <script src="{{ URL::asset( 'css_public/js/stellar.js')}}"></script>
    <script src="{{ URL::asset( 'css_public/js/nivo-lightbox.min.js')}}"></script>
    
    <script src="{{ URL::asset( 'css_public/js/custom.js')}}"></script>
    <script src="{{ URL::asset( 'css_public/js/css3-animate-it.js')}}"></script>

  </body>
</html>
