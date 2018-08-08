<!DOCTYPE html>
<!--MODIFICACION EN GITHUB-->
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
        <link href="{{ URL::asset( 'css_public/css/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset( 'css_public/color/default.css')}}" rel="stylesheet">
        <link href="{{ URL::asset( 'css_public/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        
        @include('layouts.partials.nav')

        <!-- Section: about -->
        <section id="about" class="home-section color-dark">

            <div  style="margin-top:-90px; padding: 0px; align-items: center;">
            <div class="animatedParent">
                <div class="animated fadeIn slower">
                <div class="col-lg-12 text-center">
                    <img src="{{ URL::asset( 'css_public/img/banner2_3.png')}}" width="100%" >
                    </div>
                </div>
            </div> 
            </div>
            <div style="height: 280px;"></div>

        </section>
        <!-- /Section: about -->
        
        <!-- Section: works -->
        <section id="works" class="home-section color-dark text-center bg-white">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="animatedParent">
                            <div class="section-heading text-center">
                                <h2 class="h-bold animated bounceInDown">Conoce nuestros servicios principales</h2>
                                <div class="divider-header"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
               <div class="row animatedParent">
                    <div class="col-sm-12 col-md-12 col-lg-12" >
                        <div class="row gallery-item">
                            <div class="col-md-1"></div>
                            @foreach( $servicios as $servicio)
                                @if( $servicio->tipo == 'publico')
                                    <div class="col-md-2 animated {{$servicio->descripcionAlt2}}">
                                        <a href="{{$servicio->imagen1}}" title="{{$servicio->nombre}}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{$servicio->imagen1}}">
                                            <img src="{{asset($servicio->imagen1)}}"" class="img-responsive" alt="{{$servicio->abreviatura}}">
                                        </a>
                                    </div>    
                                @endif
                            @endforeach
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        @foreach( $servicios as $servicio)
                            @if( $servicio->tipo == 'publico')
                                <div class="col-sm-2 animated {{$servicio->descripcionAlt2}} ">
                                    <a href="{{$servicio->link}}">
                                        <h4>{{$servicio->nombre}}</h4>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>  
            </div>
        </section>
        <!-- /Section: works -->    

        <!-- Section: services -->
        <section id="service" class="home-section color-dark bg-gray">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Conoce nuestros Servicios Personalizados</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row animatedParent">
                        @foreach($servicios as $servicio)
                            @if($servicio->tipo == 'privado')
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="animated rotateInDownLeft">
                                        <div class="service-box">
                                            <div class="service-icon">
                                                <img src="{{asset($servicio->icono1)}}" height="82" width="82">
                                            </div>
                                            <div class="service-desc">
                                                <h5>{{$servicio->nombre}}</h5>
                                                <div class="divider-header"></div>
                                                <p>{{$servicio->descripcion}}</p>
                                                <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#{{$servicio->abreviatura}}"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach                        
                    </div>
                </div>
            </div>
            
        </section>
        <!-- /Section: services -->

        <!-- /Section: Other services-->
        <section id="service2" class="home-section color-dark bg-gray">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Servicios disponibles próximamente:</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row animatedParent">
                        <div class="row justify-content-md-center">
                        @foreach($servicios as $servicio)
                            @if($servicio->tipo == 'en desarrollo')
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="animated rotateInDownLeft">
                                        <div class="service-box">
                                            <div class="service-icon">
                                                <img src="{{asset($servicio->icono1)}}" height="82" width="82">
                                            </div>
                                            <div class="service-desc">
                                                <h5>{{$servicio->nombre}}</h5>
                                                <div class="divider-header"></div>
                                                <p>{{$servicio->descripcion}}</p>
                                                <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#{{$servicio->abreviatura}}"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        </div>                        
                    </div>
                </div>
            </div>

        </section>
        <!-- /Section: Other services -->
        
        <!-- Section: contact -->
        <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Contactate con nosotros:</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="animatedParent ">
                            <div class="panel panel-primary align-middle">
                                <div class="panel-heading">
                                    <h4 class="h-bold animated bounceInDown text-center">¿Tienes alguna duda?</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="h-bold animated bounceInDown text-center">Escríbenos al siguiente correo y te responderemos lo más pronto posible.</p>
                                    <p class="h-bold animated bounceInDown text-center">procesos.herramientas@auna.pe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div> 
        </section>
        <!-- /Section: contact -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="footer-menu">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="https://aunamas.gointegro.com">Auna+</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Elaborado por GGYDP - Procesos y Herramientas Prestacionales</p>
                    </div>
                </div>  
            </div>
        </footer>

        @foreach($servicios as $servicio)
            <div class="modal fade bg-light" id="{{$servicio->abreviatura}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{$servicio->nombre}}</h4>
                        </div>
                        <div class="modal-body" style="text-align:justify;">
                            <lavel>{{$servicio->descripcionAlt1}}</lavel>   
                        </div>
                        @if($servicio->tipo == 'privado' )
                        <div class="modal-footer">
                            <a href="login" class="btn btn-skin" ><i class="fa fa-chart-bar left"></i>Acceder</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>                    
        @endforeach

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
