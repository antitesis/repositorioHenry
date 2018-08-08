<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Bienvenido al Portal Auna {{ Auth::user()->name }} </title>

        <!-- Bootstrap core CSS -->
        <link href="{{ URL::asset('css_usuario/css/bootstrap.css')}}" rel="stylesheet"/>
        <!--external css-->
        <link href="{{ URL::asset('css_usuario/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css_usuario/css/zabuto_calendar.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css_usuario/js/gritter/css/jquery.gritter.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css_usuario/lineicons/style.css')}}"/>
        <!-- Custom styles for this template -->
        <link href="{{ URL::asset('css_usuario/css/style.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('css_usuario/css/style-responsive.css')}}" rel="stylesheet"/>
        <script src="{{ URL::asset('css_usuario/js/chart-master/Chart.js')}}"></script>
    </head>
    <body>

        <section id="container">
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Mostrar/Ocultar Menu"></div>
                </div>
                <!--logo start-->
                <a href="{{ url('/') }}" class="logo"><b>PORTAL AUNA</b></a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                    <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="logout dropdown-toggle mr-lg-3" id="menuUsuario" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} </a>
                                <div class="dropdown-menu" aria-labelledby="menuUsuario">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <h5 class="centered">Bienvenido(a) </h5>
                        <h5 class="centered">{{ Auth::user()->name}} {{ Auth::user()->lastname}}</h5>
                        @foreach($servicios as $servicio)
                            <li class="sub-menu">
                                <a href="{{ $servicio->link }}">
                                    <i class="{{ $servicio->icono2 }}"></i>
                                    <span>{{ $servicio->nombre }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12 main-chart">

                            <div class="row mt">
                                @foreach($servicios as $servicio)
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="white-panel pn donut-chart">
                                        <div class="white-header">
                                            <a>{{ $servicio->nombre }}</a>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                                <p><i></i></p>
                                            </div>
                                        </div>
                                        <div class="centered">
                                            <a href="{{ $servicio->link }}">
                                                <img src="{{ $servicio->imagen1 }}" height="116" width="116">
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                                <p><i></i></p>
                                            </div>    
                                            <div class="col-sm-6 col-xs-6">
                                            </div>   
                                        </div>
                                        <div class="footer">
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <script>
                                    var doughnutData = [
                                    {
                                        value: 70,
                                        color:"#68dff0"
                                    },
                                    {
                                        value : 30,
                                        color : "#fdfdfd"
                                    }
                                    ];
                                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                </script>
                            </div>

                        </div> 
                    </div>
                </div>
              </section>
            </section>
            <footer class="site-footer">
                <div class="text-center">
                    2018 - Gestión y Desarrollo Prestacional 
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ URL::asset('css_usuario/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('css_usuario/js/jquery-1.8.3.min.js')}}"></script>
        <script src="{{ URL::asset('css_usuario/js/bootstrap.min.js')}}"></script>
        <script class="include" type="text/javascript" src="{{ URL::asset('css_usuario/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{ URL::asset('css_usuario/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{ URL::asset('css_usuario/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('css_usuario/js/jquery.sparkline.js')}}"></script>
        <!--common script for all pages-->
        <script src="{{ URL::asset('css_usuario/js/common-scripts.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('css_usuario/js/gritter/js/jquery.gritter.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('css_usuario/js/gritter-conf.js')}}"></script>
        <!--script for this page-->
        <script src="{{ URL::asset('css_usuario/js/sparkline-chart.js')}}"></script>    
        <script src="{{ URL::asset('css_usuario/js/zabuto_calendar.js')}}"></script>  
        <script type="text/javascript">
            $(document).ready(function () {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                // (string | mandatory) the text inside the notification
                // (string | optional) the image to display on the left
                image: 'assets/img/ui-sam.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: true,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });
            return false;
            });
        </script>
        <script type="application/javascript">
            $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });
                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function () {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event", }
                    ]
                });
            });
            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>
    </body>
</html>
