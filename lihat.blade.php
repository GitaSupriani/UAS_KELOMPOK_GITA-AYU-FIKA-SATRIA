
@extends('layouts.app')

@section('title', 'Daftar Antrian')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($antrians as $index => $antrian)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $antrian->nama }}</td>
                    <td>
                        <a href="/antrian/hapus/{{ $antrian->id }}" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
