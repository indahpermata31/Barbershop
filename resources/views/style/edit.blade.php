@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Edit Style</h1>
        <form action="{{ route('style.update', $style->id) }}" method="post">
        @csrf
        @method('PUT')
        <input class="form-control mt-2" type="text" name="nama" id="" value="{{ $style->nama }}" placeholder="Nama Style" required>
        <input class="form-control mt-2" type="number" name="harga" id="" value="{{ $style->harga }}" placeholder="harga" required>
        <input class="form-control mt-2" type="text" name="tingkat_kesulitan" id="" value="{{ $style->tingkat_kesulitan }}" placeholder="tingkat_kesulitan" required>
        <input class="form-control btn btn-primary mt-2" type="submit" value="update">
    </div>
@endsection