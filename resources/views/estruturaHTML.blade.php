<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pousadas Caparaó</title>

    {{-- importanto favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    {{-- importando bootstrap-icons --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-icons.css') }}">
    {{-- importando main.css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/sass/main.css') }}">
    {{-- importando bootstrap --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>

<body>

    {{-- importando conteudo do header --}} @include('secoes.header')
    {{-- importando conteudo da view welcome --}} @yield('conteudo')

    {{-- importando arquivos js para o bootstrap funcionar --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
