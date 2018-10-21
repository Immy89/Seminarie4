<html>
    <head>
        <title>Smarriga Recept - @yield('title')</title>
        <meta charset="UTF-8" />
        <link rel="Stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
        <link rel="Stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
        @yield('customcss')
    </head>

    <body>
        @include('layouts.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
    </body>
</html>