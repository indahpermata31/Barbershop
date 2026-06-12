<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stylist;

class StylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stylists = Stylist::all();
        return view('stylist.index', compact('stylists')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stylists = Stylist::all();
        return view('stylist.create', compact('stylists')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stylist::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('stylist.index')->with('success', 'Transaksi Berhasil!');
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
        $stylist = Stylist::findOrFail($id);
        return view('stylist.edit', compact('stylist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stylist = Stylist::findOrFail($id);

        $stylist->update([
        'nama' => $request->nama,
        'no_telepon' => $request->no_telepon,
        'alamat' => $request->alamat,
    ]);
    return redirect()->route('stylist.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $data = \App\Models\Stylist::findOrFail($id);
    $data->delete();

    return redirect()->route('stylist.index')->with('success', 'Data berhasil dihapus');
    }
}
