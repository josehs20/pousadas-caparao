<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pousadas Caparaó</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- importanto favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    {{-- importando main.css --}}
    <link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
    {{-- importando bootstrap-icons --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    {{-- importando bootstrap.css --}}
    <link rel="stylesheet"  href="{{ asset('css/bootstrap.css') }}">

</head>

<body>
    {{-- importando conteudo da view welcome --}} @yield('conteudo')

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
