<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket; 

class TiketController extends Controller
{
    public function index()
    {
        $semuaTiket = Tiket::all(); 
        return view('tiket.index', compact('semuaTiket'));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'harga'         => 'required|numeric',
            'deskripsi'     => 'nullable',
        ]);

        Tiket::create([
            'nama_kategori' => $request->nama_kategori,
            'harga'         => $request->harga,
            'deskripsi'     => $request->deskripsi,
        ]);

        return redirect()->route('tiket.index')->with('success', 'Kategori tiket baru berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'harga'         => 'required|numeric',
            'deskripsi'     => 'nullable',
        ]);

        $tiket = Tiket::findOrFail($id);
        $tiket->update([
            'nama_kategori' => $request->nama_kategori,
            'harga'         => $request->harga,
            'deskripsi'     => $request->deskripsi,
        ]);

        return redirect()->route('tiket.index')->with('success', 'Kategori tiket berhasil diperbarui');
    }

    public function destroy($id)
    {
        Tiket::findOrFail($id)->delete();
        return redirect()->route('tiket.index')->with('success', 'Kategori tiket berhasil dihapus');
    }
}