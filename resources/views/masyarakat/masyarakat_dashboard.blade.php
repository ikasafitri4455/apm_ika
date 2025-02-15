
@extends('layouts.app')
@section('content')



    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Peduli Sekitar</h1>
            <p>Selamat datang di pengaduan masyarakat, ungkapkan segera keluhan tentang di sekitarmu!!</p>
            <div class="d-flex">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
        <p>Kami akan segera menindak lanjuti keluhan anda dengan secepatnya dan sebaik mung</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

        </div>

      </div>

    </section><!-- /About Section -->
    <style>
        .stats-item {
          flex-direction: column; /* Atur agar elemen tersusun vertikal */
          text-align: center; /* Pusatkan konten */
        }

        .stats-item i {
          font-size: 3rem; /* Perbesar ikon */
          margin-bottom: 10px;
          color: #007bff; /* Warna ikon */
        }

        .purecounter {
          font-size: 2.5rem; /* Ukuran angka */
          font-weight: bold;
          display: block;
        }

        .stats-item p {
          margin-top: 5px;
          font-size: 1rem;
        }
      </style>

      <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row justify-content-center text-center">

            <div class="col-md-4 col-sm-6">
              <div class="stats-item d-flex">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Masyarakat</strong></p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-md-4 col-sm-6">
              <div class="stats-item d-flex">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Pengaduan</strong></p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-md-4 col-sm-6">
              <div class="stats-item d-flex">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Kategori Pengaduan</strong></p>
              </div>
            </div><!-- End Stats Item -->

          </div>

        </div>
      </section>

      <!-- PureCounter Script -->
      <script src="https://cdn.jsdelivr.net/npm/purecounterjs@1.1.0/dist/purecounter_vanilla.js"></script>
      <script>
        new PureCounter();
      </script>

    <!-- Services Section -->
    <section id="tentang_kami" class="services section">


      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <i class="bi bi-bounding-box-circles"></i>
              <h4><a href="" class="stretched-link">Pelayanan 24 Jam</a></h4>
              <p>Pelayanan selama 24 jam, sampaikan aduan anda kapan saja, dimana saja dan berapa saja.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="" class="stretched-link">Identitas terlindungi</a></h4>
              <p>Setiap data identitas pengaduan yang dilakukan oleh masyarakat kami lindungi secara aman</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <i class="bi bi-broadcast"></i>
              <h4><a href="" class="stretched-link">Penanganan Cepat</a></h4>
              <p>Penanganan Pengaduan yang di sampaikan, akan kami proses secara cepat</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">


      </div>

    </section><!-- /Features Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">
      <div class="container">
    <!-- Contact Section -->
    <section id="tambah_pengaduan" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak Kami</h2>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Langensari desa Waringinsari 10/02</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>email</h3>
                <p>ikauser64@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Call Center</h3>
                <p>+62 085794013716</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
    <section id="create_pengaduan" class="create_pengaduan section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Daftar Pengaduan</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Masyarakat</th>
                                <th>Kategori Pengaduan</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Isi Laporan</th>
                                <th>Foto</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>




  <!-- Scroll Top -->


@endsection
