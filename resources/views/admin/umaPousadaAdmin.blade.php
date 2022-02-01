@extends('estruturaHTML')

@section('conteudo')

    <div class="externo">
        <div class="div-img-pousada">

            <div class="row">
                <!-- Listando as pousadas -->
               <a style="color:#fff;" class="btn personalizado-2 btn-add" data-toggle="modal" data-target="#addpousada">
    Adicionar pousadas
</a>
                <div class="row alinhar-pousadas">
                    @foreach ($pousadaImgs as $p)

                    <div class="col-12 section-5-box wow fadeInUp">
    
                        <div>
                            <div class="section-5-box-image">
                                <a href="#">
                                    <img  src="{{Storage::url(substr($p['imagem'], 8))}}" >
                                </a>
    
                            </div>
    
                            <h3>
                                <a href="#">{{ $p['nome'] }}</a>
                                <i class="fas fa-angle-right"></i>
                            </h3>
    
                            <div class="section-5-box-date">
                                Diária: <i>R$</i> {{ $p['diaria'] }}
                                
                            </div>
    
                            <p>{{ $p['descricao'] }}</p>
    
                        </div>
    
                        <form action="{{ route('info.update', ['info' => $p['id']]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
    
                            <!-- Input para escolher a foto  -->
                            <input class="btn-image" type="file" name="imageUpdate" required class="form-control">
    
                            <!-- Botoes de alterar e deletar pousada -->
                            <div>
    
                                <button class="btn personalizado-2 btn-alterar" type="submit">Alterar</button>
    
                                <a href="{{ route('info.destroy', ['info' => $p['id']]) }}"
                                    data-confirm="Deseja Realmente Retirar Esse Item Da Mesa?" data-method="DELETE"
                                    class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                            </div>
                        </form>
                    </div>


                      {{--Adiciona novas imagens e desc pousadas modal--}}
                      <div class="modal fade" id="addpousada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                              <form class="row" action="{{ route('uploadImg', ['pousada_reg_id' => $p['pousada_reg_id']]) }}" method="POST" enctype="multipart/form-data">
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
                                  </div>
                              </div>
                  
                          </div>
                    @endforeach

        <div class="div-conteudo-pousada">
            
            <div>
                <h1>Nome da pousada</h1>
                <p>Diaria</p>
                
            </div>
            <h3>Descrição da pousada</h3>
        </div>
    </div>

@endsection
