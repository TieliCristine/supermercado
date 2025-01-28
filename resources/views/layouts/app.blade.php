<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-body text-body">
<header class="p-4">
    <nav class="navbar fixed-top bg-dark-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>
    </nav>
</header>
<div class="m-5">
    {{--                @include('layouts.navigation')--}}
    <h3>app.blade fora do main</h3>
    <main class="border border-warning">
        {{ $slot }}
    </main>
</div>

<footer class="bg-black text-light p-4 fixed-bottom">
    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos os direitos reservados.</p>
</footer>


<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
