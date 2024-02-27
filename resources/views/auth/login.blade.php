<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('/bglogin.jpg'); /* Menggunakan gambar latar belakang dari direktori publik */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: flex-end; /* Menempatkan konten di sebelah kanan halaman */
            align-items: center;
            font-family: 'Times New Roman', Times, serif; /* Mengatur gaya tulisan menjadi vintage */
        }
        .card {
            width: 350px;
            background-color: #f5e6da; /* Warna coklat muda untuk card */
            align-items: center;
        }
        .login-btn {
            width: 30%;
            background-color: #8b4513; /* Warna coklat muda untuk tombol login */
            color: white; /* Warna teks putih untuk tombol login */
            margin-top: 20px; /* Margin atas untuk tombol login */
            align-items: center;
            text-align: center;
            
        }
        .login-title {
            margin-bottom: 20px; /* Margin bawah untuk judul "Login" */
            font-size: 24px; /* Ukuran font judul "Login" */
            text-align: center; /* Menempatkan judul di sebelah kiri card */
        }
        .brand-text {
            font-size: 80px; /* Ukuran font untuk teks brand */
            margin-right: 60px;
        }
        .form-label{
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-4">
                <h2 class="brand-text">BUKU TAHUNAN DIGITAL</h2> <!-- Teks "BUKU TAHUNAN DIGITAL" -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title login-title">Login</h5> <!-- Menambahkan class login-title -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn login-btn">Login</button> <!-- Menambahkan class login-btn -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
