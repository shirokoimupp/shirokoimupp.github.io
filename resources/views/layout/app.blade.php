<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PixelMerch')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    @include('layout.navbar')

    <main class="flex-fill">
        <div class="container-fluid">
            <!-- tambahkan class has-sidebar jika view punya bagian sidebar -->
            <div class="layout-with-sidebar {{ View::hasSection('sidebar') ? 'has-sidebar' : '' }}">
                {{-- Sidebar hanya muncul kalau view mendefinisikan section "sidebar" --}}
                @hasSection('sidebar')
                <div class="d-none d-md-block">
                    @yield('sidebar')
                </div>
                @endif

                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>