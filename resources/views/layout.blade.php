{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Kita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; display: flex; flex-direction: column; }
        .container { flex: 1; }
        .active{ font-size:150%; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Barbershop</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link @yield('menu-dashboard-active')" href="{{ route('home.index') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-stylist-active')" href="{{ route('stylist.index') }}">Stylist</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-pelanggan-active')" href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-layanan-active')" href="{{ route('layanan.index') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-style-active')" href="{{ route('style.index') }}">Style</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-reservasi-active')" href="{{ route('reservasi.index') }}">Reservasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Barbershop</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    setTimeout(() => {
        document.querySelectorAll('.alert').forEach(el => {
            bootstrap.Alert.getOrCreateInstance(el).close();
        });
    }, 3000);
</script>
</html> --}}