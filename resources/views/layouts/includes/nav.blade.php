<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Ouvidoria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('manifestacao.form') }}">Enviar Manifestação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manifestacao.buscar') }}">Ver Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link"> Login </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid p-0">
    <img src="{{ asset('banner-ouvidoria.png') }}" alt="banner" class="w-100" />
</div>