<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $pengunjungs = Pengunjung::all();
        return view('pengunjung.index', compact('pengunjungs'));
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('pengunjung.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required', // Sesuaikan input name di form nanti
        ]);

        // Catatan: Jika di DB kolomnya tetap 'no hp' (pakai spasi)
        Pengunjung::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no hp' => $request->no_hp, 
        ]);

        return redirect()->route('pengunjung.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        return view('pengunjung.edit', compact('pengunjung'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no hp' => $request->no_hp,
        ]);

        return redirect()->route('pengunjung.index')->with('success', 'Data berhasil diupdate!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->delete();

        return redirect()->route('pengunjung.index')->with('success', 'Data berhasil dihapus!');
    }
}