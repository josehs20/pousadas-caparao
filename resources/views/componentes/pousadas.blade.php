<!-- Section 5 -->
<br>
<div class="section-5-container section-container background-pedras" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col section-5 section-description wow fadeIn">
                <h2 style="color: #fff; font-style: italic;">Nossas Pousadas</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p style="color: #fff;" >Lindas e aconchegantes pousadas. Confira! ↓</p>
            </div>
        </div>
        <div class="top-content section-container" id="top-content" style="	background: rgb(0, 0, 0) transparent;
        background: rgba(0, 0, 0, 0.7); border-radius: 15px" >
            <div class="container">
                <div class="row alinhar-pousadas">
                    <!-- Listando as pousadas -->
        
                    @foreach ($pousadas as $p)
        
                    <div class="col-md-4 section-5-box wow fadeInUp" style="background: rgb(80, 79, 79) transparent;
                    background: rgba(99, 98, 98, 0.7); border-radius: 15px">
                        <div class="section-5-box-image">
                            <img src="{{ $p['imagem'] }}" alt="portfolio-1">
                        </div>
                        <h3>
                            
                            <a style="color: #fff"
                                href="{{ route('listaUmaPousada', $p['pousada_reg_id'] ? ['pousada_reg_id' => $p['pousada_reg_id']] : null) }}">{{
                                $p->pousadaReg->nome }}</a>
                          
                            <i class="fas fa-angle-right"></i>
                        </h3>
                        <div class="section-5-box-date">
                            <p> {{ strlen($p->pousadaReg->descricao) <= 38 ? $p->pousadaReg->descricao : substr($p->pousadaReg->descricao, 0, 20) }}</p>
                            <p>{{ $p->pousadaReg['cidade'] }}</p>
                            
                            
                        </div>
                    </div>
                    @endforeach
                    <!-- --------------------- -->
                </div>

            </div>  
           
            <a href="https://goo.gl/maps/Z1zswMGb8GJrTBEg7" ><img class="mx-5" src="{{asset('mapa.png')}}" alt="" style="margin-top: 100px;"></i></a><a href="https://api.whatsapp.com/send?phone=5528999796730&text=Olá. Quero Conhecer a Pousada Da Tia Roze e Região:)" ><img class="mx-5" src="{{asset('whatsapp.png')}}" alt="" style="margin-top: 100px;"></a>
        </div>
        <div class="row">
            <div class="col section-bottom-button wow fadeInUp">

                @if (!auth()->user())
                <a href="{{route('imgPousadas')}}" class="btn btn-primary btn-customized" role="button">
                    <i class="fas fa-sync"></i> Ver todas
                </a>
                @endif
                @if (auth()->user())
                <a class="btn btn-primary btn-customized-2" href="{{ route('imgPousadas')}}" role="button">
                    <i class="fas fa-sync"></i> Editar
                </a>
                @endif

                <!-- Obtendo a url atual e se for 
                    url do admin eu mostrar botao de editar -->
               
            </div>
        </div>
    </div>
</div>