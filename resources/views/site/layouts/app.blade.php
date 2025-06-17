<!DOCTYPE html>
<html lang="pt-BR" class="h-100">

<head>
    @include('site.layouts.head')
</head>

<body class="d-flex flex-column h-100">
    @include('site.layouts.navbar')
    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>
    @include('site.layouts.footer')
    @stack('scripts')
</body>

</html>