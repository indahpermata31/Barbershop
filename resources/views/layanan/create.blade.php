@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Tambah Layanan</h1>
        <form action="{{ route('layanan.store') }}" method="post">
        @csrf
        <input class="form-control mt-2" type="text" name="nama" id="" placeholder="Nama Layanan" required>
        <input class="form-control mt-2" type="number" name="harga" id="" placeholder="Harga" required>
        <input class="form-control mt-2" type="text" name="durasi" id="" placeholder="Durasi" required>
        <input class="form-control mt-2" type="text" name="keterangan" id="" placeholder="Keterangan" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="Tambah">
    </div>
@endsection