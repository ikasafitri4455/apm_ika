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
<section id="tambah_pengaduan" class="contact section py-5">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Contact</h2>
            <p class="text-muted">Silakan hubungi kami jika ada pertanyaan atau pengaduan.</p>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <div class="card p-4 mb-3">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-geo-alt fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Address</h5>
                            <p class="mb-0">A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-telephone fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Call Us</h5>
                            <p class="mb-0">+1 5589 55488 55</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-envelope fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Email Us</h5>
                            <p class="mb-0">info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card p-4">
                    <h4 class="text-center fw-bold mb-4">Kirim Pesan</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">

                                <input type="hidden" value="" name="masyarakat_id" id="masyarakat_id">


                                </div>
                                <div class="col-md-12">
                                    <label for="kategori_id" class="form-label fw-semibold">Masukan Kategori</label>
                                    <select name="kategori_id" class="form-control" required>
                                        <option value="{{old('kategori_id')}}">-- Pilih Kategori --</option>
                                        {{-- @foreach($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('kategori_id')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="foto">Upload Foto (Opsional)</label>
                                    <input type="file" id="foto" name="foto" class="form-control" accept="image/png, image/jpeg, image/jpg">
                                    @error('foto')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            <div class="col-md-12">
                                <label for="">isi pengaduan</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</section>
<!-- End Contact Section -->

@endsection
