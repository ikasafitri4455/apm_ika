<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APM - Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            margin-top: 50px;
        }
        .navbar-nav .nav-link {
            font-weight: bold;
            color: #000;
        }
        .navbar-nav .nav-link.active {
            color: #28a745;
        }
        .card {
            padding: 20px;
        }
        .btn-login {
            background-color: #198754;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">APM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Information</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak Kami</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Register / Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Form Login & Register -->
<div class="container form-container">
    <div class="row">
        <!-- Login Form -->
        <div class="col-md-4">
            <div class="card">
                <h4 class="text-center">Login</h4>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="password" class="form-control" placeholder="Masukkan password">
                    </div>
                    <button type="submit" class="btn btn-login">🔒 Login</button>
                </form>
                <div>
                    <p>jika belum punya akun silahkan <a href="/register">daftar</a> terlebih dahulu</p>
                </div>
            </div>
        </div>
        <!-- Register Form -->


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
