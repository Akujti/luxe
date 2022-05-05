<html>
    <head>
        <title>{{ env('APP_NAME', 'LUXE') }}</title>
        <link rel="stylesheet" href="{{ asset('css/theme/theme.css') }}">
        
        @yield('css')
    </head>
    <body>
        <main>
            @yield('content')
        </main>
       
        @yield('js')
    </body>
</html>