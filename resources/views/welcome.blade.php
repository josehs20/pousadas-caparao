@extends('estruturaHTML')

@section('conteudo')
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Incluindo navbar -->
        @include('componentes.navbar')

        <div class="modal" tabindex="-1" id="sobre">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><strong>Pérolas da região do capraó</strong></h5>
                        </div>
                        <div class="modal-body">
                            <p>
                                Somos pessoas preocupados em passar informações mais concretas aos turistas
                                que viajam para essa região, mostrando alguns pontos de visitações além do
                                maravilhoso Parque Nacional do Caparaó e seu ponto mais alto :O Pico da
                                Bandeira.
                            </p>
                            <p class="mb-0">
                                Seja Bem Vindo :)
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn personalizado-2" data-dismiss="modal">Sair</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <!-- open sidebar menu -->
            {{-- <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>Menu</span>
            </a> --}}

            <!-- Top content -->
            <div class="top-content section-container background-image" id="top-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="wow fadeIn"><strong>{{ $info->tituloPrincipal }}</strong></h1>
                            <div class="description wow fadeInLeft">
                                <p>
                                    <strong>{{ $info->titulo }}</strong><br>
                                    <strong>{{ $info->subtitulo }}</strong>
                                </p>
                            </div>
                            <div class="buttons wow fadeInUp">
                                <a data-toggle="modal" data-target="#sobre"
                                    class="btn btn-primary btn-customized scroll-link" href="#section-2" role="button">
                                    <i class="bi bi-info-circle"></i> Sobre nós
                                </a>
                                <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-5" role="button">
                                    <i class="bi bi-house"></i> Nossas Pousadas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Top content -->
            <br>

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
                                <strong>
                                    {{ $info->titulointroducao }}
                                </strong>
                            </h3>
                            <p class="medium-paragraph">
                               &nbsp; &nbsp;  {{ $info->introducao }}
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

            <div class="d-flex justify-content-center">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fotos" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" id="slider-s">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/carrosel1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/carrosel2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/carrosel3.jpg') }}" class="d-block w-100" alt="...">
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
                            <h2>Achamos que...</h2>
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
                                        <i class="bi bi-archive"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Frigobar.</h3>
                                    <p>
                                        Frigobar em todos os quartos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
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
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="bi bi-hdd"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Ar condicionado</h3>
                                    <p>
                                        Temos também ar condicionado, porém os quartos já são bem arejados e confortáveis.
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
