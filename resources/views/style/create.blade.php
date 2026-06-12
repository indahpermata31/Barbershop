@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Tambah Style</h1>
        <form action="{{ route('style.store') }}" method="post">
        @csrf
        <input class="form-control mt-2" type="text" name="nama" id="" placeholder="Nama Style" required>
        <input class="form-control mt-2" type="number" name="harga" id="" placeholder="harga" required>
        <input class="form-control mt-2" type="text" name="tingkat_kesulitan" id="" placeholder="tingkat_kesulitan" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="Tambah">
    </div>
@endsection