<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body 
    class="container mt-4"
    style="background-image: url('{{ asset('cover.jpg') }}'); 
           background-size: cover; 
           background-repeat: no-repeat;
           background-attachment: fixed;">
    
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">🏠 Home</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/antrian/tambah" class="nav-link">Tambah</a></li>
                    <li class="nav-item"><a href="/antrian/lihat" class="nav-link">Lihat Daftar</a></li>
                    <li class="nav-item"><a href="/antrian/cari" class="nav-link">Cari</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Isi halaman --}}
    <div style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
        @yield('content')
    </div>

</body>
</html>
