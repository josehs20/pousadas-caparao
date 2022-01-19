@extends('estruturaHTML')

@section('conteudo')
    {{-- ||||||||||||||||||||||| cabeçalho ||||||||||||||||||||||| --}}
    <header id="inicio">
        @include('componentes.navbar')

        <div class="div-titulo">
            <div class="div-titulo-interno">
                <h1> {{ $info->tituloPrincipal }}</h1>
                <p> {{ $info->titulo }} <br> {{ $info->subtitulo }}</p>
            </div>
        </div>

    </header>

    {{-- ||||||||||||||||||||||| conteudo ||||||||||||||||||||||| --}}

    <form action="{{ route('info.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label for="inputAddress">Titulo principal</label>
                <input name="tituloPrincipal" type="text" class="form-control" id="inputAddress"
                    placeholder="pousadas Info">
            </div>
            <div class="form-group">
                <label for="inputAddress">Titulo</label>
                <input name="titulo" type="text" class="form-control" id="inputAddress" placeholder="pousadas Info">
            </div>
            <div class="form-group">
                <label for="inputAddress">subTitulo</label>
                <input name="subtitulo" type="text" class="form-control" id="inputAddress" placeholder="pousadas Info">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">introducaoImage</label>
                <input name="introducaoImage" type="image" class="form-control" id="inputPassword4"
                    placeholder="obre nos">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">introducao</label>
            <input name="titulointroducao" type="text" class="form-control" id="inputAddress" placeholder="imageItroducao">
        </div>
        <div class="form-group">
            <label for="inputAddress"> sobreNos</label>
            <input name="introducao" type="text" class="form-control" id="inputAddress" placeholder="pousada">
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>








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
                <h2 class="titulo">{{ $info->titulointroducao }}</h2>
                <p>{{ $info->introducao }}
                </p>
            </div>
            {{-- ---------------------------------------------------- --}}
        </div>

        <h1 class="titulo"></h1>

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

    {{-- incluindo rodape --}}
    @include('componentes.footer')

@endsection
