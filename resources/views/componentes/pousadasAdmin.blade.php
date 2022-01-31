<link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">

<div class="add">
    <form class="add-pousada" action="{{ route('uploadImg') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2> Adicionar pousadas</h2>
        <input type="text" name="nome" required placeholder="Nome da pousada">
        <input type="number" name="diaria" required placeholder="Diaria">
        <input class="descricao" type="text" name="descricao" required placeholder="Descrição">
        <input type="file" name="image" required class="btn btn-primary btn-customized-2">
        <button class="btn personalizado" type="submit">Adicionar</button>
    </form>    
</div>

<br>

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

                        <button type="submit">Excluir</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
