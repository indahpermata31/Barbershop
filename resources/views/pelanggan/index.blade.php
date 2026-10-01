@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>Data Pelanggan</h1>
   
        <a class="btn btn-primary" href="{{ route('pelanggan.create') }}">+ Tambah Pelanggan</a>

        <table class="table table-striped table-bordered mt-2">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>No Telepone</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

            @foreach($pelanggans as $pelanggan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelanggan->nama }}</td>
                <td>{{ $pelanggan->no_telepon }}</td>
                <td>{{ $pelanggan->gender }}</td>
                <td>{{ $pelanggan->email }}</td>
                <td>
                    <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                    class="btn btn-warning">Edit</a>

                    <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" style="display:inline;">
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