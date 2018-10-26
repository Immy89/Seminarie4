<html>

	<head>
		<title>Smarriga Recept - @yield('title')</title>
		<meta charset="UTF-8" />
		<link rel="Stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
		<link rel="Stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        @yield('customcss')
        @yield('scripts')
	</head>

	<body>
		@include('layouts.nav')
		<div class="container">
			@yield('content')
		</div>
        @include('layouts.footer')
	</body>

</html>