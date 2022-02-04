@extends('estruturaHTML')

@section('conteudo')

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

            <link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/siedbar/css/style.css') }}">
            
            <a href="{{route('info.index')}}" class="btn personalizado-2 btn-add-voltar">
                <i class="bi bi-arrow-left"></i>
            </a>
            @if (auth()->user())
            <a style="color: #fff;" class="btn personalizado-2 btn-add" data-toggle="modal" data-target="#registra">
                Adicionar Pousadas
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
            @endif
            <!-- Section 5 -->
            <div class="section-5-container section-container" id="section-5">
                <div class="container">
                    <div class="row">
                        <div class="col section-5 section-description wow fadeIn">
                            <h2>Nossas Pousadas</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                            @if (auth()->user())
                                <p>Adicione, altere, edite ou exclua suas pousadas.</p>
                            @else
                                <p>Confira todas as nossas pousadas</p>
                            @endif
                          
                        </div>
                    </div>
                    <div class="row">
                        <!-- Listando as pousadas -->
                        
            
                        @if (sizeof($pousadas) == 0)
                            <div class="alert alert-primary" role="alert">
                                Nenhuma imagem por enquanto.
                            </div>
                        @else
                        <div class="row alinhar-pousadas">
                            @foreach ($pousadas as $p)
            
                            <div class="col-12 section-5-box wow fadeInUp">
            
                                <div>
                                    <div class="section-5-box-image">
                                        <a href="{{ route('listaUmaPousada', ['pousada_reg_id' => $p['pousada_reg_id']])  }}"">
                                            <img src="{{ $p['imagem'] }}" alt="portfolio-1">
                                        </a>
            
                                    </div>
            
                                    <h3>
                                        <a href="{{ route('listaUmaPousada', ['pousada_reg_id' => $p['pousada_reg_id']])  }}">{{ $p->pousadaReg['nome'] }}</a>
                                        <i class="fas fa-angle-right"></i>
                                    </h3>
            
                                    <div class="section-5-box-date">
                                        Diária: <i>R$</i> {{ $p['diaria'] }}
                                        <p>Localização/cidade: {{$p->pousadaReg->cidade}}</p>
                                    </div>
            
                                    <p>{{ $p['descricao'] }}</p>
            
                                </div>
            
                             @if (auth()->user())
                                <div class="btns">                
                                    <a class="btn personalizado-2 btn-alterar" href="{{ route('listaUmaPousada', ['pousada_reg_id' => $p['pousada_reg_id']]) }}"><i class="bi bi-pencil-square"></i></a>
        
                                    <a href="{{ route('info.destroy', ['info' => $p['id']]) }}"
                                        data-confirm="Deseja Realmente Retirar Esse Item Da Mesa?" data-method="DELETE"
                                        class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                                </div>
                             @endif
                             
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div> 



        </div>


    </div>

@endsection
