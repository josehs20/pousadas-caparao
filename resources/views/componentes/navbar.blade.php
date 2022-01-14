{{-- navbar div --}}
<nav class="containerr" id="navbar">        
    {{-- ↓↓ logo ↓↓ --}}
    <div class="logo">
        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
    </div>
    {{-- ↓↓ ancoras para as partes da pagina ↓↓ --}}
    <ul class="nav-items" id="nav-items">
        <a href="/">
            <li class="active">Principal</li>
        </a>
        <a href="/">
            <li>Quem sou</li>
        </a>
        <a href="/">
            <li>O que faço</li>
        </a>
        <a href="/">
            <li>Minhas habilidades</li>
        </a>
        <a href="/">
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
