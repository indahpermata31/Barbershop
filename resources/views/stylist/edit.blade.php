@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Edit Stylish</h1>
        <form action="{{ route('stylist.update', $stylist->id) }}" method="post">
        @csrf
        @method('PUT')
        <input class="form-control mt-2" type="text" name="nama" id="" value="{{ $stylist->nama }}" placeholder="Nama Stylish" required>
        <input class="form-control mt-2" type="text" name="no_telepon" id="" value="{{ $stylist->no_telepon }}" placeholder="no_telepon" required>
        <input class="form-control mt-2" type="text" name="alamat" id="" value="{{ $stylist->alamat }}" placeholder="Alamat" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="update">
    </div>
@endsection