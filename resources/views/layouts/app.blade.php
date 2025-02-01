<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="font-sans antialiased bg-body text-body border vh-100">
<header>
    <nav class="navbar fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nome do Sistema</a>
            <div class="d-flex flex-col gap-2 align-items-center">
                <button id="toggle-theme"
                        class="btn btn-outline-primary"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-title="Alternar tema">
                    <i id="theme-icon" class="bi bi-sun"></i>
                </button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="btn btn-outline-primary"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Sair">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>
{{--                @include('layouts.navigation')--}}

{{--    <div class="d-flex justify-content-center">--}}
{{--        <div class="spinner-border text-primary" role="status">--}}
{{--            <span class="visually-hidden">Loading...</span>--}}
{{--        </div>--}}
{{--    </div>--}}

<main class="border border-warning p-3">
    {{ $slot }}
</main>

<footer class="bg-black app-text-footer p-2 fixed-bottom d-flex justify-content-center">
    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos os direitos reservados.</p>
</footer>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [ ...tooltipTriggerList ].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    // Função para carregar conteúdo dinâmico
    function loadContent(url) {
        $.ajax({
            url: url,
            method: 'GET',
            success: function(response) {
                $('main').html(response);  // Atualiza o conteúdo do <main>
            },
            error: function(xhr) {
                console.error('Erro ao carregar o conteúdo:', xhr.responseText);
            }
        });
    }

    // Evento de clique nos cards
    $(document).ready(function() {
        $('.dash-cards').on('click', function(e) {
            e.preventDefault();  // Evita o comportamento padrão do link
            const url = $(this).attr('href');  // Obtém a URL do link
            loadContent(url);  // Carrega o conteúdo dinamicamente
        });
    });
</script>
</body>
</html>
