<!DOCTYPE html>

<html>

	<head>
	 
		<title> Admin Portal Auna - @yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">	
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	    <!-- Bootstrap core CSS-->
	  	<link href="{{ URL::asset('css_admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	  	<!-- Custom fonts for this template-->
	  	<link href="{{ URL::asset('css_admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	  	<!-- Page level plugin CSS-->
	  	<link href="{{ URL::asset('css_admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
	  	<!-- Custom styles for this template-->
	  	<link href="{{ URL::asset('css_admin/css/sb-admin.css') }}" rel="stylesheet">

	</head>

	<body class="fixed-nav sticky-footer" id="page-top">

		@include('admin.layouts.partials.nav')

		<div class="content-wrapper">
			<div class="container-fluid">	
				<div class="container">
					@include('flash::message')
				</div>
			</div>
			@yield('content')
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<script>$('div.alert').not('.alert-important').delay(3000).fadeOut(350);</script>
		<!-- Bootstrap core JavaScript-->
	    <script src="{{ URL::asset('css_admin/vendor/jquery/jquery.min.js')}}"></script>
	    <script src="{{ URL::asset('css_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	    <!-- Core plugin JavaScript-->
	    <script src="{{ URL::asset('css_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	    <!-- Page level plugin JavaScript-->
	    <script src="{{ URL::asset('css_admin/vendor/chart.js/Chart.min.js')}}"></script>
	    <script src="{{ URL::asset('css_admin/vendor/datatables/jquery.dataTables.js')}}"></script>
	    <script src="{{ URL::asset('css_admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
	    <!-- Custom scripts for all pages-->
	    <script src="{{ URL::asset('css_admin/js/sb-admin.min.js')}}"></script>
	    <!-- Custom scripts for this page-->
	    <script src="{{ URL::asset('css_admin/js/sb-admin-datatables.min.js')}}"></script>
	    <script src="{{ URL::asset('css_admin/js/sb-admin-charts.min.js')}}"></script>

	</body>

</html>