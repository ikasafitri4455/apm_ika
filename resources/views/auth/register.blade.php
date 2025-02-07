<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card shadow p-4 rounded">
                <h4 class="text-center mb-4">Form Register</h4>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" placeholder="contoh: 3201234556777">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select class="form-control">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="contoh: +6283858494949">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="alamat lengkap">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="contoh: apm@gmail.com">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan password">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-100">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
