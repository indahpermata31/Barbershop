@extends('layout.app')

@section('content')
<div class="container-fluid">
    <h3>Hasil Pencarian untuk: "<strong>{{ $query }}</strong>"</h3>
    <hr>

    <!-- Hasil Pelanggan -->
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">Data Pelanggan</div>
        <div class="card-body">
            @forelse($pelanggan as $item)
                <p><strong>Nama:</strong> {{ $item->nama }}</p>
            @empty
                <p class="text-muted">Tidak ditemukan data pelanggan.</p>
            @endforelse
        </div>
    </div>

    <!-- Hasil Stylist -->
    <div class="card mb-3">
        <div class="card-header bg-success text-white">Data Stylist</div>
        <div class="card-body">
            @forelse($stylist as $item)
                <p><strong>Nama Stylist:</strong> {{ $item->nama }}</p>
            @empty
                <p class="text-muted">Tidak ditemukan data stylist.</p>
            @endforelse
        </div>
    </div>

    <!-- Hasil Layanan -->
    <div class="card mb-3">
        <div class="card-header bg-info text-white">Data Layanan</div>
        <div class="card-body">
            @forelse($layanan as $item)
                <p><strong>Layanan:</strong> {{ $item->nama_layanan }}</p>
            @empty
                <p class="text-muted">Tidak ditemukan data layanan.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection