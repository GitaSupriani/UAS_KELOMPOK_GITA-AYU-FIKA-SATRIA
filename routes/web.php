<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

Route::get('/', function () {
    return view('home');
});

Route::get('/antrian/tambah', [AntrianController::class, 'create']);
Route::post('/antrian', [AntrianController::class, 'store']);
Route::get('/antrian/cetak/{id}', [AntrianController::class, 'cetak'])->name('antrian.cetak');
Route::get('/antrian/lihat', [AntrianController::class, 'index']);
Route::get('/antrian/hapus/{id}', [AntrianController::class, 'destroy']);
Route::get('/antrian/cari', [AntrianController::class, 'search']);
