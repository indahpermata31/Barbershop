@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>Data Stylist</h1>
   
        <a class="btn btn-primary" href="{{ route('stylist.create') }}">+ Tambah Stylist</a>

        <table class="table table-striped table-bordered mt-2">
            <tr>
                <th>No</th>
                <th>Nama Stylist</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            @foreach($stylists as $stylist)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stylist->nama }}</td>
                <td>{{ $stylist->no_telepon }}</td>
                <td>{{ $stylist->alamat }}</td>
                <td>
                    <a href="{{ route('stylist.edit', $stylist->id) }}"
                    class="btn btn-warning">Edit</a>

                    <form action="{{ route('stylist.destroy', $stylist->id) }}" method="POST" style="display:inline;">
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