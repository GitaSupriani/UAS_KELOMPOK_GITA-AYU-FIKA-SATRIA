<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;

class AntrianController extends Controller
{
    // ✅ Form tambah + filter berdasarkan tanggal
    public function create(Request $request)
    {
        $tanggal = $request->input('tanggal') ?? now()->format('Y-m-d');
        $antrians = Antrian::whereDate('created_at', $tanggal)->get();

        return view('antrian.tambah', compact('antrians', 'tanggal'));
    }

    // ✅ Simpan antrian + validasi agar tidak bisa daftar 2x di hari yang sama
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $today = now()->format('Y-m-d');

        $sudahAda = Antrian::where('nama', $request->nama)
            ->whereDate('created_at', $today)
            ->exists();

        if ($sudahAda) {
            return redirect()->back()->with('error', 'Kamu sudah mengambil antrian hari ini!');
        }

        $jumlahHariIni = Antrian::whereDate('created_at', $today)->count() + 1;
        $nomor = 'A' . str_pad($jumlahHariIni, 3, '0', STR_PAD_LEFT);

        $antrian = Antrian::create([
            'nama' => $request->nama,
            'nomor' => $nomor,
        ]);

        return redirect()->route('antrian.cetak', ['id' => $antrian->id]);
    }

    // ✅ Cetak tiket
    public function cetak($id)
    {
        $antrian = Antrian::findOrFail($id);
        return view('antrian.cetak', compact('antrian'));
    }

    // ✅ Lihat semua
    public function index()
    {
        $antrians = Antrian::all();
        return view('antrian.lihat', compact('antrians'));
    }

    // ✅ Hapus
    public function destroy($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->delete();
        return redirect('/antrian/lihat')->with('success', 'Antrian berhasil dihapus!');
    }

    // ✅ Cari
    public function search(Request $request)
    {
        $cari = $request->input('nama');
        $antrians = Antrian::where('nama', 'like', '%' . $cari . '%')->get();

        return view('antrian.cari', compact('antrians', 'cari'));
    }
}
