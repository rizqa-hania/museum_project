<?php

namespace App\Http\Controllers;

use App\Models\Tiket; // Pastikan Anda sudah membuat Model Tiket
use Illuminate\Http\Request;

class TiketController extends Controller
{
    // Menampilkan daftar tiket museum
    public function index()
    {
        $semuaTiket = Tiket::all(); 
        return view('tiket.index', compact('semuaTiket'));
    }

    // Menampilkan form tambah tiket
    public function create()
    {
        return view('tiket.create');
    }

    // Menyimpan data tiket baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengunjung' => 'required',
            'jenis_tiket' => 'required',
            'harga' => 'required|numeric',
        ]);

        Tiket::create($request->all());

        return redirect()->route('tiket.index')
                         ->with('success', 'Tiket berhasil dipesan!');
    }

    // Menampilkan detail satu tiket
    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.show', compact('tiket'));
    }

    // Menghapus tiket
    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return redirect()->route('tiket.index')
                         ->with('success', 'Tiket berhasil dibatalkan.');
    }
}