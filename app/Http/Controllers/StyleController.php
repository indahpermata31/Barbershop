<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Style;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $styles = Style::all();
        return view('style.index', compact('styles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $styles = Style::all();
        return view('style.create', compact('styles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Style::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'tingkat_kesulitan' => $request->tingkat_kesulitan,
        ]);

        return redirect()->route('style.index')->with('success', 'Transaksi Berhasil!');
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
        $style = Style::findOrFail($id);
        return view('style.edit', compact('style'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $style = Style::findOrFail($id);

        $style->update([
        'nama' => $request->nama,
        'harga' => $request->harga,
        'tingkat_kesulitan' => $request->tingkat_kesulitan,
    ]);
    return redirect()->route('style.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $data = \App\Models\Style::findOrFail($id);
    $data->delete();

    return redirect()->route('style.index')->with('success', 'Data berhasil dihapus');
    }
}
