<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">PS</h1>
      </a>

      <nav id="navmenu" class="navmenu" style="display: none;">
        <ul>
          <li><a href="#hero" class="active">Beranda<br></a></li>
          <li><a href="#tentang_kami">Tentang Kami</a></li>
          <li><a href="#tambah_pengaduan">Tambah Pengaduan</a></li>
          <li><a href="#create_pengaduan">Daftar Pengaduan</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a id="loginLink" class="btn-getstarted" href="/login" style="display: none;">Login</a>
      <a id="logoutLink" href="logout" class="btn-getstarted" style="display: none;">Log out</a>

      <script>
        // Simulasi status login (ganti sesuai dengan mekanisme sesungguhnya)
        var isLoggedIn = false; // Set true jika user sudah login

        if (isLoggedIn) {
          document.getElementById("navmenu").style.display = "block";
          document.getElementById("logoutLink").style.display = "inline-block";
        } else {
          document.getElementById("loginLink").style.display = "inline-block";
        }
      </script>


    </div>
  </header>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                    function confirmLogout() {
                        Swal.fire({
                        title: 'Apakah Anda yakin ingin logout?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, Logout',
                        cancelButtonText: 'Batal',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('logout-form').submit();
                        }
                        });
                    }
                    </script>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                    </form>

