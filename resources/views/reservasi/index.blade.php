@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>Data Reservasi</h1>
        
        <a class="btn btn-primary" href="{{ route('reservasi.create') }}">+ Tambah Reservasi</a>

        <table class="table table-striped table-bordered mt-2">
            <tr>
                <th>No</th>
                <th>Stylist</th>
                <th>Nama pelanggan</th>
                <th>Layanan</th>
                <th>Style</th>
                <th>Tanggal Booking</th>
                <th>Total harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            @foreach($reservasis as $reservasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $reservasi->stylist?->nama }}</td>
                <td>{{ $reservasi->pelanggan?->nama }}</td>
                <td>{{ $reservasi->layanan?->nama }}</td>
                <td>{{ $reservasi->style?->nama }}</td>
                <td>{{ $reservasi->tanggal_booking }}</td>
                <td>Rp {{ number_format($reservasi->total_harga, 0, ',', '.') }}</td>
                <td>{{ $reservasi->status_pembayaran }}</td>
                <td>
                    <a href="{{ route('reservasi.edit', $reservasi->id) }}"
                    class="btn btn-warning">Edit</a>

                    <form action="{{ route('reservasi.destroy', $reservasi->id) }}" method="POST" style="display:inline;">
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