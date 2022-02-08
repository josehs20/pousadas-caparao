<!-- Section 5 -->
<br>
<div class="section-5-container section-container background-pedras" id="section-5">
    <div class="container">
        <div class="row">
            <div class="col section-5 section-description wow fadeIn">
                <h2 style="color: #fff; font-style: italic;">
                    <strong>Nossas Pousadas</strong>
                </h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p style="color: #fff;">Confira nossas pousadas! <i class="bi bi-arrow-down-square-fill"></i> </p>
            </div>
        </div>
        <div class="top-content section-container" id="top-content" style="	background: rgb(0, 0, 0) transparent;
        background: rgba(0, 0, 0, 0.7); border-radius: 15px">
            <div class="container">
                <div class="row alinhar-pousadas">
                    <!-- Listando as pousadas -->

                    @foreach ($pousadas as $p)
                        <div class="card wow fadeInUp" style="width: 20rem; margin: 10px; text-align: left;">
                            <img style="height: 250px;" class="card-img-top" src="{{ $p['imagem'] }}" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a style="border-bottom: none;" href="{{ route('listaUmaPousada', $p['pousada_reg_id'] ? ['pousada_reg_id' => $p['pousada_reg_id']] : null) }}">{{ $p->pousadaReg->nome }}</a>
                                    &nbsp; <i class="fas fa-angle-right"></i>
                                </h3>
                                <p class="card-text">
                                    <p> {{ substr($p->pousadaReg->descricao, 0, 31) }} ... </p>                                        
                                    <p>Cidade: {{$p->pousadaReg->cidade}}</p>
                                    <p>Localização: {{ $p->pousadaReg->localizacao }}</p>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <!-- --------------------- -->
                </div>
                @if (!auth()->user())
                    <a href="{{ route('imgPousadas') }}" class="btn btn-primary btn-customized" role="button">
                        <i class="fas fa-sync"></i> Ver todas
                    </a>
                @endif
                @if (auth()->user())
                    <a class="btn btn-primary btn-customized-2" href="{{ route('imgPousadas') }}" role="button">
                        <i class="fas fa-sync"></i> Editar
                    </a>
                @endif

            </div>

            <a style="border: 0;" href="https://goo.gl/maps/Z1zswMGb8GJrTBEg7">
                <img class="mx-5" src="{{ asset('mapa.png') }}"
                    alt="" style="margin-top: 100px;">
            </a>

            <a style="border: 0;" href="https://api.whatsapp.com/send?phone=5528999796730&text=Olá. Quero Conhecer a Pousada Da Tia Roze e Região:)">
                <img class="mx-5" src="{{ asset('whatsapp.png') }}" alt="" style="margin-top: 100px;">
            </a>
        </div>
    </div>
</div>
