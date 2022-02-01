<link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/siedbar/css/style.css') }}">

<a href="{{route('info.index')}}" class="btn personalizado-2 btn-add-voltar">
    Voltar
</a>

<a style="color:#fff;" class="btn personalizado-2 btn-add" data-toggle="modal" data-target="#addpousada">
    Adicionar pousadas
</a>
<a style="" class="btn btn-primary" data-toggle="modal" data-target="#registra">
    registrar Nova Pousada
</a>

{{-- Modal Registro de Pousada --}}
<div class="modal fade" id="registra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <!-- ↓↓ Titulo do modal ↓↓ -->
                <p class="mx-auto">
                    <strong style="font-size: 20px;" class="modal-title" id="exampleModalLabel">
                        Registro de pousada
                    </strong>
                </p>

                <!-- --------------- -->
            </div>


            <form class="row" action="{{ route('pousadaReg') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">

                            <div class="row">
                                <input class="campos" type="text" name="nome" required placeholder="Nome da pousada">
                            </div>
                            <div class="row">
                                <input class="campos" type="text" step="any" name="cidade" required
                                    placeholder="Cidade">

                                <label for="">Opcional</label>
                                <input class="campos" type="text" step="any" name="Localizacao"
                                    placeholder="Localização">

                                <label for="">Escolha sua primeira imagem </label>
                                <input class="campos" type="file" name="image" required
                                    class="btn btn-primary btn-customized-2">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------- -->
                <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                <div class="modal-footer">
                    <button type="submit" class="btn personalizado">Adicionar</button>
                </div>
            </form>
            <!-- --------------------------------------------------------- -->

        </div>
    </div>
</div>
{{--Fim Modal Registra Pousada--}}






<!-- Modal adionar pousada --------------------------------------------------- -->
{{--<div class="modal fade" id="addpousada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <!-- ↓↓ Titulo do modal ↓↓ -->
                <p class="mx-auto">
                    <strong style="font-size: 20px;" class="modal-title" id="exampleModalLabel">
                        Adicionar Fotos Das Pousadas
                    </strong>
                </p>

                <!-- --------------- -->
            </div>
            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
            <form class="row" action="{{ route('uploadImg') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">

                            <div class="row">
                                <input class="campos" type="text" name="nome" required placeholder="Nome da pousada">
                            </div>
                            <div class="row">
                                <input class="campos" type="number" step="any" name="diaria" required
                                    placeholder="Diaria">
                                <input class="descricao" type="text" name="descricao" required placeholder="Descrição">
                                <input class="campos" type="file" name="image" required
                                    class="btn btn-primary btn-customized-2">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------- -->
                <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                <div class="modal-footer">
                    <button type="submit" class="btn personalizado">Adicionar</button>
                </div>
            </form>
            <!-- --------------------------------------------------------- -->

        </div>
    </div>
</div>--}}
<!-- Final do Modal adionar pousada ----------------------------------------- -->


<!-- Section 5 -->
<div class="section-5-container section-container" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col section-5 section-description wow fadeIn">
                <h2>Nossas Pousadas</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>Adicione, altere, edite ou exclua suas pousadas.</p>
            </div>
        </div>
        <div class="row">
            <!-- Listando as pousadas -->
            

            @if (!sizeof($pousada))
            <div class="alert alert-primary" role="alert">
                nenhuma imagem por enquanto
            </div>
            @else
            <div class="row alinhar-pousadas">
                @foreach ($pousada as $p)
                

                <div class="col-12 section-5-box wow fadeInUp">

                    <div>
                        <div class="section-5-box-image">
                            <a href="#">
                                <img src="{{ $p['imagem'] }}" alt="portfolio-1">
                            </a>

                        </div>

                        <h3>
                            <a href="#">{{ $p['nome'] }}</a>
                            <i class="fas fa-angle-right"></i>
                        </h3>

                        <div class="section-5-box-date">
                            Diária: <i>R$</i> {{ $p['diaria'] }}
                            <p>Localização/cidade: {{$p->pousadaReg->cidade}}</p>
                        </div>

                        <p>{{ $p['descricao'] }}</p>

                    </div>

                    {{--<form action="{{ route('info.update', ['info' => $p->pousada[0]['id']]) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <!-- Input para escolher a foto  -->
                        <input class="btn-image" type="file" name="imageUpdate" required class="form-control">--}}

                        <!-- Botoes de alterar e deletar pousada -->
                        <div>

                            <a class="btn personalizado-2 btn-alterar" href="{{ route('listaUmaPousada', ['pousada_reg_id' => $p['pousada_reg_id']]) }}"><i class="bi bi-pencil-square"></i></a>

                            <a href="{{ route('info.destroy', ['info' => $p['id']]) }}"
                                data-confirm="Deseja Realmente Retirar Esse Item Da Mesa?" data-method="DELETE"
                                class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                        </div>
                 
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>