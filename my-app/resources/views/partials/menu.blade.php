<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img id="logo-boolean" src="{{ asset('images/logo.png') }}" alt="Boolean logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="lista-menu">
                <li class="nav-item {{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('homepage') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'corso' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('corso') }}">corso</a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'dopo-il-corso' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dopo-il-corso') }}">dopo il corso</a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'lezione-gratuita' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('lezione-gratuita') }}">lezione gratuita</a>
                </li>
                <li class="nav-item {{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('assumi-studenti') }}">assumi i nostri studenti</a>
                </li>
            </ul>
            <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <button class="btn btn-outline-success" type="button">CANDIDATI ORA</button>
            </form>
            </nav>
        </div>
    </nav>
</header>
