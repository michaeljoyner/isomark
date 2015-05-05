<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@section('title')
	<title>Isomark</title>
	@show
    <!-- Latest compiled and minified CSS -->
	<link href="{{ elixir("css/app.css") }}" rel="stylesheet">


	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    @yield('head')
</head>
@section('bodyclasshook')
<body>
@show
    <div class="slide-nav-menu">

    </div>
    <div class="main-content-wrapper">
	@yield('content')
    </div>

	<!-- Scripts -->
	<script src="{{ elixir("js/app.js") }}"></script>
    <script>
        contactScroller.init();
    </script>
    @yield('bodyscripts')
</body>
</html>
