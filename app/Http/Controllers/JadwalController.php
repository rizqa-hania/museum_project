<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam'     => 'required',
            'kuota'   => 'required|integer|min:1',
        ]);

        Jadwal::create([
            'tanggal' => $request->tanggal,
            'jam'     => $request->jam,
            'kuota'   => $request->kuota,
        ]);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam'     => 'required',
            'kuota'   => 'required|integer|min:1',
        ]);

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
            'tanggal' => $request->tanggal,
            'jam'     => $request->jam,
            'kuota'   => $request->kuota,
        ]);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal::where('jadwal_id', $id)->delete();
        return redirect()->route('jadwal.index');
    }

    public function aktif($id)
    {
        Jadwal::where('jadwal_id', $id)->update(['status' => 'aktif']);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diaktifkan.');
    }

    public function nonaktif($id)
    {
        Jadwal::where('jadwal_id', $id)->update(['status' => 'nonaktif']);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dinonaktifkan.');
    }
}
