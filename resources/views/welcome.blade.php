@extends('estruturaHTML')

@section('conteudo')
    {{-- ||||||||||||||||||||||| cabeçalho ||||||||||||||||||||||| --}}
    <header id="inicio">
        @include('componentes.navbar')

        <div class="div-titulo">
            <div class="div-titulo-interno">
                <h1>Pousadas Caparao</h1>
                <p> Auto Caparao <br> Pica da Bandeira</p>
            </div>
        </div>
    </header>

    {{-- ||||||||||||||||||||||| conteudo ||||||||||||||||||||||| --}}
    <main>
        <div class="introducao" id="introducao">
            {{-- slider com as imagens passando --}}
            <div style="margin-right: 20px;" id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/pedra-menina.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/armazem-caparao.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/placa-pico-bandeira.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            {{-- ---------------------------------------------------- --}}
            {{-- textos ao lado do slider --}}
            <div>
                <h2 class="titulo">Introdução</h2>
                <p>Introdução introdução introdução introdução introdução introdução
                    introdução introdução introdução introdução introdução
                    introdução introdução introdução introdução introdução
                    introdução introdução introdução introdução introdução
                    introdução introdução introdução introdução introdução
                    introdução introdução introdução introdução introdução
                </p>
            </div>
            {{-- ---------------------------------------------------- --}}
        </div>

        <h1 class="titulo">Pousadas</h1>

        {{-- card com as pousadas cadastradas --}}
        <div class="pousadas-cadastradas" id="pousadas">
            <div class="card mb-3" style="width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/pousada1.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pousada 1</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/pousada1.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pousada 1</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/pousada1.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pousada 1</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ---------------------------------------------------- --}}
    </main>

    {{-- incluindo rodape  --}}
    @include('componentes.footer')

@endsection
