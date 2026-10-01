@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Tambah Pelanggan</h1>
        <form action="{{ route('pelanggan.store') }}" method="post">
        @csrf
        <input class="form-control mt-2" type="text" name="nama" id="" placeholder="Nama Pelanggan" required>
        <input class="form-control mt-2" type="number" name="no_telepon" id="" placeholder="No Telepon" required>
        <input class="form-control mt-2" type="text" name="gender" id="" placeholder="Gender" required>
        <input class="form-control mt-2" type="text" name="email" id="" placeholder="Email" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="Tambah">
    </div>
@endsection