<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap-theme.min.css') }}">
</head>
<body>
	@yield('content')

	<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>