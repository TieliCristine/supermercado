<nav class="navbar navbar-light bg-body border-bottom shadow-sm fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand ms-2">
            <img id="logo" src="{{ asset('images/logo3.png') }}" alt="Logo" width="40" height="40"
                 data-logo-light="{{asset('images/logo3.png')}}"
                 data-logo-dark="{{asset('images/logo3b.png')}}">
        </a>
        <h4>Nome da Empresa</h4>
        <div class="d-flex gap-3 align-items-center">
            <button id="toggle-theme" class="btn btn-outline-primary">
                <i id="theme-icon" class="bi bi-sun"></i>
            </button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-warning">
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </form>
        </div>

    </div>
</nav>

<!-- Sidebar Fixa -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Estoque</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Financeiro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fornecedores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Relatórios</a>
        </li>
    </ul>
</div>

<a href="#" class="navbar-brand ms-2">
    <img id="logo" src="{{ asset('images/logo3b.png') }}" alt="Logo" width="40" height="40">
</a>

<button id="toggle-theme" class="btn btn-outline-primary">
    <i id="theme-icon" class="bi bi-sun"></i>
</button>
