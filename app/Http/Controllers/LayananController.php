<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $layanans = Layanan::all();
        return view('layanan.create', compact('layanans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Layanan::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'durasi' => $request->durasi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('layanan.index')->with('success', 'Transaksi Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $layanan = Layanan::findOrFail($id);

        $layanan->update([
        'nama' => $request->nama,
        'harga' => $request->harga,
        'durasi' => $request->durasi,
        'keterangan' => $request->keterangan,
    ]);
    return redirect()->route('layanan.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $data = \App\Models\Layanan::findOrFail($id);
    $data->delete();

    return redirect()->route('layanan.index')->with('success', 'Data berhasil dihapus');
    }
}
