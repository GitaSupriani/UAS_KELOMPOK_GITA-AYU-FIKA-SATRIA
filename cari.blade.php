@extends('layouts.app')

@section('title', 'Cari Antrian')

@section('content')
    <h2>Cari Nomor Antrian</h2>

    <form action="/antrian/cari" method="GET">
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <button type="submit" class="btn btn-success">Cari</button>
    </form>

    @if(isset($antrians))
        <h3>Hasil Pencarian untuk: <em>{{ $cari }}</em></h3>
        <ul>
            @forelse ($antrians as $antrian)
                <li>{{ $antrian->nama }}</li>
            @empty
                <li>Tidak ditemukan.</li>
            @endforelse
        </ul>
    @endif
@endsection
