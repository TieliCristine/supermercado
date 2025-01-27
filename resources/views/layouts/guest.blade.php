<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="border border-danger bg-secondary vh-100 vw-100">
<header>
    <h1>guest.blade.php</h1>
</header>
<main class="border border-warning">
    {{ $slot }}
</main>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
