@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
<div class="min-vh-100 bg-light py-4">

    <div class="container">

        {{-- HEADER --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                    <div>
                        <h1 class="h3 fw-bold text-dark mb-1">
                            Luxury Padel
                        </h1>
                        <p class="text-muted mb-0">
                            Selamat Datang di Luxury Padel, Silakan reservasi dahulu untuk bermain padel.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- INFO SINGKAT --}}
        <div class="row g-3 mb-4">
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex">
                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-success-subtle text-success"
                             style="width: 44px; height: 44px;">
                            <i class="bi bi-building fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1 text-dark">Nama Tempat</h6>
                            <div class="small text-muted">Luxury Padel</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex">
                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary"
                             style="width: 44px; height: 44px;">
                            <i class="bi bi-telephone-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1 text-dark">Contact Person</h6>
                            <div class="small text-muted">+62 813-7340-0943</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex">
                        <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-info-subtle text-info"
                             style="width: 44px; height: 44px;">
                            <i class="bi bi-geo-alt-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1 text-dark">Kota</h6>
                            <div class="small text-muted">Palembang, Sumatera Selatan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- MAP + DETAIL LOKASI --}}
        <div class="row g-4">
            {{-- MAP --}}
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white border-0">
                        <h6 class="mb-0 fw-semibold text-dark">
                            Peta Lokasi Lapangan
                        </h6>
                        <small class="text-muted">
                            Jl. Soekarno Hatta No.824, Talang Klp., Kec. Alang-Alang Lebar, Kota Palembang, Sumatera Selatan 30153
                        </small>
                    </div>
                    <div class="card-body p-0">
                        <div style="height: 380px;">
                            <iframe
                                src="https://www.google.com/maps?q=Jl.+Soekarno+Hatta+No.824,+Talang+Klp.,+Alang-Alang+Lebar,+Palembang,+Sumatera+Selatan+30153&output=embed"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            {{-- INFO PANEL / QUICK ACTION --}}
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 mb-3">
                    <div class="card-body">
                        <h6 class="fw-semibold text-dark mb-2">Detail Lokasi</h6>
                        <p class="small text-muted mb-1">
                            Luxury Padel berlokasi di kawasan strategis dengan akses mudah dari pusat kota Palembang.
                        </p>

                        <div class="mt-3 small">
                            <div class="mb-2 d-flex">
                                <span class="me-2 text-secondary"><i class="bi bi-geo-alt-fill"></i></span>
                                <span>Jl. Soekarno Hatta No.824, Talang Klp., Kec. Alang-Alang Lebar, Kota Palembang, Sumatera Selatan 30153</span>
                            </div>
                            <div class="mb-2 d-flex">
                                <span class="me-2 text-secondary"><i class="bi bi-telephone-fill"></i></span>
                                <span>+62 813-7340-0943</span>
                            </div>
                            <div class="mb-2 d-flex">
                                <span class="me-2 text-secondary"><i class="bi bi-whatsapp"></i></span>
                                <span>WhatsApp / Booking Cepat</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- QUICK ACTION --}}
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h6 class="fw-semibold text-dark mb-3">Aksi Cepat</h6>
                        <div class="d-grid gap-2">
                            <a href="{{ url('lapangan') }}" class="btn btn-outline-success btn-sm">
                                <i class="bi bi-grid me-1"></i> Lihat Daftar Lapangan
                            </a>
                            <a href="{{ url('reservasi') }}" class="btn btn-success btn-sm">
                                <i class="bi bi-calendar-check me-1"></i> Buat Reservasi Baru
                            </a>
                            <a href="https://wa.me/6281373400943" target="_blank" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-whatsapp me-1"></i> Chat via WhatsApp
                            </a>
                        </div>
                        <p class="small text-muted mt-3 mb-0">
                            Gunakan menu di atas untuk mengelola jadwal permainan, memantau ketersediaan lapangan, dan memudahkan tamu melakukan booking.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
