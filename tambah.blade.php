@extends('layouts.app')

@section('title', 'Tambah & Lihat Antrian')

@section('content')
    <h2>Tambah Antrian</h2>

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    {{-- Form Tambah --}}
    <form action="/antrian" method="POST" class="mb-4">
        @csrf
        <div class="mb-2">
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    {{-- Filter Tanggal --}}
    <form method="GET" action="/antrian/tambah" class="mb-3">
        <div class="input-group">
            <input type="date" name="tanggal" value="{{ $tanggal }}" class="form-control">
            <button type="submit" class="btn btn-secondary">Lihat</button>
        </div>
    </form>

    {{-- List Antrian --}}
    <h4>Antrian Tanggal {{ \Carbon\Carbon::parse($tanggal)->translatedFormat('d F Y') }}</h4>
    <ul class="list-group">
        @forelse ($antrians as $antrian)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $antrian->nomor }} - {{ $antrian->nama }}
                <a href="/antrian/hapus/{{ $antrian->id }}" class="btn btn-sm btn-danger">Hapus</a>
            </li>
        @empty
            <li class="list-group-item">Belum ada antrian</li>
        @endforelse
    </ul>
@endsection
