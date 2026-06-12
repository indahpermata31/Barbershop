@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Edit Pelanggan</h1>
        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
        @csrf
        @method('PUT')
        <input class="form-control mt-2" type="text" name="nama" id="" value="{{ $pelanggan->nama }}" placeholder="Nama Pelanggan" required>
        <input class="form-control mt-2" type="number" name="no_telepon" id="" value="{{ $pelanggan->no_telepon }}" placeholder="No Telepon" required>
        <input class="form-control mt-2" type="text" name="gender" id="" value="{{ $pelanggan->gender }}" placeholder="Gender" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="update">
    </div>
@endsection