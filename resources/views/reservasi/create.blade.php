@extends('layout.app') 

@section('content') 
    <div class="container mt-4">
        <h1>Tambah Reservasi</h1>
        <form action="{{ route('reservasi.store') }}" method="post">
        @csrf
        <select class="form-control mt-2" name="stylist_id" placeholder="Stylist" required>
            <option value="">Pilih Stylist</option>
        @foreach($stylists as $s)
            <option value="{{ $s->id }}">{{ $s->nama }}</option>
        @endforeach
        </select>
        
        <select class="form-control mt-2" name="pelanggan_id" placeholder="Pelanggan" required>
            <option value="">Pilih Pelanggan</option>
        @foreach($pelanggans as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
        @endforeach
        </select>
        
        <select class="form-control mt-2" name="layanan_id" placeholder="Layanan" required>
            <option value="">Pilih Layanan</option>
        @foreach($layanans as $l)
            <option value="{{ $l->id }}">{{ $l->nama }}</option>
        @endforeach
        </select>
        
        <select class="form-control mt-2" name="style_id" placeholder="Style">
            <option value="">Pilih Style</option>
        @foreach($styles as $st)
            <option value="{{ $st->id }}">{{ $st->nama }}</option>
        @endforeach
        </select>
        
        <input class="form-control mt-2" type="date" name="tanggal_booking" id="" placeholder="Tanggal Booking" required>

        <select class="form-control mt-2" name="status_pembayaran" placeholder="Status Pembayaran" required>
        <option value="">Pilih Status Pembayaran</option>
        <option value="Belum Lunas">Belum Lunas</option>
        <option value="Lunas">Lunas</option>
        </select>
        <input class="form-control btn btn-primary mt-2" type="submit" value="Tambah">
    </div>
@endsection