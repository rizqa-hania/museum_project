<?php
namespace App\Http\Controllers;
use App\Pengunjung;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
   
    public function index()
    {
        $pengunjungs = Pengunjung::all();
        return view('pengunjung.index', compact('pengunjungs'));
    }

   
    public function create()
    {
        return view('pengunjung.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required', 
        ]);

       
        Pengunjung::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no hp' => $request->no_hp, 
        ]);

        return redirect()->route('pengunjung.index')->with('success', 'Data berhasil ditambahkan!');
    }

    
    public function edit($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        return view('pengunjung.edit', compact('pengunjung'));
    }

    
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

   
    public function destroy($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->delete();

        return redirect()->route('pengunjung.index')->with('success', 'Data berhasil dihapus!');
    }
}