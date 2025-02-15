<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #56ab2f, #a8e063);
        }
        .form-container {
            margin-top: 50px;
        }
        .card {
            padding: 30px;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-register {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s ease-in-out;
        }
        .btn-register:hover {
            background-color: #218838;
        }
        .form-control {
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card shadow-lg p-4 rounded">
                <img src="{{asset('assets/img/logoapk.png')}}" alt="logo apk" width="50px" class="d-block mx-auto mb-3">
                <h3 class="text-center mb-4 text-success">Form Registrasi</h3>
                <form action="/store/register" method="post">
                    @csrf

                    <div class="form-group">
                        <label><strong>NIK</strong></label>
                        <input name="nik" value="{{old('nik')}}" type="text"  class="form-control" placeholder="masukan nik">
                        @error('nik')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Nama Lengkap</strong></label>
                        <input name="nama_lengkap" value="{{old('nama_lengkap')}}" type="text" class="form-control" placeholder="masukan nama lengkap">
                        @error('nama_lengkap')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Jenis Kelamin</strong></label>
                        <select name="jenis_kelamin" class="form-control" >
                            <option value="{{old('jenis_kelamin')}}">-- Pilih Jenis Kelamin --</option>
                            <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Username</strong></label>
                        <input name="username" value="{{old('username')}}" type="text" class="form-control" placeholder="masukan username">
                        @error('username')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Password</strong></label>
                        <input name="password" value="{{old('password ')}}" type="password" class="form-control" placeholder="masukan password">
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>No Telepon</strong></label>
                        <input name="no_telepon" value="{{old('no_telepon')}}" type="text" class="form-control" placeholder="masukan nomor telepon">
                        @error('no_telepon')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Alamat</strong></label>
                        <textarea name="alamat" value="{{old('alamat')}}" class="form-control" placeholder="masukan alamat"></textarea>
                        @error('alamat')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label><strong>Role</strong></label>
                        <select name="role" class="form-control">
                            <option value="{{old('role')}}">-- Pilih Role --</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="petugas" {{ old('role') == 'petugas' ? 'selected' : '' }}>Petugas</option>
                            <option value="masyarakat" {{ old('role') == 'masyarakat' ? 'selected' : '' }}>Masyarakat</option>
                        </select>
                        @error('role')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block mt-2">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
