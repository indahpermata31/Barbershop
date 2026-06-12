@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Edit Reservasi</h1>
        <form action="{{ route('reservasi.update', $reservasi->id) }}" method="post">
        @csrf
        @method('PUT')
        <select class="form-control mt-2" name="stylist_id" placeholder="Stylist" required>
            <option value="">Pilih Stylist</option>
        @foreach($stylists as $s)
            <option value="{{ $s->id }}" {{ $reservasi->stylist_id == $s->id ? 'selected' : '' }}>
            {{ $s->nama }}
            </option>
        @endforeach
        </select>

        <select class="form-control mt-2" name="pelanggan_id" placeholder="Pelanggan" required>
            <option value="">Pilih Pelanggan</option>
        @foreach($pelanggans as $p)
            <option value="{{ $p->id }}" {{ $reservasi->pelanggan_id == $p->id ? 'selected' : '' }}>
            {{ $p->nama }}
            </option>
        @endforeach
        </select>
        
        <select class="form-control mt-2" name="layanan_id" placeholder="Layanan" required>
            <option value="">Pilih Layanan</option>
        @foreach($layanans as $l)
            <option value="{{ $l->id }}" {{ $reservasi->layanan_id == $l->id ? 'selected' : '' }}>
            {{ $l->nama }}
            </option>
        @endforeach
        </select>
        
        <select class="form-control mt-2" name="style_id" placeholder="Style" required>
            <option value="">Pilih Style</option>
        @foreach($styles as $st)
            <option value="{{ $st->id }}" {{ $reservasi->style_id == $st->id ? 'selected' : '' }}>
            {{ $st->nama }}
            </option>
        @endforeach
        </select>

        <input class="form-control mt-2" type="date" name="tanggal_booking" id="" value="{{ $reservasi->tanggal_booking }}" placeholder="Tanggal Booking" required>
        
        <select class="form-control mt-2" name="status_pembayaran" id="status_pembayaran" required>
            <option value="">Pilih Status Pembayaran</option>
            <option value="Belum Lunas" 
                {{ (old('status_pembayaran', $reservasi->status_pembayaran) == 'Belum Lunas') ? 'selected' : '' }}>
                Belum Lunas
            </option>
            <option value="Lunas" 
                {{ (old('status_pembayaran', $reservasi->status_pembayaran) == 'Lunas') ? 'selected' : '' }}>
                Lunas
            </option>
        </select>
        <input class="form-control btn btn-primary mt-2" type="submit" value="update">
    </div>
@endsection