<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Portal Auna ', 'Portal Auna') }}</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="{{ URL::asset( 'css_public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( 'css_public/css/nivo-lightbox.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset( 'css_public/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( 'css_public/css/animations.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset( 'css_public/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset( 'css_public/color/default.css')}}" rel="stylesheet">

    <!-- /css -->

</head>
<body>

    @include('layouts.partials.nav')
    
    @yield('content')
    
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
