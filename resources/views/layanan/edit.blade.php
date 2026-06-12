@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Edit Layanan</h1>
        <form action="{{ route('layanan.update', $layanan->id) }}" method="post">
        @csrf
        @method('PUT')
        <input class="form-control mt-2" type="text" name="nama" id="" value="{{ $layanan->nama }}" placeholder="Nama Layanan" required>
        <input class="form-control mt-2" type="number" name="harga" id="" value="{{ $layanan->harga }}" placeholder="Harga" required>
        <input class="form-control mt-2" type="text" name="durasi" id="" value="{{ $layanan->durasi }}" placeholder="Durasi" required>
        <input class="form-control mt-2" type="text" name="keterangan" id="" value="{{ $layanan->keterangan }}" placeholder="Keterangan" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="update">
    </div>
@endsection