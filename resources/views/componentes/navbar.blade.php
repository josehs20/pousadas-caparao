{{-- navbar div --}}
<nav class="containerr" id="navbar">        
    {{-- ↓↓ logo ↓↓ --}}
    <div class="logo">
        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
    </div>
    {{-- ↓↓ ancoras para as partes da pagina ↓↓ --}}
    <ul class="nav-items" id="nav-items">
        <a href="#inicio">
            <li class="active">Principal</li>
        </a>
        <a href="#introducao">
            <li>Sobre nos</li>
        </a>
        <a href="#pousadas">
            <li>Pousadas</li>
        </a>
        <a href="#rodape">
            <li>Contato</li>
        </a>
    </ul>
    {{-- ↓↓ icones de redes sociais ↓↓ --}}
    <div class="social-media">
        <a target="_blank" href="/"><i class="bi bi-linkedin"></i></a>
        <a target="_blank" href="/"><i class="bi bi-github"></i></a>
    </div>
    {{-- ↓↓ toggle menu para clicar quando a tela tiver reduzida ↓↓ --}}
    <div class="toggle-menu" id="toggle-menu">
        <div class="" id="line1"></div>
        <div class="" id="line2"></div>
        <div class="" id="line3"></div>
    </div>
</nav>

{{-- end navbar div --}}
