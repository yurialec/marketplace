<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token (Opcional, necessário para formulários) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Título Dinâmico -->
    <title>SISTEMA</title>

    <!-- Fontes (Google Fonts ou local) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Carrega CSS via Vite -->
    @vite(['resources/js/app.js', 'resources/sass/app_cliente.scss'])

    <!-- Meta Tags para SEO -->
    <meta name="description" content="@yield('meta_description', 'Marketplace criado com Laravel para estudos.')">
    <meta name="keywords" content="@yield('meta_keywords', 'laravel, ecommerce, marketplace, php')">
    <meta name="author" content="Seu Nome">

    <!-- Open Graph / Redes Sociais -->
    <meta property="og:title" content="@yield('og_title', config('app.name', 'Laravel Marketplace'))">
    <meta property="og:description" content="@yield('og_description', 'Marketplace criado com Laravel para estudos.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
</head>

<body id="app">
    @include('clientes.layouts.navbar')
    <main>
        <div>
            @yield('content')
        </div>
    </main>

    @include('clientes.layouts.footer')

    <!-- Scripts específicos, se necessário -->
    @stack('scripts')
</body>

</html>