<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Web Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <nav class="navigation" aria-label="Navigasi utama">
            <a class="brand" href="{{ route('mahasiswa.index') }}">Web Mahasiswa</a>
            <div class="nav-links">
                <a href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
                <a href="{{ route('kalkulator.segitiga') }}">Kalkulator Segitiga</a>
            </div>
        </nav>
    </header>

    <main class="page-content">
        @yield('content')
    </main>

    <footer class="site-footer">Belajar Laravel · Data dan perhitungan sederhana</footer>
</body>
</html>
