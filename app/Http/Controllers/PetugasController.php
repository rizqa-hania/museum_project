<?php
namespace App\Http\Controllers;
use App\Petugas; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'shift' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        Petugas::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'shift' => $request->shift,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('petugas.index')->with('success', 'Petugas baru berhasil didaftarkan!');
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'shift' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $petugas = Petugas::findOrFail($id);
        $petugas->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'shift' => $request->shift,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('petugas.index')->with('success', 'Data petugas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Petugas::findOrFail($id)->delete();
        return redirect()->route('petugas.index')->with('success', 'Petugas telah dihapus.');
    }
}