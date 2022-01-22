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
            @foreach ($pousadas as $pousada)

            <div class="col-md-4 section-5-box wow fadeInUp">
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
                <a class="btn btn-primary btn-customized-2" href="#" role="button">
                    <i class="fas fa-sync"></i> Editar
                </a>
            </div>
            @endforeach
            <!-- --------------------- -->
        </div>
        <div class="row">
            <div class="col section-bottom-button wow fadeInUp">
                <a class="btn btn-primary btn-customized" href="{{ route('imgPousadas')}}" role="button">
                    <i class="fas fa-sync"></i> Ver todas
                </a>

                
                <a class="btn btn-primary btn-customized-2" href="#" role="button">
                    <i class="fas fa-sync"></i> Editar
                </a>

            </div>
        </div>
    </div>
</div>