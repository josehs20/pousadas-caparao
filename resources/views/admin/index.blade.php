@extends('estruturaHTML')

@section('conteudo')

<!-- Wrapper -->
<div class="wrapper">

    <!-- Incluindo navbar -->
    @include('componentes.navbar')

    <!-- Dark overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="content">
        <br><br><br>

        <!-- Codigo para informar que está na pagina Admin -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
        </svg>

        <!-- --------------------------------------------- -->

        <!-- ------------------- TODOS OS MODAIS ------------------- -->

        <!-- Modal Informação de uso para admin  --------------------------------------------------- -->
        <div class="modal fade" id="sobre" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('info.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <!-- ↓↓ Titulo do modal ↓↓ -->
                        <p class="mx-auto">
                            <strong style="font-size: 20px;" class="modal-title">
                                Titulo
                            </strong>
                        </p>
                        <!-- --------------- -->
                    </div>
                    <!-- ↓↓ Texto com as informações ↓↓ --------------------- -->
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"><strong>Pérolas da região do capraó</strong></h4>
                                    <p>
                                        Somos pessoas preocupados em passar informações mais concretas   aos turistas que viajam para essa região, mostrando alguns pontos de visitações além do maravilhoso Parque Nacional do Caparaó e seu ponto mais alto :O Pico da Bandeira.                                    </p>
                                    <hr>
                                    <p class="mb-0">
                                        Seja Bem Vindo :)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ---------------------------------------------------- -->
                    <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                    <div class="modal-footer">
                        <button type="button" class="btn personalizado-2"
                            data-dismiss="modal">Sair</button>
                    </div>
                    <!-- --------------------------------------------------------- -->
                </form>
            </div>
        </div>
    </div>
        <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <!-- ↓↓ Titulo do modal ↓↓ -->
                            <p class="mx-auto">
                                <strong style="font-size: 20px;" class="modal-title">
                                    Informações
                                </strong>
                            </p>
                            <!-- --------------- -->
                        </div>
                        <!-- ↓↓ Texto com as informações ↓↓ --------------------- -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading"><strong>Vamos ao principal</strong></h4>
                                        <p>
                                            Perceba que alguns textos estão sublinhados, são eles que podem ser
                                            alterados. <br>
                                            Para alterá-los basta clicar neles.
                                            Ao clicar irá abrir uma janela, basta informar o novo texto e clicar em
                                            alterar e o texto será alterado.
                                        </p>
                                        <hr>
                                        <p class="mb-0">
                                            Boa sorte nos negócios.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------- -->
                        <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Sair</button>
                        </div>
                        <!-- --------------------------------------------------------- -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Final do Modal Informação de uso para admin ----------------------------------------- -->


        <!-- Modal Titulo Principal --------------------------------------------------- -->
        <div class="modal fade" id="modalTituloPrincipal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <!-- ↓↓ Titulo do modal ↓↓ -->
                            <p class="mx-auto">
                                Título Principal atual: <strong style="font-size: 20px;" class="modal-title"
                                    id="exampleModalLabel">{{ $info->tituloPrincipal }}</strong>
                            </p>
                            <!-- --------------- -->
                        </div>
                        <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input name="tituloPrincipal" type="text" class="form-control" id="inputAddress"
                                        placeholder="Título principal">
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------- -->
                        <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn personalizado">Alterar</button>
                        </div>
                        <!-- --------------------------------------------------------- -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Final do Modal Titulo principal ----------------------------------------- -->

        <!-- Modal Titulo --------------------------------------------------- -->
        <div class="modal fade" id="modalTitulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <!-- ↓↓ Titulo do modal ↓↓ -->
                            <p class="mx-auto">
                                Título atual: <strong style="font-size: 20px;" class="modal-title"
                                    id="exampleModalLabel">{{ $info->titulo }}</strong>
                            </p>
                            <!-- --------------- -->
                        </div>
                        <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input name="titulo" type="text" class="form-control" id="inputAddress"
                                        placeholder="Título">
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------- -->
                        <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn personalizado">Alterar</button>
                        </div>
                        <!-- --------------------------------------------------------- -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Final do Modal Titulo ----------------------------------------- -->

        <!-- Modal Subtitulo --------------------------------------------------- -->
        <div class="modal fade" id="modalSubtitulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <!-- ↓↓ Titulo do modal ↓↓ -->
                            <p class="mx-auto">
                                Subtitulo atual: <strong style="font-size: 20px;" class="modal-title"
                                    id="exampleModalLabel">{{ $info->subtitulo }}</strong>
                            </p>
                            <!-- --------------- -->
                        </div>
                        <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input name="subtitulo" type="text" class="form-control" id="inputAddress"
                                        placeholder="Subtitulo">
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------- -->
                        <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn personalizado">Alterar</button>
                        </div>
                        <!-- --------------------------------------------------------- -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Final do Modal Subtitulo ----------------------------------------- -->

        <!-- Modal Titulo Introdução --------------------------------------------------- -->
        <div class="modal fade" id="modalTitulointroducao" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <!-- ↓↓ Titulo do modal ↓↓ -->
                            <p class="mx-auto">
                                Titulo da introdução atual: <strong style="font-size: 20px;" class="modal-title"
                                    id="exampleModalLabel">{{ $info->titulointroducao }}</strong>
                            </p>
                            <!-- --------------- -->
                        </div>
                        <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input name="titulointroducao" type="text" class="form-control" id="inputAddress"
                                        placeholder="Título da Introdução">
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------- -->
                        <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn personalizado">Alterar</button>
                        </div>
                        <!-- --------------------------------------------------------- -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Final do Modal Subtitulo ----------------------------------------- -->

        <!-- Modal Introdução --------------------------------------------------- -->
        <div class="modal fade" id="modalIntroducao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('info.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <!-- ↓↓ Titulo do modal ↓↓ -->
                            <p class="mx-auto">
                                Titulo da Introdução atual: <strong style="font-size: 20px;" class="modal-title"
                                    id="exampleModalLabel">{{ $info->titulointroducao }}</strong>
                            </p>
                            <!-- --------------- -->
                        </div>
                        <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <textarea name="introducao" placeholder="Introdução" class="form-control" id="inputAddress" cols="30" rows="5">aa</textarea>
                                 
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------- -->
                        <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn personalizado">Alterar</button>
                        </div>
                        <!-- --------------------------------------------------------- -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Final do Modal Introdução  ----------------------------------------- -->

        <!-- ------------------------------------------------------- -->

        <!-- Botao de navbar, informação que esta no admin, botao de informações -->
        <div class="open-menu-div">
            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>Menu</span>
            </a>
            <div class="alert alert-success d-flex align-items-center open-menu-alert" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Você está logado na conta administrador.
                </div>
            </div>
            <a class="btn btn-primary btn-customized-2 open-menu-r" data-toggle="modal" data-target="#modalInfo">
                <i class="bi bi-info-circle"></i> <span>Informações</span>
            </a>
        </div>
        <!-- ---------------------------------------------------------------------- -->

        <!-- Top content -->
        <div class="top-content section-container background-image" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="wow fadeIn">
                            <strong>
                                <!-- ↓↓ Botao que acessa o modal para alterar titulo principal ↓↓ -->
                                <a data-toggle="modal" data-target="#modalTituloPrincipal">
                                    {{ $info->tituloPrincipal }}
                                </a>
                                <!-- ------------------------------------------------------------ -->
                            </strong>
                        </h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                <!-- ↓↓ Botao que acessa o modal para alterar titulo ↓↓ -->
                                <strong>
                                    <a data-toggle="modal" data-target="#modalTitulo">
                                        {{ $info->titulo }}
                                    </a>
                                </strong>
                                <!-- -------------------------------------------------- -->
                                <br>
                                <!-- ↓↓ Botao que acessa o modal para alterar subtitulo ↓↓ -->
                                <strong>
                                    <a data-toggle="modal" data-target="#modalSubtitulo">
                                        {{ $info->subtitulo }}
                                    </a>
                                </strong>
                                <!-- ----------------------------------------------------- -->
                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a data-toggle="modal" data-target="#sobre"
                                class="btn btn-primary btn-customized scroll-link" href="#section-2" role="button">
                                <i class="bi bi-info-circle"></i> Sobre nós
                            </a>
                            {{--Modal Sobre Nós--}}
                           
                            {{--Fim Modal Sobre Nós--}}
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-5" role="button">
                                <i class="bi bi-house"></i> Nossa Pousada
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Top content -->

        <!-- Section 2 -->
        <div class="top-content section-container background-cachoeira" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col section-2 section-description wow fadeIn">
                    </div>
                </div>
                <div class="div-introducao">
                    <!-- Textos da introdução -->
                    <div class="section-2-box wow fadeInLeft">
                        <h3>
                            <a data-toggle="modal" data-target="#modalTitulointroducao">
                                {{ $info->titulointroducao }}
                            </a>
                        </h3>
                        
                        <p class="medium-paragraph">
                            <a data-toggle="modal" data-target="#modalIntroducao" style="word-break:break-all;">
                                
                                {{$info->introducao }}
                            </a>
                        </p>
                    </div>
                    <!-- Imagem da introdução -->
                    <div class="section-2-box wow fadeInUp">
                        <img src="{{ asset('assets/images/pico-bandeira.jpg') }}" alt="about-us">
                    </div>
                </div>
            </div>
        </div>

        @include('componentes.pousadas')

        <!-- Carosel das fotos -->
        <div class="d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fotos" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div style="width: 700px; height:600px;" class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/imagem1.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/imagem2.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/imagem3.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section-4-container section-container section-container-image-bg background-image-2" id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col section-4 section-description wow fadeInLeftBig">
                        <h2>Achamos que ...</h2>
                        <p>
                            Você terá uma excelente acomodação e experiência em nossas pousadas.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
                            <i class="fas fa-envelope"></i> Contato
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section-3-container section-container" id="section-3">
            <div class="container">

                <div class="row">
                    <div class="col section-3 section-description wow fadeIn">
                        <h2>Comodidades</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon radar">
                                    <i class="bi bi-wifi"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Wifi</h3>
                                <p>
                                    Temos wifi disponivel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="bi bi-door-open"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Quartos</h3>
                                <p>
                                    Cama de casal;<br>
                                    Cama de solteiro;<br>
                                    Duas camas;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

         

            </div>
        </div>

        @include('componentes.footer')

    </div>
    <!-- End content -->

</div>
<!-- End wrapper -->
@endsection