
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist-custom.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Dibuat Oleh: <i class="fa fa-love"></i><a href="#">PVDR TEAM</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('admin/assets/vendor/chartist/js/chartist.min.js') }}"></script>
	<script src="{{ asset('admin/assets/scripts/klorofil-common.js') }}"></script>

</body>
<marquee bgcolor="" align ="center" direction ="left" scrollamount="5" class="italic "><i font-weight: bold; class="text-primary">S e j a t i n y a &nbsp; &nbsp; &nbsp; T u k a n g l e d e n g &nbsp; &nbsp; &nbsp; S e j a t i !!! P V D R T E A M</marquee> 
</html>
