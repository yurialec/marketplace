<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Área do Cliente - Marketplace')</title>

    <!-- CSS do cliente -->
    @vite(['resources/js/app.js', 'resources/css/app_cliente.css'])

    <!-- Fonts ou ícones, se necessário -->
    {{--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,600&display=swap"> --}}
</head>

<body id="app">
    @include('clientes.layouts.navbar')

    <main class="p-0">
        <div>
            @yield('content')
        </div>
    </main>

    @include('clientes.layouts.footer')

    <!-- Scripts específicos, se necessário -->
    @stack('scripts')
</body>

</html>