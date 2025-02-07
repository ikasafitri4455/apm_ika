@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="fw-bold text-primary">Peduli Sekitar</h1>
                <p class="lead">Selamat datang di pengaduan masyarakat, ungkapkan segera keluhan tentang di sekitarmu!!</p>
                <a href="https://www.youtube.com/watch?v=x0PKYqeYwvo" class="btn btn-primary">Tonton Video</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="Hero Image">
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Contact Section -->
<section id="tambah_pengaduan" class="contact section py-5" style="background-color: #f8f9fa;">
    <div class="card    ">
        <!-- Section Title -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary">Contact</h2>
            <p class="text-muted">Silakan hubungi kami jika ada pertanyaan atau pengaduan.</p>
        </div>

        <!-- Tabel Pengaduan -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover border-2 shadow-lg">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="fw-bold text-center">No</th>
                        <th class="fw-bold">Nama Masyarakat</th>
                        <th class="fw-bold">Kategori</th>
                        <th class="fw-bold">Isi Pengaduan</th>
                        <th class="fw-bold">Lokasi</th>
                        <th class="fw-bold">Foto</th>
                        <th class="fw-bold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="text-center">1</td>
                        <td>Ahmad Nurrohmann</td>
                        <td><span class="badge bg-success">Lingkungan</span></td>
                        <td>Ada tumpukan sampah di pinggir jalan.</td>
                        <td>Jl. Merdeka No. 10</td>
                        <td><img src="https://via.placeholder.com/50" class="img-thumbnail" alt="Foto Pengaduan"></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-success">Detail</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>winda dudung reva</td>
                        <td><span class="badge bg-warning text-dark">Pelayanan Publik</span></td>
                        <td>Pelayanan di kantor kelurahan sangat lambat.</td>
                        <td>Jl. Kartini No. 22</td>
                        <td><img src="https://via.placeholder.com/50" class="img-thumbnail" alt="Foto Pengaduan"></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-success">Detail</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- End Contact Section -->

@endsection
