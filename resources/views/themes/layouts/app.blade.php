<html>
    <head>
        <title>@yield('title') Luxe</title>
        <link rel="stylesheet" href="{{ asset('css/theme/theme.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        
        @yield('css')
    </head>
    <body>
        <main>
            @yield('content')
        </main>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
        <script src="{{ asset('js/themes/main.js') }}"></script>
        @yield('js')
    </body>
</html>