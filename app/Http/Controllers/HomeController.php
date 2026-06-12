<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Stylist;
use App\Models\Pelanggan;
use App\Models\Layanan;
use App\Models\Style;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $reservasis = Reservasi::with(['stylist', 'pelanggan', 'layanan', 'style'])
                    ->latest()
                    ->get();

        return view('welcome', compact('reservasis'));
        
        // return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
