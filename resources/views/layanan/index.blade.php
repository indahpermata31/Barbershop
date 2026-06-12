@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>Data Layanan</h1>
   
        <a class="btn btn-primary" href="{{ route('layanan.create') }}">+ Tambah Layanan</a>

        <table class="table table-striped table-bordered mt-2">
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Harga</th>
                <th>Durasi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

            @foreach($layanans as $layanan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $layanan->nama }}</td>
                <td>Rp {{ number_format($layanan->harga, 0, ',', '.') }}</td>
                <td>{{ $layanan->durasi }}</td>
                <td>{{ $layanan->keterangan }}</td>
                <td>
                    <a href="{{ route('layanan.edit', $layanan->id) }}"
                    class="btn btn-warning">Edit</a>

                    <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline;">
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