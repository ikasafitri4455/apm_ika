  <!-- Logo Header -->
  <div class="logo-header" data-background-color="dark">
    <a href="index.html" class="logo">
      <img
        src="assetss/img/kaiadmin/logo_light.svg"
        alt="navbar brand"
        class="navbar-brand"
        height="20"
      />
    </a>
    <div class="nav-toggle">
      <button class="btn btn-toggle toggle-sidebar">
        <i class="gg-menu-right"></i>
      </button>
      <button class="btn btn-toggle sidenav-toggler">
        <i class="gg-menu-left"></i>
      </button>
    </div>
    <button class="topbar-toggler more">
      <i class="gg-more-vertical-alt"></i>
    </button>
  </div>
  <!-- End Logo Header -->
</div>
<!-- Navbar Header -->
<nav
  class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
>
  <div class="container-fluid ">
    <nav
      class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-4 d-none d-lg-flex"
    >
      <div class="input-group">
        <div class="input-group-prepend">
          <button type="submit" class="btn btn-search pe-1">
            <i class="fa fa-search search-icon"></i>
          </button>
        </div>
        <input
          type="text"
          placeholder="Search ..."
          class="form-control"
        />
      </div>
    </nav>

    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
      <li
        class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
      >
        <a
          class="nav-link dropdown-toggle"
          data-bs-toggle="dropdown"
          href="#"
          role="button"
          aria-expanded="false"
          aria-haspopup="true"
        >
          <i class="fa fa-search"></i>
        </a>
        <ul class="dropdown-menu dropdown-search animated fadeIn">
          <form class="navbar-left navbar-form nav-search">
            <div class="input-group">
              <input
                type="text"
                placeholder="Search ..."
                class="form-control"
              />
            </div>
          </form>
        </ul>
      </li>
      <li class="nav-item topbar-icon dropdown hidden-caret">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="messageDropdown"
          role="button"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <i class="fa fa-envelope"></i>
        </a>

      <li class="nav-item topbar-user dropdown hidden-caret me-4">
        <a
          class="dropdown-toggle profile-pic"
          data-bs-toggle="dropdown"
          href="#"
          aria-expanded="false"
        >
          <div class="avatar-sm">
            <img
              src="public/assets/img/Fotoapk.jpg"
              alt="..."
              class="avatar-img rounded-circle"
            />
          </div>
          <span class="profile-username">
            <span class="op-7">Hi,</span>
            <span class="fw-bold">{{auth()->user()->nama_lengkap}}</span>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-user animated fadeIn">
          <div class="dropdown-user-scroll scrollbar-outer">
            <li>
              <div class="user-box">
                <div class="avatar-lg">
                  <img
                    src="assets/img/profile.jpg"
                    alt="image profile"
                    class="avatar-img rounded"
                  />
                </div>
                <div class="u-text">
                  <h4>Ika Safitri</h4>
                  <p class="text-muted">ikauser64@gmail.com</p>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown-divider"></div>
              <a href="#" onclick="confirmLogout();" class="dropdown-item text-danger">
                Logout
            </a>
            </li>
          </div>
        </ul>
      </li>
    </ul>
  </div>
</nav>
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
