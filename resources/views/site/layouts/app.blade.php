<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('site.layouts.head')
</head>

<body>
    @include('site.layouts.navbar')

    <main class="container py-4">
        @yield('content')
    </main>

    @include('site.layouts.footer')
    @stack('scripts')
</body>

</html>