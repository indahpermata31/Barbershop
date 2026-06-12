<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Stylist;
use App\Models\Pelanggan;
use App\Models\Layanan;
use App\Models\Style;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservasis = Reservasi::with(['stylist', 'pelanggan', 'layanan', 'style'])->get();
        return view('reservasi.index', compact('reservasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stylists = Stylist::all();
        $pelanggans = Pelanggan::all();
        $layanans = layanan::all();
        $styles = Style::all();
        return view('reservasi.create', compact('stylists','pelanggans','layanans','styles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $layanan = Layanan::findOrFail($request->layanan_id);
        $style = Style::findOrFail($request->style_id);

        $total_harga = $layanan->harga + $style->harga;

        Reservasi::create([
            'stylist_id' => $request->stylist_id,
            'pelanggan_id' => $request->pelanggan_id,
            'layanan_id' => $request->layanan_id,
            'style_id' => $request->style_id,
            'tanggal_booking' => $request->tanggal_booking,
            'total_harga' => $total_harga,
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        return redirect()->route('reservasi.index')->with('success', 'Transaksi Berhasil!');
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
        $reservasi = Reservasi::findOrFail($id);
        $stylists = Stylist::all();
        $pelanggans = Pelanggan::all();
        $layanans = Layanan::all();
        $styles = Style::all();
        return view('reservasi.edit', compact('reservasi','stylists','pelanggans','layanans','styles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $layanan = Layanan::findOrFail($request->layanan_id);
        $style = Style::findOrFail($request->style_id);

        $total_harga = $layanan->harga + $style->harga;

        $reservasi->update([
        'stylist_id' => $request->stylist_id,
        'pelanggan_id' => $request->pelanggan_id,
        'layanan_id' => $request->layanan_id,
        'style_id' => $request->style_id,
        'tanggal_booking' => $request->tanggal_booking,
        'total_harga' => $total_harga,
        'status_pembayaran' => $request->status_pembayaran,
    ]);
    return redirect()->route('reservasi.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $data = \App\Models\Reservasi::findOrFail($id);
    $data->delete();

    return redirect()->route('reservasi.index')->with('success', 'Data berhasil dihapus');
    }
}
