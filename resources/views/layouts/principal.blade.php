<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name')}}
    </title>
    <link rel="stylesheet" href="{{ asset( 'Recursos/boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Recursos/fontawesome/css/font-awesome.min.css')}}">
    @stack('estilo')
</head>
<body>
    <header class="container">
    @include('layouts.navbar')
    </header>
    
    <main class="container" style="margin: top 100px;">
        @yield('content')
    </main>

    <footer> 
        @yield('footer')
    </footer>

    <script src="{{ asset( 'Recursos/boostrap/js/bootstrap.min.js')}}"></script>
</body>
@stack("scriptjs")
</html>