@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>Data Style</h1> 
   
         <a class="btn btn-primary" href="{{ route('style.create') }}">+ Tambah Style</a>
        
         {{-- <div class="row mb-0">
        <div class="col">
        <h5 class="mt-3">Data Style</h5>
        </div>
        <div class="col-auto text-end">
        <a class="btn btn-primary" href="{{ route('style.create') }}">+ Tambah S</a>
        </div> --}}
        

        <table class="table table-striped table-bordered mt-2">
            <tr>
                <th>No</th>
                <th>Nama Style</th>
                <th>Harga</th>
                <th>Tingkat Kesulitan</th>
                <th>Aksi</th>
            </tr>

            @foreach($styles as $style)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $style->nama }}</td>
                <td>Rp {{ number_format($style->harga, 0, ',', '.') }}</td>
                <td>{{ $style->tingkat_kesulitan }}</td>
                <td>
                    <a href="{{ route('style.edit', $style->id) }}"
                    class="btn btn-warning">Edit</a>

                    <form action="{{ route('style.destroy', $style->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection