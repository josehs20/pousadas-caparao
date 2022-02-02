@extends('estruturaHTML')

@section('conteudo')


<a href="{{route('pagina-principal')}}" class="btn personalizado-2 btn-add-voltar">
    Página principal
</a>

    <div class="externo">
        <div class="div-img-pousada">
                <!-- Listando as pousadas -->

                <div class="row alinhar-pousadas">
                    <div class="afoto">                        
                        <img src="{{ Storage::url(substr($idFoto['imagem'], 8)) }}">
                    </div>
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
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row alinhar-pousadas">
                    <div class="div-fotos">
                        @foreach ($pousadaImgs as $p)
                            <form action="{{route('listaUmaPousadaUsuario', $p->pousadaReg->id ? ['pousada_reg_id' => $p->pousadaReg->id] : null )}}" method="get">                                
                                <button type="submit" class="btn-fotos">
                                    <img src="{{ Storage::url(substr($p['imagem'], 8)) }}">
                                    <input name="id" type="hidden" value="{{$p->id}}">
                                </button>            
                            </form>
                        @endforeach
                    </div>
                </div>
        </div>
        <div class="div-conteudo-pousada">
            @foreach ( $pousadaImgs as $p )              
                <div>
                    <h1>{{ $p['nome'] }}</h1>
                    <p>{{ $p['diaria'] }}</p>

                </div>
                <h3>{{ $p['descricao'] }}</h3>
            @endforeach
        </div>
    </div>

@endsection
