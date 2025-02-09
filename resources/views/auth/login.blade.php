<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .card {
            width: 350px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: white;
        }
        .btn-login {
            width: 100%;
            background-color: #007bff;
            color: white;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="card">
        <h4 class="text-center">Login</h4>
        <form action="/store/login" method="post" class="mt-4">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input name="username" type="text" class="form-control" value="{{old('username')}}" placeholder="Masukkan username">
                @error('username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control" value={{old('password')}} placeholder="Masukkan password">
                @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <button type="submit" class="btn btn-login">🔒 Login</button>
        </form>
        <div class="text-center mt-3">
            <p>Jika belum punya akun silahkan <a href="/register">daftar</a> terlebih dahulu</p>
        </div>
    </div>
</body>
</html>
