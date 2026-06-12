@extends('layout.app')

@section('content')

    <!-- [ Main Content ] start -->
    <div class="row">

        {{-- ===== STAT CARDS ===== --}}
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Profit</h6>
                            <h3 class="m-b-0 text-white">Rp.30Jt</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white">
                        <span class="label label-danger m-r-10">+40%</span>From Previous Month
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-blue">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Booking</h6>
                            <h3 class="m-b-0 text-white">876</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-database text-c-blue f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white">
                        <span class="label label-primary m-r-10">+12%</span>From Previous Month
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-green">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Average Price</h6>
                            <h3 class="m-b-0 text-white">Rp.50 Jt</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign text-c-green f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white">
                        <span class="label label-success m-r-10">+54%</span>From Previous Month
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-yellow">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Antrean</h6>
                            <h3 class="m-b-0 text-white">38</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book text-c-yellow f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white">
                        <span class="label label-warning m-r-10">+5%</span>From Previous Month
                    </p>
                </div>
            </div>
        </div>
        {{-- ===== END STAT CARDS ===== --}}


        {{-- ===== TABEL RESERVASI ===== --}}
        <div class="col-xl-8 col-md-6">
            <div class="card table-card">

                <div class="card-header">
                    <div class="row mb-0">
                        <div class="col">
                            <h5 class="mt-3">Data Reservasi Terbaru</h5>
                        </div>
                        <div class="col-auto text-end">
                            <a class="btn btn-primary" href="{{ route('reservasi.create') }}">+ Tambah Reservasi</a>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 py-0">
                    <div class="table-responsive">
                        <div class="session-scroll" style="height:478px; position:relative;">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Stylist</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Layanan</th>
                                        <th>Style</th>
                                        <th>Tanggal Booking</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($reservasis as $reservasi)
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
                                                <a href="{{ route('reservasi.index') }}" class="btn btn-sm btn-info">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center py-4">
                                                <i class="feather icon-calendar f-40 text-muted"></i>
                                                <p class="text-muted mt-2">Belum ada data reservasi</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- ===== END TABEL RESERVASI ===== --}}


        {{-- ===== PROFILE CARD ===== --}}
        <div class="col-md-6 col-xl-4">
            <div class="card user-card">

                <div class="card-header">
                    <h5>Profile</h5>
                </div>

                <div class="card-body text-center">
                    <div class="user-image">
                        <img src="../assets/images/widget/Hermione Granger.jpg"
                             class="img-radius wid-100 m-auto"
                             alt="User-Profile-Image">
                    </div>

                    <h6 class="f-w-600 m-t-25 m-b-10">Hermione Granger</h6>
                    <p>Active | Female | Born 19.09.2009</p>
                    <hr>

                    <p class="m-t-15">Activity Level: 100%</p>
                    <div class="bg-c-blue counter-block m-t-10 p-20">
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-calendar-check text-white f-20"></i>
                                <h6 class="text-white mt-2 mb-0">1256</h6>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-user text-white f-20"></i>
                                <h6 class="text-white mt-2 mb-0">8562</h6>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-folder-open text-white f-20"></i>
                                <h6 class="text-white mt-2 mb-0">189</h6>
                            </div>
                        </div>
                    </div>

                    <p class="m-t-15">Kepercayaan anda adalah tanggung jawab kami.</p>
                    <hr>

                    <div class="row justify-content-center user-social-link">
                        <div class="col-auto">
                            <a href="#!"><i class="fab fa-instagram text-primary f-22"></i></a>
                        </div>
                        <div class="col-auto">
                            <a href="#!"><i class="fab fa-whatsapp text-c-info f-22"></i></a>
                        </div>
                        <div class="col-auto">
                            <a href="#!"><i class="fab fa-dribbble text-c-red f-22"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- ===== END PROFILE CARD ===== --}}

    </div>
    <!-- [ Main Content ] end -->

@endsection