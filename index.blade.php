<!DOCTYPE html>
<html>
<head>
    <title>Daftar Antrian</title>
</head>
<body>
    <h2>Tambah Nomor Antrian</h2>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="/antrian" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Masukkan Nama" required>
        <button type="submit">Tambah</button>
    </form>

    <h3>Daftar Semua Antrian:</h3>
    <ol>
        @foreach ($antrians as $antrian)
            <li>{{ $antrian->nama }}</li>
        @endforeach
    </ol>
</body>
</html>
