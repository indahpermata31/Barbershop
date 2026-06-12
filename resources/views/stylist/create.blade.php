@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Tambah Stylist</h1>
        <form action="{{ route('stylist.store') }}" method="post">
        @csrf
        <input class="form-control mt-2" type="text" name="nama" id="" placeholder="Nama Stylish" required>
        <input class="form-control mt-2" type="number" name="no_telepon" id="" placeholder="no_telepon" required>
        <input class="form-control mt-2" type="text" name="alamat" id="" placeholder="Alamat" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="Tambah">
    </div>
@endsection