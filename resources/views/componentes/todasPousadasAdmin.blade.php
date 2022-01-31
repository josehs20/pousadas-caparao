@extends('estruturaHTML')
<link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/siedbar/css/style.css') }}">

<a href="{{route('info.index')}}" class="btn personalizado-2 btn-add-voltar">
    Voltar
</a>

<!-- Section 5 -->
<div class="section-5-container section-container" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col section-5 section-description wow fadeIn">
                <h2>Nossas Pousadas</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>Confira todas as nossas pousadas</p>
            </div>
        </div>
        <div class="row alinhar-pousadas">
            <!-- Listando as pousadas -->
            @foreach ($todasPousadasAdmin as $pousada)

                <div class="col-md-4 section-5-box wow fadeInUp">
                    <div class="section-5-box-image">
                        <img src="{{ $pousada['imagem'] }}" alt="portfolio-1">
                    </div>
                    <h3>
                        <a href="#">{{ $pousada['nome'] }}</a>
                        <i class="fas fa-angle-right"></i>
                    </h3>
                    <div class="section-5-box-date">
                        Diária: <i>R$</i> {{ $pousada['diaria'] }}
                    </div>
                    <p>{{ $pousada['descricao'] }}</p>
                </div>
            @endforeach
            <!-- --------------------- -->
        </div>
    </div>
</div>