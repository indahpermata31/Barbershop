<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Stylist;
use App\Models\Layanan;
use App\Models\Style;
use App\Models\Reservasi;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        // Mencari data di setiap tabel/model berdasarkan kolom nama masing-masing
        $pelanggan = Pelanggan::where('nama', 'LIKE', "%{$query}%")->get();
        $stylist = Stylist::where('nama', 'LIKE', "%{$query}%")->get();
        $layanan = Layanan::where('nama', 'LIKE', "%{$query}%")->get();
        $style = Style::where('nama', 'LIKE', "%{$query}%")->get();

        return view('search-results', compact('pelanggan', 'stylist', 'layanan', 'style', 'query'));
    }
}