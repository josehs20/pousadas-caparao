@extends('estruturaHTML')

@section('conteudo')

    <a href="{{ route('imgPousadas') }}" class="btn personalizado-2 btn-add-voltar">
        <i class="bi bi-arrow-left"></i>
    </a>

    <a href="{{ route('info.index') }}" class="btn personalizado-2 btn-add-voltar-principal">
        <i class="bi bi-house-door"></i>
    </a>

    <div class="externo">
        <div class="interno">
            <div class="div-img-pousada">
                <!-- Listando as pousadas -->
                <div class="row alinhar-pousadas">
                    <div class="afoto">
                        <img src="{{ $idFoto ? Storage::url(substr($idFoto['imagem'], 8)) : ''  }}">
                    </div>

                    @if (auth()->user())
                        <a class="btn personalizado-2 btn-add-foto" data-toggle="modal" data-target="#addpousada">
                            <i class="bi bi-plus-lg"></i>
                        </a>
                    @endif
                    
                    @if (auth()->user())
                        <a href="{{ route('info.destroy',  $idFoto ? ['info' => $idFoto['id']] : '' )}}"
                            data-confirm="Deseja Realmente Retirar Esse Item Da Mesa?" data-method="DELETE"
                            class="btn btn-danger btn-excluir"> <i class="bi bi-trash"></i></a>
                    @endif

                    @foreach ($pousadaImgs as $p)

                        {{-- Adiciona novas imagens e desc pousadas modal --}}
                        <div class="modal fade" id="addpousada" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <!-- ↓↓ Titulo do modal ↓↓ -->
                                        <p class="mx-auto">
                                            <strong style="font-size: 20px;" class="modal-title" id="exampleModalLabel">
                                                Adicione fotos para sua pousada Pousada
                                            </strong>
                                        </p>

                                        <!-- --------------- -->
                                    </div>
                                    <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                                    <form class="row"
                                        action="{{ route('uploadImg', ['pousada_reg_id' => $p['pousada_reg_id']]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="row">
                                                        <input class="campos" type="file" name="imagem" required
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
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row alinhar-pousadas">
                    <div class="div-fotos">
                        @foreach ($pousadaImgs as $p)
                            <form
                                action="{{ route('listaUmaPousada', $p->pousadaReg->id ? ['pousada_reg_id' => $p->pousadaReg->id] : null) }}"
                                method="get">
                                <button type="submit" 
                                        class="btn-fotos" 
                                        style=" background-image: url({{ Storage::url(substr($p['imagem'], 8)) }});
                                        background-size: cover;
                                        background-position: center;
                                        width: 120px; height: 70px;
                                        display: flex; justify-content: center; align-items:center;">
                                    
                                    <h3 class="search-ativa"><i class="bi bi-arrows-fullscreen"></i></h3>
                                    <input name="id" type="hidden" value="{{ $p->id }}">
                                </button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="div-conteudo-pousada">
                @foreach ($pousadaImgs as $p)
                    <div>                        
                        <h1>{{ $p->pousadaReg['nome'] }}</h1>
                        <p>{{ $p->pousadaReg['descricao'] }}</p>
                        <p>{{ $p->pousadaReg['cidade'] }}</p>
                        <p>{{ $p->pousadaReg['localizacao'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
