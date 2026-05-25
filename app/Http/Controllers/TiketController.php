<?php
namespace App\Http\Controllers;
use App\Tiket; 
use Illuminate\Http\Request;

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
            'nama_pengunjung' => 'required',
            'jenis_tiket' => 'required',
            'harga' => 'required|numeric',
        ]);

        Tiket::create($request->all());

        return redirect()->route('tiket.index')
                         ->with('success', 'Tiket berhasil dipesan!');
    }

    public function show($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.show', compact('tiket'));
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return redirect()->route('tiket.index')
                         ->with('success', 'Tiket berhasil dibatalkan.');
    }
}