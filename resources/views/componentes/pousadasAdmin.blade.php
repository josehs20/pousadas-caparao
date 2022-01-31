<link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">


<!-- Modal Introdução --------------------------------------------------- -->
<div class="modal fade" id="addpousada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <!-- ↓↓ Titulo do modal ↓↓ -->
                <p class="mx-auto">
                    <strong style="font-size: 20px;" class="modal-title" id="exampleModalLabel">
                        Adicionar Pousadas
                    </strong>
                </p>
                <!-- --------------- -->
            </div>
            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
            <form class="row" action="{{ route('uploadImg') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">

                            <div class="row">
                                <input class="campos" type="text" name="nome" required
                                    placeholder="Nome da pousada">
                            </div>
                            <div class="row">
                                <input class="campos" type="number" step="any" name="diaria" required placeholder="Diaria">
                                <input class="descricao" type="text" name="descricao" required
                                    placeholder="Descrição">
                                <input class="campos" type="file" name="image" required
                                    class="btn btn-primary btn-customized-2">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------- -->
                <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                <div class="modal-footer">
                    <button type="submit" class="btn personalizado">Alterar</button>
                </div>
            </form>
            <!-- --------------------------------------------------------- -->

        </div>
    </div>
</div>
<!-- Final do Modal Subtitulo ----------------------------------------- -->


<a class="btn personalizado-2 btn-add" data-toggle="modal" data-target="#addpousada">
    Adicionar pousadas
</a>


<!-- Section 5 -->
<div class="section-5-container section-container" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col section-5 section-description wow fadeIn">
                <h2>Nossas Pousadas</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>Lindas e aconchegantes pousadas. Confira! ↓</p>
            </div>
        </div>
        <div class="row alinhar-pousadas">
            <!-- Listando as pousadas -->

            <div class="row">
                @foreach ($pousadas as $pousada)

                    <div class="col-md-3 section-5-box wow fadeInUp">
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
                        <form action="{{ route('info.update', ['info' => $pousada['id']]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="file" name="imageUpdate" required class="btn btn-primary btn-customized-2">
                            <button type="submit">Alterar</button>
                        </form>

                        <a href="{{ route('info.destroy', ['info' => $pousada['id']]) }}"
                            data-confirm="Deseja Realmente Retirar Esse Item Da Mesa?" data-method="DELETE"
                            class="btn btn-primary col-12">Excluir</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
